<?php
/**
 * Block Name: Team Profiles
 * 
 */

 
?>

<div class="team">

	<h2><?php echo get_field('title'); ?></h2>

	<?php if( have_rows('team') ):

		echo '<ul class="profiles">';

		while( have_rows('team') ) : 
			the_row();
			$profile_id = 'team_profile_' . get_row_index();
		?>

			<li class="profile">
				<img 
					src="<?php echo get_sub_field('image')['sizes']['profile']; ?>" 
					alt="Profile image of <?php echo get_sub_field('name'); ?>" 
				/>
				<h3><?php echo get_sub_field('name'); ?></h3>
				<div class="bio"><?php echo get_sub_field('bio'); ?></div>
				<button onclick="togglePopup('<?php echo $profile_id; ?>')">Read more</button>
				<div class="modal" id="<?php echo $profile_id; ?>">
					<button class="toggle" onclick="togglePopup('<?php echo $profile_id; ?>')">
						<?php echo inline_svg(get_template_directory_uri() . '/src/img/close.svg'); ?>
						<span class="sr-only">Toggle Bio</span>
					</button>
					<div class="content">
						<img 
							src="<?php echo get_sub_field('image')['sizes']['profile']; ?>" 
							alt="Profile image of <?php echo get_sub_field('name'); ?>" 
						/>
						<h3><?php echo get_sub_field('name'); ?></h3>
						<div class="bio"><?php echo get_sub_field('bio'); ?></div>
					</div>
				</div>
			</li>

		<?php endwhile;

		echo '</ul>';
	endif; ?>

</div>
