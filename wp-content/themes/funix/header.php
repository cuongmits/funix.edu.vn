<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri (); ?>/css/bootstrap.min.css" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo get_template_directory_uri (); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/style_specmentor.css">
	<script src="<?php echo get_template_directory_uri (); ?>/js/js_index.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri (); ?>/js/jssor.slider.min.js"></script>
	<script  type="text/javascript" src="<?php echo get_template_directory_uri (); ?>/js/slider_top.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/silder_top.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/style_header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/style_about.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/index.css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">

		<header class="site-header">
			<div class="site-header-main">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header hidden-md hidden-lg hidden-sm">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php bloginfo('home')?>"><img  class="logo-header" src="<?php echo get_template_directory_uri (); ?>/img/logo.png"></a>
							<a href="#" class="btn btn-blue-mobile">Đăng ký</a>
							<a href="#"><img class="search" src="<?php echo get_template_directory_uri (); ?>/img/search.png"></a>
						</div>
						<a class="navbar-brand hidden-xs col-sm-2 col-md-2 col-lg-2" href="<?php bloginfo('home')?>"><img  class="logo-header1" src="<?php echo get_template_directory_uri (); ?>/img/logo.png"></a>
						<div class="collapse navbar-collapse col-sm-7 col-md-8 col-lg-8" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="<?php bloginfo('home')?>">Trang chủ</a></li>
								<li><a href="index.php?page_id=2">Giới thiệu</a></li>
								<li><a href="index.php?page_id=1259">Chương trình học</a></li>
								<li><a href="#">Cách học</a></li>
								<li><a href="#">Mentors</a></li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Câu hỏi thường gặp</a></li>
							</ul>
						</div>
						<div class="hidden-xs col-sm-3 col-md-2 col-lg-2 block-search" id="search-header" >
							<a href="#" class="btn btn-blue hidden-xs">Đăng ký</a>
							<a href="#" class="btn btn-blue-mobile hidden-md hidden-lg hidden-sm">Đăng ký</a>
							<a href="#" class="search"><img src="<?php echo get_template_directory_uri (); ?>/img/search.png"></a>
						</div>
					</div>
				</nav>				
				
			</div><!-- .site-header-main -->
		</header><!-- .site-header -->

		<div id="content" class="site-content">
