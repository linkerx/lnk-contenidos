<?php

add_action('init', 'lnk_contenidos_register_cpt_serie');

function lnk_contenidos_register_cpt_serie(){

    $labels = array(
        'name' => __('series','serie_name'),
        'singular_name' => __('serie','serie_singular_name'),
        'menu_name' => __('series','serie_menu_name'),
        'all_items' => __('Lista de series','serie_all_items'),
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Tipo de dato serie',
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
        "capability_type" => 'serie',
        "map_meta_cap" => true
    );

    register_post_type('serie',$args);
    add_post_type_support('serie', array('thumbnail'));
}
