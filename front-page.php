<?php get_header(); ?>
<!--begin main-->
		<?php if(is_front_page()) : ?>
		<div id="image-slider">
			<?php if(has_post_thumbnail() ){ 
				the_post_thumbnail('feature-image');
			}; ?>
		</div><!--end image-slider-->
		
		<div id="content">
			<h2>Welcome</h2>
			<p>We would like to thank you for the support and interest that you have continually provided
			to the Black Heritage Society (BHS) so that the mission-the acquisition,preservation and
			exhibition of materials relating to the history and culture of African Americans in the State
			of Washington can be achieved. Those individuals who are interested in becoming a active
			board or committee member may contact the board at theboard@blackheritagewa.org</p>
			<p>The Exhibits Committee will explore innovative ideas that will increase our exhibits to
			include more exposure in the entire state. The Membership Committee will explore new
			ideas in acquiring new members, including implementing a system. The emphasis must be
			on the acquisition of new members that are sufficiently motivated to contribute time and
			creativity including but not limited to fundraising activities. Let me know of your ideas to
			increase membership and visibility.</p>
			<p>Remember, we are not limited to collecting and preserving history. We can also be the
			writers of history.</p>
		<?php endif; ?>
		</div><!--end content-->
	</div><!--end main-->	
	<!--start sidebar-->
	<?php get_sidebar(); ?>
	<!--start sidebar-->
<!--end main-->
<?php get_footer(); ?>