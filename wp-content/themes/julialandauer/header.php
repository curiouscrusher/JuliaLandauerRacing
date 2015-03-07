<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package julialandauer
 */
?><!DOCTYPE html>
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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'julialandauer' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-1600.svg" media="(min-width: 1600px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-768.svg" media="(min-width: 768px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-400.svg" >
					<img srcset="<?php echo get_template_directory_uri(); ?>/images/logo/logo-400.svg" src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-1600.svg" alt="">
			</picture>
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'julialandauer' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
