<?php
 function meal_theme_setup(){
  load_theme_textdomain( 'meal', get_template_directory_uri()."/languages" );
  add_theme_support( 'title-tags' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic_feed_links' );
  add_theme_support('html5' array(
        'comment-form',
		'comment-list',
		'gallery',
		'caption',
  ));
 }
 add_action('after_setup_theme','meal_theme_setup');

 function meal_assets(){

 }
 /**
  * Enqueue scripts
  *
  * @param string $handle Script name
  * @param string $src Script url
  * @param array $deps (optional) Array of script names on which this script depends
  * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
  * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
  */
 function meal_assets() {
 	wp_enqueue_script( '$handle', '$src', array( 'jquery' ), false, false );
 }
 add_action( 'wp_enqueue_scripts', 'meal_assets' );
 