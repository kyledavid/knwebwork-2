<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kn-webwork_2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kn-webwork-2' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
					<p class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="logo-first">K&amp;N</span><span class="logo-second">|Webwork</span></a></p>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="fa fa-times-circle"></span></button>
				<?php wp_nav_menu( array( 
					'theme_location' => 'primary', 
					'menu_id' => 'primary-menu',
					'after'		=> '<hr class="nav-underline"/>',
				) ); ?>
			</nav><!-- #site-navigation -->
		</container>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
