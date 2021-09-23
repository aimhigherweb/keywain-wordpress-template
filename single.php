<?php
/**
 * Single Blog Post
 *
 *
 * @package Keywain
 * @version 1.0
 */

	get_template_part(
		'partials/layout', 
		null, 
		array(
			'template' => 'post',
			'class' => 'single_post'
		)
	);

?>
