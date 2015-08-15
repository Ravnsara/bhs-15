<?php get_header(); ?>
<!--begin content-->
			<div id="attachment-content" class="attachment">
				<strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
				
				<div id="gallery-box" class="entrytext"> 

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php $attachment_link = get_the_attachment_link($post->ID, true, array(523, 1000)); // This also populates the iconsize for the next line ?>

				<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 50 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

					<div class="post" id="post-<?php the_ID(); ?>">

						<p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><?php /*echo basename($post->guid);*/ ?></p>
						
						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			            
			            <nav id="nav-image">
			                <p id="previous-image" class="alignleft"><?php previous_image_link( false, '&laquo; Previous Image' ); ?></p>
			                <p id="next-image" class="alignright"><?php next_image_link( false, 'Next Image &raquo;' ); ?></p>
			            </nav>
							<p class="postmetadata alt clear"><small><?php edit_post_link('Edit this entry.','',''); ?></small></p>
					</div><!--end classname-->
				
				</div><!--end gallery-box-->

			<?php endwhile; else: ?>
				<p>There don't seem to be any attachments yet. Perhaps another time.</p>
			<?php endif; ?>

			</div><!--end attachment-content-->
		</div><!--end main-inside-->	
	</div><!--end main-outside-->
<?php get_footer(); ?>
