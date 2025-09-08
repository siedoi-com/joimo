<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Joimo_Kombucha
 */

get_header();
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
  main {
    overflow: hidden;
  }

  text {
    display: none;
  }
</style>

<div class="single-container container">
	<!-- Begin single container -->

	<div id="primary-row" class="content-area row">
		<main id="primary" class="site-main col-md-12 col-sm-12" role="main">

			<?php
			while (have_posts()) :
				the_post();


				if ( has_term( 'kombucha', 'product_cat' ) ) {
                    // If it is, load our custom kombucha content template.
                    wc_get_template( 'content-single-product-kombucha.php' );
                } else {
                    // Otherwise, for all other products, load the default content template.
                    wc_get_template_part( 'content', 'single-product' );
                }
                

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'joimo-kombucha') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'joimo-kombucha') . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
        /*
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
      */
			endwhile; // End of the loop.
			?>


		</main><!-- #main -->

	</div> <!-- #Primary Wrapper -->

</div> <!-- End single container -->


<?php if( get_field('pdp_ab_section_enable') ): ?>   
  <!-- Product Page FARM Section : START -->
<div class="the-farm">
	<div class="container-fluid">
  <?php if( get_field('pdp_ab_section_title') ): ?> 
		<h2><?php the_field('pdp_ab_section_title'); ?></h2>
  <?php endif; ?>   

		<div class="flex-row">

    <?php if( get_field('pdp_ab_left_block_image') ): ?> 
			<div class="col-left">
        <div class="farm-img">
        	<img src="<?php the_field('pdp_ab_left_block_image'); ?>" alt=''>
        </div>
			</div>
    <?php endif; ?>

			<div class="col-right">
      <?php if( get_field('pdp_ab_right_top_block_description') ): ?> 
        <?php the_field('pdp_ab_right_top_block_description'); ?>
      <?php endif; ?>
      
        <div class="former-family">

        <?php if( get_field('pdp_ab_right_block_bottom_title') ): ?> 
          <h2><?php the_field('pdp_ab_right_block_bottom_title'); ?></h2>
        <?php endif; ?>

                <?php if( get_field('pdp_ab_right_block_image') ): ?> 
                  <div class="farm-img">
                    <img src="<?php the_field('pdp_ab_right_block_image'); ?>" alt=''>
                  </div>
              <?php endif; ?>
        </div>
			</div>

				<div class="col-left right-flex">

        <?php if( get_field('pdf_ab_left_block_top_description') ): ?> 
          <div class="right-side-content">
              <?php the_field('pdf_ab_left_block_top_description'); ?>
          </div>
          <?php endif; ?>


          <?php if( get_field('pdf_ab_left_block_additional_info') ): ?> 
          <div class="winner-award-section">
              <?php the_field('pdf_ab_left_block_additional_info'); ?>
					</div>
          <?php endif; ?>

			</div>
<div style="clear:both"></div>
		</div>
    
	</div>
</div>
<!-- Product Page FARM Section : End -->
<?php endif; ?>  



<?php if( get_field('pdp_ab_large_section_enable') ): ?> 
<!-- Product Page LONG FARM Section : Start -->
<div class="the-farm-2">
  <div class="container-fluid">

    <?php if( get_field('pdp_ab_large_section_title') ): ?> 
  	  <h2><?php the_field('pdp_ab_large_section_title'); ?></h2>
    <?php endif; ?>   
    
    <div class="flex-row">
      
    <?php if( get_field('pdp_ab_large_left_block_1_text') ): ?> 
      <div class="left left-flex">
        <div class="left-content">
            <?php the_field('pdp_ab_large_left_block_1_text'); ?>
        </div>
      </div>
    <?php endif; ?> 

    <?php if( get_field('pdp_ab_large_right_block_1_image') ): ?>
      <div class="right">
      	<div class="farm2-img-1">
            <img src="<?php the_field('pdp_ab_large_right_block_1_image'); ?>" alt="">
          </div>
      </div>
    <?php endif; ?> 

    <?php if( get_field('pdp_ab_large_left_block_1_image') ): ?>
      <div class="left">
      		<div class="farm2-img-2">
            <img src="<?php the_field('pdp_ab_large_left_block_1_image'); ?>" alt="">
          </div>
      </div>
    <?php endif; ?> 

    <?php if( get_field('pdp_ab_large_right_block_1_title') ): ?>
      <div class="right">
        <div class="farmer-family-heading">
          <h2><?php the_field('pdp_ab_large_right_block_1_title'); ?></h2>
        </div>
      </div>
    <?php endif; ?> 

    <?php if( get_field('pdp_ab_large_left_block_2_text') ): ?>
      <div class="left" style="clear: left;">
        <div class="left-content left-flex">
          <div class="left-content text-2">
          <?php the_field('pdp_ab_large_left_block_2_text'); ?>          
          </div>
        </div>
      </div>
    <?php endif; ?> 


    <?php if( get_field('pdp_ab_large_right_block_2_image_carousel') ): ?>  
      <div class="right" style="clear: both;">
      	<div class="right-farm-img-slider">            

            <div class="owl-slider">
                <div class="owl-carousel pro_page_image_carousel">

                    <?php if( get_field('pdp_ab_large_right_block_2_image_carousel_image_1') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_right_block_2_image_carousel_image_1'); ?>" alt="">
                      </div>
                    <?php endif; ?> 
              
                    <?php if( get_field('pdp_ab_large_right_block_2_image_carousel_image_2') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_right_block_2_image_carousel_image_2'); ?>" alt="">
                      </div>
                    <?php endif; ?> 

                    <?php if( get_field('pdp_ab_large_right_block_2_image_carousel_image_3') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_right_block_2_image_carousel_image_3'); ?>" alt="">
                      </div>
                    <?php endif; ?> 
                    
                    <?php if( get_field('pdp_ab_large_right_block_2_image_carousel_image_4') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_right_block_2_image_carousel_image_4'); ?>" alt="">
                      </div>
                    <?php endif; ?> 
                    
                    <?php if( get_field('pdp_ab_large_right_block_2_image_carousel_image_5') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_right_block_2_image_carousel_image_5'); ?>" alt="">
                      </div>
                    <?php endif; ?> 

                </div>
            </div>


          </div>
      </div>
    <?php endif; ?> 


    <?php if( get_field('pdp_ab_large_left_block_2_image_carousel') ): ?>  
      <div class="left">
      	<div class="left-farm-img-slider">            

            <div class="owl-slider">
                <div class="owl-carousel pro_page_image_carousel">

                    <?php if( get_field('pdp_ab_large_left_block_2_image_carousel_image_1') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_left_block_2_image_carousel_image_1'); ?>" alt="">
                      </div>
                    <?php endif; ?> 

                    <?php if( get_field('pdp_ab_large_left_block_2_image_carousel_image_2') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_left_block_2_image_carousel_image_2'); ?>" alt="">
                      </div>
                    <?php endif; ?> 
                    
                    <?php if( get_field('pdp_ab_large_left_block_2_image_carousel_image_3') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_left_block_2_image_carousel_image_3'); ?>" alt="">
                      </div>
                    <?php endif; ?> 
                    
                    <?php if( get_field('pdp_ab_large_left_block_2_image_carousel_image_4') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_left_block_2_image_carousel_image_4'); ?>" alt="">
                      </div>
                    <?php endif; ?> 
                    
                    <?php if( get_field('pdp_ab_large_left_block_2_image_carousel_image_5') ): ?> 
                      <div class="item">
                          <img class="owl-lazy" data-src="<?php the_field('pdp_ab_large_left_block_2_image_carousel_image_5'); ?>" alt="">
                      </div>
                    <?php endif; ?>                               
          
                </div>
            </div>


          </div>
      </div>
    <?php endif; ?> 

    <?php if( get_field('pdp_ab_large_right_block_1_text') ): ?>
      <div class="right">
        <div class="right-side-text">
            <?php the_field('pdp_ab_large_right_block_1_text'); ?>          
        </div>
      </div>
    <?php endif; ?> 

      <div style="clear:both"></div>
    </div>
   <!--- end row --->
    
   <?php if( get_field('pdp_ab_large_image_with_text_block') ): ?>

    <div class="award-right-img-with-text">
    	<div class="row">
        
        <div class="col-sm-6 winter-content">
        
           <?php if( get_field('pdp_ab_large_image_with_text_block_left_block_description') ): ?>
                <?php the_field('pdp_ab_large_image_with_text_block_left_block_description'); ?>   
           <?php endif; ?> 

        </div>
        
        <?php if( get_field('pdp_ab_large_image_with_text_block_right_block_image') ): ?>
          <div class="col-sm-6 farm-winner-img">
            <div class="farm2-img-5">
              <img src="<?php the_field('pdp_ab_large_image_with_text_block_right_block_image'); ?>" alt="">
            </div>
          </div>
        <?php endif; ?> 
        
      </div>
    </div>
  <?php endif; ?> 


  </div>
</div>
<!-- Product Page LONG FARM Section : END -->
<?php endif; ?> 

<?php

$bre;

  if (get_field('select_bewing', $post->ID)) {
    $bre = get_field('select_bewing', $post->ID);
  }
?>

<?php if (get_field('select_bewing', $post->ID) && $bre->ID != 2732): ?>
<div class="brewing">

  <h2>Brewing.</h2>

<div class="left-img-with-text brewing__content-to-show" style="margin-top: 30px;" id="brewingShoing">
    <div class="row">

      <div class="col-sm-6 bg-img">
        <div class="farm-img">
          <!-- <img src="https://joimotea.com/wp-content/uploads/2021/07/Image_breawing.jpg" alt=''> -->

          <style>
            .left-img-with-text .bg-img {
              background-image: url(https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2021/07/Image_breawing.jpg);
            }
          </style>

        </div>
      </div>


      <div class="col-sm-6">
        <div class="brewing-feature" id="brewing-inner">
          <!-- Size Section 1 : START -->

          <?php
            $brewingObj = get_field('select_bewing', $post->ID);
            $brewingPageId = $brewingObj->ID;
            $brewingRows = get_field('brewing_types', $brewingPageId);
            $brewingRowsCount = count($brewingRows);
            foreach ($brewingRows as $key => $row):
          ?>

            <div class="feature-size">
              <div class="header-title">
                <span>
                  <img id="brewing-icon" src="<?= $row['icon'] ?>">
                </span>
                <h3><?= $row['title'] ?></h3>
              </div>

              <table class="<?php if ($key == $brewingRowsCount - 1) echo 'third-tbl' ?>">
                <tbody>
                  <tr>
                    <th>Tea</th>
                    <th>Water</th>
                    <th>Temp</th>
                    <?php if ($key !== $brewingRowsCount - 1): ?>
                      <th>Steep</th>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td><?= $row['tea'] ?></td>
                    <td><?= $row['water'] ?></td>
                    <td><?= $row['temp'] ?></td>
                    <?php if ($key !== $brewingRowsCount - 1): ?>
                      <td>
                        <?php foreach ($row['steep'] as $step_key => $step): ?>
                          <?php if ($step_key !== 0): ?>
                            <br>
                          <?php endif; ?>
                          <?= $step['step'] ?>
                        <?php endforeach; ?>
                      </td>
                    <?php endif; ?>
                  </tr>
                </tbody>
              </table>
              
              <?php if ($key == $brewingRowsCount - 1): ?>
                <table>
                  <tbody>
                    <tr>
                      <th>Steep</th>
                    </tr>
                      <?php foreach ($row['steep'] as $key => $step): ?>
                        <tr>
                          <td>
                            <?= $step['step'] ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              <?php endif; ?>
            </div>

          <?php 
            endforeach;
          ?>


          <!-- Size Section : End -->



        </div>
      </div>
    </div>
  </div>

</div>
</div>
<?php endif; ?>


<?php
			while (have_posts()) :
				the_post();

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

<?php get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>\
function getWidth() {
  return Math.max(
    document.body.scrollWidth,
    document.documentElement.scrollWidth,
    document.body.offsetWidth,
    document.documentElement.offsetWidth,
    document.documentElement.clientWidth
  );
}
  if (getWidth > 700) {
    jQuery('#pa_year-season').select2({
      // minimumResultsForSearch: Infinity
      // minimumResultsForSearch: -1
    });
  }
</script>