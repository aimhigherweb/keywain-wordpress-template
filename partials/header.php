<?php

	global $wp_filesystem;

	$logo = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];
	$phone = get_field('phone', 'option');

?>

<header class="header">
	<a class="logo" href="/">
		<?php 
			if(preg_match('/\.svg$/', $logo)) {
				echo $wp_filesystem->get_contents($logo);
			} 
			else {
				echo '<img src="' . $logo . '" />';
			}
		?>
		<span class="sr-only">Return to homepage</span>
	</a>
	
	<nav class="main">
		<button class="hamburger" onclick="toggleMenu()">
			<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/hamburger.svg'); ?>
			<span class="sr-only">Toggle Main Menu</span>
		</button>
		<ul>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'container' => false,
					'items_wrap' => '%3$s'
				));
			?>
			<li>
				<a href="tel:<?php echo preg_replace('/\s+/', '', $phone); ?>">
					<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/phone.svg')); ?>
					<span class="label">Call Us</span>
				</a>
			</li>
		</ul>
	</nav>
</header>