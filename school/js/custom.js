/*global $:false, jQuery:false, console:false */
jQuery(document).ready(function($) {
	"use strict";
	$('.accordion').on('show', function(e) {
		$(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
		$(e.target).prev('.accordion-heading').find('.accordion-toggle i').removeClass('icon-plus');
		$(e.target).prev('.accordion-heading').find('.accordion-toggle i').addClass('icon-minus');
	});
	$('.accordion').on('hide', function(e) {
		$(this).find('.accordion-toggle').not($(e.target)).removeClass('active');
		$(this).find('.accordion-toggle i').not($(e.target)).removeClass('icon-minus');
		$(this).find('.accordion-toggle i').not($(e.target)).addClass('icon-plus');
	});
	// Create the dropdown base
	$("<select />").appendTo("nav");
	// Create default option "Go to..."
	$("<option />", {
		"selected": "selected",
		"value": "",
		"text": "Go to..."
	}).appendTo("nav select");
	// Populate dropdown with menu items
	$("nav a").each(function() {
		var el = $(this);
		$("<option />", {
			"value": el.attr("href"),
			"text": el.text()
		}).appendTo("nav select");
	});
	// To make dropdown actually work
	// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
	$("nav select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	//$('.cover').css(top:'100%');
	$('.thumb-wrapp').hover(function() {
		$('.folio-image', this).stop().animate({
			bottom: '20px'
		}, {
			queue: false,
			duration: 300
		});
		$('.folio-caption', this).stop().animate({
			bottom: '-20px'
		}, {
			queue: false,
			duration: 300
		});
	}, function() {
		$('.folio-image', this).stop().animate({
			bottom: '0'
		}, {
			queue: false,
			duration: 300
		});
		$('.folio-caption', this).stop().animate({
			bottom: '0'
		}, {
			queue: false,
			duration: 300
		});
	});
	$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#featured').parallax("50%", 0.1);
	$('#services').parallax("50%", 0.2);
	$('#bottom').parallax("50%", 0.1);
	$('.flexslider').flexslider({
		animation: "fade"
	});
	$(".letter-container h2").lettering();
	$('.navigation').onePageNav({
		begin: function() {
			console.log('start');
		},
		end: function() {
			console.log('stop');
		},
		scrollOffset: 0
	});
	//Google Map
	var get_latitude = $('#google-map').data('latitude');
	var get_longitude = $('#google-map').data('longitude');

	function initialize_google_map() {
		var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
		var mapOptions = {
			zoom: 14,
			scrollwheel: false,
			center: myLatlng
		};
		var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize_google_map);
});
$(window).scroll(function() {
	"use strict";
	if ($(window).scrollTop() < 10) {
		$('.fade').stop(true, true).fadeTo("slow", 1);
	} else {
		$('.fade').stop(true, true).fadeTo("slow", 0.33);
	}
});
// Trigger nice scroll 
$('html').niceScroll({
	cursorcolor: "#ef6603",
	cursorwidth: "10px",
	cursorborder: "2px solid #ef6603",
	scrollspeed: "30"
});
$(window).on("load", function() {
	$('.loading-overlay .lds-hourglass').fadeOut(2000, function() {
		$('body').css('overflow', 'auto');
		$(this).parent().fadeOut(2000, function() {
			$(this).remove();
		});
	});
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
	scrollFunction()
};

function scrollFunction() {
	if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
		document.getElementById("myBtn1").style.display = "block";
		document.getElementById("topnav").style.backgroundColor = "#2f3040";
	} else {
		document.getElementById("myBtn1").style.display = "none";
		document.getElementById("topnav").style.backgroundColor = "rgba(60, 172, 235, 0.28)";
	}
}

// Get the modal
var modal1 = document.getElementById('myModal1');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modal1Img = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function() {
	modal1.style.display = "block";
	modal1Img.src = this.src;
	captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal1.style.display = "none";
}
var span = document.getElementsByClassName("modal1")[0];
span.onclick = function() {
	modal1.style.display = "none";
}
	

	//$('.loading-overlay').fadeOut(2000);
});
// Show Color Option Div When Click On The Gear
$(".gear-check").click(function() {
	$(".color-option").fadeToggle();
});
// Change Theme Color On Click
var ul = $(".color-option ul li");
ul.eq(0).css("backgroundColor", "#ef6603").end()
ul.eq(1).css("backgroundColor", "rgba(230, 0, 36, 0.7);").end()
ul.eq(2).css("backgroundColor", "#3f51b5").end()
ul.eq(3).css("backgroundColor", "#8b209eed").end()
ul.click(function() {
	$("link[href*='theme']").attr("href", $(this).attr("data-value"));
});

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}