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

	$('.advanced h3').click(function() {
		$filter = $('.filter');
		if($filter.css('display') == 'none') {
			$filter.slideDown();
		} else {
			$filter.slideUp();
		}
	});

//Maybe later when more time

/*
	//Fancy loading strip 
	var loadedSize = 0;
	var number_of_media = $("body img").length;
	 
	doProgress();
	 
	// function for the progress bar
	function doProgress() {
		$("img").load(function() {
			loadedSize++;
			var newWidthPercentage = (loadedSize / number_of_media) * 100;
			animateLoader(newWidthPercentage + '%');
		})
	}
	 
	//Animate the loader
	function animateLoader(newWidth) {
		$(".header").attr('data-width', newWidth);
	}
}

*/

}



$(document).ready(init);