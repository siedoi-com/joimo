<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
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
	exit; // Exit if accessed directly
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
	</head>
	<body marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<div id="wrapper">
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
				<tr>
					<td align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="600px" id="heading" class="heading">
							<tr class="heading-row">
								<td class="heading-logo-wrapper" style="text-align: center;">
									<!-- <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header_image"> -->
										<img style="width: 160px; margin: 40px 0 40px 0;" class="logo" src="https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2021/04/Joimo_Logo_RGB_Horizontal_R-2.png" />
									<!-- </table> -->
								</td>
							</tr>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" width="600px" id="template_container" style="background-color: #fff; color: #221E1F;">
							<tr>
								<td align="center" valign="top">
									<!-- Header -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header">
										<tr>
											<td id="header_wrapper" style="padding: 0;">
												<h1 style="color: #221E1F; font-weight: 500;font-size: 40px;font-family: 'Times New Roman', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-weight: 700;"><?php echo $email_heading; ?></h1>
											</td>
										</tr>
									</table>
									<!-- End Header -->
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 0 60px;" id="template_body">
										<tr>
											<td valign="top" id="body_content">
												<!-- Content -->
												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tr>
														<td valign="top">
															<div id="body_content_inner" style="padding: 10px 0">