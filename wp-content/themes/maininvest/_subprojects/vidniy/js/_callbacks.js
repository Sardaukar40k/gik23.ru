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
