<?php
/**
 *
 * This is the template for the contact page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="contact-page">

				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

					<div class="contact-page__wrapper">
							<div class="contact-page__wrapper--contact-section">
								<h2 class="contact-page__reasons--title">Contact Us</h2>

								<p>Whether you would like to partner with Julia Landauer Racing or just say hi, Julia and the team would love to hear from you.
								<br /><br />
								We will try to respond within 3-5 business days.</p>

								<?php echo do_shortcode( '[contact-form-7 id="91" title="julia landauer contact"]' ); ?>
									
							</div>
							<div class="contact-page__wrapper--info-section">	
									
							</div>

					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /contact-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
