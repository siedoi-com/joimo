<?php
    $title = $args['title'] ?? null;
    $all_link = $args['all_link'] ?? null;
    $products_cat_id = $args['products'] ?? null;
    $post_not_in = $args['post_not_in'] ?? null;

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

    if ($post_not_in) {
        $args['post__not_in'] = $post_not_in;
    }

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
                        <a href="<?= $all_link['url'] ?>" class="nt-link nt-link--type_def nt-link--theme_dark"<?php if($all_link['target']): ?> target="<?= $all_link['target'] ?>"<?php endif ?>><?= $all_link['title'] ?></a>
                    </div>
                    <!-- /.nt-section-heading__view-all-wr -->
                <?php endif ?>
            </div>
            <!-- /.nt-section-heading -->
        <?php endif ?>

        <?php if ($products_query->have_posts()): ?>
            <div class="nt-big-product-slider__slider-wr">
                <div class="nt-big-product-slider__slider splide" role="group" aria-label="Product slider">
                    <div class="nt-big-product-slider__track splide__track">
                        <ul class="splide__list">
                            <?php
                                while ($products_query->have_posts()):
                                    $products_query->the_post();
                                    $product_id = get_the_ID();
                            ?>
                                <li class="splide__slide">
                                    <?php get_template_part('blocks/big-product', null, [
                                        'product_id' => $product_id
                                    ]) ?>
                                </li>
                            <?php endwhile ?>
                        </ul>
                    </div>

                    <button class="nt-big-product-slider__arrow nt-big-product-slider__arrow--prev">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.33073 25L41.6641 25M8.33073 25L20.8307 37.5M8.33073 25L20.8307 12.5" stroke="#A7988F" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="nt-big-product-slider__arrow nt-big-product-slider__arrow--next">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.6693 25L8.33594 25M41.6693 25L29.1693 37.5M41.6693 25L29.1693 12.5" stroke="#A7988F" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- /.nt-big-product-slider__slider-wr -->
        <?php endif; wp_reset_postdata(); ?>
    </div>
    <!-- /.new-container -->
</section>
<!-- /.nt-big-product-slider -->