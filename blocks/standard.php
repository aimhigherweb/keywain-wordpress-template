<?php
/**
 * Block Name: Standard Block
 * 
 */
	$cta = get_field('cta');

?>

<section class="block standard">
	
	<div>
		<?php if(check_field_value([get_field('heading')])) : ?>
			<h2><?php echo get_field('heading'); ?></h2>
		<?php endif; ?>
		<div class="content">
			<?php echo get_field('content'); ?>
			<?php
				if(check_field_value([$cta, $cta['text']])) {
					echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
				}
			?>
		</div>
	</div>
	<img 
		src="<?php echo get_field('image')['sizes']['block_image']; ?>" 
	/>
</section>