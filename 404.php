<?php get_header( ) ?>
<div class="not-found-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="text-center py-5">
                    <h1 class="display-1">404!</h1>
                    <p class="pb-3">The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a class="btn btn-primary" href="<?php echo esc_url( home_url( ) ); ?>">Go to Home</a>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar( ) ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer( ) ?>