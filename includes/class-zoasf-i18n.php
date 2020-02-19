<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.codeoz.com
 * @since      1.0.0
 *
 * @package    WC_Order_Admin_Search_And_Filter
 * @subpackage WC_Order_Admin_Search_And_Filter/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WC_Order_Admin_Search_And_Filter
 * @subpackage WC_Order_Admin_Search_And_Filter/includes
 * @author     codeOz <codeoz.au@gmail.com>
 */
class WC_Order_Admin_Search_And_Filter_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'coz-oasf',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
