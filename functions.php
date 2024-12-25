<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');


function my_script_init()
{
    // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), '3.6.4', true);
    wp_enqueue_script('jquery');

    // Google Fontsの読み込み
    wp_enqueue_style('BIZ-UDPGothic-Mincho', '//fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=BIZ+UDPMincho:wght@400;700&family=Oswald:wght@200..700&display=swap');

    // GSAPの読み込み
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '3.12.5', true);

    // ScrollTriggerの読み込み（GSAPの後に）
    wp_enqueue_script('scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);

    // Swiperの読み込み
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.1', true);

    // メインスクリプトとスタイルシートの読み込み
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery', 'gsap', 'scrolltrigger', 'swiper'), '1.0.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1993');
}
add_action('wp_enqueue_scripts', 'my_script_init');


// 製品のパーマリンク構造をカスタマイズ
// function custom_product_post_type_permalinks($post_link, $post) {
//     if ('product' === $post->post_type) {
//         $terms = get_the_terms($post, 'business-category');
//         if ($terms && !is_wp_error($terms)) {
//             $term_slug = $terms[0]->slug; // 最初のカテゴリのスラッグを取得
//             return home_url('/product/' . $term_slug . '/' . $post->post_name . '/');
//         }
//     }
//     return $post_link;
// }
// add_filter('post_type_link', 'custom_product_post_type_permalinks', 10, 2);



// function custom_breadcrumb() {
//     // ホームリンク
//     echo '<nav class="breadcrumb"><ul>';
//     echo '<li><a href="' . home_url() . '">ホーム</a></li>';

//     if (is_post_type_archive('business')) {
//         // 事業一覧アーカイブページ
//         echo '<li>事業一覧</li>';
//     }

//     if (is_singular('business')) {
//         // 事業詳細ページ
//         echo '<li class="child"><a href="' . get_post_type_archive_link('business') . '">事業一覧</a></li>';
//         echo '<li>' . get_the_title() . '</li>';
//     }

//     if (is_singular('product')) {
//         // 製品詳細ページ
//         echo '<li><a href="' . get_post_type_archive_link('business') . '">事業一覧</a></li>';

//         // 製品に紐づく事業を取得
//         $terms = get_the_terms(get_the_ID(), 'business-category');
//         if ($terms && !is_wp_error($terms)) {
//             $term = array_shift($terms); // 最初のタームを取得
//             $business = get_posts([
//                 'post_type' => 'business',
//                 'tax_query' => [
//                     [
//                         'taxonomy' => 'business-category',
//                         'field' => 'term_id',
//                         'terms' => $term->term_id,
//                     ],
//                 ],
//                 'numberposts' => 1,
//             ]);
//             if (!empty($business)) {
//                 echo '<li><a href="' . get_permalink($business[0]->ID) . '">' . get_the_title($business[0]->ID) . '</a></li>';
//             }
//         }

//         // 現在の製品タイトル
//         echo '<li>' . get_the_title() . '</li>';
//     }

//     echo '</ul></nav>';
// }



//////////////////////パンくず//////////////////
function custom_breadcrumb()
{
    // ホームリンク
    echo '<nav class="breadcrumb"><ul class="breadcrumb-list">';
    echo '<li class="breadcrumb-item breadcrumb-home"><a href="' . home_url() . '">ホーム</a></li>';

    if (is_post_type_archive('product')) {
        // 事業一覧アーカイブページ
        echo '<li class="breadcrumb-item breadcrumb-business-list">事業一覧</li>';
    }

    if (is_singular('product')) {
        // 事業詳細ページ
        echo '<li class="breadcrumb-item breadcrumb-business-list-child"><a href="' . get_post_type_archive_link('product') . '">事業一覧</a></li>';
        echo '<li class="breadcrumb-item breadcrumb-business-detail">' . get_the_title() . '</li>';
    }

    if (is_singular('goods')) {
        // 製品詳細ページ
        echo '<li class="breadcrumb-item breadcrumb-business-list"><a href="' . get_post_type_archive_link('product') . '">事業一覧</a></li>';

        // 製品に紐づく事業を取得
        $terms = get_the_terms(get_the_ID(), 'business-category');
        if ($terms && !is_wp_error($terms)) {
            $term = array_shift($terms); // 最初のタームを取得
            $business = get_posts([
                'post_type' => 'business',
                'tax_query' => [
                    [
                        'taxonomy' => 'business-category',
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                    ],
                ],
                'numberposts' => 1,
            ]);
            if (!empty($business)) {
                echo '<li class="breadcrumb-item breadcrumb-business-link"><a href="' . get_permalink($business[0]->ID) . '">' . get_the_title($business[0]->ID) . '</a></li>';
            }
        }
        // 現在の製品タイトル
        echo '<li class="breadcrumb-item breadcrumb-product-detail">' . get_the_title() . '</li>';
    }
    echo '</ul></nav>';
}



function my_preget_posts($query)
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }
    if ($query->is_home()) {
        $query->set('posts_per_page', 3);
        // $query->set('posts_per_page', 設定したい最大表示件数)
        return;
    }
}
add_action('pre_get_posts', 'my_preget_posts');





add_action('init', function () {
    // Product の詳細ページのリライトルールを追加
    add_rewrite_rule(
        '^business/([^/]+)/product/([^/]+)/?$',
        'index.php?post_type=product&name=$matches[2]',
        'top'
    );

    // Product のアーカイブページを Business 配下に設定
    add_rewrite_rule(
        '^business/([^/]+)/product/?$',
        'index.php?post_type=product&business_category=$matches[1]',
        'top'
    );
});
