<?php

/*
 * function-enqueue.php
 *
 * Enqueue scripts and styles used by this theme.
 *
 */


// Portfolio Styles
wp_register_style(  'altitude-child-portfolio',
                    get_stylesheet_directory_uri() . '/inc/css/portfolio.css',
                    array(),
                    '1.0.0',
                    'all' );
wp_enqueue_style( 'altitude-child-portfolio' );



// Work History Styles
wp_register_style(  'altitude-child-work-history',
                    get_stylesheet_directory_uri() . '/inc/css/work-history.css',
                    array(),
                    '1.0.0',
                    'all' );
wp_enqueue_style( 'altitude-child-work-history' );



// Content Styles
wp_register_style(  'altitude-child-content',
                    get_stylesheet_directory_uri() . '/inc/css/content.css',
                    array(),
                    '1.0.0',
                    'all' );
wp_enqueue_style( 'altitude-child-content' );