<?php

/**
 * "WooCommerce Order Admin Search & Filters" Updater
 *
 * @package WC_Order_Admin_Search_And_Filter
 * @subpackage Core
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * If there is no raw DB version, this is the first installation
 *
 * @return bool True if update, False if not
 */
function zoasf_is_install() {
//	return ! zoasf_get_db_version_raw();
}

/**
 * Compare the bbPress version to the DB version to determine if updating
 *
 * @return bool True if update, False if not
 */
function zoasf_is_update() {
//	$raw    = (int) zoasf_get_db_version_raw();
//	$cur    = (int) zoasf_get_db_version();
//	$retval = (bool) ( $raw < $cur );
//	return $retval;
}


/**
 * Determine if bbPress is being deactivated
 *
 * @return bool True if deactivating bbPress, false if not
 */
function zoasf_is_deactivation( $basename = '' ) {

}

/**
 * Update the DB to the latest version
 */
function zoasf_version_bump() {
//	update_option( '_zoasf_db_version', zoasf_get_db_version() );
}

/**
 * Setup the bbPress updater
 */
function zoasf_setup_updater() {

//	// Bail if no update needed
//	if ( ! zoasf_is_update() ) {
//		return;
//	}
//
//	// Call the automated updater
//	zoasf_version_updater();
}


/**
 * The version updater looks at what the current database version is, and
 * runs whatever other code is needed.
 *
 * This is most-often used when the data schema changes, but should also be used
 * to correct issues with bbPress meta-data silently on software update.
 */
function zoasf_version_updater() {

//	// Get the raw database version
//	$raw_db_version = (int) zoasf_get_db_version_raw();
//
//	// Only run updater if previous installation exists
//	if ( ! empty( $raw_db_version ) ) {
//		// ....
//	}
//
//	/** All done! *************************************************************/
//
//	// Bump the version
//	zoasf_version_bump();
//
//	// Delete rewrite rules to force a flush
//	zoasf_delete_rewrite_rules();
}
