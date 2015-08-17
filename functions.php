<?php

// support HTML5 semantic markup
$args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
);
add_theme_support( 'html5', $args );

// add RSS feed links to <head> tag
add_theme_support( 'automatic-feed-links' );

//adds different image size options
add_theme_support( 'post-thumbnails' ); 

add_image_size( 'slideshow', 520, 380 );
add_image_size( 'bhs-logo', 183, 182 );

//for security, hide wp version in web pages and feeds
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

// set Media Library image link default to "none"
function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

//Register custom menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',
		  'footer-menu-1' => 'Footer Menu 1',
		  'footer-menu-2' => 'Footer Menu 2',
		  'western-wa' => 'Western WA',
		  'central-wa' => 'Central WA',
		  'eastern-wa' => 'Eastern WA'
		)
	);
} 

//Register sidebars
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'secondary',
			'name' => __( 'Secondary Sidebar' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'impressions',
			'name' => __( 'Impressions Sidebar' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'payment',
			'name' => __( 'Payment Widget' ),
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

/*
* if there is a parent 
* get the post name of the parent page
*/
function get_parent_title(){

	global $post;

	//$theTitle = empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
	if(empty($post->post_parent)){
		$theTitle = get_the_title($post->ID);
	} else {
		$theTitle = get_the_title($post->post_parent);
	}
	return $theTitle;
}

//set sidebar based on page
function choose_sidebar() {

	$theParent = get_parent_title();

	if( is_page( 'about' )){ 
		get_sidebar( 'secondary' );
	} 
	elseif ( is_page('Impressions') || $theParent == 'Impressions' ){
		get_sidebar( 'impressions' );
	}
	else {
		get_sidebar( 'primary' );
	}
}

// Remove rel attribute from the category list
function remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', '', $output);
  return $output;
}

add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');

//sets custom excerpt length
function custom_excerpt_length( $length ) {
	return 25;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//adds and initilizes excerpt for pages
add_action( 'init', 'my_add_excerpts_to_pages');
function my_add_excerpts_to_pages(){
	add_post_type_support( 'page', 'excerpt');
}

//pulls in children page excerpt
function get_children_pages() {
	
	global $post;
	
	rewind_posts(); // stop any previous loops 
	query_posts(array(
		'post_parent' => $post->ID,
		'post_type' => 'page', 
		'posts_per_page' => -1, 
		'post_status' => publish,
		'order' => 'ASC',
		'orderby' => 'menu_order'
	)); // query and order child pages 
    
	while (have_posts()) : the_post(); 
	
		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt
        
		echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
		echo '<h3><a href="'.$childPermalink.'">'.$childTitle.' </a></h3>';
		echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'">Read More&nbsp;&raquo;</a></p>';
		echo '</article>';
        
	endwhile;
	
	// reset query
	wp_reset_query();
}

// Add a Flexslider Gallery	
function add_flexslider() {
	
	global $post; // don't forget to make this a global variable inside your function

	$attachments = get_children(array(
		'post_parent' => $post->ID, 
		'order' => 'ASC', 
		'orderby' => 'menu_order',  
		'post_type' => 'attachment', 
		'post_mime_type' => 'image', 
	));

	if ($attachments) { // see if there are images attached to posting
		$flexslider = "";

		$flexslider = '<div class="flexslider">';
		$flexslider .= '<ul class="slides">';
		
		foreach ( $attachments as $attachment_id => $attachment ) { // create the list items for images with captions

			$flexslider .= '<li>';
			$flexslider .= wp_get_attachment_image($attachment_id, 'slideshow'); // get image size large
			$flexslider .= '<span class="description">';
			$flexslider .= get_post_field('post_content', $attachment->ID); // get image description field
			$flexslider .= '</span>';
			$flexslider .= '</li>';
		}

		$flexslider .= '</ul>';
		$flexslider .= '</div>';

		return $flexslider;
	} // end see if images attachmed

} 

function get_donate_widget() {
	if( is_page( 'donations' )) {
		get_sidebar( 'payment' );		
	} 
	else {
		return null;
	}
}