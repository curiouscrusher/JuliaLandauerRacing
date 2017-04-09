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

					<div class="home-page__been-up-to">
						<?php echo do_shortcode('[rev_slider been-up-to]'); ?>
					</div>

					<div class="home-page__team-goals edge--top edge--bottom--reverse">
						<h1>Team Goals</h1>
							<div class="home-page__team-goals--item">
								<h2>1</h2>
								<h4><?php  echo get_post_meta($post->ID, 'goal-1', true); ?></h4>
							</div>
							<div class="home-page__team-goals--item">
								<h2>2</h2>
								<h4><?php  echo get_post_meta($post->ID, 'goal-2', true); ?></h4>
							</div>
							<div class="home-page__team-goals--item">
								<h2>3</h2>
								<h4><?php  echo get_post_meta($post->ID, 'goal-3', true); ?></h4>
							</div>
							<div class="home-page__team-goals--item">
								<h2>4</h2>
								<h4><?php  echo get_post_meta($post->ID, 'goal-4', true); ?></h4>
							</div>

					</div><!-- /team-goals -->

					<?php // Sponsor Grid ?>
					<?php get_template_part( 'modules/sponsorship-grid' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /home-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
