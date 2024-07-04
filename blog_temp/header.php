<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>社会福祉法人やすらぎの郷</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
  <?php wp_head(); ?>
  </script>
</head>
<body>
  <section class="t-button tab">
    <div class="bar bar1"></div>
    <div class="bar bar2"></div>
    <div class="bar bar3"></div>
  </section>
  <section class="sp-nav-wrap">
    <nav class="sp-nav">
      <p><a href="<?php echo get_home_url();?>">ホーム</a></p>
      <p><a href="<?php echo get_home_url();?>/company">法人案内</a></p>
      <p><a href="<?php echo get_home_url();?>/facility">施設の紹介</a></p>
      <p><a href="<?php echo get_home_url();?>/recruit">採用情報</a></p>
      <p><a href="<?php echo get_home_url();?>/news">お知らせ</a></p>
      <p><a href="<?php echo get_home_url();?>/contact">お問い合わせ</a></p>
      <p><a href="<?php echo get_home_url();?>/privacy">プライバシーポリシー</a></p>
    </nav>
  </section>
  <?php if(is_home() || is_front_page()):?>
    <header class="index">
      <div class="main">
        <img src="<?php echo get_template_directory_uri();?>/images/index/mv.png" alt="">
      </div>
      <section class="index-nav-wrap pc2">
        <div class="wrap12 flex">
          <article class="logo">
            <img src="<?php echo get_template_directory_uri();?>/images/common/logo.png" alt="">
          </article>
          <nav class="index-nav">
            <a href="">ホーム</a>
            <a href="<?php echo get_home_url();?>/company">法人案内</a>
            <a href="<?php echo get_home_url();?>/facility">施設の紹介</a>
            <a href="<?php echo get_home_url();?>/recruit">採用情報</a>
            <a href="<?php echo get_home_url();?>/news">お知らせ</a>
            <a href="<?php echo get_home_url();?>/contact">お問い合わせ</a>
          </nav>
        </div>
      </section>
    </header>
  <?php else:?>
    <header class="common">
      <div class="wrap12">
        <article class="logo">
          <a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/common/f-logo.png" alt=""></a>
        </article>
        <nav class="common-nav pc2">
          <a href="<?php echo get_home_url();?>">ホーム<span>home</span></a>
          <a href="<?php echo get_home_url();?>/company">法人案内<span>company</span></a>
          <a href="<?php echo get_home_url();?>/facility">施設の紹介<span>our facility</span></a>
          <a href="<?php echo get_home_url();?>/recruit">採用情報<span>recruit</span></a>
          <a href="<?php echo get_home_url();?>/news">お知らせ<span>news</span></a>
          <a href="<?php echo get_home_url();?>/contact">お問い合わせ<span>contact us</span></a>
        </nav>
      </div>
    </header>
  <?php endif;?>
