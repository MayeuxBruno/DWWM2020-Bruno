<?php

/**
 * Wp Magazine Pro Theme Info
 *
 * @package WP Magazine
 */
function wp_magazine_customizer_theme_info( $wp_customize )
{
    $description = esc_html__( 'Check out step-by-step tutorial to create your website like the demo of Wp Magazine WordPress theme.', 'wp-magazine' );
    $wp_customize->add_section( 'theme_info', array(
        'title'    => esc_html__( 'Demo and Documentation', 'wp-magazine' ),
        'priority' => 1,
    ) );
    $wp_customize->add_setting( 'setup_instruction', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Wp_Magazine_Custom_Text( $wp_customize, 'setup_instruction', array(
        'settings'    => 'setup_instruction',
        'section'     => 'theme_info',
        'description' => $description,
    ) ) );
    $wp_customize->add_setting( 'theme_info_theme', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $theme_info = '';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . esc_html__( 'Theme Demo', 'wp-magazine' ) . ': </label><a href="' . esc_url( 'https://wpmagplus.com/starter-demos/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'wp-magazine' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . esc_html__( 'Theme Details', 'wp-magazine' ) . ': </label><a href="' . esc_url( 'https://wpmagplus.com/free-wp-magazine-theme/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'wp-magazine' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . esc_html__( 'How to use', 'wp-magazine' ) . ': </label><a href="' . esc_url( 'https://wpmagplus.com/docs' ) . '" target="_blank">' . esc_html__( 'Click Here', 'wp-magazine' ) . '</a></span><br />';
    $theme_info .= '<a target="_blank" class="button button-large" href="' . esc_url( "https://wpmagplus.com/wp-magazine-plus/" ) . '">' . esc_html__( 'Explore Premium Features', 'wp-magazine' ) . '</a>';
    $wp_customize->add_control( new Wp_Magazine_Custom_Text( $wp_customize, 'theme_info_theme', array(
        'section' => 'theme_info',
        'label'   => $theme_info,
    ) ) );
}

add_action( 'customize_register', 'wp_magazine_customizer_theme_info' );