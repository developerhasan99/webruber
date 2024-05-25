<?php 


// Disable XML-RPC RSD link from WordPress Header
remove_action ('wp_head', 'rsd_link');

// Remove WordPress version number
function crunchify_remove_version() {
	return '';
}
add_filter('the_generator', 'crunchify_remove_version');

// Remove wlwmanifest link
remove_action( 'wp_head', 'wlwmanifest_link');

//Remove shortlink
remove_action( 'wp_head', 'wp_shortlink_wp_head');

// Remove wp-embed.min.js from footer
function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


//Remove Website field from Comment form
add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields){
    if(isset($fields['url']))
    unset($fields['url']);
    return $fields;
}


?>