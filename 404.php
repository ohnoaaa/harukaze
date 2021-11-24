<?php
/**
 * Template Name: 404
 */

get_header(); ?>
<div class="lowerpagettl com-ttl">
    <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/lowerTtl.png" alt=""></div>
    <div class="box01">
        <h2 class="subheading page404">404ページ</h2>
    </div>
  </div>
  <!-- 下層ページタイトル画像 ここまで -->
  <!-- パンクズリスト -->
  <section class="lowerpage01">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></li>
          <li>404</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- パンクズリストここまで -->
  <section class="page404">
    <div class="wrapper">
      <h3>ページがみつかりません。</h3>
      <div class="btn-00">
        <a href="<?php echo home_url(); ?>">トップページへもどる</a>
      </div>
    </div>
  </section>
  <?php get_template_part('cta-lower'); ?>
<?php get_footer(); ?>