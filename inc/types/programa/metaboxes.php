<?php

add_action ('add_meta_boxes','lnk_contenidos_programa_metaboxes');

function lnk_contenidos_programa_metaboxes() {
    global $post;
    if($post->post_type == 'programa'){
        add_meta_box('lnk_contenidos_programa_inicio',"Director", 'lnk_contenidos_programa_inicio_metabox', null, 'side','core');
        add_meta_box('lnk_contenidos_programa_fin',"Info. Contacto", 'lnk_contenidos_programa_fin_metabox', null, 'side','core');
    }
}

function lnk_contenidos_programa_inicio_metabox(){
    global $post;
    $id = $post->ID;
    $inicio = get_post_meta($id,'lnk_contenidos_programa_inicio',true);
    print "<div id='lnk_contenidos_programa_inicio_container'>";
    print "<input type='text' name='lnk_contenidos_programa_inicio_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}

function lnk_contenidos_programa_fin_metabox(){
    global $post;
    $id = $post->ID;
    $fin = get_post_meta($id,'lnk_contenidos_programa_fin',true);
    print "<div id='lnk_contenidos_programa_fin_container'>";
    print "<input type='text' name='lnk_contenidos_programa_fin_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}
