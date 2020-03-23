$ = jQuery.noConflict();

$(document).ready(function () {

  // Inicializar aos

  AOS.init();

  // #Propiedades Menu Mobile

  $('.sandwich').click(function () {
    $('.sandwich').toggleClass('active');
    $('.container-nav').toggleClass('active');
  });

  // #Propiedades Smooth Scrolling

  $("a").on('click', function (event) {

    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function () {

        window.location.hash = hash;
      });
    }
  });

  // #Propiedades Input

  $('.input-field').focusin(function (e) {
    $(this).addClass('active');
  });

  $('.input-field').focusout(function (e) {
    if ($(this).find('.wpcf7-form-control-wrap input').attr('value').length <= 0) {
      $(this).removeClass('active');
    } else if ($(this).find('.wpcf7-form-control-wrap input').attr('value').length >= 0) {
      $(this).addClass('active');
    }
  });

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
    $("." + element + ".owl-carousel").owlCarousel({
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


        }
      }
    });
  }

  owl.on('next.owl.carousel', function (event) {
    var pos = parseInt($('.pageinitial').html()) + 1
    if (pos < 3) {
      $('.pageinitial').html(pos)
    }
  })

  owl.on('prev.owl.carousel', function (event) {
    var posEnd = parseInt($('.pageinitial').html()) - 1
    if (posEnd > 0) {
      $('.pageinitial').html(posEnd)
    }
  })

  $('.arrowNext').click(function () {
    owl.trigger('next.owl.carousel');
  })

  $('.arrowPrev').click(function () {
    owl.trigger('prev.owl.carousel', [300]);
  })

  if (window.matchMedia("(max-width: 768px)").matches) {

  } else {
  }

  // Modal de Biografia
  $('.bio').click(function (e) {
    var bio = e.target.parentNode.parentNode.getAttribute('id')
    var title = $('#' + bio).find('.member__name').html()
    var contenido = $('#' + bio).find('.member__content').html()
    var image = $('#' + bio + ' .img').data("image");
    var cargo = $('#' + bio).find('.member__position').html()
    var empresa = $('#' + bio).find('.member__work').html()

    $('#modalMiembro .modal-content .text h3').html(title)
    $('#modalMiembro .modal-content .text span').html(cargo + ' - ' + empresa)
    $('#modalMiembro .modal-content .text .contenido-bio').html(contenido)
    document.querySelector('#modalMiembro .modal-content .imagen').style.background = 'url(' + image + `)`
    $('#modalMiembro').addClass('active')
  })
});