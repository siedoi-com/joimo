<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: Alternate Block Style Page
 * Template Post Type: post
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Joimo_Kombucha
 */

get_header();

$title_p_tag = "";

$posttags = get_the_tags();
if ($posttags)
{
    $first=true;
    foreach($posttags as $tag) 
    {
        if($first)
        {                
            $title_p_tag = str_replace("#","",$tag->name); 
            $first=false;
        }
        else
        {                
            $title_p_tag = str_replace("#","",$tag->name); 
        }
    }
}

?>    	
    <!-- Begin Custom Post single container -->

    <div class="our-story__container">
			<!-----START TITLE ---------->
      <div class="our-story__container blog-heading">
            <div class="blog-heading__authror">
                <?php if (!in_category(117) && !in_category( 118 )): ?>
                  <div class="blog-heading__author-avatar">
                    <img src="/wp-content/uploads/2022/05/USERPIC.jpg" class="avatar avatar-50 photo" alt="" height="50" width="50">
                      <!-- < get_avatar( get_the_author_meta('user_email'), $size = '50'); ?> -->
                  </div>
                  <div class="blog-heading__post-date"><?= get_the_date( 'd.m.Y' ); ?></div>
                <?php endif; ?>
            </div>
            <?php the_title( '<h2 class="blog-heading__title">', '</h2>' ); ?>
            <span class="blog-heading__tags"><a href="/explore-recipes-stories/" rel="tag">#<?php echo $title_p_tag; ?></a></span>
      </div>

      <div class="inner-custom-layout">

        <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'joimo-kombucha' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'joimo-kombucha' ),
                    'after'  => '</div>',
                )
            );
            ?>
  
      </div>

<?php if( get_field('post_ab_large_section_enable') ): ?> 

      <?php if( get_field('post_ab_full_width_image_banner') ): ?> 
      <!-----END TITLE ---------->
      <div class="banner-tea-and-me">
        <img src="<?php the_field('post_ab_full_width_image_banner'); ?>" alt="<?php the_title(); ?>">
      </div>
      <!-----END top banner ---------->
      <?php endif; ?>

      <div class="artical-custom-layout">
        <div class="flex-row">
        <div class="flex-box">
          
        <?php if( get_field('post_ab_left_block_1_title') ): ?>
          <div class="left">
            <div class="heading">
              <h2><?php the_field('post_ab_left_block_1_title'); ?></h2>
            </div>
          </div>
          <?php endif; ?>

          <?php if( get_field('post_ab_right_block_1_text') ): ?>
          <div class="right">
            <div class="discription">
              <div class="right-content">
              <?php the_field('post_ab_right_block_1_text'); ?>
              </div>
            </div>
          </div>
          <?php endif; ?>
          
        </div>
          
          <div class="second-block">

            <?php if( get_field('post_ab_large_left_block_1_image') ): ?>
            <div class="left">
              <div class="img-figure">
                <img src="<?php the_field('post_ab_large_left_block_1_image'); ?>" alt="">
              </div>
            </div>
            <?php endif; ?>

            <div class="right">

              <?php if( get_field('post_ab_large_right_block_2_text') ): ?>
              <div class="right-text-with-img">
                <div class="right-content">
                <?php the_field('post_ab_large_right_block_2_text'); ?>                
                </div>
              </div>
              <?php endif; ?>

              <?php if( get_field('post_ab_large_left_block_2_image') ): ?>
              <div class="img-figure">
             	<img src="<?php the_field('post_ab_large_left_block_2_image'); ?>" alt="">
             </div>
             <?php endif; ?>
              
            </div>
            
            <?php if( get_field('post_ab_large_left_block_3_text') ): ?>
            <div class="left">
                          
              <div class="right-text-with-img">
                <div class="left-content">
                <?php the_field('post_ab_large_left_block_3_text'); ?>                
                </div>
              </div>            
            </div>
            <?php endif; ?>
            
            
            
          </div>
          <!---  end second Block ---->
        
          <div style="clear:both"></div>
          <!---  Third Block ---->
          <div class="third-block">

          <?php if( get_field('post_ab_large_right_block_1_image') ): ?>
            <div class="left-column left">
            	<div class="img-figure">
             	<img src="<?php the_field('post_ab_large_right_block_1_image'); ?>" alt="">
             </div>
            </div>
          <?php endif; ?>

          
            <div class="right-column right">
              <div class="vt-content">

              <?php if( get_field('post_ab_large_left_block_2_text') ): ?>
                <div class="text right-content">
                <?php the_field('post_ab_large_left_block_2_text'); ?>
                </div>
              <?php endif; ?>
              
              <?php if( get_field('post_ab_large_right_block_1_title') ): ?>
                <h2><?php the_field('post_ab_large_right_block_1_title'); ?></h2>
              <?php endif; ?>                
                
              </div>
            </div>
          </div>
            <!---  END Third Block ---->
          
          <div class="forth-block">

          <?php if( get_field('post_ab_left_block_4_text') ): ?>
            <div class="left">
            		 <div class="left-content">
                 <?php the_field('post_ab_left_block_4_text'); ?>                
                </div>
            </div>
          <?php endif; ?>

          <?php if( get_field('post_ab_right_block_4_image') ): ?>
            <div class="right">
              <div class="img-figure">
                <img src="<?php the_field('post_ab_right_block_4_image'); ?>" alt="">
              </div>
            </div>
          <?php endif; ?>

          <?php if( get_field('post_ab_left_block_4_image') ): ?>
             <div class="left">
               <div class="img-figure">
                 <img src="<?php the_field('post_ab_left_block_4_image'); ?>" alt="">
               </div>
            </div>
          <?php endif; ?>  

            
          <?php if( get_field('post_ab_right_block_4_text') ): ?>          
            <div class="right">
              <div class="right-content">
              <?php the_field('post_ab_right_block_4_text'); ?>                
              </div>
            </div>
          <?php endif; ?>              

            
          </div>
          
          
        </div>
        <div style="clear:both"></div>
      </div>
      
    <?php if( get_field('post_ab_bottom_title_block') ): ?>          
      <div class="heading-block-bottom">
        <h2><?php the_field('post_ab_bottom_title_block'); ?></h2>
      </div>
      <?php endif; ?>  


<?php endif; ?>
      
      
    </div>

    <!-- End custom post single container -->


    <?php
$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
    'post__not_in'        => array( get_queried_object_id() ),
    'posts_per_page'      => 2,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'post_tag',
            'terms'    => $tags
        ]
    ]
];
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {

    $title_p_tag = "";

    $posttags = get_the_tags();
    if ($posttags)
    {
        $first=true;
        foreach($posttags as $tag) 
        {
            if($first)
            {                
                $title_p_tag = str_replace("#","",$tag->name); 
                $first=false;
            }
            else
            {                
                $title_p_tag = str_replace("#","",$tag->name); 
            }
        }
    }



    echo '<div class="related_post_section" id="related"><h4>More '. $title_p_tag .'</h4><div class="related_post_list_block">';
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            
              <div class="ncc post_thumbnail_item">
                <div class="post_thumbnail_block">
              <?php the_tags( '<span class="tags">', ', ', '</span>' ); ?>
                <?php joimo_kombucha_post_thumbnail(); ?>  
              </div>
              <div  class="post_thumbnail_info">
                  <h5><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></h5>
                  <?php the_excerpt(); ?>

                  <a class="post_link_btn" href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" rel="nofollow">SEE THE <?php echo $title_p_tag; ?></a>
              </div>

            </div><!--ncc-->
        <?php }
        wp_reset_postdata();
    echo '</div></div><!--related-->';
}
?> 




	<?php get_footer(); ?>
