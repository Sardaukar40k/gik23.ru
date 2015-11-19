$(document).ready(function() {

  var menu = $('.menu-item-has-children');

  menu.on('mouseenter', function() {
    $('.sub-menu', $(this)).slideDown(150);
  })
    .on('mouseleave', function () {
    $('.sub-menu', $(this)).slideUp(0);
  });
});