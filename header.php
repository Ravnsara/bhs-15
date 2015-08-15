<!doctype html><!--begin header-->
<html>
<head>
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
<!--begin meta-->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="user-scalable=yes, initial-scale=1.0, maximum-scale=1.0" />
<meta name="robots" content="no index, no follow" />
<meta name="author" content="nicole warnemuende" />
<!--end meta-->

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]--> 

<!--Start links-->
<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville|Droid+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/flexslider.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" type="text/css" media="all" />
<!--end links-->

<!--Start scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="<?php bloginfo( 'template_url'); ?>/scripts/scripts.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.flexslider.js"></script>    
<!--End scripts-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="outer-header">
		<header>
			<div id="logo">
				<a href="<?php echo esc_url(home_url());?>">
					<img src="<?php bloginfo('template_url');?>/images/BHSwa-logo-round.png" alt="<?php bloginfo('name'); ?>">
				</a>
			</div><!--end logo-->

			<div id="header-right">
				<div id="header-img"><img src="<?php bloginfo('template_url');?>/images/Sojourner_Truth_Home_Final.png" alt="Sojourner Truth Home" ?></div>

				<div id="social">
					<a href="https://www.facebook.com/pages/The-Black-Heritage-Society-of-Washington-State/121449081223168" target="_blank"><img src="<?php bloginfo('template_url');?>/images/fb-logo.png" alt="facebook logo" ?></a>
				</div><!--end social-->

				<!--start search-->
					<?php get_search_form(); ?>
				<!--end search-->

			</div><!--end header-right-->
		</header>
	</div><!--end outer-header-->

	<div id="header-bar"><!--adds color bar to complete header image-->
	</div>	
	
	<div id="outer-nav">
		<div id="navigation">
			<?php wp_nav_menu( array( 
				'theme_location' => 'main-menu' ,
				'menu' => 'Main Menu' ,
				'container'  => 'ul', 
				'link_before' => '<span>',
				'link_after' => '</span>',
			) ); ?>
		</div><!--end navigation-->
	</div><!--end outer-nav-->

	<div id="high-bar">
	</div><!--end high-bar-->

	<!--start outside-->
	<div id="outside">

	<!--start main-outside-->
	<div id="main-outside">
		<!--start main-inside-->
		<div id="main-inside">
<!--end header-->