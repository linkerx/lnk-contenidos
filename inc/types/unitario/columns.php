<?php

add_filter ('manage_posts_columns', 'lnk_contenidos_unitario_columns');
add_action ('manage_posts_custom_column', 'lnk_contenidos_unitario_columns_values');

function lnk_contenidos_unitario_columns($columns) {
    global $post_type;
    if($post_type == 'unitario'){
        // $columns['nombre'] = "Nombre";
    }
    return $columns;
}

function lnk_contenidos_unitario_values($column_name) {
    global $wpdb, $post;
    $id = $post->ID;

    if($post->post_type == 'unitario'){
        $id = $post->ID;
        if($column_name === 'nombre'){
            //print get_post_meta($id,'sarasa',true);
        }

    }
}
