<?php

    function custom_colour_schemes ($wp_customize){
        $wp_customize->add_section('colour_settings_section', array(
            'title'          => 'Brand Colour'
        ));

        $wp_customize->add_setting('main_colour', array(
            'default'        => '#ffffff',
        ) );

        $wp_customize->add_control( 'main_colour', array(
            'type' => 'select',
            'section' => 'colour_settings_section',
            'label' => __( 'Select Main Colour' ),
            'choices' => array(
            'blue' => __( 'Blue' ),
            'red' => __( 'Red' ),
            ),
        ) );

    }
    add_action('customize_register', 'custom_colour_schemes');

?>