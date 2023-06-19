$(function ($) {
    "use strict";

    jQuery(document).ready(function () {
        // # link will target id and scroll
        $('.about-links .mybtn3').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top -80
            }, 1000);
            event.preventDefault();
        });
        //   magnific popup activation
        $('.video-play').magnificPopup({
            type: 'video'
        });

        $('.img-popup').magnificPopup({
            type: 'image'
        });
        
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });

        // Video Active
        $("#bgndVideo").YTPlayer();

        // MObile menu toggle 
        $('.menu-toogle-icon').on('click', function(){
            $('.side-menu').animate({
                'width': 'toggle'
            });
            $('.menu-toogle-icon').toggleClass('active');
        })
        $('#nav-icon3').click(function(){
            $(this).toggleClass('open');
        });
        //Mixitup js
        $('.project-gallery').mixItUp();

        $(".circle-progress").loading();

        // Typed js
        $(".typed").typed({
            strings: ["Student.", "Web Developer.", "Teacher."],
            // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
            stringsElement: null,
            // typing speed
            typeSpeed: 30,
            // time before typing starts
            startDelay: 500,
            // backspacing speed
            backSpeed: 20,
            // time before backspacing
            backDelay: 1200,
            // loop
            loop: true,
        });

        $(".particals").buoyant({
            containerClass:"buoyant-container",
            parentClass:'buoyant-parent',
			numberOfItems: 20,
			minRadius: 5,
			maxRadius: 30,
			elementClass: 'circles'
          });
        
        $('#mainmenu-area').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 750,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function() {
                //I get fired when the animation is starting
            },
            end: function() {
                //I get fired when the animation is ending
            },
            scrollChange: function($currentListItem) {
                //I get fired when you enter a section and I pass the list item of the section
            }
        });


        // counter up
        $('.counter').counterUp({
        delay: 10,
        time: 2000
        });
    
        // Active Bootstrap Tooltip
        $('[data-toggle="tooltip"]').tooltip()

        // heroarea-slider
        var $hero_area_slider = $('.hero-area-slider');
        $hero_area_slider.owlCarousel({
        loop: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        nav: false,
        dots:true,
        autoplay: true,
        autoplayTimeout: 7000,
        smartSpeed: 1200,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            950: {
                items: 1
            },
            960: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
    function startProgressBar() {
        // apply keyframe animation
        $(".slide-progress").css({
            width: "100%",
            transition: "width 7000ms"
        });
    }
    function resetProgressBar() {
        $(".slide-progress").css({
            width: 0,
            transition: "width 0s"
        });
    }


        // testimonial_slider 
        var $testimonial_slider = $('.testimonial-slider');
        $testimonial_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: false,
            dots: false,
            autoplay: true,
            margin: 0,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1199: {
                    items: 3
                }
            }
        });

        // team_slider 
        var $team_slider = $('.team-slider');
        $team_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: false,
            dots: false,
            autoplay: true,
            margin: 0,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });


        // blog_slider 
        var $blog_slider = $('.blog-slider');
        $blog_slider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: false,
            dots: false,
            autoplay: true,
            margin: 30,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });

        
    // Portfolio Gallery slick part //

    $('.big-image').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-img',

        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
			},
            {
                breakpoint: 767,
                settings: {
                    vertical: false,
                    horizontal: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
			}
		  ]
    });

    $('.slider-img').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    slidesToShow: 3
                }
		}
	],
        asNavFor: '.big-image',
        dots: false,
        arrows: true,
        prevArrow: '<i class="fa fa fa-chevron-left slidPrv4"></i>',
        nextArrow: '<i class="fa fa-chevron-right slidNext4"></i>',
        centerPadding: '0px',
        centerMode: true,
        focusOnSelect: true,
    });

    });





    /*-------------------------------
        back to top
    ------------------------------*/
    $(document).on('click', '.bottomtotop', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 2000);
    });

    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function () {
        var $window = $(window);
        if ($window.scrollTop() > 0) {
            $(".mainmenu-area").addClass('nav-fixed');
        } else {
            $(".mainmenu-area").removeClass('nav-fixed');
        }

        /*---------------------------
            back to top show / hide
        ---------------------------*/
        var st = $(this).scrollTop();
        var ScrollTop = $('.bottomtotop');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
        lastScrollTop = st;

    });

    $(window).on('load', function () {

        $("html,body").animate({
            scrollTop: 0
        }, 100);

        new WOW().init();
        /*---------------------
            Preloader
        -----------------------*/
        var preLoder = $("#preloader");
        preLoder.addClass('hide');
        // var backtoTop = $('.back-to-top');
        /*-----------------------------
            back to top
        -----------------------------*/
        var backtoTop = $('.bottomtotop');
        backtoTop.fadeOut(100);

    });




});