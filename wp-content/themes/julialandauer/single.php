<?php
/**
 * The template for displaying all single posts.
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="single">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="single__featured-image">
						<!-- Check For Featured Image -->
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }	?>
					</div>

					<div class="single__post-title">
						<h2><?php the_title(); ?></h2>
					</div>

					<div class="single__post-content">
						<?php the_content(); ?>
					</div>

					<!-- <?php the_post_navigation(); ?> -->

				<?php endwhile; // end of the loop. ?>

			</div><!-- single -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
