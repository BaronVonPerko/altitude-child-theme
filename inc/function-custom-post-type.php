<?php
/*
 * function-custom-post-type.php
 *
 * Setup the custom post types used by the theme.
 */




/*
 * Portfolio Items
 */
$enablePortfolio = get_option( 'latte-child-enable-portfolio' );
if( @$enablePortfolio == 1 ) {
  add_action( 'init', 'create_portfolio_item_post_type' );
}

function create_portfolio_item_post_type() {
  $labels = array(
    'name'            => __( 'Portfolio Items' ),
    'singular_name'   => __( 'Portfolio Item' ),
    'menu_name'       => __( 'Portfolio Items' ),
    'name_admin_bar'  => __( 'Portfolio Item' )
  );

  $args = array(
    'labels'          => $labels,
    'show_ui'         => true,
    'show_in_menu'    => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 26,
    'menu_icon'       => 'dashicons-portfolio',
    'supports'        => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type( 'portfolio', $args );
}
