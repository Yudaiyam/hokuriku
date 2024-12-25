<?php get_header(); ?>
<main class="hidden-page">
  <div class="service-heading heading">
    <div class="heading__inner inner">
      <h1 class="heading__title">北陸化成工業所の強み
        <span class="heading__title-sub">feature</span>
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

  <section class="strength layout-strength">
    <div class="strength__inner inner">
      <ol class="strength__list strength-list">
        <li class="strength-list__item">
          <div class="strength-list__item-img">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/feature/feature01-sp.jpg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/feature/strength01.jpg")); ?>" alt="">
            </picture>
          </div>
          <div class="strength-list__item-text-wrap">
            <h3 class="strength-list__item-title">北陸に根ざし地域と共に<br>成長してきた<br>化学のエキスパート</h3>
            <p class="strength-list__item-text">長年に渡って、地域の地場産業から発生する廃棄物を唯一無二のリサイクル技術で有効活用してきました。水処理剤の製品開発・製造を行い、上水道の浄水から工場排水処理に至る地域の水環境維持に貢献し、地域と調和し共に歩んできました。</p>
          </div>
          <span class="bg-wave"></span>
          <span class="bg-water"></span>
        </li>
        <li class="strength-list__item">
          <div class="strength-list__item-img">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/feature/feature02-sp.jpg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/feature/strength02.jpg")); ?>" alt="">
            </picture>
          </div>
          <div class="strength-list__item-text-wrap">
            <h3 class="strength-list__item-title">７０年以上前から<br>リサイクル&bull;SDGsに<br>取り組んできたパイオニア</h3>
            <p class="strength-list__item-text">地球環境保護が叫ばれるはるか以前から、資源循環を可能とするリサイクル技術をフルに活用し社会貢献してきました。資源の無駄使いを少しでも減らし、環境汚染を防ぎ、将来の世代へ持続可能な未来をつないでいきたいと考えています。</p>
          </div>
          <span class="bg-wave"></span>
          <span class="bg-water"></span>
        </li>
        <li class="strength-list__item">
          <div class="strength-list__item-img">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/feature/feature03-sp.jpg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/feature/strength03.jpg")); ?>" alt="">
            </picture>
          </div>
          <div class="strength-list__item-text-wrap">
            <h3 class="strength-list__item-title">お客様のお困りごとから製品を<br>生み出す課題解決型のパートナー</h3>
            <p class="strength-list__item-text">処理に困った廃棄物のリサイクルの可能性について、お客様から多数お問い合わせを頂きます。廃棄物の分析調査をベースに、今まで培った技術でのリサイクルはもとより、新たな処理方法の提案で、お客様の課題解決にチャレンジしています。</p>
          </div>
          <span class="bg-wave"></span>
          <span class="bg-water"></span>
        </li>
        <li class="strength-list__item">
          <div class="strength-list__item-img">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/feature/feature04-sp.jpg")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/feature/strength04.jpg")); ?>" alt="">
            </picture>
          </div>
          <div class="strength-list__item-text-wrap">
            <h3 class="strength-list__item-title">製造から配送までの全工程を<br>一貫して対応</h3>
            <p class="strength-list__item-text">お客様が求める品質の製品を作ることは当然のことながら、加えて確実にお届けすることまでを強く求められる時代です。グループ内に、製品の専門知識を有したプロドライバーを持つことで、「安全」「安心」「安定」した総合製品供給力で、お客様をサポートしています。</p>
          </div>
          <span class="bg-wave"></span>
          <span class="bg-water"></span>
        </li>
      </ol>
    </div>
  </section>

  <div class="recruit layout-recruit layout-recruit--feature">
    <div class="loader">
      <div class="loader-item"></div>
    </div>
    <ul class="recruit__list">
      <li class="recruit__item"></li>
      <li class="recruit__item">
      </li>
      <div class="recruit__item-content">
        <p class="recruit__item-title">
          北陸化成工業所で<br />
          一緒に働きませんか？
        </p>
        <p class="recruit__item-text">当社の働く環境や先輩社員の<br class="md-show">リアルな声などご紹介します。</p>
        <a class="button-container button-container--reverse">
          <span class="button-text">採用情報を見る</span>
          <div class="button-icon">
            <span class="arrow"></span>
          </div>
        </a>
      </div>
    </ul>
  </div>
  <?php get_template_part('template-parts/contact'); ?>
  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>