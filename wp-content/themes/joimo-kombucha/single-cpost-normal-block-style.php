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
 */

get_header();
?>	
    <!-- Begin Custom Post single container -->

    <div class="custom_post_template custom_post_alternate_style_template">
			<!-----START TITLE ---------->
      <div class="title-container single-title-container container">
        <section class="row">
          <?php the_title( '<h2 class="entry-title col-md-12">', '</h2>' ); ?>
          <div class="stories-pill">            
            <?php the_tags( '<span class="tags">', ', ', '</span>' ); ?>
          </div>
        </section>
      </div>
      <!-----END TITLE ---------->
      <div class="banner-tea-and-me">
        <img src="https://joimotea.com/wp-content/uploads/2021/08/About-Tea-_Tea-scaled.jpg" alt="">
      </div>
      <!-----END top banner ---------->
      
      <div class="artical-custom-layout">
        <div class="flex-row">
        <div class="flex-box">
          
          <div class="left">
            <div class="heading">
              <h2>I learned how 
                to re-love tea 
                one sip at a time.</h2>
            </div>
          </div>
          
          <div class="right">
            <div class="discription">
              <div class="right-content">
              <p>I spent my 20s and 30s rushing from one thing to another, whether it was rushing to work, rushing to sit in traffic on the 10 fwy, rushing to a tennis class, or rushing to dinner before the restaurant gave away our table — it was always a rush. Then not by choice, life slowed down ... like my own practice pandemic before the world’s pandemic. As the pace of life slowed, I learned to love things that I missed in the rush of life.</p>
              <p>One of the things that I learned to love again is tea: I started to appreciate the amazing tastes of Taiwanese oolong — again — that reminded me of my childhood.</p>
              </div>
            </div>
          </div>
          
          
        </div>
          
          <div class="second-block">
            <div class="left">
              <div class="img-figure">
                <img src="https://joimotea.com/wp-content/uploads/2021/08/IMAGE_02.jpg" alt="">
              </div>
            </div>
            
            <div class="right">
              <div class="right-text-with-img">
                <div class="right-content">
                <p>My first memories of tea is also a memory that I was a thief. My grandfather would have his own tea ceremony every afternoon at the dining table using a small teapot and pouring it into a small little cup ... I remember several occasions where I run by and “steal” the cup without permission or invitation; he never stopped me from stealing his tea, he would just warn me that it was hot and I needed to be careful. </p>
                </div>

              </div>
              
              <div class="img-figure">
             	<img src="https://joimotea.com/wp-content/uploads/2021/08/image_3.jpg" alt="">
             </div>
              
              
            </div>
            
            <div class="left">
              
              <div class="right-text-with-img">
                <div class="left-content">
                <p>My first memories of tea is also a memory that I was a thief. My grandfather would have his own tea ceremony every afternoon at the dining table using a small teapot and pouring it into a small little cup ... I remember several occasions where I run by and “steal” the cup without permission or invitation; he never stopped me from stealing his tea, he would just warn me that it was hot and I needed to be careful. </p>
                </div>
              </div>
            
            </div>
            
            
            
          </div>
          <!---  end second Block ---->
        
          <div style="clear:both"></div>
          <!---  Third Block ---->
          <div class="third-block">
            <div class="left-column left">
            	<div class="img-figure">
             	<img src="https://joimotea.com/wp-content/uploads/2021/08/The_farm_Image_4.jpg" alt="">
             </div>
            </div>
            <div class="right-column right">
              <div class="vt-content">
                <div class="text right-content">
                  <p>Now if we talk about quality high mountain Taiwanese oolong teas, you’ll hear me refer to it as “Grandpa Tea”: you know, it’s the good stuff grandpas drink.</p>
                  <p>As I grew the tea parties with Grandpa Tea grew less frequent and was eventually replaced with a coffee thing, then a smoothie thing, a boba milk tea thing, wine thing, and with all the rushing everywhere it all blurred together.</p>
                </div>
                
                <h2>“... and it brought me back to having a tea party with my Grandpa again!”</h2>
                
                
              </div>
            </div>
          </div>
            <!---  END Third Block ---->
          
          <div class="forth-block">
            <div class="left">
            		 <div class="left-content">
                <p>Fortuitously, at the same time my life slowed down, my Joimo partner, Allan, casually shared his Grandpa’s tea with me one day ... and it brought me back to having a tea party with my Grandpa again! I love it and it brings such fond memories and I just relish in the quiet of drinking hot tea by myself now. </p>
                </div>
            </div>
            
            <div class="right">
              <div class="img-figure">
                <img src="https://joimotea.com/wp-content/uploads/2021/08/IMAGE_05.jpg" alt="">
              </div>
            </div>
            
             <div class="left">
               <div class="img-figure">
                 <img src="https://joimotea.com/wp-content/uploads/2021/08/images_6.jpg" alt="">
               </div>
            </div>
            
            
            <div class="right">
              <div class="right-content">
                <p>The calmness and the memories that each cup brings makes me more in love with tea. Now I have hot tea I love drinking slowly and ice tea that I grab and go when I must rush. </p>
              </div>
            </div>
            
            
          </div>
          
          
        </div>
        <div style="clear:both"></div>
      </div>
      
      <div class="heading-block-bottom">
        <h2>We wanted to share with you 
our Grandpa Teas and hope 
that you relish them 
as much as we do.</h2>
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

    <!-- End custom post single container -->
	
	<div class="single-container container"> <!-- Begin single container -->
	
		<div id="primary-row" class="content-area row">
			<main id="primary" class="site-main col-md-12 col-sm-12" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-single', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'joimo-kombucha' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'joimo-kombucha' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
	
		</div> <!-- #Primary Wrapper -->
	
	</div> <!-- End single container -->



	<?php get_footer(); ?>
