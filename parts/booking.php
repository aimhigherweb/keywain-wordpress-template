<div id="booking" class="booking">
	<button class="toggle" onclick="togglePopup('booking')">
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/book.svg')); ?>
		<span class="sr-only">Toggle Booking</span>
	</button>
	<div class="content">
		<?php dynamic_sidebar('booking'); ?>
	</div>
	<button class="toggle close" onclick="togglePopup('booking')">
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/close.svg')); ?>
		<span class="sr-only">Toggle Booking</span>
	</button>
</div>