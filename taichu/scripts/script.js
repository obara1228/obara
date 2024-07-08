'use strict'
 /* -------　nav　------- */
 $("#openNav").click(function () {//ボタンがクリックされたら
  $("#nav").toggleClass('show');//showクラスを付与
});
      
$("#closeNav").click(function () {//ボタンがクリックされたら
  $("#nav").removeClass('show');//showクラスを除去
});

const btn = document.getElementById("btn");

/*----- top bottan---*/
$(document).ready(function() {
  var pagetop = $('.pagetop');
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
          }
      });
      pagetop.click(function () {
          $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
  });
});

/* -------　modal　------- */
$(function(){
  $('.modalOpen').each(function(){
      $(this).on('click',function(){
          var target = $(this).data('target');
          var modal = document.getElementById(target);
          $(modal).fadeIn();
          return false;
      });
  });
  $('.modalClose').on('click',function(){
      $('.modalContainer').fadeOut();
      return false;
  }); 
});


      