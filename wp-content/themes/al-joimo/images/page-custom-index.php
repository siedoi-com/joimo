<?php
/**
 * Template Name: Custom Index Page
 *
 * This is the template that displays a custom Index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header("v2");
?>

	<div class="hero-box container-fluid"> <!-- Container for page title and hero -->
	
		<div class="hero-row skinny row alternate-block-section">
			
			<section class="headline-column col-md-6 col-12">
			    <h2 class="headline-title">
				<?php the_field('title'); ?>
                </h2>

                <div class="headline-title"><?php the_field('subtitle'); ?></div>
                <div class="page-link">
                	<a href="<?php the_field('link_1'); ?>"><?php the_field('text_1'); ?></a>
                </div>
				
			</section>
				
			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image'); ?>" />
			</section>
			
		</div>
		

		<div class="hero-row skinny row alternate-block-section-v2">

			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image-v2'); ?>" />
			</section>
			
			<section class="headline-column col-md-6 col-12">
				<div class="inner-desc">

					<img src="<?php the_field('group_1_image_1'); ?>" />

					<h2 class="headline-title">
					<?php the_field('group_1_title_1'); ?>
					</h2>

					<div class="headline-title"><?php the_field('group_1_subtitle_1'); ?></div>
				</div>
				<div class="inner-desc">

					<img src="<?php the_field('group_2_image_2'); ?>" />

					<h2 class="headline-title">
					<?php the_field('group_2_title_2'); ?>
					</h2>

					<div class="headline-title"><?php the_field('group_2_subtitle_2'); ?></div>
				</div>
				<div class="inner-desc">

					<img src="<?php the_field('group_3_image_3'); ?>" />

					<h2 class="headline-title">
					<?php the_field('group_3_title_3'); ?>
					</h2>

					<div class="headline-title"><?php the_field('group_3_subtitle_3'); ?></div>
				</div>	
			</section>
			
		</div>

		<div class="hero-row skinny row section-title-v2">
			<section class="hero-column col-md-12 col-12">
				<h2 class="headline-title">
					<?php the_field('section_title'); ?>
					</h2>
			</section>
		</div>
		
		<div class="hero-row skinny row split-image-section">
			
			<section class="headline-column col-md-6 col-12">
			    
				<div class="split-image">
					<img src="<?php the_field('split_group_1_split_image_1'); ?>" />
				</div>

			    <h2 class="headline-title">
				<?php the_field('split_group_1_split_title_1'); ?>
                </h2>

                <!-- <div class="headline-title"><?php // the_field('subtitle'); ?></div> -->
                <!-- <div class="page-link"><?php // the_field('shop_now'); ?></div> -->
				
			</section>
				
			<section class="hero-column col-md-6 col-12">	            					
				<div class="split-image">
					<img src="<?php the_field('split_group_2_split_image_2'); ?>" />
				</div>
				<h2 class="headline-title">
				<?php the_field('split_group_2_split_title_2'); ?>
                </h2>
			</section>
			
		</div>


		<div class="hero-row skinny row alternate-block-section-v3">
			
			<section class="headline-column col-md-6 col-12">
			    <h2 class="headline-title">
				<?php the_field('title_v3'); ?>
                </h2>

                <div class="headline-title"><?php the_field('subtitle_v3'); ?></div>
                <!-- <div class="page-link"><?php // the_field('shop_now_v3'); ?></div> -->
				
			</section>
				
			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image-3'); ?>" />
			</section>
			 
		</div>

		<div class="hero-row skinny row alternate-block-section-v4">

			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image-4'); ?>" />
			</section>
			
			<section class="headline-column col-md-6 col-12">
			    <h2 class="headline-title">
				<?php the_field('title_v4'); ?>
                </h2>

                <div class="headline-title"><?php the_field('subtitle_v4'); ?></div>
                <!-- <div class="page-link"><?php // the_field('shop_now_v4'); ?></div> -->
				 
			</section>
			 
		</div>

		<div class="hero-row skinny row newsletter">

			<section class="hero-column col-md-12 col-12">	            					
				<img src="<?php the_field('newsletter_background_image'); ?>" />
			</section>
			
			<section class="headline-column col-md-9 col-12">
			    <?php
					if ( ! is_active_sidebar( 'footer-social-subscribe' ) ) {
						return;
					}
				?>  
				<aside id="social-subscribe" class="widget-area">
					<?php dynamic_sidebar( 'footer-social-subscribe' ); ?>
				</aside>
			</section>
			 
		</div>

 

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
