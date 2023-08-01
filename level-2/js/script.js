jQuery(function ($) {


  $('.js-hamburger').on('click', function () {
    if ($(this).hasClass('open')) {
      $('.js-drawer').fadeOut();
      $(this).removeClass('open');
      $('.logo-top').removeClass('open');
      $('.logo-open').removeClass('open');
      $('.hamburger__img').removeClass('open');
      $('.hamburger__open').removeClass('open');
      $('.header__nav-img').removeClass('open');
      $('html').removeClass('fixed');
    } else {
      $('.js-drawer').fadeIn();
      $(this).addClass('open');
      $('.logo-top').addClass('open');
      $('.logo-open').addClass('open');
      $('.hamburger__img').addClass('open');
      $('.hamburger__open').addClass('open');
      $('.header__nav-img').addClass('open');
      $('html').addClass('fixed');
    }
  });

  // slider
  $('.slider').slick({
    arrows: false,
    autoplay: true,
    autoplayspieed: 0,
    speed: 6000,
    infinite: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    auseOnDotsHover: false,
    cssEase: 'linear',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 767,
      settings: {slidesToShow: 2.3,}
    }]
  }); 
  // menu-slider
    $('.menu-slider').slick({
    arrows: false,
    autoplay: true,
    autoplayspieed: 0,
    speed: 6000,
    infinite: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    auseOnDotsHover: false,
    cssEase: 'linear',
    slidesToShow: 4.2,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 767,
      settings: {slidesToShow: 2.05,}
    }]
  }); 

  // accordion
  $(function () {

    $('.js-accordion-title').click(function(){
      $(this).siblings('.js-accordion-content').stop().slideToggle();
      $('.js-accordion-title').not($(this)).siblings('.js-accordion-content').slideUp();
      $(this).toggleClass('active');
      $('.js-accordion-title').not($(this)).removeClass('active');
    });

  });


});
