<?php

	if (!defined('ABSPATH'))
		die('-1');

	return [
    'name' => __('Anchor', 'wpbakery-addons'),
    'description' => __('Allow to add a anchor in page.', 'wpbakery-addons'),
  	'base' => 'anchor',
		'icon' => WPBAKERY_ADDONS_URL.'/assets/images/addons/anchor.svg',
  	'content_element' => true,
		'category' => 'WPBakery Addons',
		'custom_markup' => getAddonView('views/addons-preview/anchor.php'),
    'js_view' => 'VcCustomElementView',
  	'params' => [
  		[
  			'type' => 'textfield',
  			'heading' => __('ID', 'wpbakery-addons'),
  			'param_name' => 'id',
  			'group' => 'General',
        'value' => ''
  		],
  	]
  ];