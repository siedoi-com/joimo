<style>
    .shop-alert {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 4;
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 3px 14px -11px #2a4934;
        max-width: 820px;
        width: 100%;
        background: <?= get_field('alert_background', 'option') ?>;
        color: <?= get_field('alert_text_color', 'option') ?>
    }

    .shop-alert__close {
        position: absolute;
        top: 10px;
        right: 10px;
        background: transparent;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 0;
        width: 20px;
        height: 20px;
    }

    .shop-alert__content {
        text-align: center;
    }

    .shop-alert__close:focus {
        outline: none !important;
    }

    .shop-alert__close svg {
        width: 100%;
        height: 100%;
        transition: .3s ease-in-out;
    }

    .shop-alert__close svg path {
        fill: <?= get_field('alert_close_button_color', 'option') ?>;
    }

    .shop-alert__close:hover svg {
        transform: rotate(180deg);
    }
</style>

<?php if ( get_field('show_shop_alert_banner', 'option') ): ?>
    <div class="shop-alert">
        <button class="shop-alert__close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
        </button>
        <div class="shop-alert__content"><?= get_field('shop_alert_message', 'option') ?></div>
    </div>
<?php endif ?>

<script>
    jQuery('.shop-alert__close').click(e => {
        jQuery('.shop-alert').fadeOut();
    });
</script>