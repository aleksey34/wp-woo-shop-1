
jQuery(document).ready(function(){


	/* ---- Countdown timer ---- */

	jQuery('#counter').countdown({
		timestamp : (new Date()).getTime() + 11*24*60*60*1000
	});


	/* ---- Animations ---- */

	jQuery('#links a').hover(
		function(){ jQuery(this).animate({ left: 3 }, 'fast'); },
		function(){ jQuery(this).animate({ left: 0 }, 'fast'); }
	);

	jQuery('footer a').hover(
		function(){ jQuery(this).animate({ top: 3 }, 'fast'); },
		function(){ jQuery(this).animate({ top: 0 }, 'fast'); }
	);


	// from header.php


// form head
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); }

    // from head
    jQuery(".scroll").click(function (event) {
        event.preventDefault();
        jQuery('html,body').animate({scrollTop: jQuery(this.hash).offset().top}, 1000);
    });

	 // header modal window   show modal windows - reg-log  with opening window constantly
    // jQuery('#myModal88').modal('show');


});

// menu bootstrap hover


//jQuery("[data-toggle=dropdown]").on('hover' , function (event) {
// jQuery(".dropdown-toggle").on('hover' , function (event) {
// 	jQuery(event.target).dropdown();
// });