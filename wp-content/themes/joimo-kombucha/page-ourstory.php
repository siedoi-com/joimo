<?php
/**
 * Template Name: Our story
 * 
 * The template for displaying The Our story
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="container-fluid"> <!-- Container for page title -->
        <h1 class="our-story__title"><?= the_title(); ?></h1>
	</div> <!-- Ends container for page title -->
	
	
	<div class="our-story__container our-story__container--hero-img">
        <img src="<?= get_field('our_story_hero_image', $page->ID) ?>" alt="<?= the_title(); ?>">
    </div>

    <?php
        $lefColContent = get_field('left_col_our_story', $page->ID);
        $leftColImg = $lefColContent['image'];

        $rightColContent = get_field('right_column_our_story', $page->ID);
        $rightColImg = $rightColContent['image'];
    ?>

    <div class="our-story__container our-story__container--content-cols">
        <div class="our-story__col our-story__col--left">
            <div class="out-story__col-content-wr">
                <h2><?= $lefColContent['title'] ?></h2>
            </div>

            <img src="<?= $leftColImg['url'] ?>" alt="">

            <div class="out-story__col-content-wr">
                <?= $lefColContent['content'] ?>
            </div>
        </div>
        <div class="our-story__col our-story__col--right">
            <div class="out-story__col-content-wr">
                <?= $rightColContent['content'] ?>
            </div>
            
            <img src="<?= $rightColImg['url'] ?>">
        </div>
    </div>

<?php get_footer(); ?>
