//////////////////////////////////////////////////////  //
//    EVENTS ON DOCUMENT READY                          //
//////////////////////////////////////////////////////  //

$(document).ready(function () {
    "use strict";

    //// PRELOADER TRIGGER
    $(window).on("load", function() {
        $(".loading").fadeOut(300);
    });

       // Show Color Option Div When Click On The Gear
    $(".gear-check").click(function () {
        $(".color-option").fadeToggle();
    });
    // Change Theme Color On Click
    var colorLi = $(".color-option li");
    colorLi.click(function () {
        $("link[href*='color']").attr("href", $(this).attr("data-value"));
    });

    //// FIXED NAVBAR
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $('.navbar').addClass('fixed');
        } else {
            $('.navbar').removeClass('fixed');
        }
    });

    //// SMOTH SCROLL
    $.scrollIt({
        topOffset: -80
    });

    //// COLLAPSED MENU CLOSE ON CLICK
    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });

    //// SCROLL SPY TRIGGER
    $('body').scrollspy({
        target: '.navbar-collapse',
        offset: 195
    });

    //// ISOTOPE TRIGGER
    var $grid = $('.work-content').isotope({
      itemSelector: '.work-item',
      stagger: 30
    });
    $('.filter-work').on( 'click', '.button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });
    // change is-checked class on buttons
    $('.button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'a', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });

    //// MASONRY
    $('.work-content').isotope({
      itemSelector: '.work-caption img',
      masonry: {
        columnWidth: 0
      }
    });

    //// MAGNIFIC POPUP TRIGGER
    $('.modal-image').magnificPopup({
      type: 'image'
    });

    // OWL CAROUSEL TRIGGER
    $('.owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        dots: true
     });

    //// PARSLEY TRIGGER
    $('.cont-fo').parsley();

});