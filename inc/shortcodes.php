<?php
/*
 * shortcodes.php
 *
 * Shortcodes for Latte-Child theme.
 */





// Display Portfolio Shortcode
function latte_child_display_portfolio( $atts, $content = null ) {
  $atts = shortcode_atts (
    array(),
    $atts,
    'display_portfolio'
  );

  ob_start();
  include 'templates/portfolio.php';
  return ob_get_clean(); 
}
add_shortcode( 'display_portfolio', 'latte_child_display_portfolio' );
