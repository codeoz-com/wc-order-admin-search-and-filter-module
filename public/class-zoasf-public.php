<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.codeoz.com
 * @since      1.0.0
 *
 * @package    WC_Order_Public_Search_And_Filter
 * @subpackage WC_Order_Public_Search_And_Filter/public
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ZOASF_Public' ) ) :

	/**
	 * Loads "WooCommerce Order Admin Search & Filters" plugin public area
	 *
	 * @package WC_Order_Admin_Search_And_Filter
	 * @subpackage Publicistration
	 */
	class ZOASF_Public {
	//class ZOASF_Public extends ZOASF_Data {

		/** Directory *************************************************************/

		/**
		 * @var string Path to the "WooCommerce Order Admin Search & Filters" public directory
		 */
		public $public_dir = '';

		/** URLs ******************************************************************/

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" public directory
		 */
		public $public_url = '';

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" public styles directory
		 */
		public $styles_url = '';

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" public css directory
		 */
		public $css_url = '';

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" public js directory
		 */
		public $js_url = '';




		/** Notices ***************************************************************/

		/**
		 * @var array Array of notices to output to the current user
		 */
		public $notices = array();

		/** Functions *************************************************************/

		/**
		 * The main "WooCommerce Order Admin Search & Filters" public loader
		 */
		public function __construct() {
//			$this->setup_globals();
//			$this->includes();
//			$this->setup_actions();
		}

		/**
		 * Public globals
		 *
		 * @access private
		 */
		private function setup_globals() {
			$coz_oasf          = codeoz_oasf();
			$this->public_dir  = trailingslashit( $coz_oasf->src_dir . 'public'      ); // Public path
			$this->public_url  = trailingslashit( $coz_oasf->src_url . 'public'      ); // Public url

			// Assets
			$this->css_url    = trailingslashit( $this->public_url   . 'assets/css' ); // Public css URL
			$this->js_url     = trailingslashit( $this->public_url   . 'assets/js'  ); // Public js URL
			$this->styles_url = trailingslashit( $this->public_url   . 'styles'     ); // Public styles URL
		}

		/**
		 * Include required files
		 *
		 * @access private
		 */
		private function includes() {

			// Components
			//require $this->public_dir . 'settings.php';
		}

		/**
		 * Setup the public hooks, actions and filters
		 *
		 * @access private
		 */
		private function setup_actions() {

			// Bail to prevent interfering with the deactivation process
			if ( zoasf_is_deactivation() ) {
				return;
			}

			/** General Actions ***************************************************/

			add_action( 'zoasf_register_public_styles',   array( $this, 'register_public_styles'   ) );
			add_action( 'zoasf_register_public_scripts',  array( $this, 'register_public_scripts'  ) );
			add_action( 'zoasf_register_public_settings', array( $this, 'register_public_settings' ) );

			// Enqueue styles & scripts
			add_action( 'public_enqueue_scripts',       array( $this, 'enqueue_styles'  ) );
			add_action( 'public_enqueue_scripts',       array( $this, 'enqueue_scripts' ) );


			/** Filters ***********************************************************/

			// Modify public links
			//add_filter( 'plugin_action_links', array( $this, 'modify_plugin_action_links' ), 10, 2 );
		}

		/**
		 * Register the settings
		 *
		 * @todo Put fields into multidimensional array
		 */
		public static function register_public_settings() {

		}


		/**
		 * Enqueue any public scripts we might need
		 */
		public function enqueue_styles() {
			wp_enqueue_style( 'zoasf-public-css' );
		}


		/**
		 * Registers the "WooCommerce Order Admin Search & Filters" public styling and color schemes
		 *
		 * Because wp-content can exist outside of the WordPress root, there is no
		 * way to be certain what the relative path of public images is.
		 */
		public function register_public_styles() {

			// Get the version to use for JS
			$version = zoasf_get_version();

			// Register public CSS with dashicons dependency
			wp_register_style( 'zoasf-public-css', $this->css_url . 'public' . $suffix . '.css', array( 'dashicons' ), $version );
		}

		/**
		 * Registers the "WooCommerce Order Admin Search & Filters" public color schemes
		 *
		 * Because wp-content can exist outside of the WordPress root there is no
		 * way to be certain what the relative path of the public images is.
		 * We are including the two most common configurations here, just in case.
		 */
		public function register_public_scripts() {

			// Minified
			$suffix  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

			// Get the version to use for JS
			$version = zoasf_get_version();

			// Header JS
			wp_register_script( 'zoasf-public-common-js',  $this->js_url . 'common'    . $suffix . '.js', array( 'jquery', 'suggest'              ), $version );
			wp_register_script( 'zoasf-public-topics-js',  $this->js_url . 'topics'    . $suffix . '.js', array( 'jquery'                         ), $version );
			wp_register_script( 'zoasf-public-replies-js', $this->js_url . 'replies'   . $suffix . '.js', array( 'jquery', 'suggest'              ), $version );
			wp_register_script( 'zoasf-converter',        $this->js_url . 'converter' . $suffix . '.js', array( 'jquery', 'postbox', 'dashboard' ), $version );

			// Footer JS
			wp_register_script( 'zoasf-public-badge-js',   $this->js_url . 'badge' . $suffix . '.js', array(), $version, true );
		}

	}
endif; // class_exists check
