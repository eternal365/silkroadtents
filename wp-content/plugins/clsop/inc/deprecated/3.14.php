<?php

defined( 'ABSPATH' ) || exit;

/**
 * Remove HTTP protocol on script, link, img and form tags.
 *
 * @since 2.7
 * @deprecated 3.14
 *
 * @param string $buffer HTML content.
 * @return string Updated HTML content
 */
function rocket_protocol_rewrite( $buffer ) {
	_deprecated_function( __FUNCTION__, '3.14' );

	$re     = "/(<(script|link|img|form)([^>]*)(href|src|action)=[\"'])https?:\\/\\//i";
	$subst  = '$1//';
	$return = preg_replace( $re, $subst, $buffer );

	if ( $return ) {
		$buffer = $return;
	}

	return $buffer;
}

/**
 * Remove HTTP protocol on srcset attribute generated by WordPress
 *
 * @since 2.7
 * @deprecated 3.14
 *
 * @param array $sources an Array of images sources for srcset.
 * @return array Updated array of images sources
 */
function rocket_protocol_rewrite_srcset( $sources ) {
	_deprecated_function( __FUNCTION__, '3.14' );

	if ( (bool) $sources ) {
		foreach ( $sources as $i => $source ) {
			$sources[ $i ]['url'] = str_replace( [ 'http:', 'https:' ], '', $source['url'] );
		}
	}

	return $sources;
}

/**
 * Check if request is from Cloudflare
 *
 * @since  3.4.1
 * @author Soponar Cristina
 *
 * @return bool
 */
function rocket_is_cloudflare() {
	_deprecated_function( __FUNCTION__, '3.14' );

	if ( ! isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) ) {
		return false;
	}
	// Check if original ip has already been restored, e.g. by nginx - assume it was from cloudflare then.
	if ( isset( $_SERVER['REMOTE_ADDR'] ) && $_SERVER['REMOTE_ADDR'] === $_SERVER['HTTP_CF_CONNECTING_IP'] ) {
		return true;
	}

	return rocket_is_cf_ip();
}

/**
 * Check if a request comes from a CloudFlare IP.
 *
 * @since  3.4.1
 * @author Soponar Cristina
 *
 * @return bool
 */
function rocket_is_cf_ip() {
	_deprecated_function( __FUNCTION__, '3.14' );

	// Store original remote address in $original_ip.
	$original_ip = filter_input( INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP );
	if ( ! isset( $original_ip ) ) {
		return false;
	}

	$cf_ips_values = get_transient( 'rocket_cloudflare_ips' );

	// Cloudflare IPS should always be populated because the code runs before loading Cloudflare addon.
	if ( false === $cf_ips_values ) {
		$cf_ips_values = (object) [
			'success' => true,
			'result'  => (object) [],
		];

		$cf_ips_values->result->ipv4_cidrs = [
			'103.21.244.0/22',
			'103.22.200.0/22',
			'103.31.4.0/22',
			'104.16.0.0/12',
			'108.162.192.0/18',
			'131.0.72.0/22',
			'141.101.64.0/18',
			'162.158.0.0/15',
			'172.64.0.0/13',
			'173.245.48.0/20',
			'188.114.96.0/20',
			'190.93.240.0/20',
			'197.234.240.0/22',
			'198.41.128.0/17',
		];

		$cf_ips_values->result->ipv6_cidrs = [
			'2400:cb00::/32',
			'2405:8100::/32',
			'2405:b500::/32',
			'2606:4700::/32',
			'2803:f800::/32',
			'2c0f:f248::/32',
			'2a06:98c0::/29',
		];
	}

	if ( strpos( $original_ip, ':' ) === false ) {
		$cf_ip_ranges = $cf_ips_values->result->ipv4_cidrs;
		foreach ( $cf_ip_ranges as $range ) {
			if ( rocket_ipv4_in_range( $original_ip, $range ) ) {
				return true;
			}
		}
	} else {
		$cf_ip_ranges = $cf_ips_values->result->ipv6_cidrs;
		$ipv6         = get_rocket_ipv6_full( $original_ip );
		foreach ( $cf_ip_ranges as $range ) {
			if ( rocket_ipv6_in_range( $ipv6, $range ) ) {
				return true;
			}
		}
	}

	return false;
}

/**
 * Fixes Cloudflare Flexible SSL redirect loop
 *
 * @since  3.4.1
 * @author Soponar Cristina
 */
function rocket_fix_cf_flexible_ssl() {
	_deprecated_function( __FUNCTION__, '3.14' );

	$is_cf = rocket_is_cloudflare();
	if ( $is_cf ) {
		// Fixes Flexible SSL.
		if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && 'https' === $_SERVER['HTTP_X_FORWARDED_PROTO'] ) {
			$_SERVER['HTTPS'] = 'on';
		}
	}
}

/*
 * ip_in_range.php - Function to determine if an IP is located in a
 *                   specific range as specified via several alternative
 *                   formats.
 *
 * Network ranges can be specified as:
 * 1. Wildcard format:     1.2.3.*
 * 2. CIDR format:         1.2.3/24  OR  1.2.3.4/255.255.255.0
 * 3. Start-End IP format: 1.2.3.0-1.2.3.255
 *
 * Return value BOOLEAN : ip_in_range($ip, $range);
 *
 * Copyright 2008: Paul Gregg <pgregg@pgregg.com>
 * 10 January 2008
 * Version: 1.2
 *
 * Source website: http://www.pgregg.com/projects/php/ip_in_range/
 * Version 1.2
 *
 * This software is Donationware - if you feel you have benefited from
 * the use of this tool then please consider a donation. The value of
 * which is entirely left up to your discretion.
 * http://www.pgregg.com/donate/
 *
 * Please do not remove this header, or source attibution from this file.
 */

/*
* Modified by James Greene <james@cloudflare.com> to include IPV6 support
* (original version only supported IPV4).
* 21 May 2012
*/

// In order to simplify working with IP addresses (in binary) and their
// netmasks, it is easier to ensure that the binary strings are padded
// with zeros out to 32 characters - IP addresses are 32 bit numbers
function rocket_decbin32($dec) {
	_deprecated_function( __FUNCTION__, '3.14' );

    return str_pad(decbin($dec), 32, '0', STR_PAD_LEFT);
}

// This function takes 2 arguments, an IP address and a "range" in several
// different formats.
// Network ranges can be specified as:
// 1. Wildcard format:     1.2.3.*
// 2. CIDR format:         1.2.3/24  OR  1.2.3.4/255.255.255.0
// 3. Start-End IP format: 1.2.3.0-1.2.3.255
// The function will return true if the supplied IP is within the range.
// Note little validation is done on the range inputs - it expects you to
// use one of the above 3 formats.
function rocket_ipv4_in_range($ip, $range) {
	_deprecated_function( __FUNCTION__, '3.14' );

    if (strpos($range, '/') !== false) {
        // $range is in IP/NETMASK format
        list($range, $netmask) = explode('/', $range, 2);
        if (strpos($netmask, '.') !== false) {
            // $netmask is a 255.255.0.0 format
            $netmask = str_replace('*', '0', $netmask);
            $netmask_dec = ip2long($netmask);
            return ( (ip2long($ip) & $netmask_dec) == (ip2long($range) & $netmask_dec) );
        } else {
            // $netmask is a CIDR size block
            // fix the range argument
            $x = explode('.', $range);
            while(count($x)<4) $x[] = '0';
            list($a,$b,$c,$d) = $x;
            $range = sprintf("%u.%u.%u.%u", empty($a)?'0':$a, empty($b)?'0':$b,empty($c)?'0':$c,empty($d)?'0':$d);
            $range_dec = ip2long($range);
            $ip_dec = ip2long($ip);

            # Strategy 1 - Create the netmask with 'netmask' 1s and then fill it to 32 with 0s
            #$netmask_dec = bindec(str_pad('', $netmask, '1') . str_pad('', 32-$netmask, '0'));

            # Strategy 2 - Use math to create it
            $wildcard_dec = pow(2, (32-$netmask)) - 1;
            $netmask_dec = ~ $wildcard_dec;

            return (($ip_dec & $netmask_dec) == ($range_dec & $netmask_dec));
        }
    } else {
        // range might be 255.255.*.* or 1.2.3.0-1.2.3.255
        if (strpos($range, '*') !==false) { // a.b.*.* format
            // Just convert to A-B format by setting * to 0 for A and 255 for B
            $lower = str_replace('*', '0', $range);
            $upper = str_replace('*', '255', $range);
            $range = "$lower-$upper";
        }

        if (strpos($range, '-')!==false) { // A-B format
            list($lower, $upper) = explode('-', $range, 2);
            $lower_dec = (float)sprintf("%u",ip2long($lower));
            $upper_dec = (float)sprintf("%u",ip2long($upper));
            $ip_dec = (float)sprintf("%u",ip2long($ip));
            return ( ($ip_dec>=$lower_dec) && ($ip_dec<=$upper_dec) );
        }
        return false;
    }
}

function rocket_ip2long6($ip) {
	_deprecated_function( __FUNCTION__, '3.14' );

    if (substr_count($ip, '::')) {
        $ip = str_replace('::', str_repeat(':0000', 8 - substr_count($ip, ':')) . ':', $ip);
    }

    $ip = explode(':', $ip);
    $r_ip = '';
    foreach ($ip as $v) {
        $r_ip .= str_pad( base_convert( preg_replace("/[^0-9a-fA-F]/", "", $v ), 16, 2 ), 16, 0, STR_PAD_LEFT );
    }

    return base_convert($r_ip, 2, 10);
}

// Get the ipv6 full format and return it as a decimal value.
function get_rocket_ipv6_full($ip) {
	_deprecated_function( __FUNCTION__, '3.14' );

    $pieces = explode ("/", $ip, 2);
    $left_piece = $pieces[0];
    $right_piece = null;
    if (count($pieces) > 1) $right_piece = $pieces[1];

    // Extract out the main IP pieces
    $ip_pieces = explode("::", $left_piece, 2);
    $main_ip_piece = $ip_pieces[0];
    $last_ip_piece = "";
    if (count($ip_pieces) > 1) $last_ip_piece = $ip_pieces[1];

    // Pad out the shorthand entries.
    $main_ip_pieces = explode(":", $main_ip_piece);
    foreach($main_ip_pieces as $key=>$val) {
        $main_ip_pieces[$key] = str_pad($main_ip_pieces[$key], 4, "0", STR_PAD_LEFT);
    }

    // Check to see if the last IP block (part after ::) is set
    $last_piece = "";
    $size = count($main_ip_pieces);
    if (trim($last_ip_piece) != "") {
        $last_piece = str_pad($last_ip_piece, 4, "0", STR_PAD_LEFT);

        // Build the full form of the IPV6 address considering the last IP block set
        for ($i = $size; $i < 7; $i++) {
            $main_ip_pieces[$i] = "0000";
        }
        $main_ip_pieces[7] = $last_piece;
    }
    else {
        // Build the full form of the IPV6 address
        for ($i = $size; $i < 8; $i++) {
            $main_ip_pieces[$i] = "0000";
        }
    }

    // Rebuild the final long form IPV6 address
    $final_ip = implode(":", $main_ip_pieces);

    return rocket_ip2long6($final_ip);
}

// Determine whether the IPV6 address is within range.
// $ip is the IPV6 address in decimal format to check if its within the IP range created by the cloudflare IPV6 address, $range_ip.
// $ip and $range_ip are converted to full IPV6 format.
// Returns true if the IPV6 address, $ip,  is within the range from $range_ip.  False otherwise.
function rocket_ipv6_in_range($ip, $range_ip) {
	_deprecated_function( __FUNCTION__, '3.14' );

    $pieces = explode ("/", $range_ip, 2);
    $left_piece = $pieces[0];
    $right_piece = $pieces[1];

    // Extract out the main IP pieces
    $ip_pieces = explode("::", $left_piece, 2);
    $main_ip_piece = $ip_pieces[0];
    $last_ip_piece = $ip_pieces[1];

    // Pad out the shorthand entries.
    $main_ip_pieces = explode(":", $main_ip_piece);
    foreach($main_ip_pieces as $key=>$val) {
        $main_ip_pieces[$key] = str_pad($main_ip_pieces[$key], 4, "0", STR_PAD_LEFT);
    }

    // Create the first and last pieces that will denote the IPV6 range.
    $first = $main_ip_pieces;
    $last = $main_ip_pieces;

    // Check to see if the last IP block (part after ::) is set
    $last_piece = "";
    $size = count($main_ip_pieces);
    if (trim($last_ip_piece) != "") {
        $last_piece = str_pad($last_ip_piece, 4, "0", STR_PAD_LEFT);

        // Build the full form of the IPV6 address considering the last IP block set
        for ($i = $size; $i < 7; $i++) {
            $first[$i] = "0000";
            $last[$i] = "ffff";
        }
        $main_ip_pieces[7] = $last_piece;
    }
    else {
        // Build the full form of the IPV6 address
        for ($i = $size; $i < 8; $i++) {
            $first[$i] = "0000";
            $last[$i] = "ffff";
        }
    }

    // Rebuild the final long form IPV6 address
    $first = rocket_ip2long6(implode(":", $first));
    $last = rocket_ip2long6(implode(":", $last));
    $in_range = ($ip >= $first && $ip <= $last);

    return $in_range;
}

/**
 * Filter plugin fetching API results to inject Imagify
 *
 * @since 2.10.7
 * @since 3.14.2 deprecated
 * @author Remy Perona
 *
 * @param object|WP_Error $result Response object or WP_Error.
 * @param string          $action The type of information being requested from the Plugin Install API.
 * @param object          $args   Plugin API arguments.
 *
 * @return array Updated array of results
 */
function rocket_add_imagify_api_result( $result, $action, $args ) {
	if ( empty( $args->browse ) ) {
		return $result;
	}

	if ( 'featured' !== $args->browse && 'recommended' !== $args->browse && 'popular' !== $args->browse ) {
		return $result;
	}

	if ( ! isset( $result->info['page'] ) || 1 < $result->info['page'] ) {
		return $result;
	}

	if ( is_plugin_active( 'imagify/imagify.php' ) || is_plugin_active_for_network( 'imagify/imagify.php' ) ) {
		return $result;
	}

	// grab all slugs from the api results.
	$result_slugs = wp_list_pluck( $result->plugins, 'slug' );

	if ( in_array( 'imagify', $result_slugs, true ) ) {
		return $result;
	}

	$query_args   = [
		'slug'   => 'imagify',
		'fields' => [
			'icons'             => true,
			'active_installs'   => true,
			'short_description' => true,
			'group'             => true,
		],
	];
	$imagify_data = plugins_api( 'plugin_information', $query_args );

	if ( is_wp_error( $imagify_data ) ) {
		return $result;
	}

	if ( 'featured' === $args->browse ) {
		array_push( $result->plugins, $imagify_data );
	} else {
		array_unshift( $result->plugins, $imagify_data );
	}

	return $result;
}
