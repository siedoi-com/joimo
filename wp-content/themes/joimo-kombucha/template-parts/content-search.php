<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'row search-block' ); ?>> <!-- Begin search block -->
	
	
	<section class="col-md-1 col-12"></section> <!-- One Col Spacer -->
	<section class="post-body col-md-10 col-12"> <!-- Body of the search excerpt --> 
	
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			joimo_kombucha_posted_on();
			joimo_kombucha_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php joimo_kombucha_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php joimo_kombucha_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	</section> <!-- Ends body of the search excerpt --> 
	<section class="col-md-1 col-12"></section> <!-- One Col Spacer -->
	
</article><!-- #post-<?php the_ID(); ?> --> <!-- Ends search block -->
