<?php
/**
 * Plugin Name: Maintenance Countdown
 * Plugin URI: https://github.com/serious-scribbler/maintenance-countdown
 * Description: This plugin adds a maintenance countdown page to your website giving you the opportunity to let your visitors know when your site will be online again.
 * Version: 1.0.0
 * Author: Phil Niehus
 * Author URI: http://pniehus.de
 * License: GPL3
 */
 add_action('admin_menu', 'maintenance_menu');
 function maintenance_menu(){
	 add_menu_page('Maintenance Countdown Settings', 'Maintenance Countdown', 'administrator', 'maintenance-countdown-config', 'maintenance_settings_page', 'dashicons-hammer');
 }
 
 add_action( 'admin_init', 'maintenance_settings' );
 
 function maintenance_settings(){
	 register_setting( 'maintenance_countdown_settings', 'mcount-status' );
	 register_setting( 'maintenance_countdown_settings', 'mcount-title' );
	 register_setting( 'maintenance_countdown_settings', 'mcount-bigtext' );
	 register_setting( 'maintenance_countdown_settings', 'mcount-maintenanceinfo' );
	 register_setting( 'maintenance_countdown_settings', 'mcount-onlinemessage' );
	 register_setting( 'maintenance_countdown_settings', 'mcount-enddate' );
	 register_setting( 'maintenance_countdown_settings', 'mcount-endtime' );	 
 }
 function maintenance_settings_page(){
	 include("maintenance-menu.php");
 }
 add_action( 'init', 'maintenance_countdown' );
 function maintenance_countdown(){
	if(get_option('mcount-status') != "false"){
		if(!current_user_can('edit_themes')){
			include("show-maintenance.php");
			die();
		}
	}
 }
 
 ?>