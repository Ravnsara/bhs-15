<?php get_header(); ?>
<!--begin main-->
		<div id="full-content">

			<div id="page-content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>">
					<?php the_content('<p class="serif">More &raquo;</p>'); ?>
	    			<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
				</div>

				<?php endwhile; endif; ?>  

				<?php if( is_page(array( 'get-involved', 'projects' ))){
					get_children_pages();
				}; ?>

				<?php if( is_page( 'donations')){
					get_donate_widget();
				}; ?>

			</div><!--end page-content-->

		</div><!--end full-content-->

		<!--start sidebar-->
		<?php choose_sidebar(); ?>
		<!--end sidebar-->

		</div><!--end main-inside-->	
	</div><!--end main-outside-->
	
<?php get_footer(); ?>