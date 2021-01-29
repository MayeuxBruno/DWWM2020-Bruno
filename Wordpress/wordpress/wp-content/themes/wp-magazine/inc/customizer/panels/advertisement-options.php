<?php
/**
 * Advertisement Settings
 *
 * @package WP Magazine
 */

add_action( 'customize_register', 'wp_magazine_customize_register_ad_panel' );

function wp_magazine_customize_register_ad_panel( $wp_customize ) {
	$wp_customize->add_panel( 'wp_magazine_ad_panel', array(
	    'title'       => esc_html__( 'Advertisement Options', 'wp-magazine' ),
	) );
}