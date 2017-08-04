<?php
/*
	Plugin Name: WordPress Force Login
	Plugin URI: http://troychaplin.ca
	Description: Forces login and redirects user to homepage
	Version: 1.0
	Author: Troy Chaplin
	Author URI: http://troychaplin.ca
	License: GPL2
*/

function plugin_wp_force_login() {
	is_user_logged_in() || auth_redirect();
}
add_action( 'parse_request', 'plugin_wp_force_login', 1 );

function remove_admin_bar() {
	if ( ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		show_admin_bar( false );
	}
}
add_action( 'after_setup_theme', 'remove_admin_bar' );
