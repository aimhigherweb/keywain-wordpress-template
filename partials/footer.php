<?php

	WP_Filesystem();
	global $wp_filesystem;

?>

<footer class="footer">
	<nav>
		<ul>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'footer_menu',
					'container' => false,
					'items_wrap' => '%3$s'
				));
			?>
		</ul>
	</nav>

	<nav class="icons">
		<ul>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'social_menu',
					'container' => false,
					'items_wrap' => '%3$s'
				));
			?>
		</ul>
	</nav>

	<p>©<?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved.</p>
	
	<p class="copyright">Website by <a href="https://aimhigherweb.design" target="_blank" rel="nofollow">AimHigher Web</a></p>

	<?php if (is_active_sidebar('notice_popup')) : ?>
		<div id="popup" class="notice_popup">
		<button class="popup close" onclick="togglePopup()">
			<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/close.svg'); ?>
			<span class="sr-only">Toggle Popup</span>
		</button>
			<?php dynamic_sidebar('notice_popup'); ?>
		</div>
		<button class="popup" onclick="togglePopup()">
			<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/warning.svg'); ?>
			<span class="sr-only">Toggle Popup</span>
		</button>
	<?php endif; ?>
</footer>