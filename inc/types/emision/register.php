<?php

add_action('init', 'lnk_contenidos_register_cpt_emision');

function lnk_contenidos_register_cpt_emision(){

    $labels = array(
        'name' => __('emisions','emision_name'),
        'singular_name' => __('emision','emision_singular_name'),
        'menu_name' => __('emisions','emision_menu_name'),
        'all_items' => __('Lista de emisions','emision_all_items'),
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Tipo de dato emision',
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
        "capability_type" => 'emision',
        "map_meta_cap" => true
    );

    register_post_type('emision',$args);
    add_post_type_support('emision', array('thumbnail'));
}
