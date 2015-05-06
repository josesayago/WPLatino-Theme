<?php
/**
 * Scripts
 *
 * @author Jose SAYAGO
 * @update 2015-05-05
 */
function _wplatino_bootstrap_scripts() {
	wp_register_script(
		'bootstrap',
		get_template_directory_uri() . '/assets/libraries/bootstrap/js/bootstrap.min.js',
		array( 'jquery' ),
		'3.3.4',
		false
	);
	wp_register_script(
		'bootstrap-transition',
		get_template_directory_uri() . '/assets/libraries/bootstrap/js/transition.js',
		array( 'bootstrap' ),
		'3.3.4',
		false
	);
	wp_register_script(
		'bootstrap-collapse',
		get_template_directory_uri() . '/assets/libraries/bootstrap/js/collapse.js',
		array( 'bootstrap' ),
		'3.3.4',
		false
	);
	wp_register_script(
		'bootstrap-dropdown',
		get_template_directory_uri() . '/assets/libraries/bootstrap/js/dropdown.js',
		array( 'bootstrap' ),
		'3.3.4',
		false
	);
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'bootstrap-dropdown' );
	wp_enqueue_script( 'bootstrap-transition' );
	wp_enqueue_script( 'bootstrap-collapse' );
}
add_action( 'wp_enqueue_scripts', '_wplatino_bootstrap_scripts' );
?>