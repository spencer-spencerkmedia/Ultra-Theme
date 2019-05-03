jQuery(document).ready(function( $ ){
  $(window).bind('scroll', function () {
  if ($(window).scrollTop() > 50) {
      $('.sidebar-container').addClass('scroll');
  } else {
      $('.sidebar-container').removeClass('scroll');
  }
});
});
