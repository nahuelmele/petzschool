<?php 

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "costura-canina-y-felina";
$nombredelcurso = "Costura Canina y Felina";
$autor = "Willian Quispe Abarca";
$autorSlug = "willian-quispe-abarca";

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
$datePublished = "2023-05-02";

// fecha de ultima modificacion
$dateModified = "2023-05-05";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";

// cuantas alumnas felicies hay
$alumnasfelices = 7;

// grupos privados
$g_telegram = false;
$g_facebook = false;
$g_whatsaup = false;

// descripcion
$des = "Curso de Costura canina y felina de Willian Quispe Abarca, aprende a confeccionar distintos tipos de prendas para tus mascotas y emprende tu propio negocio - Petz School.";

// titulo
$tit = "✓ Aprende Costura canina y felina. Crea tu Propio Negocio Pets Fashion - Petz School - Willian Quispe Abarca";

$videoPrincipalID	= "824910316";
$videoAdicionalID	= "857330822";


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

$linkProducto = "https://go.hotmart.com/N53167443J?ap=cb87";


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
    <body id="page-top" class="<?= $dirLanding ?>">

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>
  
		<?php
        if ($hayMenu)
            include_once ($base . "inc/nav.php");
        ?>
		
		<section id="first-scroll" <?php if (!$timer) echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
					Aprende <b>costura canina y felina</b> para tus mascotas y emprende tu Propio Negocio Pets Fashion 
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
						<p>689</p>
						<p>Groomers </p>
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
					Empieza desde cero y conviértete en un <span>profesional de la costura canina y felina</span> para consentir a tus cachorros o iniciar <u>tu propio emprendimiento</u>.
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
						<p itemprop="competencyRequired">A confeccionar prendas ligeras y prendas más gruesas para las temporadas de frío.</p>
						<p itemprop="competencyRequired">El manejo adecuado de las distintas <b>telas</b> y a desarrollar métodos sencillos y prácticos de <b>patronaje</b>.</p>
						<p itemprop="competencyRequired">Crear moldes de acuerdo a su talla y a hacer un uso adecuado de la <b>cinta métrica</b> para tomar medidas.</p>
						<p itemprop="competencyRequired">Usar correctamente las <b>maquinas idóneas</b> para la confección y la máquina de botones.</p>
						<p itemprop="competencyRequired">Hacer un corte con precisión de las <b>distintas telas</b> y comprender cuales son los materiales necesarios para cada prenda.</p>
						<p itemprop="competencyRequired">Aprender rápidamente con estrategias enfocadas en métodos 100% prácticos de <b>costura</b>.</p>
						<p itemprop="competencyRequired">Desarrollar acabados perfectos de cada prenda y crear ropa de acuerdo a las <b>temporadas y ocasión</b>. (Navideño, casual etc.)</p>
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
					¿Sabías que la industria de las mascotas continúa creciendo en todo el mundo?
				</h2>
				<p itemprop="articleBody">
					Las mascotas se han convertido en <b>un miembro más de nuestra familia</b> y cada vez hay una mayor cultura sobre la tenencia y el aseo que necesitan. <span>Ahora NO es un lujo, sino una necesidad para mantenerla en óptimas condiciones.</span>
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
					<p><i class="fa fa-clock-o"></i>54 Lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>22 Evaluaciones</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" >

			  <div class="active">
				<h3>
				  <button>TEMARIO</button>
				</h3>
				<ul style="display:block" itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>PARTE 2</span> – Algunas recomendaciones.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 2 - A</span> – Conociendo las maquinas necesarias, empezamos por la maquina recta.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 2 - B</span> – Encendido de Maquina recta y medidas de seguridad.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 2 - C</span> – Partes de la maquina Remalle.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 2 - D</span> – Enhebrado de la maquina Remalle.</li>
                    <li itemprop="courseMode" content="online"><span>PARTE 2 - E</span> – Encendiendo y probando la maquina Remalladora.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 3</span> – Presentación de materiales para la elaboración del chalequito de Tigresa.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 4</span> – Tomando las medidas a tigresa para su chalequito.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 5</span> – Patronaje de chaleco de tigresa.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 6</span> – Corte de micro polar para el chalequito.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 7</span> – Confección de chalequito de polar de Tigresa.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 8</span> – Probando el chalequito de polar a tigresa.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 9</span> – Materiales para la polerita de layka.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 10</span> – Tomando sus medidas a Layka.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 11</span> – Patronaje para la POLERA de Layka.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 12</span> – Corte de polera de Layka.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 13</span> – Confección de polerita de Layka (parte uno).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 14</span> – Confección de polerita de Layka (parte dos).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 15</span> – Probando la polera a layka.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 16</span> – Presentación de materiales para el chaleco acolchado de Pachi.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 17</span> – Tomando medidas a pachi.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 18</span> – Patronaje para chalequito de Pachi.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 19</span> – Corte de chalequito de Pachi.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 20</span> – Confección del chaleco de pachi (parte uno).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 21</span> – Confección del chaleco de Pachi (parte dos).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 22</span> – Probando el chaleco a Pachi y un poquito de su historia.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 23</span> – Materiales para el vestido de tela floreada para Lulu.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 24</span> – Tomando mediadas a Lulú.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 25</span> – Patronaje del vestido del Lulu.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 26</span> – Corte del vestido de Lulu.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 27</span> – Confección del vestido de Lulu.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 28</span> – Probando el vestido a Lulu.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 29</span> – Materiales para la elaboración del vestido de Zamanta.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 30</span> – Tomando sus medidas a Zamanta.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 31</span> – Preparando patronaje para el vestido de Zamanta.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 32</span> – Corte del vistidito de Zamanta.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 33</span> – Confección del vestido de Zamanta (parte uno).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 34</span> – Confección del vestido de Zamanta (parte dos).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 35</span> – Materiales para la elaboración del vestido de Mady.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 36</span> – Tomando las medidas a Mady.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 37</span> – Creando los moldes para el traje de duende de Mady.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 38</span> – Corte del vestidito de duende de Mady.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 39</span> – Confección de traje de duende de Mady (Parte uno).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 40</span> – Confección de traje de duende de Mady (Parte dos).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 41</span> – Probando el traje de duende a Mady.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 42</span> – Materiales para traje reno de YORDY.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 43</span> – Tomando medidas a yordy.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 44</span> – Creando los moldes del traje reno de Yordy.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 45</span> – Corte de tela para la elaboración del traje reno.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 46</span> – Confección de traje reno de Yordy (Parte uno).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 47</span> – Confección de traje reno de Yordy (Parte dos).</li>
					<li itemprop="courseMode" content="online"><span>PARTE 48</span> – Probando el traje de reno a Pachi.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 49</span> – Presentación de materiales para el gorrito navideño y su corbatita.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 50</span> – Medidas de Tigresa para gorrito y corbata.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 51</span> – Patronaje de gorrito y corbata.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 52</span> – Corte de materiales.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 53</span> – Confección, probando el gorrito y corbatita.</li>
					<li itemprop="courseMode" content="online"><span>PARTE 54</span> – Hasta luego, muchas gracias!.</li>	
				</ul>
			  </div>

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
					<span>Al finalizar el curso <b>te sorprenderás</b></span> de todas las posibilidades que tienes en el mundo de la Costura canina y felina, puedes crear tu propio negocio Pets Fashion y escalar en un mercado emergente.
				</p>
			</div>
		</section>	

		
		<section id="tutor" class="bgYellow bg-pattern" aria-labelledby="tutor-heading">

			<div class="section-heading text-center">
				<h2 id="tutor-heading">¿Con quién lo vas a LOGRAR?</h2>
			</div>

			<div class="container" itemscope itemtype="https://schema.org/Person">
				<meta itemprop="jobTitle" content="Experto en procesos de costura, Empresario, Inversor">
				<div>
					<div></div>
					<div>
						<h3>Con <b itemprop="name">Willian Quispe Abarca</b></h3>
						<div>
							<h4 itemprop="jobTitle">Experto en procesos de costura</h4>
							<h4 itemprop="jobTitle">Empresario</h4>
							<h4 itemprop="jobTitle">Inversor</h4>
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
							Desarrollado por <b>WILLIAN QUISPE ABARCA</b>, Administrador y supervisor de procesos de costura, certificado por CHIO LECCA FASHION SCHOOL.
						</p>

						<p>
							Empresario e inversor en distintos negocios con más de 15 años de experiencia en el mundo de la costura. Fundador de “Wiston Joe” enfocada en la elaboración de todo tipo de prendas de vestir.
						</p>						
						
						<div>
							<p>
								“Escucha, Aprende y Aplica” es una de sus frases favoritas. </b>.
							</p>
						</div>					
					</div>
				</div>
			</div>
		</section>

		<?php

        $subtitleAlumnas = ['subtitle' => '' ];
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
						<span>Estamos seguros que cuando lo hagas sentirás la satisfacción de saber que estás listo para <b>realizar increíbles prendas caninas y felinas</b> y crear tu propio negocio Pets Fashion.</span>
					</p>

				</div>
			</div>
		</section>

		<section id="video-adicional" class="bgYellow bg-pattern" aria-labelledby="video-adicional-heading" itemscope itemtype="https://schema.org/VideoObject">
			<div class="back768">
        
				<div class="text-center section-heading">
					<h2 id="video-adicional-heading" itemprop="name">Conoce al profe William</h2>
					<p itemprop="description">
						<b>¿Qué aprenderás en el curso?</b>
					</p>
				</div>        

				<div class="boxShadowVideo" itemprop="video">
					<lite-vimeo videoid="<?= $videoAdicionalID ?>"></lite-vimeo>
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