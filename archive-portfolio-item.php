<?php
/**
 * The template for displaying Portfolio Items
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
				<div class="mix-controls">
					<button type="button" data-filter='all'>All</button>
					<button type="button" data-filter='ruby'>Ruby</button>
					<button type="button" data-filter='javascript'>Javascript</button>
					<button type="button" data-filter='none'>None</button>
				</div>
				<section id="portfolio-items" class="mix-container">
					<?php
					if ( have_posts() ) : 

						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>

							<?php 

							$terms = get_the_terms( $post->ID, 'item_type'); 
							$term = '';

							if ( $terms):
								$term = $terms[0]->name;
							endif;

							?> 

							<a class="mix port-item" href="<?php echo get_field('portfolio_link');?>" target="_blank" data-tax="<?php echo $term; ?>">
								<?php the_post_thumbnail('full', ['class' => 'p-screenshot']); ?>
								<div class="port-overlay">
									<?php the_title( '<h3 class="port-caption">', '</h3>'); ?>
								</div>
							</a>
						<?php 
						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				
				</section>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
