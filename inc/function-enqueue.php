<?php

/*
 * function-enqueue.php
 *
 * Enqueue scripts and styles used by this theme.
 *
 */


// Custom Minified Styles
function altitude_child_load_scripts() {
    wp_register_style(  'altitude-child-custom',
                        get_stylesheet_directory_uri() . '/dist/custom.css',
                        array(),
                        '1.0.0',
                        'all' );
    wp_enqueue_style( 'altitude-child-custom' );



    // Javascript
    wp_enqueue_script( 'altitude-child-script', get_stylesheet_directory_uri() . '/js/altitude-child.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'altitude_child_load_scripts' );