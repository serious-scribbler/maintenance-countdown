<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>
<?php
/**
 * Plugin Name: Maintenance Countdown
 * Plugin URI: https://github.com/serious-scribbler/maintenance-countdown
 * Description: This plugin adds a maintenance countdown page to your website giving you the opportunity to let your visitors know when your site will be online again.
 * Version: 1.1.0
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
	 register_setting( 'maintenance_countdown_settings', 'mcount-design' );
	 //register_setting( 'maintenance_countdown_settings', 'mcount-autodisable' );
 }
 function maintenance_settings_page(){
	 include("maintenance-menu.php");
 }
 add_action( 'init', 'maintenance_countdown' );
 function maintenance_countdown(){
	//!in_array($GLOBALS['pagenow'], array('/wp-login.php', '/wp-admin.php'))
	$real_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$pos = strpos($real_link, get_admin_url());
	$pos2 = strpos($real_link,wp_login_url());
	$do = (!is_bool($pos) || !is_bool($pos2)) ? false : true;
	if(get_option('mcount-status') != "false"){
		if($do){
			if(!current_user_can('edit_themes')){
				include("show-maintenance.php");
				die();
			}
		}
	}
 }
 
 ?>