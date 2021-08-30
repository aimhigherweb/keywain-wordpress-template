<?php
/**
 * Block Name: Opening Hours Block
 * 
 */
	$days = get_field('days');
?>
<div class="opening_hours">
	<?php if( have_rows('days') ): ?>
		<dl>
			<?php while( have_rows('days') ): the_row(); ?>
				<dt>
					<?php echo get_sub_field('day'); ?>
				</dt>
				<dd>
					<?php if(
						check_field_value([get_sub_field('time_start'), get_sub_field('time_end')])
					) {
						echo get_sub_field('time_start') . ' - ' . get_sub_field('time_end');
					}
					else {
						echo 'Closed';
					}
					?>
				</dd>
			<?php endwhile; ?>
		</dl>
	<?php endif; ?>
</div>