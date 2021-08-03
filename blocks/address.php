<?php
/**
 * Block Name: Address Block
 * 
 */
	$address = get_field('address', 'option');
	$phone = get_field('phone', 'option');
	$email = get_field('email', 'option');
?>
<address>
	<a
		target="_blank"
		href="tel:<?php echo preg_replace('/\s+/', '', $phone); ?>"
	>
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/phone.svg')); ?>
		<?php echo $phone; ?>
	</a>
</address>

<address>
	<a
		target="_blank"
		href="mailto:<?php echo $email; ?>"
	>
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/email.svg')); ?>
		<?php echo $email; ?>
	</a>
</address>

<address>
	<?php echo $address['line_1']; ?><br/>
	<?php if($address['line_2']) : ?>
		<?php echo $address['line_2']; ?><br/>
	<?php endif; ?>
	<span>
		<?php echo $address['suburb']; ?>
		<?php echo $address['state']; ?>
		<?php echo $address['post_code']; ?>
	</span>
</address>

