<?php
/**
 * Block Name: Logos Block
 * 
 */
	$cta = get_field('cta');
	$logos = get_field('logos');

?>

<section class="block logos">
	<h2><?php echo get_field('heading'); ?></h2>
	<div class="content">
		<?php echo get_field('content'); ?>
		<?php
			if($cta && $cta['text']) {
				echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
			}
		?>
	</div>
	<?php
		if( $logos ): ?>
			<ul>
				<?php foreach( $logos as $logo ): ?>
					<li>
						<a target="_blank" href="<?php echo $logo['caption']; ?>">
							<img 
								class="logo"
								src="<?php echo $logo['sizes']['med_square']; ?>" 
								alt="<?php echo $logo['title']; ?>"
							/>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
	<?php endif; ?>
</section>