var body = document.getElementsByTagName('body').item(0);

//console.log("a");
/*
if (window.addEventListener){
	window.addEventListener("load", downloadJSAtOnload, false);
}else if(window.attachEvent){
	window.attachEvent("onload", downloadJSAtOnload);
}else{
	window.onload = downloadJSAtOnload;
}
*/

!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

  ttq.load('CAGII73C77U2AJB6UPC0');
  ttq.page();
}(window, document, 'ttq');

/*
function downloadJSAtOnload() {
*/
	//console.log("b");

	
	domainName = location.protocol + "//" + location.host;
	
	if( location.host == "localhost" ){
		
		pathnameDom = location.pathname;
		porciones = pathnameDom.split('/');
		
		domainName += "/"+porciones[1]; 
	}
	
	myTimer = setTimeout(function(){
	
		for (var i = 1; i < 5; i++) {
	
			if( i == 1 ){
				
				a(function() {
					script = document.createElement('script');
					script.setAttribute('src', domainName+'/js/analitycs.js');
					body.appendChild(script);
				});	
				
			}else if( i == 2 ){
				
				script = document.createElement('script');
				script.setAttribute('src', domainName+'/js/face.js');
				body.appendChild(script);
				
			}else if( i == 3 ){
				
				script = document.createElement('script');
				script.setAttribute('src', domainName+'/js/yandex.js');
				body.appendChild(script);
				
			}else if( i == 4 ){
				clearTimeout(myTimer);		
			}
			
		}
		
	},3000);
/*	
}
*/

function a(cba) {
	script = document.createElement('script');
	script.setAttribute('src', 'https://www.googletagmanager.com/gtag/js?id=G-YYP04HYT8T');
	body.appendChild(script);	

	setTimeout(function () {
		cba();
	}, 1000);
}