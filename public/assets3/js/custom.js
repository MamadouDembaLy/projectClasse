(function ($)
 {
    "use strict";       
        // /*========== Responsive Menu  ==========*/
        $('.main-menu').meanmenu({
            meanMenuContainer: '.responsive-menu',
            meanScreenWidth: '991',
            meanMenuOpen: '<span></span><span></span><span></span>',
            meanMenuClose: '<i class="flaticon-cancel"></i>'
        });
        /*========== menu sticky  ==========*/
        $(window).on('scroll', function () {
            var scrollDown = $(window).scrollTop();
            if (scrollDown < 135) {
                $(".header-menu").removeClass("sticky-menu");
            } else {
                $(".header-menu").addClass("sticky-menu");
            }
        });
        // /*==========  testimonial  ==========*/
        var swiper = new Swiper(".testimonial-slider", {
            slidesPerView: 3,
            loop: true,
            speed: 1000,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".dots",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 1
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 3
                },
            }
        });
        /*========== scroll to top  ==========*/
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 200) {
                $('.scroll-top').fadeIn(200);
            } else {
                $('.scroll-top').fadeOut(200);
            }
        });
        $('.scroll-top').on('click', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        });
        /*==========  img-popup  ==========*/
        $('.img-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        /*==========  video-popup  ==========*/
        $('.video-popup').magnificPopup({
            type: 'iframe'
        });
        /*==========  counterUp  ==========*/
        $('.counter').counterUp({
            delay: 100,
            time: 3000
        });
         /*==========  theme loader  ==========*/      
         $(window).on("load", function () {
            $(".theme-loader").fadeOut(500);
        });
 
})(jQuery);