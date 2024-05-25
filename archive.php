<?php get_header( ) ?>
<div class="archive_page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php get_template_part('includes/components/archive-posts'); ?>
                <div>
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar( ) ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer( ) ?>