<?php
/**
 *
 * This is the template for the articles page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="articles-page">

			<h1 class="articles-page__title">Article Archive</h1>

				<?php
				query_posts('cat=5');
				?>

				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>	

						<div class="articles-page__post">

						<a href="<?php the_permalink(); ?>" class="articles-page__post--title"><h4><?php the_title(); ?></h4></a>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="articles-page__post--button">Read More</a>

						</div>

					<?php endwhile ?>

				<?php endif ?>
				
			</div><!-- /articles-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
