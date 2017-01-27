<?php
/*
 * shortcodes.php
 *
 * Shortcodes for altitude-child theme.
 */





// Display Portfolio Shortcode
function altitude_child_display_portfolio( $atts, $content = null ) {
  $atts = shortcode_atts (
    array(),
    $atts,
    'display_portfolio'
  );

  ob_start();
  include 'templates/shortcodes/portfolio.php';
  return ob_get_clean();
}
add_shortcode( 'display_portfolio', 'altitude_child_display_portfolio' );



// Display Work Items Shortcode
function altitude_child_display_work_items( $atts, $content = null ) {
  $atts = shortcode_atts (
    array(),
    $atts,
    'display_work_items'
  );

  ob_start();
  include 'templates/shortcodes/work-history.php';
  return ob_get_clean();
}
add_shortcode( 'display_work_items', 'altitude_child_display_work_items' );
