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
						<p>
							<!-- Load the about/history text -->
							<?php  echo get_post_meta($post->ID, 'history', true); ?>
						</p>
					</div>

					<!-- Load The Schedule -->
					<?php
					  $page_id = 60;
					  $page_data = get_page( $page_id );

					  echo $page_data->post_title;
					  echo $page_data->post_content;
					?>

					<div class="about-page__stats">
						<img src="http://placehold.it/800x400">
					</div>

					

				<?php endwhile; // end of the loop. ?>

			</div><!-- /about-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
