$(document).ready(function() {

  var menu = $("#menu");
  var position = menu.offset().top;

  $(window).scroll(function() {
    if ( $(this).scrollTop() > position && menu.hasClass("menu-default")) {
      menu.removeClass("menu-default").addClass("navbar-fixed-top menu-fixed");
    } else if ( $(this).scrollTop() <= position && menu.hasClass("navbar-fixed-top menu-fixed")) {
      menu.removeClass("navbar-fixed-top menu-fixed").addClass("menu-default");
    }
  });//scroll
});