<?php
/**
 *
 * Template for the sponsorship grid
 *
 * @package julialandauer
 */
?>

<div class="module__sponsor-grid">
	<h2 class="module__sponsor-grid--title">Collaborations</h2>
		<!-- Sponsor Logo Grid -->
		<?php $firstPartner = get_post_meta($post->ID, 'partners-1', true); ?>
		<div class="partner">
			<?php if($firstPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-1-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $firstPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $secondPartner = get_post_meta($post->ID, 'partners-2', true); ?>
		<div class="partner">
			<?php if($secondPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-2-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $secondPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $thirdPartner = get_post_meta($post->ID, 'partners-3', true); ?>
		<div class="partner">
			<?php if($thirdPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-3-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $thirdPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $fourthPartner = get_post_meta($post->ID, 'partners-4', true); ?>
		<div class="partner">
			<?php if($fourthPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-4-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $fourthPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $fifthPartner = get_post_meta($post->ID, 'partners-5', true); ?>
		<div class="partner">
			<?php if($fifthPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-5-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $fifthPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $sixthPartner = get_post_meta($post->ID, 'partners-6', true); ?>
		<div class="partner">
			<?php if($sixthPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-6-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $sixthPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $seventhPartner = get_post_meta($post->ID, 'partners-7', true); ?>
		<div class="partner">
			<?php if($seventhPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-7-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $seventhPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $eighthPartner = get_post_meta($post->ID, 'partners-8', true); ?>
		<div class="partner">
			<?php if($eighthPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-8-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $eighthPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>

		<?php $ninthPartner = get_post_meta($post->ID, 'partners-9', true); ?>
		<div class="partner">
			<?php if($ninthPartner) { ?>
			<a href="<?php  echo get_post_meta($post->ID, 'partners-9-link', true); ?>" target="blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo $ninthPartner; ?>" class="module__sponsor-grid--logo" /></a>
			<?php } ?>
		</div>
</div>
