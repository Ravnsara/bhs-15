<aside id="impressions"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'impressions' ) ) : ?>  
		<ul>
			<?php dynamic_sidebar( 'impressions' ); ?>
		</ul>
	<?php else : ?>

	<!--start default sidebar-->
	<ul>
		<li><h3>Select by Region</h3>
			<ul>
				<li>Seattle</li>
				<li>Olympia</li>
				<li>Vancouver</li>
				<li>Spokane</li>
			</ul>
		</li>
	</ul>
	<!--end default sidebar-->
	
	<?php endif; ?>
</aside><!--end sidebar-->