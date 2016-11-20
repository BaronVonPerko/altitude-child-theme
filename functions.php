<?php
add_action( 'wp_enqueue_scripts', 'latte_child_enqueue_styles' );

function latte_child_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'init', 'create_portfolio_post_type' );
function create_portfolio_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio Items' ),
        'singular_name' => __( 'Portfolio Item' )
      ),
      'public' => true,
      'has_archive' => true
    )
  );
}
add_post_type_support( 'portfolio', 'thumbnail' );
