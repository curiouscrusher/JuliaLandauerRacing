<?php
/**
 *
 * This is the template for the about page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="about-page">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<div class="about-page__history">
						<h2 class="about-page__history--title">About Julia</h2>
						<div class="about-page__history--left">
						<p>
							<!-- Load the about/history text -->
							<?php  echo get_post_meta($post->ID, 'about_left', true); ?>
						</p>
						</div>
						<div class="about-page__history--right">
						<p>
							<!-- Load the about/history text -->
							<?php  echo get_post_meta($post->ID, 'about_right', true); ?>
						</p>
						</div>
					</div>

					<div class="about-page__schedule--hero-photo">
							<!-- Load Schedule Hero Image-->
							<?php echo do_shortcode('[rev_slider about-full-section]'); ?>
					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /about-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
