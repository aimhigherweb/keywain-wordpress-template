<?php

	$title = get_the_title();
	$class = '';

	if(is_404()) {
		$title = '404 - Page Not Found';
	}
	else if ($wp_query->is_posts_page) {
		$class = 'post-title';
		$title = get_the_title(get_option('page_for_posts'));
	}
	else if(is_category()) {
		$title = single_cat_title(get_the_title(get_option('page_for_posts')) . ' - ');
	}
	else if(is_tag()) {
		$title = single_tag_title(get_the_title(get_option('page_for_posts')) . ' Tags - ');
	}
	else if(is_single()) {
		$title = false;
	}

?>

<?php if($title): ?>
	<h1 class="<?php echo $class; ?>"><?php echo $title; ?></h1>
<?php endif; ?>

<?php if (is_active_sidebar('notice')) : ?>
	<div class="notice">
		<?php dynamic_sidebar('notice'); ?>
	</div>
<?php endif; ?>