<?php get_header(); ?>
<main class="hidden-page">

    <div class="service-heading heading">
        <div class="heading__inner inner">
            <h1 class="heading__title"><?php the_title(); ?>
                <span class="heading__title-sub">business&nbsp;and&nbsp;product</span>
            </h1>
            <div class="breadcrumb">
                <?php custom_breadcrumb(); ?>
            </div>
        </div>
        <span class="treat bg-water"></span>
      <span class="treat bg-water2"></span>
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
            <ul class="products-other__list product-list">
                <?php
                // 現在の製品IDを取得
                $current_product_id = get_the_ID();

                // 現在の製品の事業カテゴリーを取得
                $current_terms = get_the_terms($current_product_id, 'business-category');

                if ($current_terms && !is_wp_error($current_terms)) {
                    // 事業カテゴリーのIDを取得
                    $current_term_ids = wp_list_pluck($current_terms, 'term_id');

                    // 除外したい製品のスラッグ
                    $excluded_slug = 'customize'; // ここに除外したい製品のスラッグを指定

                    // 除外する製品IDを取得
                    $excluded_products = get_posts([
                        'post_type' => 'goods',
                        'posts_per_page' => -1,
                        'name' => $excluded_slug, // スラッグで指定
                        'fields' => 'ids', // IDだけ取得
                    ]);

                    // 現在の製品IDを含めた除外したい製品IDを配列で指定
                    $excluded_product_ids = array_merge([$current_product_id], $excluded_products);

                    // 同じ事業に紐付いた製品を取得（現在の製品と特定のスラッグの製品を除外）
                    $related_products = new WP_Query([
                        'post_type' => 'goods',
                        'posts_per_page' => -1, // 全件取得
                        'post__not_in' => $excluded_product_ids, // 除外する製品IDを指定
                        'tax_query' => [
                            [
                                'taxonomy' => 'business-category',
                                'field'    => 'term_id',
                                'terms'    => $current_term_ids,
                            ],
                        ],
                    ]);

                    // 製品ループ
                    if ($related_products->have_posts()) :
                        while ($related_products->have_posts()) : $related_products->the_post(); ?>
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
                        <?php endwhile;
                        wp_reset_postdata(); // クエリのリセット
                    else : ?>
                        <p>関連する製品はありません。</p>
                    <?php endif; // 製品ループ終了 
                    ?>
                <?php } else { // 現在の製品に事業カテゴリーがない場合 
                ?>
                    <p>関連する事業カテゴリーがありません。</p>
                <?php } // if ($current_terms && !is_wp_error($current_terms)) 終了 
                ?>
            </ul>



            <!-- ここまで！！！！！！！！！！ -->
        </div>
    </section>



    <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>