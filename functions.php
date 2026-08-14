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
    );/*/* ナビゲーション配置 */

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

}

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

    /* サービス見出し配置 */

$wp_customize->add_setting(
    'aries_service_alignment',
    array(
        'default'           => 'center',
        'sanitize_callback' => 'sanitize_key',
    )
);

$wp_customize->add_control(
    'aries_service_alignment',
    array(
        'label'   => 'サービス見出し配置',
        'section' => 'aries_home_section',
        'type'    => 'select',
        'choices' => array(
            'left'   => '左寄せ',
            'center' => '中央寄せ',
            'right'  => '右寄せ',
        ),
    )
);/* SERVICE見出し */

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
);}

add_action(
    'customize_register',
    'aries_about_customize'
);/* =========================
   WORKS設定
========================= */

function aries_works_customize($wp_customize) {

    for ($i = 1; $i <= 3; $i++) {

        $wp_customize->add_setting(
            'aries_work_' . $i . '_category',
            array(
                'default' => 'WORK ' . $i,
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'aries_work_' . $i . '_category',
            array(
                'label'   => '制作実績 ' . $i . ' カテゴリー',
                'section' => 'aries_home_section',
                'type'    => 'text',
            )
        );


        $wp_customize->add_setting(
            'aries_work_' . $i . '_title',
            array(
                'default' => '制作実績 ' . $i,
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'aries_work_' . $i . '_title',
            array(
                'label'   => '制作実績 ' . $i . ' タイトル',
                'section' => 'aries_home_section',
                'type'    => 'text',
            )
        );


        $wp_customize->add_setting(
            'aries_work_' . $i . '_text',
            array(
                'default' => '制作実績の説明です。',
                'sanitize_callback' => 'sanitize_textarea_field',
            )
        );

        $wp_customize->add_control(
            'aries_work_' . $i . '_text',
            array(
                'label'   => '制作実績 ' . $i . ' 説明',
                'section' => 'aries_home_section',
                'type'    => 'textarea',
            )
        );

        /* WORKS見出し配置 */

    $wp_customize->add_setting(
        'aries_works_alignment',
        array(
            'default'           => 'center',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'aries_works_alignment',
        array(
            'label'   => 'WORKS見出し配置',
            'section' => 'aries_home_section',
            'type'    => 'select',
            'choices' => array(
                'left'   => '左寄せ',
                'center' => '中央寄せ',
                'right'  => '右寄せ',
            ),
        )
    );/* WORKSラベル */

$wp_customize->add_setting(
    'aries_works_label',
    array(
        'default'           => 'WORKS',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_works_label',
    array(
        'label'   => 'WORKSラベル',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);/* WORKSタイトル */

$wp_customize->add_setting(
    'aries_works_title',
    array(
        'default'           => '制作実績',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aries_works_title',
    array(
        'label'   => 'WORKSタイトル',
        'section' => 'aries_home_section',
        'type'    => 'text',
    )
);/* WORKS説明文 */

$wp_customize->add_setting(
    'aries_works_description',
    array(
        'default'           => 'これまでに制作したホームページをご紹介します。',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);

$wp_customize->add_control(
    'aries_works_description',
    array(
        'label'   => 'WORKS説明文',
        'section' => 'aries_home_section',
        'type'    => 'textarea',
    )
);}

}

add_action(
    'customize_register',
    'aries_works_customize'
);/* =========================
   WORKS 画像設定
========================= */

function aries_works_image_customize($wp_customize) {

    for ($i = 1; $i <= 3; $i++) {

        $wp_customize->add_setting(
            'aries_work_' . $i . '_image',
            array(
                'default'           => '',
                'sanitize_callback' => 'absint',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'aries_work_' . $i . '_image',
                array(
                    'label'       => '制作実績 ' . $i . ' 画像',
                    'section'     => 'aries_home_section',
                    'mime_type'   => 'image',
                    'description' => '制作実績 ' . $i . ' に表示する画像を選択してください。',
                )
            )
        );
    }
}

add_action(
    'customize_register',
    'aries_works_image_customize'
);/* =========================
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
);}/* =========================
 * WORKS テキスト設定
 * ========================= */

add_action(
    'customize_register',
    'aries_works_text_customize'
);

function aries_works_text_customize($wp_customize) {

    $settings = array(

        'aries_work_1_category' => array(
            'default' => 'WEB DESIGN',
            'label'   => 'WORKS 01 カテゴリー',
        ),

        'aries_work_1_title' => array(
            'default' => '美容サロンホームページ',
            'label'   => 'WORKS 01 タイトル',
        ),

        'aries_work_1_text' => array(
            'default' => 'サロンの魅力やサービスを分かりやすく伝える、オリジナルホームページ。',
            'label'   => 'WORKS 01 説明文',
        ),

        'aries_work_2_category' => array(
            'default' => 'WEB DESIGN',
            'label'   => 'WORKS 02 カテゴリー',
        ),

        'aries_work_2_title' => array(
            'default' => '店舗ホームページ',
            'label'   => 'WORKS 02 タイトル',
        ),

        'aries_work_2_text' => array(
            'default' => 'お店の世界観やサービスを整理し、来店につながるホームページ。',
            'label'   => 'WORKS 02 説明文',
        ),

        'aries_work_3_category' => array(
            'default' => 'CORPORATE',
            'label'   => 'WORKS 03 カテゴリー',
        ),

        'aries_work_3_title' => array(
            'default' => '企業ホームページ',
            'label'   => 'WORKS 03 タイトル',
        ),

        'aries_work_3_text' => array(
            'default' => '企業の強みやサービスを分かりやすく伝えるコーポレートサイト。',
            'label'   => 'WORKS 03 説明文',
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
        'works' => array(
            'default' => '制作実績',
            'label'   => 'ナビゲーション WORKS',
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

    );