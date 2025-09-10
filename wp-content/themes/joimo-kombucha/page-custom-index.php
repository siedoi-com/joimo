<?php
/**
 * Template Name: Custom Index Page V2
 *
 * This is the template that displays a custom Index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header("");
?>
	<?php
		get_template_part('sections/full-bg-hero', null, [
			'image_url' => get_field('full_background_hero')['background_image']['url'],
			'image_alt' => get_field('full_background_hero')['background_image']['alt'],
			'title' => get_field('full_background_hero')['title'],
			'text' => get_field('full_background_hero')['text'],
			'button_url' => get_field('full_background_hero')['button']['url'],
			'button_title' => get_field('full_background_hero')['button']['title'],
		]);

		$product_slider_group = get_field('product_slider');
		$product_slider_title = $product_slider_group['title'] ?? null;
		$product_slider_all_link = $product_slider_group['view_all_link'] ?? null;
		$product_slider_products = $product_slider_group['products_category'] ?? null;
		get_template_part('sections/nt-big-product-slider', null, [
			'title' => $product_slider_title,
			'all_link' => $product_slider_all_link,
			'products' => $product_slider_products
		]);
	?>

<?php get_template_part('sections/inset', '', array(
    'custom_section' => get_field('advantages_of_kombucha'),
)) ?>

<?php get_template_part('sections/kombucha-ingredients', '', array(
    'title' => get_field('ingredients_title'),
    'ingredients' => get_field('ingredients'),
)); ?>



<!-- Alternate Section V4 -->
<div class="hero-row skinny row alternate-block-section-v4">

<section class="hero-column col-md-6 col-12">	            					
	<img src="<?php the_field('block-image-4'); ?>">
</section>

<section class="headline-column headline-column--content col-md-6 col-12">
	<div class="section-left-inner-container">
	<h2 class="headline-title"><?php the_field('title_v4'); ?></h2>

	<p><?php the_field('subtitle_v4'); ?></p>
	<div class="page-link">
		<a href="<?php the_field('link_v4'); ?>" class="cta-btn btn-white-outline"><?php the_field('text_v4'); ?></a>
	</div> 
	</div>
</section>
 
</div>
<!-- Alternate Section V4 -->

	<div id="top_hero_section" class="hero-box container-fluid"> <!-- Container for page title and hero -->				
		<!-- Alternate Block Section -->
		<div class="hero-row skinny row alternate-block-section">
			<section class="headline-column col-md-6 col-12">
			<div class="hero-inner">
				<h2 class="headline-title">
				<?php the_field('title'); ?>   </h2>

                <p class="hero-text"><?php the_field('subtitle'); ?></p>
                <div class="page-link">
                	<a href="<?php the_field('link_1'); ?>" class="cta-btn btn-bg-gray"><?php the_field('text_1'); ?></a>
                </div>
			
			</div>
			</section>
				
			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image'); ?>">
			</section>
			
		</div>
		<!-- Alternate Block Section --> 	
		
		
		<!-- Alternate Section V3 -->
		<div class="hero-row skinny row alternate-block-section-v3">
			
			<section class="headline-column col-md-6 col-12">
			<div class="section-inner-container">
			    <h2 class="headline-title"><?php the_field('title_v3'); ?></h2>

                <p><?php the_field('subtitle_v3'); ?></p>
				<div class="page-link">
                	<a href="<?php the_field('link_v3'); ?>" class="cta-btn btn-outline"><?php the_field('text_v3'); ?></a>
                </div>
			</div>
			</section>
				
			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image-3'); ?>">
			</section>
			 
		</div>
		<!-- Alternate Section V3 -->

		<div class="hero-row skinny row section-title-v2">
			<section class="hero-column col-md-12 col-12">
				<h2 class="headline-title">Shop Pure. Joy.</h2>
			</section>
		</div>

		<!-- Split 3 Column Image Section : Start -->
		<div class="container-full-width hero-3-column-image-section">
				<div class="hero-row skinny row split-image-section desktop-split-image-section">
					
					<section class="headline-column col-md-4 col-4">
						
						<div class="split-image">
							<picture>
								<img class="desktop_img_block" src="<?php the_field('split_3_column_group_1_split_image'); ?>">
								<!-- <img class="mobile_img_block" src="< the_field('split_3_column_group_1_split_image_mobile'); ?>"> -->
							</picture>
						</div>

						<div class="split-content">						

							<div class="page-link">
								<a href="<?php the_field('split_3_column_group_1_split_link'); ?>" class="cta-btn btn-bg-green"><?php the_field('split_3_column_group_1_split_text'); ?></a>
							</div>
						</div>
						
					</section>
						
					<section class="hero-column col-md-4 col-4">	            					
						<div class="split-image">
							<picture>
								<img class="desktop_img_block" src="<?php the_field('split_3_column_group_2_split_image'); ?>">
								<!-- <img class="mobile_img_block" src="< the_field('split_3_column_group_2_split_image_mobile'); ?>"> -->
							</picture>
						</div>
						
						<div class="split-content">							
						<div class="page-link">
							<a href="<?php the_field('split_3_column_group_2_split_link'); ?>" class="cta-btn btn-bg-green"><?php the_field('split_3_column_group_2_split_text'); ?></a>
						</div>	
						</div>
					</section>

					<section class="headline-column col-md-4 col-4">
						
						<div class="split-image">
							<picture>
								<img class="desktop_img_block" src="<?php the_field('split_3_column_group_3_split_image'); ?>">
								<!-- <img class="mobile_img_block" src="< the_field('split_3_column_group_3_split_image_mobile'); ?>"> -->
							</picture>
						</div>

						<div class="split-content">						

							<div class="page-link">
								<a href="<?php the_field('split_3_column_group_3_split_link'); ?>" class="cta-btn btn-bg-green"><?php the_field('split_3_column_group_3_split_text'); ?></a>
							</div>
						</div>
						
					</section>					

					
				</div>
		</div>
		<!-- Split 3 Column Image Section : End -->	
		
        <?php get_template_part('sections/instagram');?>
        <?php get_template_part('sections/newsletter');?>


 

	</div> <!-- Ends container for page title hero -->
	
	<div class="content-area container-fluid">
	
	<main id="primary" class="site-main skinny row" role="main">
	
		<section class="content-column col-md-12"> <!-- Content Column -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page-sb' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</section> <!-- Ends Content Column -->
	
	</main><!-- #main -->
	
	</div> <!-- Content Area -->

<?php get_footer("v2"); ?>