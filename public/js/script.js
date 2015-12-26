function init () {

	$('.carousel').carousel({
        interval: 3000
    });
    
	$("#login").click(function(e) {
		$(this).hide();
		$("#loginform").show();
		$("#facebook").hide();
	});
}

$(document).ready(init);