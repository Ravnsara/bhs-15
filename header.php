<!doctype html><!--begin header-->
<html>
<head>
	<!--begin meta-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="user-scalable=yes, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="robots" content="no index, no follow" />
	<meta name="author" content="" />
	<!--end meta-->
	
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
    <!--jquery for responsive nav item-->
    <script>
	$(document).ready(function($){
		$('.accordion-content').hide();

		//when h4 element is clicked
		$('#accordion').find('h4').click(function(){

			//toggle open or close 
			$(this).next().slideToggle('slow');
			$(this).css({"background-color" : "#DFC99D"});

			//slide up the content not selected
			$(".accordion-content").not($(this).next()).slideUp();
			
		});

		// Cache the elements we'll need
		var menu = $('#navigation');
		var menuList = menu.find('ul:first');
		var listItems = menu.find('li').not('#responsive-tab');

		// Create responsive trigger
		menuList.prepend('<li id="responsive-tab"><a href="#">Menu</a></li>');

		// Toggle menu visibility
		menu.on('click', '#responsive-tab', function(){
			listItems.slideToggle('fast');
			listItems.addClass('collapsed');
		});
	});
	</script>
	<!-- Remy Sharp Shim --> 
	<!--[if lt IE 9]> 
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" type="text/css" media="all" />
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
	<header>
		<div id="logo">
			<a href="<?php echo esc_url(home_url());?>">
				<img src="<?php bloginfo('template_url');?>/images/BHSwa-logo-round.png" alt="<?php bloginfo('name'); ?>">
			</a>
		</div><!--end logo-->
		<div id="header-right">
			<div id="header-img"><img src="<?php bloginfo('template_url');?>/images/Sojourner_Truth_Home_Final.png" alt="Sojourner Truth Home" ?></div>
			<div id="social">
				<img src="<?php bloginfo('template_url');?>/images/fb-logo.png" alt="facebook logo" ?>
				<!--span class="dashicons dashicons-facebook-alt"></span>-->
				<!--img src="fb-logo.jpg" alt="facebook logo" /-->
			</div><!--end social-->
			<div id="search">
				<?php get_search_form(); ?>
				<!--input type="search" class="search"-->
			</div><!--end search-->
		</div><!--end header-right-->
	</header>
	<div id="header-bar">
	</div>	
	<div id="navigation">
		<?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 
			'link_before' => '<span>',
			'link_after' => '</span>',
		) ); ?>
	</div><!--end navigation-->
	<div id="main-outside">
		<div id="main-inside">
<!--end header-->