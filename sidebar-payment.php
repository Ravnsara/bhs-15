<div id="payment-widget"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	
	<?php if ( is_active_sidebar( 'payment' ) ) : ?>  
		
		<ul>
			<?php dynamic_sidebar( 'payment' ); ?>
		</ul>

	<?php else : ?>

	<!--begin default payment div-->
	<p>You can donate through paypal using our email address: </p>
	
	<?php endif; ?>

</div><!--end payment-widget-->