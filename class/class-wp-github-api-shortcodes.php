<?php
/**
 * Class: WP_GitHub_API_Shortcodes
 *
 * Main class for shortcodes.
 *
 * @since 	0.0.1
 * @package WGA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Parsedown.
 *
 * @since 0.0.5
 * @link https://github.com/erusev/parsedown
 */
if ( file_exists( WGA_DIR . '/class/class-parsedown.php' ) ) {
    require_once( WGA_DIR . '/class/class-parsedown.php' );
}

if ( ! class_exists( 'WP_GitHub_API_Shortcodes' ) ) :

/**
 * WP_GitHub_API_Shortcodes.
 *
 * @since 0.0.1
 */
class WP_GitHub_API_Shortcodes {

	/**
	 * Construct.
	 *
	 * @since 0.0.1
	 */
	public function __construct() {
		// Load the plugin.
		add_action( 'plugins_loaded', array( $this, 'register' ) );
	}

	/**
	 * Register.
	 *
	 * @since 0.0.1
	 */
	public function register() {
		// Add the shortcode.
		add_shortcode( 'wga', array( $this, 'shortcode' ) );
	}

	/**
	 * Shortcode.
	 *
	 * @param Attributes $atts API URL|Data.
	 * @since 0.0.1
	 */
	public function shortcode( $atts ) {
		// Save $atts.
		$_atts = shortcode_atts( array(
		        'u' => 'repos/ahmadawais/WPGulp', 	// API URL.
		        'd' => 'name', 						// Data.
		        'r' => 'n', 						// Readme.
		    ), $atts );
		// API URL.
		$_api_url = $_atts['u'];

		// Remove `/` in the beginning or at the end.
		$_api_url = preg_replace( '/^\/|\/$/', '', $_api_url );

		// Data.
		$_data = $_atts['d'];

		// Is Readme?
		$_readme = $_atts['r'];

		// Get WPTAlly's object.
		$wpgapi_response = $this->get_api( $_api_url, $_data );

		// Bail if there is an error.
		if ( ! is_object( $wpgapi_response ) || is_wp_error( $wpgapi_response ) ) {
			return $wpgapi_response;
		}

		// Decode b64 if it is Readme to HTML.
		if ( 'y' == $_readme ) {
			// Get the response.
			$_readme_b64 = $wpgapi_response->$_atts['d'];

			// Decode b64.
			$_readme_decoded = base64_decode( $_readme_b64 );

			// Init an object.
			$parsedown_obj = new Parsedown();

			// Convert markdown to HTML.
			$_readme_html = $parsedown_obj->text( $_readme_decoded );

			// Return the data.
			return $_readme_html;
		}

		// Return it, Safe in PHP 7.0.
		$_return = $wpgapi_response->$_atts['d'];

		// Return the data.
		return $_return;
	}

	/**
	 * WP HTTP API GET.
	 *
	 * @param API URL $api_url Remaining API URL from user.
	 * @param Data 	  $data Data to be retreieved.
	 * @since 0.0.2
	 */
	public function get_api( $api_url, $data ) {
		// Set a transient with API_URL and DATA.
		$transient = 'wga_response_' . $api_url . '_'. $data;

		/**
		// Delete trasient for debugging.
		// delete_transient( $transient );
		*/

		// Get the value.
		$wga_transient = get_transient( $transient );

		// API URL with $api_url from user.
		$url = 'https://api.github.com/' . $api_url;

		// If no transient then fetch.
		if ( false === $wga_transient || null === $wga_transient || is_wp_error( $wga_transient ) ) {
			// Get the response.
			$response  = wp_safe_remote_get( $url );

			// If not WP_Error.
			if ( ! is_wp_error( $response ) ) {
				// Retreive the body and JSON decode it as an object.
				$wga = json_decode( wp_remote_retrieve_body( $response ) );

				// Set a transient for future.
		    	set_transient( $transient, $wga, 24 * HOUR_IN_SECONDS );

		    	// Return the object.
				return $wga;
		    } elseif ( true === WP_DEBUG && is_wp_error( $response ) ) {
	    	    return $response->get_error_message();
		    } else {
		    	return '(Unable to fetch at this time!)';
		    }
		} else {
			return $wga_transient;
		}
	}
}

endif;
