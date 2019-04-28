<?php
/**
 * Plugin Name: UFF Mobile Api Menus
 * Plugin URI:  https://#
 * Description: Configurações para os menus do aplicativo da UFF.
 *
 * Version:     1.3.1
 *
 * Author:      Thiago Augusto
 * Author URI:  https://#
 *
 * Text Domain: uff menus
 *
 * @package UFF_MOBILE_APP_MENUS
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'UFF_MOBILE_APP_MENUS_VERSION', '0.0.1' );

if ( ! defined( 'UFF_MOBILE_APP_MENUS_FILE' ) ) {
	define( 'UFF_MOBILE_APP_MENUS_FILE', __FILE__ );
	define( 'UFF_MOBILE_APP_MENUS_DIR', dirname( __FILE__ ) );
}


$autoload = UFF_MOBILE_APP_MENUS_DIR . '/vendor/autoload.php';
if (file_exists( autoload )){
	require_once $autoload;
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_uff_plugin(){
	Activate::activate();
}

function deactivate_uff_plugin(){
	Deactivate::deactivate();
}

//activation
register_activation_hook(UFF_MOBILE_APP_MENUS_FILE, 'activate_uff_plugin');

//deactivation
register_deactivation_hook(UFF_MOBILE_APP_MENUS_FILE, 'deactivate_uff_plugin');

if (class_exists('Inc\\Init')){
	Inc\Init::register_services();
}

//require_once( UFF_MOBILE_APP_MENUS_DIR . '/inc/qtx_class_translator.php' );
//
//if ( is_admin() ) {
//	require_once( UFF_MOBILE_APP_MENUS_DIR . '/admin/qtx_activation_hook.php' );
//	qtranxf_register_activation_hooks();
//}
