<?php

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "mascotas-sanas";
$nombredelcurso = "Mascotas Sanas";
$autor = "Diana Fonseca";
$autorSlug = "diana-fonseca";

include $base . "inc/functions.php";

//precios en dolares
$oferta50Precio = getPrecio(35);
$sinOfertaPrecio = getPrecio(69.99);

$currency = getCurrency();


$bono1 = getPrecio(9);
$bono2 = getPrecio(11);
$bono3 = getPrecio(15);
$bono4 = getPrecio(15);
$bonosTotal = getPrecio(50);

$landingData = getLandingData();
$imgPagosBillet = $landingData["IMGBILLET"];
$puedesAbonarCon = $landingData["SHOWMEDIOS"];
$medioPagoEfectivo = $landingData["TEXTMEDIOSPAGO"];

if (COUNTRYCODE == "ar" || COUNTRYCODE == "cl" || COUNTRYCODE == "eu") {

    $textCuotasFull = "Tarjeta de crédito.";
    $textCuotas50Off = "Tarjeta de crédito.";

} else if (COUNTRYCODE == "co") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(6.557) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(2.916) . "</b>.";

} else if (COUNTRYCODE == "pe") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(5.798, 1) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(2.899, 1) . "</b>.";

} else if (COUNTRYCODE == "mx") {

    $textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>" . $currency . " " . getPrecio(7.067, 1) . "</b>.";
    $textCuotas50Off = "Tarjeta de crédito hasta en <b>6 cuotas</b> de <b>" . $currency . " " . getPrecio(6.494, 1) . "</b>.";

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
$datePublished = "2022-07-29";

// fecha de ultima modificacion
$dateModified = "2022-10-30";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";

// cuantas alumnas felicies hay
$alumnasfelices = 5;

// cuantas muestras hay
$muestras = 7;

// grupos privados
$g_telegram = true;
$g_facebook = true;
$g_whatsaup = false;

// descripcion
$des = "🐶🐱 Aprende nutrición natural para perros y gatos 🥦. Prepara dietas caseras, previene enfermedades y emprende tu propio negocio pet-friendly. 🚀 ¡Sumate HOY!";

// titulo
$tit = "✓ Promo 50% Off en el Curso de Mascotas Sanas de Diana Fonseca - Petz School";

$videoPrincipalID = "885021738";
$videoMuestraID = "885026336";


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

$linkProducto = "https://go.hotmart.com/P71588079X?ap=4e81";


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
					Transformá la alimentación de tus mascotas con recetas naturales y emprende con propósito y amor
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
						<p>297</p>
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
					<span>CONVIÉRTETE</span> en una experta en nutrición animal preparando <u>dietas saludables y naturales</u> para prevenir enfermedades en perros y gatos.
					<span>CREA tu propio negocio</span> de dietas balanceadas para mascotas 100% natural. Ofrece a <u>tus clientes peludos</u> una alimentación sana.
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

					<p>
						Los organismos de nuestros perros y gatos <b>no están diseñados para comer alimentos altamente procesados</b>. Por el contrario, alcanzan la plenitud y la salud cuando los alimentamos de forma natural, fresca y sin conservantes ni aditivos.
					</p>	
					<p>
						A lo largo de este programa aprenderás a:
					</p>

					<div itemprop="description">
						<p itemprop="competencyRequired">Aprenderás a elaborar <b>dietas caseras naturales</b>, variadas y nutritivas para alimentarlos de forma correcta en el día a día.</p>
						<p itemprop="competencyRequired">Aprenderás a hacer <b>mezclas de ingredientes</b> para crear dietas según la necesidad nutricional de tu perro o gato como carnívoros que son.</p>
						<p itemprop="competencyRequired">Sabrás distinguir todos aquellos alimentos aptos para su correcta nutrición.</p>
						<p itemprop="competencyRequired">Aprenderás cómo alimentar a perros y gatos con cáncer, diabétes, leucemia y otras dolencias.</p>
						<p itemprop="competencyRequired">Conocerás los <b>suplementos naturales</b> básicos para una dieta evolutiva de calidad.</p>
						<p itemprop="competencyRequired">Aprenderás a <b>reconocer</b> aquellos <b>alimentos comerciales</b> con una calidad aceptable.</p>
						<p itemprop="competencyRequired">Conocerás la <b>industria de la alimentación</b> para mascotas y todo lo que esconde.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="muestras" class="bgYellow" aria-labelledby="muestras-heading">

			<div class="section-heading text-center">
				<h2 id="muestras-heading">Muestras de nuestras alumnas</h2>
				<p>Así como ellas, tu <b>adquirirás las habilidades</b> y competencias para realizar <b>dietas nutricionales</b> para mascotas.</p>
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
					<span>Los organismos de nuestros perros y gatos <u>no están diseñados para comer alimentos altamente procesados</u>.</span> 
					<span>Por el contrario, alcanzan la plenitud y la salud cuando los alimentamos de forma natural, fresca y <b>sin conservantes ni aditivos</b>.</span> 
					<span>Si sabes o intuyes esto que te estoy diciendo, este curso es para ti.</span>
				</p>
			</div>
		</section>
		
		<section id="contenido" class="bg-pattern" itemscope itemtype="https://schema.org/Course">
		  <div class="container">
			<div class="text-center section-heading">

			  <h2 itemprop="name">¿Cómo lo vas a LOGRAR?</h2>

			  <p itemprop="description">
				Por medio de un programa <b>práctico y completo</b>, explicado paso a paso y en videos HD, conformado con el siguiente <b>plan de estudios</b>
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
					<p><i class="fa fa-clock-o"></i>46 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>57 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" class="two-cols">
			  <div class="active">
				<h3>
				  <button>Haz clic para ver el <br/>contenido del curso</button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No 1.</span> – Bienvenida.</li> 
					<li itemprop="courseMode" content="online"><span>Clase No 2.</span> – Invitación al grupo de Facebook.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 3.</span> – Quien soy y como llegue hasta aquí.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 4.</span> – Virus, bacterias y parásitos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 5.</span> – ¿Qué dicen los científicos?</li>
					<li itemprop="courseMode" content="online"><span>Clase No 6.</span> – Más personas deberían saber esto.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 7.</span> – Mitos sobre la dieta evolutiva.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 8.</span> – Hábitos alimenticios del perro.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 9.</span> – Hábitos alimenticios del gato.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 10.</span> – Elementos que componen la dieta evolutiva.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 11.</span> – Huesos carnosos y huesos recreativos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 12.</span> – Carne de músculo.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 13.</span> – Verduras y frutas.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 14.</span> – La importancia de las vísceras.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 15.</span> – ¿Por qué suplementar?</li>
					<li itemprop="courseMode" content="online"><span>Clase No 16.</span> – Suplementación en animales con afecciones inflamatorias.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 17.</span> – Aceite de oliva extra virgen.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 18.</span> – Las enzimas.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 19.</span> – Los probióticos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 20.</span> – El ajo…¿Bueno o malo?</li>
					<li itemprop="courseMode" content="online"><span>Clase No 21.</span> – Adicion de carne de músculo en la dieta.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 22.</span> – Vitaminas y minerales.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 23.</span> – Vitaminas del complejo B y vitamina C.</li>	
					<li itemprop="courseMode" content="online"><span>Clase No 24.</span> – Los huesos... ¿Son peligrosos?</li>
					<li itemprop="courseMode" content="online"><span>Clase No 25.</span> – La dieta ¿Debe ser completa y balanceada?</li>
					<li itemprop="courseMode" content="online"><span>Clase No 26.</span> – Preparando la dieta.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 27.</span> – Aprendiendo a evaluar la condición corporal.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 28.</span> – Dieta BARF para gatos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 29.</span> – Dieta BARF para perros.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 30.</span> – Mezcla de proteínas, verduras y frutas.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 31.</span> – Principio de la dieta evolutiva.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 32.</span> – Cambio de alimentación en cachorros.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 33.</span> – Cambio de alimentación en animales geriátricos y enfermos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 34.</span> – Cambio de alimentación en perros.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 35.</span> – Neofobia felina.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 36.</span> – Cambio de alimentación en gatos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 37.</span> – Nutrición en gatos con leucemia felina.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 38.</span> – Nutrición en perros y gatos diabéticos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 39.</span> – Nutrición en perros y gatos con cáncer.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 40.</span> – Qué hacer en casos de diarrea.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 41.</span> – Qué hacer en casos de alergia.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 42.</span> – Qué hacer si se presentan vómitos.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 43.</span> – Como hacer el alimento más apetecible.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 44.</span> – Embarazo, lactancia y destete.</li>	
					<li itemprop="courseMode" content="online"><span>Clase No 45.</span> – Despedida.</li>
					<li itemprop="courseMode" content="online"><span>Clase No 46.</span> – Invitación especial.</li>
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
                    'img' => 'bonus-torta-barf.png',
                    'alt' => 'Receta infalible para realizar una exquisita torta BARF',
                    'precio' => $bono1,
                    'descripcion' => '<b>Receta infalible</b> para realizar una exquisita torta BARF.',
                ],
                [
                    'img' => 'bonus-vitaminas-naturales.png',
                    'alt' => 'Aprende hacer vitaminas naturales para tus mascotas.',
                    'precio' => $bono2,
                    'descripcion' => 'Aprende hacer <b>vitaminas naturales</b> para tus mascotas.',
                ],
                [
                    'img' => 'verdades-escandalosas-v1.png',
                    'alt' => 'Vol. 1 de Verdades Escandalosas. Lo que no te cuentan sobre su alimentación.',
                    'precio' => $bono3,
                    'descripcion' => '<b>Vol. 1</b> de Verdades Escandalosas. Lo que <b>no te cuentan</b> sobre su alimentación.',
                ],
                [
                    'img' => 'verdades-escandalosas-v2.png',
                    'alt' => 'Vol. 2 de Verdades Escandalosas. Lo que no te cuentan sobre su alimentación.',
                    'precio' => $bono4,
                    'descripcion' => '<b>Vol. 2</b> de Verdades Escandalosas. Lo que <b>no te cuentan</b> sobre su alimentación.',
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
						<span>Al finalizar el curso, tendrás un <b>certificado de conclusión digital</b>, el cual podrás imprimir y compartirlo en <b>el grupo</b>.</span>
						<span>Estamos seguros que cuando lo hagas sentirás una satisfacción de saber que estás lista para <b>crear dietas balanceadas y nutritivas</b> para mejorar la salud de tus clientes peludos con tu propio negocio en esta bonita actividad.</span>
					</p>

				</div>
			</div>
		</section>	
		
		<?php include_once ($base . "inc/landings/header-beneficios.php"); ?>

		<?php include_once ($base . "inc/landings/beneficios.php"); ?>  

		<?php

        $masBeneficios = [
            "Más de 40 lecciones en video, formato súper HD.",
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