<?php
/**
 * Source file was changed on the Fri Nov 24 13:30:07 2023 +0100
 */

namespace WP_Rocket\Engine\License\API;

use WP_Rocket\Admin\Options_Data;

class UserClient {
	const USER_ENDPOINT = 'https://cloudlinux.com/stat/1.0/wp-rocket/user.php';

	/**
	 * WP Rocket options instance
	 *
	 * @var Options_Data
	 */
	private $options;

	/**
	 * Instantiate the class
	 *
	 * @param Options_Data $options WP Rocket options instance.
	 */
	public function __construct( Options_Data $options ) {
		$this->options = $options;
	}

	/**
	 * Gets user data from cache if it exists, else gets it from the user endpoint
	 *
	 * Cache the user data for 24 hours in a transient
	 *
	 * @since 3.7.3
	 *
	 * @return bool|object
	 */
	public function get_user_data() {
		$cached_data = get_transient( 'wp_rocket_customer_data' );

		if ( false !== $cached_data ) {
			return $cached_data;
		}

		$data = $this->get_raw_user_data();

		if ( false === $data ) {
			return false;
		}

		set_transient( 'wp_rocket_customer_data', $data, DAY_IN_SECONDS );

		return $data;
	}

	/**
	 * Gets the user data from the user endpoint
	 *
	 * @since 3.7.3
	 *
	 * @return bool|object
	 */
	private function get_raw_user_data() {
		return false;

		/*
		// Temporary off.
		$customer_key   = ! empty( $this->options->get( 'consumer_key', '' ) )
			? $this->options->get( 'consumer_key', '' )
			: rocket_get_constant( 'WP_ROCKET_KEY', '' );
		$customer_email = ! empty( $this->options->get( 'consumer_email', '' ) )
			? $this->options->get( 'consumer_email', '' )
			: rocket_get_constant( 'WP_ROCKET_EMAIL', '' );

		$response = wp_safe_remote_post(
			self::USER_ENDPOINT,
			[
				'body' => 'user_id=' . rawurlencode( $customer_email ) . '&consumer_key=' . sanitize_key( $customer_key ),
			]
		);

		if ( 200 !== wp_remote_retrieve_response_code( $response ) ) {
			return false;
		}

		$body = wp_remote_retrieve_body( $response );

		if ( empty( $body ) ) {
			return false;
		}

		return json_decode( $body );
		*/
	}
}
