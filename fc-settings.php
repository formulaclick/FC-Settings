<?php
/*
Plugin Name: FC Settings
Plugin URI: http://www.formulaclick.com
Description: Plugin para setear configuraciones comunes
Author: Formula Click
Version: 1.0
Author URI: http://www.formulaclick.com
*/

if( ! class_exists( 'FC_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new FC_Updater( __FILE__ );
$updater->set_username( 'formulaclick' );
$updater->set_repository( 'fc-settings' );
/* 
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();


/**
 * Eliminamos la barra admin del usuario
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Eliminamos el gestor de links
 */
update_option( 'link_manager_enabled', 0 );
