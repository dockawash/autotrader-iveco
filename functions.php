<?php
/**
 * Functions for child, load before parent functions.php
 */

/** Typekit fonts **/
wp_enqueue_script( "typekit", "//use.typekit.net/tgu3lwo.js" );
function typekit_js(){
	echo '<script>try{Typekit.load();}catch(e){}</script>';
}
// Add hook for admin <head></head>
add_action('admin_head', 'typekit_js');
// Add hook for front-end <head></head>
add_action('wp_head', 'typekit_js');

/** Add Editor Style **/
add_editor_style( 'css/iveco.css' );

/** Load textdomain for translate **/
load_theme_textdomain( 'tfuse', get_stylesheet_directory() . '/languages' );

