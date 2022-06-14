<?php

function mnt_hide_admin_bar()
{
	add_filter('show_admin_bar', function () {
		return false;
	});
}

function mnt_remove_admin_top_menu(array $admin_bar_items, array $allows = [])
{
	add_action('admin_bar_menu', function (WP_Admin_Bar $admin_bar) use ($admin_bar_items, $allows) {
		$user = wp_get_current_user();

		if (!in_array($user->user_login, $allows)) {
			foreach ($admin_bar_items as $item) {
				$admin_bar->remove_menu($item);
			}
		}

		return $admin_bar;
	}, 999);
}

function mnt_remove_admin_menu(array $menu_items, array $allows = [])
{
	add_action('admin_menu', function () use ($menu_items, $allows) {
		$user = wp_get_current_user();

		if (!in_array($user->user_login, $allows)) {
			foreach ($menu_items as $item) {
				remove_menu_page($item);
			}
		}
	});
}

function mnt_header_scripts($scripts)
{
	foreach ($scripts as $script) {
		wp_register_style($script['name'], $script['url'], array(), $script['version']);
		wp_enqueue_style($script['name']);
	}
}

function mnt_footer_scripts($scripts)
{
	foreach ($scripts as $script) {
		wp_register_script($script['name'], $script['url'], array(), $script['version']);
		wp_enqueue_script($script['name']);
	}
}

function mnt_create_ctp($post_types)
{
	foreach ($post_types as $post_type) {
		unset($post_type['support']['tags']);

		$labels = [
			'name' => __($post_type['name']),
			'singular_name' => __($post_type['singular']),
			'add_new' => __('Adicionar'),
			'add_new_item' => __('Adicionar ' . $post_type['singular']),
			'edit_item' => __('Editar'),
			'new_item' => __('Nova ' . $post_type['singular']),
			'all_items' => __('Listar ' . $post_type['name']),
			'view_item' => __('Ver ' . $post_type['singular']),
			'search_items' => __('Buscar ' . $post_type['singular']),
			'featured_image' => 'Imagem Destacada',
			'set_featured_image' => 'Adicionar Imagem Destacada'
		];

		$params = array(
			'labels' => $labels,
			'public' => true, //nao altera
			'has_archive' => true,
			'supports' => $post_type['support'],
			'taxonomies' => array('post_tag')
		);

		if (isset($post_type['icon'])) {
			$params['menu_icon'] = $post_type['icon'];
		}

		register_post_type($post_type['slug'], $params);

		if (isset($post_type['taxonomy'])) {
			foreach ($post_type['taxonomy'] as $taxonomy) {
				register_taxonomy(
					$taxonomy['slug'], //Nome da categoria
					array($post_type['slug']), //post type de referencia
					array(
						'hierarchical' => true, //padrao
						'label' => __($taxonomy['name']), //Nome que aparecera no menu 
						'show_ui' => true, //padrao
						'show_in_tag_cloud' => true, //padrao
						'query_var' => true, //padrao
						'rewrite' => array(
							'slug' => $taxonomy['slug'] //slug (nome de referencia) da categoria
						),
					)
				);
			}
		}
	}
}

function mnt_add_meta_box($id, $title, $screen = null)
{
	add_meta_box(
		"mnt-metabox-{$id}",
		$title,
		function ($post) use ($id) {
			require MINT_PATH . "/templates/{$id}-metabox.php";
		},
		$screen
	);
}

function mnt_wp_verify_nonce($nonce, $context)
{
	return isset($_POST["mint_{$nonce}_nonce"])
		&& wp_verify_nonce($_POST["mint_{$nonce}_nonce"], "mint_{$nonce}_{$context}_nonce");
}

function mnt_nonce_field($nonce, $context, $echo = true)
{
	return wp_nonce_field("mint_{$nonce}_{$context}_nonce", "mint_{$nonce}_nonce", true, $echo);
}

function mnt_theme_thumbnail_support($thumbs_settings = [])
{
	if (!function_exists('add_theme_support')) {
		return;
	}

	add_theme_support('post-thumbnails');

	$default_settings = [
		'name' => 'image-thumbnail',
		'width' => 480,
		'height' => 271,
		'crop' => true,
	];

	foreach ($thumbs_settings as $thumb_settings) {
		$settings = $default_settings;

		if (is_array($thumb_settings)) {
			$settings = array_merge($default_settings, $thumb_settings);
		}

		add_image_size($settings['name'], $settings['width'], $settings['height'], $settings['crop']);
	}
}

function mnt_post_term_name($post_id, $taxonomy, int $index = -1)
{
	$taxonomies = get_the_terms($post_id, $taxonomy);
	$results = [];


	if (empty($taxonomies) || is_wp_error($taxonomies)) {
		return $index > -1 ? null : [];
	}

	foreach ($taxonomies as $tax_item) {
		$results[] = $tax_item->name;
	}

	if ($index > -1) {
		return isset($results[$index]) ? $results[$index] : null;
	}

	return $results;
}

function mnt_excerpt_title($length = 30, $post = 0, $after = '...')
{
	$my_title = get_the_title($post);

	if (strlen($my_title) > $length) {
		$my_title = substr($my_title, 0, $length);
	}

	return $my_title . $after;
}

function mnt_excerpt_content($limit = 55, $post = null, $after = '...')
{
	$excerpt = explode(' ', get_the_excerpt($post), $limit);
	$count = count($excerpt);

	if ($count >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . $after;
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	return preg_replace('`\[[^\]]*\]`', '', $excerpt);

}
