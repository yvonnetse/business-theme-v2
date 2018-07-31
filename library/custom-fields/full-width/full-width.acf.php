<?php
if(function_exists("acf_add_local_field_group")){
acf_add_local_field_group(array(
	'key' => 'group_5a4d29f317abe',
	'title' => 'full-width',
	'fields' => array(
		array(
			'key' => 'field_5a4d2a47df496',
			'label' => __( 'Content', 'braftonium' ),
			'name' => 'content',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'5a4d2cb9618e1' => array(
					'key' => '5a4d2cb9618e1',
					'name' => 'visual',
					'label' => __( 'Visual', 'braftonium' ),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a4d2fe2df49a',
							'label' => __( 'Headline', 'braftonium' ),
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
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
							'key' => 'field_5a4d3006df49b',
							'label' => __( 'Tagline', 'braftonium' ),
							'name' => 'tagline',
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
							'key' => 'field_5a4d366c34608',
							'label' => __( 'Button', 'braftonium' ),
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
						array(
							'key' => 'field_5a4d39e585477',
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
				),
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
								'width' => '102',
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
									'required' => 1,
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
							'key' => 'field_5a590c555bed0',
							'label' => __( 'Button?', 'braftonium' ),
							'name' => 'showbutton',
							'type' => 'checkbox',
							'instructions' => __( 'Check this box if you want to link the content but not show the button.', 'braftonium' ),
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'show' => 'Show button?',
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
								'width' => '50',
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
							'type' => 'text',
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
								'width' => '50',
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
				),
				'5a4d587713b51' => array(
					'key' => '5a4d587713b51',
					'name' => 'validation',
					'label' => __( 'Validation (Slider)', 'braftonium' ),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a4d552a2f98f',
							'label' => 'Section Title',
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
							'key' => 'field_5a4d59aa13b52',
							'label' => 'Clone of Services List',
							'name' => 'listclone',
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
								0 => 'field_5a4d574f8c579',
								1 => 'field_5a4d487bcb1fe',
								2 => 'field_5a4d5799d4ddb',
								3 => 'field_5a4d583bee06f',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
						),
						array(
							'key' => 'field_5a4d5be6f12be',
							'label' => __( 'Read More', 'braftonium' ),
							'name' => 'read_more_button',
							'type' => 'checkbox',
							'instructions' => __( 'Add Read More Button', 'braftonium' ),
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'add' => 'Add',
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
							'key' => 'field_5a591033640eb',
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
							'key' => 'field_5a4d5b01100c6',
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
				),
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
				),
				'5a4d605324b03' => array(
					'key' => '5a4d605324b03',
					'name' => 'cta',
					'label' => 'CTA',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a4d605b24b04',
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
							'key' => 'field_5a4d606524b05',
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
							'key' => 'field_5a4d607124b06',
							'label' => __( 'Button', 'braftonium' ),
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
						array(
							'key' => 'field_5a4d609024b07',
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
				),
				'5a4e4dce0ad63' => array(
					'key' => '5a4e4dce0ad63',
					'name' => 'map',
					'label' => __( 'Map', 'braftonium' ),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a4e4dd70ad64',
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
									'key' => 'field_5a8d9aef67547',
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
							'key' => 'field_5a4e4e420ad67',
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
							'collapsed' => 'field_5a4e4e760ad68',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => __( 'Add Phone Number', 'braftonium' ),
							'sub_fields' => array(
								array(
									'key' => 'field_5a4e4e760ad68',
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
									'key' => 'field_5a4e4f50fce8c',
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
							'key' => 'field_5a4e4f9cffefb',
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
							'collapsed' => 'field_5a4e4f9dffefc',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => __( 'Add Email', 'braftonium' ),
							'sub_fields' => array(
								array(
									'key' => 'field_5a4e4f9dffefc',
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
									'key' => 'field_5a4e4f9dffefd',
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
							'key' => 'field_5a4e50cdbaaf9',
							'label' => __( 'Map', 'braftonium' ),
							'name' => 'map',
							'type' => 'google_map',
							'instructions' => '',
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
							'key' => 'field_5a4e50f4baafa',
							'label' => 'Google API',
							'name' => 'google_api',
							'type' => 'text',
							'instructions' => __( 'Go to <a href="https://developers.google.com/maps/documentation/embed/" target="_blank">this page</a> and get yourself a key. Select a new project then click "Enable API". Copy and paste the result here. It is free and takes less than a minute.', 'braftonium' ),
							'required' => 1,
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
							'key' => 'field_5a4e59b36a136',
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
				),
			),
			'button_label' => __( 'Add Row', 'braftonium' ),
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'full-width.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
));
}