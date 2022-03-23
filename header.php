<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- ogp tag -->
    <meta property="og:url" content="" />
    <meta property="og:title" content="Omoka | Web Design" />
    <meta property="og:type" content="website" />
    <meta
      property="og:description"
      content="〜大切な想いをカタチに 相手に響くデザインを〜"
    />
    <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('img/common/logo.png')); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@omoka_webdesign" />
    <!-- サイトアイコンの指定 -->
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.png')); ?>"  sizes="16x16" type="image/png" >
    <!-- フォント読み込み -->
    <link rel="stylesheet" href="https://use.typekit.net/rxb6fxm.css">
    <script>
      (function (d) {
        var config = {
            kitId: "hey7hsp",
            scriptTimeout: 3000,
            async: true,
          },
          h = d.documentElement,
          t = setTimeout(function () {
            h.className =
              h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
          }, config.scriptTimeout),
          tk = d.createElement("script"),
          f = false,
          s = d.getElementsByTagName("script")[0],
          a;
        h.className += " wf-loading";
        tk.src = "https://use.typekit.net/" + config.kitId + ".js";
        tk.async = true;
        tk.onload = tk.onreadystatechange = function () {
          a = this.readyState;
          if (f || (a && a != "complete" && a != "loaded")) return;
          f = true;
          clearTimeout(t);
          try {
            Typekit.load(config);
          } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s);
      })(document);
    </script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <!-- ローディング -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <!-- functions.phpに記載したCSSとJavaScriptを読み込む -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- ローディング -->
    <?php if ( is_home() || is_front_page() ) : ?>
      <div id="splash">
        <div id="splash_logo">
          <img class="fadeUp" src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Omoka -Web Design- のロゴ">
        </div>
      </div>
    <?php endif; ?>
    <!-- ヘッダー（ナビゲーション） -->
    <header id="top">
      <div class="header">
        <?php if ( is_home() || is_front_page() ) : ?>
          <h1 class="header_logo">
            <a href="index.html#top">
              <img src="<?php echo esc_url(get_theme_file_uri('img/common/logo.png')); ?>" alt="Omoka -Web Design- のロゴ">
            </a>
          </h1>
        <?php else : ?>
          <p class="header_logo">
            <a href="index.html#top">
              <img src="<?php echo esc_url(get_theme_file_uri('img/common/logo.png')); ?>" alt="Omoka -Web Design- のロゴ">
            </a>
          </p>
        <?php endif; ?>
        <nav class="pc_nav">
          <ul>
            <li><a href="<?php echo esc_url(home_url('#service')); ?>">Service</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
            <li class="btn_contact">
              <a href="<?php echo esc_url(home_url('#contact')); ?>">Contact</a>
            </li>
          </ul>
        </nav>
        <div class="btn_menu"><span></span></div>
        <nav class="sp_nav">
          <ul>
            <li><a href="<?php echo esc_url(home_url('#service')); ?>">Service</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
            <li class="btn_contact">
              <a href="<?php echo esc_url(home_url('#contact')); ?>">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>