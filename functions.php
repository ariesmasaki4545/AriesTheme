<?php

function aries_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'aries_theme_setup');


function aries_theme_scripts() {

    wp_enqueue_style(
        'aries-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

}

add_action('wp_enqueue_scripts', 'aries_theme_scripts');


/* =========================
   AriesTheme カスタマイズ
========================= */

function aries_theme_customize($wp_customize) {

  

    $wp_customize->add_section(
        'aries_home_section',
        array(
            'title'    => 'AriesTheme ホーム設定',
            'priority' => 30,
        )
    );

    /* =========================
     * ヘッダー設定
     * ========================= */

    $wp_customize->add_section(
        'aries_header_section',
        array(
            'title'    => 'ヘッダー設定',
            'priority' => 20,
        )
    );/* ナビゲーション配置 */

$wp_customize->add_setting(
    'aries_nav_alignment',
    array(
        'default'           => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_nav_alignment',
    array(
        'label'   => 'ナビゲーション配置',
        'section' => 'aries_header_section',
        'type'    => 'select',
        'choices' => array(
            'left'   => '左寄せ',
            'center' => '中央寄せ',
            'right'  => '右寄せ',
        ),
    )
); 

$wp_customize->add_setting(
    'aries_site_background_color',
    array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'aries_site_background_color',
        array(
            'label' => 'サイト全体背景色',
            'section' => 'aries_home_section',
        )
    )
);

$wp_customize->add_setting(
    'aries_site_background_image',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'aries_site_background_image',
        array(
            'label' => 'サイト全体背景画像',
            'section' => 'aries_home_section',
        )
    )
);



    /* メインキャッチコピー */

    $wp_customize->add_setting(
        'aries_hero_title',
        array(
            'default'           => 'あなたのビジネスを、もっと魅力的に。',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'aries_hero_title',
        array(
            'label'       => 'メインキャッチコピー',
            'section'     => 'aries_home_section',
            'type'        => 'textarea',
            'description' => 'トップページのメインキャッチコピーです。',
        )
    );/* ファーストビュー配置 */

$wp_customize->add_setting(
    'aries_hero_alignment',
    array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_hero_alignment',
    array(
        'label' => 'ファーストビュー配置',
        'section' => 'aries_home_section',
        'type' => 'select',
        'choices' => array(
            'left' => '左寄せ',
            'center' => '中央寄せ',
            'right' => '右寄せ',
        ),
    )
);


    /* ファーストビュー説明文 */

    $wp_customize->add_setting(
        'aries_hero_text',
        array(
            'default'           => 'デザインと機能性を両立した、オリジナルホームページを制作します。',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

        $wp_customize->add_control(
        'aries_hero_text',
        array(
            'label'       => 'ファーストビュー説明文',
            'section'     => 'aries_home_section',
            'type'        => 'textarea',
            'description' => 'メインキャッチコピーの下に表示される説明文です。',
        )
    );

/* Heroボタン名 */

$wp_customize->add_setting(
    'aries_hero_button',
    array(
        'default'           => 'お問い合わせ',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_hero_button',
    array(
        'label'   => 'ファーストビューボタン名',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);

/* HeroボタンURL */

$wp_customize->add_setting(
    'aries_hero_button_url',
    array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    'aries_hero_button_url',
    array(
        'label'       => 'ファーストビューボタンURL',
        'description' => 'お問い合わせ・予約ページなどのURLを入力できます。',
        'section'     => 'aries_home_section',
        'type'        => 'url',
    )
);/* Heroラベル */

$wp_customize->add_setting(
    'aries_hero_label',
    array(
        'default'           => 'ORIGINAL WEB DESIGN',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_hero_label',
    array(
        'label'   => 'ファーストビューラベル',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);}

add_action(
    'customize_register',
    'aries_theme_customize'
);/* =========================
   サービス設定
========================= */

function aries_service_customize($wp_customize) {

    for ($i = 1; $i <= 3; $i++) {

        $wp_customize->add_setting(
            'aries_service_' . $i . '_title',
            array(
                'default' => 'サービス ' . $i,
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'aries_service_' . $i . '_title',
            array(
                'label'   => 'サービス ' . $i . ' タイトル',
                'section' => 'aries_home_section',
                'type'    => 'text',
            )
        );

        $wp_customize->add_setting(
            'aries_service_' . $i . '_text',
            array(
                'default' => 'サービスの説明です。',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            'aries_service_' . $i . '_text',
            array(
                'label'   => 'サービス ' . $i . ' 説明',
                'section' => 'aries_home_section',
                'type'    => 'textarea',
            )
        );

/* SERVICE見出し */

$wp_customize->add_setting(
    'aries_service_label',
    array(
        'default'           => 'SERVICE',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_service_label',
    array(
        'label'   => 'SERVICEラベル',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);

$wp_customize->add_setting(
    'aries_service_heading',
    array(
        'default'           => 'サービス',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_service_heading',
    array(
        'label'   => 'サービス見出し',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);

$wp_customize->add_setting(
    'aries_service_description',
    array(
        'default'           => 'ビジネスに合わせたホームページを制作します。',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);

$wp_customize->add_control(
    'aries_service_description',
    array(
        'label'   => 'サービス説明',
        'section' => 'aries_home_section',
        'type'    => 'textarea',
    )
);}

}

add_action(
    'customize_register',
    'aries_service_customize'
);/* =========================
   ABOUT設定
========================= */

function aries_about_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_about_title',
        array(
            'default' => '私たちについて',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_about_title',
        array(
            'label'   => 'ABOUT タイトル',
            'section' => 'aries_home_section',
            'type'    => 'text',
        )
    );


    $wp_customize->add_setting(
        'aries_about_heading',
        array(
            'default' => '想いを、伝わるカタチへ。',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_about_heading',
        array(
            'label'   => 'ABOUT 見出し',
            'section' => 'aries_home_section',
            'type'    => 'text',
        )
    );


    $wp_customize->add_setting(
        'aries_about_text_1',
        array(
            'default' => '私たちは、デザインだけではなく、そのホームページを見た人に何を伝えるのかを大切にしています。',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'aries_about_text_1',
        array(
            'label'   => 'ABOUT 本文1',
            'section' => 'aries_home_section',
            'type'    => 'textarea',
        )
    );


    $wp_customize->add_setting(
        'aries_about_text_2',
        array(
            'default' => 'お店や企業それぞれの魅力を整理し、分かりやすく、使いやすく、長く育てられるホームページを制作します。',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'aries_about_text_2',
        array(
            'label'   => 'ABOUT 本文2',
            'section' => 'aries_home_section',
            'type'    => 'textarea',
        )
    );

/* ABOUT見出し配置 */

$wp_customize->add_setting(
    'aries_about_alignment',
    array(
        'default'           => 'center',
        'sanitize_callback' => 'sanitize_key',
    )
);

$wp_customize->add_control(
    'aries_about_alignment',
    array(
        'label'   => 'ABOUT見出し配置',
        'section' => 'aries_home_section',
        'type'    => 'select',
        'choices' => array(
            'left'   => '左寄せ',
            'center' => '中央寄せ',
            'right'  => '右寄せ',
        ),
    )
);/* ABOUTラベル */

$wp_customize->add_setting(
    'aries_about_label',
    array(
        'default'           => 'ABOUT',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_about_label',
    array(
        'label'   => 'ABOUTラベル',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);/* ABOUT画像 */

$wp_customize->add_setting(
    'aries_about_image',
    array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'aries_about_image',
        array(
            'label'     => 'ABOUT画像',
            'section'   => 'aries_home_section',
            'mime_type' => 'image',
        )
    )
);/* ABOUTボタン */

$wp_customize->add_setting(
    'aries_about_button',
    array(
        'default'           => '予約・お問い合わせはこちら',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_about_button',
    array(
        'label'   => 'ABOUTボタン名',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);/* ABOUTボタンURL */

$wp_customize->add_setting(
    'aries_about_button_url',
    array(
        'default'           => '#reservation',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    'aries_about_button_url',
    array(
        'label'       => 'ABOUTボタンURL',
        'description' => '予約・お問い合わせ先のURLを入力できます。',
        'section'     => 'aries_home_section',
        'type'        => 'url',
    )
);}

add_action(
    'customize_register',
    'aries_about_customize'
);/* =========================
  /* =========================
 * CONTACT 設定
 * ========================= */

add_action(
    'customize_register',
    'aries_contact_customize'
);
function aries_contact_customize($wp_customize) {

    $settings = array(
        'aries_contact_title' => array(
            'default' => 'お問い合わせ',
            'label'   => 'お問い合わせ タイトル',
        ),
        'aries_contact_text' => array(
            'default' => 'ホームページ制作についてお気軽にご相談ください。',
            'label'   => 'お問い合わせ 説明文',
        ),
        'aries_contact_box_title' => array(
            'default' => 'ホームページ制作のご相談',
            'label'   => 'お問い合わせ ボックスタイトル',
        ),
        'aries_contact_box_text' => array(
            'default' => '制作内容・料金・納期など、まずはお気軽にお問い合わせください。',
            'label'   => 'お問い合わせ 本文',
        ),
        'aries_contact_email' => array(
            'default' => 'example@example.com',
            'label'   => 'お問い合わせ メールアドレス',
        ),
    );

    foreach ($settings as $id => $data) {

        $wp_customize->add_setting(
            $id,
            array(
                'default'           => $data['default'],
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            $id,
            array(
                'label'    => $data['label'],
                'section'  => 'aries_home_section',
                'type'     => 'textarea',
            )
        );
    }
/* CONTACT見出し配置 */

$wp_customize->add_setting(
    'aries_contact_alignment',
    array(
        'default'           => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_contact_alignment',
    array(
        'label'   => 'CONTACT見出し配置',
        'section' => 'aries_home_section',
        'type'    => 'select',
        'choices' => array(
            'left'   => '左寄せ',
            'center' => '中央寄せ',
            'right'  => '右寄せ',
        ),
    )
);/* CONTACTラベル */

$wp_customize->add_setting(
    'aries_contact_label',
    array(
        'default'           => 'CONTACT',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_contact_label',
    array(
        'label'   => 'CONTACTラベル',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);/* CONTACTボタン名 */

$wp_customize->add_setting(
    'aries_contact_button',
    array(
        'default'           => 'メールでお問い合わせ',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_contact_button',
    array(
        'label'   => 'お問い合わせボタン名',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);}/* 
}/* =========================
 * ヘッダー配置設定
 * ========================= */

function aries_header_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_header_alignment',
        array(
            'default'           => 'left',
            'sanitize_callback' => 'sanitize_key',
        )
    );

    $wp_customize->add_control(
        'aries_header_alignment',
        array(
            'label'   => 'ヘッダー配置',
            'section' => 'aries_home_section',
            'type'    => 'select',
            'choices' => array(
                'left'   => '左寄せ',
                'center' => '中央寄せ',
                'right'  => '右寄せ',
            ),
        )
    );
    /* ナビゲーション文字設定 */

    $nav_items = array(
        'home' => array(
            'default' => 'ホーム',
            'label'   => 'ナビゲーション ホーム',
        ),
        'about' => array(
            'default' => '私たちについて',
            'label'   => 'ナビゲーション ABOUT',
        ),
        'service' => array(
            'default' => 'サービス',
            'label'   => 'ナビゲーション SERVICE',
        ),
        
        'contact' => array(
            'default' => 'お問い合わせ',
            'label'   => 'ナビゲーション CONTACT',
        ),
    );

    foreach ($nav_items as $id => $data) {

        $wp_customize->add_setting(
            'aries_nav_' . $id,
            array(
                'default'           => $data['default'],
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'aries_nav_' . $id,
            array(
                'label'   => $data['label'],
                'section' => 'aries_home_section',
                'type'    => 'text',
            )
        );
    }
}

add_action(
    'customize_register',
    'aries_header_customize'
);
/* =========================
 * ヘッダー背景色設定
 * ========================= */

function aries_header_color_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_header_background',
        array(
            'default'           => '#111111',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'aries_header_background',
            array(
                'label'   => 'ヘッダー背景色',
                'section' => 'aries_home_section',
            )
        )
    );
}

add_action(
    'customize_register',
    'aries_header_color_customize'
);/* =========================
 * ヘッダー文字色設定
 * ========================= */

function aries_header_text_color_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_header_text_color',
        array(
            'default'           => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'aries_header_text_color',
            array(
                'label'   => 'ヘッダー文字色',
                'section' => 'aries_home_section',
            )
        )
    );
}

add_action(
    'customize_register',
    'aries_header_text_color_customize'
);/* =========================
 * ファーストビュー背景色設定
 * ========================= */

function aries_hero_color_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_hero_background',
        array(
            'default'           => '#111111',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'aries_hero_background',
            array(
                'label'   => 'ファーストビュー背景色',
                'section' => 'aries_home_section',
            )
        )
    );
}

add_action(
    'customize_register',
    'aries_hero_color_customize'
);/* =========================
 * ファーストビュー文字色設定
 * ========================= */

function aries_hero_text_color_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_hero_text_color',
        array(
            'default'           => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'aries_hero_text_color',
            array(
                'label'   => 'ファーストビュー文字色',
                'section' => 'aries_home_section',
            )
        )
    );
}

add_action(
    'customize_register',
    'aries_hero_text_color_customize'
);/* =========================
 * サイトアクセントカラー設定
 * ========================= */

function aries_accent_color_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_accent_color',
        array(
            'default'           => '#111111',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'aries_accent_color',
            array(
                'label'   => 'サイトアクセントカラー',
                'section' => 'aries_home_section',
            )
        )
    );
}

add_action(
    'customize_register',
    'aries_accent_color_customize'
);/* =========================
 * アクセントカラー反映
 * ========================= */

function aries_accent_color_css() {

    $accent_color = get_theme_mod(
        'aries_accent_color',
        '#111111'
    );

    echo '<style>';
    echo ':root {';
    echo '--aries-accent-color: ' . esc_attr($accent_color) . ';';
    echo '}';
    echo '</style>';
}

add_action(
    'wp_head',
    'aries_accent_color_css'
);/* =========================
 * サイトロゴ設定
 * ========================= */

function aries_logo_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_site_logo',
        array(
            'default'           => '',
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'aries_site_logo',
            array(
                'label'       => 'サイトロゴ',
                'section'     => 'aries_home_section',
                'mime_type'   => 'image',
                'description' => 'ヘッダーに表示するロゴ画像を選択してください。',
            )
        )
    );
}

add_action(
    'customize_register',
    'aries_logo_customize'
);/* =========================
 * 店舗基本情報設定
 * ========================= */

function aries_business_info_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_phone',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_phone',
        array(
            'label'   => '電話番号',
            'section' => 'aries_home_section',
            'type'    => 'text',
        )
    );


    $wp_customize->add_setting(
        'aries_address',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'aries_address',
        array(
            'label'   => '住所',
            'section' => 'aries_home_section',
            'type'    => 'textarea',
        )
    );

}

add_action(
    'customize_register',
    'aries_business_info_customize'
);/* ========================
 * サイト全体背景を反映
 * ======================== */

function aries_site_background_style() {

    $bg_color = get_theme_mod(
        'aries_site_background_color',
        '#ffffff'
    );

    $bg_image = get_theme_mod(
        'aries_site_background_image',
        ''
    );

    echo '<style>';

    echo 'body {';
    echo 'background-color:' . esc_attr($bg_color) . ';';

    if ( $bg_image ) {
        echo 'background-image:url("' . esc_url($bg_image) . '");';
        echo 'background-size:cover;';
        echo 'background-position:center;';
        echo 'background-attachment:fixed;';
        echo 'background-repeat:no-repeat;';
    }

    echo '}';

    echo '</style>';
}

add_action(
    'wp_head',
    'aries_site_background_style'
);/* ナビゲーション配置を反映 */
function aries_nav_alignment_style() {

    $alignment = get_theme_mod(
        'aries_nav_alignment',
        'center'
    );

    $justify = 'center';

    if ( $alignment === 'left' ) {
        $justify = 'flex-start';
    } elseif ( $alignment === 'right' ) {
        $justify = 'flex-end';
    }

    echo '<style id="aries-nav-alignment">';
    echo '.site-navigation{justify-content:' . esc_attr( $justify ) . ';}';
    echo '</style>';
}

add_action(
    'wp_head',
    'aries_nav_alignment_style'
);/* ファーストビュー配置を反映 */
function aries_hero_alignment_style() {

    $alignment = get_theme_mod(
        'aries_hero_alignment',
        'center'
    );

    $text_align = 'center';

    if ( $alignment === 'left' ) {
        $text_align = 'left';
    } elseif ( $alignment === 'right' ) {
        $text_align = 'right';
    }

    echo '<style id="aries-hero-alignment">';
    echo '.hero-content{text-align:' . esc_attr( $text_align ) . ';}';
    echo '</style>';
}

add_action(
    'wp_head',
    'aries_hero_alignment_style'

    );/* =========================
   店舗基本情報
========================= */

function aries_shop_info_customize($wp_customize) {

    // 店名
    $wp_customize->add_setting(
        'aries_shop_name',
        array(
            'default' => '店舗名',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_shop_name',
        array(
            'label' => '店名',
            'section' => 'title_tagline',
            'type' => 'text',
        )
    );

    // キャッチコピー
    $wp_customize->add_setting(
        'aries_shop_catchcopy',
        array(
            'default' => 'こだわりの料理を、あなたへ。',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_shop_catchcopy',
        array(
            'label' => 'キャッチコピー',
            'section' => 'title_tagline',
            'type' => 'text',
        )
    );

    // 電話番号
    $wp_customize->add_setting(
        'aries_shop_phone',
        array(
            'default' => '000-0000-0000',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_shop_phone',
        array(
            'label' => '電話番号',
            'section' => 'title_tagline',
            'type' => 'text',
        )
    );

    // 住所
    $wp_customize->add_setting(
        'aries_shop_address',
        array(
            'default' => '〒000-0000 新潟県○○市○○',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_shop_address',
        array(
            'label' => '住所',
            'section' => 'title_tagline',
            'type' => 'text',
        )
    );

    // 営業時間
    $wp_customize->add_setting(
        'aries_shop_hours',
        array(
            'default' => '11:00〜21:00',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_shop_hours',
        array(
            'label' => '営業時間',
            'section' => 'title_tagline',
            'type' => 'text',
        )
    );
        // 定休日
    $wp_customize->add_setting(
        'aries_shop_holiday',
        array(
            'default'           => '毎週火曜日',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_shop_holiday',
        array(
            'label'   => '定休日',
            'section' => 'title_tagline',
            'type'    => 'text',
        )
    );
}

add_action(
    'customize_register',
    'aries_shop_info_customize'
);/* =========================
   メニュー設定
========================= */
/* =========================
   メニュー設定
========================= */

function aries_menu_customize($wp_customize) {

    // メニューセクション
    $wp_customize->add_section(
        'aries_menu_section',
        array(
            'title'    => 'メニュー',
            'priority' => 30,
        )
    );

    // メニューラベル
    $wp_customize->add_setting(
        'aries_menu_label',
        array(
            'default'           => 'MENU',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_menu_label',
        array(
            'label'   => 'メニュー ラベル',
            'section' => 'aries_menu_section',
            'type'    => 'text',
        )
    );

    // メニュー見出し
    $wp_customize->add_setting(
        'aries_menu_title',
        array(
            'default'           => 'メニュー',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_menu_title',
        array(
            'label'   => 'メニュー 見出し',
            'section' => 'aries_menu_section',
            'type'    => 'text',
        )
    );

    // メニュー1〜6
    for ($i = 1; $i <= 6; $i++) {

        // メニュー名
        $wp_customize->add_setting(
            'aries_menu_' . $i . '_name',
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'aries_menu_' . $i . '_name',
            array(
                'label'   => 'メニュー ' . $i . ' 名前',
                'section' => 'aries_menu_section',
                'type'    => 'text',
            )
        );

        // 説明
        $wp_customize->add_setting(
            'aries_menu_' . $i . '_description',
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            'aries_menu_' . $i . '_description',
            array(
                'label'   => 'メニュー ' . $i . ' 説明',
                'section' => 'aries_menu_section',
                'type'    => 'textarea',
            )
        );

        // 価格
        $wp_customize->add_setting(
            'aries_menu_' . $i . '_price',
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'aries_menu_' . $i . '_price',
            array(
                'label'   => 'メニュー ' . $i . ' 価格',
                'section' => 'aries_menu_section',
                'type'    => 'text',
            )
        );

        // 写真
        $wp_customize->add_setting(
            'aries_menu_' . $i . '_image',
            array(
                'default'           => '',
                'sanitize_callback' => 'absint',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'aries_menu_' . $i . '_image',
                array(
                    'label'     => 'メニュー ' . $i . ' 写真',
                    'section'   => 'aries_menu_section',
                    'mime_type' => 'image',
                )
            )
        );

        // おすすめ設定
        $wp_customize->add_setting(
            'aries_menu_' . $i . '_recommended',
            array(
                'default'           => false,
                'sanitize_callback' => 'wp_validate_boolean',
            )
        );

        $wp_customize->add_control(
            'aries_menu_' . $i . '_recommended',
            array(
                'label'   => 'メニュー ' . $i . ' をおすすめにする',
                'section' => 'aries_menu_section',
                'type'    => 'checkbox',
            )
        );
    }
}

add_action(
    'customize_register',
    'aries_menu_customize'
);/* =========================
   店舗ギャラリー設定
========================= */

function aries_gallery_customize($wp_customize) {

    $wp_customize->add_section(
        'aries_gallery_section',
        array(
            'title'    => '店舗ギャラリー',
            'priority' => 40,
        )
    );

    for ($i = 1; $i <= 6; $i++) {

        $wp_customize->add_setting(
            'aries_gallery_' . $i,
            array(
                'default'           => '',
                'sanitize_callback' => 'absint',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'aries_gallery_' . $i,
                array(
                    'label'     => 'ギャラリー写真 ' . $i,
                    'section'   => 'aries_gallery_section',
                    'mime_type' => 'image',
                )
            )
        );
    }
}

add_action(
    'customize_register',
    'aries_gallery_customize'
);/* =========================
   ギャラリー見出し設定
========================= */

function aries_gallery_heading_customize($wp_customize) {

    $wp_customize->add_setting(
        'aries_gallery_label',
        array(
            'default'           => 'GALLERY',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_gallery_label',
        array(
            'label'   => 'ギャラリー ラベル',
            'section' => 'aries_gallery_section',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting(
        'aries_gallery_title',
        array(
            'default'           => '店舗ギャラリー',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_gallery_title',
        array(
            'label'   => 'ギャラリー 見出し',
            'section' => 'aries_gallery_section',
            'type'    => 'text',
        )
    );
}

add_action(
    'customize_register',
    'aries_gallery_heading_customize'
);/* =========================
   アクセス設定
========================= */

function aries_access_customize($wp_customize) {

    $wp_customize->add_section(
        'aries_access_section',
        array(
            'title'    => 'アクセス',
            'priority' => 50,
        )
    );

    // アクセス ラベル
    $wp_customize->add_setting(
        'aries_access_label',
        array(
            'default'           => 'ACCESS',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_access_label',
        array(
            'label'   => 'アクセス ラベル',
            'section' => 'aries_access_section',
            'type'    => 'text',
        )
    );

    // アクセス 見出し
    $wp_customize->add_setting(
        'aries_access_title',
        array(
            'default'           => 'アクセス',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_access_title',
        array(
            'label'   => 'アクセス 見出し',
            'section' => 'aries_access_section',
            'type'    => 'text',
        )
    );

    // GoogleマップURL
    $wp_customize->add_setting(
        'aries_access_map_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'aries_access_map_url',
        array(
            'label'       => 'Googleマップ埋め込みURL',
            'description' => 'Googleマップの「地図を埋め込む」から取得したURLを入力してください。',
            'section'     => 'aries_access_section',
            'type'        => 'url',
        )
    );
}

add_action(
    'customize_register',
    'aries_access_customize'
);/* =========================
   予約・問い合わせ設定
========================= */

function aries_reservation_customize($wp_customize) {

    $wp_customize->add_section(
        'aries_reservation_section',
        array(
            'title'    => '予約・お問い合わせ',
            'priority' => 60,
        )
    );

    // ラベル
    $wp_customize->add_setting(
        'aries_reservation_label',
        array(
            'default'           => 'RESERVATION',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_reservation_label',
        array(
            'label'   => '予約 ラベル',
            'section' => 'aries_reservation_section',
            'type'    => 'text',
        )
    );

    // 見出し
    $wp_customize->add_setting(
        'aries_reservation_title',
        array(
            'default'           => 'ご予約・お問い合わせ',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_reservation_title',
        array(
            'label'   => '予約 見出し',
            'section' => 'aries_reservation_section',
            'type'    => 'text',
        )
    );

    // ボタン名
    $wp_customize->add_setting(
        'aries_reservation_button',
        array(
            'default'           => '電話で予約する',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_reservation_button',
        array(
            'label'   => '予約ボタン名',
            'section' => 'aries_reservation_section',
            'type'    => 'text',
        )
    );

    // 予約URL
    $wp_customize->add_setting(
        'aries_reservation_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'aries_reservation_url',
        array(
            'label'       => '予約URL',
            'description' => '予約サイト・LINE・フォームなどのURLを入力できます。',
            'section'     => 'aries_reservation_section',
            'type'        => 'url',
        )
    );/* CONTACTボタンURL */

$wp_customize->add_setting(
    'aries_contact_button_url',
    array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    'aries_contact_button_url',
    array(
        'label'       => 'お問い合わせボタンURL',
        'description' => 'メール・LINE・問い合わせフォームなどのURLを入力できます。',
        'section'     => 'aries_reservation_section',
        'type'        => 'url',
    )
);
}

add_action(
    'customize_register',
    'aries_reservation_customize'
);/* =========================
   SNS設定
========================= */

function aries_sns_customize($wp_customize) {

    $wp_customize->add_section(
        'aries_sns_section',
        array(
            'title'    => 'SNS',
            'priority' => 70,
        )
    );

    // Instagram
    $wp_customize->add_setting(
        'aries_sns_instagram',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'aries_sns_instagram',
        array(
            'label'   => 'Instagram URL',
            'section' => 'aries_sns_section',
            'type'    => 'url',
        )
    );

    // Facebook
    $wp_customize->add_setting(
        'aries_sns_facebook',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'aries_sns_facebook',
        array(
            'label'   => 'Facebook URL',
            'section' => 'aries_sns_section',
            'type'    => 'url',
        )
    );

    // X
    $wp_customize->add_setting(
        'aries_sns_x',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'aries_sns_x',
        array(
            'label'   => 'X URL',
            'section' => 'aries_sns_section',
            'type'    => 'url',
        )
    );
}

add_action(
    'customize_register',
    'aries_sns_customize'
);/* =========================
   ナビゲーション設定
========================= */

function aries_navigation_customize($wp_customize) {

    $wp_customize->add_section(
        'aries_navigation_section',
        array(
            'title'    => 'ナビゲーション',
            'priority' => 65,
        )
    );

    $nav_items = array(
    'home'        => 'ホーム',
    'about'       => 'お店について',
    'menu'        => 'メニュー',
    'gallery'     => 'ギャラリー',
    'access'      => 'アクセス',
    'reservation' => '予約',
);

    foreach ($nav_items as $key => $label) {

        $wp_customize->add_setting(
            'aries_nav_' . $key,
            array(
                'default'           => $label,
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'aries_nav_' . $key,
            array(
                'label'   => $label . ' 表示名',
                'section' => 'aries_navigation_section',
                'type'    => 'text',
            )
        );
    }
}

add_action(
    'customize_register',
    'aries_navigation_customize'
);