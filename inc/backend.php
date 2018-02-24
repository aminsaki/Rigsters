<?php
function Rig_add_menu(){

    $vip_main=add_menu_page('فرم استخدامی ','فرم استخدامی ','manage_options','Rig_mine','Rig_dashboard_page');


add_action("load-{$vip_main}","load_vip_scripts");
    }
 function load_vip_scripts()
 {
     wp_register_style('bootstrap',RIG_CSS_URL.'bootstrap.css');
     wp_enqueue_style('bootstrap');

     wp_register_style('app',RIG_CSS_URL.'app.css');
     wp_enqueue_style('app');

     wp_register_style('bootstrap-theme',RIG_CSS_URL.'bootstrap-theme.css');
     wp_enqueue_style('bootstrap-theme');

     wp_register_script('bootstrap',RIG_JS_URL.'bootstrap.js',array('jquery'));
     wp_enqueue_script('bootstrap');

     wp_register_script('myapp',RIG_JS_URL.'myapp.js');
     wp_enqueue_script('myapp');

     //wp_localize_script('vip_admin_script','wpvip',array('ajaxurl'=>admin_url('admin-ajax.php')));
 }