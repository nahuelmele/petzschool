<?php

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "cupido-tambien-es-petfriendly";
$nombredelcurso = "Cupido también es Petfriendly";
$autor = "Diana Fonseca";
$autorSlug = "diana-fonseca";

include $base . "inc/functions.php";

//precios en dolares
$oferta50Precio = getPrecio(16.25);
$sinOfertaPrecio = getPrecio(32.50);


$currency = getCurrency();

$landingData = getLandingData();
$imgPagosBillet = $landingData["IMGBILLET"];
$puedesAbonarCon = $landingData["SHOWMEDIOS"];
$medioPagoEfectivo = $landingData["TEXTMEDIOSPAGO"];


$textCuotasFull = "";
$textCuotas50Off = "";


if (COUNTRYCODE == "ar" || COUNTRYCODE == "cl" || COUNTRYCODE == "eu") {

    $textCuotasFull = "Tarjeta de crédito.";
    $textCuotas50Off = "Tarjeta de crédito.";

} else if (COUNTRYCODE == "co") {

    $textCuotasFull = "Tarjeta de crédito.";
    $textCuotas50Off = "Tarjeta de crédito.";

    //$textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(2.708702) ."</b>."; 
    //$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(1.354351) ."</b>.";

} else if (COUNTRYCODE == "pe") {

    $textCuotasFull = "Tarjeta de crédito.";
    $textCuotas50Off = "Tarjeta de crédito.";

    //$textCuotasFull =  "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(5.798,1) ."</b>.";
    //$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(2.899,1) ."</b>.";

} else if (COUNTRYCODE == "mx") {

    $textCuotasFull = "Tarjeta de crédito.";
    $textCuotas50Off = "Tarjeta de crédito.";

    //$textCuotasFull =  "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(7.067,1) ."</b>."; 
    //$textCuotas50Off = "Tarjeta de crédito hasta en <b>6 cuotas</b> de <b>".$currency." ". getPrecio(6.494,1) ."</b>.";

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
$datePublished = "2025-03-18";

// fecha de ultima modificacion
$dateModified = "2025-03-20";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";


// cuantas alumnas felicies hay
$alumnasfelices = 2;

// cuantas muestras hay
$muestras = 5;

// grupos privados
$g_telegram = true;
$g_facebook = true;
$g_whatsaup = false;

// descripcion
$des = "¿Te imaginas crear Tu propio negocio de snacks deliciosos y saludables para mascotas? - Petz School.";

//$des = "Cocina con Amor y emprende con éxito en el mundo de la Cupido también es Petfriendly - Petz School.";

// titulo
$tit = "✓ Promo 50% Off en el Curso de Cupido también es Petfriendly de Diana Fonseca - Petz School";


//OFERTAS SETTINGS, elegir una de las 2, si esta activo uno con "true" los otros 2 tienen que estar en "false"

$oferta50 = true;
$sinOferta = false;

// Hide pago en efectivo

$hideEfectivo = false;

if ($hideEfectivo) {
    $imgpagosFinal = PAGOSTODOS;
    $pagoEfe = "";
} else {
    $imgpagosFinal = $imgPagosBillet;
    $pagoEfe = $medioPagoEfectivo;
}


// si queremos el modal en el boton de checkout con mensaje y redirect

$modalMesageCheckout = false;

// Link Producto, chechout limpio para crashing

$linkProducto = "https://go.hotmart.com/R78911738N?ap=3551";


//De aca para abajo no hay que tocar nada


$offDiscount = "";
$textCuotas = $textCuotasFull;

if ($oferta50) {

    $offDiscount = "&offDiscount=220774";
    $textCuotas = $textCuotas50Off;

}

$hideEfectivoText = "";
if ($hideEfectivo)
    $hideEfectivoText = "&hideBillet=1";

$linkProducto = $linkProducto . $offDiscount . $hideEfectivoText;



//esto es para si pasamos parametro test no cargamos pixel
$testPar = false;

if (isset($_GET["test"]))
    $testPar = true;


if (!$testing && !$testPar)
    ob_start('comprimir_pagina_landing');

?><!DOCTYPE html>
<html lang="es-ES">
	<head>

		<?php include_once ($base . "inc/header-landing.php"); ?>
		
	</head>
    <body id="page-top" class="<?= $dirLanding ?>" >

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>

		<?php
        if ($hayMenu)
            include_once ($base . "inc/nav.php");
        ?>

		<section id="first-scroll" <?php if (!$timer)
            echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram" style="background-image: url(/img/landings/<?= $dirLanding ?>/bg-hero.jpg); background-size: cover">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
				Celebra San Valentín con tu Peludo: Taller de Snacks Especiales para Perros y Gatos
				</h1>

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
							style="left:60px;"                                
						/>
					<?php } ?>
					

				</div>
				<img style="transform: rotate(0);"
				src="/img/landings/<?= $dirLanding ?>/img-hero.jpg" 
				data-src="/img/landings/<?= $dirLanding ?>/img-hero.jpg" 
				class="lazyload boxShadowVideo"  
				alt="Curso: <?= $nombredelcurso ?> de <?= $autor ?>" 
				title="Curso: <?= $nombredelcurso ?> de <?= $autor ?>" 
				width="905" 
				height="509"
				itemprop="image"
				/>

				<div class="optesumVid">
					<div>
						<p>Ya somos más de </p>
						<p>198</p>
						<p>Pets Lovers</p>
					</div>
					<p>
						<u>¡SOLO FALTAS TU!</u>
					</p>
				</div>
				
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-cupido.png" class="icon" alt="cupido <?= $nombredelcurso ?>" width="120" height="120" />
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-cupido.png" class="icon last" alt="cupido <?= $nombredelcurso ?>" width="120" height="120" />

			</div>
		</section>

		<?php include_once ($base . "inc/preload.php"); ?>
		
		<section class="bajada principal padding0" aria-labelledby="sub-header-title" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="sub-header">

				<h2 id="sub-header-title" itemprop="name">
					<span>¡CONVIÉRTETE</span> en un maestro de la repostería pet-friendly! <br>
					<span>CREA tu propio negocio</span> de snacks saludables para mascotas y sorprende a los dueños con deliciosas y creativas opciones <u itemprop="courseMode" content="online">hechas con amor</u>.
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
						<p itemprop="competencyRequired">Una forma diferente de elaborar tortas para perros y gatos, más suaves y esponjosa</p>
						<p itemprop="competencyRequired"> Técnicas de decoración sin glaseado ni coberturas artificiales.</p>
						<p itemprop="competencyRequired">Dos recetas adicionales de galletas saludables para mascotas.</p>
						<p itemprop="competencyRequired">Cómo elaborar galletas decoradas sin necesidad de glaseados; más naturales, más sanas y más deliciosas.</p>
						<p itemprop="competencyRequired">Cinco diseños creativos de decoración utilizando solo masa de colores.</p>
						<h5>¡Inscríbete y sorprende a tu compañero peludo con un regalo hecho con amor! 💕🐾</h5>
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
					<span>Endulza San Valentín para tus mascotas con snacks saludables, creativos y fáciles de hacer</u>.</span> 
					<span>Aprende a preparar y decorar deliciosas galletas y tortas sin glaseados artificiales, <u>con ingredientes seguros y naturales.</u> </span> 
					<span><b>¡Un curso perfecto para consentir a tu peludo y emprender tu propio negocio!</b></span>
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

					<p itemprop="ratingValue">5.0</p>

				</div>

				<div>
					<p><i class="fa fa-clock-o"></i>11 videos</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>321 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" class="two-cols">
			  <div class="active">
				<h3>
				  <button>Haz clic para ver el <br/>contenido del curso</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					
					<li itemprop="courseMode" content="online"><span>Video No 1.</span> – Bienvenida</li>
					<li itemprop="courseMode" content="online"><span>Video No 2.</span> – Invitación al grupo de Facebook</li>
					<li itemprop="courseMode" content="online"><span>Video No 3.</span> – Recetario y diseños para impresión.</li>
					<li itemprop="courseMode" content="online"><span>Video No 4.</span> – Torta decorada.</li>
					<li itemprop="courseMode" content="online"><span>Video No 5.</span> – Masa para galletas número 1.</li>
					<li itemprop="courseMode" content="online"><span>Video No 6.</span> – Masa para galletas número 2.</li>
					<li itemprop="courseMode" content="online"><span>Video No 7.</span> – Rollo de galleta.</li>
					<li itemprop="courseMode" content="online"><span>Video No 8.</span> – Galletas estampadas 1.</li>
					<li itemprop="courseMode" content="online"><span>Video No 9.</span> – Galletas decoradas.</li>
					<li itemprop="courseMode" content="online"><span>Video No 10.</span> – Despedida.</li>
					<li itemprop="courseMode" content="online"><span>Video No 11.</span> – Descarga tu certificado.</li>
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
							Experta en nutrición canina y felina, con una <b>certificación como Bio nutricionista</b> de perros y gatos y especializada en <u>repostería artesanal canina y felina</u>. Con más de 5 años de experiencia en el sector de la alimentación natural de animales de compañía.
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
		
		<?php include_once ($base . "inc/landings/header-beneficios.php"); ?>

		<?php include_once ($base . "inc/landings/beneficios.php"); ?>  

		<?php

        $masBeneficios = [
            "Más de 10 lecciones en video, formato súper HD.",
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
				<h2 id="testimonios-heading">!Más opiniones de alumnas!</h2>
			</div>

			<div class="container">

				<div id="owl-reviews">

					<?php

                    $carouselTestimoniosItems = [
                        [
                            "nombre" => "Ximena Capeletti",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Les quiero recomendar la pastelería para perro de Diana Fonseca. Mis tres amores perrunos, Simón (14 años), Teo (1 año) y Eva (6meses), la adoran!! Simón no volvió a sufrir de la piel desde que lo cambié a esta comida. No tienen mal aliento y el pelo les brilla.",
                            "nombre_imagen" => "ximena.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Sandra Muñoz",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Me encanto el curso de Cupido también es Petfriendly, mi perro se llama rocky y prepararle deliciosos snack es una excelente actividad que la disfruto con mi hijo. Amamos a Rocky y el ama estas recetas…… Muchisimas Gracias Diana!!!!",
                            "nombre_imagen" => "sandra.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Nathy Pardo",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Me encanta la simplicidad y facilidad con la que se pueden preparar las distintas recetas que nos comparte Diana. He visto un cambio en la salud de Pepe, mi Pastor Aleman. Siento que ahora mi peludo es más feliz y tiene más energía. Gracias!",
                            "nombre_imagen" => "naty.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Gaby Flores",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Dante es mi Boston terrier de 4 años y medio, desde el destete ha comido dieta natural, sin embargo Dante tenía problemas en las articulaciones. Cuando pasamos a la barf y pastelería todo cambio, en poco tiempo estaba corriendo y saltando por todas partes. Gracias por todo Diana, saludos!",
                            "nombre_imagen" => "gaby.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "LUISA SALAH",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Quiero contar como este tipo de comida cambió la salud de mi perro. Tengo un pastor collie y desde que le cambie su alimentación su pelo lo tiene más suave, las deposiciones ya no son blandas, los dientes son más blancos, jamás tiene sarro y se le ve con más energía.",
                            "nombre_imagen" => "luisa.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "ANDRÉS FERNÁNDEZ",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Mi hermosa celebra su cumpleaños perruno 3, disfruta de una torta de pollo que aprendimos, nos encanta que Diana sea parte de este especial día, a Bella le encanta toda la pastelería. Muchas gracias cada vez que se porta bien le doy las galletas verdes que tanto le gustan.",
                            "nombre_imagen" => "andres-fernandez.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "SOFIA BUSTAMANTE",
                            "bajada" => "Cat Lover",
                            "descripcion" => "Maya celebró su 3er cumpleaños con una torta de atún que realizamos con el curso de Cupido también es Petfriendly de la profe Diana. Realizare luego helados para Maya que estan en el curso espero me queden delicioso como esta torta.",
                            "nombre_imagen" => "sofia.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "NORA RIVERA DE CRUZ",
                            "bajada" => "Cat Lover",
                            "descripcion" => "Gracias a ustedes  por la torta de atún de cumpleaños de Zahiro, estaba como loco, nunca lo habíamos visto así. Realmente disfruto de su primer cumpleaños. Quedamos satisfecho que gran talento que tienen en la comida de mascotas.",
                            "nombre_imagen" => "nora.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "MIRNA AGUILAR",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Mi hermosa Bella celebró su cumpleaños perruno 2 con una torta de pollo que aprendimos a hacer con el curso de Diana. El curso es muy práctico y apredimos muchas cosas que no teniamos ni idea sobre como alimentarla correctamente.",
                            "nombre_imagen" => "mirna.jpg",
                            "cantidad_estrellas" => 5
                        ],

                    ];

                    include_once ($base . "inc/landings/testimonios.php");

                    ?>

				</div>

			</div>

		</section>
	  
		<?php include_once ($base . "inc/landings/footer-landing.php"); ?>
		
   </body>

</html><?php

if (!$testing && !$testPar)
    ob_end_flush();

?>
?>