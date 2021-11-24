<?php
/**
 * Template Name: 資料請求
 */

get_header(); ?>
<!-- 下層ページタイトル画像 -->
<div class="lowerpagettl down-ttl">
    <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/lowerTtl.png" alt=""></div>
    <div class="box01">
        <h2 class="subheading">資料請求フォーム</h2>
    </div>
  </div>
  <!-- 下層ページタイトル画像 ここまで -->
  <!-- パンクズリスト -->
  <section class="lowerpage01">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></li>
          <li>資料請求フォーム</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- パンクズリストここまで -->
  <section class="download">
    <div class="wrapper-dl">
      <div class="textbox">
        <p>
          はるかぜについての詳しい資料をダウンロードいただけます。<br>
          下記のフォームに必要事項をご入力、送信をお願いいたします。<br>
          お客様のメールアドレスに自動返信メールが届きます。メール内に記載のURLから資料をダウンロードして下さい。
        </p>
      </div>
      <div class="form-container">
      <?php echo do_shortcode( '[contact-form-7 id="19" title="コンタクトフォーム"]' ); ?>

      </div>
    </div>
  </section>



<?php get_footer(); ?>