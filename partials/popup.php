<div id="popup" class="popup">
	<button class="toggle" onclick="togglePopup('popup')">
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/warning.svg')); ?>
		<span class="sr-only">Toggle Popup</span>
	</button>

	<button class="toggle close" onclick="togglePopup('popup')">
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/close.svg')); ?>
		<span class="sr-only">Toggle Popup</span>
	</button>
	<div class="content">
		<?php dynamic_sidebar('notice_popup'); ?>
	</div>
</div>