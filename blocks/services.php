<?php
/**
 * Block Name: Services Block
 * 
 */
	global $wp_filesystem;

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
					<?php echo $wp_filesystem->get_contents(get_sub_field('image')['url']); ?>
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
			if($cta) {
				echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
			}
		?>
	</div>
</section>