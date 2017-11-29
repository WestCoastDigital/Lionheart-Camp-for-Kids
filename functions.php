<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

function gp_child_setup() {
    load_child_theme_textdomain( 'gp-child-theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'gp_child_setup' );

function generate_scripts() {
}
//add_action( 'wp_enqueue_scripts', 'generate_scripts' );

function gp_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'project-style', get_stylesheet_directory_uri() . '/assets/css/project.css', array('parent-style') );
    wp_enqueue_script( 'jquery' );
  	wp_enqueue_script( 'project-script', get_stylesheet_directory_uri() . '/assets/js/project.js' );
}
add_action( 'wp_enqueue_scripts', 'gp_child_enqueue_styles' );

function gp_child_favicon_link() {
  $logo = '<link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/assets/images/favicon.ico" />' . "\n";
  echo $logo;
}
add_action( 'wp_head', 'gp_child_favicon_link' );

function gp_child_sidebar_layout( $layout ) {
 	if ( is_page() ) {
 	 	return 'no-sidebar';
  } else {
 	  return $layout;
  }
 }
 add_filter( 'generate_sidebar_layout','gp_child_sidebar_layout' );
