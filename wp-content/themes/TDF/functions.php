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
		'case_studies',
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __('Case Study')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'case-studies'
				),
			)
		);

	//create a awards custom post type 
	register_post_type (
		'awards',
		array(
			'labels' => array(
				'name' => __( 'Awards' ),
				'singular_name' => __('Award')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'awards'
				),
			)
		);

		//create a press releases custom post type 
	register_post_type (
		'press_releases',
		array(
			'labels' => array(
				'name' => __( 'Press Releases' ),
				'singular_name' => __('Press Release')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'press-releases'
				),
			)
		);

	//create a press clippings custom post type 
	register_post_type (
		'press_clip',
		array(
			'labels' => array(
				'name' => __( 'Press Clippings' ),
				'singular_name' => __('Press Clipping')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'press-clippings'
				),
			)
		);

	//create a pumping system custom post type 
	register_post_type (
		'pump_systems',
		array(
			'labels' => array(
				'name' => __( 'Pump Systems' ),
				'singular_name' => __('Pump System')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'pump-systems'
				),
			)
		);

	//create a hippo submersible slurry pump range custom post type 
	register_post_type (
		'submersibles',
		array(
			'labels' => array(
				'name' => __( 'Submersible Slurry Pumps' ),
				'singular_name' => __('Submersible Slurry Pump')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'hippo-submersible-slurry-pump-range'
				),
			)
		);

	//create a hippo vertical slurry pump range custom post type 
	register_post_type (
		'verticals',
		array(
			'labels' => array(
				'name' => __( 'Vertical Slurry Pumps' ),
				'singular_name' => __('Vertical Slurry Pump')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'hippo-vertical-slurry-pump-range'
				),
			)
		);

	//create a hippo vertical slurry pump range custom post type 
	register_post_type (
		'hippo',
		array(
			'labels' => array(
				'name' => __( 'Hippo Slurry Pump Range' ),
				'singular_name' => __('Hippo Slurry Pump Range')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'hippo-range'
				),
			)
		);

	//create a pump curves custom post type 
	register_post_type (
		'pump_curves',
		array(
			'labels' => array(
				'name' => __( 'Pump Curves' ),
				'singular_name' => __('Pump Curves')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'pump-curves'
				),
			)
		);
	
	//create a hippo lineup - frontpage custom post type 
	register_post_type (
		'pump_img',
		array(
			'labels' => array(
				'name' => __( 'Pump Image' ),
				'singular_name' => __('Pump Images')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'pump-img'
				),
			)
		);
}

add_action ('init', 'create_custom_post_types' );

function modify_attachment_link($markup) {
    return preg_replace('/^<a([^>]+)>(.*)$/', '<a\\1 target="_blank">\\2', $markup);
}
add_filter( 'wp_get_attachment_link', 'modify_attachment_link', 10, 6 );


function custom_excerpt_more($more) {
	return '...<div class="read-more"><a href="'. get_permalink() . '"></a></div>';
} 
add_filter('excerpt_more', 'custom_excerpt_more');


add_theme_support ( 'menus');

function hippo2018_register_theme_menus() {

	register_nav_menus (
		
		array(
			'primary-menu' => __( 'primary menu' ),
			)

		);
}

add_action('init', 'hippo2018_register_theme_menus');

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

	function hippo2018_theme_styles () {
		wp_enqueue_style ('normalize_css', get_template_directory_uri() . '/assets/css/normalize.css' );

		wp_enqueue_style ('font_awesome_css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );

		wp_enqueue_style ('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css' );

		wp_enqueue_style ('waves_css', get_template_directory_uri() . '/assets/css/waves.min.css' );

		wp_enqueue_style ('slicknav_css', get_template_directory_uri() . '/assets/css/slicknav.min.css' );

		wp_enqueue_style ('owl_carousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );

		wp_enqueue_style ('owl_theme_default_css', get_template_directory_uri() . '/assets/css/owl.theme.default.css' );

		wp_enqueue_style ('essential_css', get_template_directory_uri() . '/assets/css/essential.css' );

		wp_enqueue_style ('main_css', get_template_directory_uri() . '/assets/css/main.css' );

		wp_enqueue_style ('responsive_css', get_template_directory_uri() . '/assets/css/responsive.css' );

		wp_enqueue_style ('style_css', get_template_directory_uri() . '/style.css' );

	}

	add_action ( 'wp_enqueue_scripts', 'hippo2018_theme_styles' );

	function hippo2018_theme_js() {

		wp_enqueue_script ( 'modernizr_js', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js');

		wp_enqueue_script ( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js');

		wp_enqueue_script ( 'waves_js', get_template_directory_uri() . '/assets/js/waves.min.js');

		wp_enqueue_script ( 'slicknav_js', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js');

		wp_enqueue_script ( 'waypoints_js', get_template_directory_uri() . '/assets/js/waypoints.min.js');
	
		wp_enqueue_script ( 'isotope_js', get_template_directory_uri() . '/assets/js/isotope.min.js');

		wp_enqueue_script ( 'owl_carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');

		wp_enqueue_script ( 'main_js', get_template_directory_uri() . '/assets/js/main.js');
	}

add_action ( 'wp_enqueue_scripts', 'hippo2018_theme_js');

?>

