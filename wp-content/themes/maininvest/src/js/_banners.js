$(document).ready(function() {

  var banners = $("#banners_main");

  banners.owlCarousel ({
    slideSpeed      : 300,
    paginationSpeed : 400,
    singleItem      : true,
    navigation      : true,
    navigationText: [
      "<img src='http://gik23.ru/main/wp-content/themes/maininvest/img/banners/left.png' class='control-img'>",

      "<img src='http://gik23.ru/main/wp-content/themes/maininvest/img/banners/right.png' class='control-img'>"
    ]
  });
});