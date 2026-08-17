<?php get_header(); ?><?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?>

<div class="page-content">

    <?php the_content(); ?>

</div>

<?php
    endwhile;
endif;
?>

<main style="max-width:1200px;margin:40px auto;padding:20px;">
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
    <?php echo esc_html(get_theme_mod('aries_shop_name', '店舗名')); ?>
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
        <a class="hero-button" href="#contact">
            お問い合わせ
        </a>

    </div>

</section>

</main>

<?php get_footer(); ?>

<p class="section-label"><?php echo esc_html(get_theme_mod('aries_service_label', 'SERVICE')); ?></p>

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
            <div class="service-number">01</div>
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
            <div class="service-number">02</div>
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

        <article class="service-card">
            <div class="service-number">03</div>
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

                <a class="about-button" href="#contact">
                    お問い合わせはこちら
                </a>
            </div>

            <div class="about-image">
                <div class="about-image-inner">
                    AriesTheme
                </div>
            </div>

        </div>

    </div>

<section id="contact" class="contact-section">

    <div class="contact-inner">

        <div class="section-heading" style="text-align: <?php echo esc_attr(get_theme_mod('aries_contact_alignment', 'center')); ?>;">
            <p class="section-label"><?php echo esc_html(get_theme_mod('aries_contact_label', 'CONTACT')); ?></p>

            <h2>
                <?php
                echo esc_html(
                    get_theme_mod(
                        'aries_contact_title',
                        'お問い合わせ'
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
                            'ホームページ制作についてお気軽にご相談ください。'
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
                        'ホームページ制作のご相談'
                    )
                );
                ?>
            </h3>

            <p>
                <?php
                echo nl2br(
                    esc_html(
                        get_theme_mod(
                            'aries_contact_box_text',
                            '制作内容・料金・納期など、まずはお気軽にお問い合わせください。'
                        )
                    )
                );
                ?>
            </p>

            <a
                class="contact-button"
                href="mailto:<?php echo esc_attr(get_theme_mod('aries_contact_email', 'example@example.com')); ?>"
            >
                メールでお問い合わせ
            </a>

        </div>

    </div>

</section>
<section id="works" class="works-section">

    <div class="section-inner">

        <div class="section-heading" style="text-align: <?php echo esc_attr(get_theme_mod('aries_works_alignment', 'center')); ?>;">

            <p class="section-label"><?php echo esc_html(get_theme_mod('aries_works_label', 'WORKS')); ?></p>

            <h2><?php echo esc_html(get_theme_mod('aries_works_title', '制作実績')); ?></h2>

            <p>
    <?php echo nl2br(esc_html(get_theme_mod(
        'aries_works_description',
        'これまでに制作したホームページをご紹介します。'
    ))); ?>
            </p>

        </div>


        <div class="works-grid">

            <article class="work-card">

                <div class="work-image">
    <?php
    $work_image_1 = get_theme_mod('aries_work_1_image');

    if ($work_image_1) :
        echo wp_get_attachment_image(
            $work_image_1,
            'large',
            false,
            array(
                'class' => 'work-image-photo'
            )
        );
    else :
    ?>
        <div class="work-image-inner">
            WORK 01
        </div>
    <?php endif; ?>
</div>

                <div class="work-content">

                    <p class="work-category">
    <?php
    echo esc_html(
        get_theme_mod(
            'aries_work_1_category',
            'WEB DESIGN'
        )
    );
    ?>
</p>

                    <h3>
    <?php
    echo esc_html(
        get_theme_mod(
            'aries_work_1_title',
            '美容サロンホームページ'
        )
    );
    ?>
</h3>

                    <p>
    <?php
    echo nl2br(
        esc_html(
            get_theme_mod(
                'aries_work_1_text',
                'サロンの魅力やサービスを分かりやすく伝える、オリジナルホームページ。'
            )
        )
    );
    ?>
</p>

                </div>

            </article>


            <article class="work-card">

              <div class="work-image">
    <?php
    $work_image_2 = get_theme_mod('aries_work_2_image');

    if ($work_image_2) :
        echo wp_get_attachment_image(
            $work_image_2,
            'large',
            false,
            array(
                'class' => 'work-image-photo'
            )
        );
    else :
    ?>
        <div class="work-image-inner">
            WORK 02
        </div>
    <?php endif; ?>
</div>

                <div class="work-content">

                    <p class="work-category">
    <?php
    echo esc_html(
        get_theme_mod(
            'aries_work_2_category',
            'WEB DESIGN'
        )
    );
    ?>
</p>

                    <h3>
    <?php
    echo esc_html(
        get_theme_mod(
            'aries_work_2_title',
            '店舗ホームページ'
        )
    );
    ?>
</h3>

                    <p>
    <?php
    echo nl2br(
        esc_html(
            get_theme_mod(
                'aries_work_2_text',
                'お店の世界観やサービスを整理し、来店につながるホームページ。'
            )
        )
    );
    ?>
</p>

                </div>

            </article>


            <article class="work-card">

                <div class="work-image">
    <?php
    $work_image_3 = get_theme_mod('aries_work_3_image');

    if ($work_image_3) :
        echo wp_get_attachment_image(
            $work_image_3,
            'large',
            false,
            array(
                'class' => 'work-image-photo'
            )
        );
    else :
    ?>
        <div class="work-image-inner">
            WORK 03
        </div>
    <?php endif; ?>
</div>
                <div class="work-content">

                   <p class="work-category">
    <?php
    echo esc_html(
        get_theme_mod(
            'aries_work_3_category',
            'CORPORATE'
        )
    );
    ?>
</p>

                    <h3>
    <?php
    echo esc_html(
        get_theme_mod(
            'aries_work_3_title',
            '企業ホームページ'
        )
    );
    ?>
</h3>

                    <p>
    <?php
    echo nl2br(
        esc_html(
            get_theme_mod(
                'aries_work_3_text',
                '企業の強みやサービスを分かりやすく伝えるコーポレートサイト。'
            )
        )
    );
    ?>
</p>

                </div>

            </article>

        </div>

    </div>

</section>