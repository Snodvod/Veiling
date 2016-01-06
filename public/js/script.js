function init () {

	//Carousel

	$('.carousel').carousel({
        interval: 3000
    });
    
	//Login form show

	$("#login").click(function(e) {
		$(this).hide();
		$("#loginform").show();
		$("#facebook").hide();
	});

	//Country code changer

	$("#country").change(function() {
		var index = $(this)[0].selectedIndex;
		$("#code")[0].selectedIndex = index;
	});
}



$(document).ready(init);