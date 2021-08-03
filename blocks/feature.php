<?php
/**
 * Block Name: Feature Block
 * 
 */
	$cta = get_field('cta');

?>

<section class="block feature <?php if(get_field('image')) {echo 'image';}; ?>">
	
	<div>
		<h2><?php echo get_field('heading'); ?></h2>
		<div class="content">
			<?php echo get_field('content'); ?>
			<?php
				if($cta) {
					echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
				}
			?>
		</div>
	</div>
	<?php if(get_field('image')): ?>
		<img 
			src="<?php echo get_field('image')['sizes']['block_image']; ?>" 
		/>
	<?php endif; ?>
</section>