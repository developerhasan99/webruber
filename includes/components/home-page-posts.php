<?php
// Query random posts
$the_query = new WP_Query( array(
	'post_type'      => 'post',
	'orderby'        => 'rand',
	'posts_per_page' => 3,
) ); ?>

<?php
// If we have posts lets show them
if ( $the_query->have_posts() ) : 
	// Loop through the posts
	while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
        <div class="col-md-4 mb-5">
            <div class="card">
            <a href="<?php the_permalink(); ?>">
            <img
                class="card-img-top"
                src="<?php the_post_thumbnail_url(); ?>"
                alt="Card image cap"
            />
            </a>
            <div class="card-body">
                <a href="<?php the_permalink(); ?>">
                    <h5 class="card-title">
                    <?php the_title(); ?>
                    </h5>
                </a>
                <p class="card-text">
                <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
            </div>
        </div>
	<?php endwhile;
	wp_reset_postdata(); 
endif; ?>