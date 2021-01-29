<?php

/**
 * Body Fonts Settings
 *
 * @package WP Magazine
 */

add_action( 'customize_register', 'wp_magazine_customize_register_body_fonts' );
function wp_magazine_customize_register_body_fonts( $wp_customize ) {

    $wp_customize->add_section( 'wp_magazine_body_fonts_section', array(
        'title'          => esc_html__( 'Main Body', 'wp-magazine' ),
        'panel'          => 'wp_magazine_colors_fonts_panel',
    ) );
}


add_action( 'customize_register', 'wp_magazine_customize_body_fonts_colors' );
function wp_magazine_customize_body_fonts_colors( $wp_customize ) {

    $wp_customize->add_setting( 'font_color', array(
        'transport'   => 'postMessage',
        'default'     => '#333',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'font_color', array(
        'label'      => esc_html__( 'Font Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_body_fonts_section',
        'settings'   => 'font_color',
    ) ) );

    $wp_customize->add_setting( 'primary_color', array(
        'default'     => '#333',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'      => esc_html__( 'Primary Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_body_fonts_section',
        'settings'   => 'primary_color',
    ) ) );

            
    $wp_customize->add_setting( 'font_family', array(
        'transport' => 'postMessage',
        'default'     => 'Source Sans Pro',
        'sanitize_callback' => 'wp_magazine_sanitize_google_fonts',
    ) );

    $wp_customize->add_control( 'font_family', array(
        'settings'    => 'font_family',
        'label'       =>  esc_html__( 'Font Family', 'wp-magazine' ),
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'select',
        'choices'     => wp_magazine_google_fonts(),
    ) );

    $wp_customize->add_setting( 'font_size', array(
      'transport' => 'postMessage',
      'default'     => '15px',
      'sanitize_callback' => 'wp_magazine_sanitize_select',
    ) );
    
    $wp_customize->add_control( 'font_size', array(
        'settings'    => 'font_size',
        'label'       =>  esc_html__( 'Font Size', 'wp-magazine' ),
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'select',
        'default'     => '15px',
        'choices'     =>  array(
                        '12px' => '12px',          
                        '13px' => '13px',
                        '14px' => '14px',
                        '15px' => '15px',
                        '16px' => '16px',
                        '17px' => '17px',
                        '18px' => '18px',
                        '19px' => '19px',
                        '20px' => '20px',
                        '21px' => '21px',
                        '22px' => '22px',
                    ),
      ) );

    // line height amit
    $wp_customize->add_setting( 'line_height', array(
      'default'     => '22px',
      'transport' => 'postMessage',
      'sanitize_callback' => 'wp_magazine_sanitize_select',
    ) );
    
    $wp_customize->add_control( 'line_height', array(
        'settings'    => 'line_height',
        'label'       =>  esc_html__( 'Line Height', 'wp-magazine' ),
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'select',
        'default'     => '22px',
        'choices'     =>  array(             
                        '13px' => '13px',
                        '14px' => '14px',
                        '15px' => '15px',
                        '16px' => '16px',
                        '17px' => '17px',
                        '18px' => '18px',
                        '19px' => '19px',
                        '20px' => '20px',
                        '21px' => '21px',
                        '22px' => '22px',
                        '23px' => '23px',
                        '24px' => '24px',
                    ),
      ) );

    $wp_customize->add_setting( 'wp_magazine_font_weight', array(
        'default'           => 400,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Wp_Magazine_Slider_Control( $wp_customize, 'wp_magazine_font_weight', array(
        'section' => 'wp_magazine_body_fonts_section',
        'settings' => 'wp_magazine_font_weight',
        'label'   => esc_html__( 'Font Weight', 'wp-magazine' ),
        'choices'     => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
    ) ) );


    $wp_customize->add_setting( 'detail_post_page_fonts_colors_label', array(
        'sanitize_callback' => 'wp_kses_post',
    ) );

    $wp_customize->add_control( new Wp_Magazine_Custom_Text( $wp_customize, 'detail_post_page_fonts_colors_label', array(
        'settings'    => 'detail_post_page_fonts_colors_label',
        'label'       =>  '<div class="customizer-custom-label">' . esc_html__( "Detail Post/Page", 'wp-magazine' ) . '</div>',
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'customtext',
    ) ) );

    $wp_customize->add_setting( 'detail_post_page_font_size', array(
      'default'     => '15px',
      'sanitize_callback' => 'wp_magazine_sanitize_select',
    ) );
    
    $wp_customize->add_control( 'detail_post_page_font_size', array(
        'settings'    => 'detail_post_page_font_size',
        'label'       =>  esc_html__( 'Font Size', 'wp-magazine' ),
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'select',
        'default'     => '15px',
        'choices'     =>  array(
                        '12px' => '12px',          
                        '13px' => '13px',
                        '14px' => '14px',
                        '15px' => '15px',
                        '16px' => '16px',
                        '17px' => '17px',
                        '18px' => '18px',
                        '19px' => '19px',
                        '20px' => '20px',
                        '21px' => '21px',
                        '22px' => '22px',
                    ),
      ) );


    $wp_customize->add_setting( 'detail_post_page_font_color', array(
        'default'     => '#333',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail_post_page_font_color', array(
        'label'      => esc_html__( 'Font Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_body_fonts_section',
        'settings'   => 'detail_post_page_font_color',
    ) ) );

            
    $wp_customize->add_setting( 'detail_post_page_font_family', array(
        'default'     => 'Source Sans Pro',
        'sanitize_callback' => 'wp_magazine_sanitize_google_fonts',
    ) );

    $wp_customize->add_control( 'detail_post_page_font_family', array(
        'settings'    => 'detail_post_page_font_family',
        'label'       =>  esc_html__( 'Font Family', 'wp-magazine' ),
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'select',
        'choices'     => wp_magazine_google_fonts(),
    ) );

    

    $wp_customize->add_setting( 'detail_post_page_line_height', array(
      'default'     => '18px',
      'sanitize_callback' => 'wp_magazine_sanitize_select',
    ) );
    
    $wp_customize->add_control( 'detail_post_page_line_height', array(
        'settings'    => 'detail_post_page_line_height',
        'label'       =>  esc_html__( 'Line Height', 'wp-magazine' ),
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'select',
        'choices'     =>  array(             
                        '13px' => '13px',
                        '14px' => '14px',
                        '15px' => '15px',
                        '16px' => '16px',
                        '17px' => '17px',
                        '18px' => '18px',
                        '19px' => '19px',
                        '20px' => '20px',
                        '21px' => '21px',
                        '22px' => '22px',
                        '23px' => '23px',
                        '24px' => '24px',
                        '25px' => '25px',
                        '26px' => '26px',
                        '27px' => '27px',
                        '28px' => '28px',
                        '29px' => '29px',
                        '30px' => '30px',
                        '31px' => '31px',
                        '32px' => '32px',
                        '33px' => '33px',
                        '34px' => '34px',
                        '35px' => '35px',
                    ),
      ) );

    $wp_customize->add_setting( 'detail_post_page_font_weight', array(
        'default'           => 400,
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new Wp_Magazine_Slider_Control( $wp_customize, 'detail_post_page_font_weight', array(
        'section' => 'wp_magazine_body_fonts_section',
        'settings' => 'detail_post_page_font_weight',
        'label'   => esc_html__( 'Font Weight', 'wp-magazine' ),
        'choices'     => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
    ) ) );


    $wp_customize->add_setting( 'extra_fonts_colors_label', array(
        'sanitize_callback' => 'wp_kses_post',
    ) );

    $wp_customize->add_control( new Wp_Magazine_Custom_Text( $wp_customize, 'extra_fonts_colors_label', array(
        'settings'    => 'extra_fonts_colors_label',
        'label'       =>  '<div class="customizer-custom-label">' . esc_html__( "Extra", 'wp-magazine' ) . '</div>',
        'section'     => 'wp_magazine_body_fonts_section',
        'type'        => 'customtext',
    ) ) );


     // link color
    $wp_customize->add_setting( 'link_color', array(
        'transport'   => 'postMessage',
        'default'     => '#2173ce',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'      => esc_html__( 'Link Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_body_fonts_section',
        'settings'   => 'link_color',
    ) ) );

    // link color


    // button color
    $wp_customize->add_setting( 'button_color', array(
        'transport'   => 'postMessage',
        'default'     => '#20e3ea',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
        'label'      => esc_html__( 'Button Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_body_fonts_section',
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
        'section'    => 'wp_magazine_body_fonts_section',
        'settings'   => 'body_background_color',
    ) ) );


    $wp_customize->add_setting( 'footer_background_color', array(
        'transport'   => 'postMessage',
        'default'     => '#ececec',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
        'label'      => esc_html__( 'Footer Background Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_body_fonts_section',
        'settings'   => 'footer_background_color',
    ) ) );


    $wp_customize->add_setting( 'link_color', array(
        'transport'   => 'postMessage',
        'default'     => '#ececec',
        'sanitize_callback' => 'wp_magazine_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'      => esc_html__( 'Link Color', 'wp-magazine' ),
        'section'    => 'wp_magazine_body_fonts_section',
        'settings'   => 'link_color',
    ) ) );

}