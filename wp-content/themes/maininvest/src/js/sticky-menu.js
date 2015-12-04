$(document).ready(function() {

  var $menu = $("#menu");

  $(window).scroll(function() {
    if ( $(this).scrollTop() > 100 && $menu.hasClass("menu-default")) {
      $menu.removeClass("menu-default").addClass("navbar-fixed-top menu-fixed");
    } else if ( $(this).scrollTop() <= 100 && $menu.hasClass("navbar-fixed-top menu-fixed")) {
      $menu.removeClass("navbar-fixed-top menu-fixed").addClass("menu-default");
    }
  });//scroll
});