<?php

/**
 * Plugin Dependency
 *
 * The purpose of the following hooks is to mimic the behavior of something
 * called 'plugin dependency' which enables a plugin to have plugins of their
 * own in a safe and reliable way.
 *
 * We do this in "WooCommerce Order Admin Search & Filters" by mirroring existing WordPress hooks in many places
 * allowing dependant plugins to hook into the "WooCommerce Order Admin Search & Filters" specific ones, thus
 * guaranteeing proper code execution only when "WooCommerce Order Admin Search & Filters" is active.
 *
 * The following functions are wrappers for hooks, allowing them to be
 * manually called and/or piggy-backed on top of other hooks if needed.
 *
 * @package cozOASF
 * @subpackage Core
 *
 * @todo use anonymous functions when PHP minimum requirement allows (5.3)
 */

/** Activation Actions ********************************************************/

/**
 * Runs on "WooCommerce Order Admin Search & Filters" activation
 */
function zoasf_activation() {
	do_action( 'zoasf_activation' );
}

/**
 * Runs on "WooCommerce Order Admin Search & Filters" deactivation
 */
function zoasf_deactivation() {
	do_action( 'zoasf_deactivation' );
}

/**
 * Runs when uninstalling "WooCommerce Order Admin Search & Filters"
 */
function zoasf_uninstall() {
	do_action( 'zoasf_uninstall' );
}

/** Main Actions **************************************************************/

/**
 * Main action responsible for constants, globals, and includes
 */
function zoasf_loaded() {
	do_action( 'zoasf_loaded' );
}

/**
 * Setup constants
 */
function zoasf_constants() {
	do_action( 'zoasf_constants' );
}

/**
 * Setup globals BEFORE includes
 */
function zoasf_boot_strap_globals() {
	do_action( 'zoasf_boot_strap_globals' );
}

/**
 * Include files
 */
function zoasf_includes() {
	do_action( 'zoasf_includes' );
}

/**
 * Setup globals AFTER includes
 */
function zoasf_setup_globals() {
	do_action( 'zoasf_setup_globals' );
}

/**
 * Register any objects before anything is initialized
 */
function zoasf_register() {
	do_action( 'zoasf_register' );
}

/**
 * Initialize any code after everything has been loaded
 */
function zoasf_init() {
	do_action( 'zoasf_init' );
}



/** Supplemental Actions ******************************************************/

/**
 * Load translations for current language
 */
function zoasf_load_textdomain() {
	do_action( 'zoasf_load_textdomain' );
}

/**
 * Setup the post types
 */
function zoasf_register_post_types() {
	do_action( 'zoasf_register_post_types' );
}


/**
 * Register the default "WooCommerce Order Admin Search & Filters" views
 */
function zoasf_register_views() {
	do_action( 'zoasf_register_views' );
}

/**
 * Register the default "WooCommerce Order Admin Search & Filters" shortcodes
 */
function zoasf_register_shortcodes() {
	do_action( 'zoasf_register_shortcodes' );
}

/**
 * Register the default "WooCommerce Order Admin Search & Filters" meta-data
 */
function zoasf_register_meta() {
	do_action( 'zoasf_register_meta' );
}

/**
 * Enqueue "WooCommerce Order Admin Search & Filters" specific CSS and JS
 */
function zoasf_enqueue_scripts() {
	do_action( 'zoasf_enqueue_scripts' );
}


/** Final Action **************************************************************/

/**
 * "WooCommerce Order Admin Search & Filters" has loaded and initialized everything, and is okay to go
 */
function zoasf_ready() {
	do_action( 'zoasf_ready' );
}


/** Filters *******************************************************************/

/**
 * Filter the plugin locale and domain.
 *
 * @param string $locale
 * @param string $domain
 */
function zoasf_plugin_locale( $locale = '', $domain = '' ) {

	// Filter & return
	return apply_filters( 'zoasf_plugin_locale', $locale, $domain );
}
