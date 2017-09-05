<?php

add_action('init', 'lnk_contenidos_register_cpt_capitulo');

function lnk_contenidos_register_cpt_capitulo(){

    $labels = array(
        'name' => __('capitulos','capitulo_name'),
        'singular_name' => __('capitulo','capitulo_singular_name'),
        'menu_name' => __('capitulos','capitulo_menu_name'),
        'all_items' => __('Lista de capitulos','capitulo_all_items'),
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Tipo de dato capitulo',
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
        "capability_type" => 'capitulo',
        "map_meta_cap" => true
    );

    register_post_type('capitulo',$args);
    add_post_type_support('capitulo', array('thumbnail'));
}
