<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ここにサイト説明を入れます">
  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slide.css">
  <!--
<script type="text/javascript" src="js/openclose.js"></script>
<script type="text/javascript" src="js/fixmenu_pagetop.js"></script>
-->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <?php wp_body_open(); ?>

  <header>
    <div class="inner">
      <h1 id="logo">
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo('name');  ?>
        </a>
      </h1>
      <h2 id="description">
        <p>
          <?php bloginfo('description'); ?>
        </p>
      </h2>
      <div id="contact">
        <p class="tel">TEL:00-0000-0000<span>受付：00:00〜00:00　定休日：水曜日</span></p>
      </div>
    </div>
    <?php
    wp_head();
    wp_enqueue_script('first', get_template_directory_uri() . '/js/openclose.js');
    wp_enqueue_script('second', get_template_directory_uri() . '/js/fixmenu_pagetop.js');
    wp_enqueue_script('jquery');
    ?>
  </header>

  <!--PC用（801px以上端末）メニュー-->
  <nav id="menubar">
    <ul class="inner">
      <li class="current"><a href="<?php echo home_url(); ?>">ホーム<span>HOME</span></a></li>
      <?php
      $progra = get_term_by('slug', 'programming', 'category');
      $progra_link = get_term_link($progra, 'category');

      $math = get_term_by('slug', 'math', 'category');
      $math_link = get_term_link($math, 'category');
      ?>
      <li><a href="<?php echo $progra_link; ?>">プログラミング<span>programming</span></a></li>
      <li><a href="<?php echo $math_link; ?>">数学<span>Mathmatics</span></a></li>
      <li><a href="<?php echo home_url('/recruit/'); ?>">採用情報<span>RECRUIT</span></a></li>
      <li><a href="<?php echo home_url('/link/'); ?>">リンク<span>STAFF</span></a></li>
      <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ<span>CONTACT</span></a></li>
    </ul>
  </nav>
  <!--小さな端末用（800px以下端末）メニュー-->
  <nav id="menubar-s">
    <ul>
      <li><a href="<?php echo home_url(); ?>">ホーム<span>HOME</span></a></li>
      <li><a href="company.html">会社概要<span>COMPANY</span></a></li>
      <li><a href="service.html">製品紹介<span>SERVICE</span></a></li>
      <li><a href="recruit.html">採用情報<span>RECRUIT</span></a></li>
      <li><a href="link.html">リンク<span>STAFF</span></a></li>
      <li><a href="contact.html">お問い合わせ<span>CONTACT</span></a></li>
    </ul>
  </nav>
