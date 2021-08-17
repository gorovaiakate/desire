"use strict"

$(function () {

    $('.header__btn').on('click', function () {
        $('.rightside-menu').removeClass('rightside-menu--close');
    });
    $('.rightside-menu__close').on('click', function () {
        $('.rightside-menu').addClass('rightside-menu--close');
    });
    
    $('.menu__btn').on('click', function () {
        $('.menu').toggleClass('menu--open');
    });

    if($(window).width() < 651){
        $('.works-path__item--measurements').appendTo($('.works-path__box'));
    }
    $('.top__slider').slick({
        dots: true,
        arrows: false,
        fade: true,
        autoplay: true
    });
    $('.contact-slider__inner').slick({
        slidesToShow: 10,
        slidesToScroll: 10,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1700,
                settings: {
                    slidesToShow: 8,
                    slidesToScroll: 8,
                }
            },
            {
                breakpoint: 1511,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 6,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            },
            {
                breakpoint: 940,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3, 
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 391,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('.article-slider__box').slick({
        prevArrow:'<button class="slick-arrow slick-prev"><img src="images/arrow-l.svg" alt=""></button>',
        nextArrow:'<button class="slick-arrow slick-next"><img src="images/arrow-r.svg" alt=""></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
    });

    // Сообщение об отправке формы
    $(".ajax-contact__form").submit(function() {
        var str = $(this).serialize();
      
        $.ajax({
            type: "POST",
            url: "/php/sendmail.php",
            data: str,
            success: function(msg) {
                if(msg == 'OK') {
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr["success"]("Сообщение отправлено!")
                } else {
                result = msg;
                }
            }
        });
        return false;
    });
    $(".ajax-blog-one__form").submit(function() {
        var str1 = $(this).serialize();
      
        $.ajax({
            type: "POST",
            url: "/php/comment.php",
            data: str1,
            success: function(cmt) {
                if(cmt == 'OK') {
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr["success"]("Comment added!")
                    setTimeout(location.reload.bind(location), 2000);
                } else {
                    result = cmt; 
                }
            }
        });
        return false;
    });
});

$(function() {
    var mixer = mixitup('.gallery__inner-box', {
        load: {
            filter: '.category-living'
        }
    });
});