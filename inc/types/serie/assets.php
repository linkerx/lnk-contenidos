<?php

add_action("admin_enqueue_scripts",'lnk_contenidos_serie_admin_head' );
add_action("wp_enqueue_scripts",'lnk_contenidos_serie_front_head' );

function lnk_contenidos_serie_admin_head($hook) {
    global $post_type;
    $plugindir = get_option('siteurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));
    if($hook == 'post.php' || $hook == 'post-new.php' || $hook == 'edit.php')
    {
        if($post_type == 'serie')
        {
            wp_enqueue_script('lnk_contenidos_serie_admin_js',$plugindir.'/inc/types/serie/assets/admin.js');
            wp_enqueue_style('lnk_contenidos_serie_admin_css',$plugindir.'/inc/types/serie/assets/admin.css');
        }
    }
}

function lnk_contenidos_serie_front_head($hook) {
    global $post_type;
    if($post_type == 'serie') {
        $plugindir = get_option('siteurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));
	      wp_enqueue_style('lnk_contenidos_serie_css',$plugindir.'/inc/types/serie/assets/front.css');
        wp_enqueue_script('lnk_contenidos_serie_js',$plugindir.'/inc/types/serie/assets/front.js');
    }
}
