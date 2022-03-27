    <!-- ヘッダー -->
    <?php get_header(); ?>

    <main>
      <section class="works content_width">
        <div class="heading fadeInTrigger">
          <h1 class="en works_heading"><span>Works</span></h1>
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
          <!-- end -->
        </div>
        <a class="btn btn_center btn_orange" href="<?php echo esc_url(home_url('#contact')); ?>"
          >話を聞いてみる</a
        >
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>

