jQuery(document).ready(function(){
	
	/* Inicio whatsApp chat */
	
	domainName = location.protocol + "//" + location.host;
	
	if( location.host == "localhost" ){
		
		pathnameDom = location.pathname;
		porciones = pathnameDom.split('/');
		
		domainName += "/"+porciones[1]; 
	}
	
	if( jQuery(".fancyboxfooter").length ){

		jQuery(".fancyboxfooter").fancybox({
			padding: 0,
			
			maxWidth	: 800,
			maxHeight	: 600,
			fitToView	: true,
			width		: '90%',
			height		: '90%',
			scrolling : 'auto',	
			preload   : true,

			openEffect : 'fade',
			openSpeed  : 500,

			closeEffect : 'fade',
			closeSpeed  : 500,

			helpers:{
				overlay: {
						css: {
							'overflow': 'hidden'
						}
					}
				},
			arrows:false,

			closeClick : true,

		});
		
	}
		
	
	if( jQuery("#contact_form").length ){
	
		jQuery("#contact_form").submit( function(e) {
			
			var post_data = {
				'user_name': jQuery('#contact_form input[name=name]').val(),
				'user_email': jQuery('#contact_form input[name=email]').val(),
				'subject': jQuery('#contact_form input[name=subject]').val(),
				'msg': jQuery('#contact_form textarea[name=message]').val()
			};
			
			//console.log( post_data );
			
			jQuery.post('/inc/email.php', post_data, function(response) {
				
				//console.log( response );
				
				if (response == 2 ) {
					var output = "<div class='alert alert-danger'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a> <strong>Error en el envio, pruebe más tarde.</strong></div>";
				} else {
					
					var output = "<div class='alert alert-success'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a> <strong>Mensaje enviado con éxito!</strong></div>";
					
					jQuery("#contact_form textarea[name=message]").val('');
					jQuery("#contact_form input[name=name]").val('');
					jQuery("#contact_form input[name=email]").val('');
					jQuery("#contact_form input[name=subject]").val('');
				}
			
				jQuery("#contact_results").hide().html(output).fadeIn();
			});
				
			e.preventDefault();	
			
		});

	}


	if (jQuery("#newsletter").length) {

		jQuery("#newsletter").submit(function (e) {

			var post_data = {
				'user_email': jQuery('#newsletter input[name=email]').val()
			};

			//console.log( post_data );

			jQuery.post('/inc/news.php', post_data, function (response) {

				//console.log( response );

				if (response == 2) {
					var output = "<div class='alert alert-danger'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a> <strong>Error en el envio, pruebe más tarde.</strong></div>";
				} else {

					var output = "<div class='alert alert-success'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a> <strong>Se suscribió con éxito!</strong></div>";

					jQuery("#newsletter input[name=email]").val('');
				}

				jQuery("#contact_results").hide().html(output).fadeIn();
			});

			e.preventDefault();

		});

	}


	jQuery(window).scroll(function() {	
	

		var offset = 200;
		var duration = 500;
		
		// Inicio whatsApp directo

		if (jQuery("#wabuton").length) {

			if (jQuery(this).scrollTop() > offset) {
				jQuery('#wabuton').fadeIn(400);
			} else {
				jQuery('#wabuton').fadeOut(400);
			}

		}

		// Fin whatsApp directo
	});	
	
});	