    <!-- ヘッダー -->
    <?php get_header(); ?>

    <main>
      <section class="works content_width">
        <div class="heading fadeInTrigger">
          <h1 class="en works_heading"><span>Works</span></h1>
        </div>
        <div class="thumbnail fadeUpTrigger">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <p class="company fadeInTrigger"><?php echo get_post_meta($post->ID, '企業名', true); ?></p>
        <p class="url fadeInTrigger">
          <a href="<?php echo get_post_meta($post->ID, 'URL', true); ?>"><?php echo get_post_meta($post->ID, 'URL', true); ?></a>
        </p>
        <div class="text">
          <div class="outline">
            <h3>概要</h3>
            <dl>
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
        <div class="capture">
            <?php the_content(); ?>
        </div>
        <p><a class="btn btn_center btn_orange" href="<?php echo esc_url(home_url('/category/works/')); ?>"
          >一覧に戻る</a
        ></p>
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>
