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
