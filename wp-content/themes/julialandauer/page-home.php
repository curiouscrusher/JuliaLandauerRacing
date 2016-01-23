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
						<h1 class="home-page__fast-facts--title">Fast Facts</h1>

						<div class="home-page__fast-facts--races">
							<div class="home-page__fast-facts--races-title">
								<h3><strong><?php  echo get_post_meta($post->ID, 'home-total-races', true); ?></strong> Car Races</h3>
							</div>
							<div class="home-page__fast-facts--races-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/race-car.svg">
							</div>
							
						</div><!-- /races -->

						<div class="home-page__fast-facts--championship">
							<div class="home-page__fast-facts--championship-title">
								<h3><strong>2</strong> Championships</h3>
							</div>
							<div class="home-page__fast-facts--championship-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/trophy.svg">
							</div>
						</div><!-- /championship -->

						<div class="home-page__fast-facts--stats">
							<div class="home-page__fast-facts--stats-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/checkered-flag.svg">
							</div>
							<div class="home-page__fast-facts--stats-block">
								<h3><strong><?php  echo get_post_meta($post->ID, 'home-total-wins', true); ?></strong> Wins</h3>
							</div>
							<div class="home-page__fast-facts--stats-block">
								<h3><strong><?php  echo get_post_meta($post->ID, 'home-top-3', true); ?></strong> Top 3</h3>
							</div>
							<div class="home-page__fast-facts--stats-block">
								<h3><strong><?php  echo get_post_meta($post->ID, 'home-top-5', true); ?></strong> Top 5</h3>
							</div>

						</div><!-- /stats -->
						
					</div><!-- /fast-facts -->

					<div class="home-page__team-goals">
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

					<div class="home-page__news">
						<h2 class="home-page__news--title">Latest News</h2>
						<?php putRevSlider(8) ?>
					</div>

					<?php // Sponsor Grid ?>
					<?php get_template_part( 'modules/sponsorship-grid' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /home-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
