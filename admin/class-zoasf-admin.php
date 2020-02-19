<?php

/**
 * Main "WooCommerce Order Admin Search & Filters" Admin Class
 *
 * @package WC_Order_Admin_Search_And_Filter
 * @subpackage Administration
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ZOASF_Admin' ) ) :

	/**
	 * Loads "WooCommerce Order Admin Search & Filters" plugin admin area
	 *
	 * @package WC_Order_Admin_Search_And_Filter
	 * @subpackage Administration
	 */
	class ZOASF_Admin {
	//class ZOASF_Admin extends ZOASF_Data {

		/** Directory *************************************************************/

		/**
		 * @var string Path to the "WooCommerce Order Admin Search & Filters" admin directory
		 */
		public $admin_dir = '';

		/** URLs ******************************************************************/

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" admin directory
		 */
		public $admin_url = '';

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" admin styles directory
		 */
		public $styles_url = '';

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" admin css directory
		 */
		public $css_url = '';

		/**
		 * @var string URL to the "WooCommerce Order Admin Search & Filters" admin js directory
		 */
		public $js_url = '';




		/** Notices ***************************************************************/

		/**
		 * @var array Array of notices to output to the current user
		 */
		public $notices = array();

		/** Functions *************************************************************/

		/**
		 * The main "WooCommerce Order Admin Search & Filters" admin loader
		 */
		public function __construct() {
//			$this->setup_globals();
//			$this->includes();
//			$this->setup_actions();
		}

		/**
		 * Admin globals
		 *
		 * @access private
		 */
		private function setup_globals() {
			$coz_oasf              = codeoz_oasf();
			$this->admin_dir  = trailingslashit( $coz_oasf->src_dir . 'admin'      ); // Admin path
			$this->admin_url  = trailingslashit( $coz_oasf->src_url . 'admin'      ); // Admin url

			// Assets
			$this->css_url    = trailingslashit( $this->admin_url   . 'assets/css' ); // Admin css URL
			$this->js_url     = trailingslashit( $this->admin_url   . 'assets/js'  ); // Admin js URL
			$this->styles_url = trailingslashit( $this->admin_url   . 'styles'     ); // Admin styles URL
		}

		/**
		 * Include required files
		 *
		 * @access private
		 */
		private function includes() {

			// Components
			//require $this->admin_dir . 'settings.php';

			// Actions
			//require $this->src_dir . 'admin/actions.php';
		}

		/**
		 * Setup the admin hooks, actions and filters
		 *
		 * @access private
		 */
		private function setup_actions() {

			// Bail to prevent interfering with the deactivation process
			if ( zoasf_is_deactivation() ) {
				return;
			}

			/** Activate & Deactivate *********************************************/
			add_action( 'zoasf_activation',             array( $this, 'activate_plugin') );
			add_action( 'zoasf_deactivation',           array( $this, 'deactivate_plugin') );

			/** General Actions ***************************************************/

			add_action( 'zoasf_admin_menu',              array( $this, 'admin_menus'             ) );
			add_action( 'zoasf_register_admin_styles',   array( $this, 'register_admin_styles'   ) );
			add_action( 'zoasf_register_admin_scripts',  array( $this, 'register_admin_scripts'  ) );
			add_action( 'zoasf_register_admin_settings', array( $this, 'register_admin_settings' ) );

			// Enqueue styles & scripts
			add_action( 'admin_enqueue_scripts',       array( $this, 'enqueue_styles'  ) );
			add_action( 'admin_enqueue_scripts',       array( $this, 'enqueue_scripts' ) );


			/** Notices ***********************************************************/

			add_action( 'zoasf_admin_init',    array( $this, 'setup_notices'  ) );
			add_action( 'zoasf_admin_init',    array( $this, 'hide_notices'   ) );
			add_action( 'zoasf_admin_notices', array( $this, 'output_notices' ) );


			/** Ajax **************************************************************/

			// No _nopriv_ equivalent - users must be logged in
			//add_action( 'wp_ajax_zoasf_suggest_topic', array( $this, 'suggest_topic' ) );


			/** Filters ***********************************************************/

			// Modify admin links
			//add_filter( 'plugin_action_links', array( $this, 'modify_plugin_action_links' ), 10, 2 );
		}

		/**
		 * Activate the plugin
		 */
		public function activate_plugin() {

		}

		/**
		 * Deactivate the plugin
		 */
		public function deactivate_plugin() {

		}

		/**
		 * Setup general admin area notices.
		 */
		public function setup_notices() {

		}

		/**
		 * Handle hiding of general admin area notices.
		 */
		public function hide_notices() {

		}

		/**
		 * Output all admin area notices
		 */
		public function output_notices() {

		}

		/**
		 * Add a notice to the notices array
		 *
		 * @param string|WP_Error $message        A message to be displayed or {@link WP_Error}
		 * @param string          $class          Optional. A class to be added to the message div
		 * @param bool            $is_dismissible Optional. True to dismiss, false to persist
		 *
		 * @return void
		 */
		public function add_notice( $message, $class = false, $is_dismissible = true ) {

		}

		/**
		 * Escape message string output
		 *
		 * @param string $message
		 *
		 * @return string
		 */
		private function esc_notice( $message = '' ) {

		}

		/**
		 * Add the admin menus
		 */
		public function admin_menus() {

		}


		/**
		 * Register the settings
		 *
		 * @todo Put fields into multidimensional array
		 */
		public static function register_admin_settings() {

		}


		/**
		 * Enqueue any admin scripts we might need
		 */
		public function enqueue_styles() {
			wp_enqueue_style( 'zoasf-admin-css' );
		}


		/**
		 * Registers the "WooCommerce Order Admin Search & Filters" admin styling and color schemes
		 *
		 * Because wp-content can exist outside of the WordPress root, there is no
		 * way to be certain what the relative path of admin images is.
		 */
		public function register_admin_styles() {

			// Get the version to use for JS
			$version = zoasf_get_version();

			// Register admin CSS with dashicons dependency
			wp_register_style( 'zoasf-admin-css', $this->css_url . 'admin' . $suffix . '.css', array( 'dashicons' ), $version );
		}

		/**
		 * Registers the "WooCommerce Order Admin Search & Filters" admin color schemes
		 *
		 * Because wp-content can exist outside of the WordPress root there is no
		 * way to be certain what the relative path of the admin images is.
		 * We are including the two most common configurations here, just in case.
		 */
		public function register_admin_scripts() {

			// Minified
			$suffix  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

			// Get the version to use for JS
			$version = zoasf_get_version();

			// Header JS
			wp_register_script( 'zoasf-admin-common-js',  $this->js_url . 'common'    . $suffix . '.js', array( 'jquery', 'suggest'              ), $version );
			wp_register_script( 'zoasf-admin-topics-js',  $this->js_url . 'topics'    . $suffix . '.js', array( 'jquery'                         ), $version );
			wp_register_script( 'zoasf-admin-replies-js', $this->js_url . 'replies'   . $suffix . '.js', array( 'jquery', 'suggest'              ), $version );
			wp_register_script( 'zoasf-converter',        $this->js_url . 'converter' . $suffix . '.js', array( 'jquery', 'postbox', 'dashboard' ), $version );

			// Footer JS
			wp_register_script( 'zoasf-admin-badge-js',   $this->js_url . 'badge' . $suffix . '.js', array(), $version, true );
		}

	}
endif; // class_exists check
