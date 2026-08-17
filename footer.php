<footer class="site-footer">

    <div class="footer-copyright">
        © <?php echo date('Y'); ?> AriesTheme
    </div>

    <nav class="footer-navigation">

        <a href="<?php echo esc_url(home_url('/')); ?>">
            ホーム
        </a>

        <a href="<?php echo esc_url(home_url('/#about')); ?>">
            私たちについて
        </a>

        <a href="<?php echo esc_url(home_url('/#service')); ?>">
            サービス
        </a>

        <a href="<?php echo esc_url(home_url('/#works')); ?>">
            制作実績
        </a>

        <a href="<?php echo esc_url(home_url('/#contact')); ?>">
            お問い合わせ
        </a>

    </nav>

    <?php
    $phone = get_theme_mod('aries_phone');
    $address = get_theme_mod('aries_address');
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

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>