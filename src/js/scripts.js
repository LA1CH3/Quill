(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

		///////////////////// JS Plugins
		 
		// Can also be used with $(document).ready()
	  $(".flexslider").flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });

	  // Begin custom scripts

		var $cache = {};

		$cache.menuToggle = $(".nav-toggle");
		$cache.mobileMenu = $(".nav");
		$cache.menuExit = $(".nav span");
		$cache.listing = $(".listing li");
		$cache.learnMore = $(".learn-more");

		// Click appear functions

		function clickAppear($trigger, $item){
			$trigger.click(function(e){
				e.preventDefault();
				$item.fadeToggle();
			});
		}

		clickAppear($cache.menuToggle, $cache.mobileMenu);
		clickAppear($cache.menuExit, $cache.mobileMenu);

		//Hover appear
		function hoverAppear($trigger){
			$trigger.hover(function(e){
				e.preventDefault();
				$(this).find(".list-hover").toggleClass("show");
			});
		}

		hoverAppear($cache.listing, $cache.learnMore);





		// Random things needed to be done

		// Give the submit button the styles we want
		$("#gform_submit_button_1").addClass("btn");





	});

} ( this, jQuery ));