<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load colors.
// $bg        = get_option( 'woocommerce_email_background_color' );
// $body      = get_option( 'woocommerce_email_body_background_color' );
// $base      = get_option( 'woocommerce_email_base_color' );
// $base_text = wc_light_or_dark( $base, '#202020', '#FFFFFFfff' );
// $text      = get_option( 'woocommerce_email_text_color' );

// // Pick a contrasting color for links.
// $link_color = wc_hex_is_light( $base ) ? $base : $base_text;

// if ( wc_hex_is_light( $body ) ) {
// 	$link_color = wc_hex_is_light( $base ) ? $base_text : $base;
// }

// $bg_darker_10    = wc_hex_darker( $bg, 10 );
// $body_darker_10  = wc_hex_darker( $body, 10 );
// $base_lighter_20 = wc_hex_lighter( $base, 20 );
// $base_lighter_40 = wc_hex_lighter( $base, 40 );
// $text_lighter_20 = wc_hex_lighter( $text, 20 );
// $text_lighter_40 = wc_hex_lighter( $text, 40 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
// body{padding: 0;} ensures proper scale/positioning of the email in the iOS native email app.
?>
body {
	padding: 0;
	margin: 0;
}

* {
	margin: 0;
	padding: 0;
}

img {
	max-width: 100%;
}

table {
	font-family: Arial, Helvetica, sans-serif;
}

#heading, #template_container {
	max-width: 100%;
}

#heading td {
	background-color: #FFFFFF;
}

#logo {
	max-width: 23vw;
}

#logo-cell {
	padding: 15px 15px 15px 25px;
}

#menu a {
	color: #221E1F;
	text-transform: uppercase;
	font-weight: 400;
	font-size: 16px;
	line-height: 19px;
	text-decoration: none;
	padding: 0 8px;
}

#content {
	background-color: #2A4934;
	color: #EDEDEB;
	font-size: 18px;
	line-height: 22px;
}

#content h2 {
	font-weight: 400;
	font-size: 24px;
	line-height: 29px;
}

#template_container {
	background-color: #2A4934;
	color: #EDEDEB;
	font-size: 18px;
	line-height: 22px;
}

#template_header_image {
	padding: 15px 15px 15px 25px;
}

#menu td:last-child {
	padding-right: 25px;
}

#template_header td {
	padding: 55px 100px 20px 100px;
}

#header_wrapper {
	text-align: center;
}

#header_wrapper h1 {
	font-size: 28px;
	line-height: 38px;
	color: #EDEDEB;
}

#body_content_inner {
	font-size: 16px;
	line-height: 20px;
	color: #EDEDEB;
	padding: 0 100px 40px 100px;
}

.hi {
	font-size: 24px;
	line-height: 30px;
}

#body_content_inner p {
	margin-top: 15px;
}

#body_content_inner a {
	color: #EDEDEB;
}

#body_content_inner table {
	color: #EDEDEB;
}

#body_content_inner table ul, #body_content_inner table li {
	list-style-type: none;
}

#body_content_inner h2 {
	margin: 20px 0;
}

#body_content_inner td, #body_content_inner th {
	border-top-width: 0 !important;
	padding: 5px;
}

#pwgc-email-from {
	color: #7C7C7C !important;
	text-align: center;
}

#pwgc-email-title, #pwgc-email-gift-card-container .woocommerce-Price-amount.amount, #pwgc-email-redeem-button a {
	color: #221E1F !important;
}

#pwgc-email-gift-card-container {
	max-width: 530px;
    margin: auto;
	margin-bottom: 40px;
}

#footer {
	background-color: #2A4934;
}

.footer-first-col {
	padding: 45px 10px 35px 100px;
}

.footer-second-col {
	padding: 45px 100px 35px 10px;
}

#footer .footer-nav-list a {
	margin-top: 8px;
	display: block;
	color: #EDEDEB;
	font-weight: 400;
    font-size: 14px;
	line-height: 11px;
	text-decoration: none;
}

.nav-list-title {
	font-weight: 700;
	margin-bottom: 10px;
	font-size: 16px;
	line-height: 11px;
	text-decoration: none;
	display: block;
	color: #EDEDEB;
}

.footer-nav-list-wrapper {
	margin-top: 25px;
}

.footer-social {
	margin-top: 25px;
}

.footer-insta {
	margin-left: 20px;
}

#credit {
	color: #EDEDEB;
	padding: 30px 100px 30px 100px;
	font-size: 12px;
}

#credit a {
	color: #EDEDEB !important;
}

.footer-social a {
	text-decoration: none;
}

#customer-det h2, #customer-det address, #customer-det a {
	font-family: 'Helvetica';
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 16px;
	color: #7C7C7C;
} 

#customer-det h2 {
	margin-bottom: 0;
}

#customer-det td {
	padding: 5px !important;
}

#random-prod img {
	max-width: 250px !important;
}

.p-with-link a {
	color: #537CE3 !important;
}

@media only screen and (max-width: 480px) {
	.footer-first-col {
		padding: 45px 10px 0 10px !important;
		display: block !important;
	}

	.footer-second-col {
		padding: 0 10px 35px 10px  !important;
		display: block !important;
	}

	#footer, #footer tr {
		display: block !important;
	}

	#credit {
		padding: 30px 10px 30px 10px !important;
	}

	#template_header td {
		padding: 25px 10px 20px 10px !important;
	}

	#body_content_inner {
		padding: 0 10px 20px 10px !important;
	}

	#heading .heading-row, .heading-logo-wrapper, #heading .heading-coll {
		display: block !important;
	}

	#heading td {
		width: 100% !important;
		text-align: center !important;
	}

	
	#header_wrapper h1 {
		font-size: 20px !important;
	}

	#menu a {
		padding: 10px 5px !important;
		display: block !important;
	}

	#menu td {
		width: 33% !important;
	}
}
