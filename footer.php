
<footer>
    <div class="bg-yellow-img">    
      <img src="<?php echo get_template_directory_uri(); ?>/images/bg/bg-yellow.png" alt="">
    </div>
      <div class="bg-yellow">
        <div class="wrapper">
          <div class="foot-container">
            <div class="box-l">
              <h2 class="img-logo"><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h2>
              <dl>
                <dt>株式会社 ZEHARUKA</dt>
                <dd>大阪市平野区喜連東5-14-2-401</dd>
                <dd>06-7896-0305/070-5659-9747</dd>
                <dd>&lt;担当:管理者 田中&gt;</dd>
              </dl>
            </div>
            <div class="box-r pc">
              <ul class="footnav">
                <li><a href="<?php echo esc_url( home_url('/room/') ); ?>">施設紹介</a></li>
                <li><a href="<?php echo esc_url( home_url('/company/') ); ?>">運営会社</a></li>
                <li><a href="<?php echo esc_url( home_url('/faq/') ); ?>">よくあるご質問</a></li>
                <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">はるかぜブログ</a></li>
              </ul>
            </div>
          </div>
          <p class="c-right">&copy; 2021 ZEHARUKA inc.</p>
        </div>
      </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<?php 
      //wp_enqueue_script('jquery');
        wp_enqueue_script('harukaze-jsmain',get_template_directory_uri().'/js/myjs.js'); ?>
<?php wp_footer(); ?> <!-- bodyの直前に記述 -->
</body>

</html>