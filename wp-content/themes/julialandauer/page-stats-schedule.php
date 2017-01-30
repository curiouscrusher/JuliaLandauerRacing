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

					<div class="about-page__schedule" id="schedule">
					<h2>2016 Nascar K&amp;N Pro Series</h2>

						<!-- Load The Schedule -->
						<?php
						  $page_id = 60;
						  $page_data = get_page( $page_id );

						  echo $page_data->post_content;
						?>
					</div>

					<div class="about-page__stats edge--top">
					<h2>Julia's Statistics</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/stats-1.png">
						<img src="<?php echo get_template_directory_uri(); ?>/images/stats-2.png">
					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /about-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
