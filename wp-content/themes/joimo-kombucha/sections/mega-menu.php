<?php $menu = $args['menu'] ?? null;?>

<?php if ($menu):?>
<ul class="nt-mega-menu col-md-6 col-4">
    <?php foreach($menu as $menu_item):?>
        <li class="nt-mega-menu__parent-item <?php if ($menu_item['mega_menu']):?>nt-mega-menu__parent-item--mega<?php endif;?>">
            <?php if ($menu_item['parent_item']):?>
                <a href="<?= $menu_item['parent_item']['url'] ?>"><?= $menu_item['parent_item']['title'] ?></a>
            <?php endif;?>
            <?php if ($menu_item['mega_menu']):?>
                <div class="nt-mega-menu__mega-menu">
                    <div class="nt-mega-menu__container">
                        <?php 
                        $mega_sub_menu = $menu_item['mega_sub_menu'];
                        if ($mega_sub_menu['title']):?>
                            <h2 class="nt-mega-menu__title text--h2"><?= $mega_sub_menu['title'] ?></h2>
                        <?php endif;?>
                        <ul class="nt-mega-menu__mega-menu-list">
                            <?php foreach($mega_sub_menu['link_items'] as $mega_item):?>
                                <li class="nt-mega-menu__mega-item">
                                    <a href="<?= $mega_item['link']['url'] ?>">
                                        <?php if ($mega_item['image']):?>
                                            <div class="nt-mega-menu__img">
                                                <picture>
                                                    <img src="<?= $mega_item['image']['url'] ?>" alt="<?= $mega_item['image']['alt'] ?>" loading="lazy" width="202" height="202">
                                                </picture>
                                            </div>
                                        <?php endif;?>
                                        <span><?= $mega_item['link']['title'] ?></span>
                                    </a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            <?php else:?>
                <?php if (is_array($menu_item['sub_menu']) && !empty($menu_item['sub_menu'])):?>
                    <ul class="nt-mega-menu__sub-menu">
                        <?php foreach($menu_item['sub_menu'] as $sub_menu_item):?>
                            <li class="nt-mega-menu__sub-item">
                                <a href="<?= $sub_menu_item['link']['url'] ?>"><?= $sub_menu_item['link']['title'] ?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            <?php endif;?>
        </li>
    <?php endforeach;?>
</ul>
<?php endif;?>