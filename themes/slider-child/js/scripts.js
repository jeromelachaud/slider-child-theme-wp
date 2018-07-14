$(document).ready(function() {

  $('#menu_container li').hover(
    function () {
      $('ul:first', this).css('display','block');

    },
    function () {
      $('ul:first', this).css('display','none');
    }
  );

  $('.home_post_wide, .home_post_tall, .home_post_box').hover(
    function() {
      $(this).find('a').css('text-decoration','underline');
    },
    function() {
      $(this).find('a').css('text-decoration','none');
    }
  );
});
