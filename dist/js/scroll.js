$(document).ready(function () {
	$(function() {
		console.log("ok");
		$('a').on('click', function(e) {
			console.log("ok");
			e.preventDefault();
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
		});
	});
});
//$(document).ready(function() {
//	$('a').on('click', function() { // Au clic sur un élément
//		var page = $(this).attr('href'); // Page cible
//		var speed = 750; // Durée de l'animation (en ms)
//		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
//		return false;
//	});
//});