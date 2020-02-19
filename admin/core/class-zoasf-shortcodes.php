<?php

/**
 * "WooCommerce Order Admin Search & Filters" Shortcodes
 *
 * @package cozOASF
 * @subpackage Shortcodes
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ZOASF_Shortcodes' ) ) :
/**
 * "WooCommerce Order Admin Search & Filters" Shortcode Class
 */
class ZOASF_Shortcodes {

	/** Vars ******************************************************************/

	/**
	 * @var array Shortcode => function
	 */
	public $codes = array();

	/** Functions *************************************************************/

	/**
	 * Add the register_shortcodes action to zoasf_init
	 *
	 */
	public function __construct() {
		$this->setup_globals();
		$this->add_shortcodes();
	}

	/**
	 * Shortcode globals
	 *
	 * @access private
	 */
	private function setup_globals() {

		// Setup the shortcodes
		$this->codes = apply_filters( 'zoasf_shortcodes', array(

			/** Views *********************************************************/

			'bbp-single-view'      => array( $this, 'display_view'          ), // Single view
		) );
	}

	/**
	 * Register the "WooCommerce Order Admin Search & Filters" shortcodes
	 */
	private function add_shortcodes() {
		foreach ( (array) $this->codes as $code => $function ) {
			add_shortcode( $code, $function );
		}
	}


	/** Views *****************************************************************/

	/**
	 * Display the contents of a specific view in an output buffer and return to
	 * ensure that post/page contents are displayed first.
	 *
	 * @param array $attr
	 * @param string $content
	 * @return string
	 */
	public function display_view( $attr, $content = '' ) {

        /*
		// Sanity check required info
		if ( empty( $attr['id'] ) ) {
			return $content;
		}

		// Set passed attribute to $view_id for clarity
		$view_id = $attr['id'];

		// Start output buffer
		$this->start( 'zoasf_single_view' );

		// Unset globals
		$this->unset_globals();

		// Set the current view ID
		codeoz_oasf()->current_view_id = $view_id;

		// Load the view
		zoasf_view_query( $view_id );

		// Output template
		zoasf_get_template_part( 'content', 'single-view' );

		// Return contents of output buffer
		return $this->end();
        */
	}
}
endif;
