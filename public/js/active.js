/* =========================================
                Preloader
============================================ */
$(window).on('load', function () { // makes sure that whole site is loaded
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
});

/* =========================================
                Bootsrap tooltip
============================================ */
// Home nav
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// end
/* =========================================
              Navigation
============================================ */

/* Show & Hide White Navigation */
$(function () {

    // show/hide nav on page load
    showHideNav();

    $(window).scroll(function () {

        // show/hide nav on window's scroll
        showHideNav();
    });

    function showHideNav() {

        if ($(window).scrollTop() > 50) {

            // Show white nav
            $("nav").addClass("white-nav-top");

            // Show back to top button
            $("#back-to-top").fadeIn();

        } else {

            // Hide white nav
            $("nav").removeClass("white-nav-top");

            // Show logo
            $(".navbar-brand img").attr("src", "img/logo/logo.png");

            // Hide back to top button
            $("#back-to-top").fadeOut();
        }
    }
});
/* =========================================
               Aulbum
============================================ */
$(function () {  
    $("#albums").owlCarousel({
        items:7,
        autoplay: true,
        smartSpeed: 900,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ['<i class="fas fa-angle-double-left"></i>', '<i class="fas fa-angle-double-right"></i>'],
        responsive: {
            // breakpoint from 0 up
             0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:7
        }
        }
    });
});
/* =========================================
               artist
============================================ */
$(function () {  
    $("#album-members").owlCarousel({
        items:2,
        autoplay: true,
        smartSpeed: 900,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            // breakpoint from 0 up
             0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
        }
    });
});

/* =========================================
                Animation
============================================ */
// animate on scroll
$(function () {
    new WOW().init();
});

// home animation on page load
$(window).on('load', function () {

    $("#home-logo").addClass("animated fadeInDown");
    $("#home-h1").addClass("animated fadeInDown");
    $("#home-button-parent").addClass("animated flipinX");
    $("#home-button-child").addClass("animated pulse");


});
/* =========================================
       animation for registration login
============================================ */
// registration login animation on page load
$(window).on('load', function () {

    $("#log_reg_back").addClass("animated fadein");
    
    $("#form_ani").addClass("animated fadeIn");
    $("#label_ani").addClass("animated bounceIn");
    $("#log_reg_btn_ani").addClass("animated fadeIn");

});
/* =========================================
    		Page transition
============================================ */
    // Animsition
// $(document).ready(function() {
//   $(".animsition").animsition({
//     inClass: 'flip-in-y-fr',
//     outClass: 'flip-out-y-fr',
//     inDuration: 1500,
//     outDuration: 800,
//     linkElement: '.animsition-link',
//     // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
//     loading: true,
//     loadingParentElement: 'body', //animsition wrapper element
//     loadingClass: 'animsition-loading',
//     loadingInner: '', // e.g '<img src="loading.svg" />'
//     timeout: false,
//     timeoutCountdown: 5000,
//     onLoadEvent: true,
//     browser: [ 'animation-duration', '-webkit-animation-duration'],
//     // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
//     // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
//     overlay : false,
//     overlayClass : 'animsition-overlay-slide',
//     overlayParentElement : 'body',
//     transition: function(url){ window.location.href = url; }
//   });
// });

    // Page on leve
// (function () {
// 	var unload = {};
// 	unload.init = function () {
// 		//cache html element
// 		unload.$html = $(document.documentElement);

// 		//attach event
// 		$(window).on('beforeunload', unload.unloading);
// 	}
	
// 	unload.unloading = function (e) {
// 		unload.$html.addClass('animated fadeout');

// 		//set fallback
// 		setTimeout(unload.failed, 3000);
// 	}
	
// 	//useful if the user comes back, the loading fails, or it takes way too long
// 	unload.failed = function () {
// 		unload.$html.removeClass('animated fadeOut');
// 	}
	
// 	//set this whole thing up on DOMready
// 	$(unload.init);
// 	return unload;
// })();

/* =========================================
            Sidebar
============================================ */

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

/* =========================================
               Portfolio
============================================ */
$(window).on('load', function () {

    // Initialize Isotope
    $("#isotope-container").isotope({});

    // filter items on button click
    $("#isotope-filters").on('click', 'button', function () {

        // get filter value
        var filterValue = $(this).attr('data-filter');

        // filter portfolio
        $("#isotope-container").isotope({
            filter: filterValue
        });
        $("#portfolio-wrapper").find('.d-none').removeClass('d-none');
        // active button
        $("#isotope-filters").find('.active').removeClass('active');
        $(this).addClass('active');
    });
});
    

