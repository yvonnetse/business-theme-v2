<?php

return array(
    '5a4d5c08f12bf' => array(
        'key' => '5a4d5c08f12bf',
        'name' => 'row',
        'label' => __( 'Row', 'braftonium' ),
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'field_5a4d5f297ac85',
                'label' => __( 'Title', 'braftonium' ),
                'name' => 'title',
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
            array(
                'key' => 'field_5a4d5c19f12c0',
                'label' => __( 'Flexible Content', 'braftonium' ),
                'name' => 'row_content',
                'type' => 'flexible_content',
                'instructions' => __( 'When you add more blocks, they will show up next to each other in a single row.', 'braftonium' ),
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => array(
                    '5a4d5d81c2cb8' => array(
                        'key' => '5a4d5d81c2cb8',
                        'name' => 'imageblock',
                        'label' => __( 'Image', 'braftonium' ),
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5a4d5d84c9205',
                                'label' => __( 'Image', 'braftonium' ),
                                'name' => 'Image',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'id',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_5c1ab80ed7d08',
                                'label' => 'Change Width?',
                                'name' => 'change_width',
                                'type' => 'checkbox',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'choices' => array(
                                    'on' => ' ',
                                ),
                                'allow_custom' => 0,
                                'default_value' => array(
                                ),
                                'layout' => 'horizontal',
                                'toggle' => 0,
                                'return_format' => 'value',
                                'save_custom' => 0,
                            ),
                            array(
                                'key' => 'field_5ba3d27096b20',
                                'label' => '',
                                'name' => 'width',
                                'type' => 'range',
                                'instructions' => 'Use this only if you have checked the preview and the item\'s width looks incorrect. Note for developers: did you check mobile?',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_5c1ab80ed7d08',
                                            'operator' => '==',
                                            'value' => 'on',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'min' => '',
                                'max' => '',
                                'step' => 1,
                                'prepend' => '',
                                'append' => '%',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    '5a4d5db9c9207' => array(
                        'key' => '5a4d5db9c9207',
                        'name' => 'textblock',
                        'label' => __( 'Text', 'braftonium' ),
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5a4d5dc3c9208',
                                'label' => __( 'Text', 'braftonium' ),
                                'name' => 'text',
                                'type' => 'wysiwyg',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'tabs' => 'all',
                                'toolbar' => 'full',
                                'media_upload' => 1,
                                'delay' => 0,
                            ),
                            array(
                                'key' => 'field_5c1ab80ed7d09',
                                'label' => 'Change Width?',
                                'name' => 'change_width',
                                'type' => 'checkbox',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'choices' => array(
                                    'on' => ' ',
                                ),
                                'allow_custom' => 0,
                                'default_value' => array(
                                ),
                                'layout' => 'horizontal',
                                'toggle' => 0,
                                'return_format' => 'value',
                                'save_custom' => 0,
                            ),
                            array(
                                'key' => 'field_5ba3d27096b21',
                                'label' => '',
                                'name' => 'width',
                                'type' => 'range',
                                'instructions' => 'Use this only if you have checked the preview and the item\'s width looks incorrect. Note for developers: did you check mobile?',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_5c1ab80ed7d09',
                                            'operator' => '==',
                                            'value' => 'on',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'min' => '',
                                'max' => '',
                                'step' => 1,
                                'prepend' => '',
                                'append' => '%',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => __( 'Add Block', 'braftonium' ),
                'min' => '',
                'max' => '',
            ),
            
            array(
                'key' => 'field_5c1ba80ed7d09',
                'label' => 'Change top margin',
                'name' => 'change_top',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'auto' => 'auto',
                    'zero' => '0',
                ),
                'allow_custom' => 0,
                'default_value' => array(
                ),
                'layout' => 'horizontal',
                'toggle' => 0,
                'return_format' => 'value',
                'save_custom' => 0,
            ),
            array(
                'key' => 'field_5a4d6026dacc4',
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
                    0 => 'group_5a4d3902e55eb',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
        ),
        'min' => '',
        'max' => '',
    )
);