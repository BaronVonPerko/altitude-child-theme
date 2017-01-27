<?php

add_action( 'wp_ajax_nopriv_altitude_child_save_contact_form', 'altitude_child_save_contact_form' );
add_action( 'wp_ajax_altitude_child_save_contact_form', 'altitude_child_save_contact_form' );

function altitude_child_save_contact_form() {
    $name = wp_strip_all_tags( $_POST["name"] );
    $email = wp_strip_all_tags( $_POST["email"] );
    $message = wp_strip_all_tags( $_POST["message"] );
    
    $args = array(
        'post_title'    => $name,
        'post_content'  => $message . '<br/><br/><a href="mailto:'.$email.'">'.$email.'</a>',
        'post_author'   => 1, // default id of admin user
        'post_type'     => 'ac-contact-page',
    );

    $postID = wp_insert_post( $args );

    echo $postID; // send to front-end; handle any errors there

    die();
}