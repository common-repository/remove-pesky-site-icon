<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              cutlermcmartin.com
 * @since             1.0.0
 * @package           Remove_Pesky_Site_Icon
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Pesky Site Icon
 * Plugin URI:        https://marshalledmakers.com/remove-pesky-site-icon/
 * Description:       This plugin removes that pesky site icon.
 * Version:           1.1.0
 * Author:            Cutler McMartin
 * Author URI:        cutlermcmartin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       remove-pesky-site-icon
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'REMOVE_PESKY_SITE_ICON_VERSION', '1.1.0' );

/**
 * This is the funciton that removes the site icon by adding a link to nothing.
 */

function remove_site_icon() {
    print('<link rel="shortcut icon" type="image/jpg" href="#"/>');
}

/**
 * This is the hook that calls the function for the front end.
 */

add_action( 'wp_head', 'remove_site_icon' );

/**
 * This is the hook that calls the function for the admin area
 */

add_action( 'admin_head', 'remove_site_icon' );