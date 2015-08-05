<?php get_header(); ?>
<!--begin main-->
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>">
				<?php the_content('<p class="serif">More &raquo;</p>'); ?>
    			<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
			</div>
			<?php endwhile; endif; ?>  
			<?php get_children_pages(); ?>
		</div><!--end content-->
	</div><!--end main-->	
	<!--end main-->

<!--start sidebar-->
<?php if(is_page( 'about' )){ get_sidebar( 'secondary' ); } 
elseif (is_page( 'impressions' )){ get_sidebar( 'impressions' ); } 
else {get_sidebar( 'primary' );}
?>
<!--end sidebar-->

<?php get_footer(); ?>