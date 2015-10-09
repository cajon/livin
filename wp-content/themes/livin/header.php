<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- CSS -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/ihover.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <!--[if IE]><html class="ie" lang="en"> <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Amiri' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


	<?php wp_head(); ?>
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="<?php bloginfo('template_url' ); ?>/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
		<!-- HEADER -->
		<header>
			<!-- MENU BLOCK -->
			<div class="menu_block">
				<!-- CONTAINER -->
				<div class="container clearfix">
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="<?php echo home_url(); ?>" ><h1>L i v<i class="fa fa-circle"></i>i n</h1></a>
					</div>
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="<?php echo home_url(); ?>" >Home</a></li>
								<li class="sub-menu">
									<a href="javascript:void(0);" >借りたい方　<i class="fa fa-caret-down"></i></a>
									<ul>
										<li><a href="<?php echo home_url(); ?>/searchform" >物件検索</a></li>
										<li><a href="<?php echo home_url(); ?>/equipment" >設備・仕様</a></li>
										<li><a href="<?php echo home_url(); ?>/customer" >ご入居の方へ</a></li>
										<li><a href="<?php echo home_url(); ?>/faq" >Q&amp;A</a></li>
									</ul>
								</li>
								<li class="scroll_btn"><a href="<?php echo home_url(); ?>/service" >法人様社宅サービス</a></li>
								<li class="scroll_btn"><a href="<?php echo home_url(); ?>/owner" >貸したい方</a></li>
								<li class="sub-menu">
									<a href="javascript:void(0);" >企業情報　<i class="fa fa-caret-down"></i></a>
									<ul>
										<li><a href="<?php echo home_url(); ?>/company" >会社情報</a></li>
										<li><a href="<?php echo home_url(); ?>/recruit" >採用情報</a></li>
									</ul>
								</li>
								<li class="scroll_btn"><a href="<?php echo home_url(); ?>/blog" >ブログ</a></li>
								<li class="scroll_btn"><a href="<?php echo home_url(); ?>/contact" >お問い合わせ</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
