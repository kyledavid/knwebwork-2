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

					<button id="hero-cta">GET STARTED</button>

					<div class="nav-arrow-down">
						<span class="arrow-cap">Our Difference</span>
						<icon class="fa fa-angle-double-down"></icon>
					</div>

					<ul id="side-controls">
						<li>&ndash; Our Difference</li>
						<li>&ndash; Our Work</li>
						<li>&ndash; Get Started</li>
					</ul>
				</div><!-- container -->
			</section>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
