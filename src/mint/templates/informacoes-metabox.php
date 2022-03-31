<?php mnt_nonce_field('informacoes', 'metabox'); ?>

<p>
    <label for="fonte">Fonte</label>
    <input style="width: 100%;" type="text" name="fonte" value="<?php echo get_post_meta($post->ID, '_fonte', true); ?>" />
</p>
<p>
    <label for="link">Link</label>
    <input style="width: 100%;" type="text" name="link" value="<?php echo get_post_meta($post->ID, '_link', true); ?>" />
</p>
<p>
    <label for="destaque-home">Destaque Home</label>
    <input type="checkbox" name="destaque-home" value="1" <?php if (get_post_meta($post->ID, '_destaque_home', true) == 1) echo 'checked'; ?> />
</p>
<p>
    <label for="destaque">Destaque Principal</label>
    <input type="checkbox" name="destaque-principal" value="1" <?php if (get_post_meta($post->ID, '_destaque_principal', true) == 1) echo 'checked'; ?> />
</p>
<p>
    <label for="destaque">Destaque</label>
    <input type="checkbox" name="destaque" value="1" <?php if (get_post_meta($post->ID, '_destaque', true) == 1) echo 'checked'; ?> />
</p>