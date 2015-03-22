<?php
/**
 *
 * This is the template for the media page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="media-page">

				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

					<div class="media-page__photos">
						<h1 class="media-page__photos--title">Photos</h1>
						<?php putRevSlider(6) ?>
					</div>

					<div class="media-page__blocks">
							<div class="media-page__blocks--huffington">
								<h2>Huffington Post</h2>
									<p>
										<!-- Load -->
										<a href="#"><button>Read More</button></a>
									</p>
							</div>
							<div class="media-page__blocks--media-inquiry">
								<h2>Media Inquiry</h2>	
									<p>
										<!-- Load the media text -->
										<?php  echo get_post_meta($post->ID, 'media-inquiry', true); ?>
									</p>
									<a href="<?php echo site_url(); ?>/contact"><button>Contact</button></a>
							</div>
					</div>					

				<?php endwhile; // end of the loop. ?>

			</div><!-- /media-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
