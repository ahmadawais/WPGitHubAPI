<?php
/**
 * Plugin Name: WP GitHub API
 * Plugin URI: https://github.com/ahmadawais/WPGitHubAPI
 * Description: Shortcode to obtain resources from official GitHub API v3.
 * Author: mrahmadawais, WPTie
 * Author URI: http://AhmadAwais.com/
 * Version: 0.0.3
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/ahmadawais/WPGitHubAPI/
 *
 * @package WGA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Define global constants.
 *
 * @since 0.0.2
 */
if ( ! defined( 'WGA_NAME' ) ) {
    define( 'WGA_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('WGA_DIR' ) ) {
    define( 'WGA_DIR', WP_PLUGIN_DIR . '/' . WGA_NAME );
}

if ( ! defined('WGA_URL' ) ) {
    define( 'WGA_URL', WP_PLUGIN_URL . '/' . WGA_NAME );
}

/**
 * Class: WP_GitHub_API_Shortcodes.
 *
 * @since 1.0.0
 */
if ( file_exists( WGA_DIR . '/class/class-wp-github-api-shortcodes.php' ) ) {
    require_once( WGA_DIR . '/class/class-wp-github-api-shortcodes.php' );
}

new WP_GitHub_API_Shortcodes();
