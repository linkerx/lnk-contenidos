<?php

add_action("admin_enqueue_scripts",'lnk_contenidos_programa_admin_head' );
add_action("wp_enqueue_scripts",'lnk_contenidos_programa_front_head' );

function lnk_contenidos_programa_admin_head($hook) {
    global $post_type;
    $plugindir = get_option('siteurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));
    if($hook == 'post.php' || $hook == 'post-new.php' || $hook == 'edit.php')
    {
        if($post_type == 'programa')
        {
            wp_enqueue_script('lnk_contenidos_programa_admin_js',$plugindir.'/inc/types/programa/assets/admin.js');
            wp_enqueue_style('lnk_contenidos_programa_admin_css',$plugindir.'/inc/types/programa/assets/admin.css');
        }
    }
}

function lnk_contenidos_programa_front_head($hook) {
    global $post_type;
    if($post_type == 'programa') {
        $plugindir = get_option('siteurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));
	      wp_enqueue_style('lnk_contenidos_programa_css',$plugindir.'/inc/types/programa/assets/front.css');
        wp_enqueue_script('lnk_contenidos_programa_js',$plugindir.'/inc/types/programa/assets/front.js');
    }
}
