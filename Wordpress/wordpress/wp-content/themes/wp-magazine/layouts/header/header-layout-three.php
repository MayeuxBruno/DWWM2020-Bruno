<?php $header_text_color = get_header_textcolor(); ?>
<?php
$header_bg = "";
if( has_header_image() ) {
	$header_bg = ' style=background-image:url('. esc_url( get_header_image() ) .')';
}
?>
<header class="header-3">

	<section  class="main-nav nav-three <?php if( $menu_sticky ) echo ' sticky-header'; ?>">
		<div class="container">
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><!-- <?php esc_html_e( 'Primary Menu', 'wp-magazine' ); ?> -->
					<div id="nav-icon">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</section>


	<section class="top-bar  top-bar-1"<?php echo esc_attr( $header_bg ); ?>>
		<div class="container">
			<div class="row top-head-1">
				<!-- Brand and toggle get grouped for better mobile display -->	
				<div class="col-sm-3">
					<?php
					// To store only value which has links :
					if ( ! empty( $social_media ) && is_array( $social_media ) ) {
						$social_media_filtered = array();
						foreach ( $social_media as $value ) {
							if( empty( $value['social_media_link'] ) ) {
								continue;
							}
							$social_media_filtered[] = $value; 
						}
					}	
					?>

					<?php if ( ! empty( $social_media_filtered ) && is_array( $social_media_filtered ) ) : ?>
					<!-- top-bar -->
					<div class="social-icons">
						<ul class="list-inline">
							<?php foreach ( $social_media_filtered as $value ) { ?>
								<?php $class = strtolower( 'fa fa-' . $value['social_media_title'] ); ?>
								<li class="<?php echo esc_attr( strtolower( $value['social_media_title'] ) ); ?>"><a href="<?php echo esc_url( $value['social_media_link'] ); ?>" target="_blank"><i class="<?php echo esc_attr( $class ); ?>"></i></a></li>
							<?php } ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>	

			<div class="col-sm-6 logo text-center">			
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				}
				if( display_header_text() ) : ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></div>
					<div class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></div>

				<?php endif; ?>
			</div>
			<?php if( get_theme_mod( 'header_search_display_option', true ) ) : ?>
				<div class="col-sm-3"><div class="search-top"><?php get_search_form( $echo = true ); ?></div></div>
			<?php endif; ?>
		</div>
	</div> <!-- /.end of container -->
</section> <!-- /.end of section -->

</header>