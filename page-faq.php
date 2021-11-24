<?php
/**
 * Template Name: faq
 */

get_header(); ?>
<div class="lowerpagettl">
  <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/lower/lowerTtl.png" alt=""> <!-- 下層ページタイトル画像 --></div>
  <div class="box01"><h2 class="subheading">よくあるご質問</h2></div>
</div>
<div class="bg-doddo lower-bg">
  <section class="lowerpage01">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></li>
          <li>よくあるご質問</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="faq01">
    <div class="wrapper">
      <div class="faq-container">
        <dl class="box">
          <dt>どのような方が利用できますか？</dt>
          <dd>知的障がい者、精神障がい者の方がご利用になれます。</dd>
        </dl>
        <dl class="box">
          <dt>どの地域の方が利用できますか？</dt>
          <dd>どの地域の方でもご利用できます。</dd>
        </dl>
        <dl class="box">
          <dt>見学に行くことはできますか？</dt>
          <dd>はい。お電話でご予約をお願いいたします。</dd>
        </dl>
        <dl class="box">
          <dt>手続きができるか心配です。</dt>
          <dd>スタッフがサポートいたしますので、ご不安があればご相談ください。</dd>
        </dl>
        <dl class="box">
          <dt>試しに泊まることはできますか？</dt>
          <dd>はい。1泊2日3000円で受け付けています。</dd>
        </dl>
        <dl class="box">
          <dt>月の費用はいくらかかりますか？</dt>
          <dd>基本料金72,660円～85,500円です。(昼食代、お小遣いなどは別途）</dd>
        </dl>
        <dl class="box">
          <dt>生活保護を受給していますが入居可能ですか？</dt>
          <dd>可能です。</dd>
        </dl>
        <dl class="box">
          <dt>コミュニケーションが苦手ですが大丈夫でしょうか？</dt>
          <dd>経験豊富なスタッフが常駐しておりますのでご安心ください。</dd>
        </dl>
        <dl class="box">
          <dt>昼食はでますか？</dt>
          <dd>基本でません。近くにコンビニ・スーパー・飲食店がありますので、
            みなさんご自由にされております。</dd>
        </dl>
        <dl class="box">
          <dt>どんな人が入居していますか？</dt>
          <dd>主に知的障がいの軽度から重度の方まで。
            男性女性半々くらいです。生活介護や就労に行かれている方もいらっしゃいます。</dd>
        </dl>
        <dl class="box">
          <dt>入居にあたって保証人は必要ですか？</dt>
          <dd>身元引受人が必要となります。</dd>
        </dl>
        <dl class="box">
          <dt>規則やルールはありますか？</dt>
          <dd>共同生活上必要な規則やルールはあります。</dd>
        </dl>
        <dl class="box">
          <dt>友達を連れてきても大丈夫ですか？</dt>
          <dd>ご家族様は入室可能です。</dd>
        </dl>
        <dl class="box">
          <dt>部屋で使えない家電製品はありますか？</dt>
          <dd>安全上ガス器具は使用できません。</dd>
        </dl>
        <dl class="box">
          <dt>ペットは飼えますか？</dt>
          <dd>基本飼えません。</dd>
        </dl>
        <dl class="box">
          <dt>すぐに入所できますか？</dt>
          <dd>基本的には見学体験をしていただき、ご本人様に気に入っていただければ
            そこからすぐに入所できます。</dd>
        </dl>
        <dl class="box">
          <dt>外泊はできますか？</dt>
          <dd>できます。</dd>
        </dl>

      </div>
    </div>
  </section>
  <?php get_template_part('cta-lower'); ?>
</div>
<?php get_footer(); ?>