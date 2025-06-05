<?php 

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "dietas-cocinadas-para-perros";
$nombredelcurso = "Dietas cocinadas para perros";
$autor = "Diana Fonseca";
$autorSlug = "diana-fonseca";

include $base. "inc/functions.php";

//precios en dolares
$oferta50Precio  	= getPrecio(35);
$sinOfertaPrecio 	= getPrecio(100);

$bono1 = getPrecio(11);
$bono2 = getPrecio(13);
$bono3 = getPrecio(25);
$bono4 = getPrecio(17);
$bonosTotal = getPrecio(66);	

$currency 			= getCurrency();

$landingData 		= getLandingData();
$imgPagosBillet 	= $landingData["IMGBILLET"];
$puedesAbonarCon 	= $landingData["SHOWMEDIOS"];
$medioPagoEfectivo  = $landingData["TEXTMEDIOSPAGO"];

if( COUNTRYCODE == "ar" || COUNTRYCODE == "cl" || COUNTRYCODE == "eu" ){

	$textCuotasFull = "Tarjeta de crédito.";
	$textCuotas50Off = "Tarjeta de crédito.";
	
}else if( COUNTRYCODE == "co" ){
	
	$textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(6.557) ."</b>."; 
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(2.916) ."</b>.";
	
}else if( COUNTRYCODE == "pe" ){	

	$textCuotasFull =  "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(5.798,1) ."</b>.";
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(2.899,1) ."</b>.";
			
}else if( COUNTRYCODE == "mx" ){
	
	$textCuotasFull =  "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(7.067,1) ."</b>."; 
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>6 cuotas</b> de <b>".$currency." ". getPrecio(6.494,1) ."</b>.";
			
}else{
	
	$textCuotasFull =  ""; 
	$textCuotas50Off = "";
			
}

//cuando esta arriba este "testing" hay que comentarlo. NO PONERLO EN FALSE NI REMOVERLO, cuando estamos en "localhost" automaticamente todo el sitio entra en testing y cuando esta arriba todo pasa a prod.
//$testing = true;

$whatsAppMessage = 'Tengo la siguiente duda sobre el curso "' . $nombredelcurso . '" ...';

//whatsApp chat directo o con popUp, false seria con el popUp ( por ahora no usarlo )
$directo = true;

// si queremos o no menu
$hayMenu = false;

// index o noindex
$index = true;

// si queremos o no el timer
$timer = true;

// si queremos o no la bajada de ultima actualizacion
$update = true;

// proof
$proof = true;

// fecha de publicacion
$datePublished = "2025-05-29";

// fecha de ultima modificacion
$dateModified = "2025-05-31";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";


// cuantas alumnas felicies hay
$alumnasfelices = 8;

// cuantas muestras hay
$muestras = 21;

// grupos privados
$g_telegram = true;
$g_facebook = true;
$g_whatsaup = false;

// descripcion
$des = "🍲 Deja atrás los alimentos procesados. Aprende a nutrir a tu perro con recetas caseras, sanas y llenas de amor y crea tu negocio pet-friendly. 🚀 ¡Sumate HOY!";
//$des = "Cocina con Amor y emprende con éxito en el mundo de la Pastelería canina y felina - Petz School.";

// titulo
$tit = "✓ Promo 65% Off en el curso Dietas Cocinadas para Perros de Diana Fonseca.";

$videoPrincipalID 	= "1089375113";
$videoMuestraID		= "1089376236";
$videoAdicionalID	= "1089377009";


//OFERTAS SETTINGS, elegir una de las 2, si esta activo uno con "true" los otros 2 tienen que estar en "false"

$oferta50  = false;
$sinOferta = false;


$oferta35 = false;
$oferta65 = true;

// Hide pago en efectivo

$hideEfectivo = false;

if( $hideEfectivo ){
	$imgpagosFinal = PAGOSTODOS;
	$pagoEfe = "";
}else{
	$imgpagosFinal = $imgPagosBillet;
	$pagoEfe = $medioPagoEfectivo;
}


// si queremos el modal en el boton de checkout con mensaje y redirect

$modalMesageCheckout = false;

// Link Producto, chechout limpio para crashing
// 65% de descuento
$linkProducto = "https://go.hotmart.com/K92839389V?ap=a614";


//De aca para abajo no hay que tocar nada


$offDiscount = "";
$textCuotas = $textCuotasFull;

if( $oferta50 || $oferta65 || $oferta35 ){
	
	$offDiscount = "&offDiscount=220774";
	$textCuotas = $textCuotas50Off;


    switch (true) {
        case $oferta50:
            $ribbon = "ribbons50off.png";

            $precioConDescuento = $oferta50Precio;
            $oferta50Precio = $oferta50Precio;
            $numeroDescuento = 50;


            break;
        case $oferta65:
            $ribbon = "ribbons65off.png";

            $precioConDescuento = $oferta50Precio;
            $oferta50Precio = $sinOfertaPrecio - $oferta50Precio;
            $numeroDescuento = 65;

            break;
        case $oferta35:
            $ribbon = "ribbons35off.png";

            $precioConDescuento = $oferta50Precio;
            $oferta50Precio = $sinOfertaPrecio - $oferta50Precio;
            $numeroDescuento = 35;

            break;
        default:
            $ribbon = ""; // o null si preferís sin imagen

            $precioConDescuento = $oferta50Precio;
            $oferta50Precio = $oferta50Precio;

            $numeroDescuento = 0;
            break;
    }

}

$hideEfectivoText = "";
if( $hideEfectivo )
	$hideEfectivoText = "&hideBillet=1";

$linkProducto = $linkProducto.$offDiscount.$hideEfectivoText;



//esto es para si pasamos parametro test no cargamos pixel
$testPar = false;

if( isset( $_GET["test"] ) )
	$testPar = true;


if( !$testing && !$testPar )
	ob_start('comprimir_pagina_landing'); 

?><!DOCTYPE html>
<html lang="es-ES">
	<head>

		<?php include_once ($base . "inc/header-landing.php"); ?>
		
	</head>
    <body id="page-top" class="<?= $dirLanding ?>" >

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>

		<?php 
		if( $hayMenu )
			include_once( $base. "inc/nav.php");
		?>

		<section id="first-scroll" <?php if (!$timer) echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram" style="background-image: url(/img/landings/<?= $dirLanding ?>/bg-hero.jpg); background-size: cover">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
				Deja atrás los procesados. Aprende a nutrir a tu perro con amor y convierte ese saber en un proyecto con propósito
				</h1>

				<div class="subtitIcon">
					<i class="heart fa fa-volume-up"></i>
					<p>
						<b>ATENCIÓN</b> Sube el volumen, mira y escucha el video hasta el <b>FINAL</b>
					</p>
				</div>

				<div class="conteArrow">
					<div>
						<div class="animate" >Más</div>
					</div>
				</div>

				<div class="boxShadowVideo" itemprop="video" itemscope itemtype="https://schema.org/VideoObject">
					<?php 
					
					if ( ( $oferta50 || $oferta65 || $oferta35 ) && !$sinOferta) { ?>
						<img 
							src="/img/<?= $ribbon ?>" 
							alt="Oferta <?= $nombredelcurso ?>" 
							width="134" 
							height="129" 
							itemprop="image"                                    
						/>
					<?php } ?>

					<lite-vimeo videoid="<?= $videoPrincipalID ?>" itemprop="embedUrl" content="https://vimeo.com/<?= $videoPrincipalID ?>"></lite-vimeo>

					<meta itemprop="name" content="Video Principal del Curso de <?= $nombredelcurso ?>">
					<meta itemprop="description" content="Video donde <?= $autor ?> te explica todo sobre el curso de <?= $nombredelcurso ?>.">
					<meta itemprop="thumbnailUrl" content="https://vumbnail.com/<?= $videoPrincipalID ?>.jpg">

				</div>

				<div class="optesumVid">
					<div>
						<p>Ya somos más de </p>
						<p>359</p>
						<p>Pets Lovers</p>
					</div>
					<p>
						<u>¡SOLO FALTAS TU!</u>
					</p>
				</div>
				

			</div>
		</section>

		<?php include_once ($base . "inc/preload.php"); ?>
		
		<section class="bajada principal padding0" aria-labelledby="sub-header-title" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="sub-header">

				<h2 id="sub-header-title" itemprop="name">
					<span>APRENDE</span> a cocinar para tu perro de forma saludable y potencia su bienestar, previene enfermedades y alarga su vida.
					<span>CREA tu propio negocio</span> ayudando a otros a nutrir a sus peludos con amor y conciencia.
				</h2>
				
				<?php

                $params = ['class' => 'bgYellow', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => false];
                include ($base . "inc/landings/callToAction.php");

                ?>	
				
			</div>
		</section>
		
		<section id="aprender" class="bgYellow" itemscope itemtype="https://schema.org/EducationalOccupationalCredential">
		  <div class="section-heading text-center">
			<h2 itemprop="name">¿Qué vas a lograr?</h2>
		  </div>

		  <div class="container">
			<div itemprop="educationalCredentialAwarded" content="Certificado de <?= $nombredelcurso ?>">
			  <div itemprop="description">
				<p itemprop="competencyRequired"><b>Aprenderás a calcular la ración diaria PERFECTA</b> para tu perro según su peso, edad, nivel de actividad y necesidades específicas.</p>
				<p itemprop="competencyRequired"><b>Conocerás qué suplementos naturales necesita</b> su dieta para estar realmente completa, sin deficiencias ni excesos.</p>
				<p itemprop="competencyRequired"><b>Dominarás técnicas sencillas y efectivas</b> para preparar dietas cocinadas que sean completas y fáciles de preparar.</p>
				<p itemprop="competencyRequired"><b>Realizarás una transición alimentaria SEGURA Y EFECTIVA</b> sin riesgos para su sistema digestivo.</p>
				<p itemprop="competencyRequired"><b>Usarás recetas certificadas y tablas nutricionales</b> para empezar con confianza y respaldo profesional.</p>
				<p itemprop="competencyRequired"><b>Prolongarás su vida y reforzarás su salud</b> con una alimentación natural, consciente y alineada con su bienestar.</p>
			  </div>
			</div>
		  </div>
		</section>


		<section id="muestras" class="bgYellow" aria-labelledby="muestras-heading">

			<div class="section-heading text-center">
				<h2 id="muestras-heading">Muestras de nuestras alumnas</h2>
				<p>Así como ellas, tu <b>adquirirás las habilidades</b> y competencias para realizar <b>espectaculares preparaciones</b>.</p>
			</div>

			<?php include_once ($base . "inc/landings/muestras.php"); ?>

		</section>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>
		

		<section class="bajada" itemscope itemtype="https://schema.org/Article" aria-labelledby="sub-header-title">
			<div class="sub-header">
				<h2 id="sub-header-title" itemprop="headline" class="visually-hidden">
					<span>Nosotros cuidamos de nuestra alimentación,</span> 
					<span>pero ¿qué pasa con nuestra mascota?</span>
				</h2>
				<p itemprop="articleBody">
					<span>Una dieta inadecuada puede <b>acortar la vida de tu perro</b> y afectar su bienestar. <b>Dietas Cocinadas para Perros</b> te enseña a alimentarlo con amor, salud y confianza. Aprendé a cocinarle bien y <b>convertí su plato en una herramienta de cuidado real</b>.</span>
				</p>
			</div>
		</section>
		
		<section id="contenido" class="bg-pattern" itemscope itemtype="https://schema.org/Course">
		  <div class="container">
			<div class="text-center section-heading">

			  <h2 itemprop="name">¿Cómo lo vas a LOGRAR?</h2>

			  <p itemprop="description">
				Por medio de un curso <b>práctico y completo</b>, explicado paso a paso y en videos HD, conformado de la siguiente manera.
			  </p>

			  <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">

				<div>

					<div>
					  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
						<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
					  </svg>
					  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
						<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
					  </svg>
					  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
						<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
					  </svg>
					  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
						<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
					  </svg>
					  <span>
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
						  <path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>
						</svg>
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
						  <path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>
						</svg>
					  </span>
					</div>

					<p itemprop="ratingValue">4.7</p>

				</div>

				<div>
					<p><i class="fa fa-clock-o"></i>25 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>47 Evaluaciones</p>
				</div>

			  </div>		
			</div>


			<div id="temario" >
			  <div class="active" style="display: flex;justify-content: center;">

				<ul style="display:block" itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
				  <li itemprop="courseMode" content="online"><span>MÓDULO BIENVENIDA</span> – Bienvenida</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO BIENVENIDA</span> – Invitación al grupo de Facebook y Telegram</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 1</span> – Origen del perro y sus hábitos alimenticios</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 1</span> – Anatomía y fisiología del sistema digestivo del perro</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 1</span> – Macronutrientes</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 1</span> – Micronutrientes</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 2</span> – Tipos de alimentación para los perros</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 2</span> – Ventajas y desventajas de la dieta cocinada</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Dietas cocinadas con huesos</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Dietas cocinadas sin hueso</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Ejemplo de elaboración de dieta cocinada sin hueso</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Ejemplo de elaboración de dieta cocinada con hueso</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Condición corporal y cálculo de la ración diaria</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Suplementos obligatorios</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Elaboración de calcio a partir de cáscaras de huevo</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Otros suplementos</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Cómo balancear la dieta cocinada</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Ejemplos de menús cocinados</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Ajustes según necesidades individuales</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Cómo hacer el cambio de alimentación</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 3</span> – Consejos para preparar raciones</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 4</span> – Consideraciones a tener en cuenta</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 4</span> – Ayuno y ayuno intermitente</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 4</span> – La microbiota y su importancia</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 4</span> – El agua, la exposición a toxinas y el entorno</li>
				  <li itemprop="courseMode" content="online"><span>MÓDULO 4</span> – Despedida</li>
				  <li itemprop="courseMode" content="online"><span>BONUS PDF</span> – Guía completa de suplementos naturales</li>
				  <li itemprop="courseMode" content="online"><span>BONUS PDF</span> – Listado de frutas y verduras aptas para perros</li>
				  <li itemprop="courseMode" content="online"><span>BONUS PDF</span> – 8 Ejemplos de dietas cocinadas</li>
				  <li itemprop="courseMode" content="online"><span>BONUS PDF</span> – 2 Dietas modelo + Tabla nutricional</li>
				</ul>
			  </div>

			</div>



		  </div>
		</section>

		<?php

        $params = ['class' => 'bgWhite', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>


		<section id="tutor" class="bgYellow bg-pattern" aria-labelledby="tutor-heading">

			<div class="section-heading text-center">
				<h2 id="tutor-heading">¿Con quién lo vas a LOGRAR?</h2>
			</div>

			<div class="container" itemscope itemtype="https://schema.org/Person">
				<meta itemprop="jobTitle" content="Bio nutricionista, Experta en nutrición">
				<div>
					<div></div>
					<div>
						<h3>Con <b itemprop="name">Diana Fonseca</b></h3>
						<div>
							<h4 itemprop="jobTitle">Bio nutricionista</h4>
							<h4 itemprop="jobTitle">Experta en nutrición</h4>
						</div>					
					</div>
				</div>	

				<div>
					<div>
						<img 
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
							data-src="/img/landings/<?= $dirLanding ?>/<?= $autorSlug ?>-<?= $dirLanding ?>.jpg" 
							class="center-block img-rounded lazyload"  
							alt="<?= $autor ?> de <?= $nombredelcurso ?>"
							title="<?= $autor ?> de <?= $nombredelcurso ?>" 
							width="450" 
							height="450"							
							itemprop="image"
						/>
					</div>

					<div itemprop="description">

						<p>
							Experta en nutrición canina y felina, con una <b>certificación como Bio nutricionista</b> de perros y gatos y especializada en <u>repostería artesanal para perros y gatos, Dieta Barf o evolutiva y dieta cocinada.</u>. Con más de 9 años de experiencia en el sector de la alimentación natural de animales de compañía.
						</p>
						<p>
							<b>Estudió con veterinarios expertos</b> en nutrición canina y felina y en poco tiempo evidenció los cambios notables en la salud, pelaje y estado de ánimo de "Limon", su Beagle, comparándola con otras al ir al parque. En 2015 decidió abrir "Natural Taste", un local dedicado única y exclusivamente a la alimentación natural de perros y gatos.
						</p>
						
						<div class="alert alert-success">
							<p>
								Con esta alimentación quiere liberar a nuestras mascotas de la alimentación procesada y en sus propias palabras, <b>"cruel con nuestros hermosos peludos".</b>
							</p>
						</div>	

					</div>
				</div>
			</div>
		</section>	
	  
		<?php

        $subtitleAlumnas = ['subtitle' => ''];
        include_once ($base . "inc/landings/alumnasfelices.php");

        ?>
		
		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>

		<section id="bonos" class="bg-pattern" itemscope itemtype="https://schema.org/Course">

			<?php

            $bonos = [
                [
                    'img' => 'pdf-diapositivas-dietas-cocinadas-para-perros-diana-fonseca.png',
                    'alt' => 'Resumen visual completo para seguir el curso sin tomar apuntes.',
                    'precio' => $bono1,
                    'descripcion' => '<b>Resumen visual completo</b> para seguir el curso sin tomar apuntes.',
                ],
                [
                    'img' => 'guia-completa-de-suplementos-dietas-cocinadas-para-perros-diana-fonseca.png',
                    'alt' => 'Guía esencial de suplementos con usos y beneficios paso a paso.',
                    'precio' => $bono2,
                    'descripcion' => '<b>Guía esencial de suplementos</b> con usos y beneficios paso a paso.',
                ],
                [
                    'img' => '2-dietas-modelo-tabla-nutricional-dietas-cocinadas-para-perros-diana-fonseca.png',
                    'alt' => '2 dietas listas para usar con tablas nutricionales y fórmulas profesionales.',
                    'precio' => $bono3,
                    'descripcion' => '<b>2 dietas listas para usar</b> con tablas nutricionales y fórmulas profesionales.',
                ],
                [
                    'img' => '8-ejemplos-dietas-cocinadas-para-perros-diana-fonseca.png',
                    'alt' => '8 menús cocinados reales listos para poner en práctica hoy mismo.',
                    'precio' => $bono4,
                    'descripcion' => '<b>8 menús cocinados reales</b> listos para poner en práctica hoy mismo.',
                ],
                [
                    'img' => 'private-group.png',
                    'alt' => 'Tendrás acceso de por vida a nuestro grupo privado de Facebook y Telegram.',
                    'precio' => "Invaluable",
                    'descripcion' => 'Tendrás <b>acceso de por vida</b> a nuestro grupo privado de Facebook y Telegram.',
                ],
            ];


            $cantBonos = count($bonos);

            ?>

			<div class="text-center section-heading">
				<h2 itemprop="name">Recibe GRATIS <?= $cantBonos ?> Bonos</h2>
				<p itemprop="description">
					<b class="blockMobile">SOLO POR HOY</b> con tu inscripción recibirás totalmente <b>GRATIS <?= $cantBonos ?> bonos</b> valorados en <b>+ de <?= $currency ?> <?= $bonosTotal ?></b>.
				</p>
			</div>

			<?php

            include_once ($base . "inc/landings/bonos.php");

            ?>

		</section>

		<section id="certificado" class="backDark" aria-labelledby="certificado-heading" itemscope itemtype="https://schema.org/EducationalOccupationalCredential">
			<div class="back1080">
				<img 
					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
					data-src="/img/landings/<?= $dirLanding ?>/diploma.png" 
					class="lazyload"  
					alt="Certificado como profesional en <?= $nombredelcurso ?> avalado por <?= $autor ?>" 
					title="Certificado como profesional en <?= $nombredelcurso ?> avalado por <?= $autor ?>" 
					width="354" 
					height="354"
					itemprop="image"
				/>

				<div>
					<h2 id="certificado-heading" itemprop="name">Certifícate como profesional</h2>

					<p itemprop="description">
						<span>Al finalizar el curso, tendrás un <b>certificado de conclusión digital</b>, el cual podrás imprimir y compartirlo en <b>el grupo VIP</b>.</span>
						<span>Estamos seguros que cuando lo hagas sentirás una satisfacción de saber que estás lista para crear deliciosos platillos para tu peludo y crear tu propio negocio en esta bonita actividad.</span>
					</p>

				</div>
			</div>
		</section>


		<section id="video-adicional" class="bgYellow bg-pattern" aria-labelledby="video-adicional-heading" itemscope itemtype="https://schema.org/VideoObject">
			<div class="back768">
        
				<div class="text-center section-heading">
					<h2 id="video-adicional-heading" itemprop="name">WOW, Diana quiere decirte</h2>
					<p itemprop="description">
						<b>IMPORTANTE</b> Presta mucha ATENCIÓN al siguiente video.
					</p>
				</div>        

				<div class="boxShadowVideo" itemprop="video">
					<lite-vimeo videoid="<?= $videoAdicionalID ?>"></lite-vimeo>
				</div>    
        
			</div>
		</section> 	
		
		
		
		<?php include_once ($base . "inc/landings/header-beneficios.php"); ?>

		<?php include_once ($base . "inc/landings/beneficios.php"); ?>  

		<?php

        $masBeneficios = [
            "Más de 25 lecciones en video, formato súper HD.",
            "TUS $cantBonos bonos valuados en + de $currency $bonosTotal.",
            "SORPRESAS Y REGALOS... videos, playbooks, publicaciones, imágenes, actualizaciones y presentaciones."
        ];

        include ($base . "inc/landings/mas-beneficios.php");

        ?>


		<?php include_once ($base . "inc/landings/precio.php"); ?>

		<?php include_once ($base . "inc/landings/precio-beneficios.php"); ?>

		<section id="video-por-dentro" class="bgYellow bg-pattern" aria-labelledby="video-por-dentro-heading" itemscope itemtype="https://schema.org/VideoObject">
			<div class="back768">
        
				<div class="text-center section-heading">
					<h2 id="video-por-dentro-heading" itemprop="name">¿Quíeres dar un vistazo?</h2>
					<p itemprop="description">
						Aquí podrás ver cómo es <b>el curso por dentro</b>.
					</p>
				</div>        

				<div class="boxShadowVideo" itemprop="video">
					<lite-vimeo videoid="<?= $videoMuestraID ?>"></lite-vimeo>
				</div>    
        
			</div>
		</section>
		
	
		<?php include_once ($base . "inc/landings/garantia.php"); ?>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>
		
		<?php include_once ($base . "inc/landings/faq.php"); ?>

		<?php

        $params = ['class' => 'bgWhite', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>
	  
		<?php include_once ($base . "inc/landings/footer-landing.php"); ?>
		
   </body>

</html><?php 

if( !$testing && !$testPar )
	ob_end_flush(); 

?>