$(document).ready(function() {
  $('.animate-fade-left').viewportChecker({
    classToRemove : 'animation-hide',
    classToAdd: 'animated fadeInLeft',
    offset: 50
  });
});
$(document).ready(function() {
  $('.animate-fade-right').viewportChecker({
      classToRemove : 'animation-hide',
    classToAdd: 'animated fadeInRight',
    offset: 50
  });
});
$(document).ready(function() {
  $('.animate-fade-down').viewportChecker({
    classToRemove : 'animation-hide',
    classToAdd: 'animated fadeInDown',
    offset: 50
  });
});
$(document).ready(function() {
  $('.animate-zoom-in').viewportChecker({
    classToRemove : 'animation-hide',
    classToAdd: 'animated zoomIn',
    offset: 50
  });
});