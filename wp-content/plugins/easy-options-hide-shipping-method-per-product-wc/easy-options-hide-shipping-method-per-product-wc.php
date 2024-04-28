<?php
/*
 * Plugin Name: Easy Options Hide Shipping Method per product for WooCommerce
 * Version: 1.0.0
 * Description: Allows you to hide a specific shipping method when a certain product is added to the WooCommerce shopping cart. This can be selected on a per product basis.
 * Author: Jeff Sherk
 * Author URI: https://wordpress.org/support/plugin/easy-options-hide-shipping-method-per-product-wc/
 * Plugin URI: https://wordpress.org/plugins/easy-options-hide-shipping-method-per-product-wc/
 * Donate link: https://www.paypal.me/jsherk/10usd
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0
 */

//NOTE:
//  Do a search and replace for   jdsbtp_   and replace it with   jdssomethingunique_
//  Then set the plugin_admin_name and plugin_admin_link below.
$jdseahsm_plugin_admin_name = "Easy Options Hide Shipping Method per product WC";
$jdseahsm_plugin_admin_link = "easy-options-hide-shipping-method-per-product-wc";
$jdseahsm_plugin_admin_donate_url = "https://www.paypal.me/jsherk/10usd";
$jdseahsm_plugin_admin_review_url = "https://wordpress.org/support/plugin/".$jdseahsm_plugin_admin_link."/reviews/#new-post";
 
/* ****************************************************************************** */
function jdseahsm_add_links_to_admin_plugins_page($links) {

	global $jdseahsm_plugin_admin_name;
	global $jdseahsm_plugin_admin_link;
	global $jdseahsm_plugin_admin_donate_url;
	global $jdseahsm_plugin_admin_review_url;

	$review_url = $jdseahsm_plugin_admin_review_url;
	$review_url = esc_url($review_url);
	$review_link = '<a href="'.$review_url.'">Leave a REVIEW</a>';
	array_unshift( $links, $review_link );

	$donate_url = $jdseahsm_plugin_admin_donate_url;
	$donate_url = esc_url($donate_url);
	$donate_link = '<a href="'.$donate_url.'">DONATE</a>'; //DONATE
	array_unshift( $links, $donate_link ); //DONATE

	$url = get_admin_url() . 'options-general.php?page='.$jdseahsm_plugin_admin_link;
	$url = esc_url($url);
	$settings_link = '<a href="'.$url.'">Settings</a>';
	array_unshift( $links, $settings_link );

	return $links;
}
add_filter( 'plugin_action_links_'.plugin_basename(__FILE__), 'jdseahsm_add_links_to_admin_plugins_page' );


/* ****************************************************************************** */
function jdseahsm_add_meta_to_admin_plugins_page( $links, $file ) {

	global $jdseahsm_plugin_admin_name;
	global $jdseahsm_plugin_admin_link;
	global $jdseahsm_plugin_admin_donate_url;
	global $jdseahsm_plugin_admin_review_url;

	if ( strpos( $file, plugin_basename(__FILE__) ) !== false ) {

		$review_url = $jdseahsm_plugin_admin_review_url;
		$review_url = esc_url($review_url);

		$donate_url = $jdseahsm_plugin_admin_donate_url;
		$donate_url = esc_url($donate_url);

		$url = get_admin_url() . 'options-general.php?page='.$jdseahsm_plugin_admin_link;
		$url = esc_url($url);

		$donate_button = plugins_url( 'dbut-small.png', __FILE__ );
		$review_stars = plugins_url( 'stars-small.png', __FILE__ );
		$new_links = array('<a href="'.$url.'">Settings</a>', '<a href="'.$review_url.'">Leave a REVIEW <img style="vertical-align:text-top;" height="12" src="'.$review_stars.'"></a>', '<a href="'.$donate_url.'">Thanks for supporting me! <img style="vertical-align:bottom;" height="20" src="'.$donate_button.'"></a>'); //REVIEW & DONATE

		$links = array_merge( $links, $new_links );

	}
	
	return $links;
}
add_filter( 'plugin_row_meta', 'jdseahsm_add_meta_to_admin_plugins_page', 10, 2 );


/* ****************************************************************************** */
function jdseahsm_add_admin_settings_menu() {
	global $jdseahsm_plugin_admin_name;
	global $jdseahsm_plugin_admin_link;
	add_options_page( $jdseahsm_plugin_admin_name.' by Jeff Sherk', $jdseahsm_plugin_admin_name, 'activate_plugins', $jdseahsm_plugin_admin_link, 'jdseahsm_show_plugin_options' );
	//Add additional option pages as necessary
	//add_options_page( $jdseahsm_plugin_admin_name.' by Jeff Sherk', $jdseahsm_plugin_admin_name.' Extras', 'activate_plugins', $jdseahsm_plugin_admin_link.'-extra', 'jdseahsm_show_plugin_options_extra' );
}
add_action( 'admin_menu', 'jdseahsm_add_admin_settings_menu' );


/* ****************************************************************************** */
// Look for shipping methods that need to be removed from $rates array
function jdseahsm_woocommerce_remove_shipping_method( $rates, $packages ) {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		
	//  if there are no rates don't do anything
	if ( ! $rates ) {
		return;
	}
	
	// See if there are any products that have the HIDE SHIPPING METHOD text box set, and add this text to remove array
	$remove_methods = array();
	foreach($packages['contents'] as $package) {
		$product_id = $package['product_id'];
		$is_ok = jdseahsm_is_ok_to_do($product_id, '_jdseahsm_hide_shipping_method');
		if ($is_ok !== false ) {
			$remove_methods[] = $is_ok;
		}
	}
	
	// If array has something in it, then there are methods to try and remove
	if (count($remove_methods) > 0) {
		// Loop thru the text that we will look for in each shipping method
		foreach ($remove_methods as $method) {
			//Check if there is a matching shipping method label
			$found_match = false;
			foreach( $rates as $key => $rate ) {
				if (strpos($rate->label, $method) !== false) { // We are checking if text is CONTAINED anywhere it the shipping method LABEL name
					$found_match = $key;
				}
			}
			//If a match was found then pull shipping method out of array
			if ($found_match !== false) {
				//$temp = array();
				//$temp = $rates[$found_match];
				unset($rates[$found_match]);
				//$rates[$local_pickup] = $temp;
			}
		}
	}
	return $rates;
}
add_filter( 'woocommerce_package_rates' , 'jdseahsm_woocommerce_remove_shipping_method', 10, 2 );


/* ****************************************************************************** */
// Check if the WC product has the option_name set
function jdseahsm_is_ok_to_do($product_id, $option_name) {
	global $woocommerce;
	$get_option = get_post_meta($product_id, $option_name, true);
	if ($get_option === false || $get_option == "") {
		return false;
	} else {
		return $get_option;
	}
}


/* ****************************************************************************** */
// Add additional text box to WC products in SHIPPING section
function jdseahsm_add_to_wc_shipping_metabox() {
    global $post;
    echo '<div class="options_group">';
		// Add HIDE SHIPPING METHOD text box option
		echo woocommerce_wp_text_input( array(
			'id' => '_jdseahsm_hide_shipping_method',
			'label' => __( 'Hide Shipping Method that contains this text:', 'jdseartc-hide-shipping-method' ) ,
			'desc_tip' => true,
			'description' => __( 'When this product is added to cart, and there is a Shipping Method that contains this text (anywhere in its name), the Shipping Method will be hidden and not shown. Leave BLANK to disable.', 'jdseartc-hide-shipping-method' )
			)
		);
    echo '</div>';
}
add_action( 'woocommerce_product_options_shipping', 'jdseahsm_add_to_wc_shipping_metabox', 5 );


/* ****************************************************************************** */
// Save changes for text box of WC products in SHIPPING section
function jdseahsm_process_wc_shipping_metabox( $post_id, $post ) {
	// Save HIDE SHIPPING METHOD text box option
	if ( isset( $_POST['_jdseahsm_hide_shipping_method'] ) ) {
		$textbox = sanitize_text_field($_POST['_jdseahsm_hide_shipping_method']);
		$textbox = trim($textbox);
		update_post_meta( $post_id, '_jdseahsm_hide_shipping_method', $textbox );
	} else {
		update_post_meta( $post_id, '_jdseahsm_hide_shipping_method', "" );
	}
}
add_action( 'woocommerce_process_product_meta', 'jdseahsm_process_wc_shipping_metabox', 1, 2 );


/* ****************************************************************************** */
function jdseahsm_show_plugin_options() {

	global $jdseahsm_plugin_admin_name;
	global $jdseahsm_plugin_admin_link;
	global $jdseahsm_plugin_admin_donate_url;
	global $jdseahsm_plugin_admin_review_url;

	$donate_url = $jdseahsm_plugin_admin_donate_url;
	$review_url = $jdseahsm_plugin_admin_review_url;

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); //Required for Front End users but not for Admin area
	if (is_plugin_inactive("woocommerce/woocommerce.php")) { //check if specific plugin is active

		?>
		<div class="wrap">
			<h1><?php _e( $jdseahsm_plugin_admin_name ); ?></h1>
			<h3><i style='color:red;'>NOTICE: WooCommerce must be installed and activated to use this plugin.</i></h3>
		</div>
		<?php

	} else {

		?>
		<div class="wrap">
			<h1><?php _e( $jdseahsm_plugin_admin_name ); ?></h1>
		</div>
		<p>
			<br><span style='font-size:120%;'><b>There are no general options/settings for this plugin.<br>
			<br>
			This option must be enabled/disabled from each individual Edit Product page.<br>
			The "Hide Shipping Method" text box is listed in the SHIPPING tab of the product.</b></span><br>
		</p>

		<?php $pluginbut = plugins_url( 'dbut.png', __FILE__ ); $review_stars = plugins_url( 'stars-small.png', __FILE__ ); ?>
		<br><hr>How much is this plugin worth to you? A suggested <a href="<?php echo $donate_url; ?>">donation of $10</a> will help motivate me to keep this plugin updated!<br><a href="<?php echo $donate_url; ?>"><img width="175" src="<?php echo $pluginbut; ?>"></a>
		<br>Reviews are also very hepful. Please consider leaving a <a href="<?php echo $review_url; ?>">postive REVIEW by cllicking here <img style="vertical-align:text-top;" height="12" src="<?php echo $review_stars; ?>"></a><hr>
		<?php
		
    } //end check if specific plugin is active*/

}
?>