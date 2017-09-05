<?php
add_action('save_post','lnk_contenidos_emision_save');

function lnk_contenidos_emision_save($id) {
    global $wpdb,$post_type;
    if($post_type == 'emision'){
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
                return $id;
        if (defined('DOING_AJAX') && DOING_AJAX)
                return $id;

        update_post_meta($id,'lnk_contenidos_emision_fecha',$_POST['lnk_contenidos_emision_fecha_input']);
        update_post_meta($id,'lnk_contenidos_emision_numero',$_POST['lnk_contenidos_emision_numero_input']);
    }
}
