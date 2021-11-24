<?php
/**
 * Template Name: 施設紹介
 */

get_header(); ?>
<!-- 下層ページタイトル -->
<div class="lowerpagettl">
  <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/lowerTtl.png" alt=""></div>
  <div class="box01"><h2 class="subheading lower-room">施設紹介</h2></div>
</div>
<!-- 下層ページタイトルここまで -->
  <section class="lowerpage01">
    <div class="wrapper">
      <!-- パンクズリスト -->
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></li>
          <li>施設紹介</li>
        </ul>
      </div>
      <!-- パンクズリスト -->
    </div>
  </section>
  <section class="room01">
    <div class="bg-doddo">
      <div class="wrapper">
        <h3 class="sub02-ttl room-ttl">
          一人暮らしをめざして
        </h3>
        <div class="lead">
          <div class="textbox">
            <p>
              はるかぜはマンションタイプのグループホームです。<br>
              シェアハウスのような空間で食事の用意(夕食、朝食)はもちろんのこと、必要に応じてお風呂、介護、送迎なども対応。<br>
              重度の知的障がい者の方の受け入れも対応可能です。
            </p>
          </div>
          <div class="box-container">
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/room01-img-01.png" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/room01-img-02.png" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/room01-img-03.png" alt=""></div>
          </div>
        </div>
        <div class="room01-contain">
          <h4 class="subhead02 lower-subttl">24時間365日サービスを提供します</h4>
          <div class="box">
            <ul>
              <li>日常生活支援</li>
              <li>食事や入浴の支援</li>
              <li>健康管理、服薬管理</li>
              <li>日中活動の場との連絡・調整</li>
              <li>夜間は夜勤スタッフが常駐</li>
              <li>緊急時の対応</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="room01-contain02 wrapper">
      <h4 class="subhead02 lower-subttl">現在の空室お部屋</h4>
      <div class="container bg-yellow">
        <div class="box-l">
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/room01-img-04.png" alt=""></div>
        </div>
        <div class="box-r">
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/room01-img-05.png" alt=""></div>
          <div class="explane">
            <p class="bold">
              居室x xxm2
            </p>
            <p class="bold">階数x</p>
            <p class="bold">出戸駅:2分 瓜破駅：5分</p>
            <dl>
              <dt class="bold">設備</dt>
              <dd>トイレ・洗面台・収納・風呂・テレビアンテナ・キッチン・エアコン・照明器具・冷蔵庫・洗濯機・レンジ・ポットなど</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="room02">
    <div class="wrapper">
      <h3 class="sub02-ttl room-ttl">
        ご利用料金
      </h3>
      <div class="room02-container">
        <div class="inner-container">
          <div class="box-l">
            <dl>
              <dt>家賃</dt>
              <dd>22,660〜35,500円</dd>
            </dl>
            <dl>
              <dt>水光熱費</dt>
              <dd>12,000円</dd>
            </dl>
            <dl>
              <dt>日用品費</dt>
              <dd>3,000円</dd>
            </dl>
            <dl>
              <dt>食費(朝・夕)</dt>
              <dd>30,000円</dd>
            </dl>
            <dl>
              <dt>修繕積立費</dt>
              <dd>5,000円</dd>
            </dl>
          </div>
          <div class="box-r">
            <div class="box">
              <h4>1ヶ月の費用の目安</h4>
              <p>
                <span>家賃が22,660円の場合</span><br>
                72,660円〜
              </p>
            </div>
          </div>
        </div>
        <p class="item">※特定障害者特別給付費対象者には家賃がマイナス1万円になります。</p>
      </div>
    </div>
  </section>
  <section class="room03">
    <div class="wrapper">
      <h3 class="sub02-ttl room-ttl">
        体験利用
      </h3>
      <div class="room03-container">
        <div class="box-l">
          <p>
            体験利用もご用意しております。<br>
            お気軽にお問い合わせください。
          </p>
        </div>
        <div class="box-r">
          <p>1泊2日 3,000円</p>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('cta-lower'); ?>



<?php get_footer(); ?>