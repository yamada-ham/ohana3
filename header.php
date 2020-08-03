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
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <?php $logo_url = get_the_logo_url('logo_url'); ?>
                  <?php if($logo_url): ?>
                    <img src="<?php echo get_the_logo_url(); ?>" alt="<?php bloginfo('name'); ?>" />
                  <?php else: ?>
                    <a href="<?php echo home_url( '/' ); ?>" ><h1><?php bloginfo('name'); ?></h1>
                  <?php endif; ?>
                </a>
<h1 class="rightsmall">創業 昭和５４年、「笹舟　丼丸」の暖簾店です。</h1>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                    <li>
                        <a class="page-scroll" href="#page-top">TOP</a>
                    </li>

		   			<li>
                        <a class="page-scroll" href="#about">お知らせ</a>
                    </li>


                    <li>
                        <a class="page-scroll" href="#menu">お品書き</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#download">店舗</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#schedule">会社概要</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">お問い合わせ</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
