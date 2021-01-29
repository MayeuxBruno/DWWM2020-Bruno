<?php

function wp_magazine_customize_register_footer_section( $wp_customize )
{
    $wp_customize->add_section( 'wp_magazine_footer_section', array(
        'title'    => esc_html__( 'Footer / Copyright', 'wp-magazine' ),
        'panel'    => 'wp_magazine_general_panel',
        'priority' => 7,
    ) );
    $wp_customize->add_setting( 'copyright_text', array(
        'sanitize_callback' => 'wp_kses_post',
        'default'           => '&copy; Add/Edit copyright from Customizer > General Options > Footer/Copyright.',
    ) );
    $wp_customize->add_control( 'copyright_text', array(
        'label'    => esc_html__( 'Copyright :', 'wp-magazine' ),
        'section'  => 'wp_magazine_footer_section',
        'settings' => 'copyright_text',
        'type'     => 'textarea',
    ) );
    $wp_customize->selective_refresh->add_partial( 'copyright_text', array(
        'selector' => '.copyright',
    ) );
}
