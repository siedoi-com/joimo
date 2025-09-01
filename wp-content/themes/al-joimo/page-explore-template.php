<?php
/**
 * Template Name: Explore Page
 * Template Post Type: page
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="explore-page-section  content-area container">
	
	<main id="primary" class="site-main row" role="main">
	
		<section class="content-column col-md-12"> <!-- Content Column -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</section> <!-- Ends Content Column -->
	
	</main><!-- #main -->
	
	</div> <!-- Content Area -->
    <style>
            .explore-page-section .portfolio_thumbnail {
                    opacity: 1;
                    display: block!important;
                    opacity: 0;                    
            }
            .explore-page-section .simplefilter::before {
                content: "FILTER BY";
            }
            .explore-page-section .simplefilter{
                display: flex;
                justify-content: center;
                align-items: center;
            }            
            .explore-page-section .simplefilter #all{                
                background-color: #2A4934!important;
                position: absolute;
                right: 0;                   
                min-width: 130px;                
            }
            .explore-page-section .simplefilter #all span{
                opacity: 0;
            }            
            .explore-page-section .simplefilter #all svg{
                display:none;
            }                        
            .explore-page-section .simplefilter #all.active{
                display:none;             
            }  
            .explore-page-section .simplefilter #all::before {
                content: "clear filter";
                position: absolute;
                left: 0;
                right: 0;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;                
            }                      
            .explore-page-section .simplefilter li svg{
                display:none;              
            }            
            .explore-page-section .simplefilter li.active{
                background-color: #2A4934!important;                
            }
            .explore-page-section .simplefilter li.active:before{
                display:none;
            }
            .explore-page-section .simplefilter li.active svg.svg-inline--fa{                
                display: inline;
                background-image: url(https://joimotea.com/wp-content/uploads/2021/08/Icon_clear.png);
                color: transparent;
                background-size: contain;
                pointer-events: auto!important;
            }   
            .explore-page-section .btn.snip0047:hover {
                background-color: #69e693!important;
            }

            .explore-page-section .btn.snip0047{
                font-family: 'cera_promedium'!important;
                font-weight: normal!important;                
            }
            .fit-in-content{
                position: initial;
                display: flex;
                height: auto;                
            }
            .explore-page-section .filtr-container .filtr-item .post-box .fit-text-main a h3{
                margin-top: 1.39vw !important;
                margin-bottom: 0 !important;
                word-wrap: break-word;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                font-weight: 500;
                font-size: 1.66vw !important;
                line-height: 128%;
                margin-top: 10px;
                min-height: 3vw;                              
            }
            .explore-page-section .filtr-container .filtr-item .post-box .blog_desc{
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }
            .explore-page-section .filtr-container .filtr-item .post-box div[class^='bf_desc_']{
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                margin-top: 0;
                margin-bottom: 1rem;
                font-weight: 400;
                font-size: 1.25vw;
                line-height: 128%;
                color: #221E1F;
                cursor: pointer;
                height: 3.5vw;
            }      
           .explore-page-section .filtr-container .filtr-item .post-box .blog_footer .blog_metaInfo a{
          			pointer-events: none;
      		 }
            .explore-page-section .filtr-container .filtr-item .post-box .fit-in-content {
                transition: .3s ease-in-out;
                background-size: 100% !important;
            }
            .explore-page-section .filtr-container .filtr-item .post-box:hover .fit-in-content {
                background-size: 110% !important;
            }

    @media screen and (max-width: 991px) {
        .explore-page-section .filtr-container .filtr-item .post-box .fit-text-main a h3 {
            font-size: 2.4vw !important;
            min-height: 4vw;
        }

        .explore-page-section .filtr-container .filtr-item .post-box div[class^='bf_desc_'] {
            font-size: 1.8vw;
            height: 4.5vw;
        }

        .explore-page-section .filtr-container .filtr-item .post-box .bf_read_more_div_1 .bf_read_more_1 span {
            font-size: 2vw;
        }
    }

    @media screen and (max-width: 565px) {
        .explore-page-section .filtr-container .filtr-item .post-box .fit-text-main a h3 {
            font-size: 8.5vw !important;
            min-height: 12vw;
        }

        .explore-page-section .filtr-container .filtr-item .post-box div[class^='bf_desc_'] {
            font-size: 4.8vw;
            height: 11.5vw;
            margin-top: 5vw;
        }

        .explore-page-section .filtr-container .filtr-item .post-box .fit-text-main {
            padding-top: 4vw;
        }

        .explore-page-section .filtr-container .filtr-item .post-box .bf_read_more_div_1 .bf_read_more_1 span {
            font-size: 4.5vw;
        }
    }
</style>

<?php get_footer(); ?>
