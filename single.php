    <!-- ヘッダー -->
    <?php get_header(); ?>

    <main>
      <section class="works content_width">
        <div class="heading fadeInTrigger">
          <h2 class="en">Works</h2>
          <p class="jp_heading">制作実績</p>
        </div>
        <?php the_post_thumbnail('large'); ?>
        <p class="company fadeInTrigger"><?php echo get_post_meta($post->ID, '企業名', true); ?></p>
        <p class="url fadeInTrigger"><?php echo get_post_meta($post->ID, 'URL', true); ?></p>
        <div class="text">
          <div class="point fadeUpTrigger">
            <h3>制作のPOINT</h3>
            <p><?php echo get_post_meta($post->ID, '制作のPOINT', true); ?></p>
          </div>
          <div class="outline fadeUpTrigger">
            <h3>概要</h3>
            <dl>
              <!-- 項目名： 内容をループ表示 -->
              <dt>カテゴリ</dt>
              <dd><?php $cats = get_the_category();
                foreach($cats as $cat){
                  if($cat->parent){
                      echo $cat->cat_name;   
                    }
                }?>
              </dd>
              <dt>担当範囲</dt>
              <dd><?php echo get_post_meta($post->ID, '担当範囲', true); ?></dd>
              <dt>使用ツール</dt>
              <dd><?php echo get_post_meta($post->ID, '使用ツール', true); ?></dd>
              <dt>制作期間</dt>
              <dd><?php echo get_post_meta($post->ID, '制作期間', true); ?></dd>
              <dt>費用</dt>
              <dd><?php echo get_post_meta($post->ID, '費用', true); ?></dd>
            </dl>
          </div>
        </div>
        <h3 class="fadeUpTrigger">キャプチャー</h3>
        <img
          class="capture fadeUpTrigger"
          src="【キャプチャー画像リンク】"
          alt="キャプチャー画像"
        />
        <a href="works_list.html" class="btn btn_center btn_mocha"
          >一覧に戻る</a
        >
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>
