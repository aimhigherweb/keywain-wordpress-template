<?php


	$page = get_option('page_for_posts');
	$page_data = get_page($page);	
	$archive = get_queried_object();
	$blog = get_permalink( get_option( 'page_for_posts' ) );
	$tags = get_tags(array(
		'hide_empty' => true,
		'orderby' => 'count',
		'order' => 'DESC',
		'number' => 10
	));
?>

<ul class="tags filter">
	<li class="cat-title">Filter by Tag</li>
	<li>
		<a 
			href="<?php echo $blog; ?>"
		>
			All Posts
		</a>
	</li>
	<?php foreach($tags as $tag): ?>
		<li>
			<a 
				class="<?php if($tag->term_id == $archive->term_id) {echo 'current';} ?>"
				href="<?php echo get_category_link($tag->term_id); ?>"
			>
				<?php echo $tag->name; ?>
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