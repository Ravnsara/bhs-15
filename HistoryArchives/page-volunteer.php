<?php get_header(); ?>
<!--begin main-->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="content">
		<div id="post-<?php the_ID(); ?>">
			<?php the_content('<p class="serif">More &raquo;</p>'); ?>
        	<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
        	this is a volunteer page and will have a 
        	jquery accordian drop down
		</div>
		<?php endwhile; endif; ?>  
		</div><!--end content-->
	</div><!--end main-->	
	<!--start sidebar-->
	<?php get_sidebar(); ?>
	<!--start sidebar-->
<!--end main-->
<?php get_footer(); ?>
