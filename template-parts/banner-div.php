<?php
$image_name = null;
$image_alt = null;

if (isset($args['image_name'])) {
    $image_name = $args['image_name'];
}

if (isset($args['image_alt'])) {
    $image_alt = $args['image_alt'];
}
?>

<?php if (!is_null($image_name)) : ?>

    <a title="<?= $image_alt ?>" href="#">
        <img class="mobile" alt="<?= $image_alt ?>" title="<?= $image_alt ?>" src="<?= get_bloginfo('template_url') ?>/assets/img/<?= $image_name ?>.jpg" />
        <img class="desktop" alt="<?= $image_alt ?>" title="<?= $image_alt ?>" src="<?= get_bloginfo('template_url') ?>/assets/img/<?= $image_name ?>-1280x240.jpg" />
    </a>

<?php endif ?>