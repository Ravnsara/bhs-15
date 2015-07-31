<aside id="primary"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'primar' ) ) : ?>  
		<ul>
			<?php dynamic_sidebar( 'primar' ); ?>
		</ul>
	<?php else : ?>
	<ul>
		<li><h3>Subscribe to Our Mailing List</h3>
			<form action="home.html" method="post">
				<input type="email" class="email" value="Email Address"><br />
				<input type="submit" id="submit" value="Subscribe">
			</form>
		</li>
		<li><h3>Donate</h3>
			<input type="submit" class="paypal" value="Donate through PayPal">
		</li>
		<li><h3>Upcoming Events</h3>
			<ul>
				<li><a href="#">Event-Date</a>
					<p>Lorem ipsum dolor sit amet, consectetur
					adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna
					aliqua.</p>
				</li>
				<li><a href="#">Event-Date</a>
					<p>Lorem ipsum dolor sit amet, consectetur
					adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna
					aliqua.</p>
				</li>
				<li><a href="#">Event-Date</a>
					<p>Lorem ipsum dolor sit amet, consectetur
					adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna
					aliqua.</p>
				</li>
			</ul>
		</li>
	</ul><!--end widgets-->
</aside><!--end sidebar-->
<?php endif; ?>