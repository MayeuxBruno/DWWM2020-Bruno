<?php

/**
 * Pagination Settings
 *
 * @package WP Magazine
 */


add_action( 'customize_register', 'wp_magazine_customize_register_pagination_section' );
function wp_magazine_customize_register_pagination_section( $wp_customize ) {

    $wp_customize->add_section( 'wp_magazine_pagination_section', array(
        'title'          => esc_html__( 'Pagination', 'wp-magazine' ),
        'description'    => esc_html__( 'Pagination :', 'wp-magazine' ),
        'panel'          => 'wp_magazine_general_panel',
        'priority'       => 4,        
    ) );
}

add_action( 'customize_register', 'wp_magazine_customize_pagination' );

function wp_magazine_customize_pagination( $wp_customize ) {

    $wp_customize->add_setting( 'pagination_type', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_magazine_sanitize_choices',
        'default'     => 'ajax-loadmore',
    ) );

    $wp_customize->add_control( new Wp_Magazine_Radio_Buttonset_Control( $wp_customize, 'pagination_type', array(
        'label' => esc_html__( 'Pagination Type :', 'wp-magazine' ),
        'section' => 'wp_magazine_pagination_section',
        'settings' => 'pagination_type',
        'type'=> 'radio-buttonset',
        'choices'     => array(
            'ajax-loadmore' => esc_html__( 'Ajax Loadmore', 'wp-magazine' ),
            'number-pagination'    =>  esc_html__( 'Number Pagination', 'wp-magazine' ),      
        ),
    ) ) );            
    
}