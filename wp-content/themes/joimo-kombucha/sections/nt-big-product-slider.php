<?php
    $title = $args['title'] ?? null;
    $all_link = $args['all_link'] ?? null;
    $products_cat_id = $args['products'] ?? null;

    // Get products
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $products_cat_id,
            ),
        ),
    );

    $products_query = new WP_Query($args);
?>

<section class="nt-big-product-slider">
    <div class="new-container">
        <?php if ($title): ?>
            <div class="nt-big-product-slider__hading nt-section-heading nt-section-heading--type_view-all">
                <div class="nt-section-heading__view-all-wr"></div>
                <!-- /.nt-section-heading__view-all-wr -->
                <h2 class="nt-section-heading__title text--h2"><?= $title ?></h2>
                <!-- /.nt-section-heading__title -->
                <?php if ($all_link): ?>
                    <div class="nt-section-heading__view-all-wr">
                        <a href="<?= $all_link['url'] ?>" class="link link--type_def link--theme_dark"<?php if($all_link['target']): ?> target="<?= $all_link['target'] ?>"<?php endif ?>><?= $all_link['title'] ?></a>
                    </div>
                    <!-- /.nt-section-heading__view-all-wr -->
                <?php endif ?>
            </div>
            <!-- /.nt-section-heading -->
        <?php endif ?>

        <?php if ($products_query->have_posts()): ?>
            <div class="nt-big-product-slider__slider-wr">
                <div class="nt-big-product-slider__slider splide" role="group" aria-label="Product slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                                while ($products_query->have_posts()):
                                    $products_query->the_post();
                                    $product_id = get_the_ID();

                                    $regular_price = null;
                                    $product = wc_get_product( $product_id );
                            ?>
                                <li class="splide__slide">
                                    <a href="<?= get_the_permalink() ?>" class="nt-big-product">
                                        <div class="nt-big-product__img-wr">
                                            <picture>
                                                <img src="<?= get_the_post_thumbnail_url($product_id, 'full') ?>" alt="<?= get_the_title() ?>" class="nt-big-product__img" loading="lazy">
                                            </picture>
                                        </div>
                                        <!-- /.nt-big-product__img-wr -->

                                        <div class="nt-big-product__content-wr">
                                            <h4 class="nt-big-product__title"><?= get_the_title() ?></h4>
                                            <div class="nt-big-product__desc"><?= the_excerpt(); ?></div>
                                            <div class="nt-big-product__price price price--size_def price--type_regular"><?= $product->get_price() ?></div>
                                        </div>
                                        <!-- /.nt-big-product__content-wr -->
                                    </a>
                                    <!-- /.nt-big-product -->
                                </li>
                            <?php endwhile ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.nt-big-product-slider__slider-wr -->
        <?php endif; wp_reset_postdata(); ?>
    </div>
    <!-- /.new-container -->
</section>
<!-- /.nt-big-product-slider -->