<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header
    class="site-header"
    style="
        background:<?php echo esc_attr(get_theme_mod('aries_header_background', '#111111')); ?>;
        color:<?php echo esc_attr(get_theme_mod('aries_header_text_color', '#ffffff')); ?>;
    "
>

    <div
        class="header-inner"
        style="
            text-align:<?php echo esc_attr(get_theme_mod('aries_header_alignment', 'left')); ?>;
        "
    >

        <?php
        $site_logo = get_theme_mod('aries_site_logo');

        if ($site_logo) :
        ?>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                <?php
                echo wp_get_attachment_image(
                    $site_logo,
                    'full',
                    false,
                    array(
                        'class' => 'site-logo-image',
                        'alt'   => get_bloginfo('name'),
                    )
                );
                ?>
            </a>

        <?php else : ?>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                <?php bloginfo('name'); ?>
            </a>

        <?php endif; ?>


        <nav class="site-navigation">

            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo esc_html(get_theme_mod('aries_nav_home', 'ホーム')); ?>
            </a>

            <a href="<?php echo esc_url(home_url('/#about')); ?>">
                <?php echo esc_html(get_theme_mod('aries_nav_about', '私たちについて')); ?>
            </a>

            <a href="<?php echo esc_url(home_url('/#service')); ?>">
                <?php echo esc_html(get_theme_mod('aries_nav_service', 'サービス')); ?>
            </a>

            <a href="<?php echo esc_url(home_url('/#works')); ?>">
                <?php echo esc_html(get_theme_mod('aries_nav_works', '制作実績')); ?>
            </a>

            <a href="<?php echo esc_url(home_url('/#contact')); ?>">
                <?php echo esc_html(get_theme_mod('aries_nav_contact', 'お問い合わせ')); ?>
            </a>

        </nav>

    </div>

</header>