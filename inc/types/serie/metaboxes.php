<?php

add_action ('add_meta_boxes','lnk_contenidos_serie_metaboxes');

function lnk_contenidos_serie_metaboxes() {
    global $post;
    if($post->post_type == 'serie'){
        add_meta_box('lnk_contenidos_serie_inicio',"Director", 'lnk_contenidos_serie_inicio_metabox', null, 'side','core');
        add_meta_box('lnk_contenidos_serie_fin',"Info. Contacto", 'lnk_contenidos_serie_fin_metabox', null, 'side','core');
    }
}

function lnk_contenidos_serie_inicio_metabox(){
    global $post;
    $id = $post->ID;
    $inicio = get_post_meta($id,'lnk_contenidos_serie_inicio',true);
    print "<div id='lnk_contenidos_serie_inicio_container'>";
    print "<input type='text' name='lnk_contenidos_serie_inicio_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}

function lnk_contenidos_serie_fin_metabox(){
    global $post;
    $id = $post->ID;
    $fin = get_post_meta($id,'lnk_contenidos_serie_fin',true);
    print "<div id='lnk_contenidos_serie_fin_container'>";
    print "<input type='text' name='lnk_contenidos_serie_fin_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}
