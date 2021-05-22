$ = jQuery.noConflict()

$(document).ready(function () {
  // Inicializar aos
  AOS.init()

  // Propiedades de scroll de menu
  var prevScrollpos = $(window).scrollTop() + 70

  $(window).scroll(function () {
    var currentScrollPos = $(window).scrollTop()
    if ($(window).scrollTop() > 70) {
      if (prevScrollpos > currentScrollPos) {
        $('#masthead').css('top', '0')
        $('#masthead').addClass('actived')
        var brandtwo = $('#brand').data('brandtwo')
        $('#brand').attr('src', brandtwo)
      } else {
        $('#masthead').css('top', '-75px')
      }
      prevScrollpos = currentScrollPos
    } else {
      var brand = $('#brand').data('brand')

      $('#masthead').removeClass('actived')
      $('#brand').attr('src', brand)
    }
  })

  // #Propiedades Menu Mobile

  $('.site-header-sandwich').click(function () {
    $('#masthead').toggleClass('active')
    $('.site-header-sandwich').toggleClass('active')
    $('.site-header-nav').toggleClass('active')
    if ($('.site-header-sandwich').hasClass('active')) {
      var brandtwo = $('#brand').data('brandtwo')
      $('#brand').attr('src', brandtwo)
    } else {
      var brand = $('#brand').data('brand')
      $('#brand').attr('src', brand)
    }
  })

  // #Propiedades Smooth Scrolling

  $('a').on('click', function (event) {
    if (this.hash !== '') {
      event.preventDefault()
      var hash = this.hash
      $('html, body').animate(
        {
          scrollTop: $(hash).offset().top,
        },
        1000,
        function () {
          window.location.hash = hash
        }
      )
    }
  })

  // #Propiedades Input

  $('.input-field').focusin(function (e) {
    $(this).addClass('active')
  })

  $('.input-field').focusout(function (e) {
    if ($(this).find('.wpcf7-form-control-wrap input').attr('value').length <= 0) {
      $(this).removeClass('active')
    } else if ($(this).find('.wpcf7-form-control-wrap input').attr('value').length >= 0) {
      $(this).addClass('active')
    }
  })

  // #Propiedades Modal

  $('.close').click(function () {
    var modal = $('.close').data('modal')
    $('#' + modal).removeClass('active')
  })

  $('.overlay').click(function () {
    var modal = $('.close').data('modal')
    $('#' + modal).removeClass('active')
  })

  // #Propiedades Carousel

  function addCarousel(element, index, number, mover, margin, itemstablet, loop, flechas, dots, autoplay, velocidad, animateIn, animateOut, autoWidth, slideBy, autoWidthMobile, margindesktop) {
    $('.' + element + '.owl-carousel').owlCarousel({
      loop: loop,
      margin: margin,
      nav: flechas,
      dots: dots,
      autoplay: autoplay,
      mouseDrag: mover,
      startPosition: index,
      autoplayTimeout: velocidad || 3000,
      animateOut: animateOut,
      animateIn: animateIn,
      autoWidth: autoWidthMobile,
      items: number,
      slideBy: slideBy || 1,
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          autoWidth: autoWidthMobile,
        },
        600: {
          items: itemstablet,
          mouseDrag: false,
          autoWidth: autoWidth,
          margin: margindesktop,
        },
        1000: {
          items: itemstablet,
          autoWidth: autoWidth,
          margin: margindesktop,
        },
      },
    })
  }
  addCarousel('hero-container', 0, 1, true, 0, 1, true, true, false, true, 5000)
})
