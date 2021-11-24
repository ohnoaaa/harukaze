<?php
/**
 * Template Name: ブログ記事一覧
 */

get_header(); ?>
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
          <li>はるかぜブログ</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- パンクズリストここまで -->
  <!-- カテゴリー -->
  <section class="category-list">
    <div class="wrapper">
    <?php $categories = get_categories(); ?>
    <div class="side">
      <h4 class="ttl">category</h4>
      <ul class="cate-list">
        <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">すべて</a></li>
          <?php foreach($categories as $category) : ?>
            <li><a href="<?php bloginfo('url'); ?>/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
          <?php endforeach; ?>
      </ul>
    </div>
  </section>
  <!-- カテゴリーここまで -->
  <div class="wrapper">
    <h2 class="cate-ttl-wp"><span>すべての</span>記事一覧</h2>
  </div>
  <!-- 記事一覧 -->
  <article class="low-blog">
    <div class="wrapper">
      <div class="low-blog-container">
      <?php
          $paged = get_query_var('paged')? get_query_var('paged') : 1;
          $information= new WP_Query( array(
                      'post_type' => 'post',
                      'paged' => $paged,
                      'post_status' => 'publish',
                      'posts_per_page' => 6,
                  ));
          if ( $information ->have_posts() ) :
        ?>
          <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
          <ul class="box01">
          <li class="boximg">
                <a href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); 
                          else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="">
                    <?php endif; ?>
                </a>
              </li>
              <li class="cate">
                <?php
                  $categories = get_the_category();
                    if ( $categories ) {
                    echo '<ul class="post-categories">';
                    foreach ( $categories as $category ) {
                      echo '<li>'.$category->name.'</li>';
                    }
                    echo '</ul>';
                  }
                ?>
              </li>
              <li class="date"><?php the_time('Y.m.d'); ?></li>
              <li class="ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <li class="text"><a href="<?php the_permalink(); ?>"><?php echo mb_substr(strip_tags($post-> post_content),0,30) . '...'; ?></a></li>
          </ul>
          <?php endwhile; ?>  
          <?php
            // サブクエリをリセット
            wp_reset_postdata();
          ?>
      </div>
      <div class="pagenavi">
      <?php
              if( function_exists('wp_pagenavi') ) {
                      wp_pagenavi(array('query' => $information));
              }
            ?>
            <?php endif;?>
      </div>
    </div>
  </article>
  <!-- 記事ここまで -->
  <?php get_template_part('cta-lower'); ?>



<?php get_footer(); ?>