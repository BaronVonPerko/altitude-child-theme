<?php

/*
 * function-enqueue.php
 *
 * Enqueue scripts and styles used by this theme.
 *
 */


// Custom Minified Styles
wp_register_style(  'altitude-child-custom',
                    get_stylesheet_directory_uri() . '/dist/custom.css',
                    array(),
                    '1.0.0',
                    'all' );
wp_enqueue_style( 'altitude-child-custom' );