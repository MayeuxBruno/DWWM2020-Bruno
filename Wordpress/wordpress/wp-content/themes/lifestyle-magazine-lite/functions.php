<?php
function lifestyle_magazine_lite_enqueue_styles() {
    $parent_style = 'wp-magazine-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style(
        'lifestyle-magazine-lite',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'bootstrap', $parent_style ),
        wp_get_theme()->get('Version') );


}
add_action( 'wp_enqueue_scripts', 'lifestyle_magazine_lite_enqueue_styles' );


 /**
  * Set default settings when switching themes
  */
function lifestyle_magazine_lite_customizer_default_settings() {
	set_theme_mod( 'site_title_color_option', '#00396b' );
	set_theme_mod( 'site_tagline_color', '#bfbfbf' );
	set_theme_mod( 'wp_magazine_logo_size', 39 );
	set_theme_mod( 'site_identity_font_family', 'Oleo Script' );
	set_theme_mod( 'header_image_height', 15 );

	set_theme_mod( 'header_background_color', '#fcfff7' );
	set_theme_mod( 'wp_magazine_header_layouts', 'two' );

	set_theme_mod( 'theme_headline_display_option', false );
	set_theme_mod( 'wp_magazine_headline_layouts', 'two' );

	set_theme_mod( 'font_color', '#3f3f3f' );
	set_theme_mod( 'font_family', 'Poppins' );
	set_theme_mod( 'font_size', '14px' );
	set_theme_mod( 'line_height', '24px' );
	set_theme_mod( 'button_color', '#aec95e' );
	set_theme_mod( 'footer_background_color', '#f4f0ed' );
	set_theme_mod( 'link_color', '#898989' );

	set_theme_mod( 'top_bar_background_color', '#657182' );
	set_theme_mod( 'menu_font_color', '#301e00' );
	set_theme_mod( 'menu_background_color', '#d4f7dc' );
	set_theme_mod( 'menu_font_family', 'Questrial' );
	set_theme_mod( 'menu_font_size', '16px' );

	set_theme_mod( 'headline_colors', '#333333' );
	set_theme_mod( 'headline_news_title_font_weight', 300 );
	set_theme_mod( 'featured_news_title_font_size', '20px' );
	set_theme_mod( 'featured_news_title_line_height', '26px' );
	set_theme_mod( 'featured_news_title_font_weight', 300 );
	set_theme_mod( 'category_news_title_font_size', '20px' );
	set_theme_mod( 'category_news_title_line_height', '26px' );
	set_theme_mod( 'category_news_title_font_weight', 300 );
	set_theme_mod( 'blog_colors', '#474747' );
	set_theme_mod( 'blog_news_title_font_size', '20px' );
	set_theme_mod( 'blog_news_title_line_height', '26px' );
	set_theme_mod( 'blog_news_title_font_weight', 300 );
	set_theme_mod( 'slider_colors', '#474747' );
	set_theme_mod( 'slider_news_title_font_size', '20px' );
	set_theme_mod( 'slider_news_title_line_height', '24px' );
	set_theme_mod( 'slider_news_title_font_weight', 300 );

	set_theme_mod( 'number_of_featured_posts', '3' );
	set_theme_mod( 'wp_magazine_featured_layouts', '2' );
	set_theme_mod( 'featured_lifestyle_show_hide_details', array( 'date', 'categories', 'tags', 'read-more' ) );

	set_theme_mod( 'number_of_news_carousel_posts', 5 );
	set_theme_mod( 'news_carousel_bg_color', '#f4efe8' );

	set_theme_mod( 'wp_magazine_sort_homepage', array( 'featured-news', 'category-news', 'news-carousel', 'pages', 'blog-posts', 'cta' ) );

	set_theme_mod( 'homepage_blog_section_number_of_posts', 6 );
	set_theme_mod( 'blog_post_view', 'list-view' );

}
add_action( 'after_switch_theme', 'lifestyle_magazine_lite_customizer_default_settings' );