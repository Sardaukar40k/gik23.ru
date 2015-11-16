// hover

jQuery(document).ready(function() {
  $('.objects_list-item').on('mouseenter', function() {
    $('.objects_list-item-beneffit', this).fadeIn(400);

  });
  $('.objects_list-item').on('mouseleave', function() {
    $('.objects_list-item-beneffit', this).fadeOut(0);

  });

});