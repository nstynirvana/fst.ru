$(document).ready(function () {

    $("input[type=text]").keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

    $('.form__input').on('keyup', function () {
        let widthInput = document.getElementById('calc[width]').value;

        let width = parseFloat(widthInput);

        let area = 880 * width;

        if (isNaN(width)) {
            $('#cost').text('0 ₽');
        } else {
            let area = 880 * width;
            // console.log(area);
            $.ajax({
                type: 'POST',
                url: '/',
                data: $("#feedbackForm").serialize(),
                success: function (data) {
                    $('#cost').text(area.toLocaleString('ru-RU') + ' ₽');
                },
                error: function (response) {
                    console.log("Ошибка при отправке формы");
                }
            });
        }

    })


    $("body").on("click", ".btn-form", function () {

        var nameForm = $(this).data("name");

        $(".ajax-form-send .form-type-circle").attr("value", nameForm);

        $.fancybox.open({
            src: $(this).attr("href"),
            type: 'inline',
            opts: {
                buttons: [],
                baseClass: "custom-fancybox",
            }
        });

        return false;
    });

    $("body").on("submit", ".ajax-form-send", function (event) {
        event.preventDefault();
        var form = $(this).serialize();
        var formType = $(this).data("formtype");
        var pageUrl = '/amo/amo.php'

        $.ajax({

            type: "POST",
            url: pageUrl,
            data: form,
            cache: false,
            processData: false,
            error: function (jqXHR, exception) {
                if (jqXHR.status === 0) {
                    alert('Not connect.\n Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found. [404]');
                } else if (jqXHR.status == 500) {
                    alert('Internal Server Error [500].');
                } else if (exception === 'parsererror') {
                    alert('Requested JSON parse failed.');
                } else if (exception === 'timeout') {
                    alert('Time out error.');
                } else if (exception === 'abort') {
                    alert('Ajax request aborted.');
                } else {
                    alert('Uncaught Error.\n' + jqXHR.responseText);
                }
            },
            success: function (result) {
                if (result.indexOf("success") != -1) {

                    $('input').val('');
                    $('textarea').val('');
                    $('#cost').text('0 ₽');
                    $.fancybox.close();

                    if ( $('.popUp-body').hasClass('price-thanks') ) {
                        $.fancybox.open({
                            src: "#price-message",
                            type: 'inline',
                            opts: {
                                buttons: [],
                                baseClass: "custom-fancybox",
                                afterShow: function (instance, current) {
                                    console.info('done!');
                                }
                            }
                        });
                    } else {
                        $.fancybox.open({
                            src: "#success-message",
                            type: 'inline',
                            opts: {
                                buttons: [],
                                baseClass: "custom-fancybox",
                                afterShow: function (instance, current) {
                                    console.info('done!');
                                }
                            }
                        });
                    }

                }

            }
        });

        return false;
    });


    $("body").on("click", ".section-tabs a.btn", function () {

        var itemContainer = $(this).closest(".section-tabs").data("searchtabs");
        var itemSelector = $(this).data("selector");

        if ($(this).closest(".section-tabs").data("worktype") == "tabs") {

            if ($(this).hasClass("inactive")) {
                $(this).closest(".section-tabs").find("a.btn").addClass("inactive");
                $(this).removeClass("inactive");
                var type = $(this).data("type");
                $("." + itemContainer + " ." + itemSelector).hide();
                $("." + itemContainer + " ." + itemSelector + ".item-" + type).show();
            }

        } else {

            if ($(this).hasClass("inactive")) {
                $(this).closest(".section-tabs").find("a.btn").addClass("inactive");
                $(this).removeClass("inactive");
                var type = $(this).data("type");
                $("." + itemContainer + " ." + itemSelector).hide();
                $("." + itemContainer + " ." + itemSelector + ".item-" + type).show();
            } else {
                $(this).addClass("inactive");
                $("." + itemContainer + " ." + itemSelector).show();
            }

        }

        return false;
    });


    $("input.phoneNumber").mask("+7 (999)-999-99-99");
    $(".fancybox").fancybox();
    $(".selectric").selectric();

    $("body").on("click", ".openPopUp", function () {

        $.fancybox.open({
            src: $(this).attr("href"),
            type: 'inline',
            opts: {
                buttons: [],
                baseClass: "custom-fancybox",
            }
        });

        return false;
    });

    let menuBtn = document.querySelector('.menu-btn');
    let menu = document.querySelector('.menu');
    menuBtn.addEventListener('click', function () {
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
    })

    $("body").on("click", ".closeFancy", function () {
        $.fancybox.close();
        return false;
    });

    $("body").on("click", ".mobile-menu-opener a", function () {

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(".mobile-menu-container").removeClass("show");
            $(".header-menu-container").removeClass("open");
        } else {
            $(this).addClass("active");
            $(".mobile-menu-container").addClass("show");
            $(".header-menu-container").addClass("open");
        }


        return false;
    });

    //СКОЛЬЗЯЩЯЯ ШАПКА САЙТА
    $(function () {

        let header = $('.header');
        let content = $('.content');

        $(window).scroll(function () {

            if ($(this).scrollTop() > 0) {
                header.addClass('header_fixed');
                content.css('padding-top','90px');
            } else {
                header.removeClass('header_fixed');
                content.css('padding-top','0');
            }

        });
    });
    //СКОЛЬЗЯЩЯЯ ШАПКА САЙТА

    //FAQ РАЗВОРОТ
    $("body").on("click", ".faq-item", function () {

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).find(".icon-faq").css("display","inline-block");
            $(this).find(".icon-faq-open").css("display","none");
            $(this).removeClass("active");
            $(this).closest(".faq-item").find(".faq-item-body").slideUp(300);
        } else {
            $(this).addClass("active");
            $(this).find(".icon-faq").css("display","none");
            $(this).find(".icon-faq-open").css("display","inline-block");
            $(this).closest(".faq-item").find(".faq-item-body").slideDown(300);
        }

        return false;
    });
    //FAQ РАЗВОРОТ


    $('.gallery-block-container').slick({
        dots: true,
        arrows: true,
        autoplay: true,
        speed: 300,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.gallery-arrow.arrow-left'),
        nextArrow: $('.gallery-arrow.arrow-right'),
        appendDots: $('.gallery-block-navigation .nav'),
    });


    $('.slider-constructor-pictures').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        lazyLoad: 'ondemand',
        asNavFor: '.slider-constructor-switch'
    });
    $('.slider-constructor-switch').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        asNavFor: '.slider-constructor-pictures',
        slidesToShow: 16,
        slidesToScroll: 1,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 8,
                }
            },
            {
                breakpoint: 676,
                settings: {
                    slidesToShow: 6,
                }
            },
            {
                breakpoint: 424,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 390,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });


    $('.interactive-pic').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        lazyLoad: 'ondemand',
        asNavFor: '.inactive-slider'
    });

    $('.inactive-slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        asNavFor: '.interactive-pic',
        slidesToShow: 5,
        slidesToScroll: 1,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 948,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });

    $('.actions-slider-container').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        initialSlide: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.actions-slider-container-btns .arrow-prev'),
        nextArrow: $('.actions-slider-container-btns .arrow-next'),
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.photos-slider-container').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        initialSlide: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.photos-slider-container-btns .arrow-prev'),
        nextArrow: $('.photos-slider-container-btns .arrow-next'),
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.main-banner-picture').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        vertical: true,
        verticalSwiping: true,
        // fade: true,
        asNavFor: '.slider-switch',

    });
    $('.slider-switch').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        vertical: true,
        verticalSwiping: true,
        asNavFor: '.main-banner-picture',
        dots: false,
        arrow: true,
        focusOnSelect: true
        // centerMode: true,
        // focusOnSelect: true
    });


});
