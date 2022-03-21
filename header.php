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
    <meta name="twitter:card" content="Summary Card" />
    <meta name="twitter:site" content="@omoka_webdesign" />
    <!-- サイトアイコンの指定 -->
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.png')); ?>"  sizes="16x16" type="image/png" >
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <!-- functions.phpに記載したCSSとJavaScriptを読み込む -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- ローディング -->
    <div id="splash">
      <div id="splash_logo">
        <img class="fadeUp" src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Omoka -Web Design- のロゴ">
      </div>
    </div>
    <!-- ヘッダー（ナビゲーション） -->
    <header id="top">
      <div class="header">
        <h1 class="header_logo">
          <a href="index.html#top">
            <img src="<?php echo esc_url(get_theme_file_uri('img/common/logo.png')); ?>" alt="Omoka -Web Design- のロゴ">
          </a>
        </h1>
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