<?php
/*
  Plugin Name: Registers_users
  Plugin URI:http://themer.ir
  Description:این افزون برای ثبت نام کابران می باشه
  Version: 1.0
  Author:امین ساکی
  Author URI:www.webscript.blog.com
  License:GPL v2
 */

ob_start();
defined( 'ABSPATH' ) || exit;
define('RIG_DIR', plugin_dir_path( __FILE__ ) );

define('RIG_INC_DIR', trailingslashit( RIG_DIR . 'inc' ) );
define('RIG_INCT_DIR', trailingslashit( RIG_DIR . 'template' ) );

define('RIG_INCAD_DIR', trailingslashit( RIG_DIR . 'inc/template' ) );

define('RIG_UP_DIR', trailingslashit( RIG_DIR . 'asset' ) );
define('RIG_DATA_DIR', trailingslashit( RIG_DIR . 'data' ) );

define('RIG_URL', plugin_dir_url( __FILE__ ) );
define('RIG_DATA_URL', trailingslashit( RIG_URL . 'asset/data' ) );
define('RIG_CSS_URL', trailingslashit( RIG_URL . 'asset/css' ) );
define('RIG_JS_URL', trailingslashit( RIG_URL . 'asset/js' ) );
define('RIG_IMG_URL', trailingslashit( RIG_URL . 'asset/img' ) );
define('RIG_UP_URL', trailingslashit( RIG_URL . 'asset/uploads' ) );

include_once  RIG_INC_DIR.'shortcodes.php';
include_once  RIG_INC_DIR.'freend.php';
include_once  RIG_INC_DIR.'function.php';

if(is_admin()):

include_once  RIG_INC_DIR.'backend.php';
include_once  RIG_INC_DIR.'page.php';
include_once  RIG_INC_DIR.'ajax.php';
add_action('admin_menu','Rig_add_menu');
endif;