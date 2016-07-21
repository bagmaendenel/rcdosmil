var $width = $(window).innerWidth();


$(document).ready(function() {
	checkResizing();
	startSlider();

	/*$(function() {
		$('nav#mobile-menu').mmenu({
		    offCanvas: {
               position  : "right",
               zposition : "front"
            }
		});
	});
	
	cloneMenu();*/
});



function checkResizing(){
  $(window).on("resize", function(){
	$width = window.innerWidth;
  });  
}

function startSlider() {
	$("#contentSlider").owlCarousel({
		autoPlay : 5000,
		navigation : false, // Show next and prev buttons
		responsive : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true
	});
}

function cloneMenu() {
$("#mobile-menu")
	.clone()
	.attr('id', 'desktop-menu')
	.appendTo(".header");
}




