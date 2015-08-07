<!--begin footer-->
	<footer>
		<div id="footer-left" class="footer-div">
			<ul>
				<li>The Black Heritage Society is recognized by the Internal Revenue Service as a non-profit 501(c)(3) organization</li>
				<li><?php print ("&copy; " . date ('Y') . " "); ?> The Black Heritage Society of Washington State</li>
			</ul>
		</div><!--end footer-left-->

		<div id="footer-middle-left" class="footer-div">
			<?php wp_nav_menu( array( 
				'theme_location' => 'footer-menu-1' ,
				'menu' => 'Footer Menu 1' ,
				'container'  => 'ul', 
				'depth' => 0,
				'link_before' => '<span>',
				'link_after' => '</span>',
			)); ?>
		</div><!--end footer-middle-left-->

		<div id="footer-middle-right" class="footer-div">
			<?php wp_nav_menu( array( 
				'theme_location' => 'footer-menu-2' ,
				'menu' => 'Footer Menu 2' ,
				'container'  => 'ul', 
				'depth' => 0,
				'link_before' => '<span>',
				'link_after' => '</span>',
			)); ?>
		</div><!--end footer-middle-right-->

		<div id="footer-right" class="footer-div"	>
			<img src="<?php bloginfo('template_url');?>/images/Mohai_Logo.png" alt="Mohai Logo" ?>
		</div><!--end footer-right-->

	</footer>

	<?php wp_footer(); ?> 
	
</div><!--end wrapper-->
</body>
</html><!--end footer-->