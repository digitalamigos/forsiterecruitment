/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        // PRELOADER
        (function () {

          jQuery(document).ready(function($) {
            $('body.page-template-page-homepage').addClass('preloading');
            $('#jsPreloader').addClass('active');   
          });
          

          $(window).on('load', function(){
              setTimeout(function(){
                $('body.page-template-page-homepage').removeClass('preloading');
                $('#jsPreloader').addClass('leaving');
             }, 2000);
          }); 

        })();


        // PARALLAX WINDOW
        (function () {
          $('.parallax-window').parallax();
        })(); 

        // HEADROOM
        (function() {
            var header = document.querySelector("#jsHeader");
            if(window.location.hash) {
              header.classList.add("headroom--unpinned");
            }
            var headroom = new Headroom(header, {
                tolerance: {
                  down : 0,
                  up : 0
                },
                offset : 100,
                classes: {
                  initial: "animated",
                  pinned: "slideInDown",
                  unpinned: "slideOutUp",
                  onUnpin : function() {
                    console.log("unpinned");
                  }
                }
            });
            headroom.init();
        }());


        // NAV MENU
        (function () {

            var navbar_toggler = $('.navbar-toggler');            
            var navportal_toggler = $('.navportal-toggler');
            var menu = $('.navmenu');
            var menu_close = menu.find('.navbar-close');
            var portal = $('.navportal');
            var portal_close = portal.find('.navbar-close');
            var obj = $('body');

            navbar_toggler.add(menu_close).on('click', function(event) {
              obj.removeClass('navportal-is-visible');
              navportal_toggler.text('Employee Portal');

              if(obj.hasClass('navmenu-is-visible')) {                
                obj.removeClass('navmenu-is-visible');                
              } else {
                obj.addClass('navmenu-is-visible');
                obj.find('.navbar-search').removeClass('navsearch-is-visible');
              }              
            });

            navportal_toggler.add(portal_close).on('click', function(event) {
              obj.removeClass('navmenu-is-visible');
              if(obj.hasClass('navportal-is-visible')) {
                obj.removeClass('navportal-is-visible');
                navportal_toggler.text('Employee Portal');
              } else {
                obj.addClass('navportal-is-visible');
                obj.find('.navbar-search').removeClass('navsearch-is-visible'); 
                navportal_toggler.text('Close Portal');
              }              
            });

        })(); 


        // NAV SEARCH
        (function () {          
          $('.search-toggler').on('click', function(event) {
            var navbar_search = $('.navbar-search');            
            var obj = $('body');

            if(navbar_search.hasClass('navsearch-is-visible')) {
              navbar_search.removeClass('navsearch-is-visible');              
            } else {
              navbar_search.addClass('navsearch-is-visible');
              obj.removeClass('navmenu-is-visible');
              obj.removeClass('navportal-is-visible');
            }
          });
        })(); 


        // SMOOTH HASH SCROLL
        (function () {
            // Select all links with hashes
            $('a[href*="#"]')
              // Remove links that don't actually link to anything
              .not('[href="#"]')
              .not('[href="#0"]')
              .click(function(event) {
                // On-page links
                if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                  // Figure out element to scroll to
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                  // Does a scroll target exist?
                  if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                      scrollTop: target.offset().top
                    }, 500, function() {
                      // Callback after animation
                      // Must change focus!
                      var $target = $(target);
                      $target.focus();
                      if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                      } else {                        
                        $target.attr('tabindex','-1').css('outline', '0'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                      }
                    });
                  }
                }
              });
        })();


        // BACK TO TOP
        (function () {
            // Back To Top
            var docElem = document.documentElement,
                didScroll = false,
                changeHeaderOn = 550;
                document.querySelector( '#back-to-top' );

            function init() {
                window.addEventListener( 'scroll', function() {
                    if( !didScroll ) {
                        didScroll = true;
                        setTimeout( scrollPage, 50 );
                    }
                }, false );
            }

            $(window).on('load scroll', function(event){
                var scroll = $(window).scrollTop();
                if (scroll >= 50) {
                    $("#back-to-top").addClass("show");
                } else {
                    $("#back-to-top").removeClass("show");
                }
            });

            $('a[href="#site"]').on('click',function(){
                $('html, body').animate({scrollTop: 0}, 'slow');
                return false;
            });
        })(); 



        // JOB ADDER
        (function () {          

          jQuery(document).ready(function($) {
            var ja_container = $('#ja-jobs-widget');

            ja_container.find('.ja-form .ja-field-container:eq(0), .ja-form .ja-field-container:eq(1), .ja-form .ja-field-container:eq(2)').wrapAll('<div class="row"></div>');            
          });          

        })(); 


        // SLICK SLIDER
        (function () {          
          $('#jsHeroSlider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
          });

          $('#jsFeaturedJobs').slick({
            dots: false,
            arrows: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
          });
        })();     

        $(window).on('load', function(event) {
            var container = $('#jsOurPartners');

            if(container.children().length >= 5) {
                container.slick({
                  dots: false,
                  arrows: false,
                  infinite: true,
                  speed: 300,
                  autoplay: true,
                  slidesToShow: 5,
                  slidesToScroll: 1,
                  variableWidth: true,

                  responsive: [
                    {
                      breakpoint: 992,
                      settings: {
                        slidesToShow: 4,
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 3,
                      }
                    },
                    {
                      breakpoint: 576,
                      settings: {
                        slidesToShow: 2,
                      }
                    }
                  ]
                });
            }            
          });


        // SCROLL REVEAL
        (function () {
          window.sr = new ScrollReveal();

          var hero = {
            origin   : "top",
            distance : "24px",
            duration : 1500,
            scale    : 1.05,
          };

          var fadeinup = {
            origin   : "bottom",
            distance : "64px",
            duration : 900,
            scale    : 1,
          };

          sr.reveal(".sr-fadeinup", fadeinup);
          sr.reveal(".sr-fadeindown", hero);
        })(); 


        // CONTACT FORM
        (function () {
          var $form = $('.contact-form');
          var validationErrors = false;
          
          $form.find('input[type=text], input[type=email],input[type=tel], textarea')
          .each(function(index, el) {
            $(el).wrap('<div class="input-wrapper"></div>');            
          });

          function isValidEmail(email) {
              var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
              return pattern.test(email);
          }

          function isValidNumber(phone) {
              var pattern = new RegExp(/^([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/i);
              return pattern.test(phone);
          }

          $form.on('blur', '.form-control', function(event) {
            var input = $(this);
            var parent = input.parent('.input-wrapper');
            var inputValue = input.val();
            var inputRequired = input.hasClass('wpcf7-validates-as-required');
            var inputType = input.attr('type');

            validationErrors = false;
            parent.removeClass('focused');

            if(inputRequired && inputValue === '') {
              validationErrors = true;
            } else if(inputType === 'email' && !isValidEmail(inputValue)) {
              validationErrors = true;
            } else if(inputType === 'tel' && !isValidNumber(inputValue)) {
              validationErrors = true;
            }

            if(validationErrors) {
              parent.removeClass('valid');
              parent.addClass('invalid');
            } else {
              parent.addClass('valid');
              parent.removeClass('invalid');              
            }

          }).on('focus', '.form-control', function(event) {
            var input = $(this);
            var parent = input.parent('.input-wrapper');

            parent.addClass('focused');
            parent.removeClass('valid invalid');
          });
        })(); 
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
