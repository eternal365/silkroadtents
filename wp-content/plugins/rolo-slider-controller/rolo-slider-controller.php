<?php
/**
  * Plugin Name: Rolo Slider Controller Addon
  * Plugin URI: http://pressfore.com
  * Version: 1.0.0
  * Author: PressFore
  * Author URI: http://pressfore.com
  * Description: Rolo Slider Controller Addon gives you option to change ken burns effect direction per slide, along with image zooming ratio, fade to image option and full height option for slider.
  * Text Domain: rolo-slider-ct
  * Domain Path: /languages
  * License: GPL
  */

	if ( ! defined( 'ROLO_CONTROLLER_ASSETS_URL' ) ) {
		define( 'ROLO_CONTROLLER_ASSETS_URL', plugin_dir_url( __FILE__ ).'assets/' );
	}

	//include core files
	require_once 'addon-update.php';
	require_once 'setup.php';

    $controller = new RoloSliderController;

	add_action('admin_init', 'rolo_slider_ctr_addon_init' );
	add_action('admin_init',  'rolo_slider_ctr_addon_updater', 0);

	function rolo_slider_ctr_addon_init()
	{
		if( !is_rolo_slider_active() ) {
			global $controller;

			add_action( 'admin_notices', array( $controller, 'admin_notice__error' ) );

			deactivate_plugins( plugin_basename( __FILE__ ) );

			if ( isset( $_GET['activate'] ) ) {
				unset( $_GET['activate'] );
			};
		}
	}

	if( ! function_exists('is_rolo_slider_active') ) {
		function is_rolo_slider_active()
		{
			return is_plugin_active('rolo-slider/init.php');
		}
	}

	function rolo_slider_ctr_addon_updater()
	{
		$license_key = trim( get_option( 'rolo_controller_license_key' ) );

		$edd_updater = new Rolo_Controller_Updater( PF_STORE_URL, __FILE__, array(
				'version'   => '1.0.0',
				'license'   => $license_key,
				'item_name' => 'Rolo Controller Addon',
				'author'  => 'Pressfore'
			)
		);

	}