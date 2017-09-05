<?php
add_action('save_post','lnk_contenidos_capitulo_save');

function lnk_contenidos_capitulo_save($id) {
    global $wpdb,$post_type;
    if($post_type == 'capitulo'){
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
                return $id;
        if (defined('DOING_AJAX') && DOING_AJAX)
                return $id;

        update_post_meta($id,'lnk_contenidos_capitulo_fecha',$_POST['lnk_contenidos_capitulo_fecha_input']);
        update_post_meta($id,'lnk_contenidos_capitulo_numero',$_POST['lnk_contenidos_capitulo_numero_input']);
    }
}
