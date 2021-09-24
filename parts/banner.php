<?php
	$page_id = null;
	$category = null;
	$image = null;
	
	if(isset($args, $args['page_id'])) {
		$page_id = $args['page_id'];
	}

	if(isset($args, $args['category'])) {
		$category = $args['category'];
	}

	if($category != null) {
		$image = get_field('image', $category);
	}
	else {
		$image = get_post_thumbnail_id($page_id);
	}

	if($category && $image == null) {
		$image = get_post_thumbnail_id(get_option('page_for_posts'));
	}

?>

<?php if($image != null): ?>

<picture class="banner">
	<source 
		srcset="<?php echo wp_get_attachment_image_src($image, 'banner_xxl')[0]; ?>"
        media="(min-width: 1500px)"
	/>
	<source 
		srcset="<?php echo wp_get_attachment_image_src($image, 'banner_xl')[0]; ?>"
        media="(min-width: 1200px)"
	/>
	<source 
		srcset="<?php echo wp_get_attachment_image_src($image, 'banner_l')[0]; ?>"
        media="(min-width: 1000px)"
	/>
	<source 
		srcset="<?php echo wp_get_attachment_image_src($image, 'banner_m')[0]; ?>"
        media="(min-width: 800px)"
	/>
	<source 
		srcset="<?php echo wp_get_attachment_image_src($image, 'banner_s')[0]; ?>"
        media="(min-width: 250px)"
	/>
	<img src="<?php echo wp_get_attachment_image_src($image, 'full')[0]; ?>" />
</picture>

<?php endif; ?>