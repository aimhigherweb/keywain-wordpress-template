<li class="post">
	<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'block_news'); ?>" alt="">
	<h2><?php echo get_the_title(); ?></h2>
	<div class="content">
		<?php echo get_the_excerpt(); ?>
	</div>
	<a href="<?php echo get_the_permalink(); ?>" class="block_link">
		<span class="sr-only">Read full article <?php echo get_the_title(); ?></span>
	</a>
</li>