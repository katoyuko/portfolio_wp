    <!-- ヘッダー -->
    <?php get_header(); ?>

    <main>
      <section class="works content_width">
        <div class="heading fadeInTrigger">
          <h1 class="en works_heading"><span>Works</span></h1>
        </div>
        <!-- 実績ループ表示 -->
        <h4>Web Design</h4>
        <div class="works_grid">
          <?php
			      $args = array(
              'category_name' => 'web',
			        );
			      $wp_query = new WP_Query($args);
			      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) :
			        $wp_query->the_post();
			    ?>
            <div id="post-<?php the_ID(); ?>" class="works_item fadeUpTrigger">
              <a href="<?php the_permalink(); ?>">
                <span class="mask">
                  <span class="img"><?php the_post_thumbnail('medium'); ?></span>
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
          <?php
			      endwhile;
			      endif;
			      wp_reset_postdata();
			    ?>
        </div>
          
        <h4>Graphic Design</h4>
          <div class="works_grid">
          <?php
			      $args = array(
              'category_name' => 'design',
			        );
			      $wp_query = new WP_Query($args);
			      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) :
			        $wp_query->the_post();
			    ?>
              <div id="post-<?php the_ID(); ?>" class="works_item fadeUpTrigger">
                <a href="<?php the_permalink(); ?>">
                  <span class="mask">
                    <span class="img"><?php the_post_thumbnail('medium'); ?></span>
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
          <?php
			      endwhile;
			      endif;
			      wp_reset_postdata();
			    ?>
        </div>
        <p><a class="btn btn_center btn_orange" href="<?php echo esc_url(home_url('#contact')); ?>"
          >話を聞いてみる</a
        ></p>
      </section>
    </main>

    <!-- フッター -->
    <?php get_footer(); ?>
</html>

