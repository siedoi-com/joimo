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

get_header("v2");
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

<style>
	.inset {
  background: #ededeb;
}
.inset__title {
  margin: 0 28%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 80px 0 60px 0;
  color: #221e1f;
}
.inset__title img {
  margin-bottom: 40px;
}
.inset__title h3 {
  font-family: Noe Display;
  font-weight: 500;
  font-style: Medium;
  font-size: 48px;
  line-height: 100%;
  letter-spacing: 0;
  text-align: center;
  margin-bottom: 15px;
}
.inset__title p {
  font-family: Cera Pro;
  font-weight: 400;
  font-size: 18px;
  line-height: 100%;
  letter-spacing: 0;
  text-align: center;
}
.inset__wrapper {
  display: flex;
}
.inset__wrapper_section {
  margin-top: 150px;
}
.inset__wrapper_sectionimg {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  height: 800px;
  width: 700px;
}
.inset__wrapper_sectionimg img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  position: absolute;
  left: 8%;
  top: 0;
}
.inset__section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}
.inset__section h4 {
  margin: 20px 0 5px 0;
  color: #2a4934;
  font-family: Noe Display;
  font-weight: 500;
  font-size: 24px;
  line-height: 100%;
  letter-spacing: 0;
  vertical-align: bottom;
}
.inset__section p {
  color: #7c7c7c;
  font-family: Cera Pro;
  font-weight: 500;
  font-style: Medium;
  font-size: 14px;
  line-height: 120%;
  letter-spacing: 0;
  margin-bottom: 50px;
}
.Ingredients {
  margin-top: 100px;
  padding-bottom: 8rem;
    border-bottom: .1rem solid #EDEDEB;
}
.Ingredients__title {
  margin-bottom: 30px;
  text-align: center;
}
.Ingredients__title h2 {
  color: #221e1f;
  font-family: Noe Display;
  font-weight: 500;
  font-style: Medium;
  font-size: 48px;
  line-height: 100%;
  letter-spacing: 0;
}
.Ingredients__content {
  display: flex;
  width: 100%;
}
.Ingredients__content_img {
  position: relative;
  width: 100%;
  height: 740px;
}
.Ingredients__content_img img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  position: absolute;
}
.Ingredients__content_img-title {
  position: absolute;
  top: 78%;
  left: 0;
  padding: 0 40px 40px 40px;
  z-index: 2;
}
.Ingredients__content_img-title h3 {
  margin-right: 15%;
  font-family: Noe Display;
  font-weight: 500;
  font-size: 22px;
  line-height: 100%;
  letter-spacing: 0;
  margin-bottom: 20px;
}
.Ingredients__content_img-title p {
  font-family: Cera Pro;
  font-weight: 500;
  font-style: Medium;
  font-size: 14px;
  line-height: 120%;
  letter-spacing: 0;
  color: #7c7c7c;
}
@media screen and (max-width: 992px) {
.inset__wrapper_section {
    margin-top: 20px;
    width: 40%;
    margin-left: auto;
    margin-right: auto;
  }
  .inset__wrapper_sectionI {
    display: none;
  }
  .Ingredients__content {
    flex-direction: column;
  }
  .Ingredients__content_img {
    height: 440px;
  }
  .Ingredients__content_img-title {
    top: 68%;
  }
}
</style>
<section class="inset">
    <div class="inset__title">
        <img src="<?= get_template_directory_uri() ?>/img/j-title.webp" alt="image">
        <h3>Sip the Difference</h3>
        <p>Our kombucha blends rich heritage with a refreshing, sophisticated taste. A delicate oolong base adds complexity, crafted for those who value quality and flavor.</p>
    </div>
    <div class="container">
        <div class="inset__wrapper">
            <div class="inset__wrapper_section">

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-1.webp" alt="image">
                    <h4>Refreshing Kombucha Taste</h4>
                    <p>Refreshing Kombucha Taste</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-2.webp" alt="image">
                    <h4>Full Of Raw And Crafted Probiotics</h4>
                    <p>Infused with nature’s finest,crafted to nurture your whole self.</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-3.webp" alt="image">
                    <h4>Made With Real Fruit</h4>
                    <p>Fresh fruit flavor with every sip.</p>
                </div>

            </div>

            <div class="inset__wrapper_sectionI">
                <div class="inset__wrapper_sectionimg">
                    <img src="<?= get_template_directory_uri() ?>/img/but.webp" alt="image">
                </div>
            </div>

            <div class="inset__wrapper_section">

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-4.webp" alt="image">
                    <h4>Delightfully Crisp &amp; Fizzy</h4>
                    <p>An effervescent joy that's asmart alternative to soda</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-5.webp" alt="image">
                    <h4>Made From The Best Oolong Tea</h4>
                    <p>Sourced from the high mountains of Taiwan,home of the world’s best oolong leaves.</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-6.webp" alt="image">
                    <h4>Meticulously Brewed for Quality</h4>
                    <p>A testament to our commitment
                        to perfection in every bottle.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="Ingredients">
    <div class="Ingredients__title">
        <h2>Ingredients.</h2>
    </div>
    <div class="Ingredients__content">
        <div class="Ingredients__content_img">
            <img src="<?= get_template_directory_uri() ?>/img/ingr1.webp" alt="image">
            <div class="Ingredients__content_img-title">
                <h3>True Oolong, Mountain Grown, Masterfully Crafted</h3>
                <p>Sourced from Taiwan’s high mountains, our rare oolong is cultivated by award-winning tea masters.</p>
            </div>
        </div>

        <div class="Ingredients__content_img">
            <img src="<?= get_template_directory_uri() ?>/img/ingr2.webp" alt="image">
            <div class="Ingredients__content_img-title">
                <h3>Real Fruit, Peak-Ripened, Purely Crafted</h3>
                <p>Made from sun-ripened fruit, pureed or juiced is crafted to preserve vibrant flavor, natural sweetness, and nothing artificial—just real fruit at its best.</p>
            </div>
        </div>

        <div class="Ingredients__content_img">
            <img src="<?= get_template_directory_uri() ?>/img/ingr3.webp" alt="image">
            <div class="Ingredients__content_img-title">
                <h3>Organic Cane Sugar, Fuel For The Cultures</h3>
                <p>Cane sugar is the essential fuel that powers fermentation, feeding the live cultures that bring kombucha to life.</p>
            </div>
        </div>

    </div>
</section>

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