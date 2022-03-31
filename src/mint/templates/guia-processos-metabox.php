<?php mnt_nonce_field('guia_processos', 'metabox'); ?>

<p>
    <label for="destaque">Mostrar no Guia de Processos?</label>
    <input type="checkbox" name="aparece-guia-processos" value="1" <?php if (get_post_meta($post->ID, '_aparece_guia_processos', true) == 1) echo 'checked'; ?> />
</p>