<?php
	if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) exit();

	delete_option('mcount-status');
	delete_option('mcount-title');
	delete_option('mcount-bigtext');
	delete_option('mcount-status');
	delete_option('mcount-onlinemessage');
	delete_option('mcount-maintenanceinfo');
	delete_option('mcount-enddate');
	delete_option('mcount-endtime');
	delete_option('mcount-design');
	delete_option('mcount-autodisable');
?>