    <!-- ヘッダー -->
    <?php get_header(); ?>

    <!-- main visual -->
    <div class="main_visual">
      <div class="main_image">
        <img src="<?php echo esc_url(get_theme_file_uri('img/fv.png')); ?>" alt="main visual 画像" />
      </div>
      <p class="main_message">
        大切な<span class="font_large">想い</span>を<span
          class="font_large font_emphasis circle"
          >カ</span
        ><span class="font_large font_emphasis triangle">タ</span
        ><span class="font_large font_emphasis square">チ</span
        ><span class="font_emphasis semicircle">に</span><br />相手に<span
          class="font_large"
          >響く</span
        >デザインを
      </p>
      <div class="scroll_down"><span>Scroll</span></div>
    </div>

    <main class="main">
      <!-- Service -->
      <section id="service" class="content_width">
        <div class="heading fadeInTrigger">
          <h2 class="service_heading"><span>Service</span></h2>
          <p class="jp_heading">できること</p>
        </div>
        <div class="service_list">
          <div class="service_item fadeUpTrigger">
            <p class="service_num">01</p>
            <img src="<?php echo esc_url(get_theme_file_uri('/img/web_design@2x.png')); ?>" alt="web site design" />
            <h3 class="service_title">Webサイトデザイン</h3>
            <p class="service_desc">
              コーポレートサイトやランディングページ（LP）など、目的やターゲットにあったWebサイトのデザインをお作りいたします。お客様の想いや課題に寄り添い、目的を達成することや問題を解決することを意識しております。
            </p>
          </div>
          <div class="service_item fadeUpTrigger delay-time01">
            <p class="service_num">02</p>
            <img src="<?php echo esc_url(get_theme_file_uri('img/cording@2x.png')); ?>" alt="cording" />
            <h3 class="service_title">コーディング</h3>
            <p class="service_desc">
              HTML &
              CSSを用いてデザインカンプから再現性の高いコーディングができます。また、デザインの意図を理解し、スマートフォンに対応したサイトやJavascriptを使用した動きのあるサイトのコーディングを行います。
            </p>
          </div>
          <div class="service_item fadeUpTrigger delay-time02">
            <p class="service_num">03</p>
            <img src="<?php echo esc_url(get_theme_file_uri('img/graphic_design@2x.png')); ?>" alt="graphic design" />
            <h3 class="service_title">グラフィックデザイン</h3>
            <p class="service_desc">
              名刺やチラシ、ロゴなどお客様とのヒアリングを大切にしながらお作りいたします。そのほかバナーデザインなど、関連する業務もお受けいたします。遠慮なくご相談ください。
            </p>
          </div>
        </div>
      </section>

      <!-- Works -->
      <section id="works" class="content_width">
        <div class="heading fadeInTrigger">
          <h2 class="works_heading"><span>Works</span></h2>
          <p class="jp_heading">制作実績</p>
        </div>
        <div class="works_grid">
          <!-- 最新の実績4件ループ表示 -->
          <?php
              $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 4,
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
          ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <!-- <div class="works_item fadeUpTrigger"> -->
              <div id="post-<?php the_ID(); ?>" class="works_item fadeUpTrigger">
                <a href="<?php the_permalink(); ?>">
                  <span class="mask">
                    <span class="img"><?php the_post_thumbnail('medium'); ?></span>
                    <span class="cap"><span>Concept</span><br /><?php echo get_post_meta($post->ID, 'Concept', true); ?></span>
                  </span>
                  <p class="category"><?php $cats = get_the_category();
                  foreach($cats as $cat){
                      if($cat->parent){
                          echo $cat->cat_name;   
                        }
                    }?></p>
                </a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          <!-- 終　最新の実績4件ループ表示 -->
        </div>
        <a class="btn btn_center btn_mocha" href="<?php echo esc_url(home_url('/category/works/')); ?>">
          もっと見る</a
        >
      </section>

      <!-- About -->
      <section id="about" class="content_width">
        <div class="heading fadeInTrigger">
          <h2 class="about_heading"><span>About</span></h2>
          <p class="jp_heading">Omokaについて</p>
        </div>
        <div class="top_about_background">
          <div class="top_about_circle about_circle"></div>
          <div class="top_about_content">
            <img src="<?php echo esc_url(get_theme_file_uri('img/profile.jpg')); ?>" alt="Omokaについて" />
            <div class="top_about_text">
              <p class="name eachTextAnime">Omoka</p>
              <p class="title eachTextAnime">私のつくったモノが</p>
              <p class="title eachTextAnime">
                一人でも多くの人の役に立ち
              </p>
              <p class="title eachTextAnime">
                感動を与えることができたら
              </p>
              <p class="message fadeInTrigger delay-time04">
                そんな想いを胸にシステムエンジニアのお仕事を始めました。その気持ちは変わらず、現在はエンジニアとして働く傍ら、Webデザイナーとしても楽しく活動しています。
              </p>
              <a href="/about/" class="btn btn_mocha">詳しく見る</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact -->
      <section id="contact">
        <div class="heading fadeInTrigger">
          <h2 class="contact_heading"><span>Contact</span></h2>
          <p class="jp_heading">ご依頼・お問い合わせ</p>
        </div>
        <div class="contact_content">
          <p class="contact_text">
            当ポートフォリオサイトにご訪問いただき、誠にありがとうございます。<br />
            制作のご依頼やご相談、ご不明な点等ございましたらお気軽にお問い合わせください。
          </p>
          <?php echo do_shortcode('[contact-form-7 id="24"]'); ?>
          <!-- <a href="#" class="btn btn_center btn_submit">内容を送信する</a> -->
        </div>
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>
