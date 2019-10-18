<?php
/**
 * Plugin Name: WPBakery addons
 * Description: Addons for WPBakery Page Builder.
 * Version: 1.0
 * Author: Florent Dehanne
 * Author URI: https://florentdehanne.net
 * Text Domain: wpbakery-addons
 */

  define('WPBAKERY_ADDONS_URL', plugin_dir_url(__FILE__));
  define('WPBAKERY_ADDONS_PATH', __DIR__);

  require(WPBAKERY_ADDONS_PATH.'/inc/helpers.php');

  class WPBakery_addons {

    // Plugin version.
    public $version;
    public $wpbakery;
    public $wpbakeryPluginName = 'js_composer/js_composer.php';

    public function __construct()
    {
      $data = get_file_data(__FILE__, ['Version'], 'plugin');
      $this->version = $data[0];

      // Check WPBakery is installed
      $active_plugins = (array) get_option('active_plugins', []);
      $this->wpbakery = in_array($this->wpbakeryPluginName, $active_plugins) ? true : false;

      if (!$this->wpbakery)
      {
        add_action('admin_notices', [$this, 'missingWPBakeryNotice']);
        return;
      }

      add_action('admin_head', [$this, 'loadBackendAssets']);
      add_action('wp_enqueue_scripts', [$this, 'loadFrontendAssets']);
      add_action('admin_init', [$this, 'addAddons']);
      add_action('admin_init', [$this, 'removeAddons']);
      add_action('vc_after_init', [$this, 'updateRowGapOptions']);

      $this->registerShortcodes();
    }

    function loadBackendAssets() {
      wp_enqueue_style('wpbakery-addons-backend', WPBAKERY_ADDONS_URL.'assets/css/backend.css', [], $this->version);
      wp_enqueue_script('wpbakery-addons-backend', WPBAKERY_ADDONS_URL.'assets/js/backend.js', [], $this->version, true);
    }

    function loadFrontendAssets() {
      wp_enqueue_style('wpbakery-addons', WPBAKERY_ADDONS_URL.'assets/css/frontend.css', [], $this->version);
      wp_enqueue_script('wpbakery-addons', WPBAKERY_ADDONS_URL.'assets/js/frontend.js', [], $this->version, true);
    } // loadFrontendAssets()

    /** If WPBakery is not installed, a notice is displayed. */
    function missingWPBakeryNotice() {
      echo '<div class="notice notice-error"><p><strong>WPBakery addons plugin need WPBakery to be installed !</strong></p></div>';
    } // missingWPBakeryNotice()

    /** Register custom addons for WPBakery. */
    function addAddons()
    {
      vc_lean_map('empty_space', null, WPBAKERY_ADDONS_PATH.'/inc/empty-space.php');
      vc_lean_map('share_social_medias', null, WPBAKERY_ADDONS_PATH.'/inc/share-social-medias.php');
    } // addAddons()

    /** Remove some WPBakery addons. */
    function removeAddons()
    {
      // Remove empty space has we are replacing it.
      //vc_remove_element('vc_empty_space');
    } // removeAddons()

    /** Update available options for columns spacing. */
    function updateRowGapOptions()
    {
      $param = WPBMap::getParam( 'vc_row', 'gap' );
      $param['value']['40px'] = '40';
      $param['value']['50px'] = '50';
      $param['value']['60px'] = '60';
      $param['value']['70px'] = '70';
      $param['value']['80px'] = '80';
      $param['value']['90px'] = '90';
      $param['value']['100px'] = '100';
      $param['value']['110px'] = '110';
      $param['value']['120px'] = '120';
      $param['value']['130px'] = '130';
      $param['value']['140px'] = '140';
      $param['value']['150px'] = '150';
      vc_update_shortcode_param( 'vc_row', $param );
    } // updateRowGapOptions()

    function registerShortcodes()
    {
      add_shortcode('empty_space', [$this, 'addonEmptySpaceRender']);
      add_shortcode('share_social_medias', [$this, 'addonShareOnSocialMediasRender']);
    } // registerShortcodes()

    function addonEmptySpaceRender($atts, $content = null)
    {
      $atts = shortcode_atts([
        'height_desktop' => '40px',
        'height_tablet' => '30px',
        'height_mobile' => '20px'
      ], $atts);

      return getView('views/addons-render/empty-space.php', $atts);
    } // addonEmptySpaceRender()

    function addonShareOnSocialMediasRender($atts, $content = null)
    {
      global $wp;

      $id = wp_rand();
      $atts = shortcode_atts([
        'title' => 'Share on',
        'social_medias' => 'facebook,twitter,linkedin,pinterest',
        'icons_color' => '',
        'icons_hover_color' => '',
        'description' => ''
      ], $atts);

      $atts['id'] = $id;
      $atts['social_medias'] = explode(',', $atts['social_medias']);
      $atts['share_url'] = add_query_arg($wp->query_vars, home_url($wp->request));
      $atts['share_picture'] = get_the_post_thumbnail_url(get_the_ID(), 'full');

      return getView('views/addons-render/share-social-medias.php', $atts);
    }
  }

  $WPBakery_addons = new WPBakery_addons();