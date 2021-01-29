<?php

/**
 * Image Border Settings
 *
 * @package WP Magazine
 */


add_action( 'customize_register', 'wp_magazine_customize_register_image_border_section' );
function wp_magazine_customize_register_image_border_section( $wp_customize ) {

    $wp_customize->add_section( 'wp_magazine_image_border_section', array(
        'title'          => esc_html__( 'Image Border', 'wp-magazine' ),
        'panel'          => 'wp_magazine_general_panel',
        'priority'       => 2,        
    ) );
}



add_action( 'customize_register', 'wp_magazine_image_border' );

function wp_magazine_image_border( $wp_customize ) {

    $wp_customize->add_setting( 'image_border', array(
        'default'           => 5,
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new Wp_Magazine_Slider_Control( $wp_customize, 'image_border', array(
        'section' => 'wp_magazine_image_border_section',
        'settings' => 'image_border',
        'label'   => esc_html__( 'Image Border', 'wp-magazine' ),
        'choices'     => array(
            'min'  => 0,
            'max'  => 15,
            'step' => 1,
        ),
    ) ) );

}