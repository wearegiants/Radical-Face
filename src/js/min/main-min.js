function mobileMenu(){var n=$("#header-navigation").html(),e=$("#mobile-menu_container").html(n);$("#mobile-menu_container a").removeClass("btn-nav").addClass("btn-mobile"),$(".mobile-toggle").swap()}function fluidVideos(){$(".fluid-video").fitVids()}function openPoints(){$(".ajax-point").magnificPopup({type:"ajax",mainClass:"mfp-with-fade",removalDelay:500,showCloseBtn:!1,callbacks:{parseAjax:function(n){n.data=$(n.data).find("#content")},ajaxContentAdded:function(){fluidVideos()}}})}$("input[type=checkbox], input[type=radio]").checkbox(),$(document).ready(function(){mobileMenu(),openPoints(),fluidVideos()});