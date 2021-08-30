<?php
/**
 * Block Name: Feature Block
 * 
 */
	$cta = get_field('cta');

?>

<section class="block feature <?php if(get_field('image')) {echo 'image';}; ?>">
	
	<div>
		<?php if(check_field_value([get_field('heading')])): ?>
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
	<?php if(check_field_value([get_field('image')])): ?>
		<img 
			src="<?php echo get_field('image')['sizes']['block_featured']; ?>" 
		/>
	<?php endif; ?>
</section>