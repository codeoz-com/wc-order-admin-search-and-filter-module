<?php

/**
 * "WooCommerce Order Admin Search & Filters" Abstractions
 *
 * This file contains functions for abstracting WordPress core functionality
 * into convenient wrappers so they can be used more reliably.
 *
 * Many of the functions in this file are considered superfluous by
 * WordPress coding standards, but they're handy for plugins of plugins to use.
 *
 * @package WC_Order_Admin_Search_And_Filter
 * @subpackage Core
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/** Globals *******************************************************************/

/**
 * Lookup and return a global variable
 *
 * @param  string  $name     Name of global variable
 * @param  string  $type     Type of variable to check with `is_a()`
 * @param  mixed   $default  Default value to return if no global found
 *
 * @return mixed   Verified object if valid, Default or null if invalid
 */
function zoasf_get_global_object( $name = '', $type = '', $default = null ) {

	// If no name passed
	if ( empty( $name ) ) {
		$retval = $default;

	// If no global exists
	} elseif ( ! isset( $GLOBALS[ $name ] ) ) {
		$retval = $default;

	// If not the correct type of global
	} elseif ( ! empty( $type ) && ! is_a( $GLOBALS[ $name ], $type ) ) {
		$retval = $default;

	// Global variable exists
	} else {
		$retval = $GLOBALS[ $name ];
	}

	// Filter & return
	return apply_filters( 'zoasf_get_global_object', $retval, $name, $type, $default );
}

/**
 * Get the `$wp_query` global without needing to declare it everywhere
 *
 * @return WP_Roles
 */
function zoasf_get_wp_query() {
	return zoasf_get_global_object( 'wp_query', 'WP_Query' );
}


/**
 * Return the database class being used to interface with the environment.
 *
 * This function is abstracted to avoid global touches to the primary database
 * class. "WooCommerce Order Admin Search & Filters" supports WordPress's `$wpdb` global by default, and can be
 * filtered to support other configurations if needed.
 *
 * @return object
 */
function zoasf_db() {
	return zoasf_get_global_object( 'wpdb', 'WPDB' );
}

/**
 * Parse the WordPress core version number
 *
 * @global string $wp_version
 *
 * @return string $wp_version
 */
function zoasf_get_major_wp_version() {
	global $wp_version;

	return (float) $wp_version;
}
