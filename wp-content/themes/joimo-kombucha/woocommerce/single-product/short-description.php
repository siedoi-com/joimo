<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;
global $product;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>

    <?php if( get_field('custom_product_additional_information') || $product->get_attribute('material') || $product->get_attribute('color')): ?>    						
        <div class="custom-product-additional-details custom-product-additional-details--teaware">
            <?php if (get_field('custom_product_additional_information')): ?>
                <?php the_field('custom_product_additional_information'); ?>
            <?php endif; ?>

            <?php
                if ($product->get_attribute('material')):
                    $materialAttr = $product->get_attribute('material');
            ?>

                <div class="custom-details">
                    <div class="label-title">Material</div>
                    <p><strong><?= $materialAttr ?></strong></p>
                </div>
            <?php endif; ?>
            <?php
                if ($product->get_attribute('color')):
                    $colorAttr = $product->get_attribute( 'color' );
            ?>
                <div class="custom-details">
                    <div class="label-title">Color</div>
                    <p><strong><?= $colorAttr ?></strong></p>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
