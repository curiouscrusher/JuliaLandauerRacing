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
									<p>Email</p>
									<p>
									<!-- Load the email address text -->
									<?php  echo get_post_meta($post->ID, 'contact-email', true); ?>
									</p>

									<p>Phone</p>
									<p>
									<!-- Load the phone number -->
									<?php  echo get_post_meta($post->ID, 'contact-phone', true); ?>
									</p>

									<p>Address</p>
									<p>
									<!-- Load the address -->
									<?php  echo get_post_meta($post->ID, 'contact-address', true); ?>
									</p>

									<!-- Begin MailChimp Signup Form -->
									<div id="mc_embed_signup">
										<form action="//julialandauer.us9.list-manage.com/subscribe/post?u=1ec5ea0db145448aa433052d1&amp;id=9fb1ba425c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
											<div id="mc_embed_signup_scroll">

												<div class="mc-field-group form-group">
													<input type="text" name="FNAME" class="required form-control" id="mce-FNAME" placeholder="Your Name">
												</div>

												<div class="mc-field-group form-group">
													<input type="email" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Your Email">
												</div>
												<div id="mce-responses" class="clear">
													<div class="response" id="mce-error-response" style="display:none"></div>
													<div class="response" id="mce-success-response" style="display:none"></div>
												</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

												<div style="position: absolute; left: -5000px;">
													<input type="text" name="b_1ec5ea0db145448aa433052d1_9fb1ba425c" tabindex="-1" value="">
												</div>
												<div class="clear">
													<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-large">
												</div>
											</div>

										</form>
									</div>
									<!--End MailChimp Signup Form -->

							</div>

					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /contact-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
