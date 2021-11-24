<?php
/**
 * Template Name: 運営会社
 */

get_header(); ?>
<div class="lowerpagettl com-ttl">
    <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/lowerTtl.png" alt=""></div>
    <div class="box01">
        <h2 class="subheading">運営会社</h2>
    </div>
  </div>
  <!-- 下層ページタイトル画像 ここまで -->
  <!-- パンクズリスト -->
  <section class="lowerpage01">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></li>
          <li>運営会社</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- パンクズリストここまで -->
  <section class="com01">
    <div class="wrapper">
      <dl class="item">
        <dt>法人名称</dt>
        <dd>株式会社 ZEKARUHA</dd>
      </dl>
      <dl class="item">
        <dt>代表者</dt>
        <dd>瀧本 希代美</dd>
      </dl>
      <dl class="item">
        <dt>事業内容</dt>
        <dd>障がい者グループホーム</dd>
      </dl>
      <dl class="item">
        <dt>本社住所</dt>
        <dd>〒547-0021<br>
          大阪市平野区喜連東5-14-2-401</dd>
      </dl>
      <dl class="item">
        <dt>電話番号</dt>
        <dd class="tel"><a href="tel:06-7896-0305">06-7896-0305</a> / <a href="tel:070-5659-9747">070-5659-9747</a></dd>
      </dl>
      <div class="g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.679386776463!2d135.56319915149135!3d34.61226798036132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000df2975070b61%3A0x6ada34e344d67834!2z44CSNTQ3LTAwMjEg5aSn6Ziq5bqc5aSn6Ziq5biC5bmz6YeO5Yy65Zac6YCj5p2x77yV5LiB55uu77yR77yU4oiS77yS!5e0!3m2!1sja!2sjp!4v1636603340171!5m2!1sja!2sjp" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>
  <?php get_template_part('cta-lower'); ?>
<?php get_footer(); ?>