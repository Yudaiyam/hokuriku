<?php get_header(); ?>
<main class="">
  <div class="sub-contact-heading heading">
    <div class="heading__inner inner">
      <h1 class="heading__title"><?php the_title(); ?>
        <span class="heading__title-sub"><span class="md-capital">contact</span>
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
    <span class="bg-water"></span>
    <span class="bg-water2"></span>
  </div>
  <div class="sub-contact-tel layout-sub-contact-tel">
    <div class="sub-contact-tel__inner inner">
      <a class="sub-contact__tel-btn" href="tel:090-1234-5678">
        <span class="sub-contact__tel-text">お電話でのお問い合わせ</span><span class="sub-contact__tel-number"><span class="sub-contact__tel-icon">tel.</span>090-1234-5678</span></a>
    </div>
  </div>
  <div class="sub-contact">
    <div class="sub-contact__inner inner">
      <p class="sub-contact__title">Webからのお問い合わせ</p>
      <p class="sub-contact__text">下記のフォームをご記入の上、<br class="me-show">
        お問い合わせください。</p>
      <p class="sub-contact__text">3営業日以内に連絡します。</p>
      <?php echo do_shortcode('[contact-form-7 id="d8396a5" title="テストフォーム"]'); ?>
    </div>
  </div>
  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>