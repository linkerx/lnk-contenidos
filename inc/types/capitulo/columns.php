<?php

add_filter ('manage_posts_columns', 'lnk_contenidos_capitulo_columns');
add_action ('manage_posts_custom_column', 'lnk_contenidos_capitulo_columns_values');

function lnk_contenidos_capitulo_columns($columns) {
    global $post_type;
    if($post_type == 'capitulo'){
        // $columns['nombre'] = "Nombre";
    }
    return $columns;
}

function lnk_contenidos_capitulo_values($column_name) {
    global $wpdb, $post;
    $id = $post->ID;

    if($post->post_type == 'capitulo'){
        $id = $post->ID;
        if($column_name === 'nombre'){
            //print get_post_meta($id,'sarasa',true);
        }

    }
}
