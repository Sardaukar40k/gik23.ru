$(document).ready(function() {

  var owl_partners = $("#partners-carusel");

  owl_partners.owlCarousel ({
    items : 4,
    itemsDesktop : [960, 4],
    itemsTablet : [600, 2],
    itemsMobile : [480, 1],
    lazyLoad: true,
    navigation: true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
    ]
  });
  $(".next-partner").click(function(){
    owl_partners.trigger('owl.next');
  });
  $(".prev-partner").click(function(){
    owl_partners.trigger('owl.prev');
  });

});

$(document).ready(function() {

  var owl_plane = $("#plane-carusel");

  owl_plane.owlCarousel ({
    items : 1,
    itemsDesktop : [960, 2],
    itemsTablet : [600, 1],
    itemsMobile : [480, 1],
    navigation: true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
    ]
  });
  $(".next-partner").click(function(){
    owl_plane.trigger('owl.next');
  });
  $(".prev-partner").click(function(){
    owl_plane.trigger('owl.prev');
  });

});

$(document).ready(function() {

  var owl_certif = $("#certificates-carusel");

  owl_certif.owlCarousel ({
    items : 6,
    itemsDesktop : [960, 3],
    itemsTablet : [600, 1],
    itemsMobile : [480, 1],
    lazyLoad: true,
    navigation: true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
    ]
  });
  $(".next-partner").click(function(){
    owl_certif.trigger('owl.next');
  });
  $(".prev-partner").click(function(){
    owl_certif.trigger('owl.prev');
  });

});

$(document).ready(function() {

  var about_docs = $("#about-docs-carusel");

  about_docs.owlCarousel ({
    items : 4,
    itemsDesktop : [960, 4],
    itemsTablet : [600, 1],
    itemsMobile : [480, 1],
    navigation: true,
    navigationText  : [

      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img' alt='Предыдущий слайд'>",

      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img' alt='Следующий слайд'>"

    ]
  });
  $(".next-partner").click(function(){
    about_docs.trigger('owl.next');
  });
  $(".prev-partner").click(function(){
    about_docs.trigger('owl.prev');
  });

});

