<div class="wrap">
<h2>Maintenance Countdown Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'maintenance_countdown_settings' ); ?>
    <?php do_settings_sections( 'maintenance_countdown_settings' ); ?>
	<?php $maintenance_enabled = get_option('mcount-status');?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Enable maintenance mode:</th>
        <td><input type="radio" style="padding-right: 4px;" name="mcount-status" <?php if($maintenance_enabled == 'true') echo 'checked="checked"'; ?> value="true" />yes
			<input type="radio" style="margin-left: 20px; padding-right: 4px;" name="mcount-status" <?php if($maintenance_enabled == 'false') echo 'checked="checked"'; ?> value="false" />no<td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Maintenance Page Title:</th>
        <td><input type="text" name="mcount-title" value="<?php echo esc_attr( get_option('mcount-title', 'Maintenance') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Headline</th>
        <td><input type="text" name="mcount-bigtext" value="<?php echo esc_attr( get_option('mcount-bigtext', 'Down for maintenance') ); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Maintenance information:</th>
        <td><input type="text" name="mcount-maintenanceinfo" value="<?php echo esc_attr( get_option('mcount-maintenanceinfo', 'This website is currently undergoing scheduled maintenance.') ); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Check back message:</th>
        <td><input type="text" name="mcount-onlinemessage" value="<?php echo esc_attr( get_option('mcount-onlinemessage', 'Check back in:') ); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Maintenance end date (dd-mm-yyyy):</th>
        <td><input type="text" name="mcount-enddate" value="<?php echo esc_attr( get_option('mcount-enddate') ); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Maintenance end time (hh:mm):</th>
        <td><input type="text" name="mcount-endtime" value="<?php echo esc_attr( get_option('mcount-endtime') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>