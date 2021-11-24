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
  <!-- 表示してるカテゴリー -->

  <div class="wrapper">
    <h2 class="cate-ttl-wp"><span><?php single_cat_title() ?></span>記事一覧</h2>
  </div>
  <!-- カテゴリースラッグ取得 -->
  <?php
    // 記事のカテゴリー情報を取得する
    $cat = get_the_category();

    // 取得した配列から必要な情報を変数に入れる
    $cat_name = $cat[0]->cat_name; // カテゴリー名
    $cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
  ?>
  <!-- カテゴリー別記事一覧 -->
  <article class="low-blog">
    <div class="wrapper">
      <div class="low-blog-container">
      <?php
            $cat = get_the_category();
            $cat = $cat[0];
            $catname = get_cat_name($cat->term_id);     // カテゴリー名を取得
            $catid = get_cat_ID($catname);              // カテゴリーIDを取得
            ?>
            <?php
                $paged = get_query_var('paged', 1);
                $args = array(
                    'paged' => $paged,
                    'post_type' => 'post',
                    'posts_per_page' => 6,  //表示する記事の数
                    'cat' => $catid,
                );
                $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
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
      <?php endwhile;endif; ?>
          
      </div>
      <!-- ページネーション -->
        <div class="pagenavi">
        <?php wp_pagenavi(array('query' => $query)); ?>
        <?php wp_reset_postdata(); ?>
        </div>
      <!-- ページネーションここまで -->
    </div>
  </article>
  <!-- 記事ここまで -->
  <?php get_template_part('cta-lower'); ?>



<?php get_footer(); ?>