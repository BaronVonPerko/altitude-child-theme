<?php

/*
 * functions.php
 *
 */



require get_stylesheet_directory() . '/inc/function-admin.php';
require get_stylesheet_directory() . '/inc/function-custom-post-type.php';
require get_stylesheet_directory() . '/inc/function-enqueue.php';
require get_stylesheet_directory() . '/inc/shortcodes.php';
require get_stylesheet_directory() . '/inc/customizer/customize-header.php';


/*
 * Load the parent styles
 */
add_action( 'wp_enqueue_scripts', 'latte_child_enqueue_styles' );
function latte_child_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


/*
 * The parent theme has an ugly banner on the Themes page
 * that asks the user to upgrade to a paid version.  This
 * removes that banner.
 */
add_action( 'wp_loaded', 'remove_upgrade_callout' );
function remove_upgrade_callout() {
    remove_action( 'admin_notices', 'my_admin_notice' );
}
