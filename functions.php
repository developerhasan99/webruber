<?php 

// Load Static Scripts
require_once( __DIR__ . '/includes/functions/load-statics.php');

// Move jQuery to the footer. 
require_once( __DIR__ . '/includes/functions/jquery-to-footer.php');

// Add theme supports
require_once( __DIR__ . '/includes/functions/add-theme-supports.php');

// Register sidebars
require_once( __DIR__ . '/includes/functions/register-sidebars.php');

//BreadCrumb Functions
require_once( __DIR__ . '/includes/functions/breadcrumb.php');

//Copy year function
require_once( __DIR__ . '/includes/functions/copydate.php');

//Ruber Recent Posts
require_once( __DIR__ . '/includes/functions/ruber-recent-posts.php');

//Ruber Recent Posts
require_once( __DIR__ . '/includes/functions/ruber-grid-posts.php');

//Customize excerpt length
require_once( __DIR__ . '/includes/functions/excerpt-length.php');

//Remove unused hooks
// require_once( __DIR__ . '/includes/functions/remove-hooks.php');

//Woocommarce functions
require_once( __DIR__ . '/includes/functions/woocommerce-functions.php');

?>