<?php

mnt_remove_admin_top_menu([
    'wp-logo',
    'comments',
    'new-content',
]);

mnt_remove_admin_menu([
    'edit.php', //posts
    'edit-comments.php', //comments
    'upload.php', //media
    'link-manager.php', //links
    'edit.php?post_type=page', //pages
    'themes.php', //appearance
    'plugins.php', //plugins
    'admin.php?page=activity_log_page', //plugins
    'tools.php', //tools
    'options-general.php', //configs
], ['androrim']);
