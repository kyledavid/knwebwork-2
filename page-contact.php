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
		<main id="main" class="site-main contact" role="main">
				<section id="title-area">
					<h1 id="page-title">Contact</h1>

					<form id="contact-form" action="<?php the_permalink; ?>" method="post">
						<input type="hidden" name="submitted" value="1">
						<div>
					        <label for="name"><span class="fa fa-user"></span> Name</label>
					        <input type="text" id="name" name="user_name">
					    </div>
					    <div>
					        <label for="mail"><span class="fa fa-envelope-o"></span> E-mail</label>
					        <input type="email" id="mail" name="user_mail">
					    </div>
					    <div>
					        <label for="msg"><span class="fa fa-comments-o"></span> Message</label>
					        <textarea id="msg" name="user_message"></textarea>
					    </div>
					    <div class="button">
					      <button type="submit" value="Submit" class="submit">Submit</button>
					    </div>
					</form>

				</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
