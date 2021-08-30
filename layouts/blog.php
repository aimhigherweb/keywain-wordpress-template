<?php


	$page = get_option('page_for_posts');
	$page_data = get_page($page);
	
	

?>

<h1><?php echo get_the_title($page); ?></h1>

<?php echo apply_filters('the_content', $page_data->post_content); ?>

<?php if(have_posts()) :

	echo '<ul class="posts">';
		
		while(have_posts()) : the_post(); ?>

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

		<?php endwhile;

	
	echo '</ul>'; 
	
	echo get_the_posts_pagination();

endif; ?>