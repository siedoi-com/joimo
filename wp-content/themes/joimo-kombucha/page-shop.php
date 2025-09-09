<?php
/**
 * Template Name: Custom Shop Page
 *
 * This is the template that displays a custom shop.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
$product_sections = get_field('categories');
if (is_array($product_sections) && !empty($product_sections)):
?>

    <div class="nt-shop-headline">
        <div class="new-container nt-shop-headline__container ">
            <?php if (get_field('title')):?>
                <div class="nt-section-heading">
                    <h1 class="nt-shop-headline__title nt-section-heading__title text--h2"><?= get_field('title') ?></h1>
                </div>
            <?php endif; ?>
            
            <div class="nt-shop-headline__filters">
                <?php
                    $product_counts = wp_count_posts('product');
                    $total_published_products = $product_counts->publish;
                ?>
                <button class="btn nt-shop-headline__btn active" data-target="all">View all(<?= $total_published_products ?>)</button>

                <?php foreach($product_sections as $cat):?>
                    
                    <?php $cat_id = $cat['products_category']; 
                    $term = get_term($cat_id, 'product_cat');
                    if ($term && !is_wp_error($term)) :?>
                    <button class="btn nt-shop-headline__btn" data-target="<?= $term->slug ?>"><?php if ($cat['title']):?><?= $cat['title'] ?>(<?= $term->count ?>)<?php else:?><?php echo esc_html($term->name); ?>(<?= $term->count ?>)<?php endif;?></button>
                    <?php endif; ?>
                <?php endforeach;?>
            </div>
        </div>
    </div>

    <div class="nt-shop-sections-wrapper">
        <?php foreach($product_sections as $cat):?>
        <?php 
            $cat_id = $cat['products_category'];
            $term = get_term($cat_id, 'product_cat');?>
    	<section class="nt-shop-section" id="<?= $term->slug ?>">
    		<div class="new-container nt-shop-section__container">
    			<div class="nt-shop-section__hading nt-section-heading">
                    <?php if ($cat['title']):?>
                        <h2 class="nt-section-heading__title text--h2"><?= $cat['title'] ?></h2>
                    <?php endif; ?>
                </div>
                <!-- /.nt-section-heading -->
                    
    			<?php
                    
    				$args = array(
    					'post_type'      => 'product',
    					'posts_per_page' => -1,
    					'tax_query'      => array(
    						array(
    							'taxonomy' => 'product_cat',
    							'field'    => 'term_id',
    							'terms'    => $cat_id,
    						),
    					),
    				);
    			
    				$products_query = new WP_Query($args);
    			?>

    			<?php if ($products_query->have_posts()): ?>
    				<div class="nt-shop-section__products-wr">
    					<?php
    						while ($products_query->have_posts()):
    							$products_query->the_post();
    							$product_id = get_the_ID();
    					?>
    						<?php get_template_part('blocks/big-product', null, [
    							'product_id' => $product_id
    						]) ?>
    					<?php endwhile ?>
    				</div>
    				<!-- /.nt-shop-section__products-wr -->
    			<?php endif; wp_reset_postdata(); ?>
    		</div>
    		<!-- /.new-container -->
    	</section>
    	<!-- /.shop-section -->
        <?php endforeach;?>
    </div>

<?php endif; ?>

<?php get_template_part('sections/instagram');?>
<?php get_template_part('sections/newsletter');?>

<?php get_footer(); ?>
