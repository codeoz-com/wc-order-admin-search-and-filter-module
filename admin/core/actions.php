<?php

/**
 * "WooCommerce Order Admin Search & Filters" Admin Actions
 *
 * This file contains the actions that are used through-out "WooCommerce Order Admin Search & Filters". They are
 * consolidated here to make searching for them easier, and to help developers
 * understand at a glance the order in which things occur.
 *
 * There are a few common places that additional actions can currently be found
 *
 *  - Codeoz_OASF: In {@link Codeoz_OASF::setup_actions()} in coz_oasf.php
 *  - Admin: More in {@link BBP_Admin::setup_actions()} in admin.php
 *
 * @package WC_Order_Admin_Search_And_Filter
 * @subpackage Core
 *
 * @see /core/filters.php
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Attach "WooCommerce Order Admin Search & Filters" to WordPress
 *
 * "WooCommerce Order Admin Search & Filters" uses its own internal actions to help aid in third-party plugin
 * development, and to limit the amount of potential future code changes when
 * updates to WordPress core occur.
 *
 * These actions exist to create the concept of 'plugin dependencies'. They
 * provide a safe way for plugins to execute code *only* when "WooCommerce Order Admin Search & Filters" is
 * installed and activated, without needing to do complicated guesswork.
 *
 * For more information on how this works, see the 'Plugin Dependency' section
 * near the bottom of this file.
 *
 *           v--WordPress Actions        v--bbPress Sub-actions
 */
add_action( 'admin_menu',              'zoasf_admin_menu'                    );
add_action( 'admin_init',              'zoasf_admin_init'                    );
add_action( 'admin_notices',           'zoasf_admin_notices'                 );

// Hook on to admin_init
add_action( 'zoasf_admin_init', 'zoasf_register_admin_styles'       );
add_action( 'zoasf_admin_init', 'zoasf_register_admin_scripts'      );
add_action( 'zoasf_admin_init', 'zoasf_register_admin_settings'     );

// Initialize ....
//add_action( 'zoasf_init', 'zoasf_init_xxxx' );

// Reset the menu order
add_action( 'zoasf_admin_menu', 'zoasf_admin_separator' );

// Activation
//add_action( 'zoasf_activation',   'zoasf_activate_xxx' );

// Deactivation
//add_action( 'zoasf_deactivation', 'zoasf_deactivate_xxx' );


/** Sub-Actions ***************************************************************/

/**
 * Piggy back admin_init action
 *
 * @since 2.1.0 bbPress (r3766)
 */
function zoasf_admin_init() {
	do_action( 'zoasf_admin_init' );
}

/**
 * Piggy back admin_menu action
 */
function zoasf_admin_menu() {
	do_action( 'zoasf_admin_menu' );
}


/**
 * Piggy back admin_notices action
 */
function zoasf_admin_notices() {
	do_action( 'zoasf_admin_notices' );
}


/**
 * Dedicated action to register admin styles
 */
function zoasf_register_admin_styles() {

	/**
	 * Action used to register the admin styling
	 */
	do_action( 'zoasf_register_admin_style' );

	/**
	 * Action used to register all admin styling
	 */
	do_action( 'zoasf_register_admin_styles' );
}

/**
 * Dedicated action to register admin scripts
 */
function zoasf_register_admin_scripts() {
	do_action( 'zoasf_register_admin_scripts' );
}

/**
 * Dedicated action to register admin settings
 */
function zoasf_register_admin_settings() {
	do_action( 'zoasf_register_admin_settings' );
}
