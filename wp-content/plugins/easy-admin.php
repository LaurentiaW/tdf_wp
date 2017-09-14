<?php
/*
Plugin Name: Easy Administration
Plugin URI: http://www.sitepoint.com/wordpress-easy-administration-plugin-1
Description: Simplifies WordPress administration panels.
Version: 1.0
Author: Craig Buckler
Author URI: http://optimalworks.net/
License: GPL2
*/


// login page logo Change the WordPress Login Page Logo
function custom_login_logo() {
	echo '<style>h1 a, h1 a:hover, h1 a:focus { font-size: 1.4em; font-weight: normal; text-align: center; text-indent: 0; line-height: 1.1em; text-decoration: none; color: #dadada; text-shadow: 0 -1px 1px #666, 0 1px 1px #fff; background-image: none !important; }</style>';
}
add_action('login_head', 'custom_login_logo');



// remove administration page header logo
function remove_admin_logo() {
	echo '<style>img#header-logo { display: none; }</style>';
}
add_action('admin_head', 'remove_admin_logo');


// change administration panel footer
function change_footer_admin() {
	echo 'For support, please <a href="mailto:hello@thedigitalfactory.nl">email</a> hello@thedigitalfactory.nl';
}
add_filter('admin_footer_text', 'change_footer_admin');


// remove admin bar
add_filter('show_admin_bar', '__return_false');