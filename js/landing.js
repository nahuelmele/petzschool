var valorscrol = 1;
var titgeneral = document.title;

jQuery(document).ready(function () {

	var teachContainer = jQuery('#contenido');
	var teachItems = jQuery('#aprender .container p');
	
	teachItems.each(function(){
		var meta = jQuery('<meta>', {
			itemprop: 'teaches',
			content: jQuery(this).text()
		});
		teachContainer.append(meta);
	});

	//	Inicio Back Top Link

	if (jQuery("#back-to-top").length) {

		jQuery('#back-to-top button').click(function (e) {

			e.stopPropagation();
			e.preventDefault();

			jQuery('html, body').animate({ scrollTop: 0 }, 500);
			return false;

		});

	}

	// Fin Back Top Link

	/* Inicio HasRecibidoUnDescuento */

	if (jQuery("#descuento").length) {

		setTimeout(function () {
			jQuery("#descuento").fadeIn(200);
		}, 5000);

		setTimeout(function () {
			jQuery("#descuento").fadeOut(600);
		}, 10000);

		jQuery('#descuento button').on('click', function (event) {

			event.preventDefault()

			jQuery("#descuento").fadeOut(600);
		});

	}


	/* Fin HasRecibidoUnDescuento */

	// Inicio carrusel Opiniones de nuestras alumnas

	if (jQuery("#owl-reviews").length) {

		jQuery("#owl-reviews").owlCarousel({
			dots: true,
			loop: true,
			autoplay: true,
			nav: true,
			margin: 20,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
				"<i class='fa fa-chevron-right'></i>"
			],
			responsive: {
				1: {
					items: 1,
				},
				991: {
					items: 2,
				},
			}
		});

	}

	// Fin carrusel Opiniones de nuestras alumnas


	// Inicio carrusel alumnas están felices 

	if (jQuery("#owl-alumnasfelices").length) {

		jQuery("#owl-alumnasfelices").owlCarousel({
			stagePadding: 50,
			loop: true,
			margin: 20,
			autoplay: true,
			autoplayHoverPause: true,
			dots: true,
			center: true,
			items: 5,
			responsive: {
				1: {
					items: 1,
					margin: 10,
				},
				481: {
					items: 2,
					margin: 10,
				},
				768: {
					items: 2,
					margin: 10,
				},
				900: {
					items: 3
				},
				1200: {
					items: 4
				},
				1400: {
					items: 5
				}
			}
		});

	}

	// Fin carrusel alumnas están felices


	// Inicio carrusel cursos relacionados

	if (jQuery("#owl-cursos-relacionados").length) {

		jQuery("#owl-cursos-relacionados").owlCarousel({
			stagePadding: 50,
			loop: true,
			margin: 20,
			autoplay: true,
			autoplayHoverPause: true,
			dots: true,
			center: true,
			items: 5,
			responsive: {
				1: {
					items: 1,
					margin: 10,
				},
				481: {
					items: 2,
					margin: 10,
				},
				768: {
					items: 2,
					margin: 10,
				},
				900: {
					items: 3
				},
				1200: {
					items: 4
				},
				1400: {
					items: 5
				}
			}
		});

	}

	// Fin carrusel cursos relacionados


	// Inicio carrusel educanino videos

	if (jQuery("#muestras-videos-carousel").length) {

		jQuery("#muestras-videos-carousel").owlCarousel({
			stagePadding: 50,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayHoverPause: true,
			dots: true,
			center: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				900: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		});

	}

	// Fin carrusel educanino videos

	// Inicio carrusel Muestras de nuestras alumnas

	if (jQuery("#muestras").length) {

		jQuery('#owl-muestras').owlCarousel({
			stagePadding: 50,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayHoverPause: true,
			dots: true,
			center: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				900: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		})

	}

	// Fin carrusel Muestras de nuestras alumnas


	/* Inicio fancybox checkout */

	if (jQuery("#modalMesageCheckoutButon").length) {

		redirectPage = jQuery('#modalMesageCheckoutButon').data("redirect");
		descuentoCupon = jQuery('#modalMesageCheckoutButon').data("cupon");
		dominio = jQuery('#modalMesageCheckoutButon').data("dom");
		test = jQuery('#modalMesageCheckoutButon').data("test");

		jQuery("#modalMesageCheckoutButon").fancybox({

			ajax: {
				type: "POST",
				cache: false,
				data: { url: redirectPage, descuento: descuentoCupon, dom: dominio, testing: test }
			},

			padding: 0,
			maxWidth: 800,
			maxHeight: 600,
			fitToView: true,
			width: '100%',
			height: '100%',
			scrolling: 'auto',
			preload: true,

			openEffect: 'fade',
			openSpeed: 200,

			closeEffect: 'fade',
			closeSpeed: 200,
			closeBtn: false,

			helpers: {
				overlay: {
					css: {
						'overflow': 'hidden'
					}
				}
			},
			arrows: false,

			closeClick: false,

		});

	}



	/* Fin fancybox checkout */


	/* Inicio fancybox footer */

	if (jQuery(".fancyboxfooter").length) {

		jQuery('.fancyboxfooter').on('click', function (e) {

			e.stopPropagation();
			e.preventDefault();

			$.fancybox.open({
				href: jQuery(this).data('href'),
				type: 'iframe',
				padding: 0,
				maxWidth: 800,
				maxHeight: 600,
				fitToView: true,
				width: '90%',
				height: '90%',
				scrolling: 'auto',
				preload: true,
				openEffect: 'fade',
				openSpeed: 500,
				closeEffect: 'fade',
				closeSpeed: 500,
				helpers: {
					overlay: {
						css: {
							'overflow': 'hidden'
						}
					}
				},
				arrows: false,
				closeClick: true,
			});
		});

	}

	/* Fin fancybox footer */


	/* Inicio fancybox Muestras de nuestras alumnas */

	if (jQuery("#muestras").length) {


		/*
		
		jQuery("#muestras a[rel=casosexito]").click( function( e ) {
			if ( window.innerWidth < 401 ) {
				e.stopPropagation();
				e.preventDefault();
			}
		})

		*/


		jQuery("#muestras a[rel=casosexito]").fancybox({

			padding: 10,

			maxWidth: 800,
			maxHeight: 600,
			fitToView: true,
			width: '90%',
			height: '90%',
			scrolling: 'auto',
			preload: true,

			openEffect: 'fade',
			openSpeed: 500,

			closeEffect: 'fade',
			closeSpeed: 500,

			helpers: {
				overlay: {
					css: {
						'overflow': 'hidden'
					}
				}
			},
		});

	}

	/* Fin fancybox Muestras de nuestras alumnas */


	/* Inicio fancybox alumnas Felices */

	if (jQuery("#alumnasfelices").length) {


		/*
		
		jQuery("#alumnasfelices a[rel=alumnasfelices]").click( function( e ) {
			if ( window.innerWidth < 401 ) {
				e.stopPropagation();
				e.preventDefault();
			}
		})

		*/


		jQuery("#alumnasfelices a[rel=alumnasfelices]").fancybox({

			padding: 10,

			maxWidth: 800,
			maxHeight: 600,
			fitToView: true,
			width: '90%',
			height: '90%',
			scrolling: 'auto',
			preload: true,

			openEffect: 'fade',
			openSpeed: 500,

			closeEffect: 'fade',
			closeSpeed: 500,

			helpers: {
				overlay: {
					css: {
						'overflow': 'hidden'
					}
				}
			},

		});

	}

	/* Fin fancybox alumnas Felices */


	/* Inicio lazyload */

	if (jQuery(".lazyload").length) {
		jQuery("img.lazyload").loadScroll(500);
	}

	/* fin lazyload */

	/* Inicio timeDown with timeZone */

	function changeTimezone(date, ianatz) {

		var invdate = new Date(date.toLocaleString('en-US', {
			timeZone: ianatz
		}));

		var diff = date.getTime() - invdate.getTime();

		return new Date(date.getTime() - diff);

	}

	if (jQuery("#timer").length) {

		setInterval(function () {

			var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

			var dateNow = new Date();

			var there = changeTimezone(dateNow, timezone);

			var tomyear = there.getFullYear();
			var tommonth = there.getMonth();
			var tomday = there.getDate() + 1;

			var tomDate = new Date(tomyear, tommonth, tomday).getTime();
			var todayDate = there.getTime();

			var diff = tomDate - todayDate;

			var days = Math.floor(diff / (1000 * 60 * 60 * 24));
			var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((diff % (1000 * 60)) / 1000);


			document.getElementById("timer").innerHTML =
			"<span class=\"days\" itemscope itemtype=\"https://schema.org/Duration\"> \
			<span class=\"numbers\" itemprop=\"days\">" + days + "</span>días</span> \
			<span class=\"hours\" itemscope itemtype=\"https://schema.org/Duration\"> \
			<span class=\"numbers\" itemprop=\"hours\">" + hours + "</span>hs</span> \
			<span class=\"minutes\" itemscope itemtype=\"https://schema.org/Duration\"> \
			<span class=\"numbers\" itemprop=\"minutes\">" + minutes + "</span>mins</span> \
			<span class=\"seconds\" itemscope itemtype=\"https://schema.org/Duration\"> \
			<span class=\"numbers\" itemprop=\"seconds\">" + seconds + "</span>segs</span> \
			</span>";

		}, 1000);

	}

	/* Fin timeDown with timeZone */


	/* Inicio loader de participantes del programa */

	if (jQuery(".optesumVid").length) {

		var escNextVisit = true;

		if (escNextVisit) {

			escNextVisit = false;

			var elemProgreV = jQuery(".optesumVid > div p:nth-child(2)");
			var amountIncrese = elemProgreV.text();
			var widthProgreV = 1;

			var idV = setInterval(frameV, 10);

			function frameV() {

				if (widthProgreV >= amountIncrese) {
					clearInterval(idV);
				} else {

					widthProgreV++;

					elemProgreV.text(widthProgreV);
				}
			}

		}

	}

	/* Fin loader de participantes del programa */


	/* Inicio scroll al precio */

	if (jQuery(".buttonCallToAction").length) {

		jQuery('.buttonCallToAction').click(function (e) {
			e.stopPropagation();
			e.preventDefault();

			jQuery("html, body").animate({ scrollTop: jQuery('#precio .generalinfo h4').offset().top - 150 }, 2000);
		});

	}

	/* Fin scroll al precio */


	/* Inicio Fixed cartel rojo de ultima actualizacion */

	if (jQuery("#countdown").length) {

		var actualizacion = jQuery('#countdown > #update');

		jQuery(window).scroll(function () {

			st = jQuery(window).scrollTop();

			if (st < 200) {

				actualizacion.slideUp();

			} else {

				actualizacion.slideDown();

			}

		});

	}

	/* Fin Fixed cartel rojo de ultima actualizacion */


	/* Inicio Proof */

	if (jQuery("#proof").length) {

		proofVal = proofVals(null);

		jQuery('#proof').append(proofVal);

		var fiProof = jQuery(".pop-proof").outerHeight(true);


		jQuery(".pop-proof").animate({
			bottom: - fiProof - 10
		});

		proofAction(true, proofVal);

	}

	initime = setTimeout(function () {
		valorscrol = 2;
	}, 5000);

	/* Fin Proof */

	/* Inicio Nav Timer CSS */

	navElement = jQuery("nav.navbar-fixed-top");
	timerElement = jQuery("#countdown");
	sliderContainer2 = jQuery("#first-scroll");

	if (navElement.length && timerElement.length) {

		sliderContainer2.addClass("hasTimerNav");

		jQuery(window).scroll(function () {

			st = jQuery(window).scrollTop();

			if (st < 200) {

				navElement.removeClass("hasTimerNavInNav");

			} else {

				navElement.addClass("hasTimerNavInNav");

			}

		});

	} else if (navElement.length && !timerElement.length) {

		navElement.addClass("hasTimerNavInNav2");

	} else if (!navElement.length && timerElement.length) {

		/* Default */

	} else if (!navElement.length && !timerElement.length) {

		sliderContainer2.addClass("noTimerNoNav");

	}


	/* Fin Nav Timer CSS */


	/* Inicio accordion FAQ */

	if (jQuery("#accordion-faq").length) {

		var accordionFaq = jQuery('#accordion-faq');
		var accordion_faq_items = accordionFaq.children('div');
		var accordion_headers_faq = accordion_faq_items.children('button');

		var speedFaq = 300;

		accordion_headers_faq.on('click', function (e) {

			e.stopPropagation();
			e.preventDefault();

			var itemFaq = jQuery(this).parent();

			if (!itemFaq.hasClass('active')) {
				accordion_faq_items.children('div').slideUp(speedFaq).parent().removeClass('active');

				itemFaq.children('div').stop().slideDown(speedFaq).parent().addClass('active');
			} else {
				accordion_faq_items.children('div').slideUp(speedFaq).parent().removeClass('active');
			}

			setTimeout(() => {
				jQuery('html, body').animate({
					scrollTop: itemFaq.offset().top - 120
				}, 500);
			}, speedFaq);
		});

	}

	/* Fin accordion FAQ */

	/* Inicio Accordion Contenido Programa */

	if (jQuery("#temario").length) {

		var accordion = jQuery('#temario');
		var accordion_items = accordion.children('div');
		var accordion_click = accordion.children('div').find("button");

		var speed = 400;

		accordion_click.on('click', function (e) {

			e.stopPropagation();
			e.preventDefault();

			var itemParent	= jQuery(this).parent().parent();
			
			if (!itemParent.hasClass('active')) {

				if (accordion_items.length != 1)
					accordion_items.children('ul').slideUp(speed).parent().removeClass('active');

				itemParent.children('ul').stop().slideDown(speed).parent().addClass('active');

			} else {

				if (accordion_items.length != 1) {
					accordion_items.children('ul').slideUp(speed).parent().removeClass('active');
				} else {
					itemParent.children('ul').slideUp(speed).parent().removeClass('active');
				}

			}


			setTimeout(() => {
				jQuery('html, body').animate({
					scrollTop: itemParent.offset().top - 100
				}, 500);
			}, speed);
		});

	}

	/* Fin Accordion Contenido Programa */

	//Inicio Scroll

	var escNext = true;
	var escNextesti = true;
	var escNextPurche = true;


	jQuery(window).scroll(function () {

		//	Inicio Back Top Link

		var offset = 200;
		var duration = 500;

		if (jQuery("#back-to-top").length) {

			if (jQuery(this).scrollTop() > offset) {
				jQuery('#back-to-top button').fadeIn(400);
			} else {
				jQuery('#back-to-top button').fadeOut(400);
			}

		}

		// Fin Back Top Link

		// Inicio whatsApp directo

		if (jQuery("#wabuton").length) {

			if (jQuery(this).scrollTop() > offset) {
				jQuery('#wabuton').fadeIn(400);
			} else {
				jQuery('#wabuton').fadeOut(400);
			}

		}

		// Fin whatsApp directo


		// Inicio menu se achica cuando esccroleas 	

		if (jQuery("nav.navbar").length) {

			if (jQuery(document).scrollTop() > 50) {
				jQuery('nav').addClass('shrinkCustom');
			} else {
				jQuery('nav').removeClass('shrinkCustom');
			}

		}

		// Fin menu se achica cuando esccroleas


		//Inicio skrollr para las figuaras que se mueven cuando escroleas




		//Fin skrollr para las figuaras que se mueven cuando escroleas


		if (jQuery(".oferta50-cupos").length) {

			var hT = jQuery('.oferta50-cupos').offset().top,
				hH = jQuery('.oferta50-cupos').outerHeight(true);
		}

		if (jQuery(".contenidoAprender").length) {

			var hTesti = jQuery('.contenidoAprender ').offset().top,
				hHesti = jQuery('.contenidoAprender ').outerHeight(true);
		}

		if (jQuery(".main-cta").length) {
			var hTpagos = jQuery('.main-cta').offset().top,
				hHpagos = jQuery('.main-cta').outerHeight(true);
		}

		var wH = jQuery(window).height(),
			wS = jQuery(this).scrollTop();

		if (wS > (hT + hH - wH) && (wS + wH > hT + hH)) {

			if (jQuery("#progressbar").length) {

				if (escNext) {

					escNext = false;

					var elemProgre = jQuery("#progressbar > div");
					var widthProgre = 1;


					var id = setInterval(frame, 10);

					function frame() {		
						if (widthProgre >= 83) {
							clearInterval(id);
						} else {

							widthProgre++;

							elemProgre.css("width", widthProgre + "%");
							elemProgre.text(widthProgre + "%");
						}
					}

				}

			}

		}

		if ((wS > (hTpagos + hHpagos - wH)) && (wS + wH > hTpagos + hHpagos)) {

			if (escNextPurche) {

				if (valorscrol === 2) {

					clearTimeout(initime);



					escNextPurche = false;
					val = parseInt(jQuery(".fixed-proof").attr("id"));

					proofVl = proofVals(14);

					proofAction(false, proofVl);



				}
			}
		}


	});


	// Fin Scroll


});


function proofAction(ini, proofval) {

	var tiempoInicial = 11000;
	var tiempoDuracion = 7000;

	if (ini === true) {

		setTimeout(function () {
			stinitial(tiempoDuracion);
		}, tiempoInicial);

	} else {

		jQuery('#proof').append(proofval);

		stinitialCp(tiempoDuracion);

	}

};

function stinitialCp(tiempoDuracion) {

	var fiProof = jQuery(".pop-proof").outerHeight(true);

	racaper = parseInt(jQuery(".racaper").text());
	elemen = jQuery(".racaper");

	titproofReser1 = jQuery(".proofReser").find(".title-proof").find(".racaper").text();
	titproofReser = jQuery(".proofReser").find(".title-proof").find(".racaperemprend").text();
	insproofReser = jQuery(".proofReser").find(".instiproff").text();
	whatproofReser = jQuery(".proofReser").find(".what-proof").text();

	jQuery(".pop-proof").animate({
		bottom: 0
	}, function () {
		/* document.title = titproofReser1 +" "+ titproofReser +" "+ insproofReser +" "+ whatproofReser; */
	});


	raviewR(racaper, elemen);

	setTimeout(function () {

		jQuery(".pop-proof").animate({
			bottom: - fiProof - 10
		}, function () {
			/* document.title = titgeneral; */
		});

	}, tiempoDuracion);

}

function stinitial(tiempoDuracion) {

	var fiProof = jQuery(".pop-proof").outerHeight(true);

	titproofPeo = jQuery(".proofPeo").find(".title-proof").text();
	instiproffPeo = jQuery(".proofPeo").find(".instiproff").text();
	whatproofPeo = jQuery(".proofPeo").find(".what-proof").text();


	jQuery(".pop-proof").animate({
		bottom: 0
	}, function () {
		/* document.title = titproofPeo +" "+instiproffPeo +" "+ whatproofPeo; */
	});


	setTimeout(function () {

		jQuery(".pop-proof").animate({
			bottom: - fiProof - 10
		}, function () {
			/*	document.title = titgeneral; */
		});

		stinitial2(tiempoDuracion);

	}, tiempoDuracion);

}


function stinitial2(tiempoDuracion) {

	fiProof = jQuery(".pop-proof").outerHeight(true);
	proofval = proofVals(13);


	setTimeout(function () {

		jQuery('#proof').append(proofval);

		titproofViendo = jQuery(".proofViendo").find(".title-proof").text();
		insproofViendo = jQuery(".proofViendo").find(".instiproff").text();

		jQuery(".pop-proof").animate({
			bottom: 0
		}, function () {
			/*	document.title = titproofViendo +" "+insproofViendo; */
		});

		raview = parseInt(jQuery("#raview").text());
		elemen = jQuery("#raview");

		raviewR(raview, elemen);

		setTimeout(function () {

			jQuery(".pop-proof").animate({
				bottom: - fiProof - 10
			}, function () {
				/* document.title = titgeneral; */
			})

		}, tiempoDuracion);

	}, tiempoDuracion);

}

function randomIntFromInterval(min, max) {
	return Math.floor(Math.random() * (max - min + 1) + min);
};

function raviewR(num, elemen) {
	widthProgreV = 1;

	idV = setInterval(frameV, 120);

	function frameV() {
		if (widthProgreV >= num) {
			clearInterval(idV);
		} else {
			widthProgreV++;

			elemen.text(widthProgreV);
		}
	}
}

function getDateString(hoursAgo) {
	return new Date(Date.now() - hoursAgo*60*60*1000).toISOString();
}


function proofVals(val) {
    ra = randomIntFromInterval(18, 33);
    raca = randomIntFromInterval(11, 18);
    currentPage = window.location.href;
    priceCurrency = jQuery('meta[itemprop="priceCurrency"]').attr('content');
    price = jQuery('meta[itemprop="price"]').attr('content');
	nombreCurso = jQuery('#garantia span[itemprop="provider"]').text();
    
    var proof = new Array();
    
    proof[1] = `<div id="1" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/sofia-f.jpg" alt="Sofia" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Sofía</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">24 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(24)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[2] = `<div id="2" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/paola-m.jpg" alt="Paola" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Monica</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">23 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(23)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[3] = `<div id="3" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/manuela-zapata.jpg" alt="Manuela Zapata" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Manuela</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">3 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(3)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[4] = `<div id="4" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/laura-lezcano.jpg" alt="Laura Lezcano" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Laura</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">30 Min. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(0.5)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[5] = `<div id="5" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/julieth-marquez.jpg" alt="Julieth Marquez" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Maria</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">15 Min. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(0.25)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[6] = `<div id="6" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/julieta.jpg" alt="Julieta" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Julieta</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">9 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(9)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[7] = `<div id="7" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/marcela-araujo.jpg" alt="Marcela Araujo" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Marcela</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">13 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(13)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[8] = `<div id="8" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/paola-berrio.jpg" alt="Paola Berrio" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Micaela</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">22 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(22)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[9] = `<div id="9" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/monica-alzate.jpg" alt="Monica Alzate" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Alejandra</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">18 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(18)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[10] = `<div id="10" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/sofia-vargas.jpg" alt="Sofia Vargas" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Camila</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">16 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(16)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    proof[11] = `<div id="11" class="fixed-proof proofPeo" itemscope itemtype="https://schema.org/Order">
        <div class="pop-proof">
            <div><img width="56" height="56" src="../../img/ultimas-compras/ana-maria.jpg" alt="Ana Maria" class="img-circle" /></div>
            <div>
                <div class="title-proof" itemprop="customer" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">Ana</span>
                </div>
                <div class="instiproff">Ya Realizó su Pago</div>
                <div class="what-proof">2 Hs. Atrás <img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div>
                <meta itemprop="orderDate" content="${getDateString(2)}">
                <meta itemprop="orderStatus" content="https://schema.org/OrderDelivered">
                <div itemprop="merchant" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="Petz School">
                </div>
                <div itemprop="orderedItem" itemscope itemtype="https://schema.org/Product">
                    <meta itemprop="name" content="Curso Digital ${nombreCurso}">
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="price" content="${price}">
                        <meta itemprop="priceCurrency" content="${priceCurrency}">
                    </div>
                </div>
            </div>
        </div>
    </div>`;
	
	proof[13] = '<div id="13" class="fixed-proof proofViendo"><div class="pop-proof"><div><div class="peopleViewing rete" id="raview">' + ra + '</div></div><div><div class="title-proof"><b class="raper rete">' + ra + '</b> <b>Emprendedoras</b></div><div class="instiproff">Están viendo esta <b>OFERTA</b>.</div><div class="what-proof"><img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div></div></div></div>';
	proof[14] = '<div id="14" class="fixed-proof proofReser"><div class="pop-proof"><div><img width="56" height="56" alt="Fire" src="../../img/fire.svg"></div><div><div class="title-proof"><div class="racaper">' + raca + '</div><div class="racaperemprend">Emprendedoras</div></div><div class="instiproff">Reservaron SU CUPO</div><div class="what-proof">En 48 Hs.<img width="106" height="14" alt="Verified by Proof" src="../../img/verified.svg"></div></div></div></div>';
	

    if (val == 14) {
        var i = val;
    } else if (val == 13) {
        var i = val;
    } else {
        var i = randomIntFromInterval(1, 11);
    }

    return proof[i];
}