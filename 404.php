<?php
/**
 * 404 page
 *
 *
 * @package Keywain
 * @version 1.0
 */

	echo 'Archive: ';
	var_dump(is_archive());
	echo '<br/>Category: ';
	var_dump(is_category());
	echo '<br/>Tag: ';
	var_dump(is_tag());

	echo '<pre>';
	var_dump($wp_query);
	echo '</pre>';

	get_template_part(
		'partials/layout', 
		null, 
		array(
			'template' => '404',
			'title' => '404 - Page not found'
		)
	);

?>
