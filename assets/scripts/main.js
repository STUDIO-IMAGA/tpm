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
  var IMAGA = {
    // All pages
    'common': {
      init: function() {

        if ($(window).width() > 769) {
          $('.navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(50).slideDown(100);
          }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(600).slideUp(50);
          });
          $('.navbar .dropdown > a').click(function() {
            location.href = this.href;
          });
        }

        // init Animate On Scroll
        AOS.init({
           offset: 220,
           startEvent: 'load',
           once: 'true',
        });

        // init review slider
        $(".review-slider").slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: true,
          centerMode: true,
          centerPadding: 0,
          draggable: true,
          mobileFirst: true,
          responsive: [
            {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              arrows: true
            }
          },
            {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              arrows: true
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true
            }
          }
        ]
        });

        // init Smooth Scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
          updateURL: false,
          offset: -2,
          topOnEmptyHash: true,
          durationMax: 1000
        });

        // Get scroll percentage
        function getScrollPercentage() {
          var h = document.documentElement,
          b = document.body,
          st = 'scrollTop',
          sh = 'scrollHeight';
          return (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
        }

        // Toggle scroll-to-top anchor
        document.addEventListener('scroll', function(){

          var percentage = Math.floor( getScrollPercentage() );

          if( percentage >= 40){
            document.getElementById("scroll-to-top").classList.add('showing');
            document.getElementById("scroll-to-top").classList.remove('hidden');
          }else{
            document.getElementById("scroll-to-top").classList.add('hidden');
            document.getElementById("scroll-to-top").classList.remove('showing');
          }
        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        // Set the offset when entering page with hash present in the url
        window.setTimeout(function(){
          if (location.hash.length !== 0) {
            window.scrollTo(window.scrollX, window.scrollY + 2 );
          }
        }, 0);
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
      var namespace = IMAGA;
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
