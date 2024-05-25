<?php
// Query random posts
$the_query = new WP_Query( array(
	'post_type'      => 'post',
	'orderby'        => 'rand',
	'posts_per_page' => 1,
) ); ?>

<?php
// If we have posts lets show them
if ( $the_query->have_posts() ) : 
	// Loop through the posts
	while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
		<div class="random-post pb-5">
			<div class="post-meta">
            	<div class="align-middle">
            		<p class="post-date"><?php echo get_the_modified_date(); ?></p>
					<a href="<?php the_permalink(); ?>">
						<h1><?php the_title(); ?></h1>
					</a>
	           		<?php the_excerpt(); ?>
            	</div>
			</div>
			<div class="image-wrapper">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large'); ?>
				</a>
			</div>
		</div>
	<?php endwhile;
	wp_reset_postdata(); 
endif; ?>