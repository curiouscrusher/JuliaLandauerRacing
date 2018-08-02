<?php
/**
 *
 * This is the template for the home page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="home-page">

				<?php while ( have_posts() ) : the_post(); ?>					
					
					<?php get_template_part( 'content', 'page' ); ?>

					<h2 class="home-page__instagram-title">Latest Posts</h2>

					<?php echo do_shortcode("[instagram-feed]"); ?>

					<?php // Sponsor Grid ?>
					<?php get_template_part( 'modules/sponsorship-grid' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /home-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
