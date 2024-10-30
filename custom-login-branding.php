<?php
/*
Plugin Name: Custom Login Branding
Description: Replaces the default branding image on of the wp-admin login page.
Author: drahkar
Version: 1.0
*/ 

// display custom login styles
function custom_login() {

	// Wordpress plugin path
	$pluginPath = "/wp-content/plugins/";
	
	// Set full plugin path
        $pluginUrl = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));


	// Set updated css path
	$pluginUrl .= "/custom-login-branding.css";
		
	echo '<link rel="stylesheet" type="text/css" href="' . $pluginUrl . '" />';

}

function change_login_url() {

    echo bloginfo('url');
	
}

function change_login_title() {

    echo 'Powered by ' . get_option('blogname');
	
}

add_action('login_head', 'custom_login');
add_filter('login_headerurl', 'change_login_url');
add_filter('login_headertitle', 'change_login_title');

?>
