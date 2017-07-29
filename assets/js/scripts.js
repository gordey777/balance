// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}

jQuery(document).ready(function() {
  function top_padding() {
    var top_padding = $('header').height() + 50;
    $('.section-1').css('padding-top', top_padding + 'px');
  }
  top_padding();
  jQuery(window).resize(function() {
    top_padding();

  });
  //SLIDERS OPTIONS
  jQuery('.two-slides.owl-carousel').owlCarousel({
    lazyLoad: true,
    slideSpeed: 5000,
    autoplay: true,
    autoplayHoverPause: true,
    loop: true,
    dots: false,
    smartSpeed: 1000,
    margin: 0,
    nav: true,
    navText: '',
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 2,
      }
    },
  });
  jQuery('.four-slides.owl-carousel').owlCarousel({
    lazyLoad: true,
    slideSpeed: 5000,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    loop: true,
    dots: false,
    smartSpeed: 1000,
    margin: 50,
    navText: '',
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      }
    },
  });

  (function($) {
    $(function() {

      $('.tabs .tabs__caption').on('click', '.tab__label:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
      });

    });
  })(jQuery);


});
