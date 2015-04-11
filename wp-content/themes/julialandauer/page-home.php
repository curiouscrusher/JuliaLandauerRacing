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

					<div class="home-page__fast-facts">
						<h2 class="home-page__fast-facts--title">Fast Facts</h2>
						<img src="http://placehold.it/1200x1500">
					</div>

					<div class="home-page__news">
						<h2 class="home-page__news--title">Latest News</h2>
						<?php putRevSlider(8) ?>
					</div>


					<div class="home-page__sponsor-grid">
						<h2 class="home-page__sponsor-grid--title">Partners</h2>
							<!-- Sponsor Logo Grid -->
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-1', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-2', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-3', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-4', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-5', true); ?>" class="partners-page__sponsor-grid--logo" />
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-6', true); ?>" class="partners-page__sponsor-grid--logo" />
					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /home-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
