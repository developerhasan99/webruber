<div class="single-post-nav my-5"> 
    <?php if ( is_single() ): ?> 
    <ul class="post-nav"> 
        <li class="next">
            <?php next_post_link('%link', '<strong>'.esc_html__('Previous Article', 'ruber').'</strong> <span>%title</span>'); ?>
        </li>
        <li class="previous">
            <?php previous_post_link('%link', '<strong>'.esc_html__('Next Article', 'ruber').'</strong> <span>%title</span>'); ?>
        </li>
    </ul> 
    <?php endif; ?> 
</div>