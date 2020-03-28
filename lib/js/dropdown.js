jQuery(document).ready(function($) {
	//call dropdown hover and on load & resize
	$( window ).resize(function() {
		enableHover();
	});
	enableHover();
});

//emable hover when window > 767px 
function enableHover() {
    if ($(window).width() > 767) {
        $('nav.navbar li.dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    } else {
        $('nav.navbar li.dropdown').unbind('mouseenter mouseleave')
    }
}