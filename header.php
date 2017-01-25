<?php
/**
 * Header Template
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>

	<header id="masthead" class="site-header" role="banner">

		<div id="masthead-inner" data-stellar-background-ratio="0.35">
			
			<div class="header-contact-section">
				<div>
					<?php echo get_theme_mod( 'altitude_child_header_contact_text' ); ?>
				</div>
				<div>
					<?php echo get_theme_mod( 'altitude_child_header_contact_number' ); ?>
				</div>
			</div>

			<div id="main_navigation_container" class="container">
				<div class="row">
					<div class="xs-col-12">

						<!-- <div id="site_logo" class="xs-col-12 s-col-2">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel="home">
								<img src='<?php echo esc_url( get_theme_mod( 'altitude_logo_image', get_template_directory_uri() . '/images/default_logo.png' ) ); ?>'
									 alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
							</a>
						</div>-->
						<!-- #site-logo -->
						

						<nav id="site_navigation" class="xs-col-12 m-col-8" role="navigation">
							<div id="xs_menu_button" class="s-show">
								<a href="#" id="menu_button" class="genericon genericon-menu"></a>
							</div>
							<div class="screen-reader-text skip-link">
								<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'altitude' ); ?>"><?php _e( 'Skip to content', 'altitude' ); ?></a>
							</div>
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</nav>
						<!-- #site-navigation -->

						<div id="social_container" class="xs-col-12 s-col-2">
							<ul class="social-icons">
								<?php if ( '' != get_theme_mod( 'jetpack-twitter' ) ): ?>
									<li class="altitude-twitter">
										<a href="<?php echo esc_url( get_theme_mod( 'jetpack-twitter' ) ); ?>" title="<?php _e( 'Twitter', 'altitude' ); ?>">
											<i class="genericon genericon-twitter"></i>
										</a>
									</li>
								<?php elseif ( '' != get_theme_mod( 'altitude_twitter' ) ): ?>
									<li class="altitude-twitter">
										<a href="<?php echo esc_url( get_theme_mod( 'altitude_twitter' ) ); ?>" title="<?php _e( 'Twitter', 'altitude' ); ?>">
											<i class="genericon genericon-twitter"></i>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( '' != get_theme_mod( 'jetpack-facebook' ) ): ?>
									<li class="altitude-facebook">
										<a href="<?php echo esc_url( get_theme_mod( 'jetpack-facebook' ) ); ?>" title="<?php _e( 'Facebook', 'altitude' ); ?>">
											<i class="genericon genericon-facebook"></i>
										</a>
									</li>
								<?php elseif ( '' != get_theme_mod( 'altitude_facebook' ) ): ?>
									<li class="altitude-facebook">
										<a href="<?php echo esc_url( get_theme_mod( 'altitude_facebook' ) ); ?>" title="<?php _e( 'Facebook', 'altitude' ); ?>">
											<i class="genericon genericon-facebook"></i>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( '' != get_theme_mod( 'jetpack-google_plus' ) ): ?>
									<li class="altitude-google-plus">
										<a href="<?php echo esc_url( get_theme_mod( 'jetpack-google_plus' ) ); ?>" title="<?php _e( 'Google Plus', 'altitude' ); ?>">
											<i class="genericon genericon-google-plus"></i>
										</a>
									</li>
								<?php elseif ( '' != get_theme_mod( 'altitude_google_plus' ) ): ?>
									<li class="altitude-google-plus">
										<a href="<?php echo esc_url( get_theme_mod( 'altitude_google_plus' ) ); ?>" title="<?php _e( 'Google Plus', 'altitude' ); ?>">
											<i class="genericon genericon-google-plus"></i>
										</a>
									</li>
								<?php endif; ?>
							</ul>
							<!-- .social-icons -->
						</div>

					</div>
					<!-- col -->
				</div>
				<!-- row -->
			</div>
			<!-- navigation container -->

			<div id="site_branding_container" class="container">
				<div class="container-inner">
					<div class="site-branding">
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div>
					<?php if ( is_front_page() ) : ?>
						<div class="button">
							<?php if ( esc_html( get_theme_mod( 'altitude_home_button_text' ) ) ) : ?>
								<a href="<?php echo esc_url( get_theme_mod( 'altitude_home_button_link' ) ); ?>"><?php echo esc_html( get_theme_mod( 'altitude_home_button_text' ) ); ?></a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<!-- site branding container -->

		</div>
		<!-- #masthead-inner -->

	</header>
	<!-- #masthead -->

	<div id="content" class="site-content">
