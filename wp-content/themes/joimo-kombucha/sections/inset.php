<?php $drink_img = $args['drink_image'] ?? null; ?>

<section class="inset">
    <div class="inset__title">
        <img src="<?= get_template_directory_uri() ?>/img/j-title.webp" alt="image">
        <h3>Sip the Difference</h3>
        <p>Our kombucha blends rich heritage with a refreshing, sophisticated taste. A delicate oolong base adds complexity, crafted for those who value quality and flavor.</p>
    </div>
    <div class="container">
        <div class="inset__wrapper">
            <div class="inset__wrapper_section">

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-1.webp" alt="image">
                    <h4>Refreshing Kombucha Taste</h4>
                    <p>Refreshing Kombucha Taste</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-2.webp" alt="image">
                    <h4>Full Of Raw And Crafted Probiotics</h4>
                    <p>Infused with nature’s finest,crafted to nurture your whole self.</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-3.webp" alt="image">
                    <h4>Made With Real Fruit</h4>
                    <p>Fresh fruit flavor with every sip.</p>
                </div>

            </div>

            <div class="inset__wrapper_sectionI">
                <div class="inset__wrapper_sectionimg">
                    <?php if ($drink_img):?>
                        <img src="<?= $drink_img['url'] ?>" alt="<?= $drink_img['alt'] ?>" loading="lazy">
                    <?php else:?>
                        <img src="<?= get_template_directory_uri() ?>/img/but.webp" alt="Kombucha bottle" loading="lazy">
                    <?php endif;?>
                </div>
            </div>

            <div class="inset__wrapper_section">

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-4.webp" alt="image">
                    <h4>Delightfully Crisp &amp; Fizzy</h4>
                    <p>An effervescent joy that's asmart alternative to soda</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-5.webp" alt="image">
                    <h4>Made From The Best Oolong Tea</h4>
                    <p>Sourced from the high mountains of Taiwan,home of the world’s best oolong leaves.</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-6.webp" alt="image">
                    <h4>Meticulously Brewed for Quality</h4>
                    <p>A testament to our commitment
                        to perfection in every bottle.</p>
                </div>

            </div>
        </div>
    </div>
</section>