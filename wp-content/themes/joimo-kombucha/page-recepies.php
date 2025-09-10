<?php
/**
 * Template Name: Recepies and stories page
 * 
 * The template for displaying Our tea page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();

?>

<style>
    body.scroll-disable {
        overflow: hidden;
    }

    body.scroll-disable::-webkit-scrollbar {
       display: none;
    }

    button:focus {
        outline: none;
    }

    .our-tea-posts {
        padding: 2.7vw 2.7vw 5.5vw;
    }

    .our-tea-posts, .our-tea-modal {
        font-family: 'Cera Pro';
    }

    h1, h2, h3 {
        font-family: 'Noe Display';
    }

    .our-tea-posts__heading {
        text-align: center;
    }

    .our-tea-posts__title {
        font-weight: 500;
        font-size: 3.3vw;
        line-height: 127%;
        color: #221E1F;
    }

    .our-tea-posts__subtitle {
        margin: 1.39vw auto 0;
        max-width: 794px;
        font-size: 1.25vw;
        line-height: 127%;
        font-weight: 400;
    }

    .our-tea-posts__items {
        margin-top: 3.47vw;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 2.7vw 2vw;
    }

    .our-tea-post {
        text-align: center;
        color: #221E1F !important;
        text-decoration: none !important;
        cursor: pointer;
    }

    .our-tea-post:hover {
        color: #221E1F !important;
    }

    .our-tea-post__img-wr {
        height: 22.6vw;
        overflow: hidden;
        position: relative;
    }

    .our-tea-post__img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .3s ease-in-out;
    }

    .our-tea-post__title {
        margin-top: 1.39vw;
    }

    .our-tea-post__title, .our-tea-modal__title {
        font-weight: 500;
        font-size: 1.66vw;
        line-height: 128%;
    }

    .our-tea-post__short-desc {
        margin-top: 5px;
        max-width: 100%;
        text-overflow: ellipsis;
        /* white-space: nowrap; */
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .our-tea-post__short-desc, .our-tea-modal__desc {
        font-weight: 400;
        font-size: 1.25vw;
        line-height: 128%;
    }

    .our-tea-post__read-more {
        margin-top: 1.04vw;
        border: none;
        background: transparent;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 1.18vw;
        line-height: 118%;
        color: #7C7C7C;
        transition: .3s ease;
    }

    .our-tea-post__read-more:hover {
        color: #2A4934;
    }

    .our-tea-post__tag {
        position: absolute;
        left: 10px;
        top: 10px;
        color: #FFFFFF!important;
        font-weight: normal;
        font-family: 'cera_promedium'!important;
        background: rgba(42, 73, 52, 0.4);
        border-radius: 30px;
        padding: 5px 15px;
        font-size: 14px;
        text-transform: uppercase;
        z-index: 2;
    }

    .our-tea-modal {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255, .75);
        z-index: 9999;
        text-align: center;
        display: none;
    }

    .our-tea-modal__inner {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        /* max-height: 80vh; */
        width: 46vw;
        background: #FFFFFF;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .our-tea-modal__close {
        padding: 0;
        position: absolute;
        top: 1.39vw;
        right: 1.39vw;
        width: 21px;
        height: 21px;
        border: none;
        background: transparent;
    }

    .our-tea-modal__close svg {
        width: 100%;
        height: 100%;
    }

    .our-tea-modal__close svg rect {
        transition: .3s ease;
    }

    .our-tea-modal__close:hover svg rect {
        fill: #2A4934;
    }

    .our-tea-modal__img-wr {
        height: 22.64vw;
        border-radius: 5px 5px 0 0px;
        overflow: hidden;
    }

    .our-tea-modal__img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .our-tea-modal__content-wr {
        padding: 2.08vw;
        max-height: 43vh;
        overflow-y: auto;
    }

    .our-tea-modal__desc {
        margin-top: 1.39vw;
    }

    /* .our-tea-posts__more-btn {
        display: none;
    } */

    .our-team-map__img {
        width: 100%;
    }

    .our-team-map__img--mobile {
        display: none;
    }

    .our-tea-post:hover .our-tea-post__img {
        transform: scale(1.1);
    }

    .our-tea-posts__more-btn {
        display: block;
        margin-top: 8vw;
        width: 100%;
        background: #2A4934;
        border-radius: 29.5px;
        text-transform: uppercase;
        font-weight: 4.53vw;
    }

    @media screen and (max-width: 991px) {
        .our-tea-posts__title {
            font-size: 4.3vw;
        }

        .our-tea-posts__subtitle {
            font-size: 2vw;
        }

        .our-tea-posts__items {
            grid-template-columns: repeat(2, 1fr);
        }

        .our-tea-post__img-wr {
            height: 28vh;
        }

        .our-tea-post__title, .our-tea-modal__title {
            font-size: 2.8vw;
        }

        .our-tea-post__short-desc, .our-tea-modal__desc {
            font-size: 2vw;
        }

        .our-tea-post__read-more {
            font-size: 2.18vw;
        }

        .our-tea-modal__inner {
            width: 84vw;
        }

        .our-tea-modal__img-wr {
            height: 50vw;
        }
    }

    @media screen and (max-width: 576px) {
        .our-tea-posts {
            padding: 6.66vw 4vw 10.66vw;
        }

        .our-tea-posts__title {
            font-size: 8.53vw;
        }

        .our-tea-posts__subtitle {
            margin-top: 4.53vw;
            font-size: 4.8vw;
            text-align: left;
        }

        .our-tea-posts__items {
            margin-top: 8vw;
            grid-template-columns: 1fr;
            grid-gap: 8vw;
        }

        .our-tea-post__img-wr {
            height: 69.6vw;
        }

        .our-tea-post__title {
            margin-top: 5.3vw;
            margin-bottom: 0;
        }

        .our-tea-post__title, .our-tea-modal__title {
            font-size: 6.4vw;
        }

        .our-tea-post__short-desc, .our-tea-modal__desc {
            font-size: 4.8vw;
        }

        .our-tea-post__read-more {
            font-size: 4.53vw;
        }

        .our-tea-modal__img-wr {
            height: 57.3vw;
        }

        .our-tea-modal__content-wr {
            max-height: 60vh;
            padding: 5.3vw;
        }

        /* .our-tea-post:nth-child(4), .our-tea-post:nth-child(5), .our-tea-post:nth-child(6) {
            display: none;
        } */

        .our-team-map__img--desktop {
            display: none;
        }

        .our-team-map__img--mobile {
            display: block;
        }
    }
</style>

<div class="our-tea-posts">
    <div class="our-tea-posts__heading">
        <h1 class="our-tea-posts__title"><?= the_title() ?></h1>
        <div class="our-tea-posts__subtitle"><?= the_content() ?></div>
    </div>
    <!-- End heading -->

    <?php
        $tags = get_tags();
        // var_dump($tags);
    ?>

    <div class="explore-filters">
        <div class="explore-filters__tags">
            <span class="explore-filters__tags-title">Filter by: </span>
            <div class="explore-filters__tags-wrapper">
                <?php
                    foreach ($tags as $tag):
                ?>
                    <button class="btn explore-filters__btn explore-filters__tag-item disable" data-termid="<?= $tag->term_id ?>">
                        <span><?= $tag->name ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.explore-filters__tags -->
        <button class="btn explore-filters__btn explore-filters__clear-filters">Clear filters</button>
    </div>

    <div class="our-tea-posts__items">
        <?php 
            $args = array(
                'tag__in' => array( 96, 97, 98 ),
                'posts_per_page' => 9,
                'paged' => 1,
                'order' => 'DESC',
                'post_status' => 'publish',
            );
            $the_query = new WP_Query( $args );

            while ( $the_query->have_posts() ):
                $the_query->the_post();
                if (has_post_thumbnail( $post->ID ) ) {
                    $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                }

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

                        // $title_p_tag_single = substr($title_p_tag, 0, -1);
                    }
                }
        ?>
            <a class="our-tea-posts__item our-tea-post" href="<?= get_permalink() ?>">
                <div class="our-tea-post__img-wr">
                    <img class="our-tea-post__img" src="<?= $post_image[0] ?>" loading="lazy">
                    <span class="our-tea-post__tag">#<?= $title_p_tag ?></span>
                </div>
                <h3 class="our-tea-post__title"><?= the_title() ?></h3>
                <div class="our-tea-post__short-desc"><?= get_the_excerpt() ?></div>
                <button class="our-tea-post__read-more">READ MORE</button>
            </a>
        <?php endwhile; ?>
    </div>
    <!-- /.our-tea-posts__items -->

</div>
<!-- <button class="our-tea-posts__more-btn" id="more-tea-items">see more</button> -->

<div class="explore-recipes-preloader">
    <img src="/wp-content/uploads/2022/06/ezgif-1-33999a320e.gif">
</div>


<?php get_footer(); ?>
