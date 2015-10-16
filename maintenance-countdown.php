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
	 add_menu_page('Maintenance Countdown Settings', 'Maintenance Countdown', 'administrator', 'maintenance-countdown-config', 'maintenance-settings-page', 'dashicons-admin-tools');
 }
 
 add_action( 'admin_init', 'maintenance-settings' );
 
 function maintenance-settings(){
	 register_setting( 'maintenance-countdown-settings', 'status' );
	 register_setting( 'maintenance-countdown-settings', 'title' );
	 register_setting( 'maintenance-countdown-settings', 'bigtext' );
	 register_setting( 'maintenance-countdown-settings', 'onlinemessage' );
	 register_setting( 'maintenance-countdown-settings', 'enddate' );
	 
 }
 function maintenance-settings-page(){
	 <div class="wrap">
<h2>Staff Details</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'maintenance-countdown-settings' ); ?>
    <?php do_settings_sections( 'maintenance-countdown-settings' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Enable maintenance mode:</th>
        <td><input type="radio" name="status" <?php if($maintenance_enabled == 'true') echo 'checked="checked"'; ?> value="true" />yes
<input type="radio" name="status2" <?php if($maintenance_enabled == 'false') echo 'checked="checked"'; ?> value="false" />no<td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Maintenance Page Title:</th>
        <td><input type="text" name="title" value="<?php echo esc_attr( get_option('title') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Headline</th>
        <td><input type="text" name="bigtext" value="<?php echo esc_attr( get_option('bigtext') ); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Message over countdown:</th>
        <td><input type="text" name="onlinemessage" value="<?php echo esc_attr( get_option('onlinemessage') ); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Maintenance end (dd-mm-yyyy):</th>
        <td><input type="text" name="enddate" value="<?php echo esc_attr( get_option('enddate') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
 }
 ?>