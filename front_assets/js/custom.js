(function($) {

    "use strict";


    // Preloder
    $(window).on('load', function() {
        $('.ajax-img').each(function() {
            $(this).attr('src', $(this).attr('data-src'))
        })
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow':'visible'});
    });

    // Wow Animation
    new WOW().init();

    // Video banner bg
    $('#video-bg').YTPlayer({
      fitToBackground: true,
      videoId: 'slObvE-nxEI',
      start: 0,
      mute: true
    });



    // Navbar Fixed Top On Scroll
    var affixElement = '#navbar-main';

        $(affixElement).affix({
          offset: {
            // Distance of between element and top page
            top: function () {
              return (this.top = $(affixElement).offset().top)
            }
          }
    });


    // CounterUp
    $('.count').counterUp({
        delay: 10, // the delay time in ms
        time: 2000 // the speed time in ms
    });


    // Scroll to top
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp',      // Element ID
            scrollDistance: 300,         // Distance from top/bottom before showing element (px)
            scrollFrom: 'top',           // 'top' or 'bottom'
            scrollSpeed: 300,            // Speed back to top (ms)
            easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
            animation: 'fade',           // Fade, slide, none
            animationSpeed: 200,         // Animation speed (ms)
            scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
            scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
            scrollText: 'Scroll to top', // Text for element, can contain HTML
            scrollTitle: false,          // Set a custom <a> title if required.
            scrollImg: true,            // Set true to use image
            activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647           // Z-Index for the overlay
        });
    });


    // Topbar Searchbox
    $(document).ready(function(){
        
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.on('click', function(){
            if(isOpen == false){
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('searchbox-open');
                inputBox.focusout();
                isOpen = false;
            }
        });  
         submitIcon.on('mouseup',function(){
                return false;
            });
        searchBox.on('mouseup', function(){
                return false;
            });
        $(document).on('mouseup', function(){
                if(isOpen == true){
                    $('.searchbox-icon').css('display','block');
                    submitIcon.click();
                }
            });
    });
        function buttonUp(){
            var inputVal = $('.searchbox-input').val();
            inputVal = $.trim(inputVal).length;
            if( inputVal !== 0){
                $('.searchbox-icon').css('display','none');
            } else {
                $('.searchbox-input').val('');
                $('.searchbox-icon').css('display','block');
            }
        }


    // text carousel
    $('.text-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        nav: false,
        dots:false,
        autoplayTimeout:3000,
        autoplayHoverPause: true,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp'
    });


    // owl-carousel for main-slider 
    $('.main-slider').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        margin: 0,
        autoplay:true,
        autoplayTimeout:4500,
        autoplayHoverPause:false,
        autoplaySpeed:1200,
        navText: [
                '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
            ],
        responsive: {
            0: {
                items:1
            },
            600:{
                items:1
            },
            1000: {
                items:1
            }
        }
    });


    // owl-carousel for testimonial 
    $('.testimonial-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin: 50,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        responsive: {
            0: {
                items:1,
            },
            600:{
                items:1,
            },
            1000: {
                items:1,
            },
        }
    });



    // discount carousel
    $('.discount-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        margin: 30,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items:1,
            },
            600:{
                items:2,
            },
            1000: {
                items:3,
            },
        }
    });

    // discount carousel
    $('.featured-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        margin: 30,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items:1,
            },
            600:{
                items:2,
            },
            1000: {
                items:3,
            },
        }
    });



    // owl-carousel for client
    $('.client-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        margin: 50,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        responsive: {
            0: {
                margin: 10,
                items: 2
            },
            480: {
                margin: 10,
                items: 3
            },
            600:{
                margin: 20,
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });



    // testimonial carousel-two
    $('.testimonial-carousel-two').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin: 50,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        responsive: {
            0: {
                margin: 10,
                items: 1
            },
            480: {
                margin: 10,
                items: 1
            },
            600:{
                margin: 20,
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // testimonial carousel-three
    $('.testimonial-carousel-three').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin: 50,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        responsive: {
            0: {
                margin: 10,
                items: 1
            },
            480: {
                margin: 10,
                items: 1
            },
            600:{
                margin: 20,
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });


    // testimonial carousel-four
    $('.testimonial-carousel-four').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin: 50,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        responsive: {
            0: {
                margin: 10,
                items: 1
            },
            480: {
                margin: 10,
                items: 1
            },
            600:{
                margin: 20,
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // testimonial carousel-five
    $('.testimonial-carousel-five').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin: 50,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        responsive: {
            0: {
                margin: 10,
                items: 1
            },
            480: {
                margin: 10,
                items: 1
            },
            600:{
                margin: 20,
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });



    // lightbox
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });


    // Parallax 
    $('.parallax').jarallax({
        // parallax effect speed. 0.0 - 1.0
        speed: 0.5
    });


    // Video popup
    jQuery("a.demo").YouTubePopUp();

    //Setup Filterizr
    if($('.filtr-container').length){
        $('.filtr-container').imagesLoaded(function() {
            var filterizr = $('.filtr-container').filterizr();
        });
    }


    // Price Slider
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 100000,
        values: [ 10000, 50000 ],
        slide: function( event, ui ) {
          $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      $( "#amount1" ).val(ui.values[ 0 ]);
      $( "#amount2" ).val(ui.values[ 1 ]);
        }
      });
      $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
       " - $" + $( "#slider-range" ).slider( "values", 1 ) );


    // ----------- Ajax Contact script -----------//
    $(function() {
        // Get the form.
        var form = $('#ajax-contact');

        // Get the messages div.
        var formMessages = $('#form-messages');

        // Set up an event listener for the contact form.
        $(form).submit(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#name').val('');
                $('#subject').val('');
                $('#email').val('');
                $('#message').val('');
            })

            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
        });
    });

    // sorting form
    $('.sorting-form select').on('change', function() {
        $('.sorting-form').submit()
    })

    $('.open-model').click(function() {
        $('.'+$(this).attr('data-model')).toggle()
    })

    $('.close-modal').click(function() {
        $('.glue-modal').hide()
    })

    var t = $("#profile-side-menu");
    t.length && t.find("div.droparrow").on("click", function() {
        var t = $(this),
            n = t.next(".level2");
        n.length && !n.hasClass("expand") && (t.hasClass("expand") ? (t.removeClass("expand"), n.slideUp()) : (t.addClass("expand"), n.slideDown()))
    })

    $('.add-watch').on('click', function() {
        var id = $(this).attr('data-id')
        var url = $(this).attr('data-url')
        $.ajax({
            url: url,
            type: "post",
            data: {id: id} ,
            success: function (response) {
               if (response == 'done') {
                $('.add-watch').hide()
                $('.add-unwatch').show()
                //$('.add-watch').text('-Unwatch')
                //$('.add-watch').addClass('add-unwatch')
                //$('.add-watch').removeClass('add-watch')
               }              

            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }


        });
    })

    $('.add-unwatch').on('click', function() {
        var id = $(this).attr('data-id')
        var url = $(this).attr('data-url')
        $.ajax({
            url: url,
            type: "post",
            data: {id: id} ,
            success: function (response) {
                $('.add-unwatch').hide()
                $('.add-watch').show()        

            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }


        });
    })

    // var o = $.extend({
    //     minLimit: 100,
    //     currentLimit: 0,
    //     usedLimit: 0
    // }, t),
    // i = {
    //     max: 1320,
    //     min: Math.floor((o.currentLimit + o.usedLimit) / 100),
    //     usedWidth: 0,
    //     currentWidth: 0
    // },
    // r = {
    //     max: 132e3,
    //     min: o.usedLimit + o.currentLimit,
    //     step: 100,
    //     newLimit: 0,
    //     lotCount: 0,
    //     minLotCount: Math.floor((o.usedLimit + o.currentLimit) / 6600),
    //     maxLotCount: 20,
    //     maxDepositPerTime: 1e4,
    //     lockDeposit: !1
    // }



    var o = $.extend({
        minLimit: 100,
        currentLimit: 0,
        usedLimit: 0
    }, t),
    i = {
        max: 1320,
        min: Math.floor((o.currentLimit + o.usedLimit) / 100),
        usedWidth: 0,
        currentWidth: 0
    },
    r = {
        max: 132e3,
        min: o.usedLimit + o.currentLimit,
        step: 100,
        newLimit: 0,
        lotCount: 0,
        minLotCount: Math.floor((o.usedLimit + o.currentLimit) / 6600),
        maxLotCount: 20,
        maxDepositPerTime: 1e4,
        lockDeposit: !1
    },
    l = 6.6,
    s = .151515151515,
    u = {};
    $.each(["#bidding-slider", "#bl-new", "#bl-new-input", "#bl-required-deposit", "#bl-count", ".slider-main", ".slider-used", ".slider-current", ".ui-slider-range"], function(t, n) {
        var o = n.replace(/#|\./g, "");
        u[o] = $(n)
    })
    $('#bidding-slider').slider({
        animate: !0,
        range: "min",
        value: 66,
        max: i.max,
        min: i.min,
        step: 1,
        change: function(e, t) {
            d(t)
        },
        slide: function(e, t) {
            d(t)
        }
        
    })
    console.log(i.max)
    var n = function() {
        function e() {
            (0, o.default)(this, e);
            var t = app.repo.get("lang");
            switch (t = t || "") {
                case "en":
                    this.numberSeparator = ",";
                    break;
                case "ru":
                    this.numberSeparator = " ";
                    break;
                default:
                    this.numberSeparator = ","
            }
        }
        return (e, [{
            key: "separateNumber",
            value: function(e, t) {
                for (var n = t || this.numberSeparator;
                    /(\d+)(\d{3})/.test(e.toString());) e = e.toString().replace(/(\d+)(\d{3})/, "$1" + n + "$2");
                return e
            }
        }]), e
    }();

    Number.prototype.toCurrencyString=function(){
        return this.toFixed().replace(/(\d)(?=(\d{3})+\b)/g,'$1,');
    }

    $("span.subtract").on("click", function(n) {
        var bid = u["bl-count"].val()
        bid = parseInt(bid)
        if (bid > 1) {
            var new_bid = bid - 1;
            u["bl-count"].val(new_bid)
            u["bl-count"].val(new_bid)
            var diposit = $("#deposit-input").val()
            diposit = diposit.replace("$", "");
            diposit = diposit.replace(",", "");
            diposit = parseInt(diposit)
            diposit = diposit / bid
            diposit = diposit * new_bid
            u["bl-required-deposit"].html("+$"+ diposit.toCurrencyString())
            $("#deposit-input").val(diposit.toCurrencyString())
            var amount = $("#bl-new-input").val()
            amount = amount.replace("$", "");
            amount = amount.replace(",", "");
            amount = parseInt(amount)
            amount = amount / bid
            amount = amount * new_bid
            u["bl-new"].html("+$"+ amount.toCurrencyString())
            $("#bl-new-input").val("$"+ amount.toCurrencyString())
            $("#bidding-slider").slider('value',amount.slice(0, -2));
        }
    })
    $("span.add").on("click", function(n) {
        var bid = u["bl-count"].val()
        bid = parseInt(bid)
        if (bid < 20) {
            var new_bid = bid + 1;
            u["bl-count"].val(new_bid)
            var diposit = $("#deposit-input").val()
            diposit = diposit.replace("$", "");
            diposit = diposit.replace(",", "");
            diposit = parseInt(diposit)
            diposit = diposit / bid
            diposit = diposit * new_bid
            u["bl-required-deposit"].html("+$"+ diposit.toCurrencyString())
            $("#deposit-input").val("$"+ diposit.toCurrencyString())
            var amount = $("#bl-new-input").val()
            amount = amount.replace("$", "");
            amount = amount.replace(",", "");
            amount = parseInt(amount)
            amount = amount / bid
            amount = amount * new_bid
            u["bl-new"].html("+$"+ amount.toCurrencyString())
            $("#bl-new-input").val("$"+ amount.toCurrencyString())
            //amount = amount.split()
            //console.log(amount)
            $("#bidding-slider").slider('value',amount.toString().slice(0, -2));
        }
    })


    function g(e) {
        for (var t in n)
            if (n.hasOwnProperty(t)) {
                if (!(e >= (t *= 1))) break;
                p = 1 * n[t]
            }
    }

    function b(e) {
        return e = parseInt(e), isNaN(e) && (e = p), e < c ? c + p : e < d ? d : (e % p > 0 && (e -= e % p), e < c + p ? c + p : e > f ? f : e)
    }

    

    u["bl-required-deposit"].html("+$1,000")
    $("#deposit-input").val('$1000')
    u["bl-count"].val(1)
    u["bl-new"].html("$6,600")
    u["bl-new-input"].val("$6,600");
    function d(t) {
        console.log(t)
        var o;
        r.newLimit = 100 * t.value, o = r.newLimit - r.min, (r.min + o < 6600 || !r.min && o < 6600) && (o = 6600 - r.min, r.newLimit = 6600), o < 0 && (o = 0, r.newLimit = r.min), o > 0 ? $("#bidding-limit-submit").removeClass("disabled") : $("#bidding-limit-submit").addClass("disabled");
        //console.log(r.newLimit)
        //var i = n.separateNumber(r.newLimit);
        var i = r.newLimit.toCurrencyString()
        u["bl-new"].html("$" + i), u["bl-new-input"].val("$" + i);
        var a = function(e) {
            var t = e / l,
                n = e % l;
            n && (n *= s);
            return Math.floor(t + n)
        }(o);
        r.lockDeposit = a > r.maxDepositPerTime, u["bl-required-deposit"].html("+$" + a.toCurrencyString()), $("#deposit-input").val(a), r.lotCount = r.newLimit > r.max ? r.maxLotCount : Math.floor(r.newLimit / 6600), u["bl-count"].val(r.lotCount), $("#payment-form").length && (o > 0 ? $("#payment-form__submit").removeClass("disabled") : $("#payment-form__submit").addClass("disabled"), $("#payment-form__deposit").html(a.toCurrencyString()), $("#payment-form__total").html(a.toCurrencyString()), $("#PaymentForm_deposit").val(a), $("#payment-form__maximum-bid").html(r.newLimit.toCurrencyString()))
    }




})(window.jQuery);

