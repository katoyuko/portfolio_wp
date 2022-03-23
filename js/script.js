// ローディング
$(window).on("load", function () {
  $("#splash").delay(1500).fadeOut("slow"); //ローディング画面を1.5秒（1500ms）待機してからフェードアウト
  $("#splash_logo").delay(1200).fadeOut("slow"); //ロゴを1.2秒（1200ms）待機してからフェードアウト
});

// ナビゲーションバー
$(function () {
  $(".btn_menu, .sp_nav li a").click(function () {
    $(".sp_nav").fadeToggle();
    $(".btn_menu").toggleClass("open");
  });
});

// 表示
function fadeAnime() {
  // その場でふわっと表示
  $(".fadeInTrigger").each(function () {
    var elemPos = $(this).offset().top - 50; //要素より、50px上
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("fadeIn"); // 画面内に入ったらfadeInというクラス名を追記
    }
  });
  // 下からふわっと表示
  $(".fadeUpTrigger").each(function () {
    var elemPos = $(this).offset().top - 50; //要素より、50px上
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("fadeUp"); // 画面内に入ったらfadeUpというクラス名を追記
    }
  });
}

// スクロールしたら
$(window).scroll(function () {
  fadeAnime();
});

// 画面が読み込まれたら（子ページ）
$(window).on("load", function () {
  fadeAnime();
});

// 一文字ずつ表示
function EachTextAnimeControl() {
  $(".eachTextAnime").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appeartext");
    }
  });
}

// スクロールしたら
$(window).scroll(function () {
  EachTextAnimeControl();
});

// 画面が読み込まれたら
$(window).on("load", function () {
  //spanタグを追加する
  var element = $(".eachTextAnime");
  element.each(function () {
    var text = $(this).text();
    var textbox = "";
    text.split("").forEach(function (t, i) {
      if (t !== " ") {
        if (i < 10) {
          textbox +=
            '<span style="animation-delay:.' + i + 's;">' + t + "</span>";
        } else {
          var n = i / 10;
          textbox +=
            '<span style="animation-delay:' + n + 's;">' + t + "</span>";
        }
      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });

  EachTextAnimeControl();
});
