<?php

/**
 * "WooCommerce Order Admin Search & Filters" Admin Settings
 *
 * @package "WooCommerce Order Admin Search & Filters"
 * @subpackage Administration
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/** Sections ******************************************************************/

/**
 * Get the Forums settings sections.
 *
 * @return array
 */
function zoasf_admin_get_settings_sections() {

	// Filter & return
	return (array) apply_filters( 'zoasf_admin_get_settings_sections', array(

		// Settings
		'bbp_settings_users' => array(
			'title'    => esc_html__( 'Forum User Settings', 'bbpress' ),
			'callback' => 'zoasf_admin_setting_callback_user_section',
			'page'     => 'discussion'
		),
		'bbp_settings_features' => array(
			'title'    => esc_html__( 'Forum Features', 'bbpress' ),
			'callback' => 'zoasf_admin_setting_callback_features_section',
			'page'     => 'discussion'
		)
	) );
}

