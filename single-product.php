<?php
// 親投稿のIDを取得　自分が子だった場合に親の
$parent_id = wp_get_post_parent_id(get_the_ID());

// 化成品事業には親がいない
// 化成品事業の記事には親がいる

if ($parent_id) {
    // 子投稿の場合＝親を持っていたらTRUE
    include(get_template_directory() . '/single-product-child.php'); // 子投稿用テンプレートを読み込む
} else {
    // 親投稿の場合
    // 親投稿の内容を表示
    get_header(); ?>
    <main class="hidden-page">
        <div class="service-heading heading">
            <div class="heading__inner inner">
                <h1 class="heading__title"><?php the_title(); ?>
                    <span class="heading__title-sub">Product</span>
                </h1>
                <!-- <div class="breadcrumb">
                    <?php custom_breadcrumb(); ?>
                </div> -->
                <div class="breadcrumb">
                    <div class="breadcrumb__inner">
                        <!-- Breadcrumb NavXTで出力される部分 ここから -->
                        <?php if (function_exists('bcn_display')) { ?>
                            <div class="strength__breadcrumb">
                                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                                    <?php bcn_display(); ?>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Breadcrumb NavXTで出力される部分 ここまで -->
                    </div>
                </div>
            </div>
            <div class="heading__watersplash">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
            </div>
            <div class="heading__watersplash-sub">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
            </div>
        </div>
        <section class="division-single-head layout-division-single-head">
            <div class="division-single-head__inner inner">
                <h2 class="division-single-head__title md-dots">北陸化成工業所の<?php the_title(); ?>について</h2>
                <p class="division-single-head__text"><?php the_field('business_text_3'); ?></p>
                <div class="division-single-head__img">
                    <img src="<?php the_field('division-single-img'); ?>" alt="">
                </div>
                <!--カスタム投稿のコンテンツ表示 -->
				<?php the_content(); ?>
            </div>
            <div class="division-single-head__polkadots polkadots">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/polkadots.svg")); ?>" />
            </div>
            <div class="division-single-head__watersplash">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
            </div>
        </section>
        <section class="division-products layout-division-products">
            <div class="division-products__inner inner">
                <h2 class="division-products__title md-dots">既製品について</h2>
                <!-- ここからした！ -->
                <?php
                // 現在の投稿IDを取得
                $current_post_id = get_the_ID();

                // 除外したい子投稿のIDを指定
                $excluded_posts = array(869); // 除外する子投稿のIDを配列で指定

                // WP_Queryを使って現在の投稿を親に持つ子投稿を取得
                $args = array(
                    'post_type'      => 'product', // カスタム投稿タイプ
                    'post_parent'    => $current_post_id, // 現在の投稿を親とする
                    'post__not_in'   => $excluded_posts, // 除外する投稿IDを指定
                    'posts_per_page' => -1, // 全て取得
                    'orderby'        => 'menu_order', // 必要に応じて順番を指定
                    'order'          => 'ASC'
                );
                $child_posts = new WP_Query($args);

                // ループ開始
                if ($child_posts->have_posts()) : ?>
                    <ul class="division-products__list product-list">
                        <?php while ($child_posts->have_posts()) : $child_posts->the_post(); ?>
                            <li class="product-list__item">
                                <a href="<?php the_permalink(); ?>">
                                    <!-- 使用場所 (ACF: product-spot) -->
                                    <span class="product-list__category">
                                        使用場所: <?php the_field('product-spot'); ?>
                                    </span>
                                    <!-- 製品名 -->
                                    <h3 class="product-list__title"><?php the_title(); ?></h3>
                                    <!-- 製品概要 (ACF: product-overview) -->
                                    <p class="product-list__text"><?php the_field('product-overview'); ?></p>
                                    <!-- 詳しく見るボタン -->
                                    <div class="product-list__btn">
                                        <a class="button-text">詳しく見る</a>
                                        <a rel="nofollow" href="<?php the_permalink(); ?>" class="button">
                                            <div class="button-icon">
                                                <span class="arrow"></span>
                                            </div>
                                        </a>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php
                endif;

                // WP_Query後のリセット
                wp_reset_postdata();
                ?>

                <!-- ここまで！！ -->
            </div>
        </section>

        <div class="customize layout-customize layout-customize--single-business ">
            <div class="customize__inner inner">
                <div class="customize__contents-wrap">
                    <div class="customize__contents">
                        <p class="customize__title">カスタマイズ製品</p>
                        <p class="customize__text">お客様の悩み事から当社独自のカスタマイズ製品もご提供可能でございます。</p>
                        <div class="customize__btn">
                            <a class="button-container" href="<?php echo esc_url(home_url("/product/customize")) ?>">
                                <span class="button-text">詳しく見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="customize__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/customize01.jpg")); ?>" />
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- <section class="division-others layout-division-others">
        <div class="division-others__inner inner">
            <h2 class="division-others__title md-dots">その他の事業</h2>
            <ul class="division-others__list">
                <li class="division-others__item">
                    <div class="division-others__item-img">
                        <img src="" alt="">
                    </div>
                    <h3 class="division-others__item-title">鋳材事業</h3>
                    <p class="division-others__item-text">鋳物の製造に欠かせない 鋳物砂や中子を、地域の鋳物メーカーへ供給しています。また、使用済みの鋳物砂を 独自のリサイクル技術で再生することで、地域に貢献しています。</p>
                    <div class="division-others__item-btn">
                        <span class="button-text">詳しく見る</span>
                        <a rel="" class="button">
                            <div class="button-icon">
                                <span class="arrow"></span>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section> -->

        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150" style="margin-bottom: -7px;">
            <style>
                .path-0 {
                    animation: pathAnim-0 15s;
                    animation-timing-function: linear;
                    animation-iteration-count: infinite;
                }

                @keyframes pathAnim-0 {
                    0% {
                        d: path("M 0,400 L 0,150 C 87.39285714285714,118.10714285714286 174.78571428571428,86.21428571428571 295,83 C 415.2142857142857,79.78571428571429 568.2499999999999,105.25 713,129 C 857.7500000000001,152.75 994.2142857142858,174.7857142857143 1114,178 C 1233.7857142857142,181.2142857142857 1336.892857142857,165.60714285714283 1440,150 L 1440,400 L 0,400 Z");
                    }

                    25% {
                        d: path("M 0,400 L 0,150 C 148.57142857142856,128.46428571428572 297.1428571428571,106.92857142857142 405,130 C 512.8571428571429,153.07142857142858 580.0000000000001,220.75000000000003 680,215 C 779.9999999999999,209.24999999999997 912.8571428571429,130.07142857142856 1045,107 C 1177.142857142857,83.92857142857143 1308.5714285714284,116.96428571428572 1440,150 L 1440,400 L 0,400 Z");
                    }

                    50% {
                        d: path("M 0,400 L 0,150 C 140.28571428571428,160.82142857142856 280.57142857142856,171.64285714285714 401,169 C 521.4285714285714,166.35714285714286 621.9999999999999,150.25 729,162 C 836.0000000000001,173.75 949.4285714285716,213.35714285714286 1069,216 C 1188.5714285714284,218.64285714285714 1314.2857142857142,184.32142857142856 1440,150 L 1440,400 L 0,400 Z");
                    }

                    75% {
                        d: path("M 0,400 L 0,150 C 114.85714285714286,126.60714285714286 229.71428571428572,103.21428571428571 360,108 C 490.2857142857143,112.78571428571429 636,145.75 762,143 C 888,140.25 994.2857142857142,101.78571428571429 1104,97 C 1213.7142857142858,92.21428571428571 1326.857142857143,121.10714285714286 1440,150 L 1440,400 L 0,400 Z");
                    }

                    100% {
                        d: path("M 0,400 L 0,150 C 87.39285714285714,118.10714285714286 174.78571428571428,86.21428571428571 295,83 C 415.2142857142857,79.78571428571429 568.2499999999999,105.25 713,129 C 857.7500000000001,152.75 994.2142857142858,174.7857142857143 1114,178 C 1233.7857142857142,181.2142857142857 1336.892857142857,165.60714285714283 1440,150 L 1440,400 L 0,400 Z");
                    }
                }
            </style>
            <path d="M 0,400 L 0,150 C 87.39285714285714,118.10714285714286 174.78571428571428,86.21428571428571 295,83 C 415.2142857142857,79.78571428571429 568.2499999999999,105.25 713,129 C 857.7500000000001,152.75 994.2142857142858,174.7857142857143 1114,178 C 1233.7857142857142,181.2142857142857 1336.892857142857,165.60714285714283 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#F0FAFB" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
        </svg>
        <section class="division-others layout-division-others">
            <div class="division-others__inner inner">
                <h2 class="division-others__title md-dots">その他の事業</h2>
                <?php
                // 現在の投稿IDを取得
                $current_post_id = get_the_ID();

                // WP_Queryを使って親投稿だけを取得
                $args = array(
                    'post_type'      => 'product', // カスタム投稿タイプ
                    'post_parent'    => 0, // 親投稿（親を持たない投稿）
                    'post__not_in'   => array($current_post_id), // 現在の投稿を除外
                    'posts_per_page' => -1, // 全て取得
                    'orderby'        => 'menu_order', // 順番を指定（必要に応じて）
                    'order'          => 'ASC'
                );
                $parent_posts = new WP_Query($args);

                // ループ開始
                if ($parent_posts->have_posts()) : ?>
                    <ul class="division-others__list">
                        <?php while ($parent_posts->have_posts()) : $parent_posts->the_post(); ?>
                            <li class="division-others__item">
                                <a href="<?php the_permalink(); ?>">
                                    <!-- アイキャッチ画像 -->
                                    <div class="division-others__item-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo esc_url(get_theme_file_uri('./images/default.jpg')); ?>" alt="No Image">
                                        <?php endif; ?>
                                    </div>
                                    <!-- 事業名 -->
                                    <h3 class="division-others__item-title"><?php the_title(); ?></h3>
                                    <!-- ACFの値 -->
                                    <p class="division-others__item-text"><?php the_field('business_text_2'); ?></p>
                                    <!-- 詳しく見るボタン -->
                                    <div class="division-others__item-btn">
                                        <span class="button-text">詳しく見る</span>
                                        <span rel="nofollow" href="<?php the_permalink(); ?>" class="button">
                                            <div class="button-icon">
                                                <span class="arrow"></span>
                                            </div>
                                        </span>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php
                endif;

                // WP_Query後のリセット
                wp_reset_postdata();
                ?>

            </div>
        </section>


        <?php get_template_part('template-parts/recruit'); ?>
        <?php get_template_part('template-parts/contact'); ?>
        <?php get_template_part('template-parts/banner'); ?>
    </main>
<?php get_footer();
}
?>