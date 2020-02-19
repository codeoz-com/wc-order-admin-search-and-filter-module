<?php

/**
 * "WooCommerce Order Admin Search & Filters" Common Functions
 *
 * Common functions are ones that are used by more than one component, like
 * forums, topics, replies, users, topic tags, etc...
 *
 * @package cozOASF
 * @subpackage Functions
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Return array of "WooCommerce Order Admin Search & Filters" registered post types
 *
 * @param array $args Array of arguments to pass into `get_post_types()`
 *
 * @return array
 */
function zoasf_get_post_types( $args = array() ) {

	// Parse args
	$r = zoasf_parse_args( $args, array(
		'source' => 'coz_oasf'
	), 'get_post_types' );

	// Return post types
	return get_post_types( $r );
}

/** URLs **********************************************************************/

/**
 * Return the unescaped redirect_to request value
 *
 * @return string The URL to redirect to, if set
 */
function zoasf_get_redirect_to() {

	// Check 'redirect_to' request parameter
	$retval = ! empty( $_REQUEST['redirect_to'] )
		? $_REQUEST['redirect_to']
		: '';

	// Filter & return
	return apply_filters( 'zoasf_get_redirect_to', $retval );
}

