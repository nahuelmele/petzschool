<?php

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "petlados";
$nombredelcurso = "Petlados";
$autor = "Diana Fonseca";
$autorSlug = "diana-fonseca";

include $base . "inc/functions.php";

//precios en dolares
$oferta50Precio = getPrecio(39.99);
$sinOfertaPrecio = getPrecio(79.98);

$currency = getCurrency();

$landingData = getLandingData();
$imgPagosBillet = $landingData["IMGBILLET"];
$puedesAbonarCon = $landingData["SHOWMEDIOS"];
$medioPagoEfectivo = $landingData["TEXTMEDIOSPAGO"];

if (COUNTRYCODE == "ar" || COUNTRYCODE == "cl" || COUNTRYCODE == "eu") {

    $textCuotasFull = "Tarjeta de crédito.";
    $textCuotas50Off = "Tarjeta de crédito.";

} else if (COUNTRYCODE == "co") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(6.665) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(3.332) . "</b>.";

} else if (COUNTRYCODE == "pe") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(6.638, 1) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(3.319, 1) . "</b>.";

} else if (COUNTRYCODE == "mx") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(8.076, 1) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>6 cuotas</b> de <b>" . $currency . " " . getPrecio(7.422, 1) . "</b>.";

} else {

    $textCuotasFull = "";
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
$datePublished = "2022-08-05";

// fecha de ultima modificacion
$dateModified = "2022-08-04";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";

// cuantas alumnas felicies hay
$alumnasfelices = 6;

// cuantas muestras hay
$muestras = 6;

// grupos privados
$g_telegram = true;
$g_facebook = true;
$g_whatsaup = false;

// descripcion
$des = "Aprende de una forma fácil, rápida y divertida 20 recetas de helados artesanales basadas en proteina animal y frutas para que consientas a tus peludos o crear tu propia heladeria.";

// titulo
$tit = "✓ Curso Petlados de Diana Fonseca - Petz School";

$videoPrincipalID = "737748993";

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

$linkProducto = "https://go.hotmart.com/Y71611538R?ap=34dd";


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
            echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
					Crea Tu propio negocio de <b>heladeria canina y felina</b> y conviertete en una experta PETladera
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
						<p>197</p>
						<p>PETladeras</p>
					</div>
					<p>
						<u>¡SOLO FALTAS TU!</u>
					</p>
				</div>
				
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-icon.webp" class="icon" alt="helados <?= $nombredelcurso ?>" width="45" height="122" />
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-icon.webp" class="icon last" alt="helados <?= $nombredelcurso ?>" width="45" height="122" />

			</div>
		</section>

		<?php include_once ($base . "inc/preload.php"); ?>
		
		<section class="bajada principal padding0" aria-labelledby="sub-header-title" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="sub-header">

				<h2 id="sub-header-title" itemprop="name">
					<span>CONVIÉRTETE</span> en una experta PETladera! y <u>aprende más de 20 recetas de paletas y helados cremosos</u> basados en proteína animal y frutas para que consientas a tu peludo.
					<span>CREA tu propio negocio</span> de helados para perros y gatos en un sector en crecimiento como <u>profesional independiente</u>.
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
						<p itemprop="competencyRequired">20 recetas de helados y paletas <u>aptas para perros y gatos</u>.</p>
						<p itemprop="competencyRequired">Aprenderás a hacer <b>3 diferentes bases de helados</b> que utilizaras para muchas mas creaciones.</p>
						<p itemprop="competencyRequired">Aprenderás a crear yogurt <u>super cremoso y griego</u> más espeso.</p>
						<p itemprop="competencyRequired">Aprenderás a hacer helados con <b>3 técnicas diferentes</b> para lograr máxima cremosidad.</p>
						<p itemprop="competencyRequired">Aprenderás a <u>hacer queso crema casero</u> que prodras utilizar en las diferentes recetas.</p>
						<p itemprop="competencyRequired">Aprenderás a hacer <b>paletas de frutas, cremosas y especiales</b> con base de yogurt griego y queso crema.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="muestras" class="bgYellow" aria-labelledby="muestras-heading">

			<div class="section-heading text-center">
				<h2 id="muestras-heading">Muestras de nuestras alumnas</h2>
				<p>Así como ellas, tu <b>adquirirás las habilidades</b> y competencias para realizar <b>espectaculares helados artesanales</b>.</p>
			</div>

			<?php include_once ($base . "inc/landings/muestras.php"); ?>

		</section>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>
		
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

					<p itemprop="ratingValue">4.6</p>

				</div>

				<div>
					<p><i class="fa fa-clock-o"></i>36 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>59 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" class="two-cols">
			  <div class="active">
				<h3>
				  <button>Haz clic para ver el <br/>contenido del curso</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No 1.</span> – Acceso Total.</li> 
					<li itemprop="courseMode" content="online"><span>Clase No 2.</span> – Bienvenida.</li> 
					<li itemprop="courseMode" content="online"><span>Clase No 3.</span> – Invitación a los grupos de Facebook y Telegram.</li> 
					<li itemprop="courseMode" content="online"><span>Clase No 4.</span> – Recetario PETlados.</li> 
					<li itemprop="courseMode" content="online"><span>Clase No 5</span> – Módulo paletas de yogurt.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 6.</span> – Base para helados de yogurt.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 7.</span> – Haciendo yogurt natural sin azucar.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 8.</span> – Paletas cremosas de melon y hierbabuena.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 9.</span> – Paletas cremosas de banana y kiwi.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 10.</span> – Paleta cremosa de frutos rojos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 11.</span> – Paleta de melocoton y queso.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 12.</span> – Paleta cremosa de mango y coco.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 13.</span> – Paletas cremosas de pure de manzana y canela.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 14.</span> – Paletas cremosas de colores.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 15.</span> – Paleta cremosa de pera rellena de mantequilla de mani.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 16.</span> – Base para helados yogurt y queso crema.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 17.</span> – Haciendo yogurt griego.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 18.</span> – Haciendo queso crema casero.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 19.</span> – Paleta cremosa de guanabana y moras.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 20.</span> – Paletas cremosas de mango y arandanos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 21.</span> – Paleta cremosa de papaya y queso.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 22.</span> – Paletas cremosas de arandanos, franbuesa y mandarina.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 23.</span> – Paletas cremosas de higado.</li>								
					<li itemprop="courseMode" content="online"><span>Clase No 24.</span> – Paletas cremosas de pollo.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 25.</span> – Paleta Cheesecake.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 26.</span> – Paletas Chocolate.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 27.</span> – Base de helados súper cremosa.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 28.</span> – Paletas tipo Magnum.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 29.</span> – Decoración de galletas.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 30.</span> – Paleta cookies and cream.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 31.</span> – Helado cremoso de banana y mandarina.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 32.</span> – Helado cremoso de hígado.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 33.</span> – Helado cremoso de pollo/pavo.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 34.</span> – Cómo sacar costos y obtener una ganancia justa.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 35.</span> – Despedida.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 36.</span> – Invitación Especial.</li>
					<li itemprop="courseMode" content="online"><span>BONUS Nº 1</span> – Recetarios descargable.</li>
					<li itemprop="courseMode" content="online"><span>BONUS Nº 2</span> – Asesorías de por vida ( grupo privado de Facebook y Telegram ).</li>
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
						<span>Estamos seguros que cuando lo hagas sentirás una satisfacción de saber que estás lista para crear deliciosas paletas y helados para tu peludo y crear tu propio negocio en esta bonita actividad.</span>
					</p>

				</div>
			</div>
		</section>	
		
		<?php include_once ($base . "inc/landings/header-beneficios.php"); ?>

		<?php include_once ($base . "inc/landings/beneficios.php"); ?>  

		<?php

        $masBeneficios = [
            "Más de 36 lecciones en video, formato súper HD.",
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
	  
		<?php include_once ($base . "inc/landings/footer-landing.php"); ?>
		
   </body>

</html><?php

if (!$testing && !$testPar)
    ob_end_flush();

?>