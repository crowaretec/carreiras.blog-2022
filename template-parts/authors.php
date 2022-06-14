<header>
    <h1 class="h1">Colunistas</h1>

    <h2 class="h2 mt-1 mb-2">
        <a href="<?php home_url('/colunistas') ?>">Ir para Colunistas <i class="fa-solid fa-chevron-right"></i></a>
    </h2>
</header>

<?php $users = get_users([
    'fields'  => [
        'ID',
        'display_name',
        'user_nicename',
    ],
    'role'    => 'subscriber',
    'orderby' => 'rand',
    'number'  => 3,
]) ?>

<div class="articles">

    <?php foreach ($users as $user) : /*if (carreiras_count_user_postts($user) > 1) :*/ ?>

        <article class="mt-3">
            <div class="img-rounded">
                <a href="<?= get_author_posts_url($user->ID, $user->user_nicename) ?>">
                    <img src="<?= get_avatar_url($user->ID, ['size' => 210]) ?>" alt="<?= $user->display_name ?>">
                </a>
            </div>

            <h3 class="h2 mt-1" title="<?= $user->display_name ?>">
                <a href="<?= get_author_posts_url($user->ID, $user->user_nicename) ?>"><?= $user->display_name ?></a>
            </h3>

            <p class="mt-1"><?= get_user_meta($user->ID, 'description', true) ?></p>
        </article>

    <?php //endif;
    endforeach ?>

</div>