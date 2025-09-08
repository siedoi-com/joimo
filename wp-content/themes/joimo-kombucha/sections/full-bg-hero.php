<?php
    $image_url = $args['image_url'] ?? null;
    $image_alt = $args['image_alt'] ?? null;
    $title = $args['title'] ?? null;
    $text = $args['text'] ?? null;
    $button_url = $args['button_url'] ?? null;
    $button_title = $args['button_title'] ?? null;
?>

<section class="full-bg-hero">
    <?php if ($image_url): ?>
        <div class="full-bg-hero__bg-wr">
            <picture>
                <img src="<?= $image_url ?>" alt="<?= $image_alt ?>" class="full-bg-hero__bg-img">
            </picture>
        </div>
        <!-- /.full-bg-hero__bg-wr -->
    <?php endif ?>

    <div class="full-bg-hero__container new-container--sm">
        <div class="full-bg-hero__content-wr">
            <?php if ($title): ?>
                <h1 class="full-bg-hero__title text--h1"><?= $title ?></h1>
            <?php endif ?>
            <?php if ($text): ?>
                <div class="full-bg-hero__text-wr text--p"><?= $text ?></div>
            <?php endif ?>
            <?php if ($button_url): ?>
                <a href="<?= $button_url ?>" class="full-bg-hero__btn btn btn--theme_leaf"><?= $button_title ?></a>
            <?php endif ?>
        </div>
        <!-- /.full-bg-hero__content-wr -->
    </div>
    <!-- /.full-bg-hero__container new-container--sm -->
</section>
<!-- /.full-bg-hero -->