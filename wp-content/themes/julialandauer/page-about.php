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
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'schedule_hero', true); ?>" />
					</div>

					<div class="about-page__schedule">
					<h2>Upcoming Schedule</h2>

						<!-- Load The Schedule -->
						<?php
						  $page_id = 60;
						  $page_data = get_page( $page_id );

						  echo $page_data->post_content;
						?>
					</div>

					<div class="about-page__stats">
					<h2>Julia's Statistics</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/stats-1.png">
						<img src="<?php echo get_template_directory_uri(); ?>/images/stats-2.png">
					</div>

					

				<?php endwhile; // end of the loop. ?>

			</div><!-- /about-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
