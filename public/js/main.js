$(function () {
  $('.menu-trigger').click(function () {
    $(this).toggleClass('active');
    $('.gnavi').css('display', 'block');
    if ($(this).hasClass('active')) {
      $('.gnavi').addClass('active');
    } else {
      $('.gnavi').removeClass('active');
    }
  });
});
