<?php
/**
 * Template Name: About list
 * 
 * The template for displaying The About list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();

$pagesList = array();

$pagesList[0] = get_field('about_first_page_link', $page->ID);
$pagesList[1] = get_field('about_second_page_link', $page->ID);
$pagesList[2] = get_field('about_third_page_link', $page->ID);

$columnCount = get_field('page_list_columns_count_about', $page->ID);

// var_dump($pagesList);
?>

<style>
    .about-list {
        display: grid;
        grid-gap: 2vw;
        padding: 0 2.78vw 2vw;
        justify-content: center;
        grid-template-rows: 50.7vw;
    }

    .about-list--cols-2 {
        grid-template-columns: repeat(2, 30vw);
    }

    .about-list--cols-3 {
        grid-template-columns: repeat(3, 30vw);
    }

    .about-list-item__img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .about-list-item {
        position: relative;
    }

    .about-list-item__btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #2A4934;
    }

    .about-list-item__btn:hover {
        background: #1D3525;
        color: #fff !important;
    }

    @media screen and (max-width: 959px) {
        .about-list {
            grid-template-rows: 28vw;
        }

        .about-list-item__btn {
            font-size: 15px;
            width: 163px !important;
            padding: 13px 0;
        }
    }

    @media screen and (max-width: 767px) {
        .about-list {
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            padding: 4vw;
            grid-gap: 4vw;
        }
    }
</style>

<div class="about-list about-list--cols-<?= $columnCount ?>">
    <?php foreach ($pagesList as $key => $pageItem): if ($pageItem['show']): ?>
        <div class="about-list-item">
            <picture class="about-list-item__pic-tag">
                <source class="about-list-item__img", media="(min-width:960px)", srcset="<?= $pageItem['block_background_desktop'] ?>") />
                <img class="about-list-item__img", src="<?= $pageItem['block_background_mobile'] ?>") />
            </picture>

            <a class="about-list-item__btn cta-btn btn-bg-green" href="<?= $pageItem['link_to_page'] ?>"><?= $pageItem['page_link_name'] ?></a>
        </div>
    <?php endif; endforeach; ?>
</div>

<?php get_footer(); ?>
