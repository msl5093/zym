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
						title: 'Vinyasa Mat Yoga',
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
						title: 'Vinyasa Mat Yoga',
						start: '2017-06-28T18:30:00',
						end: '2017-06-28T19:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Norlo',
						start: '2017-06-29T10:30:00',						
						end: '2017-06-29T11:30:00',
						allDay: false
					},
					{
						title: 'Happy Hour Yoga - Red Heifer',
						start: '2017-06-29T18:00:00',						
						end: '2017-06-29T19:00:00',
						allDay: false,
						url: 'https://www.facebook.com/redheiferwinery/'
					},
					{
						title: 'Vinyasa Mat Yoga',
						start: '2017-07-01T10:30:00',
						end: '2017-07-01T11:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Renfrew',
						start: '2017-07-04T10:30:00',						
						end: '2017-07-04T11:30:00',
						allDay: false
					},
					{
						title: 'Vinyasa Mat Yoga',
						start: '2017-07-05T18:30:00',
						end: '2017-07-05T19:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Norlo',
						start: '2017-07-06T10:30:00',						
						end: '2017-07-06T11:30:00',
						allDay: false
					},
					{
						title: 'Happy Hour Yoga - Red Heifer',
						start: '2017-07-06T18:00:00',						
						end: '2017-07-06T19:00:00',
						allDay: false,
						url: 'https://www.facebook.com/redheiferwinery/'
					},
					{
						title: 'Vinyasa Mat Yoga',
						start: '2017-07-08T10:30:00',
						end: '2017-07-08T11:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Renfrew',
						start: '2017-07-11T10:30:00',						
						end: '2017-07-11T11:30:00',
						allDay: false
					},
					{
						title: 'Vinyasa Mat Yoga',
						start: '2017-07-12T18:30:00',
						end: '2017-07-12T19:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Norlo',
						start: '2017-07-13T10:30:00',						
						end: '2017-07-13T11:30:00',
						allDay: false
					},
					{
						title: 'Happy Hour Yoga - Red Heifer',
						start: '2017-07-13T18:00:00',						
						end: '2017-07-13T19:00:00',
						allDay: false,
						url: 'https://www.facebook.com/redheiferwinery/'
					},
					{
						title: 'Vinyasa Mat Yoga',
						start: '2017-07-15T10:30:00',
						end: '2017-07-15T11:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Renfrew',
						start: '2017-07-18T10:30:00',						
						end: '2017-07-18T11:30:00',
						allDay: false
					},
					{
						title: 'Vinyasa Mat Yoga',
						start: '2017-07-19T18:30:00',
						end: '2017-07-19T19:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
					},
					{
						title: 'Yoga In the Park - Norlo',
						start: '2017-07-20T10:30:00',						
						end: '2017-07-20T11:30:00',
						allDay: false
					},
					{
						title: 'Vinyasa Mat Yoga',
						start: '2017-07-22T10:30:00',
						end: '2017-07-22T11:30:00',
						allDay: false,
						url: 'http://www.gaiakosha.com/class-schedule.html'
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
		}	
	};
	
	namespace.Main = this.Main;
})(Jasper, jQuery);