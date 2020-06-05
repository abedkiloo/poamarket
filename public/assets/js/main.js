(function ($) {
	"use strict";

    jQuery(document).ready(function($){
      $(".embed-responsive iframe").addClass("embed-responsive-item");
      $(".carousel-inner .item:first-child").addClass("active");
      
      $('[data-toggle="tooltip"]').tooltip();

      
      // Nice select js
      
      $('select:not(.selectpicker)').niceSelect();



      $('.menu-open').click( function (){
                
        $('.body-left-bar').toggleClass('activee');  
        $('.menu-open').toggleClass('toggle');  
                
      });
      

     // Hero slider js
     $(".site-hero-slider-aera").owlCarousel({
      items:5,
      nav:false,
      dot:true,
      loop:true,
      margin:20,
      autoplay:false,
      autoplayTimeout:3000,
      startPosition: 1,
      smartSpeed:1000,
      responsiveClass:true,
      responsive:{
        0:{
          items:1,  
        },
        768:{
          items:1,  
        },
        1000:{
          items:1,  
        }
      }
      
    
  });
      

    if($(window).width() <= 400){
      $('.searc-box-inner input').attr('placeholder','Search..')
    }
    $(window).resize(function() {
      if( $(this).width() < 400 ) {
        $('.searc-box-inner input').attr('placeholder','Search..')
      } else{
        $('.searc-box-inner input').attr('placeholder','Search for product')
      }
    });


    if($(window).width() < 900){
      $('.site-main-menu').addClass('site-main-mobile')
    }
    $(window).resize(function() {
      if( $(this).width() < 900 ) {
        $('.site-main-menu').addClass('site-main-mobile')
      } else{
        $('.site-main-menu').removeClass('site-main-mobile')
      }
    });



        
      // bootstrap selectpicker
      $('.selectpicker').selectpicker();

      // price range slider
      $( ".price-slider" ).slider({
        range: true,
        min: 0,
        max: 900,
        values: [ 210, 900 ],
        slide: function( event, ui ) {
          $( ".price-value" ).html( "<span>$" + ui.values[ 0 ] + ".00</span><span>$" + ui.values[ 1 ] +".00</span>");
        }
      });

      $( ".price-value" ).html( "<span>$" + $( ".price-slider" ).slider( "values", 0 ) +
      ".00</span><span>$" + $(".price-slider" ).slider( "values", 1 ) +".00</span>" );


      // owl carousel
      $(".hero-carousel").owlCarousel({
        items:1,
        nav:false,
        dot:true,
        loop:true,
        margin:20,
        autoplay:false,
        startPosition: 1,
        autoplayTimeout:3000,
        smartSpeed:1000,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
              
          },
          768:{
            items:1,
          },
          1000:{
            items:1,
          }
        }
      });




      jQuery('<div class="product-hero-quantity-nav"><div class="product-hero-quantity-button product-hero-quantity-up"><i class="fas fa-caret-up"></i></div><div class="product-hero-quantity-button product-hero-quantity-down"><i class="fas fa-caret-down"></i></div></div>').insertAfter('.product-hero-quantity input');
      jQuery('.product-hero-quantity').each(function() {
        var spinner = jQuery(this),
          input = spinner.find('input[type="number"]'),
          btnUp = spinner.find('.product-hero-quantity-up'),
          btnDown = spinner.find('.product-hero-quantity-down'),
          min = input.attr('min'),
          max = input.attr('max');
  
        btnUp.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue >= max) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue + 1;
          }
          spinner.find("input").val(newVal);
          spinner.find("input").trigger("change");
        });
  
        btnDown.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue <= min) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue - 1;
          }
          spinner.find("input").val(newVal);
          spinner.find("input").trigger("change");
        });
  
      });





      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        margin: '50',
        centerMode: false,
        focusOnSelect: true
      });

      $('.slider-popup').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 1000
      })
        
      $('.ht-1-carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        nextArrow: '<button class="hero-tab-next"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="hero-tab-prev"><i class="fas fa-chevron-left"></i></button>',
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
            // centerMode: true,
    
          }
    
        }, {
          breakpoint: 1070,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true
    
          }
        },  {
          breakpoint: 875,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        },
        {
          breakpoint: 615,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }
      ]
      })

      $('.ht-1-carousel-logo').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: '<button class="hero-tab-next"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="hero-tab-prev"><i class="fas fa-chevron-left"></i></button>',
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
            // centerMode: true,
    
          }
    
        }, {
          breakpoint: 1070,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true
    
          }
        },  {
          breakpoint: 875,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }
      ]
      })
      
      $('.site-megamenu__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: true
      })

      $('.product-slider__zoom').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
          verticalFit: true
        }
      });

      $('.product-slider__video').magnificPopup({
        disableOn: 300,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
      });


      $('.feature-m-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        autoplay: false,
        autoplaySpeed: 1000,
        responsive: [  {

          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
      })



      $('.site-main-menu-trigger').click(function(){
        $('.site-megamenu').removeClass('site-megamenu--visible')
        $('.site-main-menu-area .cat-btn').removeClass('active')
        $(this).parent().toggleClass('mobile-menu-visible')
        $(this).toggleClass('active')
      })

      $('.site-main-menu-area .cat-btn').click(function(){
        $('.site-main-menu-trigger').parent().removeClass('mobile-menu-visible')
        $('.site-main-menu-trigger').removeClass('active')
        $(this).toggleClass('active')
        $('.site-megamenu').toggleClass('site-megamenu--visible')
      })


    });


    /**
 * Defines the bootstrap tabs handler.
 *
 * @param {string} element
 *  Element.
 */
var tabsActions = function (element) {
  this.element = $(element);

  this.setup = function () {
    if (this.element.length <= 0) {
      return;
    }
    this.init();
    // Update after resize window.
    var resizeId = null;
    $(window).resize(function () {
      clearTimeout(resizeId);
      resizeId = setTimeout(() => {this.init()}, 50);
    }.bind(this));
  };
  
  this.init = function () {
 
    // Add class to overflow items.
    this.actionOverflowItems();
    var tabs_overflow = this.element.find('.overflow-tab');
 
    // Build overflow action tab element.
    if (tabs_overflow.length > 0) {
      if (!this.element.find('.overflow-tab-action').length) {
        var tab_link = $('<a>')
          .addClass('nav-link')
          .attr('href', '#')
          .attr('data-toggle', 'dropdown')
          .text('...')
          .on('click', function (e) {
            e.preventDefault();
            $(this).parents('.nav.nav-tabs').children('.nav-item.overflow-tab').toggle();
          });

        var overflow_tab_action = $('<li>')
          .addClass('nav-item')
          .addClass('overflow-tab-action')
          .append(tab_link);

        // Add hide to overflow tabs when click on any tab.
        this.element.find('.nav-link').on('click', function (e) {
          $(this).parents('.nav.nav-tabs').children('.nav-item.overflow-tab').hide();
        });
        this.element.append(overflow_tab_action);
      }
      
      this.openOverflowDropdown();
    }
    else {
      this.element.find('.overflow-tab-action').remove();
    }
 };
 
  this.openOverflowDropdown = function () {
    var overflow_sum_height = 0;
    var overflow_first_top = 41;
    
    this.element.find('.overflow-tab').hide();
    // Calc top position of overflow tabs.
    this.element.find('.overflow-tab').each(function () {
      var overflow_item_height = $(this).height() - 1;
      if (overflow_sum_height === 0) {
        $(this).css('top', overflow_first_top + 'px');
        overflow_sum_height += overflow_first_top + overflow_item_height;
      }
      else {
        $(this).css('top', overflow_sum_height + 'px');
        overflow_sum_height += overflow_item_height;
      }

    });
  };

  this.actionOverflowItems = function () {
    var tabs_limit = this.element.width() - 100;
    var count = 0;
    
    // Calc tans width and add class to any tab that is overflow.
    for (var i = 0; i < this.element.children().length; i += 1) {
      var item = $(this.element.children()[i]);
      if (item.hasClass('overflow-tab-action')) {
        continue;
      }
      
      count += item.width();
      if (count > tabs_limit) {
        item.addClass('overflow-tab');
      }
      else if (count < tabs_limit) {
        item.removeClass('overflow-tab');
        item.show();
      }
    }
  };
};

// Related post slider js
              
$(".rlt-pr-slider").owlCarousel({
  items:5,
  nav:true,
  navText:['<i class="fal fa-long-arrow-left"></i>', '<i class="fal fa-long-arrow-right"></i>'],
  dot:false,
  loop:true,
  margin:20,
  autoplay:false,
  autoplayTimeout:3000,
  smartSpeed:1000,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
         
      },
      768:{
          items:3,
         
      },
      1000:{
          items:3,
         
      }
  }
  

});

var tabsAction = new tabsActions('.more-cat-wrapper .nav-tabs');
tabsAction.setup();



    jQuery(window).load(function(){
      

      // list vew and grid view functionality
      $('#list').click(function(event){
        event.preventDefault();
        $('#product-showcase .item').addClass('list-group-item');
      })

      $('#grid').click(function(event){
        event.preventDefault();
        $('#product-showcase .item').removeClass('list-group-item');
        $('#product-showcase .item').addClass('grid-group-item');
      });

      // toggle action class on listView and gridView
      var container = document.getElementById("btnContainer");
      var btns = container.getElementsByClassName("product-showcase__btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active-grid");
          current[0].className = current[0].className.replace(" active-grid", "");
          this.className += " active-grid";
        });
      }
    });


}(jQuery));	


