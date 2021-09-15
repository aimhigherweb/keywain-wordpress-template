<?php


	$page = get_option('page_for_posts');
	$page_data = get_page($page);
	$blog = get_permalink( get_option( 'page_for_posts' ) );
?>

<picture class="banner">
	<source 
		media="(min-width: 1000px)" 
		srcset="<?php echo get_the_post_thumbnail_url($page, 'full'); ?>" 
	/>
	<source 
		media="(min-width: 300px)" 
		srcset="<?php echo get_the_post_thumbnail_url($page, 'large'); ?>" 
	/>
	<img src="<?php echo get_the_post_thumbnail_url($page); ?>" />
</picture>

<h1><?php echo get_the_title($page); ?></h1>

<?php echo apply_filters('the_content', $page_data->post_content); ?>

<ul class="cats">
	<li>
		<a 
			class="current"
			href="<?php echo $blog; ?>"
		>
			All Posts
		</a>
	</li>
	<?php foreach(get_categories() as $cat): ?>
		<li>
			<a href="<?php echo get_category_link($cat->term_id); ?>">
				<?php echo $cat->name; ?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>

<?php if(have_posts()) :

	echo '<ul class="posts">';
		
		while(have_posts()) : 
			
			the_post();
			get_template_part('parts/post');
	
		endwhile;

	
	echo '</ul>'; 
	
	echo get_the_posts_pagination();

endif; ?>