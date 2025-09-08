<?php
/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
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
												<h1 style="color: #221E1F; font-weight: 500;font-size: 40px;font-family: 'Times New Roman', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-weight: 700;">Password Reset Request</h1>
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
															<div id="body_content_inner" style="padding: 0">

																<p style="color: #7C7C7C; text-align: center;font-size: 14px; margin-top: 30px;margin-bottom:16px;"><?php printf( esc_html__( 'Someone has requested a new password for the following account on %s', 'woocommerce' ), esc_html( wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ) ) ); ?>
																</p>
																<p style="color: #7C7C7C; text-align: center;font-size: 14px; margin-top: 10px;margin-bottom:46px;">
																	<?php esc_html_e( 'If you didn\'t make this request, just ignore this email. If you\'d like to proceed:', 'woocommerce' ); ?><br>
																	<a class="link" href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'id' => $user_id ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>" style="margin-top:20px;color: #537CE3;display: inline-block; padding: 20px 40px;border-radius: 29.5px;font-size: 17px;color: #EDEDEB;background: #2A4934;text-decoration: none;"><?php // phpcs:ignore ?>
																		<?php esc_html_e( 'Reset password', 'woocommerce' ); ?>
																	</a>
																</p>

																<!-- <div style="color: #7C7C7C; text-align: center;font-size: 14px; margin-top: 30px;margin-bottom:16px;">
																	<?php
																		if ( $additional_content ) {
																			echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
																		}
																	?>
																</div> -->

																<div id="customer-det">

																	<p style="margin-top:20px;font-size: 14px;line-height: 16px;color: #7C7C7C;text-align:center;margin-bottom:80px;">Thank you, the Joimo Team<br><br>If you have any questions about your order,<br>please contact us at <a href="mailto:hello@joimotea.com" style="color:#537CE3;">hello@joimotea.com</a>.</p>
																</div>
														</td>
													</tr>
												</table>
												<!-- End Content -->
											</td>
										</tr>
										<tr>
											<td>
											<table border="0" cellpadding="10" cellspacing="0" width="600px" id="template_footer">
							<tr>
								<td valign="top">
									<table border="0" cellpadding="10" cellspacing="0" width="100%" id="footer">
										<tr>
											<td class="footer-first-col" style="font-size: 14px;line-height: 16px;color: #FFFFFF;">
												Joimo Tea<br>
												1375 E 15th Street<br>
												Los Angeles, CA 90021
											</td>
											<td class="footer-second-col" style="vertical-align: top;    padding: 40px 60px 64px 0;width: 73px;">
												<div class="footer-social" style="margin-top:0;">
													<a href="https://www.facebook.com/joimocompany">
														<img src="https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2022/05/Facebook.png" width="24px">
													</a>
													<a class="footer-insta" href="https://www.instagram.com/joimotea/">
														<img src="https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2022/05/Instagram.png" width="24px">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td colspan="2" valign="middle" id="credit" style="padding-top: 0;">
												<span>© 2022 Joimo Kombucha LLC</span> 
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- End Footer -->
											</td>
										</tr>
									</table>
									<!-- End Body -->
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
