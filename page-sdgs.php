<?php get_header(); ?>
<main class=hidden-page>
  <div class="service-heading heading js-top">
    <div class="heading__inner inner">
      <h1 class="heading__title"><span class="md-upper">sdg</span>sの取組み
        <span class="heading__title-sub"><span class="md-upper">sdg</span>s</span>
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

  <section class="sdgs-goal layout-sdgs-goal js-tops">
    <div class="sdgs-goal__inner inner">
      <div class="sdgs-goal__contents">
        <div class="sdgs-goal__item-img">
          <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-goal.jpg")); ?>" alt="省略" />
        </div>
        <div class="sdgs-goal__wrap">
          <h3 class="sdgs-goal__wrap-title md-dots"><span class="md-upper">sdg</span>sとは</h3>
          <p class="sdgs-goal__wrap-text">2015年９月に国連で採択された、2030年までに世界が達成すべき持続可能な開発目標のことです。</p>
          <p class="sdgs-goal__wrap-text">貧困や健康、助成、環境などに関する17のゴールと、169のターゲットが定められています。世界中で<span class="md-upper">sdg</span>sの取り組みが広がっています。</p>
        </div>
      </div>
    </div>
    <span class="bg-ball"></span>
    <span class="bg-water"></span>
  </section>

  <section class="sdgs-purpose layout-sdgs-purpose js-top">
    <div class="sdgs-purpose__inner inner">
      <h3 class="sdgs-purpose__title md-dots">SDGs達成に向けた当社の考え方</h3>
      <p class="sdgs-purpose__text">当社はこれまでの80年間、地域との調和を目指し、地域とともに成長してきた企業です。<span class="md-upper">sdg</span>sが目指す世界のあり方は、私たちがこれまで微力ながら果たしてきました、地域の循環型社会実現に向けた活動と何ら矛盾するものではありません。将来にわたり持続可能な社会の実現に貢献するため、<span class="md-upper">sdg</span>sの達成を重要な企業課題と位置づけ、取り組んでまいります。</p>
      <span class="sdgs-purpose__date">2021年10月28日</span>
      <span class="sdgs-purpose__sign">株式会社北陸化成工業所<br class="md-show">&emsp;代表取締役社長 中山 浩光</span>
    </div>
  </section>
  <section class="sdgs-theme layout-sdgs-theme">
    <div class="sdgs-theme__inner inner">
      <h3 class="sdgs-theme__title md-dots">SDGsの達成に向けた取り組みテーマ</h3>
      <ol class="sdgs-theme__list">
        <li class="sdgs-theme__item js-top">
          <div class="sdgs-theme__item-header">
            <h4 class="sdgs-theme__item-header-title"><span class="md-upper">sustainable&nbsp;<br class="md-show">product</span>&#40;製品&#41;を<br class="md-show">地域に供給します。</h4>
            <ul class="sdgs-theme__item-header-nav">
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs06.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs11.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs12.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs14.svg")); ?>" alt="省略" />
              </li>
            </ul>
          </div>
          <ul class="sdgs-theme__item-contents js-top">
            <li class="sdgs-theme__item-content">
              <div class="sdgs-theme__item-content-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-theme01_1.jpg")); ?>" alt="省略" />
              </div>
              <div class="sdgs-theme__item-content-wrap">
                <p class="sdgs-theme__item-content-title">地域の美しい河川をまもる</p>
                <p class="sdgs-theme__item-content-text">ものづくり県富山では、アルミ工場、化学工場、医薬品工場等が多数立地しています。こうした地域の工場からの排水が環境負荷を与えることのないよう、当社の水処理薬品が役立てられています。</p>
                <span class="sdgs-theme__item-content-tag">主な事例</span>
                <p class="sdgs-theme__item-content-sub-text">&#9312;顧客工場の排水を分析し、水質に合わせた凝集剤の提案。</p>
                <p class="sdgs-theme__item-content-sub-text">&#9313;顧客工場の排水中の特定の物質を除去するための薬剤提案。</p>
              </div>
            </li>
            <li class="sdgs-theme__item-content">
              <div class="sdgs-theme__item-content-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/about02.webp")); ?>" alt="省略" />
              </div>
              <div class="sdgs-theme__item-content-wrap">
                <p class="sdgs-theme__item-content-title">地域の飲み水をまもる</p>
                <p class="sdgs-theme__item-content-text">美味しい水道水で有名な富山県。私たちは富山県唯一の水処理薬品メーカーとして、県内の浄水場への水処理剤をずっと供給し続けています。飲み水は絶対暮らしに欠かせないものだからこそ、ＪＩＳ規格に則った確かな品質と、グループ運送会社（ケミプラスのリンクを貼る）による万全の供給体制を整えています。</p>
                <span class="sdgs-theme__item-content-tag"><span class="md-upper">point</span></span>
                <p class="sdgs-theme__item-content-sub-text">これまでの浄水場向け製品の累計供給量は約137,800ｔです。
                  <br>これは水道水に換算すると、70億トンで、
                  <br>貯水量２億tの黒部ダム３４個分にものぼります。
                </p>
              </div>
            </li>
          </ul>
          <div class="sdgs-theme__item-contents-icon">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/sdgs-icon34-sp.svg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-icon34-pc.svg")); ?>" alt="省略" />
            </picture>
          </div>
          <div class="sdgs-theme__item-contents-bg">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/sdgs-bg-sp.svg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-bg1-pc.svg")); ?>" alt="省略" />
            </picture>
          </div>
        </li>
        <li class="sdgs-theme__item js-top">
          <div class="sdgs-theme__item-header">
            <h4 class="sdgs-theme__item-header-title"><span class="md-upper">sustainable&nbsp;<br class="md-show">factory</span>&#40;工場&#41;を<br>目指します。</h4>
            <ul class="sdgs-theme__item-header-nav">
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs11.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs12.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs15.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs17.svg")); ?>" alt="省略" />
              </li>
            </ul>
          </div>
          <ul class="sdgs-theme__item-contents">
            <li class="sdgs-theme__item-content">
              <div class="sdgs-theme__item-content-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-theme02.webp")); ?>" alt="省略" />
              </div>
              <div class="sdgs-theme__item-content-wrap">
                <p class="sdgs-theme__item-content-title">地域の資源をまもる</p>
                <p class="sdgs-theme__item-content-text">私たちの製品は、その機能が環境負荷低減に役立つだけではなく、製法にも環境への配慮がなされています。地域のアルミ工場や化学工場、鋳物工場等から発生する廃棄物を独自の技術で製品に生まれ変わらせて、再び地域の工場でご使用いただいています。</p>
                <span class="sdgs-theme__item-content-tag">主なプロセス</span>
                <p class="sdgs-theme__item-content-sub-text">&#9312;アルミ工場から副生水アルや廃酸を回収、原料として活用し排水処理剤の製造、地域
                  の各種工場に供給する。</p>
                <p class="sdgs-theme__item-content-sub-text">&#9313;鋳物工場から廃砂を回収、当社で再生処理して鋳物砂を製造し、鋳物工場に供給する。</p>
              </div>
            </li>
            <span class="bg-water"></span>
          </ul>
          <div class="sdgs-theme__item-contents-bg">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/sdgs-bg-sp.svg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-bg2-pc.svg")); ?>" alt="省略" />
            </picture>
          </div>
        </li>
        <li class="sdgs-theme__item js-top">
          <div class="sdgs-theme__item-header">
            <h4 class="sdgs-theme__item-header-title"><span class="md-upper">sustainable&nbsp;<br class="md-show">workstyle</span>（働き方）<br class="md-show">を目指します。</h4>
            <ul class="sdgs-theme__item-header-nav">
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs03.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs04.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs05.svg")); ?>" alt="省略" />
              </li>
              <li class="sdgs-theme__item-header-nav-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs08.svg")); ?>" alt="省略" />
              </li>
            </ul>
          </div>
          <ul class="sdgs-theme__item-contents">
            <li class="sdgs-theme__item-content">
              <div class="sdgs-theme__item-content-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-theme03.jpg")); ?>" alt="省略" />
              </div>
              <div class="sdgs-theme__item-content-wrap">
                <p class="sdgs-theme__item-content-title">働きやすさをまもる</p>
                <p class="sdgs-theme__item-content-text">私たちが目指すのは、単に残業が少なくて休みが取りやすいだけの会社ではありません。会社は社員にとって人生の長い時間を過ごす場所だから、充実した気持ちで働けることも人生を豊かにすることだと考えています。北陸化成工業所グループは社員1人1人が心身共に健康で、成長と貢献を感じながらイキイキと働くことができ、仕事（Work）も生活（Life）も双方が充実する、ワークライフハーモニーを目指しています。</p>
                <span class="sdgs-theme__item-content-tag">主な取り組み</span>
                <ul class="sdgs-theme__item-content-sub-list">
                  <li class="sdgs-theme__item-content-sub-item">&#0183;ライフステージに応じた休暇制度の拡充や労働時間削減</li>
                  <li class="sdgs-theme__item-content-sub-item">&#0183;社員の健康増進のための各種施策</li>
                  <li class="sdgs-theme__item-content-sub-item">&#0183;社員の成果や貢献に応える人事評価／賃金制度</li>
                  <li class="sdgs-theme__item-content-sub-item">&#0183;研修受講や資格取得助成を通じたキャリアアップ支援</li>
                  <li class="sdgs-theme__item-content-sub-item">&#0183;キャリアや育児・介護との両立に関する相談機会の確保</li>
                </ul>
              </div>
            </li>
            <span class="bg-water"></span>
          </ul>
          <div class="sdgs-theme__item-contents-bg">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/sdgs-bg-sp.svg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/sdgs-bg3-pc.svg")); ?>" alt="省略" />
            </picture>
          </div>
        </li>
      </ol>
    </div>
  </section>
  <section class="sdgs-declare layout-sdgs-declare">
    <div class="sdgs-declare__inner inner js-tops">
      <h3 class="sdgs-declare__title md-dots">富山県<span class="md-upper">sdg</span>s宣言</h3>
      <p class="sdgs-declare__text">県では県内企業等での<span class="md-upper">sdg</span>sに関する取組みを広く普及することで、県、市町村、県内企業等の連携を促進し、取組み推進につなげることを目指し、「富山県<span class="md-upper">sdg</span>s宣言」を事業として実施しています。当社もこの活動に賛同し、<span class="md-upper">sdg</span>sの達成のために果たすべき役割を宣言させていただきました。</p>
      <p class="sdgs-declare__text">当社は地球環境や資源が今日のように社会問題として取り上げられるずっと以前から、資源のリサイクル活用に積極的に取り組んでまいりましたが、この宣言をきっかけに当社が長きにわたり行ってきたことに自信と誇りをもつことができました。これからも<span class="md-upper">sdg</span>sの考え方の基、しなやかな発想で人と地球の快適な暮らしの力になりたいと願っています。</p>
      <div class="sdgs-declare__btn">
        <a href="https://www.sdgs-toyama.jp/" target="_blank" class="button-container">
          <span class="button-text">富山県<span class="md-upper">sdg</span>s宣言について詳しく見る</span>
          <div class="button-icon">
            <span class="arrow"></span>
          </div>
        </a>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/recruit'); ?>
  <?php get_template_part('template-parts/contact'); ?>
  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>