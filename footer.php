  <?php if ( is_home() || is_front_page() ) : ?>
    <footer>
  <?php else : ?>
    <footer class="footer">
  <?php endif; ?>
  <!-- <footer class="footer"> -->
    <div class="footer_content">
      <nav class="footer_nav">
        <ul>
        <li><a href="<?php echo esc_url(home_url('#service')); ?>">Service</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
            <li><a href="<?php echo esc_url(home_url('#contact')); ?>">Contact</a></li>
        </ul>
      </nav>
      <p class="copy_right">
        © 2022 Omoka All rights reserved.
      </p>
    </div>
  </footer>
  <!-- functions.phpに記載したCSSとJavaScriptを読み込む -->
  <?php wp_footer(); ?>
</body>