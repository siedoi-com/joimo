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


<?php if ( has_term( 'kombucha', 'product_cat' ) ):?>

    <?= get_template_part('sections/kombucha-product-sections') ?>
<?php else:?>

    <?= get_template_part('sections/regular-product-sections') ?>
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

<?php get_footer(); ?>
