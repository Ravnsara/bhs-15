<?php get_header(); ?>
		<!--begin main-inside-->
			<?php if(is_front_page()) : ?>

			<!--start flexslider-->
			<?php echo add_flexslider(); ?>
			<!--end flexslider-->
			
			<!--start sidebar-->
			<?php choose_sidebar(); ?>
			<!--end sidebar-->

			<div id="front-page-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>">
						<?php the_content('<p class="serif">More &raquo;</p>'); ?>
		    			<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
					</div>
				
				<?php endwhile; endif; ?>  
			
			</div><!--end front-page-content-->

			<?php endif; ?>
		</div><!--end main-inside-->	
	</div><!--end main-outside-->
<?php get_footer(); ?>