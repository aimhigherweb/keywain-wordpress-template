<?php

	WP_Filesystem();
	global $wp_filesystem;

?>

<div id="booking" class="booking">
	<button class="toggle" onclick="toggleBooking()">
		<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/book.svg'); ?>
		<span class="sr-only">Toggle Booking</span>
	</button>
	<div class="content">
		<?php dynamic_sidebar('booking'); ?>
	</div>
	<button class="toggle close" onclick="toggleBooking()">
		<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/close.svg'); ?>
		<span class="sr-only">Toggle Booking</span>
	</button>
</div>