<?php
/**
 * MP7
 *
 * @author  Webvorm <info@webvorm.nl>
 * @license GPLv3
 * @link    http://github.com/webvorm/mp7
 * @version 0.1.0
 *
 * @wordpress-plugin
 * Author URI: http://webvorm.nl/
 * Author: Webvorm
 * Description: Just another WordPress pre-3.8 classic grey <a href="https://www.apple.com/ios/design/">minimalistic</a> admin color scheme.
 * Domain Path: lang
 * License: GPLv3
 * Plugin Name: MP7
 * Plugin URI: http://github.com/webvorm/mp7
 * Text Domain: mp7
 * Version: 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Load a plugin's translated strings */
load_plugin_textdomain( 'mp7', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );

add_action( 'admin_init', 'mp7_wp_admin_css_color' );
/**
 * Fires as an admin screen or script is being initialized
 */
function mp7_wp_admin_css_color() {
	/** Registers an admin color scheme CSS file */
	wp_admin_css_color(
		'mp7', // The unique key for this theme
		__( 'MP7', 'mp7' ), // The name of the theme
		plugins_url( 'css/colors/mp7/colors.css', __FILE__ ), // The URL of the CSS file containing the color scheme
		array( '#ececec', '#777', '#d54e21', '#21759b' ) // An array of CSS color definitions which are used to give the user a feel for the theme (optional)
	);
}