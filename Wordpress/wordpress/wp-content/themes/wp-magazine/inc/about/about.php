<?php

/**
 * Added One Page Conference Page.
*/
/**
 * Add a new page under Appearance
 */
function wp_magazine_menu()
{
    add_theme_page(
        __( 'Get Started', 'wp-magazine' ),
        __( 'Get Started', 'wp-magazine' ),
        'edit_theme_options',
        'wp-magazine-get-started',
        'wp_magazine_page'
    );
}

add_action( 'admin_menu', 'wp_magazine_menu' );
/**
 * Enqueue styles for the help page.
 */
function wp_magazine_admin_scripts( $hook )
{
    if ( 'appearance_page_wp-magazine-get-started' !== $hook ) {
        return;
    }
    wp_enqueue_style(
        'wp-magazine-admin-style',
        get_template_directory_uri() . '/inc/about/about.css',
        array(),
        ''
    );
}

add_action( 'admin_enqueue_scripts', 'wp_magazine_admin_scripts' );
/**
 * Add the theme page
 */
function wp_magazine_page()
{
    ?>
	<div class="das-wrap">
		<div class="wp-magazine-panel">
			<div class="wp-magazine-logo">
				<img class="ts-logo" width="25" src="<?php 
    echo  esc_url( get_template_directory_uri() . '/inc/about/images/logo.png' ) ;
    ?>" alt="Logo"> 
			</div>
			<?php 
    ?>
				<a href="https://wpmagplus.com/wp-magazine-plus/" target="_blank" class="btn btn-success pull-right"><?php 
    esc_html_e( 'Upgrade to Pro $29.99', 'wp-magazine' );
    ?></a>
			<?php 
    ?>
			<p>
			<?php 
    esc_html_e( 'WP Magazine WordPress Theme is easy to use theme for Passionate Bloggers, Writers and Editors. This theme is developed with lots of options that a magazine newspaper or blog need. WP Magazine Theme can be used by lifestyle bloggers, Personal blogging, magazine, newspaper, news portal and many more. This themes has  multiple layout options for header, footer, featured news, sliders, category news. You will also get unlimited google fonts, color options, easy to use customizer and most importantly show/hide and drag/drop options for all the sections.', 'wp-magazine' );
    ?></p>
			<a class="btn btn-primary" href="<?php 
    echo  esc_url( admin_url( '/customize.php' ) ) ;
    ?>"><?php 
    esc_html_e( 'Theme Options - Click Here', 'wp-magazine' );
    ?></a>
		</div>

		<div class="wp-magazine-panel">
			<div class="wp-magazine-panel-content">
				<div class="theme-title">
					<h3><?php 
    esc_html_e( 'Once you install all recommended plugins, you can import demo template.', 'wp-magazine' );
    ?></h3>
				</div>
				<a class="btn btn-secondary" href="<?php 
    echo  esc_url( admin_url( '/themes.php?page=advanced-import' ) ) ;
    ?>"><?php 
    esc_html_e( 'View Demo Templates', 'wp-magazine' );
    ?></a>
			</div>
		</div>
		<div class="wp-magazine-panel">
			<div class="wp-magazine-panel-content">
				<div class="theme-title">
					<h4><?php 
    esc_html_e( 'If you like the theme, please leave a review or Contact us for technical support.', 'wp-magazine' );
    ?></h4>
				</div>
				<a href="https://wordpress.org/support/theme/wp-magazine/reviews/#new-post" target="_blank" class="btn btn-secondary"><?php 
    esc_html_e( 'Rate this theme', 'wp-magazine' );
    ?></a> <a href="https://wpmagplus.com/support/" target="_blank" class="btn btn-secondary"><?php 
    esc_html_e( 'Contact Us', 'wp-magazine' );
    ?></a>
			</div>
		</div>
	</div>
	<?php 
}
