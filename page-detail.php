<?php get_header(); ?>
<main class="hidden-page">
    <div class="company-heading heading">
        <div class="heading__inner inner">
            <h1 class="heading__title">北陸化成工業所を深く知る<?php the_field('number-of-businesses'); ?>
                <span class="heading__title-sub"><span class="md-capital">about</span>
            </h1>
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
    <section class="detail-data layout-detail-data">
        <div class="detail-data__inner inner inner--lg">
            <div class="detail-data__heading recruit-heading">
                <div class="recruit-heading-wrap">
                    <h2 class="recruit-heading__title" id="data">データで見る北陸化成工業所</h2>
                    <p class="recruit-heading__text recruit-heading__text--detail md-none">北陸化成工業所では、従業員一人一人が働きやすい職場であるために、<br class="md-none">“社員のために会社ができること”を考えながら、労働条件の改善に努めています。</p>
                </div>
                <p class="recruit-heading__text recruit-heading__text--detail md-show">北陸化成工業所では、従業員一人一人が働きやすい職場であるために、<br class="md-none">“社員のために会社ができること”を考えながら、労働条件の改善に努めています。</p>
            </div>
        </div>
        <div class="detail-data__contents inner inner--lg">
            <h3 class="detail-data__title">会社について</h3>
            <div class="detail-data-wrap">
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">創業年数</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">84</span>
                            <span class="detail-item__contents-unit">年</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon01.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">従業員数</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">69</span>
                            <span class="detail-item__contents-unit">名</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon02.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">累計売上高</p>
                        <p class="detail-item__contents-item-attention">*2024年3月現在</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">1000</span>
                            <span class="detail-item__contents-unit">億円以上</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon03.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">自己資本比率</p>
                        <p class="detail-item__contents-item-attention">*2024年3月現在</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">64.6</span>
                            <span class="detail-item__contents-unit">%</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon04.svg")); ?>" alt="">
                    </div>
                </div>
            </div>
            <h3 class="detail-data__title">働く環境について</h3>
            <div class="detail-data-wrap">
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">年間休日</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">115</span>
                            <span class="detail-item__contents-unit">日</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon2-1.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">年次有休取得率</p>
                        <p class="detail-item__contents-item-attention">※ 2023年度実績</p>
                        <p class="detail-item__contents-item-attention">製造業の全国平均は65.8％</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">76.9</span>
                            <span class="detail-item__contents-unit">%</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon2-2.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">平均残業時間</p>
                        <p class="detail-item__contents-item-attention">※ 2023年度実績</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">8.9</span>
                            <span class="detail-item__contents-unit">時間/月</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon2-3.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">深夜労働の割増率</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">67~87</span>
                            <span class="detail-item__contents-unit">%割増</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon2-4.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item detail-item--btn">
                    <a href="">
                        <div class="detail-item__contents-flex">
                            <div class="detail-item__contents">
                                <p class="detail-item__contents-item">育休取得率</p>
                                <p class="detail-item__contents-item-attention">（男性・女性）</p>
                                <div class="detail-item__contents-data-wrap">
                                    <span class="detail-item__contents-data">100</span>
                                    <span class="detail-item__contents-unit">%</span>
                                </div>
                            </div>
                            <div class="detail-item__img">
                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon2-5.svg")); ?>" alt="">
                            </div>
                        </div>
                        <div class="detail-item__btn">
                            <span>パパ育休取得者の声を見る</span>
                            <div class="button-icon">
                                <span class="arrow"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">育休復帰率</p>
                        <p class="detail-item__contents-item-attention">（男性・女性）</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">84</span>
                            <span class="detail-item__contents-unit">%</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon2-6.svg")); ?>" alt="">
                    </div>
                </div>
            </div>
            <h3 class="detail-data__title">働く人について</h3>
            <div class="detail-data-wrap">
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">平均勤続年数</p>
                        <p class="detail-item__contents-item-attention">※ 2024年度現在</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">15.6</span>
                            <span class="detail-item__contents-unit">年</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon3-1.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">年齢構成比</p>
                        <p class="detail-item__contents-item-attention">※ 2024年度現在</p>
                        <div class="detail-item__contents-ratio-wrap">
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">10-20</span>代</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">13.2</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">30</span>代</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">27.9</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">40</span>代</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">22.1</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">50</span>代</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">27.1</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">60〜</span>代</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">27.1</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-item__img detail-item__img--ratio2">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon3-2.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">通勤時間構成比</p>
                        <div class="detail-item__contents-ratio-wrap">
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">10</span>分以内</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">27.1</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">20</span>分以内</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">25.0</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">30</span>分以内</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">29.2</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">40</span>分以内</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">10.4</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">40</span>分以上</span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">8.3</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-item__img detail-item__img--ratio3">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon3-3.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">最終学歴構成比</p>
                        <p class="detail-item__contents-item-attention">※ 2024年度現在</p>
                        <div class="detail-item__contents-ratio-wrap">
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">大学院</span></span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">4.3</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">短大･大学</span></span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">42.0</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">高専･専門</span></span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">11.6</span>%</span>
                            </div>
                            <div class="time-list">
                                <span class="time-list__term"><span class="md-attention">高等学校</span></span>
                                <span class="time-list__line"></span>
                                <span class="time-list__data "><span class="md-attention">42.0</span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-item__img detail-item__img--ratio4">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-icon3-4.svg")); ?>" alt="">
                    </div>
                </div>
            </div>
            <h3 class="detail-data__title">福利厚生について</h3>
            <div class="detail-data-wrap">
                <div class="detail-item div1">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">健康診断受診率</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">100</span>
                            <span class="detail-item__contents-unit">%</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-icon4-1.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item div2">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">バースデー休暇取得率</p>
                        <p class="detail-item__contents-item-attention">*毎年、誕生月に1日「特別休暇」を</p>
                        <p class="detail-item__contents-item-attention">*取得することができます</p>


                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">99</span>
                            <span class="detail-item__contents-unit">%以上</span>
                        </div>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-icon4-2.svg")); ?>" alt="">
                    </div>
                </div>
                <div class="detail-item div3">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">産前産後休暇支援</p>
                        <p class="detail-item__contents-item-attention">*当社では、女性社員の産前産後期間中も</p>
                        <p class="detail-item__contents-item-attention">*基本給が全額支払われます</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-unit">基本給</span>
                            <span class="detail-item__contents-data detail-item__contents-data--birth">全額支給</span>
                        </div>
                    </div>

                </div>
                <div class="detail-item div4">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">資格取得・講習受講件数</p>
                        <p class="detail-item__contents-item-attention">会社が費用を全額負担します</p>
                        <p class="detail-item__contents-item-attention">※2023年度実績</p>
                        <div class="detail-item__contents-data-wrap">
                            <span class="detail-item__contents-data">69</span>
                            <span class="detail-item__contents-unit">件</span>
                        </div>
                    </div>
                </div>
                <div class="detail-item div5">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">改善提案件数 / 年間褒賞金額</p>
                        <p class="detail-item__contents-item-attention">社員の創意工夫で仕事のやり方や環境を改善するための提案ができます</p>
                        <p class="detail-item__contents-item-attention">*2023年度実績</p>
                        <div class="detail-item__contents-data-wrap">
                            <div class="detail-item__contents-data-flex">
                                <span class="detail-item__contents-unit">約</span>
                                <span class="detail-item__contents-data">60件</span>
                            </div>
                            <div class="detail-item__contents-data-flex">
                                <span class="detail-item__contents-unit"><span class="md-none">/</span>約<span class="detail-item__contents-data">300,000</span>
                                    <span class="detail-item__contents-unit">円</span></span>
                            </div>

                        </div>
                    </div>
                    <div class="detail-item__img md-none">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-icon4-5.svg")); ?>" alt="">
                    </div>
                </div>

                <div class="detail-item div6">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">ライフステージ支援</p>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-icon4-6.svg")); ?>" alt="">
                    </div>
                </div>
            </div>
            <h3 class="detail-data__title" id="career">教育制度・等級制度について</h3>
            <div class="detail-data-wrap div7">
                <div class="detail-item div7">
                    <div class="detail-item__contents">
                        <p class="detail-item__contents-item">キャリアパスの概要図</p>
                    </div>
                    <div class="detail-item__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-icon5-1.svg")); ?>" alt="キャリアパスの概要図">
                    </div>
                </div>
            </div>
    </section>
    <div class="detail-roll">
        <div class="detail-roll__inner">
            <div class="service__swiper detail-roll-swiper">
                <div class="swiper js-detail-roll-swiper">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-slide01.jpg")); ?>" alt="省略">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-slide02.jpg")); ?>" alt="省略">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-slide03.jpg")); ?>" alt="省略">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-slide04.jpg")); ?>" alt="省略">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-slide05.jpg")); ?>" alt="省略">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-slide06.jpg")); ?>" alt="省略">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-slide07.jpg")); ?>" alt="省略">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150" style="margin-top: -7px;">
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
    <section class="detail-question layout-detail-roll" id="interview">
        <div class="detail-question__inner inner inner--lg ">
            <div class="detail-question__heading recruit-heading">
                <div class="recruit-heading-wrap">
                    <p class="recruit-heading__title">社員アンケート</p>
                    <p class="recruit-heading__text recruit-heading__text--detail md-none">北陸化成工業所のこと、働く環境のこと、オフの過ごし方まで、社員たちのリアルをご紹介します。</p>
                </div>
            </div>
            <p class="recruit-heading__text recruit-heading__text--detail md-show">北陸化成工業所のこと、働く環境のこと、オフの過ごし方まで、社員たちのリアルをご紹介します。</p>
            <div class="details-question__contents">
                <div class="details-question__contents-map js-top">
                    <div class="detail-question__inner">
                        <div class="recruit-question__tab tab">
                            <div class="tab__menu-wrap">
                                <ul class="tab__menu">
                                    <li class="tab__menu-item js-tab-menu is-active" data-number="tab04">北陸化成工業所について</li>
                                    <li class="tab__menu-item js-tab-menu" data-number="tab05">仕事について</li>
                                    <li class="tab__menu-item js-tab-menu" data-number="tab06">働く環境について</li>
                                    <li class="tab__menu-item js-tab-menu" data-number="tab07">人について</li>
                                </ul>
                            </div>
                            <ul class="tab__content tab__content--detail">
                                <li id="tab04" class="tab__content-item js-tab-content is-active">
                                    <ul class="tab__content-list faq-list">
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>当社の企業としての自慢はどんなところですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>1</span>位</dt>
                                                    <dd class="recruit-answer__description">75年の安定企業</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>2</span>位</dt>
                                                    <dd class="recruit-answer__description">循環資源の循環的利用とする事業内容</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>3</span>位</dt>
                                                    <dd class="recruit-answer__description">人々のインフラを支える事業内容</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>4</span>位</dt>
                                                    <dd class="recruit-answer__description">地元密着</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>5</span>位</dt>
                                                    <dd class="recruit-answer__description">製造から配送まで全工程を一貫して行う強固なグループ体制</dd>
                                                </dl>
                                                <dl class="recruit-answer__list recruit-answer__list--others">
                                                    <dt class="recruit-answer__number">その他の意見</dt>
                                                    <dd class="recruit-answer__description">SDGｓの先駆け&nbsp;&frasl;&nbsp;残業が少ない、有給が使いやすい&nbsp;&frasl;&nbsp;人間性が高く、楽しい人たちが集まっている</dd>
                                                </dl>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>当社の働くうえでの魅力はなんですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>ワークライフバランスが保てる環境</li>
                                                    <li>子育てしやすい環境</li>
                                                    <li>福利厚生が整っている</li>
                                                    <li>セレクト型社員旅行</li>
                                                    <li>仕事を任せてもらえる環境</li>
                                                    <li>コンプライアンスが遵守され安心して働ける</li>
                                                    <li>会社の収益性、安定性に安心して働ける</li>
                                                    <li>安心してのびのび働ける</li>
                                                    <li>評価基準が明確で正当に評価される</li>
                                                    <li>人間性が高く、楽しい人たちと一緒に働ける</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>当社のこんなところが面白い</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>セレクト型社員旅行</li>
                                                    <li>共済会イベント（例：BBQ、ボーリング大会）</li>
                                                    <li>改善も褒賞もダブルでハッピー！提案制度！</li>
                                                    <li>●●の日（例：健康の日）</li>
                                                    <li>改善事例発表会（おいしいお弁当付き）</li>
                                                    <li>参加自由の放課後教室</li>
                                                    <li>参加自由のラジオ体操</li>
                                                    <li>バースデー休暇が取得できる</li>
                                                    <li>行事で、みんなのいつもとは違う顔が見れる（特に社長）</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>あなたにとって、『harmony』とは？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>支えあいながら同じ方向へと進んでいく</li>
                                                    <li>協力して物事に取り組める円滑な人間関係</li>
                                                    <li>自他共栄！皆と調和して化学反応(化学会社だけに）を起こして美しい音色を奏でる事！</li>
                                                    <li>仕事とプライベートがどちらも充実している状態</li>
                                                    <li>信頼できて穏やかな職場</li>
                                                    <li>協力しあえる関係の構築</li>
                                                    <li>人間関係では、人の気持ちを想像し、時には違っていたと学びながら作られるもの</li>
                                                    <li>お互いの考えを尊重し合えること</li>
                                                    <li>互いをリスペクトし、助け合う心</li>
                                                    <li>仕事も私生活もどちらも通じて自分の人生がハッピーになること</li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>

                                <li id="tab05" class="tab__content-item js-tab-content">
                                    <ul class="tab__content-list faq-list">
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q.</span>働きやすい会社だと思いますか？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-01.svg")); ?>" alt="" class="md-center">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q.</span>職場はどんな雰囲気ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-08.svg")); ?>" alt="">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q.</span>あなたのWorkとLifeのバランスは？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-02.svg")); ?>" alt="" class="md-center">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q.</span>富山県のいいところを教えてください。</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>魚が美味しい</li>
                                                    <li>季節ごとに美味しい食材あるとこ</li>
                                                    <li>景色が良い</li>
                                                    <li>海、野、山が素晴らしい</li>
                                                    <li>収入と支出のバランス良く生活できるところ</li>
                                                    <li>暮らしやすい</li>
                                                    <li>自然災害が少ない</li>
                                                    <li>人ごみが少ないところ</li>
                                                    <li>水が豊富で美味しい、水道水が飲める</li>
                                                    <li>穏やかなところ</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q.</span>富山県のおすすめグルメは何ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>1</span>位</dt>
                                                    <dd class="recruit-answer__description">寿司</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>2</span>位</dt>
                                                    <dd class="recruit-answer__description">魚</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>3</span>位</dt>
                                                    <dd class="recruit-answer__description">ブラックラーメン</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>4</span>位</dt>
                                                    <dd class="recruit-answer__description">昆布のおにぎり</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>5</span>位</dt>
                                                    <dd class="recruit-answer__description">昆布〆</dd>
                                                </dl>
                                                <dl class="recruit-answer__list recruit-answer__list--others">
                                                    <dt class="recruit-answer__number">その他の意見</dt>
                                                    <dd class="recruit-answer__description">ます寿司&nbsp;&frasl;&nbsp;小箱カニ&nbsp;&frasl;&nbsp;ホタルイカの干物&nbsp;&frasl;&nbsp;白エビ</dd>
                                                </dl>

                                            </div>

                                        </li>
                                    </ul>
                                </li>
                                <li id="tab06" class="tab__content-item js-tab-content">
                                    <ul class="tab__content-list faq-list">
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q.</span>県民性ならぬ社員性は？</p>
                                            <div class="faq-list__item-answer recruit-answer">

                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>1</span>位</dt>
                                                    <dd class="recruit-answer__description">個性的な</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>2</span>位</dt>
                                                    <dd class="recruit-answer__description">勤勉な人が多い</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>3</span>位</dt>
                                                    <dd class="recruit-answer__description">優しい人が多い</dd>
                                                </dl>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>新卒入社・中途入社どちらですか？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-07.svg")); ?>" alt="" class="md-center">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>学生の時、または前職で学んだ事を仕事に活かせていますか？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-05.svg")); ?>" alt="" class="md-center">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>前職はどんなお仕事をされていましたか？（中途の方）</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>社会保険労務</li>
                                                    <li>自動車整備士</li>
                                                    <li>高速道路現場、作業員</li>
                                                    <li>ドラッグストアのシステム関係</li>
                                                    <li>不良率改善</li>
                                                    <li>品質管理</li>
                                                    <li>人材育成等</li>
                                                    <li>資材購買</li>
                                                    <li>飲食関係</li>
                                                    <li>電子部品関係</li>
                                                </ul>
                                            </div>

                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>上司はどんな人ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>1</span>位</dt>
                                                    <dd class="recruit-answer__description">真面目</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>2</span>位</dt>
                                                    <dd class="recruit-answer__description">やさしい</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>3</span>位</dt>
                                                    <dd class="recruit-answer__description">部下おもい</dd>
                                                </dl>
                                                <dl class="recruit-answer__list recruit-answer__list--others">
                                                    <dt class="recruit-answer__number">その他の意見</dt>
                                                    <dd class="recruit-answer__description">厳しい&nbsp;&frasl;&nbsp;面白い&nbsp;&frasl;&nbsp;明るい&nbsp;&frasl;&nbsp;賢い&nbsp;&frasl;&nbsp;怖い&nbsp;&frasl;&nbsp;おっちょこちょい</dd>
                                                </dl>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>会社のエースの特徴はどんな人ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>1</span>位</dt>
                                                    <dd class="recruit-answer__description">頭が切れる</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>2</span>位</dt>
                                                    <dd class="recruit-answer__description">コミュニケーション能力が高い</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>3</span>位</dt>
                                                    <dd class="recruit-answer__description">器用</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>4</span>位</dt>
                                                    <dd class="recruit-answer__description">プレゼンテーション能力が高い</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>5</span>位</dt>
                                                    <dd class="recruit-answer__description">優しい</dd>
                                                </dl>
                                                <dl class="recruit-answer__list recruit-answer__list--others">
                                                    <dt class="recruit-answer__number">その他の意見</dt>
                                                    <dd class="recruit-answer__description">明るい&nbsp;&frasl;&nbsp;クール&nbsp;&frasl;&nbsp;真面目&nbsp;&frasl;&nbsp;行動力がある&nbsp;&frasl;&nbsp;勤勉</dd>
                                                </dl>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>通勤手段は何ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-03.svg")); ?>" alt="" class="md-center">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>通勤時間はどのくらいですか？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-06.svg")); ?>" alt="" class="md-center">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>5年後のあなたの目標は何ですか？（仕事）</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>先輩や上司が求めてるライン以上で仕事をこなせるようになる</li>
                                                    <li>仕事を任せられる人材</li>
                                                    <li>課をまとめている</li>
                                                    <li>現役で仕事をしている</li>
                                                    <li>社内で情報系の仕事に携わる</li>
                                                </ul>
                                            </div>

                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>求職者の方にむけて富山弁で一言！</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>いっかい来てみられ</li>
                                                    <li>いっしょに、やらんまいけ</li>
                                                    <li>とても良い雰囲気の会社やよ</li>
                                                    <li>大手じゃないけど一目置かれとる会社。どうけ？</li>
                                                    <li>一緒に働こまいけ！</li>
                                                    <li>一緒にきときと働きましょう！待っとっちゃ。</li>
                                                </ul>
                                            </div>

                                        </li>
                                    </ul>
                                </li>
                                <li id="tab07" class="tab__content-item js-tab-content">
                                    <ul class="tab__content-list faq-list">
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>出身地はどこですか？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-09.svg")); ?>" alt="">突然
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>大切にしているものは何ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>1</span>位</dt>
                                                    <dd class="recruit-answer__description">家族</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>2</span>位</dt>
                                                    <dd class="recruit-answer__description">プライベート</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>3</span>位</dt>
                                                    <dd class="recruit-answer__description">趣味</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>4</span>位</dt>
                                                    <dd class="recruit-answer__description">健康</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>5</span>位</dt>
                                                    <dd class="recruit-answer__description">仕事</dd>
                                                </dl>
                                                <dl class="recruit-answer__list recruit-answer__list--others">
                                                    <dt class="recruit-answer__number">その他の意見</dt>
                                                    <dd class="recruit-answer__description">友人&nbsp;&frasl;&nbsp;お金&nbsp;&frasl;&nbsp;美容&nbsp;&frasl;&nbsp;食事</dd>
                                                </dl>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>大切にしているものは何ですか？（生活）</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>健康で働き、家族と共に過ごす喜びを分かち合う</li>
                                                    <li>家を建てる</li>
                                                    <li>健康で、生活を愉しんでいる</li>
                                                    <li>夢は海外の音楽パーティーに行くこと</li>
                                                    <li>海外旅行に行きたい</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>インドア派？アウトドア派？</p>
                                            <div class="faq-list__item-answer recruit-answer-img">
                                                <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-list-04.svg")); ?>" alt="" class="md-center">
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>仕事後はどう過ごしていますか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>1</span>位</dt>
                                                    <dd class="recruit-answer__description">テレビ(YouTubeやSNSも含む)</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>2</span>位</dt>
                                                    <dd class="recruit-answer__description">お酒を飲む</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>3</span>位</dt>
                                                    <dd class="recruit-answer__description">読書</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>4</span>位</dt>
                                                    <dd class="recruit-answer__description">自己啓発</dd>
                                                </dl>
                                                <dl class="recruit-answer__list">
                                                    <dt class="recruit-answer__number"><span>5</span>位</dt>
                                                    <dd class="recruit-answer__description">子供と遊ぶ</dd>
                                                </dl>
                                                <dl class="recruit-answer__list recruit-answer__list--others">
                                                    <dt class="recruit-answer__number">その他の意見</dt>
                                                    <dd class="recruit-answer__description">ゲーム&nbsp;&frasl;&nbsp;習い事&nbsp;&frasl;&nbsp;家事&nbsp;&frasl;&nbsp;地域活動&nbsp;&frasl;&nbsp;運動&nbsp;&frasl;&nbsp;脳トレ</dd>
                                                </dl>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>あなたの趣味は何ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>キャンプ</li>
                                                    <li>音楽</li>
                                                    <li>ギター</li>
                                                    <li>ゲーム</li>
                                                    <li>カラオケ</li>
                                                    <li>子供野球応援</li>
                                                    <li>ドライブ</li>
                                                    <li>読書</li>
                                                    <li>釣り</li>
                                                    <li>映画鑑賞</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="faq-list__item">
                                            <p class="faq-list__item-question js-faq-question"><span>Q</span>あなたの推し活は何ですか？</p>
                                            <div class="faq-list__item-answer recruit-answer">
                                                <ul class="recruit-answer__items">
                                                    <li>バンド</li>
                                                    <li>美術鑑賞</li>
                                                    <li>アーティストのライブに行く</li>
                                                    <li>ゲーム実況動画</li>
                                                    <li>ポケモンスリープ</li>
                                                    <li>サンリオグッズ集め</li>
                                                    <li>子供に課金</li>
                                                    <li>野外パーティーに行く</li>
                                                    <li>バイク</li>
                                                    <li>海外サッカー観戦</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
        <style>
            .path-0 {
                animation: pathAnim-0 4s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes pathAnim-0 {
                0% {
                    d: path("M 0,400 L 0,150 C 105.17857142857142,102.25 210.35714285714283,54.5 334,81 C 457.64285714285717,107.5 599.75,208.25000000000003 713,208 C 826.25,207.74999999999997 910.6428571428571,106.5 1027,80 C 1143.357142857143,53.50000000000001 1291.6785714285716,101.75 1440,150 L 1440,400 L 0,400 Z");
                }

                25% {
                    d: path("M 0,400 L 0,150 C 123.07142857142858,146.78571428571428 246.14285714285717,143.57142857142858 356,161 C 465.85714285714283,178.42857142857142 562.4999999999999,216.5 687,221 C 811.5000000000001,225.5 963.8571428571429,196.42857142857144 1094,179 C 1224.142857142857,161.57142857142856 1332.0714285714284,155.78571428571428 1440,150 L 1440,400 L 0,400 Z");
                }

                50% {
                    d: path("M 0,400 L 0,150 C 95.78571428571428,131.64285714285714 191.57142857142856,113.28571428571428 300,133 C 408.42857142857144,152.71428571428572 529.5,210.49999999999997 670,220 C 810.5,229.50000000000003 970.4285714285716,190.71428571428572 1102,171 C 1233.5714285714284,151.28571428571428 1336.7857142857142,150.64285714285714 1440,150 L 1440,400 L 0,400 Z");
                }

                75% {
                    d: path("M 0,400 L 0,150 C 117.60714285714286,148.96428571428572 235.21428571428572,147.92857142857144 339,130 C 442.7857142857143,112.07142857142857 532.75,77.25000000000001 666,83 C 799.25,88.74999999999999 975.7857142857142,135.07142857142856 1112,153 C 1248.2142857142858,170.92857142857144 1344.107142857143,160.46428571428572 1440,150 L 1440,400 L 0,400 Z");
                }

                100% {
                    d: path("M 0,400 L 0,150 C 105.17857142857142,102.25 210.35714285714283,54.5 334,81 C 457.64285714285717,107.5 599.75,208.25000000000003 713,208 C 826.25,207.74999999999997 910.6428571428571,106.5 1027,80 C 1143.357142857143,53.50000000000001 1291.6785714285716,101.75 1440,150 L 1440,400 L 0,400 Z");
                }
            }
        </style>
        <path d="M 0,400 L 0,150 C 105.17857142857142,102.25 210.35714285714283,54.5 334,81 C 457.64285714285717,107.5 599.75,208.25000000000003 713,208 C 826.25,207.74999999999997 910.6428571428571,106.5 1027,80 C 1143.357142857143,53.50000000000001 1291.6785714285716,101.75 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#f0fafb" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path>
    </svg>
    <section class="detail-works layout-detail-works" id="division">
        <div class="detail-works__inner inner inner--lg">
            <div class="detail-works__heading recruit-heading">
                <div class="recruit-heading-wrap">
                    <p class="recruit-heading__title">職種紹介</p>
                    <p class="recruit-heading__text recruit-heading__text--detail  recruit-heading__text--detail  md-none">廃棄物を資源へとリサイクルする唯一無二の技術で、<br>ライフラインや地域の主要産業を支える当社の7つの職種をご紹介します。
                    </p>
                </div>
            </div>
            <p class="recruit-heading__text md-show recruit-heading__text--detail ">廃棄物を資源へとリサイクルする唯一無二の技術で、<br>ライフラインや地域の主要産業を支える当社の7つの職種をご紹介します。</p>

            <div class="detail-works-map-wrap">
                <div class="detail-works__img md-none">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-map.svg")); ?>" usemap="#Map" width="1200" height="645" alt="職種の相関図">
                    <map name="Map">
                        <area shape="office" coords="182,222,303,322" href="#office" alt="事務">
                        <area shape="sales" coords="305,224,420,325" href="#sales" alt="営業">
                        <area shape="engineering" coords="608,221,727,325" href="#engineering" alt="技術">
                        <area shape="operations" coords="729,223,838,324" href="#operations" alt="工務">
                        <area shape="analysis" coords="230,454,364,545" href="#analysis" alt="分析">
                        <area shape="production" coords="674,453,967,544" href="#production" alt="生産">
                    </map>
                </div>
                <div class="detail-works__img md-show">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-map-sp.svg")); ?>" usemap="#Map" width="615" height="428" alt="職種の相関図">
                    <map name="Map-sp">
                        <area shape="office" coords="15,139,102,212" href="#office" alt="事務">
                        <area shape="sales" coords="103,138,188,212" href="#sales" alt="営業">
                        <area shape="engineering" coords="55,311,141,380" href="#engineering" alt="技術">
                        <area shape="operations" coords="330,137,419,212" href="#operations" alt="工務">
                        <area shape="analysis" coords="420,136,506,214" href="#analysis" alt="分析">
                        <area shape="production" coords="352,309,574,381" href="#production" alt="生産">
                    </map>
                </div>
            </div>
            <ul class="interview__list interview-list">
                <li class="interview-list__item" id="office">
                    <div class="interview-list__item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-division1.jpg")); ?>" alt="">
                    </div>
                    <div class="interview-list__item-content">
                        <p class="interview-list__item-age">支える</p>
                        <p class="interview-list__item-division">事務（営業・業務課、経理課、総務課）</p>
                        <p class="interview-list__item-text">営業部門のバックオフィスとして、発注書・請求書等の文書作成や顧客対応等を行ない、営業担当者をサポートしています。</p>
                        <div class="interview-list__btn">
                            <a class="button-container" href="<?php echo esc_url(home_url("interview")) ?>">
                                <span class="button-text">先輩社員の声を見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="interview-list__item" id="sales">
                    <div class="interview-list__item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-division2.jpg")); ?>" alt="">
                    </div>
                    <div class="interview-list__item-content">
                        <p class="interview-list__item-age">売る</p>
                        <p class="interview-list__item-division">営業（営業・業務課）</p>
                        <p class="interview-list__item-text">北陸化成工業所の顔として、お客様と接し、要望を聞き取り、当社の力がどのように発揮できるかを探り、つなぎ合わせ、新たなビジネスを作り上げていく仕事です。</p>
                        <div class="interview-list__btn">
                            <a class="button-container" href="<?php echo esc_url(home_url("interview")) ?>">
                                <span class="button-text">先輩社員の声を見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="interview-list__item" id="analysis">
                    <div class="interview-list__item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-division3.jpg")); ?>" alt="">
                    </div>
                    <div class="interview-list__item-content ">
                        <p class="interview-list__item-age">調べる</p>
                        <p class="interview-list__item-division">分析（技術課）</p>
                        <p class="interview-list__item-text">"当社製品の原材料から 最終的な製品まで、さまざまなサンプルの分析や検査を行っています。
                            お客様に確かな品質の製品をお届けするための重要な仕事です。"</p>
                        <div class="interview-list__btn">
                            <a class="button-container" href="<?php echo esc_url(home_url("interview")) ?>">
                                <span class="button-text">先輩社員の声を見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="interview-list__item" id="engineering">
                    <div class="interview-list__item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-division4.jpg")); ?>" alt="">
                    </div>
                    <div class="interview-list__item-content">
                        <p class="interview-list__item-age">生み出す</p>
                        <p class="interview-list__item-division">技術（生産技術課）</p>
                        <p class="interview-list__item-text">会社の生産活動を支援しています。お客様からの技術相談、製造時の技術フォロー、産業廃棄物の有効利用といった、案件企画や品質及びコストの設計に携わる部署です。</p>
                        <div class="interview-list__btn">
                            <a class="button-container" href="">
                                <span class="button-text">先輩社員の声を見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="interview-list__item" id="operations">
                    <div class="interview-list__item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail-division5.webp")); ?>" alt="">
                    </div>
                    <div class="interview-list__item-content ">
                        <p class="interview-list__item-age">支える</p>
                        <p class="interview-list__item-division">工務（工務課）</p>
                        <p class="interview-list__item-text">"プラントの新規設置や修理更新を担当しています。設計担当と工作担当に分かれており
                            設計は機械図面や制御プログラムの作成をしています。工作は溶接修理や配管工事を行っています。"</p>
                        <div class="interview-list__btn">
                            <a class="button-container" href="<?php echo esc_url(home_url("interview")) ?>">
                                <span class="button-text">先輩社員の声を見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="interview-list__item" id="production">
                    <div class="interview-list__item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-division6.jpg")); ?>" alt="">
                    </div>
                    <div class="interview-list__item-content">
                        <p class="interview-list__item-age">製造する</p>
                        <p class="interview-list__item-division">生産（化成品製造課）</p>
                        <p class="interview-list__item-text">工業用薬品の製造を担当します。自動化された化学プラントで決められた手順で監視や操作を行うことが主な仕事です。フォークリフト等の産業車両の運転もあります。</p>
                        <div class="interview-list__btn">
                            <a class="button-container" href="<?php echo esc_url(home_url("interview")) ?>">
                                <span class="button-text">先輩社員の声を見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="interview-list__item">
                    <div class="interview-list__item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri("./images/detail/detail-division7.jpg")); ?>" alt="">
                    </div>
                    <div class="interview-list__item-content ">
                        <p class="interview-list__item-age">製造する</p>
                        <p class="interview-list__item-division">生産（鋳材製造課）</p>
                        <p class="interview-list__item-text">鋳物用再生砂、レジンコーテッドサンド、中子を製造し、地域の鋳物メーカーに供給しています。製造設備の監視や操作を行い、各製品の生産を行っています。</p>
                        <div class="interview-list__btn">
                            <a class="button-container" href="<?php echo esc_url(home_url("interview")) ?>">
                                <span class="button-text">先輩社員の声を見る</span>
                                <div class="button-icon">
                                    <span class="arrow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <?php get_template_part('template-parts/recruit'); ?>
    <?php get_template_part('template-parts/contact'); ?>
    <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>