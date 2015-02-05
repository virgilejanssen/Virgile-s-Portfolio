<?php get_header(); ?>

<div class="container">

	<div class="box-container">	
		<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink() ?>">
			<div class="box 
				<?php
					$posttags = get_the_tags();
						if ($posttags) {
							foreach($posttags as $tag) {
							echo $tag->name . ' '; 
							}
						}
				?>
				<?php
					foreach((get_the_category()) as $category) { 
						echo $category->cat_name . ' '; 
					} 
				?>
			">
			<?php the_post_thumbnail(); ?>
				<div class="box-description">
					<p><?php the_title(); ?></p>
				</div>
			</div>
		</a>
				
		<?php endwhile; ?> 
		
		<br class="clearboth"/>
	
	</div>	
</div>

<?php get_footer(); ?>