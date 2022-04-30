  <footer
    <?php if ( !is_home() && !is_front_page() ) : ?>
      class="footer"
    <?php endif; ?>
  >
    <div class="footer_content">
      <nav class="footer_nav">
        <ul class="footer_list">
            <li><a href="<?php echo esc_url(home_url('#service')); ?>">Service</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
            <li><a href="<?php echo esc_url(home_url('#contact')); ?>">Contact</a></li>
            <!-- <li class="pc_sns">
              <a href="https://www.instagram.com/omoka_design/">
                <img src="<?php echo esc_url(get_theme_file_uri('img/common/instagram.svg')); ?>" width="40" height="40" alt="instagram icon" />
              </a>
            </li>
            <li class="pc_sns">
              <a href="https://twitter.com/omoka_design">
                <img src="<?php echo esc_url(get_theme_file_uri('img/common/twitter.svg')); ?>" width="30" height="30" alt="twitter icon" />
              </a>
            </li> -->
        </ul>
        <!-- <ul class="sp_sns">
            <li>
              <a href="https://www.instagram.com/omoka_design/">
                <img src="<?php echo esc_url(get_theme_file_uri('img/common/instagram.svg')); ?>" width="50" height="50" alt="instagram icon" />
              </a>
            </li>
            <li>
              <a href="https://twitter.com/omoka_design">
                <img src="<?php echo esc_url(get_theme_file_uri('img/common/twitter.svg')); ?>" width="40" height="40" alt="twitter icon" />
              </a>
            </li>
        </ul> -->
      </nav>
      <p class="copy_right">
        © 2022 Omoka All rights reserved.
      </p>
    </div>
  </footer>
  <!-- functions.phpに記載したCSSとJavaScriptを読み込む -->
  <?php wp_footer(); ?>
</body>