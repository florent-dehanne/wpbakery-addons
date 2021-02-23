<?php

	if (!defined('ABSPATH'))
		die('-1');

	return [
    'name' => __('Simple slider', 'wpbakery-addons'),
    'description' => __('Create a slider with content items', 'wpbakery-addons'),
  	'base' => 'simple_slider',
		'icon' => WPBAKERY_ADDONS_URL.'/assets/images/addons/simple-slider.svg',
  	'content_element' => true,
		'is_container' => true,
		'as_parent' => ['except' => []],
	  'show_settings_on_create' => false,
		'category' => 'WPBakery Addons',
		'js_view' => 'VcColumnView',
  	'params' => [
			// General
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 320px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 320px', 'wpbakery-addons'),
  			'param_name' => 'items_320px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 480px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 480px', 'wpbakery-addons'),
  			'param_name' => 'items_480px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 640px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 640px', 'wpbakery-addons'),
  			'param_name' => 'items_640px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 768px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 768px', 'wpbakery-addons'),
  			'param_name' => 'items_768px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 1024px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 1024px', 'wpbakery-addons'),
  			'param_name' => 'items_1024px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 1280px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 1280px', 'wpbakery-addons'),
  			'param_name' => 'items_1280px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 1600px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 1600px', 'wpbakery-addons'),
  			'param_name' => 'items_1600px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Items under 1920px', 'wpbakery-addons'),
				'description' => __('Number of items to show under 1920px', 'wpbakery-addons'),
  			'param_name' => 'items_1920px',
  			'group' => 'General',
				'edit_field_class' => 'vc_col-md-6 simple-slider-backend-column',
  		],

			// Navigation
  		[
  			'type' => 'checkbox',
  			'heading' => __('Display nav', 'wpbakery-addons'),
  			'param_name' => 'display_nav',
  			'group' => 'Navigation',
        'value' => 1
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Navigation size', 'wpbakery-addons'),
				'description' => __('Enter the size of arrows in px (ex: 20px)', 'wpbakery-addons'),
  			'param_name' => 'nav_size',
  			'group' => 'Navigation',
        'value' => ''
  		],
  		[
  			'type' => 'colorpicker',
  			'heading' => __('Navigation color', 'wpbakery-addons'),
				'description' => __('Set the color of arrows.', 'wpbakery-addons'),
  			'param_name' => 'nav_color',
  			'group' => 'Navigation',
        'value' => ''
  		],

			// Dots
  		[
  			'type' => 'checkbox',
  			'heading' => __('Display dots', 'wpbakery-addons'),
  			'param_name' => 'display_dots',
  			'group' => 'Dots',
        'value' => 1
  		],

			// Autoplay
  		[
  			'type' => 'checkbox',
  			'heading' => __('Activate autoplay', 'wpbakery-addons'),
  			'param_name' => 'autoplay',
  			'group' => 'Autoplay',
        'value' => 1
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Autoplay timer', 'wpbakery-addons'),
				'description' => __('Enter delay between each images in seconds', 'wpbakery-addons'),
  			'param_name' => 'autoplay_timeout',
  			'group' => 'Autoplay',
        'value' => ''
  		]
  	]
  ];
