<?php 

return array(
    'register'  => array(
        'name'              => 'map',
        'title'             => __('Map'),
        'description'       => __('Call to Action Block'),
        // 'render_template'   => static::$dir.'/full-width/components/cta/block-cta.html.php',
        'category'          => 'braftonium',
        'icon'              => 'location-alt',
        'keywords'          => array( 'testimonial', 'quote' ),
    ),
    'fields' => array(
        'key' => 'group_5a4e4dce0ad63_map',
        'title' => 'map-fields',
        'fields' => array(
            array(
                'key' => 'field_5a4e4dd70ad64_map',
                'label' => __( 'Address', 'braftonium' ),
                'name' => 'address',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => __( 'Add Address Line', 'braftonium' ),
                'sub_fields' => array(
                    array(
                        'key' => 'field_5a8d9aef67547_map',
                        'label' => __( 'Address Line', 'braftonium' ),
                        'name' => 'address_line',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5a4e4e420ad67_map',
                'label' => __( 'Phone', 'braftonium' ),
                'name' => 'phone',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_5a4e4e760ad68_map',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => __( 'Add Phone Number', 'braftonium' ),
                'sub_fields' => array(
                    array(
                        'key' => 'field_5a4e4e760ad68_map',
                        'label' => __( 'Phone Label', 'braftonium' ),
                        'name' => 'phone_label',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => __( 'Toll Free/Fax/', 'braftonium' ),
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5a4e4f50fce8c_map',
                        'label' => __( 'Phone Number', 'braftonium' ),
                        'name' => 'phone_number',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '123-456-7890',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5a4e4f9cffefb_map',
                'label' => __( 'Email', 'braftonium' ),
                'name' => 'email_input',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_5a4e4f9dffefc_map',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => __( 'Add Email', 'braftonium' ),
                'sub_fields' => array(
                    array(
                        'key' => 'field_5a4e4f9dffefc_map',
                        'label' => __( 'Email Label', 'braftonium' ),
                        'name' => 'email_label',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => __( 'Info/Sales/Support', 'braftonium' ),
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5a4e4f9dffefd_map',
                        'label' => __( 'Email Address', 'braftonium' ),
                        'name' => 'email_address',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => __( 'info/sales/support@website.com', 'braftonium' ),
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5a4e50cdbaaf9_map',
                'label' => __( 'Map', 'braftonium' ),
                'name' => 'map',
                'type' => 'google_map',
                'instructions' => __( 'Did you enter the Google API key in Braftonium Options under Appearance? If you need an API key go to <a href="https://developers.google.com/maps/documentation/embed/get-api-key" target="_blank">this page</a> and get yourself a key. Click the "Get Started" button, click Maps, Routes, Places, and press Continue. Select a new project and follow the instructions to set up your billing information. Copy and paste the API key there.', 'braftonium' ),
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'center_lat' => '',
                'center_lng' => '',
                'zoom' => '',
                'height' => '',
            ),
            array(
                'key' => 'field_5a4e59b36a136_map',
                'label' => __( 'Style', 'braftonium' ),
                'name' => 'style',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'clone' => array(
                    0 => 'group_5a4d3902e55eb_bf',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/map',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    )
);