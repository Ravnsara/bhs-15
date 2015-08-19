<?php 
/**
* Template name: gallery
**/
?>
<?php get_header(); ?>
<!--begin content-->
			<div id="attachment-content" class="attachment">
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
							foreach ( $images as $image ) {    
								echo '<li class="attachment-image">';
								echo wp_get_attachment_image( $image->ID, 'gallery' );
								echo '</li>'; 
							}
						} ?>
				</ul>
			</div><!--end attachment-content-->
		</div><!--end main-inside-->	
	</div><!--end main-outside-->
<?php get_footer(); ?>