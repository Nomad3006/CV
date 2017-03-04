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

var nav = $(".masthead");
var nav_static = "nav-scaled";
var off_height = document.getElementById('profil').offsetTop;

$(document).ready(function(){
	$(document).scroll(function(){

		if( $(this).scrollTop() > 1 ) {
			nav.addClass(nav_static);
		} else {
			nav.removeClass(nav_static);
		}
	});
});

//function animations(element,addedclass){
//	console.log(element);
//$(document).ready(function() {
//    $(window).scroll( function(){
//        $(element).each( function(i){
//            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
//            var bottom_of_window = $(window).scrollTop() + $(window).height();
//            if( bottom_of_window > bottom_of_object ){
//                $(this).addClass(addedclass);
//            }
//        });
//    });
//});
//}

//animations('.hiden','fadeInLeft');
//animations('._fadeIn','fadeIn');
////animations('.circle','rotate')


