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
							<div class="speaking-page__topics--nice-girls">
								<h1>1</h1>
								<h4>Can Nice Girls Win (Races)?</h4>
									<p>
										<!-- Load the speaking/history text -->
										<?php  echo get_post_meta($post->ID, 'speaking-nice-girls', true); ?>
									</p>
							</div>
							<div class="speaking-page__topics--branding">
								<h1>2</h1>
								<h4>The Brand of You</h4>	
									<p>
										<!-- Load the speaking text -->
										<?php  echo get_post_meta($post->ID, 'speaking-branding', true); ?>
									</p>
							</div>
							<div class="speaking-page__topics--mindsets">
								<h1>3</h1>
								<h4>Habits &amp; Mindsets of Successful People</h4>	
									<p>
										<!-- Load the speaking text -->
										<?php  echo get_post_meta($post->ID, 'speaking-mindsets', true); ?>
									</p>
							</div>
					</div>

					<div class="speaking-page__testimonials">
						<?php putRevSlider(11) ?>
					</div>	

					<div class="speaking-page__previous">
						<h3>Previous Speaking Clients</h3>
						<ul>
							<li>2016 IRC Summit, Presented by Elite Consulting Pro</li>
							<li>INBOUND 2015</li>
							<li>TEDxStanford</li>
							<li>Kansas State University</li>
							<li>ICAN Women's Leadership Conference</li>
							<li>Apple Store SF</li>
							<li>Meet the Innovators: Brand Builders</li>
							<li>Notre Dame High School for Girls</li>
							<li>Marymount School of New York</li>
							<li>Chabot Science Center</li>
							<li>Project Scientist</li>
						</ul>
					</div>

					<div class="speaking-page__video-feature">
						<div class="speaking-page__video-feature--left-block">
							<h4><?php  echo get_post_meta($post->ID, 'speaking-video-left-title', true); ?></h4>
							<p><?php  echo get_post_meta($post->ID, 'speaking-video-left-text', true); ?></p>
							<div class="speaking-page__video-feature--video">
								<?php  echo get_post_meta($post->ID, 'speaking-video-left-code', true); ?>
							</div>
						</div>
						<div class="speaking-page__video-feature--right-block">
							<h4><?php  echo get_post_meta($post->ID, 'speaking-video-right-title', true); ?></h4>
							<p><?php  echo get_post_meta($post->ID, 'speaking-video-right-text', true); ?></p>
							<div class="speaking-page__video-feature--video">
								<?php  echo get_post_meta($post->ID, 'speaking-video-right-code', true); ?>
							</div>
						</div>
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
