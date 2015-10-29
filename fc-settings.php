<?php
/*
Plugin Name: FC Settings
Plugin URI: http://www.formulaclick.com
Description: Plugin para setear configuraciones comunes
Author: Formula Click
Version: 1.0
Author URI: http://www.formulaclick.com
*/

/**
 * Eliminamos la barra admin del usuario
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Eliminamos el gestor de links
 */
update_option( 'link_manager_enabled', 0 );
