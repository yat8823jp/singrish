<?php
function sr_customizer_extension__gnavi( $wp_customize ) {
	$wp_customize->add_section( 'sr_gnavi' , array(
		'title' => __( 'global navigation', 'singrish' ),
		'priority'   => 30,
		) );
	$wp_customize -> add_setting( 'gnavi_subitem_bg_color', array(
		'default'  => '#590000'
	) );
	$wp_customize -> add_setting( 'gnavi_link_color', array(
		'default'  => '#fffac6'
	) );
	$wp_customize -> add_setting( 'gnavi_visited_color', array(
		'default'  => '#fffac6'
	) );
	$wp_customize -> add_setting( 'gnavi_hover_color', array(
		'default'  => '#fff'
	) );
	$wp_customize -> add_setting( 'gnavi_active_color', array(
		'default'  => '#fff'
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'gnavi_subitem_bg_color',
		array(
			'label'    => __( 'gnavi subitem background', 'singrish' ),
			'section'  => 'sr_gnavi',
			'settings' => 'gnavi_subitem_bg_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'gnavi_text_color',
		array(
			'label'    => __( 'text', 'singrish' ),
			'section'  => 'sr_gnavi',
			'settings' => 'gnavi_text_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'gnavi_link_color',
		array(
			'label'    => __( 'link', 'singrish' ),
			'section'  => 'sr_gnavi',
			'settings' => 'gnavi_link_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'gnavi_visited_color',
		array(
			'label'    => __( 'visited', 'singrish' ),
			'section'  => 'sr_gnavi',
			'settings' => 'gnavi_visited_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'gnavi_hover_color',
		array(
			'label'    => __( 'hover', 'singrish' ),
			'section'  => 'sr_gnavi',
			'settings' => 'gnavi_hover_color',
			'priority' => 20
		)
	) );
	$wp_customize -> add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'gnavi_active_color',
		array(
			'label'    => __( 'active', 'singrish' ),
			'section'  => 'sr_gnavi',
			'settings' => 'gnavi_active_color',
			'priority' => 20
		)
	) );
}
add_action( 'customize_register', 'sr_customizer_extension__gnavi' );
