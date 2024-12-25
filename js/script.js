jQuery(function ($) {
  // ハンバーガーメニュー
  $(function () {
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      $(".js-drawer").fadeToggle();
    });

    // ドロワーナビのaタグをクリックで閉じる
    $(".js-drawer a[href]").on("click", function () {
      $(".js-hamburger").removeClass("is-open");
      $(".js-drawer").fadeOut();
    });

    // resizeイベント
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $(".js-hamburger").removeClass("is-open");
        $(".js-drawer").fadeOut();
      }
    });
  });

  // ヘッダーナビのアコーディオン
  $(".js-drawer-accordion").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-open");
  });

  // スクロールトップボタン
  $(function () {
    var btn = $(".scrollTopButton"); // ボタン要素
    var timer; // スクロール停止のタイマー

    $(window).on("scroll", function () {
      // スクロール開始時、ボタンを非表示にする
      btn.removeClass("is-active");

      // スクロール中のタイマーをクリア
      clearTimeout(timer);

      // スクロールが停止して0.2秒後にボタンを表示
      timer = setTimeout(function () {
        if ($(window).scrollTop() > 0) {
          // スクロール位置がページ上部以外ならボタンをスライドイン表示
          btn.addClass("is-active");
        } else {
          // ページトップではボタンをスライドアウト非表示
          btn.removeClass("is-active");
        }
      }, 200); // 200ms後にボタンを表示
    });

    // ボタンクリックでページトップにスムーズスクロール
    btn.on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 600); // 600msでスムーズに移動
    });
  });





  var targetElement = $(".group__wrap"); // 対象要素
  var isTriggered = false; // トリガーフラグ

  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop(); // 現在のスクロール位置
    var windowHeight = $(window).height(); // ウィンドウの高さ
    var offset = targetElement.offset().top; // 対象要素の位置

    // 要素が画面内に入った場合、幅を100%に変更（1回のみ実行）
    if (!isTriggered && scroll > offset - windowHeight + 150) {
      isTriggered = true; // 一度だけ実行
      targetElement.animate(
        {
          width: "100%", // 幅を100%に変更
        },
        {
          duration: 1000, // アニメーションの時間（3000ミリ秒 = 3秒）
          easing: "swing", // イージング
        }
      );
    }
  });
});


// document.addEventListener("DOMContentLoaded", function () {
//   gsap.registerPlugin(ScrollTrigger);

//   gsap.to(".group__wrap", {
//     width: "100%", // 横幅を100%まで広げる
//     scrollTrigger: {
//       trigger: ".group", // スクロールをトリガーする要素
//       start: "center", // トリガー開始位置
//       end: "bottom center", // トリガー終了位置
//       scrub: true, // スクロールに同期するアニメーション
//       invalidateOnRefresh: true, // 初期状態をリセットして正確に計算
//     },
//   });
// });




// 固定アニメーション: .mv セクション
ScrollTrigger.create({
  trigger: ".mv",
  start: "top top",
  end: "+=250%",
  scrub: true,
  pin: true,
  pinSpacing: true,

  onUpdate: (self) => {
    const progress = self.progress;
    const currentProgress = self.progress;
    const lastProgress = self.lastProgress || 0;
    const scrollSpeed = Math.abs(currentProgress - lastProgress);
    self.lastProgress = currentProgress;

    // console.log("progress", progress);
    // console.log("self", self);

    // .mv__img のアニメーション
    if (progress <= 0.5) {
      gsap.set(".mv__img", {
        clipPath: `circle(${50 + progress * 100}% at 66% 35%)`,
      });

      // スクロールが戻るときに .mv__btn と .mv__title-wrap を再表示
      gsap.to([".mv__btn", ".mv__title-wrap"], {
        opacity: 1,
        duration: 0.2,
        overwrite: true,
      });

      // progress が 0.5 以下の時は hidden-div を非表示
      gsap.set(".hidden-div", {
        visibility: "hidden",
        opacity: 0,
      });
    }

    // .hidden-div の visibility 制御とアニメーション
    if (progress > 0.5 && progress <= 0.75) {
      const adjustedProgress = (progress - 0.5) * 4;

      // 急速なスクロールの場合は非表示に
      if (scrollSpeed > 0.05) {
        gsap.set(".hidden-div", {
          visibility: "hidden",
          opacity: 0,
        });
      } else {
        gsap.set(".hidden-div", { visibility: "visible" });
        gsap.set(".hidden-div", { opacity: adjustedProgress });
      }

      // スクロールが進むときに .mv__btn と .mv__title-wrap をフェードアウト
      gsap.to([".mv__btn", ".mv__title-wrap"], {
        opacity: 0,
        duration: 0.2,
        overwrite: true,
      });
    }

    // .hidden-div__text の blur アニメーション (0.75 ～ 1 の間)
    if (progress > 0.75) {
      const adjustedBlurProgress = (progress - 0.75) * 4;

      gsap.set(".hidden-div__text", {
        filter: `blur(${22 - adjustedBlurProgress * 22}px)`,
      });
    }

    // 最後のフェーズが終わった後、少しスクロールを止めて猶予を与える
    if (progress > 0.95) {
      gsap.to(self, {
        progress: 1,
        duration: 1,
        ease: "power1.inOut",
        overwrite: true,
      });
    }
  },

  onLeaveBack: () => {
    // TOPに戻った時の初期化
    gsap.set(".hidden-div", {
      visibility: "hidden",
      opacity: 0,
    });
    gsap.set(".mv__img", {
      clipPath: `circle(50% at 66% 35%)`,
    });
    gsap.set([".mv__btn", ".mv__title-wrap"], {
      opacity: 1,
    });
  },
});

// gsap.fromTo(
//   ".news__title",
//   { opacity: 0, y: 20 },
//   {
//     opacity: 1,
//     y: 0,
//     duration: 1.2,
//     stagger: 0.3,
//     ease: "power3.inOut",
//     scrollTrigger: {
//       trigger: ".news",
//       start: "top 90%",
//     },
//   }
// );

// gsap.fromTo(
//   ".news-nav__list .news-nav__list-item",
//   { opacity: 0, y: 20 },
//   {
//     scrollTrigger: {
//       trigger: ".news__nav-wrap",
//       start: "top 90%",
//     },
//     opacity: 1,
//     y: 0,
//     duration: 1.5,
//     stagger: 0.1,
//     ease: "power3.inOut",
//   }
// );

gsap.fromTo(
  ".footer__nav-item .footer__nav-item",
  { opacity: 0, y: 20 },
  {
    opacity: 1,
    y: 0,
    duration: 1.5,
    stagger: 0.1,
    ease: "power3.inOut",

    scrollTrigger: {
      trigger: ".footer__nav-item",
      start: "top 90%",
    },
  }
);



document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  // メディアクエリを設定
  const mm = gsap.matchMedia();

  // 786px以上の場合のみアニメーションを有効化
  mm.add("(min-width: 786px)", () => {
    gsap.to(".group__wrap", {
      width: "1440", // 横幅を100%まで拡大
      scrollTrigger: {
        trigger: ".group", // トリガーとなる要素
        start: "top 90%", // トリガー開始位置
        end: "center center", // トリガー終了位置
        scrub: 1, // スクロールに同期
      },
    });
  });

  // 786px以下の場合の処理（必要ならここに記述）
  mm.add("(max-width: 785px)", () => {
    // ここでアニメーションやGSAP関連の設定をリセットできます
    console.log("Animation disabled for small screens");
  });
});

// gsap.fromTo(
//   ".news__list .news-list__item",
//   { opacity: 0, y: 20 },
//   {
//     scrollTrigger: {
//       trigger: ".news__list",
//       start: "top 90%",
//     },
//     opacity: 1,
//     y: 0,
//     duration: 1.5,
//     stagger: 0.5,
//     ease: "power3.inOut",
//   }
// );

gsap.fromTo(
  ".about__heading > *",
  { opacity: 0, y: 30 },
  {
    scrollTrigger: {
      trigger: ".about",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.2,
    stagger: 0.3,
    ease: "power3.inOut",
  }
);

gsap.fromTo(
  ".about__item",
  { opacity: 0, y: 20 },
  {
    scrollTrigger: {
      trigger: ".about__items",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.2,
    stagger: 0.3,
    ease: "power3.inOut",
  }
);

gsap.fromTo(
  ".group__title",
  { opacity: 0, y: 20 },
  {
    scrollTrigger: {
      trigger: ".group",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.2,
    stagger: 0.3,
    ease: "power3.inOut",
  }
);

gsap.fromTo(
  ".group__text",
  { opacity: 0, y: 20 },
  {
    scrollTrigger: {
      trigger: ".group",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.6,
    stagger: 0.3,
    ease: "power3.inOut",
  }
);

gsap.fromTo(
  ".works__inner > *",
  { opacity: 0, y: 20 },
  {
    scrollTrigger: {
      trigger: ".works",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.2,
    stagger: 0.3,
    ease: "power3.inOut",
  }
);

gsap.fromTo(
  ".works__list .works-list__item",
  { opacity: 0, y: 20 },
  {
    scrollTrigger: {
      trigger: ".works__list",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.5,
    stagger: 0.5,
    ease: "power3.inOut",
  }
);

gsap.fromTo(
  ".recruit__list .recruit__item",
  { opacity: 0, y: 40 },
  {
    scrollTrigger: {
      trigger: ".recruit",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.5,
    stagger: 0.5,
    ease: "power3.inOut",
  }
);

// gsap.fromTo(
//   ".contact__inner > *",
//   { opacity: 0, y: 20 },
//   {
//     scrollTrigger: {
//       trigger: ".contact",
//       start: "top 90%",
//     },
//     opacity: 1,
//     y: 0,
//     duration: 1.5,
//     stagger: 0.3,
//     ease: "power3.inOut",
//   }
// );

// gsap.to(".group__wrap2", {
//   width: "1400px", // 横幅を100%まで拡大
//   borderRadius: 0,
//   scrollTrigger: {
//     trigger: ".group",
//     start: "top center",
//     end: "center center",
//     scrub: 2,
//   },
// });


// gsap.fromTo(
//   ".news__title",
//   { opacity: 0, y: 20 },
//   {
//     opacity: 1,
//     y: 0,
//     duration: 1.2,
//     stagger: 0.3,
//     ease: "power3.inOut",
//     scrollTrigger: {
//       trigger: ".news",
//       start: "top 90%",
//     },
//   }
// );

gsap.fromTo(
  ".sdgs-theme__item-header-nav .sdgs-theme__item-header-nav-img",
  { opacity: 0, y: 20 },
  {
    scrollTrigger: {
      trigger: ".sdgs-theme__item-header-nav",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.5,
    stagger: 0.2,
    ease: "power3.inOut",
  }
);

// =================北陸化成工業所グループ一覧=================

$(function () {
  const open = $(".js-modal-open"),
    close = $(".js-modal__close"),
    modal = $(".js-modal");

  // 開くボタンをクリックしたら対応するモーダルを表示する
  open.on("click", function () {
    const targetId = $(this).data("target"); // ボタンのdata-target属性を取得
    $(`.js-modal[data-id="${targetId}"]`).addClass("is-open");
  });

  // 閉じるボタンまたはモーダル全体をクリックしたらモーダルを閉じる
  close.on("click", function () {
    $(this).closest(".js-modal").removeClass("is-open"); // 対応するモーダルだけ閉じる
  });

  modal.on("click", function (e) {
    if ($(e.target).is(".js-modal")) {
      $(this).removeClass("is-open"); // モーダル全体をクリックした場合も閉じる
    }
  });
});



jQuery(function ($) {
  var fadeElements = $(".js-fade-down, .js-fade-up, .js-fade-right, .js-fade-left");
  $(window).scroll(function () {
    $(fadeElements).each(function () {
      var offset = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > offset - windowHeight + 150) {
        $(this).addClass("scroll-in");
      }
    });
  });
});



// =================タブ切り替え=================

jQuery(function ($) {
  $(".js-tab-menu").on("click", function () {
    $(".js-tab-menu").removeClass("is-active");
    $(".js-tab-content").removeClass("is-active");
    $(this).addClass("is-active");
    var number = $(this).data("number");
    $("#" + number).addClass("is-active");
  });
});

jQuery(function ($) {
  $(".js-tab-menu-second").on("click", function () {
    $(".js-tab-menu-second").removeClass("is-active");
    $(".js-tab-content-second").removeClass("is-active");
    $(this).addClass("is-active");
    var number = $(this).data("number");
    $("#" + number).addClass("is-active");
  });
});

// =================アコーディオン=================

jQuery(function ($) {
  $(".js-faq-question").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-open");
  });
});

//////////GSAP///////////

////FEATURE////

gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".strength-list__item").forEach((item) => {
  gsap.fromTo(
    item,
    {
      opacity: 0,
      y: 20,
    },
    {
      y: 0,
      opacity: 1,
      duration: 2,
      scrollTrigger: {
        trigger: item, // 個別のアイテムに対してトリガーを設定
        start: "center 90%", // スクロールがビューポートの90%に来たら発火
      },
    }
  );
});

//////////////// GSAP COMPANY /////////////////////

gsap.utils.toArray(".js-top").forEach((elem) => {
  gsap.fromTo(
    elem,
    { opacity: 0, y: 30 },
    {
      scrollTrigger: {
        trigger: elem,
        start: "top 90%",
      },
      opacity: 1,
      y: 0,
      duration: 1.5,
      stagger: 0.3,
      ease: "power3.inOut",
    }
  );
});

gsap.fromTo(
  ".js-tops > *",
  { opacity: 0, y: 30 },
  {
    scrollTrigger: {
      trigger: ".js-tops",
      start: "top 90%",
    },
    opacity: 1,
    y: 0,
    duration: 1.3,
    stagger: 0.2,
    ease: "power3.inOut",
  }
);

// 対象要素をすべて取得して配列として処理
gsap.utils.toArray(".sdgs-theme__item-header-nav .sdgs-theme__item-header-nav-img").forEach((img) => {
  gsap.fromTo(
    img,
    { opacity: 0, y: 30 },
    {
      opacity: 1,
      y: 0,
      duration: 1.5,
      ease: "power3.inOut",
      scrollTrigger: {
        trigger: img, // 各要素ごとにトリガーを設定
        start: "top 90%", // トリガーポイントを設定
        toggleActions: "play none none none", // スクロール時の挙動
      },
    }
  );
});

$(function () {
  $('a[href^="#"]').click(function () {
    var adjust = -100;
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top + adjust;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

// ------------------------スワイパー関連------------------------------

jQuery(function ($) {
  var service_swiper = new Swiper(".js-service-swiper", {
    loop: true,
    speed: 2000,
    slidesPerView: 1.1,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 1.5,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});

jQuery(function ($) {
  var service_swiper = new Swiper(".js-recruit-member-swiper", {
    loop: false,
    speed: 2000,
    slidesPerView: 1.1,
    spaceBetween: 25,
    width: 440,
    breakpoints: {
      768: {
        slidesPerView: 1.1,
        spaceBetween: 25,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

jQuery(function ($) {
  var service_swiper = new Swiper(".js-recruit-area-swiper", {
    loop: true,
    speed: 2000,
    slidesPerView: 1,
    grabCursor: true,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: 100,
    },
    // spaceBetween: 10,
    breakpoints: {
      768: {
        slidesPerView: 1.3,
        // spaceBetween: 5,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

$(function () {
  var height = $("#header").height();
  $("body").css("margin-top", height + 10); //10pxだけ余裕をもたせる
});
$(function () {
  var height = $("#header").height();
  $("body").css("margin-top", height + 10); //10pxだけ余裕をもたせる
});

jQuery(function ($) {
  var service_swiper = new Swiper(".js-history-swiper", {
    loop: true,
    speed: 4000,
    slidesPerView: 2,
    grabCursor: true,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: 80,
    },
    breakpoints: {
      768: {
        slidesPerView: 5,
      },
    },
  });
});

jQuery(function ($) {
  var service_swiper = new Swiper(".js-detail-roll-swiper", {
    loop: true,
    speed: 8000,
    slidesPerView: 1.2,
    spaceBetween: 16,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        spaceBetween: 32,
        slidesPerView: 3.2,
      },
    },
  });
});

$(function () {
  $("area[href^='#']").click(function (e) {
    e.preventDefault(); // デフォルト動作を無効化
    var speed = 500; // スクロール速度
    var href = $(this).attr("href"); // href取得
    var target = $(href === "#" || href === "" ? "html" : href); // スクロール先
    var position = target.offset().top - 200; // 上部に余白を持たせる（100px）
    $("html, body").animate({ scrollTop: position }, speed, "swing"); // アニメーション
    return false;
  });
});

// ===========ヘッダーの色変化に関するコード==========

document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".header");
  const target = document.querySelector(".mv"); // 通過を検知する要素

  // Intersection Observer のオプション
  const options = {
    root: null, // ビューポートを基準にする
    rootMargin: "0px",
    threshold: 0, // 交差が 0% でも検知
  };

  // コールバック関数
  const callback = function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // ターゲットが見えている状態
        header.classList.remove("scrolled");
      } else {
        // ターゲットが見えなくなった状態
        header.classList.add("scrolled");
      }
    });
  };

  // Intersection Observer を作成
  const observer = new IntersectionObserver(callback, options);
  observer.observe(target); // 監視開始
});

// $(function () {
//   const tabButton = $(".js-tab-button"),
//     tabContent = $(".js-tab-content");
//   tabButton.on("click", function () {
//     let index = tabButton.index(this);

//     tabButton.removeClass("is-active");
//     $(this).addClass("is-active");
//     tabContent.removeClass("is-active");
//     tabContent.eq(index).addClass("is-active");
//   });
// });

// $(function () {
//   const tabButton = $(".js-tab-button"),
//     tabContent = $(".js-tab-content");

//   tabButton.on("click", function () {
//     let category = $(this).data("category");

//     tabButton.removeClass("is-active");
//     $(this).addClass("is-active");

//     tabContent.removeClass("is-active");

//     if (!category) {
//       // "全て" の場合は全記事を表示
//       tabContent.addClass("is-active");
//     } else {
//       // 選択したカテゴリーのみ表示
//       tabContent.filter(".category-" + category).addClass("is-active");
//     }
//   });
// });

const singleInterview = document.querySelectorAll(".single-interview__item-texts");
window.addEventListener("scroll", () => {
  singleInterview.forEach((item, index) => {
    if (item.getBoundingClientRect().top + 100 < window.innerHeight) {
      item.classList.add("active");
    }
  });
});

// hitujisann

// タブ
const tabMenus = document.querySelectorAll(".js-tab-menu");
const tabContents = document.querySelectorAll(".js-tab-content");

tabMenus.forEach((menu) => {
  menu.addEventListener("click", function () {
    tabMenus.forEach((menu) => menu.classList.remove("is-current"));
    this.classList.add("is-current");

    tabContents.forEach((content) => content.classList.remove("is-current"));
    const tabNumber = this.getAttribute("data-number");
    document.querySelector(`#${tabNumber}`).classList.add("is-current");
  });
});
