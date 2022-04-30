    <!-- ヘッダー -->
    <?php get_header(); ?>

    <!-- main visual -->
    <div class="main_visual">
      <div class="fv_circle">
        <p class="main_message">
          大切な<span class="font_large">想い</span>を<span
            class="font_large font_emphasis circle"
            >カ</span
          ><span class="font_large font_emphasis triangle">タ</span
          ><span class="font_large font_emphasis square">チ</span
          >に<br />相手に<span
            class="font_large"
            >響く</span
          >デザインを
        </p>
      </div>
      <div class="scroll_down"><span>Scroll</span></div>
    </div>

    <main class="main">
      <!-- Service -->
      <section id="service" class="content_width">
        <div class="heading fadeInTrigger">
          <h2 class="en service_heading"><span>Service</span></h2>
          <!-- <p class="jp_heading">できること</p> -->
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
              CSSを用いてデザインカンプから再現性の高いコーディングができます。また、スマートフォンに対応したサイトやJavascriptを使用した動きのあるサイト、ワードプレスを使用した更新が可能なサイトのコーディングを行います。
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
          <h2 class="en works_heading"><span>Works</span></h2>
          <!-- <p class="jp_heading">制作実績</p> -->
        </div>
        <div class="works_grid">
          <!-- 最新の実績6件ループ表示 -->
          <?php
              $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 6,
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
          ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div id="post-<?php the_ID(); ?>" class="works_item fadeUpTrigger">
                <a href="<?php the_permalink(); ?>">
                  <span class="mask">
                    <span class="img"><?php the_post_thumbnail('medium'); ?></span>
                    <!-- <span class="img"><?php
                      $post_title = get_the_title();
                      the_post_thumbnail('thumbnail',array('alt' => $post_title,));
                    ?></span> -->
                    <span class="cap"><?php echo get_post_meta($post->ID, 'Concept', true); ?></span>
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
          <!-- end -->
        </div>
        <p><a class="btn btn_center btn_mocha" href="<?php echo esc_url(home_url('/category/works/')); ?>">
          もっと見る</a
        ></p>
      </section>

      <!-- About -->
      <section id="about" class="content_width">
        <div class="heading fadeInTrigger">
          <h2 class="en about_heading"><span>About</span></h2>
          <!-- <p class="jp_heading">Omokaについて</p> -->
        </div>
        <div class="top_about_background">
          <div class="top_about_circle about_circle"></div>
          <div class="top_about_content">
            <img src="<?php echo esc_url(get_theme_file_uri('img/profile.jpg')); ?>" alt="Omokaについて" />
            <div class="top_about_text">
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
              <p>
                <a href="/about/" class="btn btn_mocha">詳しく見る</a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact -->
      <section id="contact">
        <div class="heading fadeInTrigger">
          <h2 class="en contact_heading"><span>Contact</span></h2>
          <!-- <p class="jp_heading">ご依頼・お問い合わせ</p> -->
        </div>
        <div class="contact_content">
          <p class="contact_text">
            当ポートフォリオサイトにご訪問いただき、誠にありがとうございます。<br />
            制作のご依頼やご相談、ご不明な点等ございましたらお気軽にお問い合わせください。<br />
            3営業日以内にご連絡をさせていただきます。<br />
            <a href="https://twitter.com/omoka_design">Twitter</a> / <a href="https://www.instagram.com/omoka_design/">Instagram</a> のDMでも承っております。
          </p>
          <?php $get_form = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1))[0]; ?>
          <?php echo do_shortcode( '[contact-form-7 id="'.$get_form->ID.'" title="'.$get_form->post_title.'"]' ); ?>
        </div>
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>
