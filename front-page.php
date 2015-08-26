<?php get_header(); ?>
		<!--begin main-inside-->
		<?php if(is_front_page()) : ?>
		<div id="full-content">

			<div id="front-page-content">

				<!--start flexslider-->
				<?php echo add_flexslider(); ?>
				<!--end flexslider-->

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>">
						<?php the_content('<p class="serif">More &raquo;</p>'); ?>
		    			<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
					</div>
				
				<?php endwhile; endif; ?>  
			
			</div><!--end front-page-content-->

		</div><!--end full-content-->

		<!--start sidebar-->
		<?php choose_sidebar(); ?>
		<!--end sidebar-->

		<?php endif; ?>
		
		</div><!--end main-inside-->	
	</div><!--end main-outside-->
<?php get_footer(); ?>