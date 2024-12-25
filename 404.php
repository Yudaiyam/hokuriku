<?php get_header(); ?>
<main>
  <div class="company-heading heading">
    <div class="heading__inner inner">
      <h1 class="heading__title">ページが見つかりません。
        <span class="heading__title-sub"><span class="md-capital">404&nbsp;not&nbsp;found</span>
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

  <div class="page404 layout-page404">
    <div class="page404__inner inner">
      <p class="page404__text">
        お探しのページが見つかりませんでした。<br>
        URLが間違っているか、<br class="md-show">ページが移動または削除された可能性があります。
        お手数ですが、<br class="md-show">メニューからお探しのページをお探しください。
      </p>
      <div class="page404__btn">
        <a class="button-container">
          <span class="button-text">ホームに戻る</span>
          <div class="button-icon">
            <span class="arrow"></span>
          </div>
        </a>
      </div>
    </div>
  </div>


  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>