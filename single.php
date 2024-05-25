<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="article pb-5">
                    <?php if(have_posts()):while(have_posts()):the_post(); ?> 
                    <div class="post-meta">
                        <div class="breadcrumb">
                            <?php get_breadcrumb(); ?>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <p class="post-author">By <?php the_author_meta( 'display_name' ); ?> <span class="post-date">on <?php echo get_the_modified_date(); ?></span></p>
                    </div>
                    <div class="single-thumbnail-wrapper">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div id="content"> 
                        <?php the_content(); ?> 
                    </div>
                    <div class="post-tag">
                        <?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','ruber').'</span> ','','</p>'); ?>
                    </div>
                    <?php get_template_part('includes/components/social-share'); ?> 
                    <?php get_template_part('includes/components/single-post-nav'); ?> 
                    <?php endwhile; endif; ?>
                    <?php // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; 
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar( ) ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
   var copyLink=document.getElementById('copyLink'); var copyText=window.location;
   copyLink.addEventListener("click",function(){window.navigator.clipboard.writeText(copyText); alert("Copied link to Clipboard!");}); 
</script>
<?php get_footer(); ?>
