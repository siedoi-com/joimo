<?php $facts = $args['nutrition_facts'] ?? null ;?>

<?php if ($facts):?>
<div class="nt-nutrition-modal">
    <button type="button" class="nt-nutrition-modal__close">
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 15 15" fill="none">
          <path d="M8.75 4.375L5.625 7.5L8.75 10.625" stroke="white" stroke-opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>Close</span>
    </button>

    <div class="nt-nutrition-modal__content">
        <?php if ($facts['title']):?>
            <h3 class="nt-nutrition-modal__title"><?= $facts['title'] ?></h3>
        <?php endif;?>
        <?php if ($facts['description']):?>
            <div class="nt-nutrition-modal__descr"><?= $facts['description'] ?></div>
        <?php endif;?>
        <?php if ($facts['ingredients']):?>
            <div class="nt-nutrition-modal__ingredients">
                <h4>Ingredients:</h4>
                <?= $facts['ingredients'] ?>
            </div>
        <?php endif;?>
        <?php if (is_array($facts['composition_tables']) && !empty($facts['composition_tables'])):?>
            <div class="nt-nutrition-modal__tables">
                <?php foreach($facts['composition_tables'] as $table):?>
                    <div class="nt-nutrition-modal__table">
                        <div class="nt-nutrition-modal__table-heading">
                            <?php if ($table['title_left']):?>
                                <span><?= $table['title_left'] ?></span>
                            <?php endif;?>
                            <?php if ($table['title_right']):?>
                                <span><?= $table['title_right'] ?></span>
                            <?php endif;?>
                        </div>

                        <?php if ($table['table_image']):?>
                            <div class="nt-nutrition-modal__img">
                                <picture>
                                    <img src="<?= $table['table_image']['url'] ?>" alt="<?= $table['table_image']['alt'] ?>" loading="lazy" width="247">
                                </picture>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
</div>
<?php endif;?>