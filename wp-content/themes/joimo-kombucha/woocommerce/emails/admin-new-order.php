<?php
/**
 * Admin new order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-new-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails\HTML
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
												<h1 style="color: #221E1F; font-weight: 500;font-size: 40px;font-family: 'Times New Roman', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-weight: 700;"><?php printf( esc_html__( 'You’ve received the following order from %s', 'woocommerce' ), $order->get_formatted_billing_full_name() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
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

						<!-- <p style="color: #7C7C7C; text-align: center;font-size: 14px; margin-top: 30px;margin-bottom:46px;">Your payment of <?= $order->get_subtotal_to_display(); ?> <?php printf( esc_html__( 'for order #%s has been processed.', 'woocommerce' ), esc_html( $order->get_order_number() ) ); ?><br>Your order is expected to ship within 2 to 4 business days.</p> -->

<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="border-top: 1px solid #EDEDEB;">
	<tr>
		<td style="width: 50%;font-size: 25px;font-weight: 500;line-height: 32px;color: #221E1F;padding-top:40px; font-family: 'Times New Roman', 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-weight: 700;">Order details</td>
		<td style="width: 50%;font-size: 14px;line-height: 16px;color: #221E1F;padding-top:40px;">
			Order number: <?= $order->get_order_number() ?><br>
			Purchase date: <?= $order->get_date_created()->format( 'm/d/Y' ) ?>
		</td>
	</tr>
</table>



                                
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
	<?php
		$items = $order->get_items();
		foreach ($items as $item ):
			// var_dump($item);
			// var_dump($product->get_sku();)
			// echo $item['product_id'];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $item['product_id'] ), 'single-post-thumbnail' );
			$product       = $item->get_product();
			$pice = $product->get_price();
			// $product->get_sku();
			// var_dump($image[0]);
	?>
		<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="border-top: 1px solid #EDEDEB;">
			<tr>
				<td style="width: 150px;border-top: 1px solid #EDEDEB;"><img src="<?= $image[0] ?>" /></td>
				<td style="color: #221E1F;border-top: 1px solid #EDEDEB;padding-left:20px;    width: 330px;"><a href="<?= get_permalink($item['product_id']) ?>" style="color: #221E1F;font-size: 14px;line-height: 16px;"><?= $item['name'] ?></a></td>
				<td style="color: #221E1F;border-top: 1px solid #EDEDEB; text-align: right;">$<?= $pice ?></td>
			</tr>
		</table>
	<?php endforeach; ?>
</table>

<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="border-top: 1px solid #EDEDEB;">
	<tr>
		<td style="width: 50%;padding-top:40px;padding-bottom:0;color: #7C7C7C;font-size: 14px;line-height: 20px;">
			Order subtotal
		</td>
		<td style="width: 50%;text-align: right;padding-top:40px;padding-bottom:0;color: #7C7C7C;font-size: 14px;line-height: 20px;">
			$<?= $order->get_subtotal(); ?>
		</td>
	</tr>
	<tr>
		<td style="width: 50%;padding-top:0;padding-bottom:0;color: #7C7C7C;font-size: 14px;line-height: 20px;">
		Discount
		</td>
		<td style="width: 50%;text-align: right;padding-top:0;padding-bottom:0;color: #7C7C7C;font-size: 14px;line-height: 20px;">
			<?= $order->get_discount_to_display(); ?>
		</td>
	</tr>
	<tr>
		<td style="width: 50%;padding-top:0;padding-bottom:0;color: #7C7C7C;font-size: 14px;line-height: 20px;">
		Shipping total
		</td>
		<td style="width: 50%;text-align: right;padding-top:0;padding-bottom:0;color: #7C7C7C;font-size: 14px;line-height: 20px;">
			$<?= $order->get_shipping_total(); ?>
		</td>
	</tr>
	<tr>
		<td style="width: 50%;padding-top:0;padding-bottom:10px;color: #7C7C7C;font-size: 14px;line-height: 20px;">
		Tax total
		</td>
		<td style="width: 50%;text-align: right;padding-top:0;padding-bottom:10px;color: #7C7C7C;font-size: 14px;line-height: 20px;">
			$<?= $order->get_total_tax(); ?>
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="border-top: 1px solid #EDEDEB;margint-top:10px;">
	<tr>
		<td style="width: 50%;padding-top:10px;padding-bottom:0;color: #221E1F;font-size: 21px;line-height: 24px;font-weight: 700;">
			Order total
		</td>
		<td style="width: 50%;text-align: right;padding-top:10px;padding-bottom:0;color: #221E1F;font-size: 21px;line-height: 24px;font-weight: 700;">
			<?= $order->get_subtotal_to_display(); ?>
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="margin-top:40px;">
	<tr>
		<td style="text-align:center;">
			<span>
				<a href="https://joimotea.com//my-account/orders/" style="text-decoration:none;display:inline-block;margin:auto;background: #2A4934;border-radius: 35.5px;padding: 16px 41px;font-weight: 700;font-size: 12px;line-height: 14px;text-transform: uppercase;color: #FFFFFF;">view order</a>
			</span>
		</td>
	</tr>
</table>

<p style="margin-top:20px;font-size: 14px;line-height: 16px;color: #7C7C7C;text-align:center;margin-bottom:80px;">If you have any questions about your order,<br>
please contact us at <a href="mailto:hello@joimotea.com" style="color:#537CE3;">hello@joimotea.com</a>.</p>



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
