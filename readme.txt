=== Maintenance Countdown ===
Contributors: 
Tags: maintenance countdown, maintenance, administration, information
Requires at least: 4.3.1
Tested up to: 4.3.1
Stable tag: 4.3.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.txt

This plugin adds a maintenance countdown page to wordpress.

== Description ==

The Maintenance Countdown plugin adds a maintenance countdown page to your wordpress installation. This gives you the
opportunity to tell your users what you are doing and how long they need to wait until your site is back online.
Users with the 'edit_themes' capability are still able to access the site when maintenance is enabled.

Features:

*	Enable/disable maintenance mode
*	Page title, headline, maintenance information and check back message are customizable through the dashboard
*	The end date and time for the countdown can be set through the settings page on the dashboard
*	The countdown starts counting upwards if the end time is exceeded

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Unpack the plugin from its zip-file and upload all its files into a subdirectory of the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure the plugin through the 'Maintenance Countdown' menu in WordPress

== Frequently Asked Questions ==

= Can i edit the .css-file to fit my needs? =

Yes, you can.

= Can i change the capability a user needs for entering the site when maintenance mode is on? =

Yeah you can, just open up the 'maintenance-countdown.php' and change the capability in line 34

== Screenshots ==

1. This is the plugins administration menu.
2.This is the look of the maintenance countdown page

== Changelog ==

= 1.0.7 =
* The first version of my plugin
