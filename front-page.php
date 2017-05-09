<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kn-webwork_2
 */

get_header(); 
$heroImage = get_field('hero_image');
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="hero" style="background-image: url(<?php echo $heroImage['url']; ?>);">
				<div class="container hero-container">

					<h1 id="introduction">
						Las Vegas Grown 
						<br/>
						<span class="intro-pt-2">Custom Built Apps and Websites.</span>
					</h1>

					<a href="<?php echo get_stylesheet_directory_uri() . '/contact'; ?>" id="hero-cta">GET STARTED</a>

					<div class="nav-arrow-down">
						<a href="#our-difference">
							<span class="arrow-cap">Our Difference</span>
							<icon class="fa fa-angle-double-down"></icon>
						</a>
					</div>

					<ul id="side-controls">
						<li>&ndash; Our Difference</li>
						<li>&ndash; Our Work</li>
						<li>&ndash; Get Started</li>
					</ul>
				</div><!-- container -->
			</section>
			<section id="our-difference">
				<div class="container">
					<h1>Our Difference</h1>
					<p>Coming Soon</p>
				</div>
			</section>

<?php
get_footer();
