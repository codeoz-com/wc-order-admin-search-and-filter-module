<?php

/**
 * "WooCommerce Order Admin Search & Filters" Public Actions
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
 * @package cozOASF
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
//add_action( 'init',                     'zoasf_init',                   0     ); // Early for zoasf_register
//add_action( 'wp_enqueue_scripts',       'zoasf_enqueue_scripts',        10    );


/**
 * zoasf_init - Attached to 'init' above
 *
 * Attach various initialization actions to the init action.
 * The load order helps to execute code at the correct time.
 *                                               v---Load order
 */
//add_action( 'zoasf_init', 'zoasf_load_textdomain',   0   );
//add_action( 'zoasf_init', 'zoasf_register',          10  );
//add_action( 'zoasf_init', 'zoasf_ready',             999 );


/**
 * zoasf_ready - attached to end 'zoasf_init' above
 *
 * Attach actions to the ready action after "WooCommerce Order Admin Search & Filters" has fully initialized.
 * The load order helps to execute code at the correct time.
 *                                                v---Load order
 */
//add_action( 'zoasf_ready',  'xxx',    2  );
