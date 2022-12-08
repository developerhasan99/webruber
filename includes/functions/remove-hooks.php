<?php 

//Disable the WP emojies
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

//Filter out the tinymce emoji plugin.
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

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

// Remove query strings from all static resources
function crunchify_cleanup_query_string( $src ){ 
	$parts = explode( '?', $src ); 
	return $parts[0]; 
} 
add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 ); 
add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );


// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
	wp_dequeue_style( 'wp-block-library' );
}

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