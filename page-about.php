    <!-- ヘッダー -->
    <?php get_header(); ?>

    <main>
      <section class="about_detail">
        <div class="heading fadeInTrigger">
          <h1 class="en about_heading"><span>About</span></h1>
        </div>
        <div class="about_message">
          <div class="about_circle">
            <div class="introduction fadeInTrigger delay-time">
              <p>
                当ポートフォリオサイトにご訪問いただきありがとうございます。
                IT企業にてフロントエンドエンジニアとして働く傍ら、
                Webサイト制作のお仕事をしております。
              </p>
              <p>
                <span>“大切な想いをカタチに 相手に響くデザインを ”</span
                >をコンセプトにお客様のご要望やお悩み、熱い想いをくみ取り
                一つひとつ細部まで丁寧にお作りいたします。
              </p>
              <p>
                学生時代の接客業や海外ボランティア活動で培った「コミュニケーション力」と経理職、エンジニア職で培った「緻密な作業を遂行する力」が強みです。
              </p>
              <p>ご依頼やご相談などお気軽にお問い合わせくださいませ。</p>
            </div>
          </div>
        </div>
        <div class="info">
        <img src="<?php echo esc_url(get_theme_file_uri('img/profile.jpg')); ?>" alt="Omokaについて" />
          <dl class="fadeUpTrigger delay-time01">
            <dt>名称</dt>
            <dd>Omoka（オモカ）</dd>
            <dt>事業内容</dt>
            <dd>
              Webサイト制作（デザイン/コーディング）<br />
              バナー制作<br />
              名刺・ロゴ・チラシ制作
            </dd>
            <dt>プロフィール</dt>
            <dd>
              <p>
                千葉県出身。一児の母。<br />
                中学〜大学ではバドミントンに打ち込む。<br />
                大学を休学し東南アジアと東アフリカでボランティア活動をしながら一人旅をしたことも。<br />
                前職は東証一部企業にて経理職。<br />
                趣味で整理収納アドバイザーの資格を取得。<br />
                Book Cafeとヨガと旅が好き。<br />
                ( 何か共通点があれば嬉しいです！ )
              </p>
              <p class="instagram">
                Instagram：<br />
                <a href="https://www.instagram.com/omoka_design/"
                  >omoka_design</a
                >
              </p>
              <p class="twitter">
                Twitter：<br />
                <a href="https://twitter.com/omoka_design"
                  >omoka_design</a
                >
              </p>
              <p>
                使用ソフト：<br />
                - photoshop<br />
                - illustrator<br />
                - Adobe XD<br />
                - Figma<br />
                - Visual Studio Code
              </p>
            </dd>
          </dl>
        </div>
        <p><a class="btn btn_center btn_orange" href="<?php echo esc_url(home_url('#contact')); ?>"
          >話を聞いてみる</a
        ></p>
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>

