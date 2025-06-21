var body = document.getElementsByTagName('body').item(0);

if (window.addEventListener){
	window.addEventListener("load", downloadJSAtOnload, false);
}else if(window.attachEvent){
	window.attachEvent("onload", downloadJSAtOnload);
}else{
	window.onload = downloadJSAtOnload;
}

function downloadJSAtOnload(){
	
	myTimer = setTimeout(function(){
	
		for (var i = 1; i < 7; i++) {
			/*alert(i);*/
			if( i == 1 ){
				
				a(function() {
					script = document.createElement('script');
					script.setAttribute('src', '/scripts/analitycsRegistro.js');
					body.appendChild(script);
				});	
				
			}else if( i == 2 ){
				
				script = document.createElement('script');
				script.setAttribute('src', '/scripts/face.js');
				body.appendChild(script);
				
			}else if( i == 3 ){
				
						// Yandex tracking removed - no longer needed
				
			}else if( i == 4 ){
				
				
				script = document.createElement('script');
				script.setAttribute('src', '/scripts/fbchat.js');
				body.appendChild(script);					
				
				/*ifrm = document.createElement("iframe");
				ifrm.setAttribute("src", "https://go.hotmart.com/S16708217A");
				ifrm.setAttribute("class", "iframeclass");
				ifrm.style.width = "0px";
				ifrm.style.height = "0px";
				document.body.appendChild(ifrm);*/
				
			}else if( i == 5 ){
				clearTimeout(myTimer);	
			}
			
		}
	},1500);
	
}

function a(cba) {
	script = document.createElement('script');
	script.setAttribute('src', 'https://www.googletagmanager.com/gtag/js?id=UA-157708435-1');
	body.appendChild(script);	
	
	cba();
}