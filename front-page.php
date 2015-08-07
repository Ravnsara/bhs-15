<?php get_header(); ?>
		<!--begin main-inside-->
			<?php if(is_front_page()) : ?>

			<div id="image-slider">
				<?php if(has_post_thumbnail() ){ 
					the_post_thumbnail('feature-image');
				}; ?>
			</div><!--end image-slider-->
			<!--start sidebar-->
			<?php choose_sidebar();
			//choose_sidebar(); ?>		
			<div id="front-page-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>">
						<?php the_content('<p class="serif">More &raquo;</p>'); ?>
		    			<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
					</div>
				
				<?php endwhile; endif; ?>  
			
			</div><!--end front-page-content-->

			<?php endif; ?>
		<!--end sidebar-->
		</div><!--end main-inside-->	
	</div><!--end main-outside-->
<?php get_footer(); ?>