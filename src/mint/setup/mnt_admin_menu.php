<?php

mnt_remove_admin_top_menu([
    'wp-logo',
    'comments',
    'new-content',
]);

mnt_remove_admin_menu([
    'edit.php', //posts
    'edit-comments.php', //comments
    'upload.php', //midia
    'link-manager.php', //links
    'edit.php?post_type=page', //pages
    'themes.php', //apearence
    'plugins.php', //plugins
    'admin.php?page=activity_log_page', //plugins
    'tools.php', //tools
    'options-general.php', //configs
], ['androrim']);
