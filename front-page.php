<?php get_header(); ?>
<main class="hidden-page">
  <div class="scrollTopButton">
    <img src="<?php echo esc_url(get_theme_file_uri("/images/scroll-btn.svg")); ?>" />
  </div>
  <section class="mv">
    <div class="mv__inner">
      <h2 class="mv__title-wrap">
        <p class="mv__title"><span class="md_large md-primary">化学</span>の<span class="md_large">力</span>で</p>
        <p class="mv__title"><span class="md_large">持続</span>できる<span class="md_large">未来</span>を。</p>
      </h2>
      <div class="mv__img">
        <video src="<?php echo esc_url(get_theme_file_uri("./images/mv.video.mp4")); ?>" autoplay loop muted playsinline></video>　
        <!-- <img src="<?php echo esc_url(get_theme_file_uri("./images/mv3.jpg")); ?>" alt="省略" /> -->
      </div>
      <div class="mv__btn">
        <a href="<?php echo esc_url(home_url("recruit")) ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("./images/recruit-btn.svg")); ?>" />
        </a>
      </div>
      <div class="mv__scroll" id="top">
        <p class="mv-scroll__text">scroll</p>
        <i class="fa fa-angle-down animated bounce"></i>
      </div>
    </div>
    <div class="hidden-div">
      <div class="hidden-div__inner">
        <div class="hidden-div__map">
          <img src="<?php echo esc_url(get_theme_file_uri("./images/mv-3.svg")); ?>" alt="富山県の地図と高岡市の位置" />
        </div>
        <div class="hidden-div__text">
          1949年に工業薬品メーカーとして<br class="md-none" />
          スタートした「北陸化成工業所」は、<br />
          地域社会との調和を考え<br class="md-none" />
          地域と共に成長していくことを目指しながら、<br class="md-none" />
          事業領域を広げてきました。<br />
          私たちは<br />
          地域から発生する副生物を独自の技術で有効活用し、<br />
          お客様の求める商品を生み出すことで、<br />
          循環型社会の実現に貢献し続ける <br>富山県高岡市の化学メーカーです。
        </div>
      </div>
    </div>
    <div class="mv__polkadots polkadots">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/polkadots.svg")); ?>" />
    </div>
    <div class="mv__watersplash">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
    </div>
    <div class="mv__watersplash-sub">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
    </div>

  </section>

  <section class="news layout-news">
    <div class="news__inner inner">
      <div class="news_heading">
        <h3 class="news__title title">新着情報</h3>
        <div class="news__nav-wrap">
          <nav class="news__nav news-nav">
            <ul class="news-nav__list">
              <li class="news-nav__list-item is-current js-tab-menu" data-number="tab01">
                <span>
                  すべて
                </span>
              </li>
              <?php
              $categories = get_categories();
              $index = 2;
              foreach ($categories as $category) {
                $category_name = $category->name;
                echo '<li class="news-nav__list-item js-tab-menu" data-number="tab' . sprintf('%02d', $index) . '">
                <span>' . esc_html($category_name) . '</span>
                </li>';
                $index++;
              }
              ?>
            </ul>
          </nav>
          <p><a href="" class="links"><span class="arrows"></span></a></p>
          <a class="button-container" href="<?php echo esc_url(home_url("infomation")) ?>">
            <span class="button-text">一覧を見る</span>
            <div class="button-icon">
              <span class="arrow"></span>
            </div>
          </a>
        </div>
      </div>
      <ul class="news__list is-current js-tab-content" id="tab01">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $news_query = new WP_Query($args);
        if ($news_query->have_posts()) :
          while ($news_query->have_posts()) : $news_query->the_post();
        ?>
            <li class="news-list__item">
              <a href="<?php the_permalink(); ?>">
                <div class="news-list__item-img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/noimage.jpg")); ?>" alt="Default Image" size-large>
                  <?php endif; ?>
                </div>
                <div class="news-list__item-content">
                  <div class="news-list__item-meta">
                    <time class="news-list__item-date" datetime="<?php echo get_the_date('c'); ?>">
                      <?php echo get_the_date('Y/m/d'); ?>
                    </time>
                    <p class="news-list__item-category">
                      <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                      }
                      ?>
                    </p>
                  </div>
                  <p class="news-list__item-title"><?php the_title(); ?></p>
                  <div class="news-list__item-content__arrow">
                    <div class="c-btn-icon">
                      <span class="c-arrow"></span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p class="news__text text">お知らせはありません</p>';
        endif;
        ?>
      </ul>
      <?php
      $categories = get_categories();
      $index = 2;
      foreach ($categories as $category) {
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'category_name' => $category->slug,
        );
        $news_query = new WP_Query($args);
        if ($news_query->have_posts()) :
      ?>
          <ul class="news__list news-list js-tab-content" id="tab<?php echo sprintf('%02d', $index); ?>">
            <?php
            while ($news_query->have_posts()) : $news_query->the_post();
            ?>
              <li class="news-list__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="news-list__item-img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri("./images/noimage.jpg")); ?>" alt="Default Image">
                    <?php endif; ?>
                  </div>
                  <div class="news-list__item-content">
                    <div class="news-list__item-meta">
                      <time class="news-list__item-date" datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date('Y/m/d'); ?>
                      </time>
                      <p class="news-list__item-category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                          echo esc_html($categories[0]->name);
                        }
                        ?>
                      </p>
                    </div>
                    <p class="news-list__item-title"><?php the_title(); ?></p>
                    <div class="news-list__item-content__arrow">
                      <div class="c-btn-icon">
                        <span class="c-arrow"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
          </ul>
      <?php
        endif;
        $index++;
      }
      ?>
    </div>
  </section>
  <section class="about layout-about">
    <div class="about__inner inner inner--lg">
      <div class="about__heading">
        <h3 class="about__title title title--vertically">北陸化成工業所を知る</h3>
        <p class="about__text js-fade-up">私たちは、「化学の力で持続できる未来を」目指し、地場で発生する廃棄物を資源へと生まれ変わらせるリサイクル技術で、地域を支えるサステナブル企業です。</p>
      </div>
      <div class="about__items">
        <div class="about__item about__item--large">
          <a href="<?php echo esc_url(home_url("feature")) ?>">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/about01-sp.jpg")); ?>" media="(max-width: 767px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/about1-pc.webp")); ?>" alt="北陸化成工業所の強み" />
            </picture>
            <div class="about__item-btn">
              <span class="contact-option__link contact-option__link--about">北陸化成工業所の強み</span>
              <a href="<?php echo esc_url(home_url("feature")) ?>" class="button">
                <div class="about__item-button-icon">
                  <span class="arrow"></span>
                </div>
              </a>
            </div>
          </a>
        </div>
        <div class="about__item-wrap">
          <div class="about__item">
            <a href="<?php echo esc_url(home_url("sdgs")) ?>">
              <div class="about__item-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/about02.webp")); ?>" alt="sdgsの取り組み" class="about__image" />
              </div>
              <span class="contact-option__link contact-option__link--about">
                SDGsの取組み
                <div href="<?php echo esc_url(home_url("sdgs")) ?>" class="button">
                  <div class="button-icon">
                    <span class="arrow"></span>
                  </div>
                </div>
              </span>
            </a>

          </div>
          <div class="about__item">
            <a href="<?php echo esc_url(home_url("company")) ?>">
              <div class="about__item-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/about03.webp")); ?>" alt="会社案内" class="about__image" />
              </div>
              <span class="contact-option__link contact-option__link--about">
                会社案内
                <div href="<?php echo esc_url(home_url("company")) ?>" class="button">
                  <div class="button-icon">
                    <span class="arrow"></span>
                  </div>
                </div>
              </span>
            </a>
          </div>

        </div>
      </div>
    </div>
    <span class="bg-about"></span>
    <div class="about__polkadots polkadots">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/polkadots.svg")); ?>" />
    </div>
    <div class="about__watersplash">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
    </div>
  </section>
  <section class="group layout-group">
    <h3 class="group__title">北陸化成工業所グループ</h3>
    <p class="group__text"> 当社の製品は暮らしには欠かせない、<br class="md-show">とても身近なところで色々と使われています。<br>暮らしに密着した北陸化成工業所の製品を<br class="md-show">ご紹介します。</p>
    <div class="div group-scroll-wrap">
      <div class="group__wrap">
        <span class="group01 js-modal-open" data-target="1">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="鋳物メーカー" />
          <a class="text">トンネル</a>
        </span>
        <span class="group02 js-modal-open" data-target="2">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="鋳物メーカー" />
          <a class="text text--col2">鋳物<br>メーカー</a>
        </span>
        <span class="group03 js-modal-open" data-target="3">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="浄水場" />
          <a class="text">浄水場</a>
        </span>
        <span class="group04 js-modal-open" data-target="4">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="家" />
          <a class="text">家</a>
        </span>
        <span class="group05 js-modal-open" data-target="5">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="建設機械メーカー" />
          <a class="text text--col2">建設機械<br>メーカー</a>
        </span>
        <span class="group06 js-modal-open" data-target="6">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="製紙会社" />
          <a class="text">製紙会社</a>
        </span>
        <span class="group07 js-modal-open" data-target="7">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="化粧品メーカー" />
          <a class="text text--col2">化粧品<br>メーカー</a>
        </span>
        <span class="group08 js-modal-open" data-target="8">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="漁港" />
          <a class="text">漁港</a>
        </span>
        <span class="group09 js-modal-open" data-target="9">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="アルミ建材メーカー" />
          <a class="text text--col2">アルミ建材<br>メーカー</a>
        </span>
        <span class="group10 js-modal-open" data-target="10">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="火力発電" />
          <a class="text text--col2">火力<br>発電所</a>
        </span>
        <span class="group11 js-modal-open" data-target="11">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="工場排水処理設備" />
          <a class="text text--col2">工場排水<br>処理設備</a>
        </span>
        <span class="group12 js-modal-open" data-target="12">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="土木工事" />
          <a class="text">土木工事</a>
        </span>
        <span class="group13 js-modal-open" data-target="13">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="排水" />
          <a class="text">排水</a>
        </span>
        <span class="group14 js-modal-open" data-target="14">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/group-icon-plain.svg")); ?>" alt="自動車メーカー" />
          <a class="text text--col2">自動車<br>メーカー</a>
        </span>
      </div>
    </div>
    <div class="modal js-modal" data-id="1">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group01.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">トンネル工事</p>
              <p class="modal__place">使われている製品：ポリ塩化アルミニウム</p>
            </div>
            <p class="modal__text">トンネル工事によって坑内湧水や、生コンの洗浄水といった多くの濁水が発生します。これら化学物質や汚れを含んだ濁水を適切に処理することは環境保全の面からとても重要となります。当社のポリ塩化アルミニウムはトンネル工事において、濁水に含まれる濁りを取り除き、排水できるようにするために使用されています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/pac")) ?>">
              <span class="button-text">ポリ塩化アルミニウムについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="2">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group07.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">鋳物メーカー</p>
              <p class="modal__place">使われている製品：コーテッドサンド/廃砂引取り</p>
            </div>
            <p class="modal__text">フェノール樹脂でコーティングした砂で、砂型を作るための材料です。使用後は回収して再生処理を行い、再び原料として使用することができます。使用される用途に合わせて様々な種類の製品を揃えています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/rcs")) ?>">
              <span class="button-text">コーテッドサンド/廃砂引取りについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="3">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group14.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">浄水場</p>
              <p class="modal__place">使われている製品：ポリ塩化アルミニウム</p>
            </div>
            <p class="modal__text">従来の凝集剤に代わる画期的な多能性無機高分子凝集剤として、経済性、作業性、凝集効果 および 各種原排水処理に対する幅広い適応性において、卓越した性能を有しています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/pac")) ?>">
              <span class="button-text">ポリ塩化アルミニウムについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="4">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group10.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">家</p>
              <p class="modal__place">使われている製品：発泡スチロール</p>
            </div>
            <p class="modal__text"> 加工性が良く、断熱性能が長期劣化しない発泡スチロールの特徴を活かした断熱材です。有害な化学物質を含まないので、地球にも優しく、北陸の寒い冬の外気から家を守ってくれています。</p>
            <a class="modal__btn" href="https://suchiro.jp/" target="_blank" rel="noopener noreferrer">
              <span class="button-text">スチロ化学工業株式会社について詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="5">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group13.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">建設機械メーカー</p>
              <p class="modal__place">使われている製品：廃砂引取り（リサイクル）</p>
            </div>
            <p class="modal__text">鋳物メーカーでは鋳造製品を製造する際に鋳物砂でできた砂型を使用します。当社では鋳物メーカーで使用された砂を回収し、再び鋳物砂として使用できるよう再生処理を行っています。</p>
            <a class="modal__btn">
              <span class="button-text">廃砂引取り（リサイクル）について詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="6">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group04.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">製紙会社</p>
              <p class="modal__place">使われている製品：硫酸バンド</p>
            </div>
            <p class="modal__text">紙を作るときはサイズ剤というインク滲み防止のための薬品を入れますが、それだけでは紙に定着しません。硫酸バンドを追加することで紙とサイズ剤が仲良くつながり効果が発揮されます。お客様、地域の方々、従業員とも仲良くつながっていたいですね。あと、紙を強くするために使われることもあります。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/las")) ?>">
              <span class="button-text">硫酸バンドについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="7">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group05.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">化粧品メーカー</p>
              <p class="modal__place">使われている製品：アルミン酸ソーダ</p>
            </div>
            <p class="modal__text">化粧品を長持ちさせる</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/alusou")) ?>">
              <span class="button-text">アルミン酸ソーダについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="8">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group09.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">漁港（もしくはスーパー）</p>
              <p class="modal__place">使われている製品：発泡スチロール</p>
            </div>
            <p class="modal__text">高い断熱性と緩衝性を持つ発泡スチロールの特性を活かし、漁港から水揚げされた新鮮な魚を鮮度を保って各お店等に輸送する際に当社グループの発泡スチロール魚箱が使用されています。</p>
            <a class="modal__btn" href="https://suchiro.jp/" target="_blank" rel="noopener noreferrer">
              <span class="button-text">スチロ化学工業株式会社について詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="9">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group12.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">アルミ建材メーカー</p>
              <p class="modal__place">使われている製品：廃液引取り（リサイクル）</p>
            </div>
            <p class="modal__text">アルミの表面処理を行うことで発生する廃酸。建材メーカーさんでは不要なものですが、当社はそれをリサイクル。再び世の中の役に立つ新しい製品へ生まれ変わらせています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/business/chemical")) ?>">
              <span class="button-text">化成品事業について詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="10">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group03.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">火力発電所</p>
              <p class="modal__place">使われている製品：塩化アルミニウム</p>
            </div>
            <p class="modal__text">火力発電所さんで使用する石炭にフッ素が含まれてることから、廃水中にフッ素が含まれます。このまま排出することはできませんので、塩化アルミニウムがフッ素を取り込んで無害化する一役を担っています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/alcl3")) ?>">
              <span class="button-text">塩化アルミニウムについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="11">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group06.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">工場排水処理施設</p>
              <p class="modal__place">使われている製品：排水用硫酸バンド</p>
            </div>
            <p class="modal__text">北陸には様々な工場があり、様々な廃水が排出されています。工場外へ放水するためにはキレイにする必要があります。そうです、そこに北陸化成工業所の排水用硫酸バンドがお役に立っています。縁の下の力持ちです。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/las")) ?>">
              <span class="button-text">排水用硫酸バンドについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="12">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group02.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">土木工事</p>
              <p class="modal__place">使われている製品：珪酸ソーダ</p>
            </div>
            <p class="modal__text">軟弱土壌を改良し、止水、土木工事を安全に施工するための薬液</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/keisou")) ?>">
              <span class="button-text">珪酸ソーダについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="13">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group11.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">各企業へ</p>
              <p class="modal__place">使われている製品：自社製品配送</p>
            </div>
            <p class="modal__text">当社の化学薬品や砂を各企業様まで輸送しています。多種多様なトラックを保有しておりお客様のご要望にそった荷姿で納品いたします。また自社製品の知識を保有したプロドライバーが、北陸化成工業所グループの顔としていつも笑顔で、安全に商品を運送しています。</p>
            <a class="modal__btn" href="https://chemiplus.jp/" target="_blank" rel="noopener noreferrer">
              <span class="button-text">ケミプラス株式会社について詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal js-modal" data-id="14">
      <div class="modal__body">
        <div class="modal__header">
          <div class="modal__close-button js-modal__close">
            <span></span>
            <span></span>
            <p>close</p>
          </div>
        </div>
        <div class="modal__content">
          <div class="modal__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/group/group08.jpg")); ?>" alt="">
          </div>
          <div class="modal__wrap">
            <div class="modal__title-wrap">
              <p class="modal__title">自動車メーカー</p>
              <p class="modal__place">使われている製品：中子</p>
            </div>
            <p class="modal__text">複雑な鋳物製品を作るためには、鋳物内部に空洞や様々な形状を作り出す必要があります。中子の原料であるレジンコーテッドサンドのメーカーとしての強みを活かし、安定した品質の製品を地域のお客様に提供しています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("product/core")) ?>">
              <span class="button-text">中子について詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="group__watersplash-sub">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
    </div>
  </section>


  <section class="works layout-works">
    <div class="works__inner inner inner--lg">
      <h3 class="works__title title title--vertically js-fade-up">事業・製品紹介</h3>
      <div class="works__container">
        <div class="works__heading">
          <p class="works__text">
            私たちは、地元・北陸地域から発生する副生物を独自の技術で有効活用し、<br class="md-none">お客様の求める商品を生み出すことで、循環型社会の実現に貢献し続けます。
          </p>
          <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="button-container">
            <span class="button-text">詳しく見る</span>
            <div class="button-icon">
              <span class="arrow"></span>
            </div>
          </a>

        </div>
        <ul class="works__list works-list">
          <li class="works-list__item">
            <a href="<?php echo esc_url(home_url("product")) ?>">
              <div class="works-list__item-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/works01.webp")); ?>" alt="省略" />
              </div>
              <div class="works-list__item-content">
                <p class="works-list__item-title">化成品事業</p>
                <p class="works-list__item-text">私たちの水処理技術は、暮らしに役立ち、自然と共存してきました。精選された原料と徹底した品質管理のもとで製造・出荷しています。</p>
                <div class="works-list__btn">
                  <span class="button-text">詳しく見る</span>
                  <div class="button-icon">
                    <span class="arrow"></span>
                  </div>
                </div>
              </div>
            </a>

          </li>
          <li class="works-list__item">
            <a href="<?php echo esc_url(home_url("product")) ?>">
              <div class="works-list__item-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/works02.webp")); ?>" alt="省略" />
              </div>
              <div class="works-list__item-content">
                <p class="works-list__item-title">鋳材事業</p>
                <p class="works-list__item-text">鋳物の製造に欠かせない鋳物砂や中子を、地域の鋳物メーカーへ供給しています。また、使用済みの鋳物砂を独自の技術で再生しています。</p>
                <div class="works-list__btn">
                  <div class="button-text" href="">詳しく見る</div>
                  <div class="button-icon">
                    <span class="arrow"></span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="works-list__item">
            <a href="<?php echo esc_url(home_url("business/analysis")) ?>">
              <div class="works-list__item-img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/works03.webp")); ?>" alt="省略" />
              </div>
              <div class="works-list__item-content">
                <p class="works-list__item-title">分析事業</p>
                <p class="works-list__item-text">富山県知事登録を行っている環境計量証明事業所として、当社の製品をお使い頂くお客様の依頼分析や測定もお請けしています。</p>
                <div class="works-list__btn" href="">
                  <span class="button-text">詳しく見る</span>
                  <div class="button-icon">
                    <span class="arrow"></span>
                  </div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="works__polkadots polkadots">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/polkadots.svg")); ?>" />
    </div>
    <div class="works__watersplash">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
    </div>
    <div class="works__watersplash-sub">
      <img src="<?php echo esc_url(get_theme_file_uri("./images/watersplash.svg")); ?>" />
    </div>
  </section>
  <?php get_template_part('template-parts/recruit'); ?>
  <?php get_template_part('template-parts/contact'); ?>
  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>