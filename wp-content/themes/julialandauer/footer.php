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
				<li><a href="http://facebook.com/julialandauerracing" target="blank"><object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg"></object></a></li>
				<li><a href="http://twitter.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.svg" alt="twitter"></a></li>
				<li><a href="http://instagram.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" alt="instagram"></a></li>
				<li><a href="http://youtube.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.svg" alt="youtube"></a></li>
				<li><a href="http://pinterest.com/julialandauer" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/pinterest.svg" alt="pinterest"></a></li>
				<li><a href="http://" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.svg" alt="linkedin"></a></li>
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
