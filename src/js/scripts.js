(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

		var $cache = {};

		$cache.menuToggle = $(".nav-toggle");
		$cache.mobileMenu = $(".nav.mobile");
		$cache.menuExit = $(".nav.mobile span");
		$cache.listing = $(".listing li");
		$cache.learnMore = $(".learn-more");
		$cache.calendar = $("#calendar");
		///////////////////// JS Plugins

	  $('.frontslide').slick({
	  	arrows: true,
	  	autoplay: true
	  });

	  // fullcalendar
	  $cache.calendar.fullCalendar({
	  	height: 100,
	  	contentHeight: 250,
	  	defaultDate: "2015-06-04",
	  	events: eventsArr,
	  	eventColor: "#7c1416",
	  	eventTextColor: "white",
	  	fixedWeekCount: false
	  });

	  /////////////////// Begin custom scripts

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


		// Show page ajax
		$(".tabs .btn").click(function(e) {
			e.preventDefault();
			$(".tabs .btn").removeClass("selected");
			$(this).addClass("selected");
		    $.ajax({
		        url:"../../../wp-admin/admin-ajax.php",
		        type: "GET",
		        cache: false,
		        dataType: "html",
		        data: {
		        	field: $(this).attr("data-content"),
		        	id: $(".tabs").attr("data-content"),
		        	action: "shows"
		    },
		        success: function(resp) {
		            $(".ajax-show").hide().html(resp).fadeIn();

		        },
		        error: function(xhr, status, error){
		        	var err = JSON.parse(xhr.responseText);
		        	console.log(err);
		        }
		    });
		});





		// Random things needed to be done

		// Give the submit button the styles we want
		$("#gform_submit_button_1").addClass("btn");





	});

} ( this, jQuery ));