<?php
/**
 * The Digital Factory functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage The Digital Factory
 * @since The Digital Factory 1.0
 */


// custom post types function
function create_custom_post_types() {

	//create a case study custom post type 
	register_post_type (
		'skills',
		array(
			'labels' => array(
				'name' => __( 'Skills' ),
				'singular_name' => __('Skill')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'skills'
				),
			)
		);

	//create a awards custom post type 
	register_post_type (
		'projects',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __('Project')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'projects'
				),
			)
		);
}

add_action ('init', 'create_custom_post_types' );
/*
function modify_attachment_link($markup) {
    return preg_replace('/^<a([^>]+)>(.*)$/', '<a\\1 target="_blank">\\2', $markup);
}
add_filter( 'wp_get_attachment_link', 'modify_attachment_link', 10, 6 );


function custom_excerpt_more($more) {
	return '...<div class="read-more"><a href="'. get_permalink() . '"></a></div>';
} 
add_filter('excerpt_more', 'custom_excerpt_more');
*/

add_theme_support ( 'menus');

function tdf_register_theme_menus() {

	register_nav_menus (
		
		array(
			'primary-menu' => __( 'primary menu' ),
			)

		);
}

add_action('init', 'tdf_register_theme_menus');


	function tdf_theme_styles () {
		wp_enqueue_style ('normalize_css', get_template_directory_uri() . '/assets/css/normalize.css' );

		wp_enqueue_style ('csshake_slow_css', get_template_directory_uri() . '/assets/css/csshake-slow.min.css' );

		wp_enqueue_style ('main_css', get_template_directory_uri() . '/assets/css/main.css' );

		wp_enqueue_style ('stylesheet_css', get_template_directory_uri() . '/assets/css/stylesheet.css' );

		wp_enqueue_style ('style_css', get_template_directory_uri() . '/style.css' );

	}

	add_action ( 'wp_enqueue_scripts', 'tdf_theme_styles' );

	function tdf_theme_js() {

		wp_enqueue_script ( 'modernizr_js', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js');

		wp_enqueue_script ( 'main_js', get_template_directory_uri() . '/assets/js/main.js');
	}

add_action ( 'wp_enqueue_scripts', 'tdf_theme_js');

?>

