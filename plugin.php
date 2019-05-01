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

function login_redirect() {
	if ( ! is_user_logged_in() ) {
		auth_redirect();
	}
}
add_action( 'wp', 'login_redirect' );
