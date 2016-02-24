<?php
/**
* Plugin Name: CK's Custom Actions and Filters
* Description: A few custom actions and filters created because I can.
* Author: Chris Schmieder
* Version: 0.1.0.5.9
* Author URI: http://ckschmieder.com/
*/

function ck_remove_dashboard_widget() {
	remove_meta_box( 'dashboard_primary', 'dashboard', 'advanced');
}
add_action( 'wp_dashboard_setup', 'ck_remove_dashboard_widget' );
