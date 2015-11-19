$('#ojectsCarousel').carousel({
    interval: 0
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#ojectsCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#ojectsCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});

// slow scroll to anchor

$(document).ready(function(){
   $('.menu a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
   return false;
});

// pluso social buttons
(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();

// tooltip init
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

//carousels
$(document).ready(function() {
 	
  var owl_leadership = $("#leadership-carusel");

  owl_leadership.owlCarousel ({
  		items : 3,
  		itemsDesktop : [960, 3],
  		itemsTablet : [600, 2],
  		itemsMobile : [480, 1],
        navigation: true,
        navigationText: [
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
        ]
  });
$(".next-leader").click(function(){
	owl_leadership.trigger('owl.next');
});
$(".prev-leader").click(function(){
	owl_leadership.trigger('owl.prev');
});

});

$(document).ready(function() {
 
  var owl_managers = $("#manager-carusel");

  owl_managers.owlCarousel ({
      autoPlay: 2500,
  		items : 3,
  		itemsDesktop : [960, 3],
  		itemsTablet : [600, 2],
  		itemsMobile : [480, 1],
       navigation: true,
        navigationText: [
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
        ]
  });
$(".next-manager").click(function(){
	owl_managers.trigger('owl.next');
});
$(".prev-manager").click(function(){
	owl_managers.trigger('owl.prev');
});

});

$(document).ready(function() {
 
  var owl_objects = $("#objects-carusel");

  owl_objects.owlCarousel ({
  		items : 5,
  		itemsDesktop : [960, 5],
  		itemsTablet : [600, 2],
  		itemsMobile : [480, 1],
       navigation: true,
        navigationText: [
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
        ]
  });
$(".next-object").click(function(){
	owl_objects.trigger('owl.next');
});
$(".prev-object").click(function(){
	owl_objects.trigger('owl.prev');
});

});

$(document).ready(function() {
 
  var owl_partners = $("#partners-carusel");

  owl_partners.owlCarousel ({
      autoPlay: 2000,
  		items : 4,
  		itemsDesktop : [960, 4],
  		itemsTablet : [600, 2],
  		itemsMobile : [480, 1],
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
        navigationText: [
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/prev.png' class='control-img'>",
            "<img src='http://gik23.ru/main/wp-content/uploads/2015/06/next.png' class='control-img'>"
        ]
  });
$(".next-partner").click(function(){
  about_docs.trigger('owl.next');
});
$(".prev-partner").click(function(){
  about_docs.trigger('owl.prev');
});

});

// LiveTex
window['liv'+'eTe'+'x'] = true,
    window['l'+'i'+'v'+'e'+'Tex'+'ID'] = 102036,
    window['li'+'v'+'eTex'+'_object'] = true;
    (function() {
        var t = document['create'+'El'+'emen'+'t']('script');
        t.type ='text/javascript';
        t.async = true;
        t.src = '//cs15.livete'+'x.ru/js/cli'+'e'+'nt.js';
        var c = document['g'+'etElements'+'ByTagNam'+'e']('script')[0];
        if ( c ) c['paren'+'tNod'+'e']['i'+'nsertB'+'efore'](t, c);
        else document['d'+'ocument'+'Element']['fir'+'s'+'tChil'+'d']['appe'+'ndCh'+'i'+'ld'](t);
    })();

//f1 call
    (function ()
    {
    var config = {
        API_BASE: "http://connect.f1call.com",
        PROJECT_NAME: "F1call",
    };

    if (typeof window[config.PROJECT_NAME] === 'undefined' && typeof CallPluginInitObject === 'undefined') {
        window['CallPluginInitObject'] = config;

        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = config.API_BASE + '/static/api.js';
        var x = document.getElementsByTagName('head')[0];
        x.appendChild(s);
    }
    else
        console.log(config.PROJECT_NAME + " is already defined.");
})();


// Маска для телефона

jQuery(document).ready(function($) {
    $('.form__phone').mask('+7(999)999-99-99');
});