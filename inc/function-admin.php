<?php
/*
 * function-admin.php
 *
 * Administration panel functions
 */




/*
 * Register Latte Child Admin Settings
 */
function register_latte_child_settings() {
  register_setting( 'latte-child-options-group', 'latte-child-enable-portfolio' );

  add_settings_section( 'latte-child-settings', 'Latte Child Settings', 'latte_child_settings', 'latte-child' );

  add_settings_field( 'latte-child-enable-portfolio', 'Portfolio Page Enabled', 'latte_child_enable_portfolio', 'latte-child', 'latte-child-settings' );
}
add_action( 'admin_init', 'register_latte_child_settings' );

function latte_child_enable_portfolio() {
  $enablePortfolio = get_option( 'latte-child-enable-portfolio' );
  $checked = @$enablePortfolio == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="latte-child-enable-portfolio" '.$checked.' />';
}

function latte_child_settings() {
  echo 'Customize Latte Child Experience';
}




/*
 * Setup the Child Theme administration settings page
 */
function latte_child_get_admin_settings() {
  require_once( get_stylesheet_directory() . '/inc/templates/latte-child-admin-settings.php' );
}
function latte_child_admin_settings() {
  add_menu_page( 'Latte Child Options', 'Latte Child', 'manage_options', 'latte-child', 'latte_child_get_admin_settings', null, 99 );
}
add_action( 'admin_menu', 'latte_child_admin_settings' );
