<?php get_template_part('sections/kombucha-ingredients', '', array(
    'title' => get_field('section_title'),
    'ingredients' => get_field('ingedients'),
    'nutrition_facts' => get_field('nutrition_facts'),
)); ?>

<?php get_template_part('sections/inset', '', array(
    'drink_image' => get_field('drink_image'),
)); ?>

<?php get_template_part('sections/content-images'); ?>

<?php
    $product_id = get_the_ID();
	get_template_part('sections/nt-big-product-slider', null, [
		'title' => 'Explore Our Flavors',
		'all_link' => null,
		'products' => 160,
        'post_not_in' => array($product_id),
	]);
?>

<?php if (get_field('nutrition_facts')):?>
    <?php get_template_part('sections/nutrition-modal', '', array(
        'nutrition_facts' => get_field('nutrition_facts'),
    ));?>
<?php endif;?>