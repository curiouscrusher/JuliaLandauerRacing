<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package julialandauer
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__social">
			<ul>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt="facebook"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.svg" alt="twitter"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" alt="instagram"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.svg" alt="youtube"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/social/pinterest.svg" alt="pinterest"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.svg" alt="linkedin"></li>
			</ul>
		</div>
		<hr class="site-footer__divider" />
		<div class="site-footer__copyright">
			<p>© 2014. Julia Landauer Racing LLC. All Rights Reserved.</p>
		</div>
		<div class="site-footer__credits">
			<p>Design and Development by <a href="http://nathanielholland.com">Nate Holland</a></p>
		</div><!-- .site-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
