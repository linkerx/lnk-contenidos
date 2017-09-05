<?php
add_action('save_post','lnk_contenidos_unitario_save');

function lnk_contenidos_unitario_save($id) {
    global $wpdb,$post_type;
    if($post_type == 'unitario'){
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
                return $id;
        if (defined('DOING_AJAX') && DOING_AJAX)
                return $id;

    }
}
