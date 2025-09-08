<?php get_template_part('sections/ingredients'); ?>
<?php get_template_part('sections/inset', '', array(
    'drink_image' => get_field('drink_image'),
)); ?>
<?php get_template_part('sections/content-images'); ?>

<?php

	get_template_part('sections/nt-big-product-slider', null, [
		'title' => 'Explore Our Flavors',
		'all_link' => null,
		'products' => 160,
	]);
?>