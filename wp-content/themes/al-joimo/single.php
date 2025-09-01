<?php
/**
 * The template for displaying all single posts
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

if (in_category(114)):
?>
	<div class="our-story our-story--post">
		<div class="our-story__container blog-heading">
				<div class="blog-heading__authror">
					<div class="blog-heading__author-avatar">
						<img src="/wp-content/uploads/2022/05/USERPIC.jpg" class="avatar avatar-50 photo" alt="" height="50" width="50">
						<!-- < get_avatar( get_the_author_meta('user_email'), $size = '50'); ?> -->
					</div>
					<div class="blog-heading__post-date"><?= get_the_date( 'd.m.Y' ); ?></div>
				</div>
				<?php the_title( '<h2 class="blog-heading__title">', '</h2>' ); ?>
				<span class="blog-heading__tags"><a href="/explore-recipes-stories/" rel="tag">#<?php echo $title_p_tag; ?></a></span>
		</div>

		<?php if (get_post_thumbnail_id( $post->ID )): ?>
			<div class="our-story__container our-story__container--hero-img">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); ?>
				<img width="100%" src="<?= $image[0] ?>" alt="<?= the_title(); ?>">
			</div>
		<?php endif; ?>

		<div class="our-story__container our-story__container--content-cols">
			<div class="our-story__col our-story__col--left">
				<?php
					$leftColumn = get_field('left_column_sroties', $page->ID);
					foreach ($leftColumn as $leftColumnItem):
				?>
					<?php if ($leftColumnItem['content']): ?>
						<div class="out-story__col-content-wr"><?= $leftColumnItem['content']; ?></div>
					<?php endif; ?>
					<?php if ($leftColumnItem['image']): ?>
						<img src="<?= $leftColumnItem['image']; ?>" alt="">
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<div class="our-story__col our-story__col--right">
				<?php
					$rightColumn = get_field('right_column_stories', $page->ID);
					foreach ($rightColumn as $rightColumnItem):
				?>
					<?php if ($rightColumnItem['text_content_heading_paragraph']): ?>
						<div class="out-story__col-content-wr"><?= $rightColumnItem['text_content_heading_paragraph']; ?></div>
					<?php endif; ?>
					<?php if ($rightColumnItem['image']): ?>
						<img src="<?= $rightColumnItem['image']; ?>" alt="">
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<div class="stories-post-content">
		<?= get_field('stories_bottom_content', $page->ID); ?>
	</div>
<?php elseif(in_category(118)): ?>

    <style>
        .custom_post_normal_block_style_template .wp-block-columns .wp-block-column .mobile {
            display: none;
        }

        @media (max-width: 781px) {
            .custom_post_normal_block_style_template .wp-block-columns.desktop {
                display: none;
            }

            .custom_post_normal_block_style_template .wp-block-columns .wp-block-column .mobile {
                display: block;
            }
        }
    </style>
	 <!-- Begin Custom Post single container -->

	 <div class="custom_post_template custom_post_alternate_style_template custom_post_normal_block_style_template">
			<!-----START TITLE ---------->
      <div class="our-story__container blog-heading">
            <div class="blog-heading__authror"></div>
            <?php the_title( '<h2 class="blog-heading__title">', '</h2>' ); ?>
            <span class="blog-heading__tags"><a href="/explore-recipes-stories/" rel="tag">#<?php echo $title_p_tag; ?></a></span>
      </div>
      <!-----END TITLE ---------->

      <div class="artical-custom-layout">

    <div class="recipe-image">
        <figure class="recipe-image__figure wp-block-image size-large">
            <img class="recipe-image__img" src="<?= get_field('recipes_image', $page->ID) ? get_field('recipes_image', $page->ID) : get_the_post_thumbnail_url($page->ID) ?>">
        </figure>
    </div>
    <?php 
        $leftColumn = get_field('recipe_left_column', $page->ID);
        $rightColumn = get_field('recipe_right_column', $page->ID);
    ?>
        <div class="wp-block-columns desktop" style="margin-bottom: 0;">
            <div class="wp-block-column">
                <?php if ($leftColumn['parmas_vings']): ?>
                    <p><strong><?= $leftColumn['parmas_vings'] ?></strong></p>
                <?php endif; ?>

                <?php if ($leftColumn['params_beelow_content']): ?>
                    <?= $leftColumn['params_beelow_content'] ?>
                <?php endif; ?>
            </div>
            <div class="wp-block-column">
                <?php if ($rightColumn['parmas_vings']): ?>
                    <p><strong><?= $rightColumn['parmas_vings'] ?></strong></p>
                <?php endif; ?>

                <?php if ($rightColumn['params_beelow_content_right']): ?>
                    <?= $rightColumn['params_beelow_content_right'] ?>
                <?php endif; ?>
            </div>
        </div>

      <div class="wp-block-columns recipe-content-most" style="margin-top: 0;">
            
        <div class="wp-block-column"> 
            <div class="mobile">
                <?php if ($leftColumn['parmas_vings']): ?>
                    <p><strong><?= $leftColumn['parmas_vings'] ?></strong></p>
                <?php endif; ?>

                <?php if ($leftColumn['params_beelow_content']): ?>
                    <?= $leftColumn['params_beelow_content'] ?>
                <?php endif; ?>
            </div>    
            <?php if ($leftColumn['title']): ?>
                <h2><?= $leftColumn['title'] ?></h2>
            <?php endif; ?>
            
            <?php if ($leftColumn['content']): ?>
                <?= $leftColumn['content'] ?>
            <?php endif; ?>
        </div>



        <div class="wp-block-column">
            <div class="mobile">
                <?php if ($rightColumn['parmas_vings']): ?>
                    <p><strong><?= $rightColumn['parmas_vings'] ?></strong></p>
                <?php endif; ?>

                <?php if ($rightColumn['params_beelow_content_right']): ?>
                    <?= $rightColumn['params_beelow_content_right'] ?>
                <?php endif; ?>
            </div> 
            <?php if ($rightColumn['title']): ?>
                <h2><?= $rightColumn['title'] ?></h2>
            <?php endif; ?>
            
            <?php if ($rightColumn['content_right']): ?>
                <?= $rightColumn['content_right'] ?>
            <?php endif; ?>



        </div>
</div>
  
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

            $title_p_tag_single = substr($title_p_tag, 0, -1);
        }
    }



    echo '<div class="related_post_section" id="related"><h4>More '. $title_p_tag .'</h4><div class="related_post_list_block">';
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            
              <div class="ncc post_thumbnail_item">
                <div class="post_thumbnail_block">

                <span class="tags"><a href="/explore-recipes-stories/" rel="tag"><?php echo $title_p_tag; ?></a></span>

                <a href="<?php the_permalink()?>">
                    <?php joimo_kombucha_post_thumbnail(); ?>  
                </a>
              </div>
              <div  class="post_thumbnail_info">
                  <h5><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></h5>
                  <a class="post_thumbnail_desc_link" href="<?php the_permalink()?>">
                    <?php the_excerpt(); ?>
                  </a>

                  <a class="post_link_btn" href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" rel="nofollow">SEE THE <?php echo $title_p_tag_single; ?></a>
              </div>

            </div><!--ncc-->
        <?php }
        wp_reset_postdata();
    echo '</div></div><!--related-->';
}
?> 
<?php else: ?>
	<div class="title-container single-title-container container">
		<section class="row">
			<?php the_title( '<h2 class="entry-title col-md-12">', '</h2>' ); ?>
		</section>
	</div>
	
	<div class="single-container container"> <!-- Begin single container -->
	
		<div id="primary-row" class="content-area row">
			<main id="primary" class="site-main col-md-8 col-sm-12" role="main">

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

			<?php get_sidebar(); ?>
	
		</div> <!-- #Primary Wrapper -->
	
	</div> <!-- End single container -->
<?php endif; ?>
	
	<?php get_footer(); ?>
