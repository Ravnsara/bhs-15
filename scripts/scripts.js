$(document).ready(function($){
	
	//navigation
	// Cache the elements we'll need
	var menu = $('#navigation');
	var menuList = menu.find('ul:first');
	var listItems = menu.find('li').not('#responsive-tab');

	// Create responsive trigger
	menuList.prepend('<li id="responsive-tab"><a href="#">Menu</a></li>');

	// Toggle menu visibility
	menu.on('click', '#responsive-tab', function(){
		listItems.slideToggle('fast');
		listItems.addClass('collapsed');
	});
	//navigation

	//flexslider
	$('.flexslider').flexslider();
	//flexslider

	//accordion script
	$('.accordion-content').hide();

	$('#accordion').find('h4').click(function(){

		$(this).next().slideToggle('fast');
		$(this).css({"background-color" : "#DFC99D"});
		$("#accordion h4").not($(this)).css({"background-color" : "#ECE0C9"});
		$(".accordion-content").not($(this).next()).slideUp('fast');
		
	});
	//end accordion script
});//end document.ready