<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo('name'); ?>/</title>
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
    wp_enqueue_script('first', get_template_directory_uri() .'/js/openclose.js');
    wp_enqueue_script('second', get_template_directory_uri().'/js/fixmenu_pagetop.js');
    wp_enqueue_script('jquery');
  ?>
</header>