<?php
function sr_customizer_extension_footer( $wp_customize ) {

	$wp_customize -> add_setting( 'footer_background_color', array(
		'default'  => '#7d0000'
	) );
	$wp_customize -> add_setting( 'footer_text_color', array(
		'default'  => '#fffac6'
	) );
	$wp_customize -> add_setting( 'footer_link_color', array(
		'default'  => '#fffac6'
	) );
	$wp_customize -> add_setting( 'footer_visited_color', array(
		'default'  => '#fffac6'
	) );
	$wp_customize -> add_setting( 'footer_hover_color', array(
		'default'  => '#fff'
	) );
	$wp_customize -> add_setting( 'footer_active_color', array(
		'default'  => '#fff'
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_background_color',
		array(
			'label'    => __( 'footer background', 'singrish' ),
			'section'  => 'colors',
			'settings' => 'footer_background_color',
			'priority' => 20
			)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_text_color',
		array(
			'label'    => __( 'footer text', 'singrish' ),
			'section'  => 'colors',
			'settings' => 'footer_text_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_link_color',
		array(
			'label'    => __( 'footer link', 'singrish' ),
			'section'  => 'colors',
			'settings' => 'footer_link_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
	$wp_customize,
		'footer_visited_color',
		array(
			'label'    => __( 'footer visited', 'singrish' ),
			'section'  => 'colors',
			'settings' => 'footer_visited_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
	$wp_customize,
		'footer_hover_color',
		array(
			'label'    => __( 'footer hover', 'singrish' ),
			'section'  => 'colors',
			'settings' => 'footer_hover_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_active_color',
		array(
			'label'    => __( 'footer active', 'singrish' ),
			'section'  => 'colors',
			'settings' => 'footer_active_color',
			'priority' => 20
		)
	) );
}
add_action( 'customize_register', 'sr_customizer_extension_footer' );
