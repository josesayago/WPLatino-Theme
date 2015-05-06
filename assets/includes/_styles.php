<?php
/**
 * Styles
 *
 * @author Jose SAYAGO
 * @update 2015-05-05
 */
function _wplatino_bootstrap_styles() {
	wp_register_style(
		'bootstrap',
		get_template_directory_uri() . '/assets/libraries/bootstrap/css/bootstrap.min.css',
		'',
		'3.3.4',
		'all'
	);
	wp_register_style(
		'bootstrap-theme',
		get_template_directory_uri() . '/assets/libraries/bootstrap/css/bootstrap-theme.min.css',
		'',
		'3.3.4',
		'all'
	);
	wp_register_style(
		'wplatino',
		get_template_directory_uri() . '/assets/css/wplatino.css',
		'',
		'1.0',
		'all'
	);
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'bootstrap-theme' );
	wp_enqueue_style( 'wplatino' );
}
add_action( 'wp_enqueue_scripts', '_wplatino_bootstrap_styles' );
?>