<?php get_header(); ?>
<!--begin main-->
	<div id="image-slider">
		<?php the_post_thumbnail('feature-image'); ?>
		<img src="slider.jpg" alt="image slider" />
	</div><!--end image-slider-->
	
	<div id="content">
	<?php if (have_posts()) : ?>

	    <?php while (have_posts()) : the_post(); ?>

    	<div class="index-post-latest">
        	<div class="index-latest-blog-title">
 	          	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <div class="meta">
            <span class="date-span"><?php the_time('jS'); ?></span><br />
            <span class="month-year"><?php the_time('F Y'); ?></span>
            by <span class="author"><?php the_author_posts_link(); ?> | </span>
            posted in: <span class="cat"> <?php the_category(', ') ?> | </span>
     	    <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
        </div><!--end meta-->
	        <?php the_excerpt(); ?>
 	        <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
		</div><!--end content-->
		    <?php endwhile; ?>
    
    <?php posts_nav_link(' ','<p class="alignleft">&laquo; Newer Trip Reports</p>','<p class="alignright"> Older Trip Reports &raquo;</p>') ?>
    
    <?php else : ?>

    <?php _e( 'Sorry, no posts matched your criteria.'); ?>

	<?php endif; ?>
	</div><!--end main-->	
	<!--start sidebar-->
	<?php get_sidebar(); ?>
	<!--start sidebar-->
<!--end main-->
<?php get_footer(); ?>
