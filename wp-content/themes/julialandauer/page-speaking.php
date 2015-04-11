<?php
/**
 *
 * This is the template for the speaking page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="speaking-page">

				<?php while ( have_posts() ) : the_post(); ?>

					
					
					<?php get_template_part( 'content', 'page' ); ?>

					<div class="speaking-page__topics">
						<h2 class="speaking-page__topics--title">Events &amp; Speaking</h2>
							<div class="speaking-page__topics--team">
								<h1>1</h1>
								<h4>Team Building</h4>
									<p>
										<!-- Load the speaking/history text -->
										<?php  echo get_post_meta($post->ID, 'speaking-team', true); ?>
									</p>
							</div>
							<div class="speaking-page__topics--branding">
								<h1>2</h1>
								<h4>Branding &amp; Marketing</h4>	
									<p>
										<!-- Load the speaking text -->
										<?php  echo get_post_meta($post->ID, 'speaking-branding', true); ?>
									</p>
							</div>
							<div class="speaking-page__topics--stem">
								<h1>3</h1>
								<h4>STEM</h4>	
									<p>
										<!-- Load the speaking text -->
										<?php  echo get_post_meta($post->ID, 'speaking-stem', true); ?>
									</p>
							</div>
					</div>

					<div class="speaking-page__testimonials">
						<?php putRevSlider(3) ?>
					</div>	

					<div class="speaking-page__contact">
						<h4 class="speaking-page__contact--title">Ready For Julia To Speak At Your Event?</h4>
							<p class="speaking-page__contact--lead">
								<!-- Load the speaking text -->
								<?php  echo get_post_meta($post->ID, 'speaking-lead', true); ?>
							</p>
						
						<?php echo do_shortcode ( '[contact-form-7 id="109" title="Speaking Request"]' ); ?>
					</div>				

				<?php endwhile; // end of the loop. ?>

			</div><!-- /speaking-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
