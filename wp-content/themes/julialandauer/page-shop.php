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

							<div class="shop-page__sunglasses">
								
									<div class="shop-page__sunglasses--description">
										<h3>JLR Bottle Opener Sunglasses</h3>
										<!-- Load the sunglasses text -->
										<h4>Starting at $15</h4>
										<p>
										<?php  echo get_post_meta($post->ID, 'sunglasses-text', true); ?>
										</p>
										<!-- Disassembled PayPal buttons for better styling -->
										<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="PD2VBZ4CEKJPL">
											<table>
											<tr><td><input type="hidden" name="on0" value="Quantity/Cost">Quantity/Cost</td></tr><tr><td><select name="os0">
												<option value="1 Pair">1 Pair $15.00 USD</option>
												<option value="2 Pairs">2 Pairs $30.00 USD</option>
												<option value="3 Pairs">3 Pairs $45.00 USD</option>
												<option value="4 Pairs">4 Pairs $60.00 USD</option>
												<option value="5 Pairs">5 Pairs $75.00 USD</option>
											</select> </td></tr>
											</table>
											<input type="hidden" name="currency_code" value="USD">
												<button>
													<input type="submit" value="Order Now" border="0" name="submit" alt="">
												</button>
											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>

									<img class="shop-page__sunglasses--image" src="<?php echo site_url(); ?>/wp-content/uploads/jlr-sunglasses-2016.jpg">
							</div>

							<div class="shop-page__pen">
								
									<div class="shop-page__pen--description">
										<h3>JLR Pen</h3>
										<!-- Load the water bottle text -->
										<h4>$3</h4>
										<p>
										<?php  echo get_post_meta($post->ID, 'pen-text', true); ?>
										</p>
										<!-- Disassembled PayPal buttons for better styling -->
										<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="KGN3YUC8R69D4">
												<button>
													<input type="submit" value="Order Now" border="0" name="submit" alt="">
												</button>
											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>



									<img class="shop-page__pen--image" src="<?php echo site_url(); ?>/wp-content/uploads/jlr-pen-2015.jpg">

									
							</div>

							<div class="shop-page__hero-card">
								<div  class="shop-page__hero-card--description">
									<h3>Hero Card</h3>
									<p>
										<!-- Load the hero card text -->
										<?php  echo get_post_meta($post->ID, 'hero-card-text', true); ?>
									</p>

									<!-- Disassembled PayPal buttons for better styling -->
										<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="R56BY383WPNYN">
												<button>
													<input type="submit" value="Order Now" border="0" name="submit" alt="">
												</button>
											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
										</form>
								</div>

									<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'shop-page-hero-card-front', true); ?>" class="shop-page__hero-card--image" />

							</div>

					</div>				

				<?php endwhile; // end of the loop. ?>

			</div><!-- /shop-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
