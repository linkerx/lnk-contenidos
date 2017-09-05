<?php
add_action('save_post','lnk_contenidos_serie_save');

function lnk_contenidos_serie_save($id) {
    global $wpdb,$post_type;
    if($post_type == 'serie'){
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
                return $id;
        if (defined('DOING_AJAX') && DOING_AJAX)
                return $id;

        update_post_meta($id,'lnk_contenidos_serie_inicio',$_POST['lnk_contenidos_serie_inicio_input']);
        update_post_meta($id,'lnk_contenidos_serie_fin',$_POST['lnk_contenidos_serie_fin_input']);
    }
}
