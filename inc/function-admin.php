<?php
/*
 * function-admin.php
 *
 * Administration panel functions
 */




/*
 * Register Altitude Child Admin Settings
 */
function register_altitude_child_settings() {
  register_setting( 'altitude-child-options-group', 'altitude-child-enable-portfolio' );
  register_setting( 'altitude-child-options-group', 'altitude-child-enable-work-history' );

  add_settings_section( 'altitude-child-settings', 'Altitude Child Settings', 'altitude_child_settings', 'altitude-child' );

  add_settings_field( 'altitude-child-enable-portfolio', 'Portfolio Page Enabled', 'altitude_child_enable_portfolio', 'altitude-child', 'altitude-child-settings' );
  add_settings_field( 'altitude-child-enable-work-history', 'Work History Page Enabled', 'altitude_child_enable_work_history', 'altitude-child', 'altitude-child-settings' );
}
add_action( 'admin_init', 'register_altitude_child_settings' );

function altitude_child_enable_portfolio() {
  $enablePortfolio = get_option( 'altitude-child-enable-portfolio' );
  $checked = @$enablePortfolio == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="altitude-child-enable-portfolio" '.$checked.' />';
  if( $checked ) {
    ?>
      <p>
        Use this <strong>shortcode</strong> to activate the portfolio inside a Page or Post
      </p>
      <code>[display_portfolio]</code>
    <?php
  }
 }

function altitude_child_enable_work_history() {
  $enableWorkHistory = get_option( 'altitude-child-enable-work-history' );
  $checked = @$enableWorkHistory == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="altitude-child-enable-work-history" '.$checked.' />';
  if( $checked ) {
    ?>
      <p>
        Use this <strong>shortcode</strong> to activate the work history inside a Page or Post
      </p>
      <code>[display_work_items]</code>
    <?php
  }
}

function altitude_child_settings() {
  echo 'Customize Theme Experience';
}




/*
 * Setup the Child Theme administration settings page
 */

function altitude_child_admin_settings() {
  add_menu_page( 'Altitude Child Options', 'Altitude Child Settings', 'manage_options', 'altitude-child', 'altitude_child_get_admin_settings', null, 99 );

  add_submenu_page( 'altitude-child', 'Contact Form', 'Contact Form', 'manage_options', 'altitude-child-contact-page', 'altitude_child_contact_page' );
}
add_action( 'admin_menu', 'altitude_child_admin_settings' );

function altitude_child_contact_page() {
  require_once( get_stylesheet_directory() . '/inc/templates/admin-contact-form.php');
}

function altitude_child_get_admin_settings() {
  require_once( get_stylesheet_directory() . '/inc/templates/admin-settings.php' );
}



/*
 * Contact Form Options
 */
function altitude_child_contact_settings() {
  register_setting( 'altitude-child-contact-options', 'activate_contact_form' );
  register_setting( 'altitude-child-contact-options', 'require_phone' );

  add_settings_section( 'altitude-child-contact-section', 'Contact Form', 'altitude_child_contact', 'altitude_child_contact' );

  add_settings_field( 'activate-form', 'Activate Contact Form', 'altitude_child_activate_contact', 'altitude_child_contact', 'altitude-child-contact-section' );
  add_settings_field( 'require-phone', 'Require Phone Number', 'altitude_child_require_phone', 'altitude_child_contact', 'altitude-child-contact-section' );
}
add_action( 'admin_init', 'altitude_child_contact_settings' );

function altitude_child_contact() {
  echo 'Activate and Deactivate the Built-in Contact Form';
}

function altitude_child_activate_contact() {
  $enableContactForm = get_option( 'activate_contact_form' );
  $checked = @$enableContactForm == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="activate_contact_form" '.$checked.' />';
}

function altitude_child_require_phone() {
  $enableContactForm = get_option( 'activate_contact_form' );
  $disabled = @$enableContactForm == 1 ? '' : 'disabled';

  $phoneRequired = get_option( 'require_phone' );
  $checked = @$phoneRequired == 1 ? 'checked' : '';
  echo '<input type="checkbox" value="1" name="require_phone" '.$disabled.' '.$checked.' />';
}
