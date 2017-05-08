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
				<section id="title-area">
					<h1 id="page-title">Contact</h1>

					<form id="contact-form">
						<div>
					        <label for="name"><icon class="fa fa-user"></icon> Name</label>
					        <input type="text" id="name" name="user_name">
					    </div>
					    <div>
					        <label for="mail"><icon class="fa fa-envelope-o"></icon> E-mail</label>
					        <input type="email" id="mail" name="user_mail">
					    </div>
					    <div>
					        <label for="msg"><icon class="fa fa-comments-o"></icon> Message</label>
					        <textarea id="msg" name="user_message"></textarea>
					    </div>
					    <div class="button">
					      <button type="submit" class="submit">Submit</button>
					    </div>
					</form>

				</section>
				

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
