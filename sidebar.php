<aside id="primary"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	
	<?php if ( is_active_sidebar( 'primary' ) ) : ?>  
		
		<ul>
			<?php dynamic_sidebar( 'primary' ); ?>
		</ul>

	<?php else : ?>

	<!--begin default sidebar-->
	<ul>
		<li><h3>Search</h3>
			<?php get_search_form(); ?>
		</li>
		<li><h3>Ways to Get Involved</h3>
			<ul>
				<li>Volunteer</li>
				<li>Memberships</li>
				<li>Donate</li>
			</ul>
		</li>
		<li><h3>Donate</h3>
			<p>You can donate through paypal using
			our email address</p>
		</li>
	</ul><!--end default sidebar-->
	
	<?php endif; ?>

</aside><!--end sidebar-->