<div class="wrap">
<h2>Maintenance Countdown Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'maintenance_countdown_settings' ); ?>
    <?php do_settings_sections( 'maintenance_countdown_settings' ); ?>
	<?php $maintenance_enabled = get_option('status');?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Enable maintenance mode:</th>
        <td><input type="radio" style="padding-right: 4px;" name="status" <?php if($maintenance_enabled == 'true') echo 'checked="checked"'; ?> value="true" />yes
<input type="radio" style="margin-left: 20px; padding-right: 4px;" name="status" <?php if($maintenance_enabled == 'false') echo 'checked="checked"'; ?> value="false" />no<td>
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