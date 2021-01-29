<?php

/**
 * Header Advertisement Settings
 *
 * @package WP Magazine
 */
add_action( 'customize_register', 'wp_magazine_customize_register_header_ad' );
function wp_magazine_customize_register_header_ad( $wp_customize )
{
    $wp_customize->add_section( 'wp_magazine_header_ad_sections', array(
        'title'       => esc_html__( 'Header Advertisement', 'wp-magazine' ),
        'description' => esc_html__( 'Header Advertisement :', 'wp-magazine' ),
        'panel'       => 'wp_magazine_ad_panel',
        'priority'    => 1,
    ) );
    $wp_customize->add_setting( 'header_ad_image', array(
        'sanitize_callback' => 'wp_magazine_sanitize_image',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_ad_image', array(
        'label'    => esc_html__( 'Upload ad Advertisement', 'wp-magazine' ),
        'section'  => 'wp_magazine_header_ad_sections',
        'settings' => 'header_ad_image',
    ) ) );
    $wp_customize->add_setting( 'ad_link', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'ad_link', array(
        'type'        => 'text',
        'section'     => 'wp_magazine_header_ad_sections',
        'Settings'    => 'ad_link',
        'label'       => esc_html__( 'Advertisement Link :', 'wp-magazine' ),
        'description' => esc_html__( 'Image Advertisement Link goes here.', 'wp-magazine' ),
    ) );
    $wp_customize->add_setting( 'header_image_ad_display_option', array(
        'sanitize_callback' => 'wp_magazine_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Wp_Magazine_Toggle_Control( $wp_customize, 'header_image_ad_display_option', array(
        'label'    => esc_html__( 'Enable Image Ad', 'wp-magazine' ),
        'section'  => 'wp_magazine_header_ad_sections',
        'settings' => 'header_image_ad_display_option',
        'type'     => 'toggle',
    ) ) );
}
