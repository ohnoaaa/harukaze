<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" co#ntent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
  <title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <!-- adobe fonts ここから-->
    <script>
      (function(d) {
        var config = {
          kitId: 'arw2cyc',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
  <!-- adobe fontsここまで -->
  <!-- google material -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- google material ここまで-->
  
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="head-container">
    <h1><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h1>
    <div class="sp">
      <div class="burger-btn">
        <span class="bar bar_top"></span>
        <span class="bar bar_mid"></span>
        <span class="bar bar_bottom"></span>
      </div>
    </div>
    <div class="box-r cta-under">
      <div class="btn-top">
        <div class="h-btn item01">
          <a href="tel:06-7896-0305" class="pc"><span class="material-icons">phone</span>06-7896-0305</a>
          <a href="tel:06-7896-0305" class="sp"><span class="material-icons">phone</span>電話をかける</a>
        </div>
        <div class="h-btn item02">
          <a href="<?php echo esc_url( home_url('/download/') ); ?>" class="pc"><span class="material-icons">description</span>資料請求フォーム</a>
          <a href="<?php echo esc_url( home_url('/download/') ); ?>" class="sp"><span class="material-icons">description</span>資料請求</a>
        </div>
        <div class="h-btn item03">
          <a href="<?php echo esc_url( home_url('/contact/') ); ?>"><span class="material-icons">mail</span>お問い合わせ</a>
        </div>
      </div>
    
      <nav class="pc-navi pc">
        <ul>
          <li><a href="<?php echo esc_url( home_url('/room/') ); ?>">施設紹介</a></li>
          <li><a href="<?php echo esc_url( home_url('/company/') ); ?>">運営会社</a></li>
          <li><a href="<?php echo esc_url( home_url('/faq/') ); ?>">よくあるご質問</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">はるかぜブログ</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <nav class="sp-nav">
    <ul>
      <li><a href="<?php echo esc_url( home_url('/room/') ); ?>">施設紹介</a></li>
      <li><a href="<?php echo esc_url( home_url('/company/') ); ?>">運営会社</a></li>
      <li><a href="<?php echo esc_url( home_url('/faq/') ); ?>">よくあるご質問</a></li>
      <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">はるかぜブログ</a></li>
    </ul>
  </nav>
</header>