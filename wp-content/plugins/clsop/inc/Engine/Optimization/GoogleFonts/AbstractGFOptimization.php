<?php
/**
 * Source file was changed on the Fri Nov 24 13:30:07 2023 +0100
 */

declare(strict_types=1);

namespace WP_Rocket\Engine\Optimization\GoogleFonts;

/**
 * Abstract Optimization Parent Class for Google Fonts Optimizers.
 *
 * @since 3.8
 */
abstract class AbstractGFOptimization {
	/**
	 * Allowed display values.
	 *
	 * @since 3.8
	 *
	 * @var array
	 */
	protected $display_values = [
		'auto'     => 1,
		'block'    => 1,
		'swap'     => 1,
		'fallback' => 1,
		'optional' => 1,
	];

	/**
	 * Flag for whether google fonts have been detected (Default: true)
	 *
	 * @since 3.8.8
	 *
	 * @var bool
	 */
	protected $has_google_fonts = true;

	/**
	 * Optimize Google Fonts
	 *
	 * @param string $html HTML content.
	 *
	 * @return string
	 */
	abstract public function optimize( $html ): string;

	/**
	 * Check whether the optimizer has found google fonts on the page.
	 *
	 * @since 3.8.8
	 *
	 * @return bool Will default to true when extending classes have not set via the optimize() method.
	 */
	public function has_google_fonts() {
		return $this->has_google_fonts;
	}

	/**
	 * Returns font with display value.
	 *
	 * @since  3.8 Moved here from GoogleFonts\Combine::class
	 * @since  3.5.1
	 *
	 * @param array $font Array containing font tag and matches.
	 *
	 * @return string Google Font tag with display param.
	 */
	protected function get_font_with_display( array $font ) {
		$font_url = html_entity_decode( $font['url'] );
		$query    = wp_parse_url( $font_url, PHP_URL_QUERY );

		if ( empty( $query ) ) {
			return $font[0];
		}

		$parsed_font = wp_parse_args( $query );
		$font_url    = ! empty( $parsed_font['display'] )
			? str_replace( "&display={$parsed_font['display']}", '&display=swap', $font_url )
			: "{$font_url}&display=swap";

		return str_replace( $font['url'], esc_url( $font_url ), $font[0] );
	}

	/**
	 * Get the font display value.
	 *
	 * @since  3.8 Moved here from GoogleFonts\Combine::class
	 * @since  3.5.1
	 *
	 * @return string font display value.
	 */
	protected function get_font_display_value(): string {
		/**
		 * Filters the combined Google Fonts display parameter value
		 *
		 * @since  3.8 Moved here from GoogleFonts\Combine::class
		 * @since  3.3.5
		 *
		 * @param string $display Display value. Can be either auto, block, swap, fallback or optional.
		 */
		$display = apply_filters( 'rocket_combined_google_fonts_display', 'swap' );

		if ( ! is_string( $display ) ) {
			return 'swap';
		}

		return isset( $this->display_values[ $display ] ) ? $display : 'swap';
	}

	/**
	 * Returns the optimized markup for Google Fonts
	 *
	 * @since 3.9.1
	 *
	 * @param string $url Google Fonts URL.
	 *
	 * @return string
	 */
	protected function get_optimized_markup( string $url ): string {
		return sprintf(
			'<link rel="preload" as="style" href="%1$s" /><link rel="stylesheet" href="%1$s" media="print" onload="this.media=\'all\'" /><noscript><link rel="stylesheet" href="%1$s" /></noscript>', // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedStylesheet
			$url
		);
	}
}
