<?php 

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "peluqueria-para-gatos";
$assetDir = "peluqueria-para-perros";
$nombredelcurso = "Peluquería para Gatos";
$autor = "Fabio Gomez Sepulveda";
$autorSlug = "fabio-gomez-sepulveda";

include $base. "inc/functions.php";

//precios en dolares
$oferta50Precio  	= getPrecio(25);
$sinOfertaPrecio 	= getPrecio(49.99);

$currency 			= getCurrency();

$landingData 		= getLandingData();
$imgPagosBillet 	= $landingData["IMGBILLET"];
$puedesAbonarCon 	= $landingData["SHOWMEDIOS"];
$medioPagoEfectivo  = $landingData["TEXTMEDIOSPAGO"];

if( COUNTRYCODE == "ar" || COUNTRYCODE == "cl" || COUNTRYCODE == "eu" ){

	$textCuotasFull = "Tarjeta de crédito.";
	$textCuotas50Off = "Tarjeta de crédito.";
	
}else if( COUNTRYCODE == "co" ){
	
	$textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(4.166) ."</b>."; 
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(2.082) ."</b>.";
	
}else if( COUNTRYCODE == "pe" ){	

	$textCuotasFull =  "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(4.165,1) ."</b>.";
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(2.082,1) ."</b>.";
			
}else if( COUNTRYCODE == "mx" ){
	
	$textCuotasFull =  "Tarjeta de crédito hasta en <b>9 cuotas</b> de <b>".$currency." ". getPrecio(6.454,1) ."</b>."; 
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>3 cuotas</b> de <b>".$currency." ". getPrecio(8.886,1) ."</b>.";
			
}else{
	
	$textCuotasFull =  ""; 
	$textCuotas50Off = "";
			
}


//cuando esta arriba este "testing" hay que comentarlo. NO PONERLO EN FALSE NI REMOVERLO, cuando estamos en "localhost" automaticamente todo el sitio entra en testing y cuando esta arriba todo pasa a prod.
//$testing = true;

$whatsAppMessage = 'Tengo la siguiente duda sobre el curso "'.$nombredelcurso.'" ...';

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
$datePublished = "2022-08-30";

// fecha de ultima modificacion
$dateModified = "2022-08-31";

// nombre de imagen para compartir.
$imgShare = "compartir-".$assetDir.".jpg";

// cuantas alumnas felicies hay
$alumnasfelices = 7;

// cuantas muestras hay
$muestras = 8;

// grupos privados
$g_telegram = false;
$g_facebook = true;
$g_whatsaup = true;

// descripcion
$des = "Fabio Gomez Sepulveda te enseñará todo sobre estética y peluquería para gatos desde nivel básico a avanzado. Apresúrate que cerramos inscripciones pronto - Petz School.";

// titulo
$tit = "✓ Aprende desde cero todo sobre estética y Peluquería para Gatos y crea tu Propio Negocio - Petz School - Fabio Gomez Sepulveda";

$videoPrincipalID 	= "754755494";
$videoMuestraID		= "754755367";
$videoAdicionalID	= "754755452";


//OFERTAS SETTINGS, elegir una de las 2, si esta activo uno con "true" los otros 2 tienen que estar en "false"

$oferta50  = true;
$sinOferta = false;

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

$linkProducto = "https://pay.hotmart.com/A43208214N?checkoutMode=10&ref=C68603072E&bid=1748211318374";


//De aca para abajo no hay que tocar nada

$offDiscount = "";
$textCuotas = $textCuotasFull;

if( $oferta50 ){
	
	$offDiscount = "&offDiscount=031016";
	$textCuotas = $textCuotas50Off;
	
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

                <?php
                $dirLandingTemp = $dirLanding;
                $dirLanding = $assetDir;
                include_once ($base . "inc/header-landing.php");
                $dirLanding = $dirLandingTemp;
                ?>
		
	</head>
    <body id="page-top" class="<?= $dirLanding ?>">

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>
  
		<?php 
		if( $hayMenu )
			include_once( $base. "inc/nav.php");
		?>
		
		<section id="first-scroll" <?php if (!$timer) echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="container back1080">

                                <h1 id="first-scroll-heading" itemprop="name">
                                        Aprende desde cero todo sobre estética y <b>Peluquería para Gatos</b> y crea tu Propio Negocio
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
					<?php if ($oferta50 && !$sinOferta) { ?>
						<img 
							src="/img/ribbons50off.png" 
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
						<p>2583</p>
						<p>Groomers </p>
					</div>
					<p>
						<u>¡SOLO FALTAS TU!</u>
					</p>
				</div>

                                <img src="/img/landings/<?= $assetDir ?>/<?= $assetDir ?>-ico.svg" class="icon" alt="tijeras grooming <?= $nombredelcurso ?>" width="82" height="82" />
                                <img src="/img/landings/<?= $assetDir ?>/<?= $assetDir ?>-ico.svg" class="icon last" alt="tijeras grooming <?= $nombredelcurso ?>" width="82" height="82" />

			</div>
		</section>


		<?php include_once ($base . "inc/preload.php"); ?>
	
		<section class="bajada principal padding0" aria-labelledby="sub-header-title" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="sub-header">

                                <h2 id="sub-header-title" itemprop="name">
                                        <span>CONVIÉRTETE</span> en un profesional certificado en estética y peluquería para gatos, <u itemprop="courseMode" content="online">conoce los cuidados más importantes</u> para todo tipo de felinos.
                                        <span>CREA tu propio negocio</span> emprendiendo en un sector en crecimiento <u itemprop="courseMode" content="online">dominando las técnicas más novedosas de cortes</u>.
                                </h2>
				
				<?php

				$params = ['class' => 'bgYellow', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => false ];
				include ($base . "inc/landings/callToAction.php");

				?>	
				
			</div>
		</section>	

		<section id="aprender" class="bgYellow">

			<div class="section-heading text-center">
				<h2>¿Qué vas a APRENDER?</h2>
			</div>
    
			<div class="container">
				<div>
                                        <div>
                                                <p><b>Parte 1:</b> Introducción a la peluquería felina, consejos antes del baño y herramientas iniciales.</p>
                                                <p><b>Parte 2:</b> La piel del gato y la cosmética. Conociendo a los gatos.</p>
                                                <p><b>Parte 3:</b> Cómo recepcionar al gato en la peluquería.</p>
                                                <p><b>Parte 4:</b> Antes de bañar un gato por primera vez.</p>
                                                <p><b>Parte 5:</b> Relacionando al gato con la herramienta.</p>
                                                <p><b>Parte 6:</b> Preparación del gato antes del baño.</p>
                                                <p><b>Parte 7:</b> Cómo bañar al gato.</p>
                                                <p><b>Parte 8:</b> Cómo secar al gato.</p>
                                                <p><b>Parte 9:</b> Resultado del primer baño y consejos importantes.</p>
                                                <p><b>Parte 10:</b> Cómo iniciar la peluquería con un gato adulto.</p>
                                                <p><b>Parte 11:</b> Técnica del precorte.</p>
                                                <p><b>Parte 12:</b> Preparación del gato antes del baño e introducción al precorte.</p>
                                                <p><b>Parte 13:</b> Cómo bañar al gato adulto.</p>
                                                <p><b>Parte 14:</b> Cómo secar al gato.</p>
                                                <p><b>Parte 15:</b> Peluquería final: técnica de pulido y acabados.</p>
                                                <p><b>Parte 16:</b> Modelo 3, gato temperamental.</p>
                                                <p><b>Parte 17:</b> Trabajo con máquina.</p>
                                                <p><b>Parte 18:</b> Cómo desenredar al gato.</p>
                                                <p><b>Parte 19:</b> Precorte con tijera.</p>
                                                <p><b>Parte 20:</b> Baño para un gato temperamental.</p>
                                                <p><b>Parte 21:</b> Secado rápido.</p>
                                                <p><b>Parte 22:</b> Corte final tipo peluche (acabados).</p>
                                                <p><b>Parte 23:</b> Resultado final y consejos importantes.</p>
                                                <p><b>Parte 24:</b> Despedida con información de oro.</p>
                                        </div>
                                </div>
                        </div>
                </section>

		<section id="muestras" class="bgYellow" aria-labelledby="muestras-heading">

			<div class="section-heading text-center">
				<h2 id="muestras-heading">Muestras de nuestros alumnos</h2>
				<p>Así como ellos, tu <b>adquirirás las habilidades</b> y competencias para realizar <b>espectaculares cortes</b>.</p>
			</div>

                        <?php
                        $dirLandingTemp = $dirLanding;
                        $dirLanding = $assetDir;
                        include_once ($base . "inc/landings/muestras.php");
                        $dirLanding = $dirLandingTemp;
                        ?>

		</section>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true ];
        include ($base . "inc/landings/callToAction.php");

        ?>	
		
		<section class="bajada" itemscope itemtype="https://schema.org/Article" aria-labelledby="sub-header-title">
			<div class="sub-header">
				<h2 id="sub-header-title" itemprop="headline">
					¿Sabías que la industria de las mascotas continúa creciendo en todo el mundo?
				</h2>
				<p itemprop="articleBody">
					Las mascotas se han convertido en <b>un miembro más de nuestra familia</b> y cada vez hay una mayor cultura sobre la tenencia y el aseo que necesitan. <span>Ahora NO es un lujo, sino una necesidad para mantenerla en óptimas condiciones.</span>
				</p>
			</div>
		</section>
		

		
		<section id="contenido" class="bg-pattern" itemscope itemtype="https://schema.org/Course">
			<meta itemprop="name" content="<?= $nombredelcurso ?>">
			<meta itemprop="description" content="<?= $des ?>">
			<div itemprop="provider" itemscope itemtype="https://schema.org/Organization">
				<meta itemprop="name" content="Petz School junto a <?= $autor ?>">
			</div>
			<meta itemprop="datePublished" content="<?= $datePublished ?>">
			<meta itemprop="dateModified" content="<?= $dateModified ?>">

		  <div class="container">
			<div class="text-center section-heading">

			  <h2 itemprop="name">¿Cómo lo vas a LOGRAR?</h2>

			  <p itemprop="description">
				Por medio de un curso <b>práctico y completo</b>, explicado paso a paso y en videos HD, conformado de la siguiente manera.
			  </p>
			  <meta itemprop="dateModified" content="<?= $y ?>-<?= $mes ?>-01">
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
					<p><i class="fa fa-clock-o"></i>47 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>321 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" >
			  <div class="active">
				<h3>
                                  <button>INTRODUCCIÓN - PELUQUERIA PARA GATOS</button>
				</h3>
				<ul style="display:block" itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					 <meta itemprop="courseWorkload" content="PT4H" />
                                        <li itemprop="courseMode" content="online"><span>PARTE 1 - A</span> - Introducción a la peluquería felina.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 1 - B</span> – Introducción a la peluquería felina.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 1 - C</span> – Lenguaje técnico que debe tener un estilista.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 2 - A</span> – Cosmetología aplicada al manto del gato.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 2 - B</span> – Cosmetología aplicada al manto del gato.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 3</span> – Introducción a la parte práctica en peluquería felina.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 4</span> – Seguridad en la peluquería.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 5</span> – Manejo del gato.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 6</span> – Herramientas de peluquería felina.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 7</span> – Productos que vas a necesitar en la peluquería felina.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 8</span> – Preparación del gato antes del baño.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 9</span> – Cómo bañar al gato.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 10</span> – Cómo secar al gato.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 11</span> – Arreglo de almohadillas, higiénico y como despejar ojos.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 12</span> – Corte de maquina y tijera en cuerpo y cabeza.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 13</span> – Arreglo de cabeza y orejas.</li>
                                        <li itemprop="courseMode" content="online"><span>PARTE 14</span> – Resultado final primer curso básico de peluquería felina.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 15</span> – Certificación.</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>NIVEL INTERMEDIO</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					 <meta itemprop="courseWorkload" content="PT2H" />
				  <li itemprop="courseMode" content="online"><span>PARTE 1</span> – Certificaciones nivel intermedio.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2</span> – Introducción nivel intermedio.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 3 - A</span> – Principios básicos que componen un corte de pelo.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 3 - B</span> – Principios básicos que componen un corte de pelo.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 4</span> – Principios básicos. Primer modelo.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 5 - A</span> – Herramientas y cosmética para modelo dos.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 5 - B</span> – Herramientas y cosmética para modelo tres.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 6 - A</span> – Arreglo de la raza Westy.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 6 - B</span> – Arreglo de la raza Westy.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 6 - C</span> – Arreglo de la raza Westy.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 6 - D</span> – Arreglo de la raza Westy.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 7 - A</span> – Arreglo de la raza Schnauzer.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 7 - B</span> – Arreglo de la raza Schnauzer.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 8 - A</span> – Arreglo de la raza Fox Terrier.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 8 - B</span> – Arreglo de la raza Fox Terrier.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 8 - C</span> – Arreglo de la raza Fox Terrier.</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>NIVEL INTERMEDIO II</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					 <meta itemprop="courseWorkload" content="PT2H" />
				  <li itemprop="courseMode" content="online"><span>PARTE 1</span> – Introducción nivel intermedio II.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - A</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - B</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - C</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - D</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - E</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - F</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - G</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - H</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - I</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - J</span> – Arreglo del Yorky.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - K</span> – Arreglo del Yorky.</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>NIVEL AVANZADO</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					 <meta itemprop="courseWorkload" content="PT4H" />
				  <li itemprop="courseMode" content="online"><span>PARTE 1</span> – Un camino Fascinante!</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - A</span> – Clases que valen oro, corte cachorro en un Shih Tzu.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 2 - B</span> – Clases que valen oro, corte cachorro en un Shih Tzu.</li>
				  <li itemprop="courseMode" content="online"><span>PARTE 3</span> – Accede a las 20 clases.</li>
				</ul>
			  </div>
			</div>

			<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
				<meta itemprop="priceCurrency" content="<?= $currency ?>" />
				<?php if ($sinOferta) { ?>    
				<meta itemprop="price" content="<?= $sinOfertaPrecio ?>" />
				<?php } else if ($oferta50) { ?>        
				<meta itemprop="price" content="<?= $oferta50Precio ?>" />
				<meta itemprop="highPrice" content="<?= $sinOfertaPrecio ?>" />
				<meta itemprop="lowPrice" content="<?= $oferta50Precio ?>" />
				<?php } ?>
				<link itemprop="url" href="<?= CURRENTURL; ?>" />
				<meta itemprop="availability" content="https://schema.org/InStock" />
				<meta itemprop="category" content="Education" />
			</div>

			<div itemprop="provider" itemscope itemtype="https://schema.org/Organization" class="visually-hidden">
				<span itemprop="name">Petz School</span>
				<link itemprop="url" href="https://petzschool.com" />
				<meta itemprop="sameAs" content="https://www.facebook.com/petzschool" />
				<meta itemprop="sameAs" content="https://www.instagram.com/petz.school" />
			</div>

		  </div>
		</section>

		
		<section id="video-por-dentro" aria-labelledby="video-por-dentro-heading" itemscope itemtype="https://schema.org/VideoObject">
			<div class="back768">
        
				<div class="text-center section-heading">
					<h2 id="video-por-dentro-heading" itemprop="name">¿Quieres dar un vistazo?</h2>
					<p itemprop="description">
						Mira con atención el siguiente video donde Fabio <b>te explica como es el curso por dentro</b>.
					</p>
				</div>        

				<div class="boxShadowVideo" itemprop="video">
					<lite-vimeo videoid="<?= $videoMuestraID ?>"></lite-vimeo>
				</div>    
        
			</div>
		</section>
	
		
		<?php

        $params = ['class' => 'bgWhite', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => true ];
        include ($base . "inc/landings/callToAction.php");

        ?>

		
		<section class="bajada hide480 padding0" itemscope itemtype="https://schema.org/Article" aria-labelledby="bajada-heading">
			<div class="sub-header">
				<h2 id="bajada-heading" class="visually-hidden">Información Adicional sobre el Curso</h2>
				<p itemprop="articleBody">
					<span>Al finalizar el curso <b>te sorprenderás</b></span> de lo fascinante que es el mundo de la peluquería para mascotas y entenderás la importancia de <u>una formación seria</u> que te genere confianza para llevar tu profesión al máximo nivel.
				</p>
			</div>
		</section>	

		
		<section id="tutor" class="bgYellow bg-pattern" aria-labelledby="tutor-heading">

			<div class="section-heading text-center">
				<h2 id="tutor-heading">¿Con quién lo vas a LOGRAR?</h2>
			</div>

			<div class="container" itemscope itemtype="https://schema.org/Person">
                                <meta itemprop="jobTitle" content="Estilista felino, Handler felino, Groomer felino">
				<div>
					<div></div>
					<div>
						<h3>Con <b itemprop="name">Fabio Gomez Sepulveda</b></h3>
						<div>
                                                        <h4 itemprop="jobTitle">Estilista felino</h4>
                                                        <h4 itemprop="jobTitle">Handler felino</h4>
                                                        <h4 itemprop="jobTitle">Groomer felino</h4>
						</div>					
					</div>
				</div>	

				<div>
					<div>
						<img 
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="/img/landings/<?= $assetDir ?>/<?= $autorSlug ?>-<?= $assetDir ?>.jpg"
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
                                                        Desarrollado por <b>Fabio Ernesto Gomez Sepulveda</b>, <u>estilista felino profesional, handler, ponente internacional</u> y escultor con participación en uno de los congresos más grandes e importantes del mundo de las mascotas. <b>Ganador de múltiples Best In Show</b> en diferentes competencias de belleza y de peluquería felina.
						</p>

						<p>
							Cuenta con estudiantes en México, Colombia, Costa Rica, El Salvador, Guatemala, USA, España y Canadá quienes ya se encuentran trabajando con excelentes resultados en sus emprendimientos.
						</p>						
                
						<div>
							<p>
                                                                Estudiar peluquería felina nunca fue tan fácil. Aprende un arte que puedas <b>desempeñar en cualquier lugar</b>.
							</p>
						</div>				
					</div>
				</div>
			</div>
		</section>

		<?php

        $subtitleAlumnas = ['subtitle' => ''];
        $dirLandingTemp = $dirLanding;
        $dirLanding = $assetDir;
        include_once ($base . "inc/landings/alumnasfelices.php");
        $dirLanding = $dirLandingTemp;

        ?>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true ];
        include ($base . "inc/landings/callToAction.php");

        ?>

		
		<section id="certificado" class="backDark" aria-labelledby="certificado-heading" itemscope itemtype="https://schema.org/EducationalOccupationalCredential">
			<div class="back1080">
				<img 
					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="/img/landings/<?= $assetDir ?>/diploma.png"
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
						<span>Al finalizar el curso podrás imprimir tu <b>certificado de conclusión digital</b> y colgarlo donde tu quieras.</span>
                                                <span>Estamos seguros que cuando lo hagas sentirás la satisfacción de saber que estás listo para <b>realizar increíbles cortes felinos</b> y crear tu propio negocio en esta bonita actividad.</span>
					</p>

				</div>
			</div>
		</section>

		<section id="video-adicional" class="bgYellow bg-pattern" aria-labelledby="video-adicional-heading" itemscope itemtype="https://schema.org/VideoObject">
			<div class="back768">
        
				<div class="text-center section-heading">
					<h2 id="video-adicional-heading" itemprop="name">Fabio responde</h2>
					<p itemprop="description">
                                                <b>¿Se puede hacer un curso de peluquería para gatos online?</b>
					</p>
				</div>        

				<div class="boxShadowVideo" itemprop="video">
					<lite-vimeo videoid="<?= $videoAdicionalID ?>"></lite-vimeo>
				</div>    
        
			</div>
		</section>
	
		
                <?php
                $dirLandingTemp = $dirLanding; $dirLanding = $assetDir;
                include_once ($base . "inc/landings/header-beneficios.php");
                include_once ($base . "inc/landings/beneficios.php");
                include_once ($base . "inc/landings/precio.php");
                include_once ($base . "inc/landings/precio-beneficios.php");
                include_once ($base . "inc/landings/garantia.php");
                $dirLanding = $dirLandingTemp;
                ?>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => true ];
        include ($base . "inc/landings/callToAction.php");

        ?>
		
                <?php
                $dirLandingTemp = $dirLanding;
                $dirLanding = $assetDir;
                include_once ($base . "inc/landings/faq.php");
                $dirLanding = $dirLandingTemp;
                ?>

		<?php

		$params = ['class' => 'bgWhite', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true ];
		include ($base . "inc/landings/callToAction.php");
		
		?>
	  
                <?php
                $dirLandingTemp = $dirLanding;
                $dirLanding = $assetDir;
                include_once ($base . "inc/landings/footer-landing.php");
                $dirLanding = $dirLandingTemp;
                ?>
		
   </body>

</html><?php 

if( !$testing && !$testPar )
	ob_end_flush(); 

?>
