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
		])
	?>

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
		
		<!-- Section Title -->
		<div class="hero-row skinny row section-title-v2">
			<section class="hero-column col-md-12 col-12">
				<h2 class="headline-title"><?php the_field('section_title'); ?></h2>
			</section>
		</div>
		<!-- Section Title -->		
		
		<!-- Split Image Section -->
		<div class="container-full">
		<div class="hero-row skinny row split-image-section desktop-split-image-section">
			
			<section class="headline-column col-md-6 col-6">
			    
				<div class="split-image">
					<img src="<?php the_field('split_group_1_split_image_1'); ?>">
				</div>

				<div class="split-content">
			    <h2 class="headline-title"><?php the_field('split_group_1_split_title_1'); ?></h2>

                <div class="page-link">
                	<a href="<?php the_field('split_group_1_split_link_1'); ?>" class="cta-btn btn-bg-green"><?php the_field('split_group_1_split_text_1'); ?></a>
                </div>
            	</div>

                <!-- <div class="headline-title"></div> -->
                <!-- <div class="page-link"></div> -->
				
			</section>
				
			<section class="hero-column col-md-6 col-6">	            					
				<div class="split-image">
					<img src="<?php the_field('split_group_2_split_image_2'); ?>">
				</div>
				
                <div class="split-content">
	            	<h2 class="headline-title"><?php the_field('split_group_2_split_title_2'); ?></h2>
	            <div class="page-link">
                	<a href="<?php the_field('split_group_2_split_link_2'); ?>" class="cta-btn btn-bg-green"><?php the_field('split_group_2_split_text_2'); ?></a>
                </div>	
                </div>
			</section>
			
		</div>
		</div>
		<!-- Split Image Section -->
		
		<!-- Split Image Section Mobile -->
		<div class="container-full">
		<div class="hero-row skinny row split-image-section mobile-split-image-section">
			
			<section class="headline-column col-md-6 col-6">
			    
				<div class="split-image">
					<img src="<?php the_field('mobile_split_group_1_mobile_split_image_1'); ?>">
				</div>

				<div class="split-content">
			    <h2 class="headline-title"><?php the_field('mobile_split_group_1_mobile_split_title_1'); ?></h2>

                <div class="page-link">
                	<a href="<?php the_field('mobile_split_group_1_mobile_split_link_1'); ?>" class="cta-btn btn-bg-green"><?php the_field('mobile_split_group_1_mobile_split_text_1'); ?></a>
                </div>
            	</div>

                <!-- <div class="headline-title"></div> -->
                <!-- <div class="page-link"></div> -->
				
			</section>
				
			<section class="hero-column col-md-6 col-6">	            					
				<div class="split-image">
					<img src="<?php the_field('mobile_split_group_2_mobile_split_image_2'); ?>">
				</div>
				
                <div class="split-content">
	            	<h2 class="headline-title"><?php the_field('mobile_split_group_2_mobile_split_title_2'); ?></h2>
	            <div class="page-link">
                	<a href="<?php the_field('mobile_split_group_2_mobile_split_link_2'); ?>" class="cta-btn btn-bg-green"><?php the_field('mobile_split_group_2_mobile_split_text_2'); ?></a>
                </div>	
                </div>
			</section>
			
		</div>
		</div>
		<!-- Split Image Section Mobile -->
		
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
		
		<!-- Alternate Section V4 -->
		<div class="hero-row skinny row alternate-block-section-v4">

			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image-4'); ?>">
			</section>
			
			<section class="headline-column col-md-6 col-12">
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
		
		<!-- Instagram -->
		<div class="instagram-section">
				<div class="container-full">
				<h2>Follow us  <span>@joimotea</span></h2>
				
				</div>
		</div>
		<!-- Instagram -->
		
		<!-- Newsletter -->
		<div class="hero-row skinny row newsletter">

			<section class="hero-column col-md-12 col-12">	            					
				<img src="<?php  the_field('newsletter_background_image'); ?>" />
			</section>
			
			<section class="newsletter-container">
			    <?php
			  
					if ( ! is_active_sidebar( 'footer-social-subscribe-v2' ) ) {
						return;
					}
				
				?>  
				<aside id="social-subscribe" class="widget-area">
					<div class="mobile-subcription-img"> 
						<img src="<?php  the_field('newsletter_mobile_image'); ?>" alt="mobile-subcription-img"/>						
					</div>
				    <div id="field_2_2" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
					   <label class="gfield_label" for="input_2_2">Subscribe to Pure Joy</label>
						<p>Stay in the know on new products and special offers</p>
					</div>
					<div class="newsletter-inner-form-block">
						<?php dynamic_sidebar( 'footer-social-subscribe-v2' ); ?>
					</div>
				</aside>
			</section>
			 
		</div> 
		<!-- Newsletter -->

 

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
