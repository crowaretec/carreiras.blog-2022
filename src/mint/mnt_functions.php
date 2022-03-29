<?php

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
