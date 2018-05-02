(function($) {

    "use strict";


    // Preloder
    $(window).on('load', function() {
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




})(window.jQuery);
function buttonUp(event) {
  if (event.keyCode == 13) {
    $('.searchbox').submit()
  }
}

$("#newslatter-form").submit(function(e) {

    var url = $(this).attr('action'); // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $(this).serialize(), // serializes the form's elements.
           success: function(data)
           {
                var data = JSON.parse(data)
                if (data.status === true) {
                    $('.subscribe-style-two').hide()
                }
                $('.newslatter-alert').hide()
                $('.success-'+data.status).show()
                $('.newslatter-message').text(data.message)
               //alert(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});