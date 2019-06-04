<?php 
return array(
    '5a4d43a686bcf' => array(
        'key' => '5a4d43a686bcf',
        'name' => 'list',
        'label' => __( 'Services or List', 'braftonium' ),
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'field_5a4d472786bd0',
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
                'key' => 'field_5a4d47a386bd1',
                'label' => __( 'Show', 'braftonium' ),
                'name' => 'show_text',
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
                    'intro' => __( 'Show Intro Text', 'braftonium' ),
                    'outro' => __( 'Show Outro Text', 'braftonium' ),
                ),
                'allow_custom' => 0,
                'save_custom' => 0,
                'default_value' => array(
                ),
                'layout' => 'vertical',
                'toggle' => 0,
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5a4d47d386bd2',
                'label' => __( 'Intro Text', 'braftonium' ),
                'name' => 'intro_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d47a386bd1',
                            'operator' => '==',
                            'value' => 'intro',
                        ),
                    ),
                ),
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
                'key' => 'field_5a4d574f8c579',
                'label' => __( 'List Custom Content or Recent Posts', 'braftonium' ),
                'name' => 'list_type',
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
                    'custom' => __( 'Custom', 'braftonium' ),
                    'recent' => __( 'Recent', 'braftonium' ),
                    'manual' => __( 'Manual', 'braftonium' ),
                    'first' => __( 'First', 'braftonium' ),
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => 'custom',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5a4d487bcb1fe',
                'label' => __( 'Custom Content', 'braftonium' ),
                'name' => 'custom_list',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d574f8c579',
                            'operator' => '==',
                            'value' => 'custom',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_5a4d552a2f98e',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add Content',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5a4d48e3cb1ff',
                        'label' => __( 'Image', 'braftonium' ),
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '25',
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
                        'key' => 'field_5a4d552a2f98e',
                        'label' => __( 'Title', 'braftonium' ),
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '75',
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
                        'key' => 'field_5a4d49e4cb200',
                        'label' => __( 'Content', 'braftonium' ),
                        'name' => 'content',
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
                        'toolbar' => 'basic',
                        'media_upload' => 0,
                        'delay' => 0,
                    ),
                    array(
                        'key' => 'field_5a4d49facb201',
                        'label' => __( 'Link', 'braftonium' ),
                        'name' => 'button',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                ),
            ),
            array(
                'key' => 'field_5a4d5799d4ddb',
                'label' => __( 'Recent', 'braftonium' ),
                'name' => 'recent',
                'type' => 'radio',
                'instructions' => __( 'If not the most recent posts, put in a custom post type, eg: "testimonial", "event", and "team-member".', 'braftonium' ),
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d574f8c579',
                            'operator' => '==',
                            'value' => 'recent',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '45',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'post' => 'post',
                ),
                'allow_null' => 0,
                'other_choice' => 1,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5a4d583bee06f',
                'label' => __( 'Number of Posts', 'braftonium' ),
                'name' => 'number_of_posts',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d574f8c579',
                            'operator' => '==',
                            'value' => 'recent',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '10',
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
                'key' => 'field_5aad583bea06f',
                'label' => __( 'Category', 'braftonium' ),
                'name' => 'category',
                'type' => 'text',
                'instructions' => __( 'If necessary.', 'braftonium' ),
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d574f8c579',
                            'operator' => '==',
                            'value' => 'recent',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '45',
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
                'key' => 'field_5c700cd7b5dea',
                'label' => __( 'Manual Content Picker', 'braftonium' ),
                'name' => 'manual_content',
                'type' => 'relationship',
                'instructions' => __( 'Manually select content. Note: this module expects a featured image.  Make sure selected content has one, or risk display issues.', 'braftonium' ),
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d574f8c579',
                            'operator' => '==',
                            'value' => 'manual',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                ),
                'taxonomy' => array(
                ),
                'filters' => array(
                    0 => 'search',
                    1 => 'post_type',
                    2 => 'taxonomy',
                ),
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ),
            array(
                'key' => 'field_5a4d487aab1fe',
                'label' => __( 'First of Post Types', 'braftonium' ),
                'name' => 'first',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d574f8c579',
                            'operator' => '==',
                            'value' => 'first',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Add Content',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5a4d48e3cb1af',
                        'label' => __( 'Post Type', 'braftonium' ),
                        'name' => 'post-type',
                        'type' => 'radio',
                        'instructions' => __( 'If not the most recent posts, put in a custom post type, eg: "testimonial", "event", and "team-member".', 'braftonium' ),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '45',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'post' => 'post',
                        ),
                        'allow_null' => 0,
                        'other_choice' => 1,
                        'save_other_choice' => 0,
                        'default_value' => '',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                    ),
                    array(
                        'key' => 'field_5a4e583aae06f',
                        'label' => __( 'Number of Posts', 'braftonium' ),
                        'name' => 'number_of_posts',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '10',
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
                        'key' => 'field_5a4d583bea06f',
                        'label' => __( 'Category', 'braftonium' ),
                        'name' => 'category',
                        'type' => 'text',
                        'instructions' => __( 'If necessary.', 'braftonium' ),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '45',
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
                'key' => 'field_5a590c555bed0',
                'label' => __( 'Button?', 'braftonium' ),
                'name' => 'showbutton',
                'type' => 'checkbox',
                'instructions' => __( 'Do not check this box if you want to link the content but not show a button.', 'braftonium' ),
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show' => __( 'Show button?', 'braftonium' ),
                ),
                'allow_custom' => 0,
                'save_custom' => 0,
                'default_value' => array(
                ),
                'layout' => 'vertical',
                'toggle' => 0,
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5a591033640ea',
                'label' => __( 'Image Size and Shape', 'braftonium' ),
                'name' => 'image_size_and_shape',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'round' => __( 'Round the image', 'braftonium' ),
                    'thumb' => __( 'Thumbnail (150px by 150px )', 'braftonium' ),
                    'square' => __( 'Squared (300px by 300px)', 'braftonium' ),
                    'full' => __( 'Full (best for awards and different sized images.)', 'braftonium' ),
                ),
                'allow_custom' => 0,
                'save_custom' => 0,
                'default_value' => array(
                ),
                'layout' => 'vertical',
                'toggle' => 0,
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5a4d4bc04dc6d',
                'label' => __( 'Outro Text', 'braftonium' ),
                'name' => 'outro_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a4d47a386bd1',
                            'operator' => '==',
                            'value' => 'outro',
                        ),
                    ),
                ),
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
                'key' => 'field_5a4d572d47280',
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