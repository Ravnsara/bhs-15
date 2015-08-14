<!--begin footer-->
	</div><!--end outside-->

	<div id="low-bar">
	</div><!--end low-bar-->
	
	<div id="outer-footer">

		<footer>

			<div id="footer-left" class="footer-div">

				<p>The Black Heritage Society is a<br> 501(c)(3) non-profit organization</p>
				<p><strong><?php print ("&copy; " . date ('Y') . " "); ?> The Black Heritage Society of Washington State</strong></p>

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
				<a href="http://www.mohai.org/"><img src="<?php bloginfo('template_url');?>/images/Mohai_Logo.png" alt="Mohai Logo" ?></a>
			</div><!--end footer-right-->

		</footer>

	</div><!--outer footer-->

	<?php wp_footer(); ?>

</body>
</html><!--end footer-->
