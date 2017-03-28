<?php
/**
 *
 * This is the template for the about page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="about-page">

			<div class="timeline-wrapper">
				<section id="cd-timeline" class="cd-container">
					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Most Recent Cool Achievement</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
							<a href="#0" class="cd-read-more">Read more</a>
							<span class="cd-date">Jan 14</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Title of section 2</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
							<a href="#0" class="cd-read-more">Read more</a>
							<span class="cd-date">Jan 18</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Most Recent Cool Achievement</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
							<a href="#0" class="cd-read-more">Read more</a>
							<span class="cd-date">Jan 24</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Most Recent Cool Achievement</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
							<a href="#0" class="cd-read-more">Read more</a>
							<span class="cd-date">Feb 14</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Most Recent Cool Achievement</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
							<a href="#0" class="cd-read-more">Read more</a>
							<span class="cd-date">Feb 18</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Most Recent Cool Achievement</h2>
							<p>This is the content of the last section</p>
							<span class="cd-date">Feb 26</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->
				</section> <!-- cd-timeline -->
			</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<div class="about-page__history">
						<h2 class="about-page__history--title">About Julia</h2>
						<div class="about-page__history--left">
						<p>
							<!-- Load the about/history text -->
							<?php  echo get_post_meta($post->ID, 'about_left', true); ?>
						</p>
						</div>
						<div class="about-page__history--right">
						<p>
							<!-- Load the about/history text -->
							<?php  echo get_post_meta($post->ID, 'about_right', true); ?>
						</p>
						</div>
					</div>

					<div class="about-page__schedule--hero-photo">
							<!-- Load Schedule Hero Image-->
							<?php echo do_shortcode('[rev_slider about-full-section]'); ?>
					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- /about-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
