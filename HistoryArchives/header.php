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
		( function( $ ) {
			$( document ).ready(function() {
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
		} )( jQuery );
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
			<a href="<?php echo get_option('front-page');?>">
				<img src="<?php bloginfo('template_url');?>/images/bhs-logo.jpg" alt="<?php bloginfo('name'); ?>">
			</a>
		</div><!--end logo-->
		<div id="header-right">
			<div id="social">
				<img src="<?php bloginfo('template_url');?>/images/fb-logo.jpg" alt="facebook logo" ?>
				<!--span class="dashicons dashicons-facebook-alt"></span>-->
				<!--img src="fb-logo.jpg" alt="facebook logo" /-->
			</div><!--end social-->
			<div id="search">
				<?php get_search_form(); ?>
				<!--input type="search" class="search"-->
			</div><!--end search-->
		</div><!--end header-right-->
	</header>
	<div id="navigation">
		<?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 
			'link_before' => '<span>',
			'link_after' => '</span>',
		) ); ?>
		<!--insert wp code for navigation-->
		<!--ul>
			<li class="active"><a href="home.html">Home</a></li>
			<li><a href="#"><span>About</span></a></li>
			<li><a href="#"><span>Collections</span></a></li>
			<li class="has-sub"><a href="#"><span>Projects</span></a>
				<ul>
					<li class=""><a href="#"><span>Impressions</span></a></li>
					<li class="last"><a href="#"><span>Roots</span></a></li>
				</ul>
			</li>
			<li><a href="main.html"><span>Get Involved</span></a></li>
			<li><a href="#"><span>News and Events</span></a></li>
			<li><a href="#"><span>Contact</span></a></li>
			<li class="last"><a href="#"><span>Resources</span></a></li>
		</ul-->
	</div><!--end navigation-->
	<div id="main">
<!--end header-->