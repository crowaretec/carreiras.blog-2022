<?php
$post_type = null;
$title = null;
$subtitle = null;
$category = null;
$show_thumb = true;
$showposts = 3;
$class = 'default';
$title_length = -1; // characters
$content_limit = 55; // words

$query = [];


if (isset($args['query'])) {
    $query = $args['query'];
    $query['showposts'] = $showposts;

    if (isset($args['query']['post_type'])) {
        $post_type = $args['query']['post_type'];
    }


    if (isset($args['query']['showposts'])) {
        $showposts = $args['query']['showposts'];
        $query['showposts'] = $args['query']['showposts'];
    }
}


if (isset($args['title'])) {
    $title = $args['title'];
}

if (isset($args['subtitle'])) {
    $subtitle = $args['subtitle'];
}

if (isset($args['category'])) {
    $category = $args['category'];
}

if (isset($args['show_thumb'])) {
    $show_thumb = $args['show_thumb'];
}

if (isset($args['class'])) {
    $class = $args['class'];
}

if (isset($args['title_length'])) {
    $title_length = $args['title_length'];
}

if (isset($args['content_limit'])) {
    $content_limit = $args['content_limit'];
}

?>

<header>
    <?php if ($title) : ?>
        <h1 class="h1" title="<?= $title ?>"><?= $title ?></h1>
    <?php endif ?>


    <?php if ($subtitle) : ?>
        <h2 class="h2 mt-1 mb-2">
            <a href="<?php home_url('/' . $post_type) ?>">Ir para <?= $subtitle ?> <i class="fa-solid fa-chevron-right"></i></a>
        </h2>
    <?php endif ?>
</header>

<?php query_posts($query) ?>

<div class="articles <?= $class ?>">

    <?php 
    $count_post = 0;

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $count_post += 1;

            get_template_part('template-parts/components/article', 'default', [
                'count_post' => $count_post,
                'show_thumb' => $show_thumb,
                'title_length' => $title_length,
                'content_limit' => $content_limit,
                'category' => $category,
            ]);
        }
    }
    ?>

</div>

<?php wp_reset_query() ?>