(function ($) {
    "use strict";


    /*=============================================
    =            menu sticky and scroll to top            =
    =============================================*/
    
	/*----------  Menu sticky ----------*/

	var windows = $(window);
	var screenSize = windows.width();
	var sticky = $('.header-sticky');
	var stickyAbsolute = $('.header-sticky--absolute');
	var $html = $('html');
	var $body = $('body');


	windows.on('scroll', function () {
		var scroll = windows.scrollTop();
		var headerHeight = sticky.height();
		var headerHeightAbsolute = stickyAbsolute.height();

		if (screenSize >= 992) {
			if (scroll < headerHeight) {
				sticky.removeClass('is-sticky');
			} else {
				sticky.addClass('is-sticky');
            }
            
			if (scroll < headerHeightAbsolute) {
				stickyAbsolute.removeClass('is-sticky--absolute');
			} else {
				stickyAbsolute.addClass('is-sticky--absolute');
			}
		}



		//code for scroll top

		// if (scroll >= 400) {
		// 	$('#scroll-top').fadeIn();
		// } else {
		// 	$('#scroll-top').fadeOut();
		// }

	});




	/*----------  Scroll to top  ----------*/

    function scrollToTop() {
        var $scrollUp = $('#scroll-top'),
            $lastScrollTop = 0,
            $window = $(window);

        $window.on('scroll', function () {
            var st = $(this).scrollTop();
            if (st > $lastScrollTop) {
                $scrollUp.removeClass('show');
            } else {
                if ($window.scrollTop() > 200) {
                    $scrollUp.addClass('show');
                } else {
                    $scrollUp.removeClass('show');
                }
            }
            $lastScrollTop = st;
        });

        $scrollUp.on('click', function (evt) {
            $('html, body').animate({scrollTop: 0}, 600);
            evt.preventDefault();
        });
    }

    scrollToTop();

    
    /*=====  End of menu sticky and scroll to top  ======*/

    
    
    /*=============================================
    =            background image            =
    =============================================*/
    
    var bgSelector = $(".bg-img");
    bgSelector.each(function (index, elem) {
        var element = $(elem),
            bgSource = element.data('bg');
        element.css('background-image', 'url(' + bgSource + ')');
    });
    
    /*=====  End of background image  ======*/

    
    /*=============================================
    =            mobile menu active            =
    =============================================*/
    
    $("#mobile-menu-trigger").on('click', function(){
        $("#mobile-menu-overlay").addClass("active");
        $body.addClass('no-overflow');
    });
    
    $("#mobile-menu-close-trigger").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });
    
    /*=====  End of mobile menu active  ======*/
    
    
    
    /*=============================================
    =            offcanvas mobile menu            =
    =============================================*/
    
        
    var $offCanvasNav = $('.offcanvas-navigation'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');
    
    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');
    
    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();
    
    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });
    
    
    /*=====  End of offcanvas mobile menu  ======*/


    
    /*=============================================
    =            swiper slider activation            =
    =============================================*/
    
    $(document).ready(function(){

  

        var heroSlider = new Swiper('.hero-slider__container', {
            slidesPerView : 1,
            loop: true,
            speed: 1000,
            watchSlidesVisibility: true,
            effect: 'fade',
            navigation: {
                nextEl: '.ht-swiper-button-next-13',
                prevEl: '.ht-swiper-button-prev-13'
            },
            autoplay: {
                delay: 5000,
            },
        });

        var serviceGallerySlider = new Swiper('.service-gallery__container', {
            slidesPerView : 1,
            loop: true,
            speed: 1000,
            watchSlidesVisibility: true,
            navigation: {
                nextEl: '.ht-swiper-button-next-14',
                prevEl: '.ht-swiper-button-prev-14'
            },
        });

        var projectSlider = new Swiper('.latest-project-slider__container', {
            slidesPerView : 1,
            loop: true,
            speed: 1000,
            watchSlidesVisibility: true,
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: '.ht-swiper-button-next-16',
                prevEl: '.ht-swiper-button-prev-16'
            },
            
        });

        var blogGallerySlider = new Swiper('.blog-gallery__container', {
            slidesPerView : 1,
            loop: true,
            speed: 1000,
            watchSlidesVisibility: true,
            navigation: {
                nextEl: '.ht-swiper-button-next-15',
                prevEl: '.ht-swiper-button-prev-15'
            },
            autoplay: {
                delay: 5000,
            },
        });

        var serviceSlider = new Swiper('.service-slider__container', {
            slidesPerView : 3,
            loop: true,
            speed: 1000,
            watchSlidesVisibility: true,
            spaceBetween : 30,
            pagination: {
                el: '.swiper-pagination-11',
                type: 'bullets',
                clickable: true
            },
            navigation: {
                nextEl: '.ht-swiper-button-next-4',
                prevEl: '.ht-swiper-button-prev-4'
            },
            // Responsive breakpoints
            breakpoints: {
                1499:{
                    slidesPerView : 3
                },

                991:{
                    slidesPerView : 2
                },

                767:{
                    slidesPerView : 1

                },

                575:{
                    slidesPerView : 1,
                    spaceBetween : 30
                }
            }
        });

        var testimonialSlider = new Swiper('.testimonial-slider__container', {
            slidesPerView : 1,
            loop: true,
            speed: 1000,
            watchSlidesVisibility: true,
            effect: 'fade',
            spaceBetween : 30,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination-3',
                type: 'bullets',
                clickable: true
            }
        });

        var brandLogoSlider = new Swiper('.brand-logo-slider__container', {
            slidesPerView : 4,
            loop: true,
            speed: 1000,
            watchSlidesVisibility: true,
            spaceBetween : 30,
            autoplay: {
                delay: 3000,
            },
           
            // Responsive breakpoints
            breakpoints: {
                1499:{
                    slidesPerView : 4
                },

                991:{
                    slidesPerView : 3
                },

                767:{
                    slidesPerView : 3

                },

                575:{
                    slidesPerView : 2
                }
            }
        });


    });
    
    /*=====  End of swiper slider activation  ======*/
    
    
    /*=============================================
    =            light gallery active            =
    =============================================*/
    
    $('.video-popup').lightGallery(); 
    $('.image-popup').lightGallery({
        selector: '.single-gallery-thumb'
    }); 
    
    /*=====  End of light gallery active  ======*/

    
    /*=============================================
    =            counter up active            =
    =============================================*/
    
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    
    /*=====  End of counter up active  ======*/
    


    /*=============================================
    =            mailchimp active            =
    =============================================*/
    
    if(('#mc-form').length){
        $('#mc-form').ajaxChimp({
            language: 'en',
            callback: mailChimpResponse,
            // ADD YOUR MAILCHIMP URL BELOW HERE!
            url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'
    
        });
        
        function mailChimpResponse(resp) {
    
            if (resp.result === 'success') {
                $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
                $('.mailchimp-error').fadeOut(400);
    
            } else if (resp.result === 'error') {
                $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
            }
        }
    }
    
    /*=====  End of mailchimp active  ======*/
    

    
    /*=============================================
    =            contact map active            =
    =============================================*/
    
    if($('.contact-map').length){
        function initialize() {
            var mapOptions = {
                zoom: 14,
                scrollwheel: false,
                center: new google.maps.LatLng(40.730610, -73.935242)
            };
            var map = new google.maps.Map(document.getElementById('contact-map'), mapOptions);
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map,
                animation: google.maps.Animation.BOUNCE
            });
    
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    }
    
    /*=====  End of contact map active  ======*/
    
    
    
    
    
})(jQuery);