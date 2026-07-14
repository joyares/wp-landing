<?php
/**
 * Plugin Name: Custom Checkout Fields
 * Description: Customizes WooCommerce checkout form fields: removes email, country, apartment and city, makes phone mandatory, and uses a single Name field.
 * Version: 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Run late so locale/theme adjustments can't re-add removed fields.
add_filter( 'woocommerce_checkout_fields', 'ccf_customize_checkout_fields', 1000 );

function ccf_customize_checkout_fields( $fields ) {
	// Remove unwanted billing fields.
	unset( $fields['billing']['billing_email'] );
	unset( $fields['billing']['billing_country'] );
	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['billing']['billing_city'] );

	// Single "Name" field instead of first/last name.
	if ( isset( $fields['billing']['billing_first_name'] ) ) {
		$fields['billing']['billing_first_name']['label']       = 'Name';
		$fields['billing']['billing_first_name']['placeholder'] = 'Enter your name';
		$fields['billing']['billing_first_name']['class']       = array( 'form-row-wide' );
		$fields['billing']['billing_first_name']['priority']    = 10;
	}
	unset( $fields['billing']['billing_last_name'] );

	// Phone is mandatory.
	if ( isset( $fields['billing']['billing_phone'] ) ) {
		$fields['billing']['billing_phone']['required'] = true;
	}

	return $fields;
}

// The country field is removed from the form, so pin billing/shipping
// country to the store's base country for tax, shipping and validation.
add_filter( 'woocommerce_checkout_posted_data', 'ccf_force_base_country' );

function ccf_force_base_country( $data ) {
	$base                     = wc_get_base_location();
	$data['billing_country']  = $base['country'];
	$data['shipping_country'] = $base['country'];
	return $data;
}

// Keep any country-dependent fields (e.g. state list) on the base country.
add_filter( 'default_checkout_billing_country', 'ccf_default_checkout_country' );

function ccf_default_checkout_country( $country ) {
	$base = wc_get_base_location();
	return $base['country'];
}
