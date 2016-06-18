<?php
/**
 * Class: WP_GitHub_API_Shortcodes
 *
 * Main class for shortcodes.
 *
 * @since 	0.0.1
 * @package WTA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
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
		    ), $atts );
		// Get WPTAlly's object.
		$wpgapi_response = $this->get_stats( $_atts['u'] );

		// Bail if there is an error.
		if ( ! is_object( $wpgapi_response ) ) {
			return $wpgapi_response;
		}

		// Return the data.
		return $wpgapi_response->$_atts['d'];
	}

	/**
	 * WP HTTP API GET.
	 *
	 * @param API URL $api_url Remaining API URL from user.
	 * @since 1.0.0
	 */
	public function get_stats( $api_url ) {
		// Set a transient.
		$transient = 'wga_response';

		// Delete trasient for debugging.
		delete_transient( $transient ); // For Debugging.
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
