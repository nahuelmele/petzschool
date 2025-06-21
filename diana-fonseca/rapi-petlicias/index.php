<?php 

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "rapi-petlicias";
$nombredelcurso = "Rapi Petlicias";
$autor = "Diana Fonseca";
$autorSlug = "diana-fonseca";

include $base. "inc/functions.php";

//precios en dolares
$oferta50Precio  	= getPrecio(27.99);
$sinOfertaPrecio 	= getPrecio(79.98);

$bono1 = getPrecio(11);
$bono2 = getPrecio(20);
$bono3 = getPrecio(20);
$bonosTotal = getPrecio(51);	

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
$datePublished = "2025-03-12";

// fecha de ultima modificacion
$dateModified = "2025-03-18";

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
$des = "¿🍔 Fast Food para Mascotas? ¡Sí, pero 🥦 Saludable y con Mucho Amor ❤️! Cocina para TU Perro o Gato y Crea un Negocio tan Sabroso como Único. 🚀 ¡Sumate HOY!";
//$des = "Cocina con Amor y emprende con éxito en el mundo de la comida rápida para mascotas - Petz School.";

// titulo
$tit = "✓ Promo 65% Off en el Curso de Rapi Petlicias de Diana Fonseca - Petz School";

$videoPrincipalID = "1090428662";
$videoMuestraID = "1090430819";
$videoAdicionalID = "1090431535";


//OFERTAS SETTINGS, elegir una de las 2, si esta activo uno con "true" los otros 2 tienen que estar en "false"

$oferta50 = false;
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

$linkProducto = "https://go.hotmart.com/U79119383E?ap=8079";


//De aca para abajo no hay que tocar nada


$offDiscount = "";
$textCuotas = $textCuotasFull;

if ($oferta50 || $oferta65 || $oferta35) {

    //en este caso esta con el descuento ya en el link y si le aplico esto me hace un descuento sobre el descuento
    //$offDiscount = "&offDiscount=220774";
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

		<?php include_once ($base . "inc/header-landing-performance.php"); ?>
		
	</head>
    <body id="page-top" class="<?= $dirLanding ?>" >

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>

		<?php 
		if( $hayMenu )
			include_once( $base. "inc/nav.php");
		?>

		<section id="first-scroll" <?php if (!$timer) echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram" style="background-image: url(/img/landings/<?= $dirLanding ?>/bg-hero.webp); background-size: cover">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
				¿Fast Food para Mascotas? ¡Sí, pero saludable y con mucho amor! Cociná para tu perro o gato y creá un negocio tan sabroso como único
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

                    if (($oferta50 || $oferta65 || $oferta35) && !$sinOferta) { ?>
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
						<p>397</p>
						<p>Pets Lovers</p>
					</div>
					<p>
						<u>¡SOLO FALTAS TU!</u>
					</p>
				</div>
				
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-pizza.png" class="icon" alt="pizza <?= $nombredelcurso ?>" width="120" height="120" />
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-pizza.png" class="icon last" alt="pizza <?= $nombredelcurso ?>" width="120" height="120" />

			</div>
		</section>

		<?php include_once ($base . "inc/preload.php"); ?>
		
		<section class="bajada principal padding0" aria-labelledby="sub-header-title" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="sub-header">

				<h2 id="sub-header-title" itemprop="name">
					<span>APRENDE</span> a cocinar con propósito, emoción y técnica... y vuelvete una referente en un sector que está explotando.
					<span>CREA tu propio negocio que derrita colas y corazones.</span> Ofrecé fast food saludable, divertido y delicioso para perros y gatos. <u>¡Emprendé con alma y dejá TU huella en la vida de los peludos!</u>.
				</h2>
				
				<?php

                $params = ['class' => 'bgYellow', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => false];
                include ($base . "inc/landings/callToAction.php");

                ?>	
				
			</div>
		</section>
		
		<section id="aprender" class="bgYellow" itemscope itemtype="https://schema.org/EducationalOccupationalCredential">
			<div class="section-heading text-center">
				<h2 itemprop="name">¿Qué vas a APRENDER?</h2>
			</div>
    
			<div class="container">
				<div itemprop="educationalCredentialAwarded" content="Certificado de <?= $nombredelcurso ?>">
					<div itemprop="description">
						<p itemprop="competencyRequired">Preparar <b>comidas rápidas, caseras y explosivamente saludables</b> para perros y gatos, hechas a medida de sus necesidades nutricionales.</p>
						<p itemprop="competencyRequired">Elaborar <b>hamburguesas, hot dogs, nuggets, tacos, pizza pocket y hasta cerveza</b> para mascotas, con ingredientes 100% naturales y aptos para su dieta carnívora.</p>
						<p itemprop="competencyRequired">Aprender <b>paso a paso con videos en HD</b> en un curso <b>divertido, práctico y al grano</b> que te va a encantar desde la primera receta.</p>
						<p itemprop="competencyRequired">Sorprender a tu peludo con platos que imitan la comida rápida humana, pero <u><b>sin conservantes ni porquerías industriales</b></u>. ¡Solo sabor y salud real!</p>
						<p itemprop="competencyRequired">Descubrir <b>formas creativas y nutritivas</b> de revolucionar su alimentación… y por qué no, <b>crear algo grande a partir de eso</b>.</p>
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
					<span>Sorprende a tu perro o gato con hamburguesas, nuggets, tacos y hasta cerveza, elaborados con ingredientes 100% naturales y adaptados a su nutrición. 🎯 Un curso divertido, práctico y fácil de seguir que te permitirá preparar recetas únicas en casa.</span> 
					<span><b>Haz feliz a tu mascota con cada bocado. <u>¡Inscríbete ahora y empieza a cocinar!</u></b></span>
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
					  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
						<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
					  </svg>
					</div>

					<p itemprop="ratingValue">5.0</p>

				</div>

				<div>
					<p><i class="fa fa-clock-o"></i>27 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>17 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" class="two-cols">
			  <div class="active">
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No 1.</span> – Bienvenida.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 2.</span> – Invitación al grupo de Facebook.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 3.</span> – Recetario.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 4.</span> – Pan para hamburguesa.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 5.</span> – Salsas.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 6.</span> – Hamburguesa.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 7.</span> – Pan para perro caliente.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 8.</span> – Salchichas caseras.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 9.</span> – Pan para club sándwich.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 10.</span> – Club sándwich.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 11.</span> – “Papas fritas” de pollo o pavo.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 12.</span> – Salchipapa.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 13.</span> – Crepe de avena.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 14.</span> – Crepe de pollo.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 15.</span> – Masa para pizza pocket o pizza calzone.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 16.</span> – Salsa para pizza calzone.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 17.</span> – Pizza pocket / pizza calzone.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 18.</span> – Nuggets.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 19.</span> – Tortillas para tacos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 20.</span> – Tacos de carne.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 21.</span> – Base para quiche Lorraine.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 22.</span> – Quiche clásico.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 23.</span> – “Pop corn” de pescado.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 24.</span> – Caldo para bebidas.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 25.</span> – Cerveza para perros y gatos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 26.</span> – Petsi-Cola para perros y gatos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 27.</span> – Despedida.</li>
					<li itemprop="courseMode" content="online"><span>BONUS</span> – PDF 4 recetas, 2 desayunos y 2 bebidas.</li>
					<li itemprop="courseMode" content="online"><span>BONUS</span> – PDF Guía de marketing para redes sociales.</li>
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
							Experta en nutrición canina y felina, con una <b>certificación como Bio nutricionista</b> de perros y gatos y especializada en <u>repostería artesanal canina y felina</u>. Con más de 9 años de experiencia en el sector de la alimentación natural de animales de compañía.
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
                    'img' => 'recetario-rapi-petlicias-diana-fonseca.png',
                    'alt' => 'Recetario Diana Fonseca Rapi Petlicias',
                    'precio' => $bono1,
                    'descripcion' => '<b>Recetario incluido</b>. Todas las recetas del curso, siempre a tu alcance sin tomar apuntes.',
                ],
                [
                    'img' => 'recetas-exclusivas-rapi-petlicias-diana-fonseca.png',
                    'alt' => 'Recetas Exclusivas Diana Fonseca Rapi Petlicias',
                    'precio' => $bono2,
                    'descripcion' => '<b>Recetas exclusivas</b> de 2 PawPuchinos y 2 desayunos aptos para perros.',
                ],
                [
                    'img' => 'guia-marketing-rapi-petlicias-diana-fonseca.png',
                    'alt' => 'Guia de Marketing Diana Fonseca Rapi Petlicias',
                    'precio' => $bono3,
                    'descripcion' => '<b>Guía de Marketing Digital</b> Aprende a destacar tu negocio en redes sociales.',
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
            "Más de 27 lecciones en video, formato súper HD.",
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