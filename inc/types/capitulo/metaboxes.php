<?php

add_action ('add_meta_boxes','lnk_contenidos_capitulo_metaboxes');

function lnk_contenidos_capitulo_metaboxes() {
    global $post;
    if($post->post_type == 'capitulo'){
        add_meta_box('lnk_contenidos_capitulo_fecha',"Fecha", 'lnk_contenidos_capitulo_fecha_metabox', null, 'side','core');
        add_meta_box('lnk_contenidos_capitulo_numero',"Numero", 'lnk_contenidos_capitulo_numero_metabox', null, 'side','core');
        // temporada taxonomia
    }
}

function lnk_contenidos_capitulo_fecha_metabox(){
    global $post;
    $id = $post->ID;
    $fecha = get_post_meta($id,'lnk_contenidos_capitulo_fecha',true);
    print "<div id='lnk_contenidos_capitulo_fecha_container'>";
    print "<input type='text' name='lnk_contenidos_capitulo_fecha_input' value='".$fecha."'></div>";
    print "<div style='clear:both;'></div>";
}

function lnk_contenidos_capitulo_numero_metabox(){
    global $post;
    $id = $post->ID;
    $numero = get_post_meta($id,'lnk_contenidos_capitulo_numero',true);
    print "<div id='lnk_contenidos_capitulo_numero_container'>";
    print "<input type='text' name='lnk_contenidos_capitulo_numero_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}
