<picture class="banner">
	<source 
		srcset="<?php echo get_the_post_thumbnail_url(null, 'banner_xxl'); ?>"
        media="(min-width: 1500px)"
	/>
	<source 
		srcset="<?php echo get_the_post_thumbnail_url(null, 'banner_xl'); ?>"
        media="(min-width: 1200px)"
	/>
	<source 
		srcset="<?php echo get_the_post_thumbnail_url(null, 'banner_l'); ?>"
        media="(min-width: 1000px)"
	/>
	<source 
		srcset="<?php echo get_the_post_thumbnail_url(null, 'banner_m'); ?>"
        media="(min-width: 800px)"
	/>
	<source 
		srcset="<?php echo get_the_post_thumbnail_url(null, 'banner_s'); ?>"
        media="(min-width: 250px)"
	/>
	<img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" />
</picture>