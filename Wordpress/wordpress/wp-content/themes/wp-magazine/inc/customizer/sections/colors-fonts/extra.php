<?php

/**
 * Extra Colors and Fonts Settings
 *
 * @package WP Magazine
 */

add_action( 'customize_register', 'wp_magazine_customize_register_extra_fonts_colors' );
function wp_magazine_customize_register_extra_fonts_colors( $wp_customize ) {

    $wp_customize->add_section( 'wp_magazine_extra_fonts_colors_section', array(
        'title'          => esc_html__( 'Extra Fonts and Colors', 'wp-magazine' ),
        'panel'          => 'wp_magazine_colors_fonts_panel',
    ) );
}


add_action( 'customize_register', 'wp_magazine_customize_extra_fonts_colors' );
function wp_magazine_customize_extra_fonts_colors( $wp_customize ) {

    // link color
    $wp_customize->add_setting( 'link_color', array(
        'transport'   => 'postMessage',
        'default'     => '#2173ce',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'      => esc_html__( 'Link Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_extra_fonts_colors_section',
        'settings'   => 'link_color',
    ) ) );

    // link color


    // button color
    $wp_customize->add_setting( 'button_color', array(
        'transport'   => 'postMessage',
        'default'     => '#2173ce',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
        'label'      => esc_html__( 'Button Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_extra_fonts_colors_section',
        'settings'   => 'button_color',
    ) ) );

    // button color

    $wp_customize->add_setting( 'body_background_color', array(
        'transport'   => 'postMessage',
        'default'     => '#fff',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_background_color', array(
        'label'      => esc_html__( 'Background Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_extra_fonts_colors_section',
        'settings'   => 'body_background_color',
    ) ) );


    $wp_customize->add_setting( 'footer_background_color', array(
        'transport'   => 'postMessage',
        'default'     => '#ececec',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
        'label'      => esc_html__( 'Footer Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_extra_fonts_colors_section',
        'settings'   => 'footer_background_color',
    ) ) );


    $wp_customize->add_setting( 'link_color', array(
        'transport'   => 'postMessage',
        'default'     => '#ececec',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'      => esc_html__( 'Link Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_extra_fonts_colors_section',
        'settings'   => 'link_color',
    ) ) );
    
}