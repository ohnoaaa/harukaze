<?php get_header(); ?>
<!-- 下層ページタイトル画像 -->
<div class="lowerpagettl com-ttl">
    <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/lowerTtl.png" alt=""></div>
    <div class="box01">
        <h2 class="subheading h2blog">はるかぜブログ</h2>
    </div>
  </div>
  <!-- 下層ページタイトル画像 ここまで -->
  <!-- パンクズリスト -->
  <section class="lowerpage01">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">はるかぜブログ</a></li>
          <li>詳細ブログ</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- パンクズリストここまで -->
  
<

  <!-- 記事一覧 -->
  <article class="low-blog-detail">
    <div class="wrapper">
    <!-- pタグ自動挿入制限 start-->
<?php remove_filter('the_content', 'wpautop'); ?>
<!-- pタグ自動挿入制限 stop -->

<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>
      <div class="ttl-box">
        <div class="ttl-sub">
          <p class="cate"><?php
                  $categories = get_the_category();
                    if ( $categories ) {
                    echo '<ul class="post-categories">';
                    foreach ( $categories as $category ) {
                      echo '<li>'.$category->name.'</li>';
                    }
                    echo '</ul>';
                  }
                ?></p>
          <p class="date"><?php the_time('Y.m.d'); ?></p>
        </div>
        <h2 class="ttl"><?php the_title(); ?></h2>
      </div>
      <div class="textbox">
        <?php the_content(); ?>
      </div>
      <div class="btn-00">
        <a href="<?php echo home_url('/blog'); ?>">一覧へもどる</a>
      </div>
      <?php   
        endwhile;
        endif;
      ?>
    </div>
  </article>
  <!-- 記事ここまで -->
  <?php get_template_part('cta-lower'); ?>
<?php get_footer(); ?>