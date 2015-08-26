<?php get_header(); ?>
<!--begin main-->
		<div id="full-content">

			<div id="page-content">
				<h2><?php _e( 'Not Found', 'bh-15' ); ?></h2>

				<h3><?php _e( 'We are sorry, but the page you requested does not seem to exist', 'bh-15' ); ?></h3>

				<p><?php _e( 'Maybe try a search?', 'bh-15' ); ?></p>
				
				<?php get_search_form(); ?>

			</div><!--end page-content-->

		</div><!--end full-content-->

			<!--start sidebar-->
			<?php choose_sidebar(); ?>
			<!--end sidebar-->

		</div><!--end main-inside-->
	</div><!--end main-outside-->
<?php get_footer(); ?>