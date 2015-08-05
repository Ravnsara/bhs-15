<!--begin footer-->
	<footer>
		<ul>
			<li><?php print ("&copy; " . date ('Y') . " "); ?> The Black Heritage Society of Washington State</li>
			<li>The Black Heritage Society is recognized by the Internal Revenue Service as a non-profit 501(c)(3) organization</li>
		</ul>
	</footer>
	<?php wp_footer(); ?> 
</div><!--end wrapper-->
<script>
$(document).ready(function($){
	$('.accordion-content').hide();

	//when h4 element is clicked
	$('#accordion').find('h4').click(function(){

		//toggle open or close 
		$(this).next().slideToggle('slow');

		//slide up the content not selected
		$(".accordion-content").not($(this).next()).slideUp();
	});
});
</script>
</body>
</html><!--end footer-->