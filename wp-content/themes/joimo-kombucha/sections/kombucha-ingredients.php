<?php $section_title = $args['title'] ?? null;
$ingredients = $args['ingredients'] ?? array();
$nut_fatcs = $args['nutrition_facts'] ?? null;
?>

<section class="Ingredients">
    <div class="ingredients__heading">
        <?php if ($section_title):?>
            <div class="Ingredients__title">
                <h2>Ingredients.</h2>
            </div>
        <?php endif;?>
        <?php if ($nut_fatcs):?>
            <button type="button" class="ingredients__btn">
                <span>Nutrition Facts</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                  <path d="M12 17V16.9929M12 14.8571C12 11.6429 15 12.3571 15 9.85714C15 8.27919 13.6568 7 12 7C10.6567 7 9.51961 7.84083 9.13733 9M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        <?php endif;?>
    </div>

    <?php if (is_array($ingredients) && !empty($ingredients)): ?>
    <div class="Ingredients__content">
        <?php foreach($ingredients as $in):?>
            <div class="Ingredients__content_img">

                <?php if ($in['image']):?>
                    <img src="<?= $in['image']['url'] ?>" alt="image">
                <?php endif;?>

                <div class="Ingredients__content_img-title">

                    <?php if ($in['title']):?>
                        <h3><?= $in['title'] ?></h3>
                    <?php endif;?>

                    <?php if ($in['description']):?>
                        <p><?= $in['description'] ?></p>
                    <?php endif;?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <?php endif;?>
</section>