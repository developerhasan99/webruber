<?php get_header( ) ?>
<div class="archive_page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>
                    <?php if ( have_posts() ): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#212529" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" style="margin-top: -5px;">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <?php endif; ?>
                    <?php if ( !have_posts() ): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#212529" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle" style="margin-top: -5px;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                    <?php endif; ?>
                    <?php $search_results=$wp_query->found_posts;
                        if ($search_results==1) {
                            echo $search_results.' '.esc_html__('Search result','ruber');
                        } else {
                            echo $search_results.' '.esc_html__('Search results','ruber');
                        }
                    ?>
                </h4>
                <?php if ( !have_posts() ): ?>
				    <h6 class="pb-3">Please try another search:</h6>
                <?php else: ?>
                    <h6 class="pb-3">For the term: "<?php echo get_search_query(); ?>"</h6>
			    <?php endif; ?>
                <div class="pb-3">
                    <?php get_search_form(); ?>
                </div>
                    <?php get_template_part('includes/components/archive-posts'); ?>
                <div class="pb-5">
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