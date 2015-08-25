<?php
/**
 * Plugin Name: Smart Icons For Wordpress
 * Plugin URI:  http://www.smartpixels.net
 * Description: Adds beautiful icons to your wordpress website.
 * Version:     1.0.3
 * Author:      Smartpixels
 * Author URI:  http://www,smartpixels.net
 * License:     GPLv2+
 * Text Domain: smart_ifw
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2014 Smartpixels (email : info@smartpixels.net)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Useful global constants
define( 'SMART_IFW_VERSION', '1.0.3' );
define( 'SMART_IFW_URL',     plugin_dir_url( __FILE__ ) );
define( 'SMART_IFW_PATH',    dirname( __FILE__ ) . '/' );

/**
 * Default initialization for the plugin:
 * - Registers the default textdomain.
 */
function smart_ifw_init() {
	global $smart_ifw;
    $smart_ifw = get_option('_smart_ifw_options');
	$locale = apply_filters( 'plugin_locale', get_locale(), 'smart_ifw' );
	load_textdomain( 'smart_ifw', WP_LANG_DIR . '/smart_ifw/smart_ifw-' . $locale . '.mo' );
	load_plugin_textdomain( 'smart_ifw', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	require_once SMART_IFW_PATH . 'includes/admin/thickbox.php';
	require_once SMART_IFW_PATH . 'includes/admin/menu.php';
	require_once SMART_IFW_PATH . 'includes/admin/addons.php';
	require_once SMART_IFW_PATH . 'includes/scripts.php';
	require_once SMART_IFW_PATH . 'includes/media.php';
	require_once SMART_IFW_PATH . 'includes/shortcode.php';

	// Shortcodes
	add_shortcode($smart_ifw['icon_code'], 'smart_ifw_shortcode');
}

/**
 * Activate the plugin
 */
function smart_ifw_activate() {
	// First load the init scripts in case any rewrite functionality is being loaded
	smart_ifw_init();

	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'smart_ifw_activate' );

/**
 * Deactivate the plugin
 * Uninstall routines should be in uninstall.php
 */
function smart_ifw_deactivate() {

}
register_deactivation_hook( __FILE__, 'smart_ifw_deactivate' );

// Actions
add_action( 'init', 'smart_ifw_init' );
add_action('admin_menu','smart_ifw_menu' ); 
add_action('wp_enqueue_scripts','smart_ifw_site_scripts');
add_action('admin_enqueue_scripts','smart_ifw_admin_scripts');


// Filters
add_filter( 'upload_mimes', 'smart_ifw_mime_types' );