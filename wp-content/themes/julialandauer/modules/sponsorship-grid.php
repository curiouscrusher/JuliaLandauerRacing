<?php
/**
 *
 * Template for the sponsorship grid
 *
 * @package julialandauer
 */
?>

<div class="module__sponsor-grid">
	<h2 class="module__sponsor-grid--title">Partners</h2>
		<!-- Sponsor Logo Grid -->
		<a href="<?php  echo get_post_meta($post->ID, 'partners-1-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-1', true); ?>" class="module__sponsor-grid--logo" /></a>
		<a href="<?php  echo get_post_meta($post->ID, 'partners-2-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-2', true); ?>" class="module__sponsor-grid--logo" /></a>
		<a href="<?php  echo get_post_meta($post->ID, 'partners-3-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-3', true); ?>" class="module__sponsor-grid--logo" /></a>
		<a href="<?php  echo get_post_meta($post->ID, 'partners-4-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-4', true); ?>" class="module__sponsor-grid--logo" /></a>
		<a href="<?php  echo get_post_meta($post->ID, 'partners-5-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-5', true); ?>" class="module__sponsor-grid--logo" /></a>
		<a href="<?php  echo get_post_meta($post->ID, 'partners-6-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'partners-6', true); ?>" class="module__sponsor-grid--logo" /></a>
</div>

