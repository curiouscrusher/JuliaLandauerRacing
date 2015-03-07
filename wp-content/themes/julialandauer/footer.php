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
		<div class="site-footer__credits">
			<p>Design and Development by <a href="http://nathanielholland.com">Nate Holland</a></p>
		</div><!-- .site-footer -->

		<div class="site-footer__social">
			<img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" width="35px" alt="facebook">
			<img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.svg" width="35px" alt="twitter">
			<img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" width="35px" alt="instagram">
			<img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.svg" width="35px" alt="youtube">
			<img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.svg" width="35px" alt="linkedin">
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
