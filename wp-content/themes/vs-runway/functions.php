<?php
/**
 * VS Runway theme functions and definitions.
 *
 * @package VS_Runway
 */

if ( ! function_exists( 'vs_runway_setup' ) ) {
  function vs_runway_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
  }
}
add_action( 'after_setup_theme', 'vs_runway_setup' );

function vs_runway_enqueue_styles() {
  wp_enqueue_style( 'vs-runway-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'vs_runway_enqueue_styles' );
