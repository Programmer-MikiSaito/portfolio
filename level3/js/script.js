jQuery(function ($) {

  // hamburger
  $('.js-hamburger').on('click' , function (){
    if ($('.js-hamburger').hasClass('open')){
      $(this).removeClass('open');
      $('.js-drawer').fadeOut();
      $('html').removeClass('.fixed');
    }
    else{ $(this).addClass('open');
    $('.js-drawer').fadeIn();
    $('html').addClass('.fixed')
  };
  })

  // slider
  $(".slider").slick({
    autoplay: true, // 自動再生
    fade: true, // スライドをフェードイン・フェードアウト
    cssEase: 'linear',// アニメーション
    speed: 3000, // フェードアニメーションの速度設定
    arrows:false,
  });


});