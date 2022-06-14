<?php

require_once TEMPLATEPATH . '/src/mint/mint.php';


function carreiras_count_user_postts($user)
{
    $count = count_user_posts($user->ID, 'noticias');
    $count += count_user_posts($user->ID, 'seu-emprego');
    $count += count_user_posts($user->ID, 'profissao');
    $count += count_user_posts($user->ID, 'salarios');
    $count += count_user_posts($user->ID, 'mercado');
    $count += count_user_posts($user->ID, 'curso-evento');
    $count += count_user_posts($user->ID, 'teste');

    return $count;
}

add_action('init', function () {

    add_rewrite_rule(
        'colunistas/([a-z0-9-]+)/?$',
        'index.php?pagename=colunistas&colunista_nicename=$matches[1]',
        'top'
    );
});

add_filter('query_vars', function ($query_vars) {

    $query_vars[] = 'colunista_nicename';
    return $query_vars;
});

add_action('template_include', function ($template) {

    $nicename = get_query_var('colunista_nicename');

    if ($nicename == false ||  $nicename == '') {
        return $template;
    }

    return get_template_directory() . '/colunistas.php';
});
