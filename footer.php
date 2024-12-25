<footer class="footer layout-footer">
  <div class="footer__inner inner inner--lg">
    <div class="footer__container">
      <div class="footer__logo js-top">
        <a href="<?php echo esc_url(home_url("/")) ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("./images/common/logo02.svg")); ?>" alt="株式会社北陸化成工業所のロゴ" />
        </a>
      </div>
      <nav class="footer__nav">
        <div class="footer__nav-item js-top">
          <p class="footer__nav-title">
            <a href="<?php echo esc_url(home_url("company")) ?>">北陸化成工業所を知る</a>
          </p>
          <ul class="footer__nav-list">
            <li class="footer__nav-list-item"><a href="<?php echo esc_url(home_url("company")) ?>">会社案内</a></li>
            <li class="footer__nav-list-item"><a href="<?php echo esc_url(home_url("feature")) ?>">北陸化成工業所の強みについて</a></li>
            <li class="footer__nav-list-item">
              <a href="<?php echo esc_url(home_url("sdgs")) ?>"><span class="md-upper md-fw">sdg</span>sの取組み</a>
            </li>
          </ul>
        </div>
        <div class="footer__nav-item js-top">
          <p class="footer__nav-title">
            <a href="<?php echo esc_url(get_post_type_archive_link('business')); ?>">事業/製品紹介</a>
          </p>
          <ul class="footer__nav-list">
            <li class="footer__nav-list-item"><a href="<?php echo esc_url(home_url("/product/chemical")) ?>">化成品事業</a></li>
            <li class="footer__nav-list-item"><a href="<?php echo esc_url(home_url("/product/cast")) ?>">鋳材事業</a></li>
            <li class="footer__nav-list-item"><a href="<?php echo esc_url(home_url("/product/analysis")) ?>">分析事業</a></li>
          </ul>
        </div>
        <div class="footer__nav-item js-top">
          <p class="footer__nav-title">
            <a href="<?php echo esc_url(home_url("/recruit")) ?>">採用情報</a>
          </p>
          <ul class="footer__nav-list">
            <li class="footer__nav-list-item"><a href="<?php echo esc_url(home_url("/detail")) ?>">北陸化成工業所を深く知る</a></li>
            <li class="footer__nav-list-item"><a href="<?php echo esc_url(home_url("/interview")) ?>">先輩社員の声</a></li>
          </ul>
        </div>
        <div class="footer__nav-item js-top">
          <p class="footer__nav-title">
            <a href="<?php echo esc_url(home_url("/infomation")) ?>">新着情報</a>
          </p>
          <p class="footer__nav-title">
            <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
          </p>
        </div>
      </nav>
    </div>
    <div class="footer__bottom">
      <ul class="footer__policy">
        <li class="footer__policy-item"><a href="#">利用規約</a></li>
        <li class="footer__policy-item"><a href="#">プライバシーポリシー</a></li>
      </ul>
      <p class="footer__copyright">copyright&copy;<?php echo wp_date("Y"); ?>&nbsp;<span class="md-upper">hokuriku&nbsp;kasei&nbsp;industry&nbsp;co.,</span><span class="md-capi">ltd.</span><br class="md-show">&nbsp;all&nbsp;rights&nbsp;reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>