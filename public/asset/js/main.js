/*global $, jQuery, alert*/
$(document).ready(function() {

  'use strict';

  // ========================================================================= //
  //  //SMOOTH SCROLL
  // ========================================================================= //


  $(document).on("scroll", onScroll);

  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    $(document).off("scroll");

    $('a').each(function() {
      $(this).removeClass('active');
      if ($(window).width() < 768) {
        $('.main-nav').slideUp();
      }
    });

    $(this).addClass('active');

    var target = this.hash,
        menu = target;

    target = $(target);
    $('html, body').stop().animate({
      'scrollTop': target.offset().top - 80
    }, 500, 'swing', function() {
      window.location.hash = target.selector;
      $(document).on("scroll", onScroll);
    });
  });


  function onScroll(event) {
    if ($('.informasi').length) {
      var scrollPos = $(document).scrollTop();
      $('header nav ul li a ').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
      });
    }
  }
  // ========================================================================= //
  //  //NAVBAR SHOW - HIDE
  // ========================================================================= //

var siteCarousel = function () {
    if ( $('.nonloop-block-13').length > 0 ) {
      $('.nonloop-block-13').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        stagePadding: 0,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: true,
        navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
        responsive:{
          600:{
            margin: 0,
            stagePadding: 0,
            items: 1
          },
          1000:{
            margin: 0,
            stagePadding: 0,
            items: 2
          },
          1200:{
            margin: 0,
            stagePadding: 0,
            items: 3
          }

        }
      });
    }

    if ( $('.slide-one-item').length > 0 ) {
      $('.slide-one-item').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        stagePadding: 0,
        margin: 0,
        autoplay: true,
        pauseOnHover: false,
        nav: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">']
      });
    }


    if ( $('.nonloop-block-4').length > 0 ) {
      $('.nonloop-block-4').owlCarousel({
        center: true,
        items:1,
        loop:false,
        margin:10,
        nav: true,
        navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
        responsive:{
          600:{
            items:1
          }
        }
      });
    }

  };
  siteCarousel();

});


