<?php get_header(); ?>
<main>
  <div class="interview-mv layout-interview-mv">
    <div class="interview-mv__inner inner">
      <div class="interview-mv__contents">
        <h1 class="interview-mv__title md-show"><?php the_field("interview-title"); ?></h1>
        <p class="interview-mv__age"><span><?php
                                            $taxonomy = 'age'; // タクソノミースラッグを指定
                                            $terms = get_the_terms(get_the_ID(), $taxonomy);

                                            if (! empty($terms) && ! is_wp_error($terms)) {
                                              foreach ($terms as $term) {
                                                echo '<span class="works-detail__category">' . esc_html($term->name) . '</span>';
                                              }
                                            } else {
                                              echo '<span class="works-detail__category">タクソノミーがありません</span>';
                                            }
                                            ?></span>年入社</p>
        <p class="interview-mv__division"><?php
                                          $taxonomy = 'division'; // タクソノミースラッグを指定
                                          $terms = get_the_terms(get_the_ID(), $taxonomy);

                                          if (! empty($terms) && ! is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                              echo '<span class="works-detail__category">' . esc_html($term->name) . '</span>';
                                            }
                                          } else {
                                            echo '<span class="works-detail__category">タクソノミーがありません</span>';
                                          }
                                          ?></p>
        <h1 class="interview-mv__title md-none"><?php the_field("interview-title"); ?></h1>
        <p class="interview-mv__name"><?php the_title(); ?>&nbsp;さん</p>
      </div>
    </div>
    <div class="interview-mv__img">
      <?php the_post_thumbnail('full'); ?>
    </div>
  </div>
  <div class="single-interview layout-single-interview">
    <div class="single-interview__inner inner inner--lg">
      <ul class="single-interview__list">
        <li class="single-interview__item">
          <div class="single-interview__item-texts">
            <div class="single-interview__item-title"><?php the_field("main-question1"); ?></div>
            <div class="single-interview__item-wrap">
              <p class="single-interview__item-sub-title"><?php the_field("sub-question1-1"); ?>
              <p class="single-interview__item-text"><?php the_field("answer1-1"); ?></p>
            </div>
            <div class="single-interview__item-wrap">
              <p class="single-interview__item-sub-title"><?php the_field("sub-question1-2"); ?></p>
              <p class="single-interview__item-text"><?php the_field("answer1-2"); ?></p>
            </div>
            <div class="single-interview__item-wrap">
              <p class="single-interview__item-sub-title"><?php the_field("sub-question1-3"); ?></p>
              <p class="single-interview__item-text"><?php the_field("answer1-3"); ?></p>
            </div>
          </div>
          <div class="single-interview__item-img">
            <?php
            // 1.フィールド名「custom-img」のデータを取得
            $image = get_field("detail1");

            // 2.$imageのデータから画像のURLを変数化
            $url = $image["url"];

            // 3.$imageのデータから画像のalt属性を変数化
            $alt = $image["alt"];
            ?>

            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="about__img">
          </div>
        </li>
        <li class="single-interview__item">
          <div class="single-interview__item-texts">
            <div class="single-interview__item-title"><?php the_field("main-question2"); ?></div>
            <div class="single-interview__item-wrap">
              <p class="single-interview__item-sub-title"><?php the_field("sub-question2-1"); ?></p>
              <p class="single-interview__item-text"><?php the_field("answer2-1"); ?></p>
            </div>
            <div class="single-interview__item-wrap">
              <p class="single-interview__item-sub-title"><?php the_field("sub-question2-2"); ?></p>
              <p class="single-interview__item-text"><?php the_field("answer2-2"); ?></p>
            </div>
            <div class="single-interview__item-title"><?php the_field("main-question3"); ?></div>
            <div class="single-interview__item-wrap">
              <p class="single-interview__item-sub-title"><?php the_field("sub-question3-1"); ?></p>
              <p class="single-interview__item-text"><?php the_field("answer3-1"); ?></p>
            </div>
            <div class="single-interview__item-wrap">
              <p class="single-interview__item-sub-title"><?php the_field("sub-question3-2"); ?></p>
              <p class="single-interview__item-text"><?php the_field("answer3-2"); ?></p>
            </div>
          </div>
          <div class="single-interview__item-img">
            <?php
            // 1.フィールド名「custom-img」のデータを取得
            $image = get_field("detail2");

            // 2.$imageのデータから画像のURLを変数化
            $url = $image["url"];

            // 3.$imageのデータから画像のalt属性を変数化
            $alt = $image["alt"];
            ?>

            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="about__img">
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="schedule layout-schedule">
    <div class="schedule__inner inner">
      <h2 class="schedule__title">1日のスケジュール</h2>

      <dl class="schedule__list schedule-list">
        <?php 
        $time_6 = get_field("time-6"); 
        if ($time_6): 
       ?>
		<div class="schedule-list__item">
          <dt class="schedule-list__term">6:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-6"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
        <?php 
        $time_7 = get_field("time-7"); 
        if ($time_7): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">7:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-7"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
        <?php 
        $time_8 = get_field("time-8"); 
        if ($time_8): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">8:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-8"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_9 = get_field("time-9"); 
        if ($time_9): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">9:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-9"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_10 = get_field("time-10"); 
        if ($time_10): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">10:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-10"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_11 = get_field("time-11"); 
        if ($time_11): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">11:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-11"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_12 = get_field("time-12"); 
        if ($time_12): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">12:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-12"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_13 = get_field("time-13"); 
        if ($time_13): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">13:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-13"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_14 = get_field("time-14"); 
        if ($time_14): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">14:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-14"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_15 = get_field("time-15"); 
        if ($time_15): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">15:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-15"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_16 = get_field("time-16"); 
        if ($time_16): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">16:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-16"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_17 = get_field("time-17"); 
        if ($time_17): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">17:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-17"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_18 = get_field("time-18"); 
        if ($time_18): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">18:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-18"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_19 = get_field("time-19"); 
        if ($time_19): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">19:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-19"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
       <?php 
        $time_20 = get_field("time-20"); 
        if ($time_20): 
       ?>
        <div class="schedule-list__item">
          <dt class="schedule-list__term">20:00</dt>
          <dd class="schedule-list__description"><?php the_field("time-20"); ?></dd>
        </div>
		<?php 
		endif; 
		?>
      </dl>
    </div>
    <div class="schedule__icon">
      <?php
      // 1.フィールド名「custom-img」のデータを取得
      $image = get_field("detail3");

      // 2.$imageのデータから画像のURLを変数化
      $url = $image["url"];

      // 3.$imageのデータから画像のalt属性を変数化
      $alt = $image["alt"];
      ?>

      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="about__img">
    </div>
  </div>

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
    <path d="M 0,400 L 0,150 C 87.39285714285714,118.10714285714286 174.78571428571428,86.21428571428571 295,83 C 415.2142857142857,79.78571428571429 568.2499999999999,105.25 713,129 C 857.7500000000001,152.75 994.2142857142858,174.7857142857143 1114,178 C 1233.7857142857142,181.2142857142857 1336.892857142857,165.60714285714283 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#53bdc6" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
  </svg>
  <section class="recruit-member layout-recruit-member">
    <div class="recruit-member__inner inner inner--lg">
      <p class="recruit-heading__title recruit-heading__title--single-interview">他の先輩社員の声</p>
      <!-- swiperここから -->
      <div class="recruit-member__swiper recruit-member-swiper">
        <div class="swiper js-recruit-member-swiper">
          <!-- <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <a href="">
                <div class="recruit-member__item">
                  <div class="recruit-member__img">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/member01.jpg")); ?>" alt="">
                    <span class="recruit-member__icon">2018年入社</span>
                  </div>
                  <div class="recruit-member__text">北陸化成工業所の製品を多くの人に広めたい</div>
                  <span class="recruit-member__category">総務課</span>
                  <span class="recruit-member__name">A・Mさん</span>
                </div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="">
                <div class="recruit-member__item">
                  <div class="recruit-member__img">
                  <img src="<?php echo esc_url(get_theme_file_uri("./images/member02.jpg")); ?>" alt="">
                    <span class="recruit-member__icon">2018年入社</span>
                  </div>
                  <div class="recruit-member__text">技術者として地域の安心を守る</div>
                  <span class="recruit-member__category">化成品製造課</span>                    <span class="recruit-member__name">A・Mさん</span>
                </div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="">
                <div class="recruit-member__item">
                  <div class="recruit-member__img">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/member03.jpg")); ?>" alt="">
                      <span class="recruit-member__icon">2018年入社</span>
                  </div>
                  <div class="recruit-member__text">北陸化成工業所の製品を多くの人に広めたい</div>
                    <span class="recruit-member__category">総務課</span>
                    <span class="recruit-member__name">A・Mさん</span>
                  </div>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="">
                <div class="recruit-member__item">
                  <div class="recruit-member__img">
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/member03.jpg")); ?>" alt="">
                      <span class="recruit-member__icon">2018年入社</span>
                  </div>
                  <div class="recruit-member__text">北陸化成工業所の製品を多くの人に広めたい</div>
                    <span class="recruit-member__category">総務課</span>
                    <span class="recruit-member__name">A・Mさん</span>
                  </div>
              </a>
            </li>
          </ul> -->
          <ul class="swiper-wrapper">
            <?php
            // カスタム投稿タイプ 'interview' の情報を取得
            $args = array(
              'post_type' => 'interview', // カスタム投稿タイプ
              'posts_per_page' => -1, // すべての投稿を取得
            );
            $interview_posts = new WP_Query($args);

            // ループ処理
            if ($interview_posts->have_posts()) :
              while ($interview_posts->have_posts()) : $interview_posts->the_post();

                // カスタムフィールドの取得
                $custom_text = get_field('custom_field_name'); // フィールド名を入力

                // タクソノミー 'division' の取得
                $division_terms = get_the_terms(get_the_ID(), 'division');
                $division_name = $division_terms ? $division_terms[0]->name : '';

                // タクソノミー 'age' の取得
                $age_terms = get_the_terms(get_the_ID(), 'age');
                $age_name = $age_terms ? $age_terms[0]->name : '';

                // サムネイル画像の取得
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <li class="swiper-slide">
                  <a href="<?php the_permalink(); ?>">
                    <div class="recruit-member__item">
                      <div class="recruit-member__img">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                        <span class="recruit-member__icon"><?php echo esc_html($age_name); ?> 入社</span>
                      </div>
                      <div class="recruit-member__text"><?php the_field("interview-title"); ?></div>
                      <span class="recruit-member__category"><?php echo esc_html($division_name); ?></span>
                      <span class="recruit-member__name"><?php the_title(); ?> <span>さん</span></span>
                    </div>
                  </a>
                </li>
              <?php
              endwhile;
              wp_reset_postdata(); // 投稿データをリセット
            else :
              ?>
              <li>投稿がありません。</li>
            <?php endif; ?>
          </ul>
          <div class="swiper-pagination"></div>
          <div class="recruit-member-swiper__button-wrap">
            <div class="swiper-button-prev js-service-arrow"></div>
            <div class="swiper-button-next js-service-arrow"></div>
          </div>
        </div>

      </div>



    </div>
  </section>
  <?php get_template_part('template-parts/recruit'); ?>
  <section class="contact layout-contact">
    <div class="contact__inner inner inner--md">
      <div class="contact__wrap ">
        <h2 class="contact__title title js-top">お問い合わせ</h2>
        <p class="contact__description js-top">「依頼が可能か聞いてみたい」「製品についてもっと詳しく聞きたい」など、<br>何でもお気軽にお問合せください。<br>北陸エリア以外のご依頼も対応可能です。</p>
      </div>
      <div class="circle-container">
        <div class="circle-set js-top">
          <a href="<?php echo esc_url(home_url("contact")) ?>"><img src="<?php echo esc_url(get_theme_file_uri("./images/circle.svg")); ?>" class="circle-image" />
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


  </section>
  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>