<?php

function mnt_remove_admin_bar_menu($admin_bar, $array)
{
	foreach ($array as $item) {
		$admin_bar->remove_menu($item);
	}

	return $admin_bar;
}

function mnt_remove_admin_bar_node($admin_bar, $array)
{
	foreach ($array as $item) {
		$admin_bar->remove_node($item);
	}

	return $admin_bar;
}

function mnt_remove_menu_page($pages)
{
	foreach ($pages as $page) {
		remove_menu_page($page);
	}
}

function mnt_remove_submenu_page($subPages)
{
	foreach ($subPages as $page => $subPage) {
		remove_submenu_page($page, $subPage);
	}
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

function mnt_create_ctp($postTypes)
{
	foreach ($postTypes as $postType) {
		unset($postType['support']['tags']);

		$labels = [
			'name' => __($postType['name']),
			'singular_name' => __($postType['singular']),
			'add_new' => __('Adicionar'),
			'add_new_item' => __('Adicionar ' . $postType['singular']),
			'edit_item' => __('Editar'),
			'new_item' => __('Nova ' . $postType['singular']),
			'all_items' => __('Listar ' . $postType['name']),
			'view_item' => __('Ver ' . $postType['singular']),
			'search_items' => __('Buscar ' . $postType['singular']),
			'featured_image' => 'Imagem Destacada',
			'set_featured_image' => 'Adicionar Imagem Destacada'
		];

		$params = array(
			'labels' => $labels,
			'public' => true, //nao altera
			'supports' => $postType['support'],
			'taxonomies' => array('post_tag')
		);

		if (isset($postType['icon'])) {
			$params['menu_icon'] = $postType['icon'];
		}

		register_post_type($postType['slug'], $params);

		if (isset($postType['taxonomy'])) {
			foreach ($postType['taxonomy'] as $taxonomy) {
				register_taxonomy(
					$taxonomy['slug'], //Nome da categoria
					array($postType['slug']), //post type de referencia
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
