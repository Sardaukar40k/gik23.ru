// docs carousel
$(document).ready(function() {

  var docs = $("#m-docs-carousel");

  docs.owlCarousel ({
    items : 5,
    itemsDesktop : [1920, 5],
    itemsDesktop : [960, 4],
    itemsTablet : [600, 2],
    itemsMobile : [480, 1],
    navigation: true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
    ]
  });
  $(".next-leader").click(function(){
    docs.trigger('owl.next');
  });
  $(".prev-leader").click(function(){
    docs.trigger('owl.prev');
  });

});