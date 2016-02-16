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
					
					<?php get_template_part( 'content', 'page' ); ?>

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
					
						<div class="media-page__blocks--latest">
							<h3>Latest</h3>
							<?php
										// Query the photos post type to load the 3 most recent photos
								    $args = array(
								        'category_name' => 'news',
								        'posts_per_page' => 3,
								        'orderby' => 'DESC'
								    );
								    $the_query = new WP_Query( $args );
										?>

										<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

										<article>
											<a href="<?php the_permalink(); ?>">
											<h5><?php the_title() ?></h5>
											</a>
											<?php the_excerpt() ?><a class="read-more" href="<?php the_permalink(); ?>">
											Read More
											</a>
										</article>

										<?php endwhile; else : ?>

										<p>No Posts Found</p>

									<?php endif; wp_reset_postdata(); ?>
							</div>
							<div class="media-page__blocks--current">
								<h3>Current News</h3>
									<p>
										<!-- Load the huff post blurb -->
										<?php  echo get_post_meta($post->ID, 'current-news', true); ?>
									</p>
									<a href="<?php echo site_url(); ?>/news"><button>See More</button></a>
							</div>
							<div class="media-page__blocks--article-archive">
								<h3>Article Archive</h3>	
									<p>
										<!-- Load the media inquiry text -->
										<?php  echo get_post_meta($post->ID, 'article-archive', true); ?>
									</p>
									<a href="<?php echo site_url(); ?>/articles"><button>See More</button></a>
							</div>
					</div>	

					<div class="media-page__photos">
						<h2 class="media-page__photos--title">Photos</h2>
						<?php putRevSlider(6) ?>
					</div>

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

			</div><!-- /media-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
