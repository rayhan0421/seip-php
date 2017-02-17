//hover = '<div class="st-hover" style="width: ' + width + 'px; height: ' + height + 'px;"><!-- bg --></div><div class="st-hover-format st-hover-format-' + format + '"><!-- --></div></div>';
/*

	1 - HOVERS: FEATURED POSTS

		1.1 - Append a common hover
		1.2 - Post height

*/

/* jshint -W099 */
/* global jQuery:false, stData:false */

var t = jQuery.noConflict();

t(function(){

	'use strict';

/*

	stData[0] - Primary color
	stData[1] - Secondary color

*/

/*===============================================

	H O V E R S :   F E A T U R E D   P O S T S
	Animated hovers for sticky posts

===============================================*/

	/*-------------------------------------------
		1.1 - Append a common hover
	-------------------------------------------*/

	t('.post-thumb')

		.hover(

			function(){

				if ( !t(this).hasClass('inProgress') ) {

					t(this).addClass('inProgress');
	
					var
						width = t(this).outerWidth(true),
						height = t(this).outerHeight(true),
						format = t(this).attr('data-format'),
						hover = '<div class="st-hover" style="width: ' + width + 'px; height: ' + height + 'px; margin-bottom: -' + height + 'px;"><div class="st-hover-bg" style="background: #' + stData[1] + ';"><!-- bg --></div><div class="st-hover-data div-as-table"><div><div><!-- data --></div></div></div></div>';
						
                        t(this).html( hover );

                        var title = t(this).data('format');
                        //var title = 'title';
						t('.st-hover-data div div',this).html( '<i class="st-hover-format st-hover-format-' + format + '"><!-- --></i><p>' + title + '</p>' );
						//t(this).removeAttr('title');
						t('.st-hover-data div div p').animate({ 'margin-top': 5 }, 250 );
                        
						t('.st-hover',this).stop(true, false).animate({ opacity: 1 }, 125 );

				}

			},

			function(){

				if ( t(this).hasClass('inProgress') ) {

					var
						height = t(this).outerHeight(true);

					    t('.st-hover',this).stop(true, false).animate({ opacity: 0}, 125, function(){ t(this).parent().removeClass('inProgress'); t(this).remove(); } );

				}

			}

		);


	/*-------------------------------------------
		1.2 - Post height
	-------------------------------------------*/

	function st_feat_posts_enable() {

		var
			aHeightThumb = t('.posts-featured-a-wrapper .post-thumb').height(),
			aHeightDetails = t('.posts-featured-a-wrapper .posts-featured-details-wrapper > div').outerHeight(),
			bHeightThumb = t('.posts-featured-b-wrapper .post-thumb').height(),
			bHeightDetails = 0,
			cHeightDetails = 0,
			rHeightDetails = 0,
			screenFactor = 0;

			if ( t('#content-holder').width() == 1200 ) {
				screenFactor = 50; }
			if ( t('#content-holder').width() == 935 ) {
				screenFactor = 25; }
                
            //Fix by Maxim Martynov <maksimblg@gmail.com>
            t('.posts-featured-a-wrapper .posts-featured-details-wrapper > div').each(function(){
                
                var n2cHeight = t(this).outerHeight(true);
                t(this).parent().stop(true, false).animate({ 'height': n2cHeight, 'margin-top': - n2cHeight }, 250, function(){ t(this).eq(0).animate({ 'opacity': '1' }, 500); });

			});

			// 1 - B posts
			t('.posts-featured-b-wrapper .posts-featured-details-wrapper > div').each(function(){

				if ( t(this).outerHeight(true) > bHeightDetails ) {
					bHeightDetails = t(this).outerHeight(true); }

			});

			// Correction
			if ( t('#content-holder').width() > 591 ) {

				if ( aHeightDetails + aHeightThumb < ( bHeightThumb + bHeightDetails ) * 2 ) {
					bHeightDetails = bHeightDetails + 25;
					aHeightDetails = bHeightDetails * 2;
				}
				else {
					bHeightDetails = Math.ceil( ( aHeightThumb + aHeightDetails - bHeightThumb * 2 ) / 2 );
					aHeightDetails = aHeightDetails + screenFactor;
				}

			}
			else {

				aHeightDetails = aHeightDetails + 25;
				bHeightDetails = bHeightDetails + 25;

			}


			// 2 - C posts
			t('.posts-featured-c-wrapper .posts-featured-details-wrapper > div').each(function(){

				if ( t(this).outerHeight(true) > cHeightDetails ) {
					cHeightDetails = t(this).outerHeight(true); }

			});

			// Correction
			if ( t('#content-holder').width() > 591 ) {
				cHeightDetails = cHeightDetails + 25;
			}
			else {
				cHeightDetails = bHeightDetails;
			}


			// 3 - Related posts
			t('.posts-related-details-wrapper > div').each(function(){

				if ( t(this).outerHeight() > rHeightDetails ) {
					rHeightDetails = t(this).outerHeight(); }

			});

			// Set dimentions
			
			t('.posts-featured-b-wrapper .posts-featured-details-wrapper').stop(true, false).animate({ 'height': bHeightDetails }, 250, function(){ t(this).eq(0).animate({ 'opacity': '1' }, 500); });
			t('.posts-featured-c-wrapper .posts-featured-details-wrapper').stop(true, false).animate({ 'height': cHeightDetails }, 250, function(){ t(this).eq(0).animate({ 'opacity': '1' }, 500); });
			t('.posts-related-wrapper .posts-related-details-wrapper').stop(true, false).animate({ 'height': rHeightDetails }, 250, function(){ t(this).eq(0).animate({ 'opacity': '1' }, 500); });

	}

	function st_the_feat_posts_enable() {
		setTimeout( st_feat_posts_enable, 250 );
	}

	st_the_feat_posts_enable();

	t(window).resize( st_the_feat_posts_enable );



    	// jQuery('.flexslider').flexslider();
    	jQuery('.flexslider').flexslider({
			// FLEXSLIDER API
			// namespace: "flex-",             //{NEW} String: Prefix string attached to the class of every element generated by the plugin
			// selector: ".slides > li",       //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
			animation: "slide",              //String: Select your animation type, "fade" or "slide"
			// easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
			// direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
			// reverse: false,                 //{NEW} Boolean: Reverse the animation direction
			// animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
			// smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
			// startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
			slideshow: true,                //Boolean: Animate slider automatically
			slideshowSpeed: 6000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationSpeed: 750,            //Integer: Set the speed of animations, in milliseconds
			// initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
			// randomize: false,               //Boolean: Randomize slide order

			// Usability features
			// pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			// pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			// useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
			// touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
			// video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

			// Primary Controls
			// controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
			// prevText: "Previous",           //String: Set the text for the "previous" directionNav item
			// nextText: "Next",               //String: Set the text for the "next" directionNav item

			// Secondary Navigation
			// keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
			// multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
			// mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
			// pausePlay: false,               //Boolean: Create pause/play dynamic element
			// pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
			// playText: 'Play',               //String: Set the text for the "play" pausePlay item

			// Special properties
			// controlsContainer: "",          //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
			// manualControls: "",             //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
			// sync: "",                       //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
			// asNavFor: "",                   //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider

			// Carousel Options
			// itemWidth: 0,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
			// itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.
			// minItems: 0,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
			// maxItems: 0,                    //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.
			// move: 0,                        //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
			                                
			// Callback API
			// start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
			// before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
			// after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
			// end: function(){},              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
			// added: function(){},            //{NEW} Callback: function(slider) - Fires after a slide is added
			// removed: function(){}           //{NEW} Callback: function(slider) - Fires after a slide is removed
    	});

function clock() {
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();
    currentHours = (currentHours < 10 ? "0" : "") + currentHours;
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
    jQuery('#hours').text(currentHours);
    jQuery('#min').text(currentMinutes);
    jQuery('#sec').text(currentSeconds);
}

var days = ['Sunday - ', 'Monday - ', 'Tuesday - ', 'Wednesday - ', 'Thursday - ', 'Friday - ', 'Saturday - '];
var months = ['January, ', 'February, ', 'March, ', 'April, ', 'May, ', 'June, ', 'July, ', 'August, ', 'September, ', 'October, ', 'November, ', 'December, '];

jQuery(document).ready(function() {
    var currentTime = new Date();
    var currentDay = days[currentTime.getDay()];
    var currentDate = currentTime.getDate();
    var currentMonth = months[currentTime.getMonth()];
    var currentYear = currentTime.getFullYear();
    jQuery('#Date').text(currentDay + ' ' + currentDate + ' ' + currentMonth + ' ' + currentYear);
    clock();
    window.setInterval(clock, 1000);
});


});