<?php get_header(); ?>
<main>
  <div class="company-heading heading">
    <div class="heading__inner inner">
      <h1 class="heading__title"><?php the_title(); ?>
        <span class="heading__title-sub"><span class="md-capital">complete</span>
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


  <div class="contact-complete layout-contact-confirm">
    <div class="contact-complete__inner inner">
      <p class="contact-complete__text">
        お問い合わせをいただき、誠にありがとうございます。<br>
        ご記入いただいたお問い合わせ内容は正常に送信されました。<br>
        3営業日以内にご連絡いたしますので、<br class="md-show">もうしばらくお待ちください。
      </p>
      <div class="contact-complete__btn">
        <a class="button-container" href="<?php echo esc_url(home_url()); ?>">
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