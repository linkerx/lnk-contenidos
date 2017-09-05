<?php

add_action('admin_menu', 'lnk_contenidos_menu_programas');
add_action('admin_menu', 'lnk_contenidos_menu_series');

function lnk_contenidos_menu_programas(){
    global $submenu;
    add_menu_page('Programas', 'Programas', 'manage_programas',basename(__FILE__)."_programas", 'lnk_contenidos_programas_setting_page', null, 20 );
    add_submenu_page(basename(__FILE__)."_programas", 'Programas', 'Programas', 'manage_programas', 'edit.php?post_type=programa', NULL);
    add_submenu_page(basename(__FILE__)."_programas", 'Emisiones', 'Emisiones', 'manage_programas', 'edit.php?post_type=emision', NULL);
    $submenu[basename(__FILE__)."_programas"][0][0] = "Configuración";
}

function lnk_contenidos_menu_series(){
    global $submenu;
    add_menu_page('Series', 'Series', 'manage_series',basename(__FILE__)."_series", 'lnk_contenidos_series_setting_page', null, 20 );
    add_submenu_page(basename(__FILE__)."_series", 'Series', 'Series', 'manage_series', 'edit.php?post_type=programa', NULL);
    add_submenu_page(basename(__FILE__)."_series", 'Capitulos', 'Capitulos', 'manage_series', 'edit.php?post_type=emision', NULL);
    $submenu[basename(__FILE__)."_series"][0][0] = "Configuración";
}


function curza_plugin_academico_setting_page(){
    echo "<h1>Plugin Curza Academico</h1>";
}

function curza_plugin_academico_bedelia_page(){
    echo "<h1>Plugin Curza Academico - Bedelia</h1>";
}
