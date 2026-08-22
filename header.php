<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

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
$reservation_url = get_theme_mod('aries_reservation_url');
?>

<a
    class="header-reservation-button"
    href="<?php echo esc_url($reservation_url ? $reservation_url : '#reservation'); ?>"
    <?php if ($reservation_url) : ?>
        target="_blank"
        rel="noopener noreferrer"
    <?php endif; ?>
>
    <?php echo esc_html(get_theme_mod('aries_reservation_button', '予約する')); ?>
</a>

    </div>

</header>