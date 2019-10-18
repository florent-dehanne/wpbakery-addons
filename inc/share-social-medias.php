<?php

	if (!defined('ABSPATH'))
		die('-1');

	return [
    'name' => __('Share on social medias', 'wpbakery-addons'),
    'description' => __('Display links to share your content on social medias.', 'wpbakery-addons'),
  	'base' => 'share_social_medias',
		'icon' => WPBAKERY_ADDONS_URL.'/assets/images/addons/share-social-medias.svg',
  	'content_element' => true,
		'category' => 'WPBakery Addons',
		'custom_markup' => getView('views/addons-preview/share-social-medias.php'),
    'js_view' => 'VcCustomElementView',
  	'params' => [
  		[
  			'type' => 'textfield',
  			'heading' => __('Title', 'wpbakery-addons'),
				'description' => __('Enter the text displayed before social medias', 'wpbakery-addons'),
  			'param_name' => 'title',
  			'group' => 'General',
        'value' => 'Share on'
  		],
  		[
  			'type' => 'checkbox',
  			'heading' => __('Social medias', 'wpbakery-addons'),
  			'param_name' => 'social_medias',
  			'group' => 'General',
        'value' => [
					'Facebook' => 'facebook',
					'Twitter' => 'twitter',
					'Linkedin' => 'linkedin',
					'Pinterest' => 'pinterest'
				]
  		],
  		[
  			'type' => 'colorpicker',
  			'heading' => __('Icons color', 'wpbakery-addons'),
				'description' => __('Set the color of social medias icons. Leave empty for default color.', 'wpbakery-addons'),
  			'param_name' => 'icons_color',
  			'group' => 'General',
        'value' => ''
  		],
  		[
  			'type' => 'colorpicker',
  			'heading' => __('Icons color on hover', 'wpbakery-addons'),
				'description' => __('Set the color of social medias icons on hover. Leave empty for default color.', 'wpbakery-addons'),
  			'param_name' => 'icons_hover_color',
  			'group' => 'General',
        'value' => ''
  		],
  		[
  			'type' => 'textarea',
  			'heading' => __('Share description', 'wpbakery-addons'),
				'description' => __('Enter the text you want to share. Leave empty for auto-detection of page content.', 'wpbakery-addons'),
  			'param_name' => 'description',
  			'group' => 'General',
        'value' => ''
  		]
  	]
  ];