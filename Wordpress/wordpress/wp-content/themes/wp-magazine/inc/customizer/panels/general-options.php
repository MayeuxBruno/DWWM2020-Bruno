<?php
/**
 * General Settings
 *
 * @package WP Magazine
 */

add_action( 'customize_register', 'wp_magazine_customize_register_general_panel' );

function wp_magazine_customize_register_general_panel( $wp_customize ) {
	$wp_customize->add_panel( 'wp_magazine_general_panel', array(
	    'title'       => esc_html__( 'General Options', 'wp-magazine' ),
	    'priority' => 4
	) );
}