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
$oferta50Precio = getPrecio(34.99);
$sinOfertaPrecio = getPrecio(99.98);

$bono1 = getPrecio(11);
$bono2 = getPrecio(15);
$bono3 = getPrecio(20);
$bono4 = getPrecio(20);
$bonosTotal = getPrecio(66);


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
$alumnasfelices = 8;

// cuantas muestras hay
$muestras = 6;

// grupos privados
$g_telegram = true;
$g_facebook = true;
$g_whatsaup = false;

// descripcion
$des = "🍦 Aprende de forma fácil y divertida 20 recetas de helados artesanales 🐾 para consentir a tus peludos y crea tu propia heladería pet-friendly! 🚀 ¡Sumate HOY!";

// titulo
$tit = "✓ Promo 65% Off en el Curso Petlados de Diana Fonseca - Petz School";

$videoPrincipalID = "737748993";
$videoMuestraID = "1090305384";
$videoAdicionalID = "1090321709";


//OFERTAS SETTINGS, elegir una de las 2, si esta activo uno con "true" los otros 2 tienen que estar en "false"

$oferta50 = false;
$sinOferta = false;


$oferta35 = false;
$oferta65 = true;
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

$linkProducto = "https://go.hotmart.com/Y71611538R?ap=7400";


//De aca para abajo no hay que tocar nada


$offDiscount = "";
$textCuotas = $textCuotasFull;

if ($oferta50 || $oferta65 || $oferta35) {

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
			<h2 itemprop="name">Aprenderás a elaborar</h2>
		  </div>

		  <div class="container">
			<div itemprop="educationalCredentialAwarded" content="Certificado de <?= $nombredelcurso ?>">
			  <div itemprop="description">
				<p itemprop="competencyRequired"><b>3 bases para helados</b> que podrás utilizar para crear <b>infinitos sabores y combinaciones deliciosas</b>.</p>
				<p itemprop="competencyRequired">Elaboración de <b>yogurt natural super cremoso</b>, ideal para tus recetas más suaves.</p>
				<p itemprop="competencyRequired">Cómo hacer <b>yogurt griego espeso y durito</b> para una textura irresistible.</p>
				<p itemprop="competencyRequired">Paso a paso para preparar <b>queso crema casero</b>, perfecto para usar en múltiples recetas.</p>
				<p itemprop="competencyRequired"><b>Paletas de frutas</b> refrescantes con base de yogurt natural.</p>
				<p itemprop="competencyRequired"><b>Paletas cremosas</b> con base de yogurt griego y queso crema para una experiencia gourmet.</p>
				<p itemprop="competencyRequired">Creación de <b>paletas especiales</b> como cheesecake, chocolate, cookies and cream y tipo Magnum con cobertura <b>apta para perros</b>.</p>
				<p itemprop="competencyRequired"><b>Helados cremosos en bolita</b> con textura profesional, sin necesidad de máquinas.</p>
				<p itemprop="competencyRequired"><b>3 técnicas infalibles</b> para romper los cristales de hielo y lograr cremosidad sin máquina heladora.</p>
				<p itemprop="competencyRequired">Cómo hacer <b>cucuruchos y canastillas comestibles</b> aptas para el consumo de los perros.</p>
				<p itemprop="competencyRequired">Recetas de <b>toppings y siropes caseros</b> para decorar y potenciar el sabor de tus helados.</p>
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


		<section class="bajada" itemscope itemtype="https://schema.org/Article" aria-labelledby="sub-header-title">
			<div class="sub-header">
				<h2 id="sub-header-title" itemprop="headline" class="visually-hidden">
					Cuando finalices este super curso te habrás convertido en una experta PETladera
				</h2>
				<p itemprop="articleBody">
					<span><strong>Cuando finalices este super curso te habrás convertido en una experta PETladera</strong> con los conocimientos necesarios para poder emprender con una paletería/heladería dirigida a perros y gatos.</span>
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

					<p itemprop="ratingValue">4.6</p>

				</div>

				<div>
					<p><i class="fa fa-clock-o"></i>46 Lecciones</p>
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
						<li itemprop="courseMode" content="online"><span>Clase No 1.</span> – Advertencia</li>
						<li itemprop="courseMode" content="online"><span>Clase No 2.</span> – Acceso total al curso</li>
						<li itemprop="courseMode" content="online"><span>Clase No 3.</span> – Resolución de dudas y soporte</li>
						<li itemprop="courseMode" content="online"><span>Clase No 4.</span> – Bienvenida</li>
						<li itemprop="courseMode" content="online"><span>Clase No 5.</span> – Invitación al grupo de Facebook</li>
						<li itemprop="courseMode" content="online"><span>Clase No 6.</span> – Recetario</li>
						<li itemprop="courseMode" content="online"><span>Clase No 7.</span> – Módulo paletas de yogurt</li>
						<li itemprop="courseMode" content="online"><span>Clase No 8.</span> – Base para helados de yogurt</li>
						<li itemprop="courseMode" content="online"><span>Clase No 9.</span> – Haciendo yogurt natural</li>
						<li itemprop="courseMode" content="online"><span>Clase No 10.</span> – Paleta cremosa de melón y hierbabuena</li>
						<li itemprop="courseMode" content="online"><span>Clase No 11.</span> – Paleta cremosa de banana y kiwi</li>
						<li itemprop="courseMode" content="online"><span>Clase No 12.</span> – Paleta cremosa de frutos rojos</li>
						<li itemprop="courseMode" content="online"><span>Clase No 13.</span> – Paleta cremosa de melocotón y queso</li>
						<li itemprop="courseMode" content="online"><span>Clase No 14.</span> – Paleta cremosa de mango y coco</li>
						<li itemprop="courseMode" content="online"><span>Clase No 15.</span> – Paleta cremosa de puré de manzana y canela</li>
						<li itemprop="courseMode" content="online"><span>Clase No 16.</span> – Paleta cremosa de colores</li>
						<li itemprop="courseMode" content="online"><span>Clase No 17.</span> – Paleta cremosa de pera rellena de mantequilla de maní</li>
						<li itemprop="courseMode" content="online"><span>Clase No 18.</span> – Módulo paletas de yogurt y queso crema</li>
						<li itemprop="courseMode" content="online"><span>Clase No 19.</span> – Base de helados de yogurt y queso crema</li>
						<li itemprop="courseMode" content="online"><span>Clase No 20.</span> – Haciendo yogurt griego</li>
						<li itemprop="courseMode" content="online"><span>Clase No 21.</span> – Haciendo queso crema casero</li>
						<li itemprop="courseMode" content="online"><span>Clase No 22.</span> – Paleta cremosa de guanábana y moras</li>
						<li itemprop="courseMode" content="online"><span>Clase No 23.</span> – Paleta cremosa de banana, mantequilla de maní y moras</li>
						<li itemprop="courseMode" content="online"><span>Clase No 24.</span> – Paleta cremosa de arándanos y mango</li>
						<li itemprop="courseMode" content="online"><span>Clase No 25.</span> – Paleta cremosa de papaya y queso</li>
						<li itemprop="courseMode" content="online"><span>Clase No 26.</span> – Paleta cremosa de hígado</li>
						<li itemprop="courseMode" content="online"><span>Clase No 27.</span> – Módulo paletas especiales</li>
						<li itemprop="courseMode" content="online"><span>Clase No 28.</span> – Paleta cheesecake</li>
						<li itemprop="courseMode" content="online"><span>Clase No 29.</span> – Paleta de “Chocolate”</li>
						<li itemprop="courseMode" content="online"><span>Clase No 30.</span> – Base para helados súper cremosa</li>
						<li itemprop="courseMode" content="online"><span>Clase No 31.</span> – Paleta tipo Magnum</li>
						<li itemprop="courseMode" content="online"><span>Clase No 32.</span> – Paleta cookies and cream</li>
						<li itemprop="courseMode" content="online"><span>Clase No 33.</span> – Helado cremoso de banana y mandarina</li>
						<li itemprop="courseMode" content="online"><span>Clase No 34.</span> – Helado cremoso de hígado</li>
						<li itemprop="courseMode" content="online"><span>Clase No 35.</span> – Helado cremoso de pollo/pavo</li>
						<li itemprop="courseMode" content="online"><span>Clase No 36.</span> – Cucuruchos y canastillas de avena</li>
						<li itemprop="courseMode" content="online"><span>Clase No 37.</span> – Cucuruchos y canastillas de almendra</li>
						<li itemprop="courseMode" content="online"><span>Clase No 38.</span> – Módulo Toppings</li>
						<li itemprop="courseMode" content="online"><span>Clase No 39.</span> – Perlas de hierbabuena</li>
						<li itemprop="courseMode" content="online"><span>Clase No 40.</span> – Perlas de mango</li>
						<li itemprop="courseMode" content="online"><span>Clase No 41.</span> – Perlas de hígado</li>
						<li itemprop="courseMode" content="online"><span>Clase No 42.</span> – Perlas de mango</li>
						<li itemprop="courseMode" content="online"><span>Clase No 43.</span> – Sirope de arándanos</li>
						<li itemprop="courseMode" content="online"><span>Clase No 44.</span> – Sirope de kiwi</li>
						<li itemprop="courseMode" content="online"><span>Clase No 45.</span> – Sirope de hígado</li>
						<li itemprop="courseMode" content="online"><span>Clase No 46.</span> – Despedida</li>
						<li itemprop="courseMode" content="online"><span>BONUS</span> – Cómo calcular costos</li>
						<li itemprop="courseMode" content="online"><span>BONUS</span> – Crecimiento en Instagram (PDF)</li>
						<li itemprop="courseMode" content="online"><span>BONUS</span> – 4 recetas de bebidas para perros (PDF)</li>
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
                    'img' => 'recetario-petlados-diana-fonseca.png',
                    'alt' => 'Resumen descargable completo para seguir el curso sin tomar apuntes.',
                    'precio' => $bono1,
                    'descripcion' => '<b>Resumen descargable completo</b> para seguir el curso sin tomar apuntes.',
                ],
                [
                    'img' => 'como-calcular-costos-petlados-diana-fonseca.png',
                    'alt' => 'Maximiza tus ganancias y asegura la rentabilidad de tu negocio.',
                    'precio' => $bono2,
                    'descripcion' => '<b>Maximiza tus ganancias</b> y asegura la rentabilidad de tu negocio.',
                ],
                [
                    'img' => 'creciendo-en-instagram-petlados-diana-fonseca.png',
                    'alt' => 'Impulsa tu negocio y destaca en Instagram.',
                    'precio' => $bono3,
                    'descripcion' => '<b>Impulsa tu negocio</b> y destaca en Instagram.',
                ],
                [
                    'img' => '4-recetas-de-bebidas-para-perros-petlados-diana-fonseca.png',
                    'alt' => 'Deliciosas, refrescantes y nutricionalmente saludables adaptadas para perros y gatos.',
                    'precio' => $bono4,
                    'descripcion' => '<b>Deliciosas, refrescantes</b> y nutricionalmente saludables adaptadas para perros y gatos.',
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
						<span>Estamos seguros que cuando lo hagas sentirás una satisfacción de saber que estás lista para crear deliciosas paletas y helados para tu peludo y crear tu propio negocio en esta bonita actividad.</span>
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
            "Más de 46 lecciones en video, formato súper HD.",
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

if (!$testing && !$testPar)
    ob_end_flush();

?>