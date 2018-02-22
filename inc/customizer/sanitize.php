<?php
/**
 * Sanitization for number
 */
if ( ! function_exists( 'eshop_sanitize_number' ) ) :
	function eshop_sanitize_number( $input ) {
		return force_balance_tags( $input );
	}
endif;

/**
 * validate checkbox option.
 */
if ( ! function_exists( 'eshop_sanitize_checkbox' ) ) :
	function eshop_sanitize_checkbox( $input ) {
		return ( isset( $input ) && true == $input ? true : false );
	}
endif;

/**
 * validate radio button.
 */
if ( ! function_exists( 'eshop_sanitize_radio_buttons' ) ) {
	/**
	 * Simple function to validate choices from radio buttons
	 *
	 * @param $input
	 *
	 * @return string
	 */
	function eshop_sanitize_radio_buttons( $input, $setting ) {

		global $wp_customize;

		$control = $wp_customize->get_control( $setting->id );

		if ( array_key_exists( $input, $control->choices ) ) {
			return $input;
		} else {
			return $setting->default;
		}
	}
}