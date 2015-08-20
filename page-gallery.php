<?php 
/**
* Template name: gallery
**/
?>
<?php get_header(); ?>
<!--begin content-->
			<div id="gallery-content" class="attachment">
				<ul class="attachment-list">
					<?php

					$args = array(
						'post_type' => 'attachment',
						'posts_per_page' => -1,
						'post_status' => null,
						'post_mime_type' => 'image',
						'post_parent' => $post->ID
					);

					$images = get_posts( $args );
					
					if ( $images ) {	
						foreach ( $images as $image ) : ?>
							<li class="attachment-image" data-lightbox="gallery">
								<?php echo the_attachment_link( $image->ID, 'gallery' ); ?>
							</li> 
						<?php endforeach;
					} ?>
				</ul>
			</div><!--end attachment-content-->
		</div><!--end main-inside-->	
	</div><!--end main-outside-->
<?php get_footer(); ?>