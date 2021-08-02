<?php
/**
 * Block Name: Address Block
 * 
 */
	global $wp_filesystem;

	$address = get_field('address', 'option');
	$phone = get_field('phone', 'option');

?>

<address>
	<?php echo $address['line_1']; ?><br/>
	<?php echo $address['line_2']; ?><br/>
	<span>
		<?php echo $address['suburb']; ?>
		<?php echo $address['state']; ?>
		<?php echo $address['post_code']; ?>
	</span>
</address>

<address>
	<a
		target="_blank"
		href="tel:<?php echo preg_replace('/\s+/', '', $phone); ?>"
	>
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/phone.svg')); ?>
		<?php echo $phone; ?>
	</a>
</address>