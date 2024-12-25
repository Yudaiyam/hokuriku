<?php
get_header();
?>
<main class="hidden-page">
  <section class="products-heading heading">
    <div class="heading__inner inner">
      <h1 class="heading__title">事業・製品紹介
        <span class="heading__title-sub">business&nbsp;and&nbsp;product</span>
      </h1>
      <!-- <div class="breadcrumb">
        <?php custom_breadcrumb(); ?>
      </div> -->
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
  </section>
  <section class="group group--product layout-group">
    <h3 class="group__title">北陸化成工業所グループ</h3>
    <p class="group__text">当社の製品は暮らしには欠かせない、とても身近なところで色々と使われています。</p>
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
            <p class="modal__text">トンネル工事によって坑内湧水や、生コンの洗浄水といった多くの濁水が発生します。これら化学物質や汚れを含んだ濁水を適切に処理することは環境保全の面からとても重要ですよね。当社のポリ塩化アルミニウムはトンネル工事において、濁水に含まれる濁りを取り除き、排水できるようにしています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemicals/pac")) ?>">
              <span class="button-text">ポリ塩化アルミニウムについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
			   <div class="modal__title-wrap">
              <p class="modal__place">使われている製品：アルミン酸ソーダ</p>
            </div>
            <p class="modal__text">トンネル工事で掘り進んだ後は崩れてこない様にセメントを吹き付けて固めます。固めるには時間がかかりますが北陸化成工業所のアルミン酸ソーダを追加するとあっという間に固まりますので作業性が良くなります。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemicals/pac")) ?>">
              <span class="button-text">アルミン酸ソーダについて詳しくみる</span>
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
            <a class="modal__btn" href="<?php echo esc_url(home_url("/products/cast/rcs")) ?>">
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
            <p class="modal__text">ポリ塩化アルミニウムは水の中に含まれる濁りを取り除くことができ、浄水場などで飲み水を作るために日本で一番幅広く使用されている凝集剤です。北陸の美味しい水道水を皆さまのご家庭にお届けするために当社の薬品が役立っています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemicals/pac")) ?>">
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
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/cast/recycling-sand")) ?>">
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
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemicals/las")) ?>">
              <span class="button-text">硫酸バンドについて詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
			  <div class="modal__title-wrap">
              <p class="modal__place">使われている製品：ホワイトカーボン</p>
            </div>
            <p class="modal__text">新聞紙が軽く薄くできるのはホワイトカーボンのおかげ。北陸化成工業所の製品が余分なインクを吸収し新聞を読みやすくしています。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemicals/las")) ?>">
              <span class="button-text">ホワイトカーボンについて詳しくみる</span>
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
            <p class="modal__text">化粧品の原料の一部をコーティングして長持ちさせるのに使用されています。長く使える様になるのは使う側にとってはとてもうれしいですね。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemicals/alusou")) ?>">
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
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemical")) ?>">
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
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemical/alcl3")) ?>">
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
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemical/las")) ?>">
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
            <p class="modal__text">工事現場において水が含まれているような軟弱土壌に中和剤と共に混ぜ込み、固化させ、工事しやすくします。水がしみ出てくるような場所でも改良を行うことで工事が行えるようになります。</p>
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/chemical/keisou")) ?>">
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
            <a class="modal__btn" href="<?php echo esc_url(home_url("/product/cast/core")) ?>">
              <span class="button-text">中子について詳しくみる</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="division layout-division">
    <div class="division__inner inner inner--lg">
      <div class="division__head division-head">
        <h2 class="division-head__title md-dots">北陸化成工業所の3つの事業</h2>
        <?php
        // WP_Queryを使って親投稿を取得
        $args = array(
          'post_type'      => 'product', // カスタム投稿タイプ
          'post_parent'    => 0, // 親投稿（親を持たない投稿のみ）
          'posts_per_page' => -1, // 全て取得
          'orderby'        => 'menu_order', // 必要に応じて順番を指定
          'order'          => 'ASC'
        );
        $parent_posts = new WP_Query($args);

        // ループ開始
        if ($parent_posts->have_posts()) :
          $counter = 1; // 数字用のカウンター
        ?>
          <ol class="division-head__cards">
            <?php while ($parent_posts->have_posts()) : $parent_posts->the_post(); ?>
              <li class="division-head__card">
                <a href="#<?php echo esc_attr($counter); ?>">
                  <!-- 事業名（リンクなし） -->
                  <p class="division-head__card-title"><?php the_title(); ?></p>
                  <!-- 事業の説明 -->
                  <p class="division-head__card-text"><?php the_field('business_text_1'); ?></p>
                  <span class="division-head__card-arrow"></span>
                </a>
              </li>
              <?php $counter++; // カウンターをインクリメント 
              ?>
            <?php endwhile; ?>
          </ol>
        <?php
        endif;
        // WP_Query後のリセット
        wp_reset_postdata();
        ?>
      </div>
      <?php
      // WP_Queryを使って親投稿を取得
      $args = array(
        'post_type'      => 'product', // カスタム投稿タイプ
        'post_parent'    => 0, // 親投稿（親を持たない投稿のみ）
        'posts_per_page' => -1, // 全て取得
        'orderby'        => 'menu_order', // 必要に応じて順番を指定
        'order'          => 'ASC'
      );
      $parent_posts = new WP_Query($args);

      // ループ開始
      if ($parent_posts->have_posts()) :
        $counter = 1; // 数字用のカウンター
      ?>
        <ol class="division__list division-list" type="01">
          <?php while ($parent_posts->have_posts()) : $parent_posts->the_post(); ?>
            <li class="division-list__item" id="<?php echo esc_attr($counter); ?>"> <!-- 動的にIDを付与 -->
              <div class="division-list__tops">
                <div class="division-list__tops-contents">
                  <!-- 事業名 -->
                  <p class="division-list__tops-title"><?php the_title(); ?></p>
                  <!-- ACFのbusiness_text_2を取得 -->
                  <p class="division-list__tops-text"><?php the_field('business_text_2'); ?></p>
                  <!-- 詳しく見るボタン -->
                  <div class="division-list__tops-btn">
                    <a class="button-container" href="<?php the_permalink(); ?>">
                      <span class="button-text">詳しく見る</span>
                      <div class="button-icon">
                        <span class="arrow"></span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="division-list__tops-img">
                  <!-- 事業のサムネイル -->
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/default.jpg")); ?>" alt="No Image">
                  <?php endif; ?>
                </div>
              </div>
              <ul class="division-list__products">
                <?php
                // 除外したい子投稿のIDを指定
                $excluded_posts = array(869); // 除外する子投稿のIDを配列で指定
                // 子投稿を取得
                $child_args = array(
                  'post_type'      => 'product', // カスタム投稿タイプ
                  'post_parent'    => get_the_ID(), // 現在の親投稿を指定
                  'post__not_in'   => $excluded_posts, // 除外する投稿IDを指定
                  'posts_per_page' => -1, // 全て取得
                  'orderby'        => 'menu_order', // 必要に応じて順番を指定
                  'order'          => 'ASC'
                );
                $child_posts = new WP_Query($child_args);

                // 子投稿のループ
                if ($child_posts->have_posts()) :
                  while ($child_posts->have_posts()) : $child_posts->the_post(); ?>
                    <li class="division-list__products-item">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                  <?php endwhile;
                  wp_reset_postdata(); // 子投稿のクエリをリセット
                else : ?>
                  <li class="division-list__products-item">子投稿がありません。</li>
                <?php endif; ?>
                <span class="business-bg" id="business-bg-<?php echo esc_attr($counter); ?>"></span>
              </ul>
            </li>
            <?php $counter++; // カウンターをインクリメント
            ?>
          <?php endwhile; ?>
        </ol>
      <?php
      endif;

      // WP_Query後のリセット
      wp_reset_postdata();
      ?>

    </div>
  </section>

  <div class="customize layout-customize layout-customize--single-business ">
    <div class="customize__inner inner">
      <div class="customize__contents-wrap">
        <div class="customize__contents">
          <p class="customize__title">カスタマイズ製品</p>
          <p class="customize__text">お客様の悩み事から当社独自のカスタマイズ製品もご提供可能でございます。</p>
          <div class="customize__btn">
            <a class="button-container" href="<?php echo esc_url(home_url("/product/customize")) ?>">
              <span class="button-text">詳しく見る</span>
              <div class="button-icon">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>
        <div class="customize__img">
          <img src="<?php echo esc_url(get_theme_file_uri("./images/customize01.jpg")); ?>" />
        </div>
      </div>
    </div>

  </div>
  <?php get_template_part('template-parts/recruit'); ?>
  <?php get_template_part('template-parts/contact'); ?>
  <?php get_template_part('template-parts/banner'); ?>
</main>
<?php
get_footer();
?>