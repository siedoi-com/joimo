<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: Normal Block Style Page
 * Template Post Type: post
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Joimo_Kombucha
 * RECIPES
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

    <div class="custom_post_template custom_post_alternate_style_template custom_post_normal_block_style_template">
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
      <!-----END TITLE ---------->

      <div class="artical-custom-layout">

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
  
    </div>


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

                <span class="tags"><a href="/explore-recipes-stories/" rel="tag"><?php echo $title_p_tag; ?></a></span>

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

    <!-- End custom post single container -->


	<?php get_footer(); ?>
