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

// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime() {
  // ふわっ
  $(".fadeInTrigger").each(function () {
    //fadeInTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("fadeIn"); // 画面内に入ったらfadeInというクラス名を追記
    } else {
      $(this).removeClass("fadeIn"); // 画面外に出たらfadeInというクラス名を外す
    }
  });
  // 下からふわっ
  $(".fadeUpTrigger").each(function () {
    //fadeUpTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("fadeUp"); // 画面内に入ったらfadeUpというクラス名を追記
    } else {
      $(this).removeClass("fadeUp"); // 画面外に出たらfadeUpというクラス名を外す
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  fadeAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  fadeAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

// eachTextAnimeにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
  $(".eachTextAnime").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appeartext");
    } else {
      $(this).removeClass("appeartext");
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  EachTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
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

  EachTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述
