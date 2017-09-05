<?php

add_action('init', 'lnk_contenidos_register_cpt_unitario');

function lnk_contenidos_register_cpt_unitario(){

    $labels = array(
        'name' => __('unitarios','unitario_name'),
        'singular_name' => __('unitario','unitario_singular_name'),
        'menu_name' => __('unitarios','unitario_menu_name'),
        'all_items' => __('Lista de unitarios','unitario_all_items'),
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Tipo de dato unitario',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => false,
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'support' => array('title','editor','thumbnail','revisions'),
        "capability_type" => 'unitario',
        "map_meta_cap" => true
    );

    register_post_type('unitario',$args);
    add_post_type_support('unitario', array('thumbnail'));
}

function lnk_contenidos_register_cpt_unitario_taxonomies(){

    /**
     * DURACION
     */
    $labels_nivel = array(
        'name' => "Duraciones",
        'singular_name' => "Nivel",
    );
    $args_nivel = array(
        'hierarchical' => true,
        'labels' => $labels_nivel,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug'=>'nivel'),
    );
    register_taxonomy('nivel','eje',$args_nivel);

     /**
     * Grado
     */
    $labels_grado = array(
        'name' => "Grados",
        'singular_name' => "Grado",
    );
    $args_grado = array(
        'hierarchical' => true,
        'labels' => $labels_grado,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug'=>'grado'),
    );
    register_taxonomy('grado','eje',$args_grado);
}
add_action( 'init', 'lnk_contenidos_register_cpt_unitario_taxonomies');
