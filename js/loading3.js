/*

$(document).ready(function() {
$("#hidden").css('display', 'block');
$("#progress-bar").animate({width:"65%"}, 2000); });
$(window).bind('load', function() {
$("#progress-bar").stop().animate({width:"100%"}, 2000, function() {
$("#hidden").fadeOut(500); }); });
*/
$(window).load(function() { $("#loadings").fadeOut(500); });

