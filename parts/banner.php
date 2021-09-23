<picture class="banner">
	<source 
		srcset="/media/cc0-images/surfer-240-200.jpg"
        media="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>"
	/>
	<source 
		srcset="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>"
        media="(min-width: 250px)"
	/>
	<img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" />
</picture>