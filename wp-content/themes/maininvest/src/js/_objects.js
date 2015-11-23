$(document).ready(function () {
  $('.objects_list-item').on('mouseenter', function () {
      $('.objects_list-item-beneffit', this).fadeIn(200);
    }).on('mouseleave', function () {
      $('.objects_list-item-beneffit', this).fadeOut(200);
    });
});