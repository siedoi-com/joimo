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

            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" class="variations_form cart nt-kombucha-variations" method="POST" enctype='multipart/form-data'  data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $product->get_available_variations() ) ); ?>">


                <?php 
                    $attributes = $product->get_attributes();

                    foreach ( $attributes as $name => $attribute ) :
                        $label = wc_attribute_label( $name );

                        if ( $attribute->is_taxonomy() ) {
                            $terms = wc_get_product_terms( $product->get_id(), $name, array( 'fields' => 'all' ) );
                        } else {
                            // Fallback for non-taxonomy attributes, though the code below expects terms.
                            $values = explode( ' | ', $attribute->get_options() );
                            $terms  = array(); // Create an empty array to avoid errors.
                            foreach ( $values as $value ) {
                                $term          = new stdClass();
                                $term->name    = $value;
                                $term->slug    = sanitize_title( $value );
                                $term->term_id = 0; // Not a real term.
                                $terms[]       = $term;
                            }
                        }

                        if ( empty( $terms ) ) {
                            continue; // Skip if there are no terms for this attribute.
                        }

                        if ( 'Size' === $label ) :
                    ?>
                            <div class="nt-kombucha-variations__group">
                                <label class="nt-kombucha-variations__label">Choose <?= esc_html( $label ) ?></label>
                                <div id="size-selector" class="nt-kombucha-variations__size-selector nt-variations">
                                    <?php foreach ( $terms as $term_item ) : ?>
                                        <button data-size="<?= esc_attr( $term_item->slug ) ?>" class="nt-variations__size-option" data-attribute-name="<?= esc_attr( $term_item->taxonomy ) ?>" data-attribute-id="<?= esc_attr( $term_item->term_id ) ?>" type="button"><?= esc_html( $term_item->name ) ?></button>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php elseif ( 'Quantity' === $label ) : ?>
                            <div class="nt-kombucha-variations__group nt-kombucha-variations__group--quantity">
                                <label class="nt-kombucha-variations__label">Choose quantity</label>
                                <div id="package-selector" class="nt-kombucha-variations__package-selector">
                                    <?php foreach ( $terms as $index => $term_item ) : ?>
                                        <?php
      
                                        $price          = 0;
                                        $original_price = 0;
                                        $price_text     = '';
                                        $save_badge     = '';

            
                                        if ( 'single-bottles' === $term_item->slug ) { 
                                            $price      = 35;
                                            $price_text = '$' . $price . ' / EACH';
                                        } elseif ( 'pack-of-12-bottles' === $term_item->slug ) {
                                            $price          = 336;
                                            $original_price = 420;
                                            $save_badge     = 'Save 20%';
                                        }
                                        ?>
                                        <label data-package="<?= esc_attr( $term_item->slug ) ?>" data-price="<?= esc_attr( $price ) ?>" class="nt-kombucha-variations__package-option" data-attribute-name="<?= esc_attr( $term_item->taxonomy ) ?>" data-attribute-id="<?= esc_attr( $term_item->term_id ) ?>">
                                            <div class="nt-kombucha-variations__package-details">
                                                <input type="radio" name="package" class="custom-radio" <?= ( 0 === $index ) ? 'checked' : '' ?>>
                                                <div class="title">
                                                    <p><?= esc_html( strtoupper( $term_item->name ) ) ?></p>
                                                    <?php if ( ! empty( $save_badge ) ) : ?>
                                                        <p class="save-badge"><?= esc_html( $save_badge ) ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <?php if ( $original_price > 0 ) : ?>
                                                <div class="nt-kombucha-variations__price">
                                                    <span class="price-original">$<?= esc_html( $original_price ) ?></span>
                                                     → 
                                                    <span class="price-current">$<?= esc_html( $price ) ?></span>                                                  
                                                </div>
                                            <?php else : ?>
                                                <span class="nt-kombucha-variations__price"><?= esc_html( $price_text ) ?></span>
                                            <?php endif; ?>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                

                <div class="nt-kombucha-variations__group nt-kombucha-variations__group--changer">
                    <label class="nt-kombucha-variations__label">Choose an amount</label>
                    <div class="amount-selector nt-quantity-selector nt-kombucha-variations__quantity">
                        <button id="decrease-amount" class="nt-quantity-selector__btn" type="button">-</button>
                        <span id="amount">1</span>
                        <input type="hidden" name="quantity" value="1" >
                        <button id="increase-amount" class="nt-quantity-selector__btn " type="button">+</button>
                    </div>
                </div>


                <div class="nt-kombucha-variations__action-buttons">
                    <button class="btn  btn--border btn--border_green nt-kombucha-variations__store-btn nt-kombucha-variations__btn" type="button">
                        <span>FIND A STORE</span>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8159 20.6077C16.8509 18.5502 20 15.1429 20 11C20 6.58172 16.4183 3 12 3C7.58172 3 4 6.58172 4 11C4 15.1429 7.14909 18.5502 11.1841 20.6077C11.6968 20.8691 12.3032 20.8691 12.8159 20.6077Z" stroke="#2A4934" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 11C15 12.6569 13.6569 14 12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11Z" stroke="#2A4934" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>

                    <button id="add-to-cart-btn" class="btn btn--theme_leaf nt-kombucha-variations__add-to-cart nt-kombucha-variations__btn single_add_to_cart_button" type="submit">
                        <span class="nt-kombucha-variations__price-chosen">$35</span> | ADD TO CART
                    </button>
                    	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
                    	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
                    	<input type="hidden" name="variation_id" class="variation_id" value="0" />
                </div>
            </form>
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