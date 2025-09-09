<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}


// Get the ID of the main product image (the "featured image").
$main_image_id = $product->get_image_id();

// Get an array of IDs for the gallery images.
$gallery_image_ids = $product->get_gallery_image_ids();

// Create a single array of all image IDs to loop through.
// We add the main image to the start of the gallery array.
$all_image_ids = $gallery_image_ids;
if ( $main_image_id ) {
    array_unshift( $all_image_ids, $main_image_id );
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product-kombucha', $product ); ?> style="position: relative;">

	<?php get_template_part( 'template-parts/shop', 'alert' ) ?>
    
    <?php if ( ! empty( $all_image_ids ) ):?>
    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images images product-kombucha__gallery">
        <?php 
             // Loop through each image ID.
            foreach ( $all_image_ids as $attachment_id ) {
                
                // Use WordPress's best function to generate a full, responsive <img> tag.
                // This automatically includes 'srcset' and 'sizes' for different screen sizes.
                $image_tag = wp_get_attachment_image(
                    $attachment_id,
                    'woocommerce_single', // The appropriate image size for a single product page.
                    false, // Don't show an icon fallback.
                    [ 'class' => '' ] // Optional: add a class to the <img> tag itself.
                );

                // Wrap the generated <img> tag in your custom div structure.
                echo '<div class="product-kombucha__img">';
                echo $image_tag;
                echo '</div>';

            }
        ?>
    </div>
    <?php endif;?>

	<div class="summary entry-summary product-kombucha__summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		// do_action( 'woocommerce_single_product_summary' );
    	$custom_field_label = get_post_meta($product->get_id(), 'custom_product_label', true);

        ?>
        <div class="product-kombucha__upper-heading">
            <?php if (!empty($custom_field_label)):?>
                <span class="pro-label"><?= $custom_field_label ?></span>
            <?php endif;?>
            <?php if (get_field('warning_before_title')):?>
                <span class="product-kombucha__warning"><?= get_field('warning_before_title') ?></span>
            <?php endif;?>
        </div>

        <?php woocommerce_template_single_title();
        woocommerce_template_single_rating();
        woocommerce_template_single_price();
        
		?>

        <div class="product-kombucha__descr">
            <?= get_the_content() ?>
            <?php if (get_field('custom_product_additional_information')):?>
                <div class="custom-product-additional-details">
                    <?= get_field('custom_product_additional_information') ?>
                </div>
            <?php endif;?>
        </div>

        <div class="product-kombucha__add-to-cart">
            <?php woocommerce_template_single_add_to_cart(); ?>
        </div>

        <?php if (get_field('accordions')):?>
            <div class="product-kombucha__acc">
                <?php if (get_field('accordions')['tasting_notes']):?>
                    <div class="faq product-kombucha__faq">
                        <div class="faq__heading">
                            <span>Tasting Notes</span>
                            <button type="button" class="faq__btn"></button>
                        </div>
                        <div class="faq__content">
                            <?= get_field('accordions')['tasting_notes'] ?>
                        </div>
                    </div>
                <?php endif;?>
                <?php if (get_field('accordions')['shelf_life_&_storage_instructions']):?>
                    <div class="faq product-kombucha__faq">
                        <div class="faq__heading">
                            <span>Shelf Life & Storage Instructions</span>
                            <button type="button" class="faq__btn"></button>
                        </div>
                        <div class="faq__content">
                            <?= get_field('accordions')['shelf_life_&_storage_instructions'] ?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        <?php endif;?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>