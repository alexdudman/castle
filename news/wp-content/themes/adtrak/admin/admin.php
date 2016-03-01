<?php
/* 
You can use this file to make changes to the
dashboard / Login Area...
It is called via the functions file.

Developed by: Sam Goddard

*/

/************* DASHBOARD WIDGETS *****************/

// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	// remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
	//remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	//remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	// remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         // 
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //
	
	// removing plugin dashboard boxes 
	//remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget
}


// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');


/************* CUSTOM LOGIN PAGE *****************/

// calling your own login css so you can style it /admin/css/login.css 
function adtrak_login_css() {
	
	/* i couldn't get wp_enqueue_style to work :( */
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/admin/css/login.css">';
}

// changing the logo link from wordpress.org to your site 
function adtrak_login_url() { echo bloginfo('url'); }

// changing the alt text on the logo to show your site name 
function adtrak_login_title() { echo get_option('blogname'); }

// calling it only on the login page
add_action('login_head', 'adtrak_login_css');
add_filter('login_headerurl', 'adtrak_login_url');
add_filter('login_headertitle', 'adtrak_login_title');


/************* CUSTOMIZE ADMIN *******************/

/*
Try not to edit this too much.... I had a lot of issues with it, currently just add's 'Developed by Adtrak' to the footer of the Admin Panel...
*/

// Custom Backend Footer
function custom_admin_footer() {
	echo '<span id="footer-thankyou">Developed by <a href="http://www.adtrak.co.uk" target="_blank">Adtrak</a></span>.';
}

// adding it to the admin area
add_filter('admin_footer_text', 'custom_admin_footer');

