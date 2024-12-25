<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <?php if (is_404()) : ?>
	      <meta http-equiv="refresh" content=" 7; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?> -->
  <?php wp_head(); ?>
<?php
// 特定のページでCSSファイルを読み込む
if (is_page(array('company', 'feature', 'sdgs', 'recruit'))) {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css-a/style.css">';
} elseif (is_front_page() || is_post_type_archive('product') || is_singular('product') || is_page('detail')) {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css-b/style.css">';
} elseif (strpos($_SERVER['REQUEST_URI'], 'infomation') !== false || 
          is_post_type_archive('interview') || is_singular('interview') || 
          is_page('contact')|| is_singular('goods'))  {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css-c/style.css">';
}
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php if (is_front_page()): ?>
    <header class="header layout-header js-header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="<?php echo esc_url(home_url("/")) ?>">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/logo01.svg")); ?>" alt="株式会社北陸化成工業所のロゴ" />
          </a>
        </h1>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url("/")) ?>">ホーム</a>
            </li>
            <li class="header__nav-modal-wrap">
              <p>北陸化成工業所を知る</p>
              <div class="header__nav-modal">
                <div class="header__drawer-accordion-top">
                  <a href="<?php echo esc_url(home_url("/company")) ?>">
                    <span>北陸化成工業所を知る</span>
                    <div class="button-icon md-small-btn">
                      <span class="arrow"></span>
                    </div>
                  </a>
                </div>
                <ul class="header__nav-modal-nav">
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("feature")) ?>">
                      <p class="header__nav-modal-item-text">北陸化成の強みについて</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("sdgs")) ?>">
                      <p class="header__nav-modal-item-text">SDGsの取組み</p>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__nav-modal-wrap">
              <p>事業&#8226;製品紹介</p>
              <div class="header__nav-modal">
                <div class="header__drawer-accordion-top">
                  <a href="<?php echo esc_url(home_url("/product")) ?>">
                    <span>事業一覧</span>
                    <div class="button-icon md-small-btn">
                      <span class="arrow"></span>
                    </div>
                  </a>
                </div>
                <ul class="header__nav-modal-nav">
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("/product/chemical")) ?>">
                      <p class="header__nav-modal-item-text">化成品事業</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("/product/cast")) ?>">
                      <p class="header__nav-modal-item-text">鋳材事業</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("/product/analysis")) ?>">
                      <p class="header__nav-modal-item-text">分析事業</p>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__nav-modal-wrap">
              <p>採用情報</p>
              <div class="header__nav-modal">
                <div class="header__drawer-accordion-top">
                  <a href="<?php echo esc_url(home_url("/recruit")) ?>">
                    <span>採用情報</span>
                    <div class="button-icon md-small-btn">
                      <span class="arrow"></span>
                    </div>
                  </a>
                </div>
                <ul class="header__nav-modal-nav">
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("detail")) ?>">
                      <p class="header__nav-modal-item-text">北陸化成工業所を深く知る</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("interview")) ?>">
                      <p class="header__nav-modal-item-text">先輩社員の声</p>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url("infomation")) ?>">お知らせ</a>
            </li>
            <li class="header__nav-item header__nav-item--contact">
              <a href="<?php echo esc_url(home_url("contact")) ?>">お問い合わせ</a>
            </li>
          </ul>
        </nav>

        <button class="header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <p class="hamburger__bar-close">close</p>
          <p class="hamburger__bar-menu">menu</p>
        </button>

        <div class="header__drawer js-drawer">
          <nav class="header__drawer-nav">
            <ul class="header__drawer-list">
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/")) ?>">ホーム</a>
              </li>

              <li class="header__drawer-item">
                <p class="header__drawer-accordion-title js-drawer-accordion is-open">北陸化成工業所を知る</p>
                <div class="header__drawer-accordion-list-wrap">
                  <ul class="header__drawer-accordion-list">
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("company")) ?>">
                        <div class="button-icon">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">会社案内</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("feature")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">北陸化成工業所の強みについて</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("sdgs")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text"><span class="md-upper">sdg</span>sの取り組み</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header__drawer-item">
                <p class="header__drawer-accordion-title js-drawer-accordion is-open">事業/製品紹介</p>
                <div class="header__drawer-accordion-list-wrap">
                  <ul class="header__drawer-accordion-list">
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("/product/chemical")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">化成品事業</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("/product/cast")) ?>">
                        <div class="button-icon">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">鋳材事業</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("/product/analysis")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">分析事業</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header__drawer-item">
                <p class="header__drawer-accordion-title js-drawer-accordion is-open">採用情報</p>
                <div class="header__drawer-accordion-list-wrap">
                  <ul class="header__drawer-accordion-list">
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("detail")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">北陸化成工業所を深く知る</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("interview")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">先輩社員の声</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("infomation")) ?>">お知らせ</a>
              </li>
            </ul>
            <div class="header__drawer-btn">
              <a href="<?php echo esc_url(home_url("contact")) ?>">お問い合わせ</a>
            </div>
          </nav>
        </div>
      </div>
    </header>



  <?php else: ?>
    <header class="header header--sub js-header layout-header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="<?php echo esc_url(home_url("/")) ?>">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/logo01.svg")); ?>" alt="株式会社北陸化成工業所のロゴ" />
          </a>
        </h1>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url("/")) ?>">ホーム</a>
            </li>
            <li class="header__nav-modal-wrap">
              <p>北陸化成工業所を知る</p>
              <div class="header__nav-modal">
                <div class="header__drawer-accordion-top">
                  <a href="<?php echo esc_url(home_url("/company")) ?>">
                    <span>北陸化成工業所を知る</span>
                    <div class="button-icon">
                      <span class="arrow"></span>
                    </div>
                  </a>
                </div>
                <ul class="header__nav-modal-nav">
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("feature")) ?>">
                      <p class="header__nav-modal-item-text">北陸化成の強みについて</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("sdgs")) ?>">
                      <p class="header__nav-modal-item-text">SDGsの取組み</p>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__nav-modal-wrap">
              <p>事業&bull;製品紹介</p>
              <div class="header__nav-modal">
                <div class="header__drawer-accordion-top">
                  <a href="<?php echo esc_url(home_url("/product")) ?>">
                    <span>事業一覧</span>
                    <div class="button-icon md-small-btn">
                      <span class="arrow"></span>
                    </div>
                  </a>
                </div>
                <ul class="header__nav-modal-nav">
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("/product/chemical")) ?>">
                      <p class="header__nav-modal-item-text">化成品事業</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("/product/cast")) ?>">
                      <p class="header__nav-modal-item-text">鋳材事業</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("/product/analysis")) ?>">
                      <p class="header__nav-modal-item-text">分析事業</p>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__nav-modal-wrap">
              <p>採用情報</p>
              <div class="header__nav-modal">
                <div class="header__drawer-accordion-top">
                  <a href="<?php echo esc_url(home_url("/recruit")) ?>">
                    <span>採用情報</span>
                    <div class="button-icon md-small-btn">
                      <span class="arrow"></span>
                    </div>
                  </a>
                </div>
                <ul class="header__nav-modal-nav">
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("detail")) ?>">
                      <p class="header__nav-modal-item-text">北陸化成工業所を深く知る</p>
                    </a>
                  </li>
                  <li class="header__nav-modal-item">
                    <a href="<?php echo esc_url(home_url("interview")) ?>">
                      <p class="header__nav-modal-item-text">先輩社員の声</p>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url("infomation")) ?>">お知らせ</a>
            </li>
            <li class="header__nav-item header__nav-item--contact ">
              <a href="<?php echo esc_url(home_url("contact")) ?>">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <button class="header__hamburger header__hamburger--reverse js-hamburger">
          <span></span>
          <span></span>
          <p class="hamburger__bar-close">close</p>
          <p class="hamburger__bar-menu">menu</p>
        </button>

        <div class="header__drawer js-drawer">
          <nav class="header__drawer-nav">
            <ul class="header__drawer-list">
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/")) ?>">ホーム</a>
              </li>

              <li class="header__drawer-item">
                <p class="header__drawer-accordion-title js-drawer-accordion">北陸化成工業所を知る</p>
                <div class="header__drawer-accordion-list-wrap">
                  <ul class="header__drawer-accordion-list">
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("company")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">会社案内</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("feature")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">北陸化成工業所の強みについて</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("sdgs")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text"><span class="md-upper">sdg</span>sの取り組み</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="header__drawer-item">
                <p class="header__drawer-accordion-title js-drawer-accordion">事業・製品紹介</p>
                <div class="header__drawer-accordion-list-wrap">
                  <ul class="header__drawer-accordion-list">
                    <li class="header__drawer-accordion-item">

                      <a href="<?php echo esc_url(home_url("/product/chemical")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">化成品事業</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("/product/cast")) ?>">
                        <div class="button-icon">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">鋳材事業</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("/product/analysis")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">分析事業</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header__drawer-item">
                <p class="header__drawer-accordion-title js-drawer-accordion">採用情報</p>
                <div class="header__drawer-accordion-list-wrap">
                  <ul class="header__drawer-accordion-list">
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("detail")) ?>">
                        <div class="button-icon md-small-btn">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">北陸化成工業所を深く知る</p>
                      </a>
                    </li>
                    <li class="header__drawer-accordion-item">
                      <a href="<?php echo esc_url(home_url("interview")) ?>">
                        <div class="button-icon">
                          <span class="arrow"></span>
                        </div>
                        <p class="header__drawer-accordion-item-text">先輩社員の声</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("infomation")) ?>">お知らせ</a>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("contact")) ?>">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  <?php endif; ?>