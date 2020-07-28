<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-language" content="ja">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="おはな丼丸">
<meta property="og:type" content="article" />
<meta property="og:description" content="おはな丼丸" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/intro-bg.jpg" />
<meta property="og:site_name" content="おはな丼丸" />
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.ico" />
   <title>おはな丼丸｜<?php wp_title(); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css?191223" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/grayscale.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
<?php wp_head(); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="nav_wrap">
<div class="nav_box">
    <div class="in_nav_box">
      <div class="title_box">
        <div class="in_title_box">
          <!-- ロゴの設置 -->
          <?php $logo_url = get_the_logo_url('logo_url'); ?>
          <?php if($logo_url): ?>
            <div class="title_img_box"><a href="<?php echo home_url( '/' );?>" ><img src="<?php echo get_the_logo_url(); ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
          <?php else: ?>
            <div class="title_text_box"><a href="<?php echo home_url( '/' ); ?>" ><h1><?php bloginfo('name'); ?></h1></a></div>
          <?php endif; ?>

          <h2 class="">創業 昭和５４年、「笹舟　丼丸」の暖簾店です。</h2>
        </div>
      </div>

        <div class="menu_box">
            <ul class="in_menu_box">
            <?php
              $nav_array = [
                ['text'=>'TOP','href'=>'#page-top'],
                ['text'=>'お知らせ','href'=>'#about'],
                ['text'=>'お品書き','href'=>'#menu'],
                ['text'=>'店舗','href'=>'#download'],
                ['text'=>'会社概要','href'=>'#schedule'],
                ['text'=>'お問い合わせ','href'=>'#contact'],
              ];
             ?>
            <?php foreach($nav_array as $item) : ?>
              <li>
                <a class="" href="<?=$item['href'] ?>"><?= $item['text'] ?></a>
              </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="menu_btn_box"><button type="button">
        Menu <i class="fa fa-bars"></i>
    </button></div>
  </div>
</nav>
