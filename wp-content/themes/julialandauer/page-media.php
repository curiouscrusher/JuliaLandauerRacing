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

					<div class="media-page__youtube-wrapper">
						<div class="media-page__youtube-wrapper--left-channel">
							<!-- Load the left youtube channel -->
							<h3>Race Recaps</h3>
							<?php  echo get_post_meta($post->ID, 'left-channel', true); ?>
						</div>
						<div class="media-page__youtube-wrapper--right-channel">
							<!-- Load the right youtube channel -->
							<h3>Video Blogs</h3>
							<?php  echo get_post_meta($post->ID, 'right-channel', true); ?>
						</div>
					</div>

					<div class="media-page__photos">
						<!-- <h1 class="media-page__photos--title">Photos</h1> -->
						<?php putRevSlider(6) ?>
					</div>

					<div class="media-page__survivor-wrapper">
						<h2>Survivor</h2>
						
						<div class="media-page__survivor-wrapper--block-1">
							<p>
								<!-- Load the left survivor text -->
								<?php  echo get_post_meta($post->ID, 'survivor-left', true); ?>
							</p>
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'survivor-image-1', true); ?>" />
							
						</div>

						<div class="media-page__survivor-wrapper--block-2">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'survivor-image-2', true); ?>" />
							
							<p>
								<!-- Load the left survivor text -->
								<?php  echo get_post_meta($post->ID, 'survivor-right', true); ?>
							</p>
						</div>
								
					</div>

					<div class="media-page__blocks">
							<div class="media-page__blocks--huffington">
								<h3>Huffington Post</h3>
									<p>
										<!-- Load the huff post blurb -->
										<?php  echo get_post_meta($post->ID, 'huff-post', true); ?>
									</p>
									<a href="#"><button>Read More</button></a>
							</div>
							<div class="media-page__blocks--media-inquiry">
								<h3>Media Inquiry</h3>	
									<p>
										<!-- Load the media inquiry text -->
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
