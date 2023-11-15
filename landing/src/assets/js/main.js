/*********************************************************************************

    Version: 1.0

    Note: This is main js. All custom scripts here.

**********************************************************************************/


/*======
*
* MetaGamer Scripts
*
======*/


/*===============================================================================

    [ INDEX ]
    |
    |___ Mobile Menu
    |___ Affix Navbar
    |___ Loading Overlay
    |___ Page Scrolling
    |___ Custom Slick
    |___ Scroll Up
    |___ AOS Plugin
    |

================================================================================*/

(function ($) {
    'use strict';


    /*======
    *
    * Mobile Menu
    *
    ======*/
    //open left menu clicking the left menu icon
    $('.left_menu_icon').on('click', function (event) {
        event.preventDefault();
        toggleLeftNav(true);
        $("body").css({ 'overflow': 'hidden' });
    });

    //open right menu clicking the right menu icon
    $('.burger-menu-icon').on('click', function (event) {
        event.preventDefault();
        toggleRightNav(true);
        $("body").css({ 'overflow': 'hidden' });
    });

    $('.cd-close-nav, .cd-overlay, .page-scroll').on('click', function (event) {
        event.preventDefault();
        toggleLeftNav(false);
        toggleRightNav(false);
        $("body").css({ 'overflow': 'auto' });
    });

    //select a new section
    $('.cd-nav li').on('click', function () {

    });

    function toggleLeftNav(bool) {
        $('.left_menu, .cd-overlay').toggleClass('is-visible', bool);
        $('main').toggleClass('scale-down', bool);
    };

    function toggleRightNav(bool) {
        $('.burger-menu, .cd-overlay').toggleClass('is-visible', bool);
        $('main').toggleClass('scale-down', bool);
    };


    /*======
    *
    * Affix Navbar
    *
    ======*/
    $(window).on('scroll', function (event) {
        var scrollValue = $(window).scrollTop();
        if (scrollValue > 0) {
            $('.navbar').addClass('affix');
        } else {
            $('.navbar').removeClass('affix');
        }
    });


    /*======
    *
    * Loading Overlay
    *
    ======*/
    $(window).on('load', function () {
        $('.loading-overlay').fadeOut(100);
    });


    /*======
    *
    * Page Scrolling
    *
    ======*/
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function () {
        $(document).on('click', 'a.page-scroll', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top + (0)
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });


    /*======
    *
    * Custom Slick
    *
    ======*/
    $('#thumb-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        infinite: true,
        draggable: true,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });


    $('#games-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        draggable: true,
        dots: false,
        arrows: false,
        centerMode: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('#review-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        draggable: true,
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });


    /*======
    *
    * Scroll Up
    *
    ======*/
    var bodyH = document.body.offsetHeight;
    var winH = window.innerHeight;
    $(document).on('scroll', function () {
        var scrollH = window.scrollY;
        var scrollCalc = Math.max(((scrollH + winH) * 100) / bodyH);
        var scrollPercent = Math.trunc(scrollCalc) + "px";
        document.getElementById("scrollH").style.height = scrollPercent;
        if (Math.trunc(scrollCalc) > 20) {
            document.getElementById("scrollH").style.visibility = 'visible';
        } else {
            document.getElementById("scrollH").style.visibility = 'hidden';
        }
        if ($(window).scrollTop() > 100) {
            $('.scroll-up').addClass('show');
        } else {
            $('.scroll-up').removeClass('show');
        }
    });

    $('.scroll-up').on('click', scrollToTop);

    function scrollToTop() {
        var verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0,
            element = $('body'),
            offset = element.offset(),
            offsetTop = offset.top;
        $('html, body').animate({ scrollTop: offsetTop }, 500, 'linear');
    }


    /*======
    *
    * AOS Plugin
    *
    ======*/
    //AOS Animation activate on page load
    window.onload = function () {
        AOS.init();
    }


})(jQuery);
