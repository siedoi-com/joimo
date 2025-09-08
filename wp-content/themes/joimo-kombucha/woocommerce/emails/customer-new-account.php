<?php
/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

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
												<h1 style="color: #221E1F; font-weight: 500;font-size: 40px;font-family: 'Times New Roman', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-weight: 700;">Welcome to Joimo!</h1>
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

																<p style="color: #7C7C7C; text-align: center;font-size: 14px; margin-top: 30px;margin-bottom:16px;"><?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $user_login ) ); ?></p>
																<p style="color: #7C7C7C; text-align: left;font-size: 14px; margin-top: 10px;margin-bottom:46px;" class="p-with-link"><?php printf( esc_html__( 'Thanks for creating an account on %1$s. Your username is %2$s. You can access your account area to view orders, change your password, and more at: %3$s', 'woocommerce' ), esc_html( $blogname ), '<strong>' . esc_html( $user_login ) . '</strong>', make_clickable( esc_url( wc_get_page_permalink( 'myaccount' ) ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

																<?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) : ?>
																	<?php /* translators: %s: Auto generated password */ ?>
																	<p><?php printf( esc_html__( 'Your password has been automatically generated: %s', 'woocommerce' ), '<strong>' . esc_html( $user_pass ) . '</strong>' ); ?></p>
																<?php endif; ?>

																<div style="color: #7C7C7C; text-align: left;font-size: 14px; margin-top: 30px;margin-bottom:16px;">
																	<?php
																		if ( $additional_content ) {
																			echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
																		}
																	?>
																</div>

																<div id="customer-det">

																	<p style="margin-top:20px;font-size: 14px;line-height: 16px;color: #7C7C7C;text-align: center;margin-bottom:80px;">If you have any questions about your order,<br>please contact us at <a href="mailto:hello@joimotea.com" style="color:#537CE3;">hello@joimotea.com</a>.</p>
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
