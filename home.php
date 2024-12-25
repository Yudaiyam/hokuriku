<?php get_header(); ?>
<main class="hidden-page" id="single-information">
  <div class="about-heading heading">
    <div class="heading__inner inner">
      <h1 class="heading__title">新着情報
        <span class="heading__title-sub"><span class="md-capital">news</span>
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


  <div class="sub-news layout-sub-news">
    <div class="sub-news__inner inner inner--lg">
      <div class="sub-news-list__menu">
        <ul class="sub-news-list__menu-list">
          <!-- <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                  echo '<li class="sub-news-list__menu-item"><a class="detail__link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }
                ?> -->
          <!-- <?php
                $categories = get_categories();
                $current_category_id = is_category() ? get_queried_object_id() : null; // 現在のカテゴリーIDを取得
                foreach ($categories as $category) {
                  // 現在のページのカテゴリーと一致する場合にアクティブクラスを追加
                  $active_class = ($category->term_id === $current_category_id) ? ' news-list__item--active' : '';
                  echo '<li class="detail__item sub-news-list__menu-item' . $active_class . '">';
                  echo '<a class="detail__link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                  echo '</li>';
                }
                ?> -->
          <?php
          $categories = get_categories();
          $current_category_id = is_category() ? get_queried_object_id() : null; // 現在のカテゴリーIDを取得
          $home_url = home_url(); // ホームページURL

          // "全て" タブを先頭に表示
          echo '<li class="detail__item sub-news-list__menu-item' . (is_home() || is_front_page() ? ' news-list__item--active' : '') . '">';
          echo '<a class="detail__link" href="' . esc_url(home_url("infomation")) . '">全て</a>';
          echo '</li>';
          // 各カテゴリーを表示
          foreach ($categories as $category) {
            // 現在のページのカテゴリーと一致する場合にアクティブクラスを追加
            $active_class = ($category->term_id === $current_category_id) ? ' news-list__item--active' : '';
            echo '<li class="detail__item sub-news-list__menu-item' . $active_class . '">';
            echo '<a class="detail__link" href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a>';
            echo '</li>';
          }
          ?>

          <!-- <li class="sub-news-list__menu-item news-list__item--active"><a href="#">すべて</a></li>
                <li class="sub-news-list__menu-item"><a href="#">お知らせ</a></li>
                <li class="sub-news-list__menu-item"><a href="#">採用情報</a></li>
                <li class="sub-news-list__menu-item"><a href="#">コラム</a></li>
                <li class="sub-news-list__menu-item"><a href="#">その他</a></li> -->
        </ul>
      </div>

      <div class="sub-news-list__contents">
        <div class="sub-news-list__news news">
          <div class="news__inner">
            <?php 
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 10,
              'paged' => get_query_var('paged', 1),
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : ?>
              <ul>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <li class="news-list__item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="news-list__item-img news-list__item-img--infomation">

                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                          <img class="news__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                        <?php endif; ?>

                      </div>
                      <div class="news-list__item-content">
                        <div class="news-list__item-meta">
                          <time class="news-list__item-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                          <?php
                          $categories = get_the_category();
                          if (! empty($categories)) {
                            foreach ($categories as $category) {
                              echo '<p class="news-list__item-category">' . esc_html($category->name) . '</p>';
                            }
                          }
                          ?>
                        </div>
                        <p class="news-list__item-title"><?php the_title(); ?></p>
                        <div class="news-list__arrow">
                          <div class="c-btn-icon">
                            <span class="c-arrow"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>


          </div>
          <div class="pagenavi">
            <div class="pagenavi__inner">
              <!-- WP-PageNaviで出力される部分 ここから -->
              <?php wp_pagenavi(); ?>
            </div>
            <!-- <div class='wp-pagenavi' role='navigation'>
          <a class="previouspostslink" rel="prev" href="#">«</a>
          <span class='current'>1</span>
          <a class="page larger" href="#">2</a>
          <a class="page larger" href="#">3</a>
          <a class="nextpostslink" rel="next" href="#">»</a>
        </div> -->
            <!-- WP-PageNaviで出力される部分 ここまで -->
          </div>

        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <?php get_template_part('template-parts/recruit'); ?>
  <?php get_template_part('template-parts/contact'); ?>
  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>