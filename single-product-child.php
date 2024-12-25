<?php get_header(); ?>
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
    </div>




    <section class="products-detail layout-product-detail">
        <div class="products-detail__inner inner">
            <div class="product-detail__contents">
                <?php the_content(); ?>
            </div>
        </div>
    </section>



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
        <path d="M 0,400 L 0,150 C 87.39285714285714,118.10714285714286 174.78571428571428,86.21428571428571 295,83 C 415.2142857142857,79.78571428571429 568.2499999999999,105.25 713,129 C 857.7500000000001,152.75 994.2142857142858,174.7857142857143 1114,178 C 1233.7857142857142,181.2142857142857 1336.892857142857,165.60714285714283 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#FAFEFF" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    </svg>
    <section class="contact contact--reverse layout-contact">
        <div class="contact__inner inner inner--md">
            <div class="contact__wrap ">
                <h2 class="contact__title title js-top">お問い合わせ</h2>
                <p class="contact__description js-top">「ちょっと相談したい」「依頼が可能か聞いてみたい」など<br />少しでも気になることがございましたら<br />何でもお気軽にお問い合わせください。</p>
            </div>
            <div class="circle-container">
                <div class="circle-set js-top">
                    <a href="#"><img src="<?php echo esc_url(get_theme_file_uri("./images/circle.svg")); ?>" class="circle-image" />
                        <div class="centered-content">
                            <p class="contact-option__title">Webからの<br />お問い合わせ</p>
                            <div class="contact-option__link button-wrap">
                                入力フォームへ

                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="circle-set secondary-set js-top">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/circle.svg")); ?>" class="circle-image" />
                    <div class="centered-content">
                        <p class="contact-option__title">お電話での<br />お問い合わせ</p>
                        <a class="contact-option__link contact-option__link--tel" href="tel:0766-22-2155"><span>tel.</span>0766-22-2155</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact__polkadots polkadots">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/polkadots.svg")); ?>" />
        </div>
        <div class="contact__watersplash">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
        </div>
        <div class="contact__watersplash-sub">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
        </div>
    </section>



    <!-- <section class="products-other layout-products-other">
        <div class="products-other__inner inner">
            <h2 class="products-other__title md-dots">既製品について</h2>
            <ul class="products-other__list product-list">
                <li class="product-list__item">
                    <span class="product-list__category">使用場所&#0058;製紙会社</span>
                    <h3 class="product-list__title">硫酸バンド</h3>
                    <p class="product-list__text">主に 工場向けの凝集剤として 排水処理に使用され、高分子凝集剤に比べ 値段が安く、ほとんどの懸濁物、浮遊物に対して有効で、毒性がないため 大量に使用することができます。</p>
                    <div class="product-list__btn">
                        <span class="button-text">詳しく見る</span>
                        <a rel="" class="button">
                            <div class="button-icon">
                                <span class="arrow"></span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="product-list__item">
                    <span class="product-list__category">使用場所：製紙会社</span>
                    <h3 class="product-list__title">硫酸バンド</h3>
                    <p class="product-list__text">主に 工場向けの凝集剤として 排水処理に使用され、高分子凝集剤に比べ 値段が安く、ほとんどの懸濁物、浮遊物に対して有効で、毒性がないため 大量に使用することができます。</p>
                    <div class="product-list__btn">
                        <span class="button-text">詳しく見る</span>
                        <a rel="" class="button">
                            <div class="button-icon">
                                <span class="arrow"></span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="product-list__item">
                    <span class="product-list__category">使用場所：製紙会社</span>
                    <h3 class="product-list__title">硫酸バンド</h3>
                    <p class="product-list__text">主に 工場向けの凝集剤として 排水処理に使用され、高分子凝集剤に比べ 値段が安く、ほとんどの懸濁物、浮遊物に対して有効で、毒性がないため 大量に使用することができます。</p>
                    <div class="product-list__btn">
                        <span class="button-text">詳しく見る</span>
                        <a rel="" class="button">
                            <div class="button-icon">
                                <span class="arrow"></span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="product-list__item">
                    <span class="product-list__category">使用場所：製紙会社</span>
                    <h3 class="product-list__title">硫酸バンド</h3>
                    <p class="product-list__text">主に 工場向けの凝集剤として 排水処理に使用され、高分子凝集剤に比べ 値段が安く、ほとんどの懸濁物、浮遊物に対して有効で、毒性がないため 大量に使用することができます。</p>
                    <div class="product-list__btn">
                        <span class="button-text">詳しく見る</span>
                        <a rel="" class="button">
                            <div class="button-icon">
                                <span class="arrow"></span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="product-list__item">
                    <span class="product-list__category">使用場所：製紙会社</span>
                    <h3 class="product-list__title">硫酸バンド</h3>
                    <p class="product-list__text">主に 工場向けの凝集剤として 排水処理に使用され、高分子凝集剤に比べ 値段が安く、ほとんどの懸濁物、浮遊物に対して有効で、毒性がないため 大量に使用することができます。</p>
                    <div class="product-list__btn">
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
    <section class="products-other layout-products-other">
        <div class="products-other__inner inner">
            <h2 class="products-other__title md-dots">既製品について</h2>
            <!-- ここから！！！！！！！！！！ -->
            <?php
            // 現在の投稿のスラッグを取得
            $current_slug = get_post_field('post_name', get_the_ID());

            // 除外したい投稿IDを指定
            $excluded_posts = array(459); // 除外する投稿IDを配列で指定

            // "customize" の場合、タクソノミーに基づいてクエリを変更
            if ($current_slug === 'customize') {
                // 現在の投稿に関連付けられたカスタム親タクソノミーを取得
                $custom_parents = wp_get_post_terms(get_the_ID(), 'custom_parent', array('fields' => 'ids')); // IDで取得

                if (!empty($custom_parents)) {
                    // タクソノミーに基づくクエリ
                    $args = array(
                        'post_type' => 'product',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'custom_parent', // タクソノミー名
                                'field'    => 'term_id', // IDを使用
                                'terms'    => $custom_parents, // カスタム親タクソノミーのID
                            ),
                        ),
                        'post__not_in'   => array_merge(array(get_the_ID()), $excluded_posts), // 除外する投稿を指定
                        'posts_per_page' => -1, // 全て取得
                        'orderby'        => 'menu_order', // 必要に応じて変更
                        'order'          => 'ASC'
                    );
                } else {
                    echo '<p>関連する親タクソノミーが設定されていません。</p>';
                    return;
                }
            } else {
                // 通常の親投稿に基づくクエリ
                $parent_id = wp_get_post_parent_id(get_the_ID());

                if ($parent_id) {
                    $args = array(
                        'post_type'      => 'product',
                        'post_parent'    => $parent_id, // 親投稿ID
                        'post__not_in'   => array_merge(array(get_the_ID()), $excluded_posts), // 除外する投稿を指定
                        'posts_per_page' => -1, // 全て取得
                        'orderby'        => 'menu_order', // 必要に応じて変更
                        'order'          => 'ASC'
                    );
                } else {
                    echo '<p>親投稿が設定されていません。</p>';
                    return;
                }
            }

            // WP_Queryを実行
            $child_posts = new WP_Query($args);

            // ループ開始
            if ($child_posts->have_posts()) : ?>
                <ul class="products-other__list product-list">
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
            else :
                echo '<p>関連する投稿はありません。</p>';
            endif;

            // WP_Queryのリセット
            wp_reset_postdata();
            ?>


            <!-- ここまで！！！！！！！！！！ -->
        </div>
    </section>
    <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>