/*********************************************************************************

    Version: 1.4

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================

    [ INDEX ]
    |
    |___ Mobile Menu
    |___ Affix Navbar
    |___ Page Scrolling
    |___ Slick Slider
    |___ Scroll Up
    |___ 
    |
    [END INDEX ]

================================================================================*/



//======= Mobile Menu Start ========
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
//======= Mobile Menu End ========


//======= Affix Navbar Start ========
$(window).on('scroll', function (event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > 0) {
        $('.navbar').addClass('affix');
    } else {
        $('.navbar').removeClass('affix');
    }
});
//======= Affix Navbar End ========


//======= Page Scrolling Start ========
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
//======= Page Scrolling End ========



//======= START Slick slider ========
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
//======= END Slick slider ========


//======= Scroll Up Start ========
$(document).on('scroll', function () {
    if ($(window).scrollTop() > 400) {
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
    //======= Scroll Up End ========

