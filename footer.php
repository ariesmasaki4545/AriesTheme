<footer class="site-footer">

    <div class="footer-copyright">
        ©  <?php echo date('Y'); ?> <?php bloginfo('name'); ?>

   <nav class="footer-navigation">

    <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php echo esc_html(get_theme_mod('aries_nav_home', 'ホーム')); ?>
    </a>

    <a href="<?php echo esc_url(home_url('/#about')); ?>">
        <?php echo esc_html(get_theme_mod('aries_nav_about', 'お店について')); ?>
    </a>

    <a href="<?php echo esc_url(home_url('/#menu')); ?>">
        <?php echo esc_html(get_theme_mod('aries_nav_menu', 'メニュー')); ?>
    </a>

    <a href="<?php echo esc_url(home_url('/#gallery')); ?>">
        <?php echo esc_html(get_theme_mod('aries_nav_gallery', 'ギャラリー')); ?>
    </a>

    <a href="<?php echo esc_url(home_url('/#access')); ?>">
        <?php echo esc_html(get_theme_mod('aries_nav_access', 'アクセス')); ?>
    </a>

    <a href="<?php echo esc_url(home_url('/#reservation')); ?>">
        <?php echo esc_html(get_theme_mod('aries_nav_reservation', '予約')); ?>
    </a>


    </nav>

    <?php
$phone = get_theme_mod('aries_shop_phone');
$address = get_theme_mod('aries_shop_address');
?>
    <div class="footer-business-info">

        <?php if ($phone) : ?>

            <p>
                TEL：
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>">
                    <?php echo esc_html($phone); ?>
                </a>
            </p>

        <?php endif; ?>

        <?php if ($address) : ?>

            <p>
                <?php echo nl2br(esc_html($address)); ?>
            </p>

        <?php endif; ?>
        <?php
$hours = get_theme_mod('aries_shop_hours');
?>

<?php if ($hours) : ?>

    <p>
        営業時間：
        <?php echo esc_html($hours); ?>
    </p>

<?php endif; ?>
<?php
$holiday = get_theme_mod('aries_shop_holiday');
?>

<?php if ($holiday) : ?>

    <p>
        定休日：
        <?php echo esc_html($holiday); ?>
    </p>

<?php endif; ?>

    </div>
       

</footer>

<?php wp_footer(); ?>

</body>
</html>