var body = document.getElementsByTagName('body').item(0);

//console.log("a");

if (window.addEventListener){
	window.addEventListener("load", downloadJSAtOnload, false);
}else if(window.attachEvent){
	window.attachEvent("onload", downloadJSAtOnload);
}else{
	window.onload = downloadJSAtOnload;
}





function downloadJSAtOnload() {

	//console.log("b");

	// Facebook is now loaded inline in header for better performance
	// and to ensure cookies are available when PHP API executes
	
	domainName = location.protocol + "//" + location.host;
	
	if( location.host == "localhost" ){
		
		pathnameDom = location.pathname;
		porciones = pathnameDom.split('/');
		
		domainName += "/"+porciones[1]; 
	}
	
	myTimer = setTimeout(function(){
	
		for (var i = 1; i < 4; i++) {
	
			if( i == 1 ){
				
				a(function() {
					script = document.createElement('script');
					script.setAttribute('src', domainName+'/js/analitycs.js');
					body.appendChild(script);
				});	
				
			}else if( i == 2 ){
				
				// Facebook sync is now loaded immediately in header, skip face.js
				script = document.createElement('script');
				script.setAttribute('src', domainName+'/js/yandex.js');
				body.appendChild(script);
				
			}else if( i == 3 ){
				clearTimeout(myTimer);		
			}
			
		}
		
	},3000);
	
}


function a(cba) {
	script = document.createElement('script');
	script.setAttribute('src', 'https://www.googletagmanager.com/gtag/js?id=G-YYP04HYT8T');
	body.appendChild(script);	

	setTimeout(function () {
		cba();
	}, 1000);
}