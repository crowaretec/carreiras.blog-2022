<?php

$show_thumb = true;
$count_post = 1;
$category = null;
$title_length = -1; // characters
$content_limit = 55; // words

if (isset($args['show_thumb'])) {
    $show_thumb = $args['show_thumb'];
}

if (isset($args['count_post'])) {
    $count_post = $args['count_post'];
}

if (isset($args['category'])) {
    $category = $args['category'];
}

if (isset($args['title_length'])) {
    $title_length = $args['title_length'];
}

if (isset($args['content_limit'])) {
    $content_limit = $args['content_limit'];
}

?>

<article class="mt-3 <?= $count_post % 2 === 0 ? 'even' : 'odd' ?>">
    <?php if (has_post_thumbnail() && $show_thumb) : ?>
        <div class="img-wrap item">
            <?php the_post_thumbnail('image-thumbnail', ['title' => get_the_title()]) ?>
        </div>
    <?php endif ?>

    <div class="article-body item">
        <?php $ct = mnt_post_term_name(get_the_ID(), $category, 0); ?>

        <h3 class="h3 mt-1" title="<?= $ct ?>"><?= $ct ?></h3>

        <h4 class="h4 mt-05">
            <?php $the_title = $title_length > -1 ? mnt_excerpt_title($title_length) : get_the_title(); ?>
            <a title="<?= the_title() ?>" href="<?php the_permalink() ?>">
                <?= $the_title ?>
            </a>
        </h4>

        <p class="mt-05"><?= $content_limit < 55 ? mnt_excerpt_content($content_limit) : get_the_excerpt(); ?></p>

        <a class="btn btn-orange mt-2" title="<?php the_title() ?>" href="<?php the_permalink() ?>">
            <?php _e('Ler mais') ?>
        </a>
    </div>

</article>