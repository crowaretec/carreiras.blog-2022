<?php

add_action('init', function () {

    $post_types = [];

    $post_types[] = [
        'slug' => 'noticias',
        'name' => 'Notícias',
        'singular' => 'Noticia',
        'support' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'tags'
        ],
        'taxonomy' => [[
            'slug' => 'noticias-categoria',
            'name' => 'Categorias'
        ]],
        'icon' => 'dashicons-megaphone'
    ];

    $post_types[] = [
        'slug' => 'seu-emprego',
        'name' => 'Seu Emprego',
        'singular' => 'Seu Emprego',
        'support' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'tags'
        ],
        'taxonomy' => [[
            'slug' => 'empregos-categoria',
            'name' => 'Categorias'
        ]],
        'icon' => 'dashicons-unlock'
    ];

    $post_types[] = [
        'slug' => 'profissao',
        'name' => 'Profissões',
        'singular' => 'Profissão',
        'support' => ['title', 'editor', 'thumbnail', 'excerpt', 'tags'],
        'taxonomy' => [[
            'slug' => 'profissoes-categoria',
            'name' => 'Categorias'
        ]],
        'icon' => 'dashicons-businessman'
    ];

    $post_types[] = [
        'slug' => 'salarios',
        'name' => 'Salarios',
        'singular' => 'Salario',
        'support' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'tags'
        ],
        'taxonomy' => [[
            'slug' => 'salarios-categoria',
            'name' => 'Categorias'
        ]],
        'icon' => 'dashicons-money-alt'
    ];

    $post_types[] = [
        'slug' => 'mercado',
        'name' => 'Mercado',
        'singular' => 'Mercado',
        'support' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'tags'
        ],
        'taxonomy' => [[
            'slug' => 'mercado-categoria',
            'name' => 'Categorias'
        ]],
        'icon' => 'dashicons-admin-site-alt'
    ];

    $post_types[] = [
        'slug' => 'curso-evento',
        'name' => 'Cursos e Eventos',
        'singular' => 'Cursos e Eventos',
        'support' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'tags'
        ],
        'taxonomy' => [[
            'slug' => 'cursos-categoria',
            'name' => 'Categorias'
        ]],
        'icon' => 'dashicons-awards'
    ];

    $post_types[] = [
        'slug' => 'teste',
        'name' => 'Testes',
        'singular' => 'Teste',
        'support' => [
            'title',
            'excerpt',
            'editor',
            'thumbnail'
        ],
        'taxonomy' => [[
            'slug' => 'testes-categoria',
            'name' => 'Categorias'
        ]],
        'icon' => 'dashicons-welcome-write-blog'
    ];

    $post_types[] = [
        'slug' => 'publicidade',
        'name' => 'Publicidades',
        'singular' => 'Publicidade',
        'support' => ['title'],
        'icon' => 'dashicons-share'
    ];

    mnt_create_ctp($post_types);
});

add_action('add_meta_boxes', function () {

    mnt_add_meta_box('informacoes', 'Informações', [
        'noticias',
        'seu-emprego',
        'profissao',
        'salarios',
        'mercado',
        'curso-evento',
        'teste',
    ]);

    mnt_add_meta_box('guia-processos', 'Guia processos seletivos', 'seu-emprego');
});

add_action('save_post', function ($post_id, $post) {

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (mnt_wp_verify_nonce('informacoes', 'metabox')) {
        $fonte = isset($_POST['fonte']) ? strip_tags($_POST['fonte']) : null;
        $link = isset($_POST['link']) ? strip_tags($_POST['link']) : null;
        $destaque = isset($_POST['destaque']) ? 1 : 0;
        $destaque_home = isset($_POST['destaque-home']) ? 1 : 0;
        $destaque_principal = isset($_POST['destaque-principal']) ? 1 : 0;

        update_post_meta($post_id, '_fonte', $fonte);
        update_post_meta($post_id, '_link', $link);
        update_post_meta($post_id, '_destaque', $destaque);
        update_post_meta($post_id, '_destaque_principal', $destaque_principal);
        update_post_meta($post_id, '_destaque_home', $destaque_home);
    }
    
    if (mnt_wp_verify_nonce('guia_processos', 'metabox')) {
        $aparece = isset($_POST['aparece-guia-processos']) ? 1 : 0;
        update_post_meta($post_id, '_aparece_guia_processos', $aparece);
    }

}, 10, 2);
