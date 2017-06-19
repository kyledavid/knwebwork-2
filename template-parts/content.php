<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kn-webwork_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'printable' ); ?>>
	<header class="entry-header">

		

		<?php
			if ( has_post_thumbnail() ) {
				if ( is_single() ) {
					echo '<div class="thumbnail-container">';
					the_post_thumbnail();
					echo '</div>';
				} else {
					echo '<div class="thumbnail-container"><a href="' . get_permalink() . '">';
					the_post_thumbnail();
					echo '</a></div>';
				}
				
			}
		?>
		
		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :  ?>
			
		<div class="entry-meta">
			<?php kn_webwork_2_posted_on(); ?>
			<a href="#" class="print-button fa fa-print" title="print post"></a>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kn-webwork-2' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kn-webwork-2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php kn_webwork_2_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
