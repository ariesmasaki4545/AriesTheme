<?php get_header(); ?>


<main>
<section
    class="hero"
    style="
        background: <?php echo esc_attr(get_theme_mod('aries_hero_background', '#111')); ?>;
        color: <?php echo esc_attr(get_theme_mod('aries_hero_text_color', '#ffffff')); ?>;
        text-align: <?php echo esc_attr(get_theme_mod('aries_hero_alignment', 'center')); ?>;
    "
>

   <div class="hero-content" style="text-align: <?php echo esc_attr(get_theme_mod('aries_hero_alignment', 'center')); ?>;">

        <p class="hero-label">
    <?php echo esc_html(get_theme_mod(
        'aries_hero_label',
        'ORIGINAL WEB DESIGN'
    )); ?>
</p>

        <h1>
         
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_hero_title',
        'あなたのビジネスを、もっと魅力的に。'
    ))); ?>
</h1>
        

<p class="hero-text" style="text-align: inherit;">
    <?php echo nl2br(esc_html(get_theme_mod(
       'aries_hero_text',
'デザインと機能性を両立した、オリジナルホームページを制作します。'
    ))); ?>
</p>
      <a class="hero-button" href="<?php echo esc_url(get_theme_mod('aries_hero_button_url', '#contact')); ?>">
    <?php echo esc_html(get_theme_mod(
        'aries_hero_button',
        'お問い合わせ'
    )); ?>
</a>

    </div>

</section>


<section id="menu" class="menu-section">

    <div class="section-inner">

        <div class="section-heading">
            <p class="section-label">
    <?php echo esc_html(get_theme_mod('aries_menu_label', 'MENU')); ?>
</p>

<h2>
    <?php echo esc_html(get_theme_mod('aries_menu_title', 'メニュー')); ?>
</h2>
        </div>

        <div class="menu-grid">

            <?php for ($i = 1; $i <= 6; $i++) : ?>

                <?php
                $menu_name = get_theme_mod('aries_menu_' . $i . '_name');
                $menu_description = get_theme_mod('aries_menu_' . $i . '_description');
                $menu_price = get_theme_mod('aries_menu_' . $i . '_price');
                $menu_image = get_theme_mod('aries_menu_' . $i . '_image');
                $menu_category = get_theme_mod('aries_menu_' . $i . '_category');
?>

                <?php if ($menu_name) : ?>
                    <?php if ($menu_category) : ?>
    <p class="menu-category">
        <?php echo esc_html($menu_category); ?>
    </p>
<?php endif; ?>

                    <article class="menu-card <?php echo get_theme_mod('aries_menu_' . $i . '_recommended', false) ? 'is-recommended' : ''; ?>">
                        <?php if (get_theme_mod('aries_menu_' . $i . '_recommended', false)) : ?>
    <div class="menu-recommended">
        おすすめ
    </div>
<?php endif; ?>

                        <?php if ($menu_image) : ?>

                            <div class="menu-image">
                                <?php
                                echo wp_get_attachment_image(
                                    $menu_image,
                                    'large',
                                    false,
                                    array(
                                        'class' => 'menu-image-photo'
                                    )
                                );
                                ?>
                            </div>

                        <?php endif; ?>

                        <div class="menu-content">

                            <h3>
                                <?php echo esc_html($menu_name); ?>
                            </h3>

                            <?php if ($menu_description) : ?>
                                <p>
                                    <?php echo nl2br(esc_html($menu_description)); ?>
                                </p>
                            <?php endif; ?>

                            <?php if ($menu_price) : ?>
                                <p class="menu-price">
                                    <?php echo esc_html($menu_price); ?>
                                </p>
                            <?php endif; ?>

                        </div>

                    </article>

                <?php endif; ?>

            <?php endfor; ?>

        </div>

    </div>

</section>
<section id="access" class="access-section">

    <div class="section-inner">

        <div class="section-heading">

            <p class="section-label">
                <?php echo esc_html(get_theme_mod('aries_access_label', 'ACCESS')); ?>
            </p>

            <h2>
                <?php echo esc_html(get_theme_mod('aries_access_title', 'アクセス')); ?>
            </h2>

        </div>

        <?php
        $access_map_url = get_theme_mod('aries_access_map_url');
        ?>

        <?php if ($access_map_url) : ?>

            <div class="access-map">
                <iframe
                    src="<?php echo esc_url($access_map_url); ?>"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
           <div class="access-info">

    <p>
        <strong>住所</strong><br>
        <?php echo esc_html(get_theme_mod('aries_shop_address', '')); ?>
    </p>

    <p>
        <strong>電話番号</strong><br>
        <a href="tel:<?php echo esc_attr(get_theme_mod('aries_shop_phone', '')); ?>">
            <?php echo esc_html(get_theme_mod('aries_shop_phone', '')); ?>
        </a>
    </p>

    <p>
        <strong>営業時間</strong><br>
        <?php echo esc_html(get_theme_mod('aries_shop_hours', '')); ?>
    </p>
    <p>
    <strong>定休日</strong><br>
    <?php echo esc_html(get_theme_mod('aries_shop_holiday', '')); ?>
</p>

</div> 

        <?php endif; ?>

    </div>

</section>

<section id="reservation" class="reservation-section">

    <div class="section-inner">

        <div class="section-heading">

            <p class="section-label">
                <?php echo esc_html(get_theme_mod('aries_reservation_label', 'RESERVATION')); ?>
            </p>

            <h2>
                <?php echo esc_html(get_theme_mod('aries_reservation_title', 'ご予約・お問い合わせ')); ?>
            </h2>

        </div>

        <div class="reservation-box">

            <p>
                お電話・LINE・予約サイトからお気軽にご予約ください。
            </p>

            <?php
            $reservation_url = get_theme_mod('aries_reservation_url');
            ?>

            <?php if ($reservation_url) : ?>

                <a
                    class="reservation-button"
                    href="<?php echo esc_url($reservation_url); ?>"
                    target="_blank"
                    rel="noopener noreferrer">

                    <?php echo esc_html(get_theme_mod('aries_reservation_button', '予約する')); ?>

                </a>

            <?php else : ?>

                <a
                    class="reservation-button"
                    href="tel:<?php echo esc_attr(get_theme_mod('aries_shop_phone', '')); ?>">

                    <?php echo esc_html(get_theme_mod('aries_reservation_button', '電話で予約する')); ?>

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>

<section id="sns" class="sns-section">

    <div class="section-inner">

        <div class="section-heading">

            <p class="section-label">SNS</p>

            <h2>SNS</h2>

        </div>

        <div class="sns-links">

            <?php
            $instagram = get_theme_mod('aries_sns_instagram');
            $facebook  = get_theme_mod('aries_sns_facebook');
            $x         = get_theme_mod('aries_sns_x');
            ?>

            <?php if ($instagram) : ?>
                <a
                    class="sns-link"
                    href="<?php echo esc_url($instagram); ?>"
                    target="_blank"
                    rel="noopener noreferrer">
                    Instagram
                </a>
            <?php endif; ?>

            <?php if ($facebook) : ?>
                <a
                    class="sns-link"
                    href="<?php echo esc_url($facebook); ?>"
                    target="_blank"
                    rel="noopener noreferrer">
                    Facebook
                </a>
            <?php endif; ?>

            <?php if ($x) : ?>
                <a
                    class="sns-link"
                    href="<?php echo esc_url($x); ?>"
                    target="_blank"
                    rel="noopener noreferrer">
                    X
                </a>
            <?php endif; ?>

        </div>

    </div>

</section>


<section id="gallery" class="gallery-section">

    <div class="section-inner">

        <div class="section-heading">
            <p class="section-label">
    <?php echo esc_html(get_theme_mod('aries_gallery_label', 'GALLERY')); ?>
</p>

<h2>
    <?php echo esc_html(get_theme_mod('aries_gallery_title', '店舗ギャラリー')); ?>
</h2>
        </div>

        <div class="gallery-grid">

            <?php for ($i = 1; $i <= 6; $i++) : ?>

                <?php
                $gallery_image = get_theme_mod('aries_gallery_' . $i);
                ?>

                <?php if ($gallery_image) : ?>

                    <div class="gallery-item">

                        <?php
                        echo wp_get_attachment_image(
                            $gallery_image,
                            'large',
                            false,
                            array(
                                'class' => 'gallery-image'
                            )
                        );
                        ?>

                    </div>

                <?php endif; ?>

            <?php endfor; ?>

        </div>

    </div>

</section>
<section id="service" class="service-section">

    <div class="section-heading" style="text-align: <?php echo esc_attr(get_theme_mod('aries_service_alignment', 'center')); ?>;">

            <p class="section-label">SERVICE</p>
        <h2><?php echo esc_html(get_theme_mod('aries_service_heading', 'サービス')); ?></h2>
       <p>
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_service_description',
        'ビジネスに合わせたホームページを制作します。'
    ))); ?>
</p>
    </div>

    <div class="service-grid">

        <article class="service-card">
            
            <h3>
    <?php echo esc_html(get_theme_mod(
        'aries_service_1_title',
        'ホームページ制作'
    )); ?>
</h3>

<p>
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_service_1_text',
        'お店や企業の魅力が伝わる、オリジナルホームページを制作します。'
    ))); ?>
</p>
        </article>

        <article class="service-card">
        
            <h3>
    <?php echo esc_html(get_theme_mod(
        'aries_service_2_title',
        'スマートフォン対応'
    )); ?>
</h3>

<p>
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_service_2_text',
        'パソコンだけでなく、スマートフォンでも見やすいサイトを制作します。'
    ))); ?>
</p>
</article>

        <article class="service-card">
           
            <h3>
    <?php echo esc_html(get_theme_mod(
        'aries_service_3_title',
        'サイト運用サポート'
    )); ?>
</h3>

<p>
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_service_3_text',
        '公開後の更新やコンテンツ追加など、継続的なサイト運用をサポートします。'
    ))); ?>
</p>
        </article>

    </div>

</section>

<section id="about" class="about-section">

    <div class="about-inner">

       <div class="about-heading" style="text-align: <?php echo esc_attr(get_theme_mod('aries_about_alignment', 'center')); ?>;">
            <p class="section-label"><?php echo esc_html(get_theme_mod('aries_about_label', 'ABOUT')); ?></p>
            <h2>
    <?php echo esc_html(get_theme_mod(
        'aries_about_title',
        '私たちについて'
    )); ?>
</h2>
        </div>

        <div class="about-content">

            <div class="about-text">
                <h3>
    <?php echo esc_html(get_theme_mod(
        'aries_about_heading',
        '想いを、伝わるカタチへ。'
    )); ?>
</h3>

                <p>
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_about_text_1',
        '私たちは、デザインだけではなく、そのホームページを見た人に何を伝えるのかを大切にしています。'
    ))); ?>
</p>

                <p>
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_about_text_2',
        'お店や企業それぞれの魅力を整理し、分かりやすく、使いやすく、長く育てられるホームページを制作します。'
    ))); ?>
</p>

              <a class="about-button" href="<?php echo esc_url(get_theme_mod('aries_about_button_url', '#reservation')); ?>">
    <?php echo esc_html(get_theme_mod(
        'aries_about_button',
        '予約・お問い合わせはこちら'
    )); ?>
</a>
            </div>

            <div class="about-image">

    <?php
    $about_image = get_theme_mod('aries_about_image');
    ?>

    <?php if ($about_image) : ?>

        <img
            src="<?php echo esc_url(wp_get_attachment_image_url($about_image, 'large')); ?>"
            alt="<?php echo esc_attr(get_theme_mod('aries_about_title', '私たちについて')); ?>"
        >

    <?php else : ?>

        <div class="about-image-inner">
            AriesTheme
        </div>

    <?php endif; ?>

</div>

                </div>

    </div>

</section>

<section id="contact" class="contact-section">

    <div class="contact-inner">

        <div class="section-heading" style="text-align: <?php echo esc_attr(get_theme_mod('aries_contact_alignment', 'center')); ?>;">
            <p class="section-label"><?php echo esc_html(get_theme_mod('aries_contact_label', 'CONTACT')); ?></p>

            <h2>
                <?php
                echo esc_html(
                    get_theme_mod(
                        'aries_contact_title',
                        'ご予約・お問い合わせ'
                    )
                );
                ?>
            </h2>

            <p>
                <?php
                echo nl2br(
                    esc_html(
                        get_theme_mod(
                            'aries_contact_text',
                            
'ご予約・お問い合わせはこちらからどうぞ。'
                        )
                    )
                );
                ?>
            </p>

        </div>


        <div class="contact-box">

            <h3>
                <?php
                echo esc_html(
                    get_theme_mod(
                       'aries_contact_box_title',
'ご予約・お問い合わせ'
                    )
                );
                ?>
            </h3>
            <p class="shop-phone">
    TEL：
    <a href="tel:<?php echo esc_attr(get_theme_mod('aries_shop_phone', '000-0000-0000')); ?>">
        <?php echo esc_html(get_theme_mod('aries_shop_phone', '000-0000-0000')); ?>
    </a>
</p>
<p class="shop-address">
    住所：
    <?php echo esc_html(get_theme_mod('aries_shop_address', '〒000-0000 新潟県○○市○○')); ?>
</p>
<p class="shop-hours">
    営業時間：
    <?php echo esc_html(get_theme_mod('aries_shop_hours', '11:00〜21:00')); ?>
</p>

            <p>
                <?php
                echo nl2br(
                    esc_html(
                        get_theme_mod(
                           'aries_contact_box_text',
'ご予約やお問い合わせについて、お気軽にご連絡ください。'
                        )
                    )
                );
                ?>
            </p>

            <a
                class="contact-button"
                href="<?php echo esc_url(get_theme_mod('aries_contact_button_url', 'mailto:example@example.com')); ?>"
            >
                <?php echo esc_html(get_theme_mod(
    'aries_contact_button',
    'メールでお問い合わせ'
)); ?>
            </a>

        </div>

    </div>

</section>

</main>

<?php get_footer(); ?>