<?php
/**
 * Block Name: Services Block
 * 
 */

	$cta = get_field('cta');

?>

<section class="block services">
	
	<div>
		<h2><?php echo get_field('heading'); ?></h2>
		<?php
			if( have_rows('services') ):

				echo '<ul class="blocks">';
			
				while( have_rows('services') ) : the_row(); ?>
				
			
				<li class="service">
					<?php echo wp_remote_retrieve_body(wp_remote_get(get_sub_field('image')['url'])); ?>
					<h3><?php echo get_sub_field('heading'); ?></h3>
					<p class="sub"><?php echo get_sub_field('sub_heading'); ?></p>
					<div class="content"><?php echo get_sub_field('content'); ?></div>
					<a href="<?php echo get_sub_field('link'); ?>" class="block_link">
						<span class="sr-only">Find out more about <?php echo get_sub_field('heading'); ?></span>
					</a>
				</li>
			
				<?php endwhile;
			
				echo '</ul>';
			endif;
		?>
		<?php
			if(check_field_value([$cta, $cta['text']])) {
				echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
			}
		?>
	</div>
</section>