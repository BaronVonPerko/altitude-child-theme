<?php


function altitude_child_add_social_media_section( $wp_customize ) {
    
    $wp_customize->add_section( 'altitude_child_custom_social_media', array(
        'title'         => __('Social Media', 'altitude-child'),
        'priority'      => 31,
        'description'   => 'Customize the Social Media links in the hero.'
    ) );



    /*
     * Twitter
     */

    $wp_customize->add_setting( 'altitude_child_twitter_handle', array(
        'default'   => '',
        'transport' => 'refresh'
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control (
        $wp_customize,
        'altitude_child_twitter_handle',
        array(
            'label'     => __( 'Twitter Handle', 'altitude_child' ),
            'section'   => 'altitude_child_custom_social_media',
            'settings'  => 'altitude_child_twitter_handle',
            'type'      => 'text',
        )
    ) );
    


    /*
     * GitHub
     */

    $wp_customize->add_setting( 'altitude_child_facebook_id', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'altitude_child_facebook_id',
        array(
            'label'     => __( 'Facebook User ID', 'altitude_child' ),
            'section'   => 'altitude_child_custom_social_media',
            'settings'  => 'altitude_child_facebook_id',
            'type'      => 'text',
        )
    ) );
}
add_action( 'customize_register', 'altitude_child_add_social_media_section' );