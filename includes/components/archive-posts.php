<div class="row">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="col-sm-6 mb-5">
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
    <?php endwhile; endif; ?>
</div>