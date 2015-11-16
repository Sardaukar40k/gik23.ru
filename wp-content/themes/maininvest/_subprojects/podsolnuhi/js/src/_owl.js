$(document).ready(function() {

  var owl_podsolnuhi_banks = $("#banks-podsolnuhi-carusel");

  owl_podsolnuhi_banks.owlCarousel ({
    items : 3,
    itemsDesktop : [1920, 3],
    itemsDesktop : [960, 3],
    itemsTablet : [600, 1],
    itemsMobile : [480, 1],
    navigation: true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
    ]
  });
  $(".next-partner").click(function(){
    owl_podsolnuhi_banks.trigger('owl.next');
  })
  $(".prev-partner").click(function(){
    owl_podsolnuhi_banks.trigger('owl.prev');
  })

});

$(document).ready(function() {

  var owl_podsolnuhi_docs = $("#docs-podsolnuhi-carusel");

  owl_podsolnuhi_docs.owlCarousel ({
    items : 5,
    itemsDesktop : [960, 5],
    itemsTablet : [600, 3],
    itemsMobile : [480, 1],
    navigation: true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
    ]
  });
  $(".next-partner").click(function(){
    owl_podsolnuhi_docs.trigger('owl.next');
  })
  $(".prev-partner").click(function(){
    owl_podsolnuhi_docs.trigger('owl.prev');
  })

});

$(document).ready(function() {

  var partners = $("#partners-podsolnuhi-carusel");

  partners.owlCarousel ({
    items : 2,
    itemsDesktop : [960, 2],
    itemsTablet : [600, 2],
    itemsMobile : [480, 1],
    navigation: true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
      "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
    ]
  });

  $(".next-partner").click(function(){
    partners.trigger('owl.next');
  });

  $(".prev-partner").click(function(){
    partners.trigger('owl.prev');
  });

});