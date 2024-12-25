<?php get_header(); ?>
<main>
  <div class="service-heading heading">
    <div class="heading__inner inner">
      <h1 class="heading__title"><?php the_title(); ?>
        <span class="heading__title-sub"></span>
      </h1>
      <div class="breadcrumb">
        <?php custom_breadcrumb(); ?>
      </div>
    </div>
  </div>


  <div class="sub-contact">
    <div class="sub-contact__inner sub-contact__inner--confirm  inner">
      <p class="sub-contact__title">Webからのお問い合わせ</p>
      <p class="sub-contact__text">下記のフォームをご記入の上、お問い合わせください。</p>
      <p class="sub-contact__text">3営業日以内に連絡します。</p>
      <!-- <div class="sub-contact__form form form--confirm">
          <dl class="form__wrap">
            <dt class="form__label">お問い合わせ内容</dt>
            <dd class="form__select form-select"></dd>
          </dl>
          <dl class="form__wrap">
            <dt class="form__label"><span>必須</span>企業名</dt>
            <dd class="form__input">sss</dd>
          </dl>  <dl class="form__wrap">
            <dt class="form__label"><span>必須</span>部署・役職</dt>
            <dd class="form__input form-input"></dd>
          </dl>
          <dl class="form__wrap">
            <dt class="form__label"><span>必須</span>お名前</dt>
            <dd class="form__input form-input"></dd>
          </dl>
          <dl class="form__wrap">
            <dt class="form__label"><span>必須</span>ご住所</dt>
            <dd class="form__input form-input"></dd>
          </dl>
          <dl class="form__wrap">
            <dt class="form__label"><span>必須</span>電話番号</dt>
            <dd class="form__input form-input"></dd>
          </dl>
          <dl class="form__wrap">
            <dt class="form__label"><span>必須</span>メールアドレス</dt>
            <dd class="form__input form-input"></dd>
          </dl>
          <dl class="form__wrap form__wrap--textarea">
            <dt class="form__label"><span>必須</span>ご質問・ご要望の内容</dt>
            <dd class="form__textarea form-textarea"></dd>
          </dl>
        </div> -->
      <?php echo do_shortcode('[contact-form-7 id="e17888e" title="お問い合わせ確認"]'); ?>
    </div>
  </div>


  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php get_footer(); ?>