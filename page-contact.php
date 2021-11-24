<?php
/**
 * Template Name: お問い合わせ
 */

get_header(); ?>
<!-- 下層ページタイトル画像 -->
<div class="lowerpagettl con-ttl">
    <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/lowerTtl.png" alt=""></div>
    <div class="box01">
        <h2 class="subheading">お問い合わせ</h2>
    </div>
  </div>
  <!-- 下層ページタイトル画像 ここまで -->
  <!-- パンクズリスト -->
  <section class="lowerpage01">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></li>
          <li>お問い合わせ</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- パンクズリストここまで -->
  <section class="download contact">
    <div class="wrapper-dl">
      <div class="textbox">
        <p>はるかぜのご利用を検討されている方、<br>
          また見学やお話を伺ってみたい方など下記よりお問い合わせください。<br>
          2,3営業日以内に担当者より折り返しご連絡いたします。</p>
      </div>
      <div class="form-container">
      <?php echo do_shortcode( '[contact-form-7 id="20" title="コンタクトフォーム"]' ); ?>

      </div>
    </div>
  </section>



<?php get_footer(); ?>