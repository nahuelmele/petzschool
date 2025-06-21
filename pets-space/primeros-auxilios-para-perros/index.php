<?php 

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "primeros-auxilios-para-perros";
$nombredelcurso = "Primeros Auxilios para Perros";
$autor = "Laura Viviana Castro Sabogal";
$autorSlug = "laura-viviana-castro-sabogal";

include $base. "inc/functions.php";

//precios en dolares
$oferta50Precio = getPrecio(25);
$sinOfertaPrecio = getPrecio(49.99);

$currency = getCurrency();

$landingData = getLandingData();
$imgPagosBillet = $landingData["IMGBILLET"];
$puedesAbonarCon = $landingData["SHOWMEDIOS"];
$medioPagoEfectivo = $landingData["TEXTMEDIOSPAGO"];

if (COUNTRYCODE == "ar" || COUNTRYCODE == "cl" || COUNTRYCODE == "eu") {

    $textCuotasFull = "Tarjeta de crédito.";
    $textCuotas50Off = "Tarjeta de crédito.";

} else if (COUNTRYCODE == "co") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(4.166) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(2.082) . "</b>.";

} else if (COUNTRYCODE == "pe") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(4.165, 1) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(2.082, 1) . "</b>.";

} else if (COUNTRYCODE == "mx") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>9 cuotas</b> de <b>" . $currency . " " . getPrecio(6.454, 1) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>3 cuotas</b> de <b>" . $currency . " " . getPrecio(8.886, 1) . "</b>.";

} else {

    $textCuotasFull = "";
    $textCuotas50Off = "";

}

$bono1 = getPrecio(8);
$bono2 = getPrecio(12);
$bono3 = getPrecio(16);
$bono4 = getPrecio(13);
$bonosTotal = getPrecio(49);

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
$datePublished = "2024-07-18";

// fecha de ultima modificacion
$dateModified = "2024-07-19";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";


// cuantas alumnas felicies hay
$alumnasfelices = 8;

// grupos privados
$g_telegram = false;
$g_facebook = true;
$g_whatsaup = false;

// descripcion
$des = "Aprende Primeros Auxilios para Perros. Garantiza la seguridad de tu peludo en situaciones críticas - Petz School.";
//$des = "Cocina con Amor y emprende con éxito en el mundo de la Pastelería canina y felina - Petz School.";

// titulo
$tit = "✓ 50% Off en el Curso Primeros Auxilios para Perros de Laura Viviana Castro Sabogal - Petz School";

$videoPrincipalID 	= "986180808";

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

$linkProducto = "https://go.hotmart.com/J61941823G?ap=db02";


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

		<?php include_once ($base . "inc/header-landing-performance.php"); ?>
		
	</head>
    <body id="page-top" class="<?= $dirLanding ?>" >

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>

		<?php 
		if( $hayMenu )
			include_once( $base. "inc/nav.php");
		?>

		<section id="first-scroll" <?php if (!$timer) echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
					Aprende <b>Primeros Auxilios para Perros</b>. Garantiza la seguridad de tu peludo en situaciones críticas
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
						<p>2579</p>
						<p>Pets Lovers</p>
					</div>
					<p>
						<u>¡SOLO FALTAS TU!</u>
					</p>
				</div>
				
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-ico.svg" class="icon" alt="<?= $nombredelcurso ?>" width="80" height="80" />
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-ico.svg" class="icon last" alt="<?= $nombredelcurso ?>" width="80" height="80" />

			</div>
		</section>

		<?php include_once ($base . "inc/preload.php"); ?>
		
		<section class="bajada principal padding0" aria-labelledby="sub-header-title" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="sub-header">

				<h2 id="sub-header-title" itemprop="name">

					<span>¡Salva la VIDA de tu PERRO!</span> Adquiere habilidades esenciales para <u itemprop="courseMode">responder eficazmente</u> en casos de emergencia.

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
						<p itemprop="competencyRequired">Podrás <u>auxiliar a tu perro</u> en situaciones difíciles y prepararlo para la <b>atención veterinaria profesional</b>.</p>
						<p itemprop="competencyRequired"><b>Podrás salir con tranquilidad</b> porque aprenderás a crear tu propio botiquín efectivo para problemas comunes que se puedan presentar.</p>
						<p itemprop="competencyRequired">Dominarás la habilidad de <b>evaluar y clasificar urgencias</b>, asegurando que tu perro reciba la atención adecuada antes de que cualquier problema se agrave.</p>
						<p itemprop="competencyRequired">Descubrirás cómo los primeros auxilios pueden <u>prevenir problemas serios</u>, garantizando la salud de tu perro a largo plazo.</p>
						<p itemprop="competencyRequired">Adquirirás técnicas esenciales para <u>evitar que tu perro sufra por falta de conocimientos</u>.</p>
					</div>
				</div>
			</div>
		</section>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>
		

		<section class="bajada" itemscope itemtype="https://schema.org/Article" aria-labelledby="sub-header-title">
			<div class="sub-header">
				<h2 id="sub-header-title" itemprop="headline">
					<span>¿Sabías que los primeros 15 minutos en una emergencia con tu perro pueden ser la diferencia entre la vida y la muerte?</span> 
				</h2>
				<p itemprop="articleBody">
					<span>El <b>95% de las personas</b> no saben cómo responder, y a veces, el veterinario no está cerca.</span> 
					<span>Con nuestro CURSO ONLINE de primeros auxilios para perrros, <u>aprende a actuar de inmediato</u>.</span> 
					<span>¡Prepárate y protege a tu peludo!</span>
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
					<p><i class="fa fa-clock-o"></i>34 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>14 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" class="two-cols">
			  <div class="active">
				<h3>
				  <button>Haz clic para ver el <br/>contenido del curso</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode"><span>Clase No 1.</span> – Introducción.</li>
					<li itemprop="courseMode"><span>Clase No 2.</span> – Triage veterinario.</li>
					<li itemprop="courseMode"><span>Clase No 3.</span> – ¿Cómo evaluar el estado de tu perro?</li>
					<li itemprop="courseMode"><span>Clase No 4.</span> – Qué debe tener un botiquín para perros.</li>
					<li itemprop="courseMode"><span>Clase No 5.</span> – Qué es RCP y cómo hacerla.</li>
					<li itemprop="courseMode"><span>Clase No 6.</span> – Atragantamiento.</li>
					<li itemprop="courseMode"><span>Clase No 7.</span> – Manejo de trauma: caída de altura.</li>
					<li itemprop="courseMode"><span>Clase No 8.</span> – Manejo de trauma: mordedura, heridas y vendajes.</li>
					<li itemprop="courseMode"><span>Clase No 9.</span> – Vendajes (video práctico).</li>
					<li itemprop="courseMode"><span>Clase No 10.</span> – Quemaduras.</li>
					<li itemprop="courseMode"><span>Clase No 11.</span> – Shock anafiláctico.</li>
					<li itemprop="courseMode"><span>Clase No 12.</span> – Urgencias digestivas.</li>
					<li itemprop="courseMode"><span>Clase No 13.</span> – Manejo de urgencias digestivas: vómito.</li>
					<li itemprop="courseMode"><span>Clase No 14.</span> – Manejo de urgencias digestivas: diarrea.</li>
					<li itemprop="courseMode"><span>Clase No 15.</span> – Manejo de urgencias digestivas: cuerpo extraño.</li>
					<li itemprop="courseMode"><span>Clase No 16.</span> – Manejo de urgencias digestivas: DVG.</li>
					<li itemprop="courseMode"><span>Clase No 17.</span> – Intoxicación.</li>
					<li itemprop="courseMode"><span>Clase No 18.</span> – Golpe de calor.</li>
					<li itemprop="courseMode"><span>Clase No 19.</span> – Convulsiones.</li>
					<li itemprop="courseMode"><span>Clase No 20.</span> – Dificultad para orinar.</li>
					<li itemprop="courseMode"><span>Clase No 21.</span> – Dificultad para caminar.</li>
					<li itemprop="courseMode"><span>Clase No 22.</span> – Uñas rotas.</li>
					<li itemprop="courseMode"><span>Clase No 23.</span> – Uñas rotas (video práctico).</li>
					<li itemprop="courseMode"><span>Clase No 24.</span> – Tos de perrera.</li>
					<li itemprop="courseMode"><span>Clase No 25.</span> – Conjuntivitis.</li>
					<li itemprop="courseMode"><span>Clase No 26.</span> – Hipotermia.</li>
					<li itemprop="courseMode"><span>Clase No 27.</span> – Hipo.</li>
					<li itemprop="courseMode"><span>Clase No 28.</span> – Lesiones en la piel.</li>
					<li itemprop="courseMode"><span>Clase No 29.</span> – Tips de prevención de lesiones en la piel.</li>
					<li itemprop="courseMode"><span>Clase No 30.</span> – Asistencia en un parto.</li>
					<li itemprop="courseMode"><span>Clase No 31.</span> – Cuidados y precauciones con cachorros.</li>
					<li itemprop="courseMode"><span>Clase No 32.</span> – Cierre y grupo de Facebook.</li>
					<li itemprop="courseMode"><span>Clase No 33.</span> – Como obtener tu certificado.</li>
					<li itemprop="courseMode"><span>Clase No 34.</span> – Video respuestas.</li>
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
				<meta itemprop="jobTitle" content="Médica Veterinaria, Cofundadora de Pets Space">
				<div>
					<div></div>
					<div>
						<h3>Con <b itemprop="name">Laura Viviana Castro Sabogal</b></h3>
						<div>
							<h4 itemprop="jobTitle">Médica Veterinaria</h4>
							<h4 itemprop="jobTitle">Cofundadora de Pets Space</h4>
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
							Médica veterinaria colombiana, se graduó de la Universidad de La Salle en Bogotá, Colombia. Es cofundadora de la clínica veterinaria Pets Space en Zipaquirá, Colombia.
						</p>
						<p>
							Tiene un posgrado en medicina felina de la Universidad Católica de Salta, Argentina, y ha completado un curso internacional de posgrado en cirugía de tejidos blandos y ortopedia en pequeños animales en la Universidad UNAH de La Habana, Cuba.
						</p>
						
						<div class="alert alert-success">
							<p>
								¡No esperes hasta que sea demasiado tarde! Prepárate con nuestro curso de primeros auxilios.
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
                    'img' => 'bono-1-e-book-primeros-auxilios.png',
                    'alt' => 'Bono 1 E-book Primeros Auxilios.',
                    'precio' => $bono1,
                    'descripcion' => '<u>Profundiza</u> aún más en tus conocimientos de <b>primeros auxilios caninos</b>.',
                ],
                [
                    'img' => 'bono-2-cuidados-basicos-unas-oidos.png',
                    'alt' => 'Bono 2 Cuidados Básicos de Uñas y Oidos.',
                    'precio' => $bono2,
                    'descripcion' => 'Aprende a <b>mantener las uñas y oídos</b> de tu perro en perfecto estado.',
                ],
                [
                    'img' => 'bono-3-protocolo-vacunacion-desparasitacion.png',
                    'alt' => 'Bono 3 Protocolo de Vacunación y Desparasitación.',
                    'precio' => $bono3,
                    'descripcion' => 'Asegura la salud de tu perro con un protocolo adecuado de vacunación y desparasitación.',
                ],
                [
                    'img' => 'bono-4-podcast-aromaterapia-perros.png',
                    'alt' => 'Bono 4 Podcast sobre Aromaterapia para Perros.',
                    'precio' => $bono4,
                    'descripcion' => 'Descubre cómo la aromaterapia puede mejorar el bienestar de tu perro.',
                ],
                [
                    'img' => 'private-group.png',
                    'alt' => 'Tendrás acceso de por vida a nuestro grupo privado de Facebook.',
                    'precio' => "Invaluable",
                    'descripcion' => 'Tendrás <b>acceso de por vida</b> a nuestro grupo privado de Facebook.',
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
						<span>Disfruta la tranquilidad de saber que puedes responder a cualquier emergencia. Con las habilidades adquiridas, estarás preparado para actuar rápidamente y proteger a tu mascota en situaciones críticas.</span>
					</p>

				</div>
			</div>
		</section>	
		
		<?php include_once ($base . "inc/landings/header-beneficios.php"); ?>

		<?php include_once ($base . "inc/landings/beneficios.php"); ?>  

		<?php

        $masBeneficios = [
            "Más de 30 lecciones en video, formato súper HD.",
            "TUS $cantBonos bonos valuados en + de $currency $bonosTotal.",
            "SORPRESAS Y REGALOS... videos, playbooks, publicaciones, imágenes, actualizaciones y presentaciones."
        ];

        include ($base . "inc/landings/mas-beneficios.php");

        ?>


		<?php include_once ($base . "inc/landings/precio.php"); ?>

		<?php include_once ($base . "inc/landings/precio-beneficios.php"); ?>

	
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
		
		<section id="testimonios" class="bgYellow bg-pattern" aria-labelledby="testimonios-heading">

			<div class="section-heading text-center">
				<h2 id="testimonios-heading">¡Más opiniones de alumnos!</h2>
			</div>

			<div class="container">

				<div id="owl-reviews">

					<?php

					$carouselTestimoniosItems = [
						[
							"nombre" => "Laura Isabel, Cundinamarca",
							"bajada" => "Dog Lover",
							"descripcion" => "El curso ha sido increíble. Aprendí a reaccionar en emergencias y, hace poco, pude ayudar a mi perrito cuando se atragantó. Las lecciones son claras y prácticas. ¡Recomiendo este curso a todos los amantes de los peludos!",
							"nombre_imagen" => "laura-isabel.jpg",
							"cantidad_estrellas" => 5
						],
						[
							"nombre" => "María Fernanda, Antioquia",
							"bajada" => "Dog Lover",
							"descripcion" => "Este curso me ha sido muy útil. Tengo un perro grande y siempre me preocupaba no saber cómo actuar en emergencias. Gracias a las lecciones, aprendí a manejar cortes, atragantamientos y otras situaciones. Las explicaciones son muy claras. ¡Super recomendable!",
							"nombre_imagen" => "maria-fernanda.jpg",
							"cantidad_estrellas" => 5
						],
						[
							"nombre" => "Juan Carlos, Valle del Cauca",
							"bajada" => "Dog Lover",
							"descripcion" => "El curso de primeros auxilios ha sido una bendición. Mi perro se cortó una pata y gracias a las lecciones, pude detener el sangrado y aplicar un vendaje hasta llegar al veterinario. No duden en tomar este curso, es esencial para cualquier dueño de perros.",
							"nombre_imagen" => "juan-carlos.jpg",
							"cantidad_estrellas" => 5
						],
						[
							"nombre" => "Carlos Andrés, Santander",
							"bajada" => "Dog Lover",
							"descripcion" => "El curso ha sido de gran ayuda. Me siento más seguro y preparado para cualquier emergencia con mi perro pequeño. Las lecciones son claras y prácticas. Es de vital importancia para todos los dueños de perros.",
							"nombre_imagen" => "carlos-andres.jpg",
							"cantidad_estrellas" => 5
						]

					];

					include_once ($base . "inc/landings/testimonios.php");

					?>

				</div>

			</div>

		</section>
	  
		<?php include_once ($base . "inc/landings/footer-landing.php"); ?>
		
   </body>

</html><?php 

if( !$testing && !$testPar )
	ob_end_flush(); 

?>