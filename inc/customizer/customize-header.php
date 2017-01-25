<?php


function altitude_child_add_header_section( $wp_customize ) {
    
    $wp_customize->add_section( 'altitude_child_custom_header', array(
        'title'         => __('Header Contact', 'altitude-child'),
        'priority'      => 30,
        'description'   => 'Customize the Contact Me section in the header.'
    ) );
    
    $wp_customize->add_setting( 'altitude_child_header_contact_enabled', array(
            'default'   => false,
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control (
            $wp_customize,
            'altitude_child_header_contact_enabled',
            array (
                'label'     => __( 'Enabled', 'altitude_child' ),
                'section'   => 'altitude_child_custom_header',
                'settings'  => 'altitude_child_header_contact_enabled',
                'type'      => 'checkbox'
            )
        )
    );
    
    $wp_customize->add_setting( 'altitude_child_header_contact_text', array(
            'default'   => 'Contact Me',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control (
            $wp_customize,
            'altitude_child_header_contact_text',
            array (
                'label'     => __( 'Label', 'altitude_child' ),
                'section'   => 'altitude_child_custom_header',
                'settings'  => 'altitude_child_header_contact_text',
                'type'      => 'text'
            )
        )
    );
    
    $wp_customize->add_setting( 'altitude_child_header_contact_number', array(
            'default'   => '888.123.4567',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control (
            $wp_customize,
            'altitude_child_header_contact_number',
            array (
                'label'     => __( 'Phone Number', 'altitude_child' ),
                'section'   => 'altitude_child_custom_header',
                'settings'  => 'altitude_child_header_contact_number',
                'type'      => 'text'
            )
        )
    );
    
}
add_action( 'customize_register', 'altitude_child_add_header_section' );