/*

	01. - AdSense

*/

/* jshint -W099 */
/* global jQuery:false */

var ds = jQuery.noConflict();

ds(function(){

	'use strict'; // because AdSense

/*==01.==========================================

 	A D S E N S E
	Ad Units for Google AdSense

===============================================*/

/*

	1 - ADSENSE

		1.1 - Ad Unit

*/

	/*-------------------------------------------
		1.1 - Ad Unit
	-------------------------------------------*/

	function st_define_ad_holders() {

		ds('.st-adsense').each(function(){
	
			var
				width = ds(this).width(), // Available space for ad unit
				client = ds(this).attr('data-client'),
				slot = ds(this).attr('data-slot'),
				type = ds(this).attr('data-type'),
				types = type.split('|'), // Sizes selected on widget
				i,
				size,
				ins = ds(this).children(':first');
	
				// Define ad unit size
				for ( i = 0; i < types.length; ++i ) {
	
					size = types[i].split('x'); // get the size of current unit
	
					// Stop the loop if it's enought space for the first appropriate unit
					// size[0] - width
					// size[1] - height
	
					if ( width > size[0] )
						break;
	
				}

				
				ds(ins)

					// Reset ad ins
					.removeAttr('data-adsbygoogle-status')

					// Drop Ad Unit
					.css({ 'width': size[0], 'height': size[1] })
					.attr( 'data-ad-client', client )
					.attr( 'data-ad-slot', slot );

				setTimeout( function(){ ( ins = window.adsbygoogle || [] ).push({}); }, 1000 );

		});

	}

	st_define_ad_holders();

	ds(window).resize( st_define_ad_holders );

});