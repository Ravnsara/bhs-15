<aside id="primary"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>  
		<ul>
			<?php dynamic_sidebar( 'secondary' ); ?>
		</ul>
	<?php else : ?>
	<ul>
		<li>President, Monette Hearn</li>
		<li>Vice-President, Vacant</li>
		<li>Secretary, Susan Taylor</li>
		<li>Treasurer, Stephanie Spearman</li>
	</ul><!--end widgets-->
	<?php endif; ?>
</aside><!--end sidebar-->