<?php
/**
 * Settings
 *
 * @author Jose SAYAGO
 * @update 2015-05-06
 */
// Text Domain
load_theme_textdomain( 'wplatino', get_template_directory() . '/assets/lang' );
// Add default posts and comments RSS feed links to <head>.
add_theme_support( 'automatic-feed-links' );
// adding post format support
add_theme_support( 'post-formats',      // post formats
	array( 
		'aside',   // title less blurb
		'gallery', // gallery of images
		'link',    // quick link to other site
		'image',   // an image
		'quote',   // a quick quote
		'status',  // a Facebook like status update
		'video',   // video 
		'audio',   // audio
		'chat'     // chat transcript 
	)
);
// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
add_theme_support( 'post-thumbnails' );
// Custom Background
add_theme_support( 'custom-background' );
// Custom Header
add_theme_support( 'custom-header' );
// Menus
add_theme_support( 'menus' );
?>