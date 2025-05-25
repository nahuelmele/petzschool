<?php

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "dieta-barf";
$nombredelcurso = "Dieta Bart, Perros y Gatos más Vitales";
$autor = "Alejandro Quiceno";
$autorSlug = "alejandro-quiceno";

include $base . "inc/functions.php";

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
$datePublished = "2022-08-30";

// fecha de ultima modificacion
$dateModified = "2022-08-31";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";

// cuantas alumnas felicies hay
$alumnasfelices = 5;

// cuantas muestras hay
$muestras = 8;

// grupos privados
$g_telegram = false;
$g_facebook = false;
$g_whatsaup = false;

// descripcion
$des = "Alejandro Quiceno te enseñará todo sobre los conceptos clave de la dieta BARF o cruda y dejarás de depender de alimentos comerciales para perros o gatos - Petz School.";

// titulo
$tit = "✓ Aprende todo sobre dieta BARF o cruda para Perros y Gatos más vitales- Petz School - Alejandro Quiceno";

$videoPrincipalID	= "768295957";
$videoMuestraID		= "771795215";
$videoAdicionalID	= "754755452";


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

$linkProducto = "https://go.hotmart.com/A57068494K?ap=918c";


//De aca para abajo no hay que tocar nada


$offDiscount = "";
$textCuotas = $textCuotasFull;

if ($oferta50) {

    $offDiscount = "&offDiscount=031016";
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
    <body id="page-top" class="<?= $dirLanding ?>">

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>
  
		<?php
        if ($hayMenu)
            include_once ($base . "inc/nav.php");
        ?>
		
		<section id="first-scroll" <?php if (!$timer)
            echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
					Aprende saludables preparaciones de <b>Dietas BARF</b> con alimentos crudos apropiados para tus mascotas
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
						<p>857</p>
						<p>Pets Lovers</p>
					</div>
					<p>
						<u>¡SOLO FALTAS TU!</u>
					</p>
				</div>

				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-ico.svg" class="icon" alt="<?= $nombredelcurso ?>" width="82" height="82" />
				<img src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-ico.svg" class="icon last" alt="<?= $nombredelcurso ?>" width="82" height="82" />

			</div>
		</section>


		<?php include_once ($base . "inc/preload.php"); ?>
	
		<section class="bajada principal padding0" aria-labelledby="sub-header-title" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="sub-header">

				<h2 id="sub-header-title" itemprop="name">
					<span>CONOCE</span> los conceptos clave de la dieta BARF o cruda, y deja de depender de <u>alimentos comerciales</u> para perros o gatos.<br>
					<span>CREA</span> las más saludables preparaciones con alimentos crudos y biológicamente apropiados para mascotas más <u>vitales, sanas y bien alimentadas</u>.
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
						<p itemprop="competencyRequired">Aprenderás por qué la evolución de nuestros perros y gatos es determinante en la forma en que debemos alimentarlos.</p>
						<p itemprop="competencyRequired">Aprenderás a <b>calcular las raciones</b> para tu perro o gato.</p>
						<p itemprop="competencyRequired">Tendrás las habilidades para elegir y rotar los diferentes complementos necesarios en la <b>dieta BARF o cruda</b> para perros o gatos.</p>
						<p itemprop="competencyRequired">Aprenderás a ser consciente de <b>los riesgos de la dieta BARF</b> o cruda y cómo prevenirlos fácilmente.</p>
						<p itemprop="competencyRequired">Dejarás de depender de alimentos comerciales para perros o gatos.</p>
						<p itemprop="competencyRequired">Podrás suministrarle a tu perro o gato una <b>dieta nutritiva y fresca</b>, y verás los beneficios que le traerá a tu peludo.</p>
						<p itemprop="competencyRequired">Disfrutarás tu vida con un compañero de cuatro patas <b>feliz, sano y muy bien alimentado</b>.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="muestras" class="bgYellow" aria-labelledby="muestras-heading">

			<div class="section-heading text-center">
				<h2 id="muestras-heading">Muestras de nuestros alumnos</h2>
				<p>Te dejamos algunos ejemplos de lo que podrías aprender en este curso para <b>alimentar a tus peludos saludablemente</b>.</p>
			</div>

			<?php include_once ($base . "inc/landings/muestras.php"); ?>

		</section>

		<?php

        $params = ['class' => 'bgYellow', 'text' => '<b>SIN RIESGOS</b>. Pruébanos por 7 días', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>	
		
		<section class="bajada" itemscope itemtype="https://schema.org/Article" aria-labelledby="sub-header-title">
			<div class="sub-header">
				<h2 id="sub-header-title" itemprop="headline">
					¿Sabías que la industria de las mascotas continúa creciendo en todo el mundo?
				</h2>
				<p itemprop="articleBody">
					Las mascotas se han convertido en <b>un miembro más de nuestra familia</b> y cada vez hay una mayor cultura sobre la tenencia y la alimentación que necesitan. <span>Ahora NO es un lujo, sino una necesidad para mantenerla en óptimas condiciones.</span>
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

					<p itemprop="ratingValue">4.8</p>

				</div>

				<div>
					<p><i class="fa fa-clock-o"></i>57 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>68 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" >
			  <div class="active">
				<h3>
				  <button>PRIMERA PARTE: generalidades de la dieta BARF</button>
				</h3>
				<ul style="display:block" itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>CLASE 1</span> - Introducción a este curso.</li> 
					<li itemprop="courseMode" content="online"><span>CLASE 2</span> – Presentación del contenido del curso.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 3</span> – ¿Qué es la dieta BARF?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 4</span> – Evolución de nuestros perros.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 5</span> – Evolución de nuestros gatos.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 6</span> – Enfermedad periodontal en perros y gatos, más allá del mal aliento.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 7</span> – Necesidades de agua en perros y gatos y su relación con el tipo de alimentación.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 8</span> – Necesidades de carbohidratos en perros y gatos, ¿son importantes?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 9</span> – ¡Hablemos de porcentajes!</li>
					<li itemprop="courseMode" content="online"><span>CLASE 10</span> – ¿Cuáles son los riesgos de la dieta BARF?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 11</span> – Bacterias, virus y parásitos y dieta BARF. </li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>SEGUNDA PARTE: componentes de la dieta BARF</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>CLASE 12</span> – Huesos carnudos crudos.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 13</span> – Huesos y razas braquicefálicas, ¡cuidado!</li>
					<li itemprop="courseMode" content="online"><span>CLASE 14</span> – Carnes para nuestros perros y gatos.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 15</span> – Hígado y otras vísceras que no pueden faltar.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 16</span> – ¡Cuidado con el exceso de hígado!</li>
					<li itemprop="courseMode" content="online"><span>CLASE 17</span> – Grasas animales y vegetales, ¡fundamentales!</li>
					<li itemprop="courseMode" content="online"><span>CLASE 18</span> – El señor huevo.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 19</span> – El papel de las verduras en la dieta BARF.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 20</span> – Frutas y dieta BARF.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 21</span> – Otros complementos de la dieta BARF (otras fuentes de fibra: avena en hojuelas, semillas de chía y linaza; patas de pollo, omega 3).</li>
					<li itemprop="courseMode" content="online"><span>CLASE 22</span> – Microbiota: un reino desconocido.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 23</span> – Probióticos, ¡que no falten!</li>
					<li itemprop="courseMode" content="online"><span>CLASE 24</span> – Prebióticos, tenemos que alimentar la microbiota.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 25</span> – Preparación de ejemplos de platos para perros y gatos.</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>TERCERA PARTE: la dieta BARF del perro</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>CLASE 26</span> – Cálculo de la ración del perro adulto.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 27</span> – Ejemplos de cálculos en perros adultos.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 28</span> – Cálculo de la ración del perro adulto, raza gigante.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 29</span> – Cálculo de la ración del perro adulto, raza miniatura</li>
					<li itemprop="courseMode" content="online"><span>CLASE 30</span> – Cálculo de la ración del cachorro.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 31</span> – Dieta del perro anciano.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 32</span> – Huesos recomendados para perros.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 33</span> – ¿Cómo hago la transición en perros?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 34</span> – ¿Cuántas comidas debo dar al día?</li>	
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>CUARTA PARTE: la dieta BARF del gato</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>CLASE 35</span> – Cambio de la dieta en el gato, ¡no olvides que son neofóbicos!</li>
					<li itemprop="courseMode" content="online"><span>CLASE 36</span> – Cálculo de la ración del gato adulto.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 37</span> – Cálculo de la ración del gatito.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 38</span> – Dieta del gato anciano.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 39</span> – Huesos recomendados para gatos.</li>
					<li itemprop="courseMode" content="online"><span>CLASE 40</span> – ¿Cómo hago la transición en gatos? ¡Paciencia!</li>
					<li itemprop="courseMode" content="online"><span>CLASE 41</span> – ¿Cuántas comidas debo dar al día?</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>QUINTA PARTE: preguntas frecuentes</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>CLASE 42</span> – ¿Se debe hacer ayuno o desintoxicar?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 43</span> – ¿Los perros se vuelven agresivos con esta dieta? ¿Aumenta su instinto cazador?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 44</span> – ¿Y si es una perra o gata que está preñada o lactando?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 45</span> – ¿Y cómo destetar cachorros y gatitos con dieta BARF?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 46</span> – ¿Se pueden combinar carnes de distintos animales en el mismo plato?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 47</span> – ¿Es costosa la dieta BARF? (relación costo beneficio, ahorros en salud y bienestar, comparación con alimentos comerciales secos)</li>
					<li itemprop="courseMode" content="online"><span>CLASE 48</span> – ¿El ajo es tóxico?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 49</span> – ¿Las uvas con tóxicas?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 50</span> – ¿Cómo deben ser las heces de un perro o gato alimentado con dieta BARF?</li>	
					<li itemprop="courseMode" content="online"><span>CLASE 51</span> – ¿Puede darle aguacate a mi perro?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 52</span> – ¿Puede darse auyama (zapallo o calabaza)?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 53</span> – ¿Pueden darse nueces?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 54</span> – ¿Cómo debo hacer la desparasitación de mi perro o gato alimentado con dieta BARF?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 55</span> – ¿Qué logística reuqiere la dieta?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 56</span> – ¿Y si nos vamos de vacaciones o el peludo se queda en guardería?</li>
					<li itemprop="courseMode" content="online"><span>CLASE 57</span> – ¿Y si qué puedo hacer si prefiero seguir dando un alimento comercial seco? </li>
				</ul>
			  </div>

			</div>

		  </div>
		</section>

		
		<section id="video-por-dentro" aria-labelledby="video-por-dentro-heading" itemscope itemtype="https://schema.org/VideoObject">
			<div class="back768">
        
				<div class="text-center section-heading">
					<h2 id="video-por-dentro-heading" itemprop="name">¿Qué es la Dieta BARF?</h2>
					<p itemprop="description">
						En el siguiente video el profe Alejandro te explica <b>qué aprenderás en el curso</b>.
					</p>
				</div>        

				<div class="boxShadowVideo" itemprop="video">
					<lite-vimeo videoid="<?= $videoMuestraID ?>"></lite-vimeo>
				</div>    
        
			</div>
		</section>
	
		
		<?php

        $params = ['class' => 'bgWhite', 'text' => '<b class="blockMobile">APRESÚRATE.</b> Últimos Cupos y CERRAMOS ACCESOS', 'section' => true];
        include ($base . "inc/landings/callToAction.php");

        ?>

		
		<section class="bajada hide480 padding0" itemscope itemtype="https://schema.org/Article" aria-labelledby="bajada-heading">
			<div class="sub-header">
				<h2 id="bajada-heading" class="visually-hidden">Información Adicional sobre el Curso</h2>
				<p itemprop="articleBody">
					Con el curso <b>DIETA BARF: Perros y Gatos + Vitales</b>, conoce la forma más sana de mejorar su estado físico y su comportamiento.
				</p>
			</div>
		</section>	

		
		<section id="tutor" class="bgYellow bg-pattern" aria-labelledby="tutor-heading">

			<div class="section-heading text-center">
				<h2 id="tutor-heading">¿Con quién lo vas a LOGRAR?</h2>
			</div>

			<div class="container" itemscope itemtype="https://schema.org/Person">
				
				<div>
					<div></div>
					<div>
						<h3>Con <b itemprop="name">Alejandro Quiceno</b></h3>
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
							Desarrollado por <b>Alejandro Quiceno</b>, colombiano, <u>apasionado de los animales y su buena tenencia</u>, con deseos de enseñarles a otros a alimentar a sus perros y gatos de manera fácil, con ingredientes de fácil consecución.
                        </p>

						<p>
							Siempre ha convivido con perros y gatos, después de un impase de salud de uno de sus perros y con la luz verde de la médica veterinaria que lo atendía, se dio a la tarea de buscar y estudiar las <b>obras de los principales autores dedicados al tema de la dieta BARF</b> o cruda en perros y gatos.
						</p>

						<div>
							<p>
								Es un convencido del papel clave que tiene la <b>buena alimentación en la salud y calidad de vida</b> de todos los seres vivos, información que además debería estar al alcance de todos los apasionados de las mascotas.
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
						<span>Al finalizar el curso podrás imprimir tu <b>certificado de conclusión digital</b> y colgarlo donde tu quieras.</span>
						<span>Estamos seguros que cuando lo hagas sentirás la satisfacción de saber que estás listo para realizar <b>saludables preparaciones con alimentos crudos y biológicamente apropiados.</b></span>
					</p>

				</div>
			</div>
		</section>
		
		<?php include_once ($base . "inc/landings/header-beneficios.php"); ?>

		<?php include_once ($base . "inc/landings/beneficios.php"); ?>

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