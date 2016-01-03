// @codekit-prepend "site/default-ui.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

function openPoints(){
	$('.ajax-point').magnificPopup({
		type: 'ajax',
		callbacks: {
			parseAjax: function(mfpResponse) {
				mfpResponse.data = $(mfpResponse.data).find('#content');
			},
		}
	});
}

$(document).ready(function(){
	mobileMenu();
	openPoints();
});