<?php get_header(); ?>

<div class="container">
		
	<?php while ( have_posts() ) : the_post(); ?>
			
	<div class="project-title">
	
		<h1 class="project-name"><?php the_title(); ?></h1>
		
			<div class ="text-block two-col description">
				<p><?php $key="description"; echo get_post_meta($post->ID, $key, true); ?></p>
			</div>
			
			<div class="infos-and-nav">
			
				<div class="text-block two-col project-info">
					
					<?php if ( $keys = get_post_custom_keys() ) {
					echo "<ul class='post-meta'>\n";
					foreach ( (array) $keys as $key ) {
					$keyt = trim($key);
					if ( '_' == $keyt{0} || 'description' == $keyt )
					continue;
					$values = array_map('trim', get_post_custom_values($key));
					$value = implode($values,', ');
					echo apply_filters('the_meta_key', "
					<li><span class='post-meta-key'>$key:</span> $value</li>
					\n", $key, $value);
					}
					echo "\n";
					echo  "</ul>";
					} ?>
					
					<p class ="post-meta"><?php the_tags( "<span class='post-meta-key'>tags: </span>",", " ); ?></p>
					
				</div>
				
				<div class="text-block two-col nav-post">
					<p class="reference"> 
						<?php next_post_link('%link', 'previous&nbsp;', FALSE); ?> ∙ <?php previous_post_link('%link', '&nbsp;next', FALSE); ?>
					</p>
				</div>
			
		</div>
					
	</div>
				
	<div class="project-images">
		<?php the_content(__('(more…)')); ?>
		<?php endwhile; ?> 	
	</div>
	
	<div class="top-link">
		<p><a href="#top">- BACK TO TOP -</a></p> 
		<p class="rights">© <?php echo $author = get_the_author();?> <?php echo date('Y'); ?> All rights reserved</p>
	</div>

<?php get_footer(); ?>