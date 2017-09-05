<?php
add_action('save_post','lnk_contenidos_programa_save');

function lnk_contenidos_programa_save($id) {
    global $wpdb,$post_type;
    if($post_type == 'programa'){
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
                return $id;
        if (defined('DOING_AJAX') && DOING_AJAX)
                return $id;

        update_post_meta($id,'lnk_contenidos_programa_inicio',$_POST['lnk_contenidos_programa_inicio_input']);
        update_post_meta($id,'lnk_contenidos_programa_fin',$_POST['lnk_contenidos_programa_fin_input']);
    }
}
