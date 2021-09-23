<?php
/**
 * Home template
 *
 *
 * @package Keywain
 * @version 1.0
 */

	get_template_part(
		'partials/layout', 
		null, 
		array(
			'class' => 'home',
			'template' => 'home'
		)
	);

?>
