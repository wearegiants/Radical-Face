// @codekit-prepend "site/default-ui.js"

magnificPopup = $.magnificPopup.instance;

function setCookie() {
	$.cookie('radicalface', 'boom');
}

function fluidVideos(){
	$(".fluid-video").fitVids({
		customSelector: "iframe[src^='https://embed.spotify.com']"
	});
}

function openonLoad(){
	$(window).load(function(){
		if ( $.cookie('radicalface')) { 
			console.log('Cookies!')
		} else {
			$.magnificPopup.open({
				items: {
					src: '#welcome',
	      	type: 'inline'
				},
				mainClass: 'mfp-with-fade',
				removalDelay: 500,
			}, 0);
			setCookie();
		}
	});
}

function closeModal(){
	$('.close-modal').on('click',function(){
		magnificPopup.close();
	});
}

function openLink(){
	$(".poi_content a").on('click', function(e){
		e.preventDefault();
		alert('boom');
		magnificPopup.close();
	});
}

function openPoints(){
	$('.ajax-point').magnificPopup({
		type: 'ajax',
		mainClass: 'mfp-with-fade',
		removalDelay: 500,
		showCloseBtn: false,
		callbacks: {
			parseAjax: function(mfpResponse) {
				mfpResponse.data = $(mfpResponse.data).find('#poi');
			},
			ajaxContentAdded: function() {
				fluidVideos();
				closeModal();
			}
		}
	});
	$('.inline-point').magnificPopup({
		type:'inline',
		mainClass: 'mfp-with-fade',
		removalDelay: 500,
		showCloseBtn: false,
	});
}

$(document).ready(function(){
	openPoints();
	fluidVideos();
	openonLoad();
	closeModal();
	openLink();
});