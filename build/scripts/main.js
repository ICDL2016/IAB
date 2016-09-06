$(window).load(function () {
  var $catalog = $('.courses-main__wrapper').not('.courses-main_lc').masonry();
  // поведение элементов каталога

  $catalog.masonry({
    itemSelector: '.course-item',
    isFitWidth: true
  });
})


$(function () {

  //попапы
  $('.fancybox').fancybox();


  // var $grid = $('.courses-main').not('.courses-main_lc');
  //
  // $grid.shuffle({
  //   itemSelector: '.courses-main__item',
  //   //sizer: $('.shufle-sizer')
  // })
  // setTimeout(function () {
  //   $grid.shuffle('update');
  // }, 1)

  //фикс панельки битрикса
  if ($('#bx-panel').length) {
    var offset;
    if ($('#bx-panel').hasClass('bx-panel-folded')) {
      offset = 39;
    } else {
      offset = 147;
    }
    $('.header__actions').css('top', offset + 15 + 'px');
    $('.left-nav').css('top', offset + 'px');
    $('.header').css('top', offset + 'px');
    $(window).scroll(function (e) {
      var scrollTop = $(this).scrollTop();
      if (scrollTop <= offset) {
        $('.header').css('margin-top', -scrollTop + 'px')
        $('.header__actions').css('margin-top', -scrollTop + 'px')
        $('.left-nav').css('margin-top', -scrollTop + 'px')
      }
      if (scrollTop > offset) {
        $('.header').css('margin-top', -offset + 'px')
        $('.header__actions').css('margin-top', -offset + 'px')
        $('.left-nav').css('margin-top', -offset + 'px')
      }
    });
  }


  //фикс высоты курсов
  if ($('.courses').length) {
    var coursesHeight = $(window).height() - $('.courses').offset().top - $('.footer').height()
    $('.courses').height(coursesHeight);
    $(window).resize(function () {
      var coursesHeight = $(window).height() - $('.courses').offset().top - $('.footer').height()
      $('.courses').height(coursesHeight);
    });
  }


  $('.main').css('padding-top', $('.header').height() + 5 + 'px')

  $('.js-toggle').on('click', function () {
    $('.nav').toggle();

  });

  $('.js-left-nav-toggle').on('click', function (e) {
    e.preventDefault();
    $('.left-nav').toggleClass('active');
    $('.header__actions').toggleClass('active');
  });

  $('.js-sublist').on('click', function () {
    $(this).toggleClass('active').find('.sublist').toggleClass('active');
    if ($('.nav_new').length) {
      $('.main').css('padding-top', $('.header').height() + 5 + 'px')
    }
  })

  $(window).scroll(function () {
    if ($(window).scrollTop() > 0) {
      $('body').addClass('scrolled')
    } else {
      $('body').removeClass('scrolled')
    }
  })

  $('.js-filter-link').on('click', function (e) {
    e.preventDefault();
    $(this).parent().addClass('active').siblings().removeClass('active')
    var $target = $(this).data('target');
    $("[data-section=" + $target + "]").addClass('active').show().siblings().fadeOut().removeClass('active')
    $('.js-sublist-title').text($(e.target).text())
  })

  $('.js-filter-showall').on('click', function (e) {
    e.preventDefault();
    $('.courses-main').show().removeClass('active');
  });


})