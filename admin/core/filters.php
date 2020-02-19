<?php

/**
 * "WooCommerce Order Admin Search & Filters" Filters
 *
 * This file contains the filters that are used through-out "WooCommerce Order Admin Search & Filters". They are
 * consolidated here to make searching for them easier, and to help developers
 * understand at a glance the order in which things occur.
 *
 * There are a few common places that additional filters can currently be found
 *
 *  - bbPress: In {@link Codeoz_OASF::setup_actions()} in coz_oasf.php
 *  - Admin: More in {@link BBP_Admin::setup_actions()} in admin.php
 *
 * @package cozOASF
 * @subpackage Core
 *
 * @see /core/actions.php
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
 *           v--WordPress Actions       v--bbPress Sub-actions
 */
//add_filter( 'request',                 'zoasf_request',            10    );
//add_filter( 'wp_title',                'zoasf_title',              10, 3 );
