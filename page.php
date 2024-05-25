<?php get_header(); ?>
<div class="single_page" <?php post_class(); ?>>
    <div class="container">
    <?php if(have_posts()):while(have_posts()):the_post(); ?> 
        <div class="post_meta">
            <div class="breadcrumb">
                <?php get_breadcrumb(); ?>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
        <div id="content"> 
            <?php the_content(); ?> 
        </div>
    <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
