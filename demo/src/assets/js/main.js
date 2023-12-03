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


    //Nav-link's to active as you scroll through sections
    var sections = document.querySelectorAll("section");
    var navLink = document.querySelectorAll("ul.navbar-nav li a");
    window.onscroll = () => {
      var current = "";
    
      sections.forEach((section) => {
        var sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop - 60) {
          current = section.getAttribute("id"); 
        }
      });
    
      navLink.forEach((a) => {
        a.classList.remove("active");
        if (a.classList.contains(current)) {
          a.classList.add("active");
        }
      });
    };



    /*======
    *
    * Count Value
    *
    ======*/
    function animateValue(id, start, end, duration) {
        if (start === end) return;
        var range = end - start;
        var current = start;
        var increment = end > start? 1 : -1;
        var stepTime = Math.abs(Math.floor(duration / range));
        var obj = document.getElementById(id);
        var timer = setInterval(function() {
            current += increment;
            obj.innerHTML = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }
    
    animateValue("value", 0, 3, 4000);



    /*======
    *
    * Countdown Timer
    *
    ======*/
    // Get html elements
    let day = document.querySelector('.days');
    let hour = document.querySelector('.hours');
    let minute = document.querySelector('.minutes');
    let second = document.querySelector('.seconds');
  
    function setCountdown() {
    
        // Set countdown date
        let countdownDate = new Date('Nov 30, 2023 12:19:00').getTime();

        // Update countdown every second
        let updateCount = setInterval(function(){

            // Get today's date and time
            let todayDate = new Date().getTime();

            // Get distance between now and countdown date
            let distance = countdownDate - todayDate;

            let days = Math.floor(distance / (1000 * 60 * 60 *24));

            let hours = Math.floor(distance % (1000 * 60 * 60 *24) / (1000 * 60 *60));

            let minutes = Math.floor(distance % (1000 * 60 * 60 ) / (1000 * 60));

            let seconds = Math.floor(distance % (1000 * 60) / 1000);

            // Display values in html elements
            day.textContent = days;
            hour.textContent = hours;
            minute.textContent = minutes;
            second.textContent = seconds;

            // if countdown expires
            if(distance < 0){
                clearInterval(updateCount);
                document.querySelector("#countdown").innerHTML = '<h1>Launched</h1>'
            }
        }, 1000)
    }
  
  setCountdown()


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
        if (Math.trunc(scrollCalc) > 12) {
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
