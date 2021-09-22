<?php
/**
 * Block Name: Contact Block
 * 
 */
?>

<section class="block contact_block">
	<a href="<?php echo get_field('map_link') ?>">
		<img src="<?php echo get_field('map') ?>" alt="Google Map of location" />
	</a>
	<div>
		<?php get_template_part('blocks/address'); ?>
		<h3>Opening Hours</h3>
		<?php get_template_part('blocks/operating_hours'); ?>
	</div>
</section>