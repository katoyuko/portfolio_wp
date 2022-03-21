    <!-- ヘッダー -->
    <?php get_header(); ?>

    <main>
      <section class="content_width">
        <div class="heading fadeInTrigger">
          <h2 class="en">Works</h2>
          <p class="jp_heading">制作実績一覧</p>
        </div>
        <div class="works_grid">
          <!-- 実績ループ表示 -->
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
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
          <?php endif; ?>
          <!-- END -->
        </div>
        <a href="index.html#contact" class="btn btn_center btn_orange"
          >話を聞いてみる</a
        >
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>

