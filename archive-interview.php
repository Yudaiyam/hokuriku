<?php get_header(); ?>
<main class="hidden-page" id="archive-interview">
    <div class="company-heading heading">
        <div class="heading__inner inner">
            <h1 class="heading__title">先輩社員の声<?php the_field('number-of-businesses'); ?>
                <span class="heading__title-sub"><span class="md-capital">company</span>
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

    <div class="interview layout-interview">
        <div class="interview__inner inner">
            <?php
            $args = [
                "post_type" => "interview",
                "posts_per_page" => 10
            ];
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <ul class="interview__list interview-list">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="interview-list__item">
                            <a href="<?php the_permalink(); ?>" class="interview-list__item">
                                <div class="interview-list__item-img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full',); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>)" alt="NoImage画像" />
                                    <?php endif; ?>
                                </div>
                                <div class="interview-list__item-content ">
                                    <p class="interview-list__item-age"><?php
                                                                        $taxonomy_terms = get_the_terms($post->ID, 'age');
                                                                        if (! empty($taxonomy_terms)) {
                                                                            foreach ($taxonomy_terms as $taxonomy_term) {
                                                                                echo '<span class="news__category">' . esc_html($taxonomy_term->name) . '</span>';
                                                                            }
                                                                        }
                                                                        ?>年入社</p>
                                    <p class="interview-list__item-division"><?php
                                                                                $taxonomy_terms = get_the_terms($post->ID, 'division');
                                                                                if (! empty($taxonomy_terms)) {
                                                                                    foreach ($taxonomy_terms as $taxonomy_term) {
                                                                                        echo '<span class="news__category">' . esc_html($taxonomy_term->name) . '</span>';
                                                                                    }
                                                                                }
                                                                                ?></p>
                                    <p class="interview-list__item-title"><?php the_field("interview-title"); ?></p>
                                    <p class="interview-list__item-name"><?php the_title(); ?>&nbsp;さん</p>
                                    <div class="interview-list__btn">
                                        <span class="button-container">
                                            <span class="button-text">詳しく見る</span>
                                            <div class="button-icon">
                                                <span class="arrow"></span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>
        </div>
        <span class="interview__bg-left"></span>
        <span class="interview__bg-left-second"></span>
        <span class="interview__bg-right"></span>
        <span class="interview__bg-right-second"></span>
    </div>
    <?php get_template_part('template-parts/recruit'); ?>
    <?php get_template_part('template-parts/contact'); ?>
    <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>