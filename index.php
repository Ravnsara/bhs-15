<?php get_header(); ?>
<!--begin main-->
		<div id="content">
			<?php if (have_posts()) : ?>

			    <?php while (have_posts()) : the_post(); ?>

		    	<div class="index-post-latest">
		        	<div class="index-latest-blog-title">
		 	          	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
		 	        </div><!--end index-latest-blog-title-->

	 	        	<div class="excerpt">
			        	<?php the_excerpt(); ?>
		 	        	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
		 	        </div>

				</div><!--end index-post-latest-->
				
				<?php endwhile; ?>
		    
		    <?php posts_nav_link(' ','<p class="alignleft">&laquo; Newer Trip Reports</p>','<p class="alignright"> Older Trip Reports &raquo;</p>') ?>
		    
		    <?php else : ?>

		    <?php _e( 'Sorry, no posts matched your criteria.'); ?>

			<?php endif; ?>
		</div><!--end content-->
	</div><!--end main-->

	<!--start sidebar-->
	<?php get_sidebar(); ?>
	<!--start sidebar-->
<!--end main-->
<?php get_footer(); ?>
