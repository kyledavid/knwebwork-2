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

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<h1 class="page-title">Our Work</h1>
				<section id="portfolio-items">
					<a class="port-item" href="https://codepen.io/kyledavid/full/owNaVz" target="_blank">
						<img class="p-screenshot" src="http://www.knwebwork.com/wp-content/uploads/2017/06/javascript-drag-and-drop-e1496854167592.jpg"/>
						<div class="port-overlay">
							<h3 class="port-caption">Vanilla JS Drag and Drop</h3>
						</div>
					</a>
				</section>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
