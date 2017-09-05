<?php

add_action ('add_meta_boxes','lnk_contenidos_unitario_metaboxes');

function lnk_contenidos_unitario_metaboxes() {
    global $post;
    if($post->post_type == 'unitario'){
      add_meta_box('lnk_contenidos_unitario_director',"Director", 'lnk_contenidos_unitario_director_metabox', null, 'side','core');
      add_meta_box('lnk_contenidos_unitario_ano',"Año", 'lnk_contenidos_unitario_ano_metabox', null, 'side','core');
      add_meta_box('lnk_contenidos_unitario_duracion',"Duracion", 'lnk_contenidos_unitario_duracion_metabox', null, 'side','core');
      add_meta_box('lnk_contenidos_unitario_grafica',"Gráfica", 'lnk_contenidos_unitario_grafica_metabox', null, 'side','core');
      add_meta_box('lnk_contenidos_unitario_creditos',"Créditos", 'lnk_contenidos_unitario_creditos_metabox', null, 'normal','core');
      add_meta_box('lnk_contenidos_unitario_backstage',"Backstage", 'lnk_contenidos_unitario_backstage_metabox', null, 'normal','core');
      add_meta_box('lnk_contenidos_unitario_video',"Video", 'lnk_contenidos_unitario_video_metabox', null, 'normal','core');
      add_meta_box('lnk_contenidos_unitario_trailer',"Trailer", 'lnk_contenidos_unitario_trailer_metabox', null, 'normal','core');
    }
}

function lnk_contenidos_unitario_director_metabox(){
    global $post;
    $id = $post->ID;
    $director = get_post_meta($id,'lnk_contenidos_unitario_director',true);
    print "<div id='lnk_contenidos_unitario_director_container'>";
    print "<input type='text' name='lnk_contenidos_unitario_director_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}

function lnk_contenidos_unitario_ano_metabox(){
    global $post;
    $id = $post->ID;
    $ano = get_post_meta($id,'lnk_contenidos_unitario_ano',true);
    print "<div id='lnk_contenidos_unitario_ano_container'>";
    print "<input type='text' name='lnk_contenidos_unitario_ano_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}

function lnk_contenidos_unitario_duracion_metabox(){
    global $post;
    $id = $post->ID;
    $ano = get_post_meta($id,'lnk_contenidos_unitario_duracion',true);
    print "<div id='lnk_contenidos_unitario_duracion_container'>";
    print "<input type='text' name='lnk_contenidos_unitario_duracion_input' value='".$inicio."'></div>";
    print "<div style='clear:both;'></div>";
}

function lnk_contenidos_unitario_creditos_metabox(){
    global $post;
    $id = $post->ID;
    $ano = get_post_meta($id,'lnk_contenidos_unitario_creditos',true);
    print "<div id='lnk_contenidos_unitario_creditos_container'>";
    wp_editor($equipo, "lnk_contenidos_unitario_creditos_editor");
    print "<div style='clear:both;'></div>";
}

function lnk_contenidos_unitario_backstage_metabox(){
    global $post;
    $id = $post->ID;
    $ano = get_post_meta($id,'lnk_contenidos_unitario_backstage',true);
    print "<div id='lnk_contenidos_unitario_backstage_container'>";
    wp_editor($equipo, "lnk_contenidos_unitario_backstage_editor");
    print "<div style='clear:both;'></div>";
}
