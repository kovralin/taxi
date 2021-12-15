$(function(){
  $('.slider__inner').slick({
    nextArrow:'<button type="button" class="slick-btn slick-next"></button>',
    prevArrow:'<button type="button" class="slick-btn slick-prev"></button>',
  });
  $('select').styler();
});

$(document).ready(function(){
  $(".menu").on("click","a", function (event) {
  event.preventDefault();
  var id = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 400);
  });
});

$(function() {
  let header = $('.header__content');
  let hederHeight = header.height(); // вычисляем высоту шапки
   
  $(window).scroll(function() {
    if($(this).scrollTop() > 1) {
     header.addClass('header_fixed');
     $('body').css({
        'paddingTop': hederHeight+'px' // делаем отступ у body, равный высоте шапки
     });
    } else {
     header.removeClass('header_fixed');
     $('body').css({
      'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
     })
    }
    if($(this).scrollTop() > 5) {
      header.css({
        'padding': '0px 0',
        //'background': '#fffbe1',
        'transition': '.2s'
      });
  } else {
      header.css({
        'padding': '5px 0',
        //'background': '#ffffff',
        'transition': '.2s'
      });
  }


  });
 });
 var form = document.querySelector('form');
form.onsubmit = function ()
  {
  var text = form.text;
  text.value = '<p>' + text.value + '</p>';
  text.value = text.value.replace(/\n/g, '</p><p>');
  };