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
								<!-- <h3 class="shop-page__hero-card- -title">Hero Card</h3> -->
									<p class="shop-page__hero-card--description">
										<!-- Load the hero card text -->
										<?php  echo get_post_meta($post->ID, 'hero-card-text', true); ?>

										<button>Order Now</button>
									</p>

									<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'shop-page-hero-card-front', true); ?>" class="shop-page__hero-card--image" />

							</div>

							<div class="shop-page__water-bottle">
								
									<div class="shop-page__water-bottle--description">
										<h3>JLR Water Bottle</h3>
										<!-- Load the water bottle text -->
										<?php  echo get_post_meta($post->ID, 'water-bottle-text', true); ?>

										<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="MN3DQWSMWH6RG">
												<button>
													<input type="submit" value="Order Now" border="0" name="submit" alt="">
												</button>
											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>



									<img class="shop-page__water-bottle--image" src="<?php echo site_url(); ?>/wp-content/uploads/jlr-bottle.jpg">

									
							</div>

							<div class="shop-page__hat">
								
									<div class="shop-page__hat--description">
										<h3>JLR Hat</h3>
										<!-- Load the hat text -->
										<?php  echo get_post_meta($post->ID, 'hat-text', true); ?>

										<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="8JDRV4F5KXLLA">
												<button>
													<input type="submit" value="Order Now" border="0" name="submit" alt="">
												</button>
											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>

									<img class="shop-page__hat--image" src="<?php echo site_url(); ?>/wp-content/uploads/jlr-hat.jpg">
							</div>

							<div class="shop-page__shirt">
								
									<div class="shop-page__shirt--description">
										<h3>JLR Shirt</h3>
										<!-- Load the shirt text -->
										<?php  echo get_post_meta($post->ID, 'shirt-text', true); ?>

										<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="5QGKJQMMSN9LU">
												<button>
													<input type="submit" value="Order Now" border="0" name="submit" alt="">
												</button>
											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											<table>
												<tr>
													<td>
														<input type="hidden" name="on0" value="Sizes">Sizes
													</td>
												</tr>
												<tr>
													<td>
														<select name="os0">
														    <option value="Small">Small </option>
														    <option value="Medium">Medium </option>
														    <option value="Large">Large </option>
														    <option value="Extra Large">Extra Large </option>
														</select>
													</td>
												</tr>
											</table>
										</form>
									</div>

									<img class="shop-page__shirt--image" src="<?php echo site_url(); ?>/wp-content/uploads/jlr-shirt.jpg">
							</div>

					</div>				

				<?php endwhile; // end of the loop. ?>

			</div><!-- /shop-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
