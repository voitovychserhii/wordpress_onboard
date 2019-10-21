<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Enqueue scripts and styles.
 */
function mytheme_scripts() {
  wp_enqueue_style( 'style-css', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script( 'css3-animate-it', get_template_directory_uri() . '/js/css3-animate-it.js');
  wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.js');
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js');
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

/**
 * Custom post type
 */
function create_post_type() {
  register_post_type( 'car',
    array(
      'labels' => array(
        'name' => ('Cars'),
        'singular_name' => ('Car'),
      ),
      'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'excerpt' ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );