/*
*  Namespace defintion
*/

if (typeof(Jasper) === 'undefined' || Jasper === null)
	var Jasper = {};

(function Main(namespace, $) {
	
	this.Main = {
		init: function() {
			this.buildCalendar();
			this.setSmoothScrolling();
		},
		
		buildCalendar: function() {
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			if (d < 10)
			{
				d = '0'+ d;
			} 

			if (m < 10) 
			{
				m = '0' + m;
			} 
			
			today = y + '-' + m + '-' + d;
			
			//events are hardcoded for now, not a problem at the moment
			$('#calendar').fullCalendar({
				header: {
					left: 'title',
					//center: 'month,basicWeek,basicDay',
					right: 'prev,next today'
				},
				//defaultDate: today,
				navLinks: true, // can click day/week names to navigate views
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				selectable: true,
				events: [
					{
						title: 'Yoga In the Park - Renfrew',
						start: '2017-06-20T10:30:00',						
						end: '2017-06-20T11:30:00',
						allDay: false
					},
					{
						title: 'Beginners Mat Yoga',
						start: '2017-06-21T18:30:00',
						end: '2017-06-21T19:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Norlo',
						start: '2017-06-22T10:30:00',						
						end: '2017-06-22T11:30:00',
						allDay: false
					},
					{
						title: 'Yoga In the Park - Renfrew',
						start: '2017-06-27T10:30:00',						
						end: '2017-06-27T11:30:00',
						allDay: false
					},
					{
						title: 'Yoga In the Park - Norlo',
						start: '2017-06-29T10:30:00',						
						end: '2017-06-29T11:30:00',
						allDay: false
					}
				]
			});
		},

		setSmoothScrolling: function() {
			// Select all links with hashes
			$('a[href*="#"]')
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.click(function(event) {
				// On-page links
				if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
				&& 
				location.hostname == this.hostname
				) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
					scrollTop: target.offset().top
					}, 1000, function() {
					// Callback after animation
					// Must change focus!
					var $target = $(target);
					$target.focus();
					if ($target.is(":focus")) { // Checking if the target was focused
						return false;
					} else {
						$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
						$target.focus(); // Set focus again
					};
					});
				}
				}
			});
		},

		navSvgConverter: function () {
			$('img.svg').each(function () {
				var $img = jQuery(this);
            	var imgId = $img.attr('id');
            	var imgClass = $img.attr('class');
            	var imgURL = $img.attr('src');

				$.get(imgURL, function(data) {
					// Get the SVG tag, ignore the rest
					var $svg = $(data).find('svg');

					// Add replaced image's ID to the new SVG
					if(typeof imgId !== 'undefined') {
						$svg = $svg.attr('id', imgId);
					}
					// Add replaced image's classes to the new SVG
					if(typeof imgClass !== 'undefined') {
						$svg = $svg.attr('class', imgClass+' replaced-svg');
					}

					// Remove any invalid XML tags as per http://validator.w3.org
					$svg = $svg.removeAttr('xmlns:a');

					// Replace image with new SVG
					$img.replaceWith($svg);

            	}, 'xml');
			});
		}	
	};
	
	namespace.Main = this.Main;
})(Jasper, jQuery);