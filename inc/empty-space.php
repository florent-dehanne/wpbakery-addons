<?php

	if (!defined('ABSPATH'))
		die('-1');

	return [
    'name' => __('Empty space', 'wpbakery-addons'),
    'description' => __('Allow to add space between each module.', 'wpbakery-addons'),
  	'base' => 'empty_space',
		'icon' => WPBAKERY_ADDONS_URL.'/assets/images/addons/empty-space.svg',
  	'content_element' => true,
		'category' => 'WPBakery Addons',
		'custom_markup' => getView('views/addons-preview/empty-space.php'),
    'js_view' => 'VcCustomElementView',
  	'params' => [
  		[
  			'type' => 'textfield',
  			'heading' => __('Height', 'wpbakery-addons'),
  			'param_name' => 'height_desktop',
  			'group' => 'General',
        'value' => '40px'
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Height (tablet)', 'wpbakery-addons'),
  			'param_name' => 'height_tablet',
  			'group' => 'General',
        'value' => '30px'
  		],
  		[
  			'type' => 'textfield',
  			'heading' => __('Height (mobile)', 'wpbakery-addons'),
  			'param_name' => 'height_mobile',
  			'group' => 'General',
        'value' => '20px'
  		],
  	]
  ];