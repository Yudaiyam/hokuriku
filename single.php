<?php get_header(); ?>
<main class=hidden-page>

    <section class="detail-head layout-detail-head">
        <div class="detail-head__inner inner">
            <div class="news-list__item-meta">
                <time class="news-list__item-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('Y.m.d'); ?>
                </time>
                <?php
                $categories = get_the_category();
                if (! empty($categories)) {
                    foreach ($categories as $category) {
                        echo '<p class="news-list__item-category">' . esc_html($category->name) . '</p>';
                    }
                }
                ?>
            </div>
            <h1 class="detail-head__title"><?php the_title(); ?></h1>

            <!-- サムネイル表示 -->
            <!-- <div class="detail-head__img">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', ['class' => 'detail__thumbnail']); ?>
                <?php else : ?>
                    <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                <?php endif; ?>
            </div> -->

            <p class="detail-head__text"><?php the_field('business_text'); ?></p>
        </div>
    </section>


    <section class="detail layout-detail">
        <div class="detail__inner inner">
            <div class="product-detail__contents">
                <?php the_content(); ?>
            </div>
        </div>
    </section>


    <div class="detail-nav layout-detail">
        <div class="detail-nav__inner inner">
            <div class="detail-nav__btn btn-arrow-right">
                <?php
                // 前の記事のURLを取得
                $prev_post = get_previous_post();
                if ($prev_post) :
                    $prev_url = get_permalink($prev_post->ID);
                ?>
                    <a href="<?php echo esc_url($prev_url); ?>" class="button">
                        <div class="button-icon">
                            <span class="arrow-reverse"></span>
                        </div>
                        <span class="btn-arrow-left__name">前の記事を見る</span>
                    </a>
                <?php else : ?>
                    <!-- 前の記事がない場合 -->
                    <span class="button disabled">
                        <div class="button-icon md-hide">
                            <span class="arrow-reverse"></span>
                        </div>
                        <span class="btn-arrow-left__name md-hide">最後</span>
                    </span>
                <?php endif; ?>
            </div>



            <div class="detail-nav__btn btn-arrow-right">
                <?php
                // 次の記事のURLを取得
                $next_post = get_next_post();
                if ($next_post) :
                    $next_url = get_permalink($next_post->ID);
                ?>
                    <a href="<?php echo esc_url($next_url); ?>" class="button">
                        <span class="btn-arrow-right__name">次の記事を見る</span>
                        <div class="button-icon">
                            <span class="arrow"></span>
                        </div>
                    </a>
                <?php else : ?>
                    <!-- 次の記事がない場合 -->
                    <span class="button disabled">
                        <span class="btn-arrow-right__name md-hide">最後</span>
                        <div class="button-icon md-hide">
                            <span class="arrow"></span>
                        </div>
                    </span>
                <?php endif; ?>
            </div>

        </div>
    </div>


    <div class="detail-nav__btn btn-arrow-right btn-arrow-right--reverse">
        <a href="<?php echo esc_url(home_url("infomation")) ?>" class="button">
            <div class="button-icon">
                <span class="arrow-reverse"></span>
            </div>
            <span class="btn-arrow-left__name">一覧に戻る</span>
        </a>
    </div>


    <?php get_template_part('template-parts/recruit'); ?>
    <?php get_template_part('template-parts/contact'); ?>
    <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>