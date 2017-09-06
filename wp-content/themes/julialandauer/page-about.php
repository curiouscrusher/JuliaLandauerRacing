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

				<div class="timeline-wrapper">
				<section id="cd-timeline" class="cd-container">
					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Forbes Honors Julia with 30 Under 30 Nod</h2>
							<p>Julia was listed to Forbes 30 Under 30 list for the Sports section, the only auto racer on the list.</p>
							<a href="http://www.nascar.com/en_us/news-media/articles/2017/1/3/julia-landauer-nascar-forbes-list-30-under-30.html" class="cd-read-more">Read more</a>
							<span class="cd-date">January 2017</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Highest Finishing Woman in K&amp;N Series History</h2>
							<p>Julia finished 4th in overall standings, making her the highest finishing woman in the series' 62-year history.</p>
							<a href="http://julialandauer.com/and-thats-a-history-making-wrap/" class="cd-read-more">Read more</a>
							<span class="cd-date">Oct. 2016 </span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Ties for Highest Finishing Female in Race</h2>
							<p>Julia finished 2nd at Meridian Speedway, tying her for the best race result for a female in series history.</p>
							<a href="https://www.instagram.com/p/BKxD-UMhLJi/?taken-by=julialandauer&hl=en" class="cd-read-more">Read more</a>
							<span class="cd-date">Sept. 2016</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>NASCAR Next Class</h2>
							<p>Julia was the only woman chosen for the highly-selective 11-member NASCAR Next class of 2016-2017</p>
							<a href="http://www.nascar.com/content/nascar/en_us/news-media/articles/2016/5/17/nascar-next-class-of-2016-announced.html" class="cd-read-more">Read more</a>
							<span class="cd-date">May 2016</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>First Female Track Champion</h2>
							<p>Julia became the first woman to win a championship in the NASCAR Limited Late Model Series at Motor Mile Speedway.</p>
							<a href="http://hometracks.nascar.com/nwaas/story/landauer-caps-rookie-campaign-title_09172015" class="cd-read-more">Read more</a>
							<span class="cd-date">Sept. 2015</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>50% Win Rate</h2>
							<p>Julia won 4 out of her 8 races in the 2015 racing series.</p>
							<span class="cd-date">2015</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Graduates from Stanford University</h2>
							<p>Julia graduated from Stanford University with a Bachelor of Science in Science, Technology, and Society</p>
							<span class="cd-date">June 2014</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Competes in Legends Racing</h2>
							<p>Julia Landauer took multiple trips to Victory Lane while racing Legends cars in NY, NJ, and NC.</p>
							<span class="cd-date">2012 - 2014</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>SURVIVOR</h2>
							<p>Julia competed on Season 26 of SURVIVOR: Fans vs. Favorites, where she made it halfway to day 19.</p>
							<a href="http://www.cbs.com/shows/survivor/season/26/episodes/" class="cd-read-more">Read more</a>
							<span class="cd-date">May 2013</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Late Model Racing</h2>
							<p>Julia competed in an abbreviated racing schedule while transitioning from high school to college, racing in the NASCAR Late Model Series.</p>
							<span class="cd-date">2009 - 2011</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Ford Focus Midgets</h2>
							<p>Julia raced a half-season schedule for Bob East in the Ford Focus Midget Series in Indiana.</p>
							<span class="cd-date">2008</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Formula BMW USA</h2>
							<p>Julia was the youngest competitor in Formula BMW USA, racing support races for the Indy and Montreal F1 races.</p>
							<span class="cd-date">2007</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>First and Youngest Female Skip Barber Champion</h2>
							<p>Julia became the first, and youngest, female Skip Barber Racing Series champion in its 31-year history. She was 14</p>
							<span class="cd-date">2006</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->

					<div class="cd-timeline-block">
						<div class="cd-timeline-img"></div> <!-- cd-timeline-img -->
						<div class="cd-timeline-content">
							<h2>Go-Kart Racing</h2>
							<p>Julia got her start in racing at age 10, racing in local, regional, and national go-kart races.</p>
							<span class="cd-date">2002 - 2005</span>
						</div> <!-- cd-timeline-content -->
					</div> <!-- cd-timeline-block -->
				</section> <!-- cd-timeline -->
			</div>

			</div><!-- /about-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
