$(document).ready(function(){
	
	$("#home").click(function(){
	
	$("body,html").stop().animate({scrollTop:$(".slider").offset().top},1000);
	$("#home").addClass("highlight");
	$("#hospital,#blood,#contact,#services,#blog").removeClass();
		});
$("#hospital").click(function(){
	
	$("body,html").stop().animate({scrollTop:$(".content_container").offset().top-80},1000);
	$("#hospital").addClass("highlight");
	$("#services,#blood,#contact,#home,#blog").removeClass();
		});
	

$("#services").click(function(){
	
	$("body,html").stop().animate({scrollTop:$(".services").offset().top-80},1000);
	$("#services").addClass("highlight");
	$("#hospital,#blood,#contact,#home,#blog").removeClass();
		});
		
$("#blog").click(function(){
		
		$("body,html").stop().animate({scrollTop:$(".blog").offset().top-80},1000);
		$("#blog").addClass("highlight");
		$("#hospital,#blood,#contact,#services,#home").removeClass();
		});
	
	$("#blood").click(function(){
		
		$("body,html").stop().animate({scrollTop:$(".blood").offset().top-80},1000);
		$("#blood").addClass("highlight");
		$("#hospital,#contact,#home,#services,#blog").removeClass();
		});
	
	$("#contact").click(function(){
		
		$("body,html").stop().animate({scrollTop:$(".contact").offset().top-80},1000);
		$("#contact").addClass("highlight");
		$("#hospital,#blood,#home,#services,#blog").removeClass();
		});
	
});