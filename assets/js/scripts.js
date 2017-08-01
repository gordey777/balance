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


  $('#hamburger').click(function() {
    $('#hamburger').toggleClass('active');
    $('header .nav__header').toggleClass('open');
  });

  $('.footer_menu .menu-item-has-children').click(function() {
    $(this).siblings('li').removeClass('open');
    $(this).toggleClass('open');

  });

  //MAPS ACF
  if ($('body').hasClass('page-template-page-contacts')) {
    (function($) {

      /*
       *  new_map
       *
       *  This function will render a Google Map onto the selected jQuery element
       *
       *  @type  function
       *  @date  8/11/2013
       *  @since 4.3.0
       *
       *  @param $el (jQuery element)
       *  @return  n/a
       */

      function new_map($el) {

        // var
        var $markers = $el.find('.marker');


        // vars
        var args = {
          zoom: 16,
          center: new google.maps.LatLng(0, 0),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };


        // create map
        var map = new google.maps.Map($el[0], args);


        // add a markers reference
        map.markers = [];


        // add markers
        $markers.each(function() {

          add_marker($(this), map);

        });


        // center map
        center_map(map);


        // return
        return map;

      }

      /*
       *  add_marker
       *
       *  This function will add a marker to the selected Google Map
       *
       *  @type  function
       *  @date  8/11/2013
       *  @since 4.3.0
       *
       *  @param $marker (jQuery element)
       *  @param map (Google Map object)
       *  @return  n/a
       */

      function add_marker($marker, map) {

        // var
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        // create marker
        var marker = new google.maps.Marker({
          position: latlng,
          map: map
        });

        // add to array
        map.markers.push(marker);

        // if marker contains HTML, add it to an infoWindow
        if ($marker.html()) {
          // create info window
          var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
          });

          // show info window when marker is clicked
          google.maps.event.addListener(marker, 'click', function() {

            infowindow.open(map, marker);

          });
        }

      }

      /*
       *  center_map
       *
       *  This function will center the map, showing all markers attached to this map
       *
       *  @type  function
       *  @date  8/11/2013
       *  @since 4.3.0
       *
       *  @param map (Google Map object)
       *  @return  n/a
       */

      function center_map(map) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each(map.markers, function(i, marker) {

          var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

          bounds.extend(latlng);

        });

        // only 1 marker?
        if (map.markers.length == 1) {
          // set center of map
          map.setCenter(bounds.getCenter());
          map.setZoom(16);
        } else {
          // fit to bounds
          map.fitBounds(bounds);
        }

      }

      /*
       *  document ready
       *
       *  This function will render each map when the document is ready (page has loaded)
       *
       *  @type  function
       *  @date  8/11/2013
       *  @since 5.0.0
       *
       *  @param n/a
       *  @return  n/a
       */
      // global var
      var map = null;

      $(document).ready(function() {

        $('.acf-map').each(function() {

          // create map
          map = new_map($(this));

        });

      });

    })(jQuery);
  }



});
