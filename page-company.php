<?php get_header(); ?>
<main class="hidden-page">
    <div class="company-heading heading">
        <div class="heading__inner inner">
            <h1 class="heading__title">会社案内<?php the_field('number-of-businesses'); ?>
                <span class="heading__title-sub"><span class="md-capital">company</span></span>
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
		<span class="treat bg-water"></span>
      <span class="treat bg-water2"></span>
    </div>


    <div class="company-menu layout__menu menu js-top">
        <div class="menu__inner inner">
            <ul class="menu__list">
                <li class="menu__item" href="#message">
                    <a href="#message">
                        <div class="menu__button">代表メッセージ
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#vision">
                        <div class="menu__button">企業理念
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#about">
                        <div class="menu__button">会社概要
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#organization">
                        <div class="menu__button">組織図
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#access">
                        <div class="menu__button">アクセス
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#history">
                        <div class="menu__button">沿革
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#plan">
                        <div class="menu__button">一般事業主行動計画
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#group">
                        <div class="menu__button">グループ会社
                            <span class="menu__arrow"></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <section class="company-massage layout-company-message js-top" id="message">
        <div class="company-massage__inner">
            <h2 class="company-massage__title sub-title md-dots">代表メッセージ</h2>
            <div class="company-massage__img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/company-message.webp")); ?>" alt="省略" />
            </div>
            <div class="company-massage__contents">
                <div class="company-massage__content-title-wrap">
                    <h3 class="company-massage__contents-title">工業用薬品の製造を通じて<br>地域に貢献できる企業であり続ける</h3>
                    <p class="company-massage__contents-name">代表取締役社長<span
                            class="md-none">&emsp;</span><span>中山&nbsp;浩光</span></p>
                </div><br>
                <div class="company-massage__content-text-wrap">
                    <h3 class="company-massage__contents-text">「工業用薬品の製造を通じて地域に貢献できる企業でありたい」<br
                            class="md-none">昭和24年以来、私たちはそう願いながら<br class="md-none">今日まで企業活動を続けてきました。</h3>
                    <h3 class="company-massage__contents-text">当社は
                        水処理凝集剤・水ガラスといった工業用薬品事業に始まり、鋳物向け資材事業、発泡スチロール事業を加えた3本柱で、<br>北陸に密着して事業を展開しています。</h3>
                    <h3 class="company-massage__contents-text">
                        これから益々多様化するお客様のニーズにしっかりとお応えするべく、品質はもちろん、安定供給体制の構築、コスト低減活動に日々精進し、地域に貢献できるよう従業員ともども努力していく所存です。
                    </h3>
                    <h3 class="company-massage__contents-text">今後ともご支援、ご指導を賜りますようよろしくお願い申し上げます。</h3>
                </div>
            </div>
        </div>
    </section>
	
  <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150" style="margin-bottom: -7px; vertical-align: middle;">
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
    <section class="company-vision layout-company-vision js-top" id="vision">
        <div class="company-vision__inner inner">
            <h2 class="company-vision__title sub-title md-dots">企業理念</h2>
            <p class="company-vision__text">harmonyに込めた社長の思いなど、説明テキストが入ります説明テキストが入ります<br>
                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります</p>
            <div class="company-vision__contents">
                <div class="company-vision__img">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/company-vision.svg")); ?>" alt="省略" />
                </div>
                <ul class="company-vision__list">
                    <li class="company-vision__item">
                        <p class="company-vision__item-title">harmony</p>
                        <ul class="company-vision__item-list">
                            <li>&#0183;&nbsp;<?php the_field("harmony_01"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("harmony_02"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("harmony_03"); ?></li>
                        </ul>
                        <span class="company-vision__item-category">core&nbsp;value</span>
                    </li>
                    <li class="company-vision__item">
                        <p class="company-vision__item-title">化学の力で持続できる未来を</p>
                        <ul class="company-vision__item-list">
                            <li>&#0183;&nbsp;<?php the_field("purpose_01"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("purpose_02"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("purpose_03"); ?></li>
                        </ul>
                        <span class="company-vision__item-category">purpose</span>
                    </li>
                    <li class="company-vision__item">
                        <ul class="company-vision__item-list">
                            <li>&#0183;&nbsp;<?php the_field("mission_01"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("mission_02"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("mission_03"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("mission_04"); ?></li>
                            <li>&#0183;&nbsp;<?php the_field("mission_05"); ?></li>
                        </ul>
                        <span class="company-vision__item-category">mission</span>
                    </li>
                </ul>
            </div>
        </div>
        <span class="bg-ball"></span>
        <span class="bg-water"></span>
    </section>
	
  <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150" style="margin-bottom: -7px; vertical-align: middle; transform: rotate(180deg);">
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

    <section class="company layout-company js-top" id="about">
        <div class="company__inner inner">
            <h2 class="company__title sub-title md-dots">会社概要</h2>
            <div class="company__profile-wrap">
                <div class="company__profile company-profile">
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">社名</dt>
                        <dd class="company-profile__description">株式会社 北陸化成工業所</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">代表者</dt>
                        <dd class="company-profile__description">代表取締役社長　中山 浩光</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">所在地</dt>
                        <dd class="company-profile__description">〒933-0011　富山県高岡市石瀬1928</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">電話番号</dt>
                        <dd class="company-profile__description">0766-22-2155（代表）</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">FAX番号</dt>
                        <dd class="company-profile__description">0766-22-7689</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">資本金</dt>
                        <dd class="company-profile__description">6,250万円</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">設立</dt>
                        <dd class="company-profile__description">昭和16年（1941）1月9日</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">従業員数</dt>
                        <dd class="company-profile__description">
                            <p>69名（2024年12月現在）</p>
                        </dd>
                    </dl>
                </div>
                <div class="company__profile company-profile">
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">敷地</dt>
                        <dd class="company-profile__description">60,700 m2（18,300 坪）</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">主要取引銀行</dt>
                        <dd class="company-profile__description">
                            <p>北陸銀行高岡広小路支店</p>
                            <p>富山銀行鴨島支店</p>
                            <p>高岡信用金庫新成支店</p>
                        </dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">決算期</dt>
                        <dd class="company-profile__description">3月</dd>
                    </dl>
                    <dl class="company-profile__list">
                        <dt class="company-profile__term">営業品目</dt>
                        <dd class="company-profile__description">
                            <p>硫酸バンド（液体、固体、粉末）</p>
                            <p>ポリ塩化アルミニウム（PAC</p>
                            <p>珪酸ソーダ</p>
                            <p>アルミン酸ソーダ（液体、粉末）</p>
                            <p>ホワイトカーボン</p>
                            <p>レジンコーテッドサンド</p>
                            <p>鋳物用中子造型</p>
                            <p>計量証明事業</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <span class="bg-water3"></span>
        <span class="bg-water4"></span>
    </section>

    <section class="company-organization layout-company-organization js-top" id="organization">
        <div class="company-organization__inner inner">
            <h2 class="company-organization__title sub-title md-dots">組織図</h2>
            <div class="wrap">
                <div class="company-organization__img">
                    <!-- <picture>
                            <source srcset="<?php echo esc_url(get_theme_file_uri("./images/organization-sp.svg")); ?>" media="(man-width: 768px)" />
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/company-organization.svg")); ?>" alt="省略" />
                        </picture> -->
                    <?php
                    // 1.フィールド名「custom-img」のデータを取得
                    $image = get_field("division-map");

                    // 2.$imageのデータから画像のURLを変数化
                    $url = $image["url"];

                    // 3.$imageのデータから画像のalt属性を変数化
                    $alt = $image["alt"];
                    ?>

                    <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                </div>
            </div>
        </div>
        
    </section>

    <section class="company-access layout-company-access js-top" id="access">
        <div class="company-access__inner inner">
            <h2 class="company-vision__title sub-title md-dots">アクセス</h2>
            <div class="company-access__contents">
                <div class="company-access__img">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/about03.webp")); ?>" alt="省略" />
                </div>
                <div class="company-access__text-wrap">
                    <span class="company-access__how">電車の場合</span>
                    <p class="company-access__text">高岡駅 もしくは 新高岡駅より、タクシーで 約15分</p>
                    <span class="company-access__how">自動車の場合</span>
                    <p class="company-access__text">
                        高岡IC（金沢市）方面よりお越しの方は、下田交差点前の分岐を左にお進みください。小杉IC（富山市）方面よりお越しの方は、高新大橋を渡ってすぐの分岐を左にお進みください。</p>
                    <div class="company-access__btn">
                        <a class="button-container">
                            <span class="button-text">google&nbsp;mapを見る</span>
                            <div class="button-icon">
                                <span class="arrow"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="company-access__map js-top">
                <div class="company-access__inner">
                    <div class="company-access__tab tab">
                        <div class="tab__menu-wrap">
                            <p class="tab__menu-title">本社工場&nbsp;周辺地図</p>
                            <ul class="tab__menu">
                                <li class="tab__menu-item js-tab-menu is-active" data-number="tab01"><span>金沢方面より</span>
                                </li>
                                <li class="tab__menu-item js-tab-menu" data-number="tab02"><span>富山方面より</span></li>
                                <li class="tab__menu-item js-tab-menu" data-number="tab03"><span>岐阜方面より</span></li>
                            </ul>
                        </div>
                        <ul class="tab__content">
                            <li id="tab01" class="tab__content-item js-tab-content is-active">
                                <img src="<?php echo esc_url(get_theme_file_uri("./images/access01.jpg")); ?>"
                                    alt="省略" />
                            </li>
                            <li id="tab02" class="tab__content-item js-tab-content">
                                <img src="<?php echo esc_url(get_theme_file_uri("./images/access02.jpg")); ?>"
                                    alt="省略" />
                            </li>
                            <li id="tab03" class="tab__content-item js-tab-content">
                                <img src="<?php echo esc_url(get_theme_file_uri("./images/access03.jpg")); ?>"
                                    alt="省略" />
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        
    </section>


    <div class="container container--history">
        <div class="wave"></div>
    </div>

    <section class="company-history layout-company-history" id="history">
    <span class="bg-water"></span>
        <div class="company-history__inner inner">
            <h2 class="company-history__title sub-title md-dots">沿革</h2>
            <p class="company-history__text">当社は1949年に設立以来、工業薬品メーカーとして地元に根差した企業活動を行ってきました。<br>
                設立から現在まで築いてきた北陸化成工業所の歩みをご紹介します。</p>
            
        </div>
        <div class="service__swiper history-swiper">
                <div class="price__table-wrapper">
                    <ul class="swiper-wrapper company-history__list">
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1949<span>2月</span></p>
                                <p class="company-history__text">(株)北陸化成工業所を創設し、硫酸バンドの製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1961<span>12月</span></p>
                                <p class="company-history__text">珪酸ソーダの製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1969<span>4月</span></p>
                                <p class="company-history__text">事務所、工場が 高岡市石瀬（本社現在地）に移転</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1970<span>4月</span></p>
                                <p class="company-history__text">ポリ塩化アルミニウム（PAC）の製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1971<span>9月</span></p>
                                <p class="company-history__text">液体及び粉末アルミン酸ソーダの製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1977<span>4月</span></p>
                                <p class="company-history__text">名古屋中小企業投資育成(株)の投資を受け、資本金4,500万円に増資</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1978<span>3月</span></p>
                                <p class="company-history__text">レジンコーテッドサンドの製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1979<span>8月</span></p>
                                <p class="company-history__text">資本金5,000万円に増資</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1981<span>2月</span></p>
                                <p class="company-history__text">水道用ポリ塩化アルミニウムJISマークの表示許可を取得</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1984<span>4月</span></p>
                                <p class="company-history__text">ホワイトカーボンの製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1988<span>4月</span></p>
                                <p class="company-history__text">ボイラー設備増設</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1989<span>2月</span></p>
                                <p class="company-history__text">鋳物用中子の製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1993<span>4月</span></p>
                                <p class="company-history__text">ホワイトカーボン製造設備増設</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1993<span>4月</span></p>
                                <p class="company-history__text">グラウト用硬化剤製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1994<span>4月</span></p>
                                <p class="company-history__text">珪酸ソーダ製造設備更新</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1994<span>12月</span></p>
                                <p class="company-history__text">電気保安功労者 中部通商産業局長表彰 工場等の部を受賞</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1997<span>12月</span></p>
                                <p class="company-history__text">環境計量証明事業開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">1999<span>6月</span></p>
                                <p class="company-history__text">硫酸バンド製造設備更新</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2000<span>8月</span></p>
                                <p class="company-history__text">正面入口進入路更新、ボイラー設備増設</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2000<span>9月</span></p>
                                <p class="company-history__text">液体及び粉末アルミン酸ソーダ製造設備更新</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2002<span>1月</span></p>
                                <p class="company-history__text">スチロ化学工業(株)の株式を取得し、完全子会社化</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2003<span>1月</span></p>
                                <p class="company-history__text">資本金6,250万円に増資</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2004<span>1月</span></p>
                                <p class="company-history__text">第37回 (社)中小企業研究センター賞（現「グッドカンパニー大賞」）地区表彰を受賞</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2004<span>3月</span></p>
                                <p class="company-history__text">工場北側隣地に工場用地取得し、造成</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2006<span>10月</span></p>
                                <p class="company-history__text">スチロ化学工業(株)を吸収合併
                                    新たに販売会社として、スチロ化学工業(株)を設立</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2006<span>10月</span></p>
                                <p class="company-history__text">天然ガスへ燃料転換を行う。</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2007<span>10月</span></p>
                                <p class="company-history__text">水道用ポリ塩化アルミニウム 新JISマーク表示の認証を取得
                                    （認証番号 JQ0407011）</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2007<span>11月</span></p>
                                <p class="company-history__text">ポリシリカ鉄凝集剤（PSI）のライセンス契約を締結</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2010<span>1月</span></p>
                                <p class="company-history__text">再生砂製造設備更新</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2011<span>4月</span></p>
                                <p class="company-history__text">珪酸ソーダ製造設備増設</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2013<span>4月</span></p>
                                <p class="company-history__text">輸送部門を子会社のケミプラス(株)に移管</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2014<span>1月</span></p>
                                <p class="company-history__text">塩化アルミニウム製造設備増設</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2015<span>4月</span></p>
                                <p class="company-history__text">珪酸ソーダを使用した地山固結材の製造開始</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="company-history__item">
                                <p class="company-history__number">2019<span>10月</span></p>
                                <p class="company-history__text">ポリ塩化アルミニウム製造設備増設</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        <script>
            const tableWrapper = document.querySelector('.price__table-wrapper');
            if (tableWrapper) {
                new SimpleBar(tableWrapper, {
                    autoHide: false,
                    clickOnTrack: false,
                });
            }
        </script>
    </section>

    <section class="company-plan layout-company-plan js-top" id="plan">
        <div class="company-plan__inner inner">
            <h2 class="company-plan__title sub-title md-dots">一般事業主行動計画</h2>
            <p class="company-plan__text">北陸化成工業所は、改正次世代育成支援対策推進法に基づき「一般事業主行動計画」を策定・公表しています。</p>
            <div class="company-plan__btn">
                <a class="button-container" href="">
                    <span class="button-text">一般事業主行動計画を見る</span>
                    <div class="button-icon">
                        <span class="arrow"></span>
                    </div>
                </a>
            </div>
        </div>
        <span class="bg-water5"></span>
    </section>


    <section class="company-group layout-company-group js-top" id="group">
        <div class="company-group__inner inner">
            <h2 class="company-plan__title sub-title md-dots">グループ会社</h2>
            <ul class="company-group__contents">
                <li class="company-group__content">
                    <div class="company-group__content-inner">
                        <div class="company-group__img">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/link01.svg")); ?>" alt="省略" />
                        </div>
                        <h3 class="company-group__title">スチロ化学工業株式会社</h3>
                        <p class="company-group__text">お客様の製品の品質、安全をお守りする為の梱包資材に関するお悩み、部品の軽量化のお悩みは
                            ありませんか？私たちは、発泡性プラスチック製品を中心に ご提案いたします。まずは、お気軽に ひと声おかけください。</p>
                        <div class="company__profile company-profile company-profile--group">
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">所在地</dt>
                                <dd class="company-profile__description">〒939-1275<br>富山県高岡市中田955</dd>
                            </dl>
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">電話番号</dt>
                                <dd class="company-profile__description">0766-36-1212</dd>
                            </dl>
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">営業品目</dt>
                                <dd class="company-profile__description">
                                    <p>発泡スチロール（高倍・低倍成形品、切断・加工品）、魚箱、各種容器、園芸用品、緩衝材、断熱材、ロボットトレイ、構造部品、EPS土木工法、EPS鋳造法、木型用材
                                    </p>
                                    <p>発泡ポリエチレン、発泡ポリプロピレン緩衝材、断熱材</p>
                                    <p>押し出し発泡ポリスチレン断熱材、ディスプレー材</p>
                                    <p>その他 発泡プラスチック全般</p>
                                </dd>
                            </dl>
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">ホームページ</dt>
                                <dd class="company-profile__description"><a href="https://suchiro.jp" target="_blank"
                                        rel="noopener noreferrer">https://suchiro.jp</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </li>
                <li class="company-group__content">
                    <div class="company-group__content-inner">
                        <div class="company-group__img">
                            <img src="<?php echo esc_url(get_theme_file_uri("./images/link02.svg")); ?>" alt="省略" />
                        </div>
                        <h3 class="company-group__title">ケミプラス株式会社</h3>
                        <p class="company-group__text">お客様のニーズに
                            すばやく対応し、より信頼頂けるサービス、より迅速な輸送の提供、より密接なコミュニケーションを目指し、満足度の高いサービスを ご提供します。
                            ありませんか？私たちは、発泡性プラスチック製品を中心に ご提案いたします。まずは、お気軽に ひと声おかけください。
                        </p>
                        <div class="company__profile company-profile company-profile--group">
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">所在地</dt>
                                <dd class="company-profile__description">〒933-0011<br>富山県高岡市石瀬1031</dd>
                            </dl>
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">電話番号</dt>
                                <dd class="company-profile__description">0766-22-7893</dd>
                            </dl>
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">事業内容</dt>
                                <dd class="company-profile__description">一般貨物自動車運送業</dd>
                            </dl>
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">車両</dt>
                                <dd class="company-profile__description">
                                    <p>保有台数 33台</p>
                                    <p>タンク車，ウイング車，ダンプ車，カーゴクレーン車，平ボディ車，バン型車</p>
                                </dd>
                            </dl>
                            <dl class="company-profile__list">
                                <dt class="company-profile__term">ホームページ</dt>
                                <dd class="company-profile__description"><a href="https://chemiplus.jp" target="_blank"
                                        rel="noopener noreferrer">https://chemiplus.jp</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <span class="bg-ball"></span>
        <span class="bg-water"></span>
    </section>
    <?php get_template_part('template-parts/recruit'); ?>
    <?php get_template_part('template-parts/contact'); ?>
    <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>

<style>
    /* スクロールバーのスタイル */
    .price__table-wrapper .simplebar-scrollbar {
        width: 80px !important;
    }

    .price__table-wrapper .simplebar-scrollbar::before {
        position: absolute !important;
        content: '' !important;
        width: 80px !important;
        height: 80px !important;

        border-radius: 4px !important;
        opacity: 1 !important;
        left: 0 !important;
        right: 0 !important;
        top: 0 !important;
        bottom: auto !important;
        transform: none !important;
        background-color: transparent !important;

        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: cover !important;

        @media screen and (max-width: 767px) {
            width: 60px !important;
            height: 60px !important;
        }

    }

    .price__table-wrapper .simplebar-scrollbar::before:hover {
        cursor: grab;
    }


    .price__table-wrapper .simplebar-track.simplebar-horizontal {
        height: 84px !important;
        background-color: #f9f9f9;

        border-radius: 4px !important;
        margin: 20px 0 !important;
    }

    /* スクロール可能なエリアのスタイル */
    .price__table-wrapper {
        margin: 0 auto;
        max-width: 100%;
        padding: 0 20px;
    }

    .price__table-wrapper .simplebar-content-wrapper {
        overflow-x: auto;
    }

    .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
        right: auto;
        left: 0;
        top: 2px;
        height: 80px;
        min-height: 0;
        min-width: 10px;
        width: auto;
    }

    .simplebar-track.simplebar-horizontal {
        background-color: #fff;
        position: relative;
    }

    .simplebar-track.simplebar-horizontal::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 47%;
        width: 85%;
        transform: translateX(-50%);
        height: 2px;
        background-color: #BBBBBB;
        z-index: -1;
    }

    .simplebar-scrollbar:before {
        position: absolute;
        content: '';
        border-radius: 7px;
        left: 2px;
        right: 2px;
        opacity: 0;

    }

    .company-history__list {
        background-color: #fff;

        margin-top: 4rem;
    }

    .company-history__list {
        background-color: #FFFFFF;
    }

    .simplebar-content-wrapper {
        background-color: #fff;
    }

    .service__swiper.history-swiper {
        margin-top: 4rem !important;
    }

    .company-history__item::before {
        content: "";
        position: absolute;
        height: 10.9375rem;
        width: 0.125rem;
        background-color: #f5f5f5;
        right: 0%;
    }
    @media screen and (max-width: 767px) {
    .company-history__text {
        margin-top: 0.625rem;
        font-size: 14px;
    }
    .company-history__list {
        background-color: #fff;
        margin-top: 1.5rem;
    }
    .price__table-wrapper .simplebar-track.simplebar-horizontal{
        margin: 0!important;
    }
    .simplebar-track.simplebar-horizontal::after {
        content: '';
        position: absolute;
        top: 37%;
        left: 47%;
        width: 85%;
        transform: translate(-50%);
        height: 2px;
        background-color: #BBBBBB;
        z-index: -1;
    }
    .price__table-wrapper {
        margin: 0 auto;
        max-width: 100%;
        padding: 0 0 0 20px;
    }
}

.simplebar-track.simplebar-vertical {
    display: none!important;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tableWrapper = document.querySelector('.price__table-wrapper');
        if (tableWrapper) {
            new SimpleBar(tableWrapper, {
                autoHide: false,
                clickOnTrack: false,
                direction: 'rtl'

            });
        }
    });
</script>