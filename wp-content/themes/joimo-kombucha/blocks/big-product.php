<?php
    $product_id = $args['product_id'] ?? null;
    $product = wc_get_product( $product_id );
?>

<a href="<?= get_the_permalink($product_id) ?>" class="nt-big-product">
    <div class="nt-big-product__img-wr">
        <?php if (get_field('custom_product_label')): ?>
            <div class="nt-big-product__badge nt-product-badge nt-product-badge--theme_green nt-product-badge--size_def"><?= get_field('custom_product_label') ?></div>
        <?php endif ?>
        <picture>
            <img src="<?= get_the_post_thumbnail_url($product_id, 'full') ?>" alt="<?= get_the_title($product_id) ?>" class="nt-big-product__img" loading="lazy">
        </picture>
    </div>
    <!-- /.nt-big-product__img-wr -->

    <div class="nt-big-product__content-wr">
        <h4 class="nt-big-product__title"><?= get_the_title($product_id) ?></h4>
        <div class="nt-big-product__desc"><?= the_excerpt($product_id); ?></div>
        <div class="nt-big-product__price price price--size_def price--type_regular">$<?= $product->get_price($product_id) ?></div>
    </div>
    <!-- /.nt-big-product__content-wr -->
</a>
<!-- /.nt-big-product -->