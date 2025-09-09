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
?>

	<section class="nt-shop-section">
		<div class="new-container">
			<div class="nt-shop-section__hading nt-section-heading">
                <h2 class="nt-section-heading__title text--h2">Kombucha</h2>
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
							'terms'    => 160,
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

	<section class="nt-shop-section">
		<div class="new-container">
			<div class="nt-shop-section__hading nt-section-heading">
                <h2 class="nt-section-heading__title text--h2">Oolong Tea</h2>
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
							'terms'    => 21,
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

	<section class="nt-shop-section">
		<div class="new-container">
			<div class="nt-shop-section__hading nt-section-heading">
                <h2 class="nt-section-heading__title text--h2">Home and Teaware</h2>
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
							'terms'    => 34,
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

<?php get_footer(); ?>
