<?php
/**
 * Options
 *
 * @author Jose SAYAGO
 * @update 2015-05-06
 */
function _wplatino_menus(){
	register_nav_menus(
		array(
			'main-menu'		=> __( 'Main Menu', 'wplatino' ),
			'footer-menu-1'	=> __( 'Footer Menu 1', 'wplatino' ),
			'footer-menu-2'	=> __( 'Footer Menu 2', 'wplatino' )
    	)
	);
}
add_action( 'init', '_wplatino_menus' );

/**
 * Theme Options
 */
function _wplatino_theme_options( $wp_customize ) {
  // Front End Section
  $wp_customize->add_section( 'wplatino_settings' , array(
    'title'      => __( 'WP Latino Settings', 'wplatino' ),
    'priority'   => 0,
  ) );
  // Tel
  $wp_customize->add_setting( 'wplatino_tel' , array(
    'id'          => 'wplatino_tel',
    'default'     => '014055555555',
    'transport'   => 'refresh',
  ) );
  // Control
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'wplatino_tel',
      array(
        'label'          => __( 'Phone', 'wplatino' ),
        'section'        => 'wplatino_settings',
        'settings'       => 'wplatino_tel',
        'type'           => 'text',
      )
    )
  );
  // Tel Format
  $wp_customize->add_setting( 'wplatino_tel_format' , array(
    'id'          => 'wplatino_tel_format',
    'default'     => '+1 405 555-5555',
    'transport'   => 'refresh',
  ) );
  // Control
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'wplatino_tel_format',
      array(
        'label'          => __( 'Phone', 'wplatino' ),
        'section'        => 'wplatino_settings',
        'settings'       => 'wplatino_tel_format',
        'type'           => 'text',
      )
    )
  );
}
add_action( 'customize_register', '_wplatino_theme_options' );
?>