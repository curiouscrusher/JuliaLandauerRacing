<?php
/**
 *
 * This is the template for the shop page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="shop-page">
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>

					<div class="shop-page__wrapper">
						
							<div class="shop-page__hero-card">
								<h2 class="shop-page__hero-card--title">Hero Card</h2>
									<p>
										<!-- Load the hero card text -->
										<?php  echo get_post_meta($post->ID, 'hero-card-text', true); ?>
									</p>
							</div>
							<div class="shop-page__water-bottle">
								<!-- <h2 class="shop-page__water-bottle--title">JLR Water Bottle</h2> -->
									<p class="shop-page__water-bottle--description">
										<!-- Load the water bottle text -->
										<?php  echo get_post_meta($post->ID, 'water-bottle-text', true); ?>

										<button>Order Now</button>
									</p>

									<img class="shop-page__water-bottle--image" src="http://placehold.it/600x300">

									<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'water-bottle', true); ?>" class="shop-page__water-bottle--bottle" /> -->
							</div>
							<div class="shop-page__hat">
								<!-- <h2 class="shop-page__hat--title">JLR Hat</h2> -->
									<p class="shop-page__hat--description">
										<!-- Load the hat text -->
										<?php  echo get_post_meta($post->ID, 'hat-text', true); ?>

										<button>Order Now</button>
									</p>

									<img class="shop-page__hat--image" src="http://placehold.it/600x300">
							</div>
							<div class="shop-page__shirt">
								<!-- <h2 class="shop-page__shirt--title">JLR Shirt</h2> -->
									<p class="shop-page__hat--description">
										<!-- Load the shirt text -->
										<?php  echo get_post_meta($post->ID, 'shirt-text', true); ?>

										<button>Order Now</button>
									</p>

									<img class="shop-page__hat--image" src="http://placehold.it/600x300">
							</div>
					</div>				

				<?php endwhile; // end of the loop. ?>

			</div><!-- /shop-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
