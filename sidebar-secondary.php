<aside id="secondary"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>  
		<ul>
			<?php dynamic_sidebar( 'secondary' ); ?>
		</ul>
	<?php else : ?>
	<!--default sidebar text-->
	<ul>
		<li>
			<h3>Current Board</h3>
			<ul>
				<li>President, Monette Hearn</li>
				<li>Vice-President, Vacant</li>
				<li>Secretary, Susan Taylor</li>
				<li>Treasurer, Stephanie Spearman</li>
			</ul>
		</li>
		<li>
			<h3>Meeting Info</h3>
			<p>The Black Heritage Society Board meets every 2nd Saturday of the month, 
			except during July and August, from 11:00am -1:00pm at the Central Area Senior Center.</p>
			<p>Board meetings are open to the General Membership. Although only members of the Board 
			of Directors can vote at these meetings, the General Membership is encouraged to participate
			in open discussions.</p>
			<p>General Membership meetings are held in October, January and May. They are open to the public, 
			and are announced in the Newsletter. All members are welcome to attend.</p>
		</li>
	</ul><!--end widgets-->
	
	<?php endif; ?>
</aside><!--end sidebar-->