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