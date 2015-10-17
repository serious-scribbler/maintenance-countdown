<?php
/**
 * Plugin Name: Maintenance Countdown
 * Plugin URI: https://github.com/serious-scribbler/maintenance-countdown
 * Description: This plugin adds a maintenance countdown page to your website giving you the opportunity to let your visitors know when your site will be online again.
 * Version: 1.0.0
 * Author: Phil Niehus
 * Author URI: http://pniehus.de
 * License: GPL2
 */
 add_action('admin_menu', 'maintenance_menu');
 function maintenance_menu(){
	 add_menu_page('Maintenance Countdown Settings', 'Maintenance Countdown', 'administrator', 'maintenance-countdown-config', 'maintenance_settings_page', 'dashicons-admin-tools');
 }
 
 add_action( 'admin_init', 'maintenance_settings' );
 
 function maintenance_settings(){
	 register_setting( 'maintenance_countdown_settings', 'status' );
	 register_setting( 'maintenance_countdown_settings', 'title' );
	 register_setting( 'maintenance_countdown_settings', 'bigtext' );
	 register_setting( 'maintenance_countdown_settings', 'maintenanceinfo' );
	 register_setting( 'maintenance_countdown_settings', 'onlinemessage' );
	 register_setting( 'maintenance_countdown_settings', 'enddate' );
	 register_setting( 'maintenance_countdown_settings', 'endtime' );	 
 }
 function maintenance_settings_page(){
	 include("maintenance-menu.php");
 }
 ?>