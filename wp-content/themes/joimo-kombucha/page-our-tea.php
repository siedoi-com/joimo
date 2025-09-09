<?php
/**
 * Template Name: Our tea page
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
        color: #221E1F;
        cursor: pointer;
    }

    .our-tea-post__img-wr {
        height: 22.6vw;
        overflow: hidden;
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
        -webkit-line-clamp: 4;
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

    .our-tea-posts__more-btn {
        display: none;
    }

    .our-team-map__img {
        width: 100%;
    }

    .our-team-map__img--mobile {
        display: none;
    }

    .our-tea-post:hover .our-tea-post__img {
        transform: scale(1.1);
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

        .our-tea-post:nth-child(4), .our-tea-post:nth-child(5), .our-tea-post:nth-child(6) {
            display: none;
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

    <div class="our-tea-posts__items">
        <?php 
            // $loop = new WP_Query( array( 'post_type' => 'our-tea', 'posts_per_page' => 6, 'order' => 'DESC' ) ); 

            // while ( $loop->have_posts() ) : $loop->the_post();
            $items = get_field('items_our_tea', $page->ID);

            foreach($items as $item):
                $img = $item['image'];
                // var_dump($img);
        ?>
            <article class="our-tea-posts__item our-tea-post">
                <div class="our-tea-post__img-wr">
                    <img class="our-tea-post__img" src="<?= $img ?>" alt="" loading="lazy">
                </div>
                <h3 class="our-tea-post__title"><?= $item['title'] ?></h3>
                <div class="our-tea-post__short-desc"><?= $item['content'] ?></div>
                <button class="our-tea-post__read-more">READ MORE</button>
            </article>
            <!-- /.our-tea-posts__item our-tea-post -->
            <!-- <div class="entry-content">
                the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
                < the_content(); ?>
            </div> -->
        <?php endforeach; ?>
    </div>
    <!-- /.our-tea-posts__items -->

    <button class="our-tea-posts__more-btn" id="more-tea-items">see more</button>
</div>

<div class="our-team-map">
    <img src="<?= get_field('bottom_image_about_tea', $page->ID) ?>" alt="" class="our-team-map__img our-team-map__img--desktop">
    <img src="<?= get_field('bottom_image_mobile_our_tea', $page->ID) ?>" alt="" class="our-team-map__img our-team-map__img--mobile">
</div>

<!-- Pop Up window -->
<div id="ourTeaModal" class="our-tea-modal">
    <div class="our-tea-modal__inner">
        <button class="our-tea-modal__close">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="19.3218" width="27.325" height="2.02407" rx="1.01204" transform="rotate(-45 0 19.3218)" fill="white"/>
                <rect width="27.325" height="2.02407" rx="1.01204" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 20.7529 19.3218)" fill="white"/>
            </svg>
        </button>

        <div class="our-tea-modal__img-wr">
            <img class="our-tea-modal__img" src="https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2022/05/IMAGE_POPUP.jpg" alt="" loading="lazy">
        </div>
        
        <div class="our-tea-modal__content-wr">
            <h3 class="our-tea-modal__title">Taiwanese tea culture</h3>
            <div class="our-tea-modal__desc">
                <p>Taiwan has been a premier tea growing region for over 250 years. The relatively high humidity, abundant moisture, and warm temperatures make Taiwanese mountains a supremely suitable climate for tea plants cultivation. “High Mountain” refers to prized teas that are grown on the lush Taiwanese mountains at altitudes over 3000 feet above sea level. Taiwanese teas are known for their complex flavors, aromas and aftertastes and are frequently called “the champagne of teas” by chefs and tea enthusiasts everywhere.</p>
                <p>Taiwan abounds in tea culture. Its tea houses are world renowned. All have the perfect environment to enjoy tea ritual and the subtle tasting notes of the local and varied brews.</p>
            </div>
        </div>

    </div>
    <!-- ENd inner -->
</div>
<!-- End PopUp -->

<script>
    jQuery('.our-tea-post').click( function() {
        const parent = jQuery(this);

        const imgUrl = parent.find('.our-tea-post__img').attr('src'),
            title = parent.children('.our-tea-post__title').html(),
            desc = parent.children('.our-tea-post__short-desc').html();

        openModal(imgUrl, title, desc);
    });

    jQuery('.our-tea-modal__close').click(function() {
        closeModal();
    });

    jQuery('.our-tea-modal').click(function() {
        closeModal();
    });

    jQuery('.our-tea-modal__inner').click(function(e) {
        e.stopPropagation();
    });

    function openModal(img, title, desc) {
        jQuery('.our-tea-modal__img').attr('src', img);
        jQuery('.our-tea-modal__title').html(title);
        jQuery('.our-tea-modal__desc').html(desc);

        jQuery('#ourTeaModal').fadeIn();
        jQuery('body').addClass('scroll-disable');
    }

    function closeModal() {
        jQuery('#ourTeaModal').fadeOut();
        jQuery('body').removeClass('scroll-disable');
    }

    jQuery('#more-tea-items').click(function() {
        jQuery('.our-tea-post').fadeIn();
        jQuery('#more-tea-items').fadeOut();
    });
</script>

<?php get_footer(); ?>
