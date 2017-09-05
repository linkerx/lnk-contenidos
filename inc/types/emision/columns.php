<?php

add_filter ('manage_posts_columns', 'lnk_contenidos_emision_columns');
add_action ('manage_posts_custom_column', 'lnk_contenidos_emision_columns_values');

function lnk_contenidos_emision_columns($columns) {
    global $post_type;
    if($post_type == 'emision'){
        // $columns['nombre'] = "Nombre";
    }
    return $columns;
}

function lnk_contenidos_emision_values($column_name) {
    global $wpdb, $post;
    $id = $post->ID;

    if($post->post_type == 'emision'){
        $id = $post->ID;
        if($column_name === 'nombre'){
            //print get_post_meta($id,'sarasa',true);
        }

    }
}
