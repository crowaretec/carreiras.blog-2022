<?php get_header(); ?>

<?php
$meta_query = [
    // [
    //     'key' => '_destaque',
    //     'value' => 1,
    //     'compare' => '!=',
    // ],
    // [
    //     'key' => '_destaque_principal',
    //     'value' => 1,
    //     'compare' => '!=',
    // ],
    [
        'key' => '_destaque_home',
        'value' => 1,
        'compare' => '=',
    ],
];
?>

<section class="archives container container-fluid noticias">
    <?php get_template_part('template-parts/archive', 'default', [
        'category' => 'noticias-categoria',
        'class' => 'big-first',
        'query' => [
            'post_type' => 'noticias',
            'showposts' => wp_is_mobile() ? 3 : 4,
        ]
    ]); ?>

    <a class="btn btn-orange-outline mt-3" title="Notícias" href="<?= home_url('/noticias') ?>">Ver mais Notícias Recentes</a>
</section>

<section class="archives bg-white container container-fluid container-rounded mt-1">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Notícias',
        'subtitle' => 'Notícias',
        'category' => 'noticias-categoria',
        'query' => [
            'post_type' => 'noticias',
            'meta_query' => $meta_query,
        ]
    ]); ?>
</section>

<section class="banner-div mt-3">
    <?php get_template_part('template-parts/banner', 'div', [
        'image_name' => 'empregos-podcast',
        'image_alt' => 'Seu Podcast de Empregos - Empregos Podcast',
    ]) ?>
</section>

<section class="archives bg-white container container-fluid container-rounded mt-3">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Testes',
        'subtitle' => 'Testes',
        'category' => 'testes-categoria',
        'class' => 'big-last',
        'title_length' => 28,
        'query' => [
            'post_type' => 'teste',
            'meta_query' => $meta_query,
            'showposts' => 3,
        ]
    ]); ?>
</section>

<section class="archives bg-white container container-fluid container-rounded mt-1">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Guia de Profissões',
        'subtitle' => 'Guia de Profissões',
        'content_limit' => 28,
        'query' => [
            'post_type' => 'profissao',
            'profissoes-categoria' => 'guia-de-profissoes'
        ]
    ]); ?>
</section>

<section class="archives bg-blue container container-fluid container-rounded mt-3">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Profissões',
        'subtitle' => 'Profissões',
        'category' => 'profissoes-categoria',
        'show_thumb' => false,
        'query' => [
            'post_type' => 'profissao',
            'tax_query' => [[
                'taxonomy' => 'profissoes-categoria',
                'terms' => 'guia-de-profissoes',
                'field' => 'slug',
                'include_children' => true,
                'operator'  => 'NOT IN'
            ]]
        ]
    ]); ?>
</section>

<section class="banner-div mt-3">
    <?php get_template_part('template-parts/banner', 'div', [
        'image_name' => 'encontre-tudo-trabalho',
        'image_alt' => 'Encontre Tudo o que Você Precisa Saber Sobre o Mercado de Trabalho',
    ]) ?>
</section>

<section class="archives bg-white container container-fluid container-rounded mt-3">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Salários',
        'subtitle' => 'Salários',
        'category' => 'salarios-categoria',
        'class' => 'big-last',
        'query' => [
            'post_type' => 'salarios',
            'meta_query' => $meta_query,
        ]
    ]); ?>
</section>

<section class="archives bg-blue container container-fluid container-rounded mt-3">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Cursos e Eventos',
        'subtitle' => 'Cursos e Eventos',
        'category' => 'cursos-categoria',
        'show_thumb' => false,
        'query' => [
            'post_type' => 'curso-evento',
            'meta_query' => $meta_query,
        ]
    ]); ?>
</section>

<section class="archives bg-white container container-fluid container-rounded mt-3">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Mercado',
        'subtitle' => 'Mercado',
        'category' => 'mercado-categoria',
        'query' => [
            'post_type' => 'mercado',
            'meta_query' => $meta_query,
        ]
    ]); ?>
</section>

<section id="colunistas" class="archives bg-white container container-fluid container-rounded mt-3">
    <?php get_template_part('template-parts/authors') ?>
</section>


<section class="archives bg-blue container container-fluid mt-3">
    <?php get_template_part('template-parts/archive', 'default', [
        'title' => 'Seu Emprego',
        'subtitle' => 'Seu Emprego',
        'category' => 'empregos-categoria',
        'show_thumb' => false,
        'query' => [
            'post_type' => 'seu-emprego',
            'shoposts' => wp_is_mobile() ? 3 : 7,
            'meta_query' => $meta_query,
        ]
    ]); ?>
</section>

<?php get_footer(); ?>