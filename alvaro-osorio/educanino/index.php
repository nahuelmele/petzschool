<?php 

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "educanino";
$nombredelcurso = "Educanino";
$autor = "Alvaro Osorio";
$autorSlug = "alvaro-osorio";

include $base. "inc/functions.php";

//precios en dolares
$oferta50Precio  	= getPrecio(60);
$sinOfertaPrecio 	= getPrecio(119.99);

$currency 			= getCurrency();

$landingData 		= getLandingData();
$imgPagosBillet 	= $landingData["IMGBILLET"];
$puedesAbonarCon 	= $landingData["SHOWMEDIOS"];
$medioPagoEfectivo  = $landingData["TEXTMEDIOSPAGO"];

if( COUNTRYCODE == "ar" || COUNTRYCODE == "cl" || COUNTRYCODE == "eu" ){

	$textCuotasFull = "Tarjeta de crédito.";
	$textCuotas50Off = "Tarjeta de crédito.";
	
}else if( COUNTRYCODE == "co" ){
	
	$textCuotasFull = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(10.000) ."</b>."; 
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(4.999) ."</b>.";
	
}else if( COUNTRYCODE == "pe" ){	

	$textCuotasFull =  "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(9.944,1) ."</b>.";
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(4.972,1) ."</b>.";
			
}else if( COUNTRYCODE == "mx" ){
	
	$textCuotasFull =  "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(12.115,1) ."</b>."; 
	$textCuotas50Off = "Tarjeta de crédito hasta en <b>12 cuotas</b> de <b>".$currency." ". getPrecio(6.058,1) ."</b>.";
			
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
$datePublished = "2023-02-02";

// fecha de ultima modificacion
$dateModified = "2023-02-19";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";

// descripcion
$des = "Adiestra a tu perro con solo 15 minutos al día y certifícate como adiestrador canino profesional - Petz School.";

// titulo
$tit = "✓ Promo 50% Off en el Curso Educanino de Alvaro Osorio - Petz School";

$videoPrincipalID 	= "788386754";
$osorioenTv		= "805308109";

$videos = [
    "787369452",
    "787369588",
    "787369764",
    "787369534",
    "787369804",
    "787369990",
];

// grupos privados
$g_telegram = false;
$g_facebook = false;
$g_whatsaup = false;


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


//https://go.hotmart.com/Y16710522K?ap=4827 ---> mas limpio sin produtos relacionados
$linkProducto = "https://go.hotmart.com/Y16710522K?ap=bc7a";


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

		<?php include_once ($base . "inc/header-landing.php"); ?>
		
	</head>
    <body id="page-top" class="<?= $dirLanding ?>">

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>

		<?php 
		if( $hayMenu )
			include_once( $base. "inc/nav.php");
		?>

		<section id="first-scroll" <?php if (!$timer)
            echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
					Adiestra a tu perro con solo 15 minutos al día y certifícate como adiestrador canino profesional
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
						<p>1579</p>
						<p>Dogs Lovers</p>
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
					<span>CONVIÉRTETE</span> en un experto adiestrador canino certificado.
					<span>CREA tu propio negocio</span> emprendiendo en un sector en crecimiento como <u>profesional independiente</u>.
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
						<p itemprop="competencyRequired">Aprenderás cómo entrenar a tu perro para que <b>no haga más sus necesidades en casa</b>.</p>
						<p itemprop="competencyRequired"><b>Como adiestar a tu perro para que no muerda la ropa</b>, zapatos o todo lo que encuentre a su paso.</p>
						<p itemprop="competencyRequired">Enseñale a caminar a tu lado durante el paseo <b>sin que te arrastre, tire la correa</b> o se vuelva loco incluso si ve a otros perros o gatos cerca.</p>
						<p itemprop="competencyRequired">Como <b>prevenir que tu hijo sea agredido por tu perro</b> y establecer una estructura de manada.</p>
						<p itemprop="competencyRequired">Aprende a que responda inmediatamente a tu llamado. <b>Esto podría salvar la vida de tu perro.</b></p>
						<p itemprop="competencyRequired">Aprende a <b>controlar la ansiedad por separación y ladridos de tu perro</b> incluso si no estas en casa.</p>
						<p itemprop="competencyRequired"><b>El método para que tu perro no sea agresivo</b> y sea sociable con las otras personas, perros o gatos.</p>
						<p itemprop="competencyRequired">Cuidados básicos y <b>primeros auxilios médicos para tu perros</b>.</p>
					</div>
				</div>
			</div>
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

					<p itemprop="ratingValue">4.7</p>

				</div>

				<div>
					<p><i class="fa fa-clock-o"></i>Más de 360 Lecciones</p>
					<p><i class="fa fa-user"></i>8900 estudiantes</p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>164 Evaluaciones</p>
					<p><i class="fa fa-star"></i>96% de evaluaciones positivas</p>
				</div>

			  </div>		
			</div>
    
			<div id="temario" >
			  <div class="active">
				<h3>
				  <button>01. OBEDIENCIA BÁSICA CANINA - <span>126 Clases</span></button>
				</h3>
				<ul style="display:block" itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Introducción a la obediencia canina</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Herramientas necesarias para el adiestramiento</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Aprende cómo utilizar los premios para motivar la obediencia</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Cómo reforzar el vínculo con tu mascota</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - El concepto de fondo y figura</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Fondo y figura: Ejercicios prácticos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Fondo y figura: Ejercicios con juguete y comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Fondo y figura: Ejercicio con dos juguetes iguales</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Fondo y Figura: El resultado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Ejercicio de entrenamiento memoria muscular</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Establecer una buena comunicación con tu perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Marcadores de comportamiento efectivos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Marcador de Acierto: El clicker</li>
					<li itemprop="courseMode" content="online"><span>Clase No.14</span> - Cómo usar la voz como marcador de premio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.15</span> - Como NO se debe usar un marcador de premio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.16</span> - Aprende a usar los marcadores de estabilidad y error</li>
					<li itemprop="courseMode" content="online"><span>Clase No.17</span> - Domina el marcador de liberación.</li>
					<li itemprop="courseMode" content="online"><span>Clase No.18</span> - Encontrando el balance entre los marcadores de conducta</li>
					<li itemprop="courseMode" content="online"><span>Clase No.19</span> - Cómo aplicar el marcador de liberación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.20</span> - Inducción de los comandos básicos de obediencia</li>
					<li itemprop="courseMode" content="online"><span>Clase No.21</span> - Cómo usar la técnica Luring para lograr el echado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.22</span> - Empezar a desligar la comida del ejercicio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.23</span> - Practicar el sacar la comida de las manos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.24</span> - Mejores consejos para facilitar las sesiones</li>
					<li itemprop="courseMode" content="online"><span>Clase No.25</span> - Perros inquietos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.26</span> - disminuyendo el nivel de dificultad</li>
					<li itemprop="courseMode" content="online"><span>Clase No.27</span> - Disminuir la dificultad de trabajar con perros inquietos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.28</span> - Incrementando el nivel de dificultad en el adiestramiento</li>
					<li itemprop="courseMode" content="online"><span>Clase No.29</span> - Cómo enseñar a tu perro el echado hacia atrás</li>
					<li itemprop="courseMode" content="online"><span>Clase No.30</span> - Interferencias del ambiente en las sesiones de entrenamiento</li>
					<li itemprop="courseMode" content="online"><span>Clase No.31</span> - Cambiar de contexto para facilitar el aprendizaje</li>
					<li itemprop="courseMode" content="online"><span>Clase No.32</span> - Cómo lograr la permanencia en el echado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.33</span> - Desarrollar la orden "A tu sitio"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.34</span> - ¿Por qué no usamos órdenes verbales hasta ahora?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.35</span> - Practicar "A tu sitio" sin el refuerzo de la comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.36</span> - Mejorar la estabilidad en el ejercicio de "A tu sitio"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.37</span> - Inducir la conducta de caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.38</span> - Tip importante para el ejercicio "caminar al lado"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.39</span> - Caminar al lado en ambientes y distracciones controladas</li>
					<li itemprop="courseMode" content="online"><span>Clase No.40</span> - Caminar al lado: Aumentando el recorrido con distracciones</li>
					<li itemprop="courseMode" content="online"><span>Clase No.41</span> - Trabajando en la concentración en el "Caminar al lado"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.42</span> - Otras técnicas infalibles para el caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.43</span> - Un consejo más para perfeccionar el "Caminar al lado"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.44</span> - Aumentado distracción en el ejercicio caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.45</span> - Llevar la distracción en el caminar al lado a otro nivel</li>
					<li itemprop="courseMode" content="online"><span>Clase No.46</span> - Introducir cambios de dirección en el caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.47</span> - Consolidando aún más la atención en el caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.48</span> - Incrementar la fuerza de las distracciones en el caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.49</span> - Aprendar el caminar al lado sin tensar la correa</li>
					<li itemprop="courseMode" content="online"><span>Clase No.50</span> - Truco caminar al lado usando la pechera antiarrastre</li>
					<li itemprop="courseMode" content="online"><span>Clase No.51</span> - Instrucciones para colocar la pechera</li>
					<li itemprop="courseMode" content="online"><span>Clase No.52</span> - Explicación de como funciona la pechera</li>
					<li itemprop="courseMode" content="online"><span>Clase No.53</span> - Introducir distracciones con la pechera</li>
					<li itemprop="courseMode" content="online"><span>Clase No.54</span> - Cómo hacer cambios de marcha con la pechera</li>
					<li itemprop="courseMode" content="online"><span>Clase No.55</span> - Avanzar al ritmo de mi perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.56</span> - Introducir cambios de velocidad al caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.57</span> - Giros a la derecha e izquierda</li>
					<li itemprop="courseMode" content="online"><span>Clase No.58</span> - Introducción al comando para acudir al llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.59</span> - Aumentado la exigencia en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.60</span> - Introducir distracciones con comida en la orden del llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.61</span> - Consejos para ejecutar la orden acudir al llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.62</span> - Consejos extras para la orden acudir al llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.63</span> - Enseñar al perro a no discriminar el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.64</span> - Generalizando el uso de la cuerda larga en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.65</span> - Lograr que el perro comprenda el uso de la cuerda larga</li>
					<li itemprop="courseMode" content="online"><span>Clase No.66</span> - El llamado en un área abierta y comprobar la cuerda larga.</li>
					<li itemprop="courseMode" content="online"><span>Clase No.67</span> - Distracciones más fuertes en el acudir al llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.68</span> - Introducir un comando verbal en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.69</span> - Agregar distractores de mayor valor para el perro en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.70</span> - Agregar conflictos y distracciones en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.71</span> - Aumentando la dificultad en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.72</span> - Aumentado aún mas la dificultad en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.73</span> - Lanzar la pelota como distracción en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.74</span> - Enseñar a acudir al llamado y quedarse con nosotros</li>
					<li itemprop="courseMode" content="online"><span>Clase No.75</span> - Enseñar lecciones: Acudir al llamado, quedarse y liberar</li>
					<li itemprop="courseMode" content="online"><span>Clase No.76</span> - Acudir al llamado de forma cognitiva</li>
					<li itemprop="courseMode" content="online"><span>Clase No.77</span> - Crear distracción con juguete para el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.78</span> - Crear aún mas provocación en la orde del llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.79</span> - Logar con éxito el cambio de ambiente en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.80</span> - Aumentar la dificultad de las distracciones en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.81</span> - Como incorporar las ordenes verbales a los ejercicios</li>
					<li itemprop="courseMode" content="online"><span>Clase No.82</span> - Señal Conocida Vs Señal desconocida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.83</span> - Distracción con otros perros en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.84</span> - Cambio de ambiente en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.85</span> - Generalización en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.86</span> - Sesiones cortas con nivel de exigencia nuevo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.87</span> - Buscando una respuesta rápida y constante al comando verbal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.88</span> - Repaso de conceptos anteriores</li>
					<li itemprop="courseMode" content="online"><span>Clase No.89</span> - Asociación de señal Verbal y señal corporal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.90</span> - Ejemplos prácticos: Asociación señal vebal y corporal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.91</span> - Señal verbal a tu sitio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.92</span> - Lograr la permanencia en la orden de a tu sitio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.93</span> - Trabajar en la calma en el "A tu sitio"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.94</span> - Reforzando la calma con liberación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.95</span> - Distracciones en el " A tu sitio"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.96</span> - Buscando presición en el "Caminar al lado"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.97</span> - Colocar el nombre al caminar al lado y marcando los errores</li>
					<li itemprop="courseMode" content="online"><span>Clase No.98</span> - Marcando los errores en el caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.99</span> - Ejemplo practico</li>
					<li itemprop="courseMode" content="online"><span>Clase No.100</span> - Reforzando con el comando de liberación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.101</span> - Mas detalles en el "Caminar al lado"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.102</span> - Niveles de distracción en el "caminar al lado" Cambio de velocidad</li>
					<li itemprop="courseMode" content="online"><span>Clase No.103</span> - Ampliando el concepto en el caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.104</span> - Trabajando al lado de otros perros</li>
					<li itemprop="courseMode" content="online"><span>Clase No.105</span> - Trabajando otros ejercicios en presencia de otros perros</li>
					<li itemprop="courseMode" content="online"><span>Clase No.106</span> - Control del impulso frente a otros perros</li>
					<li itemprop="courseMode" content="online"><span>Clase No.107</span> - Permanencia en el "a tu sitio frente a otros perros"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.108</span> - Principio de Premack</li>
					<li itemprop="courseMode" content="online"><span>Clase No.109</span> - Aplicación practica en el a tu sitio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.110</span> - Colocando consecuencias en el ejercicio de "A tu sitio"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.111</span> - Distracciones de mayor nivel en el "A tu sitio"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.112</span> - Incrementando las distracciones en distancia e intensidad</li>
					<li itemprop="courseMode" content="online"><span>Clase No.113</span> - Emociones y distracciones en el adiestramiento</li>
					<li itemprop="courseMode" content="online"><span>Clase No.114</span> - Reforzando la calma en la obediencia</li>
					<li itemprop="courseMode" content="online"><span>Clase No.115</span> - Buscando la auto regulación de la mascota</li>
					<li itemprop="courseMode" content="online"><span>Clase No.116</span> - Exigencias y Herramientas en las sesiones</li>
					<li itemprop="courseMode" content="online"><span>Clase No.117</span> - Cuando y como exigir a tu perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.118</span> - Cuando aumentar la dificultad en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.119</span> - Cuando quitar la correa en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.120</span> - Como evitar que mi perro discrimine la cuerda en el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.121</span> - Probando si mi perro obedece sin correa al llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.122</span> - Resultados en la orden el llamado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.123</span> - Herramientas en el adiestramiento canino</li>
					<li itemprop="courseMode" content="online"><span>Clase No.124</span> - Cómo usar el collar electrónico</li>
					<li itemprop="courseMode" content="online"><span>Clase No.125</span> - Problemas de comportamiento en el perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.126</span> - Conclusión de la obediencia canina básica y avanzada</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>02. CACHORROS EDUCACIÓN Y OBEDIENCIA - <span>48 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Introducción al adiestramiento de cachorros</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Aprende cómo escoger la raza</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Clasificación zootecnica de las razas</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Adiestramiento en razas de pastoreo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Adiestramiento en razas sabuesos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Entrenamiento en terreros o terriers</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Entrenamiento en perros criollos o mestizos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Entrenamiento en perros Molosoides - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Entrenamiento en Perros Molosoides - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Explicación sobre la forma en como aprenden los perros</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Como emplear los premios, castigos y conductas autoreforzantes</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Cómo usar los castigos ambientales en el entrenamiento</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Conoce de cerca la técnica del Timing</li>
					<li itemprop="courseMode" content="online"><span>Clase No.14</span> - Desarrolla en el perro hábitos de higiene</li>
					<li itemprop="courseMode" content="online"><span>Clase No.15</span> - El guacal y su adaptación - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.16</span> - El guacal y su adaptación - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.17</span> - El guacal y su adaptación - Parte 3</li>
					<li itemprop="courseMode" content="online"><span>Clase No.18</span> - Enseña al perro a hacer asociaciones de texturas de piso</li>
					<li itemprop="courseMode" content="online"><span>Clase No.19</span> - Cómo manejar los accidentes higiénicos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.20</span> - Hábitos Higiénicos: Horarios para el perro - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.21</span> - Hábitos Higiénicos: Horarios para nuestro perro - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.22</span> - Hábitos Higiénicos: Asociar una orden - Parte 3</li>
					<li itemprop="courseMode" content="online"><span>Clase No.23</span> - Cómo controlar el mordisqueo destructivo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.24</span> - Cómo manejar la conducta de morder las manos y la ropa</li>
					<li itemprop="courseMode" content="online"><span>Clase No.25</span> - Redirigir la mordida sobre los juguetes</li>
					<li itemprop="courseMode" content="online"><span>Clase No.26</span> - Aprende a manipular físicamente tu cachorro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.27</span> - Prevención de posesión de recursos en el perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.28</span> - Corregir la conducta de saltar sobre las personas - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.29</span> - Corregir la conducta de saltar sobre las personas - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.30</span> - Sobre estimulación - Muestra de un salto peligroso</li>
					<li itemprop="courseMode" content="online"><span>Clase No.31</span> - ¿Por qué no sobre estimular el perro?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.32</span> - Reforzar una conducta opuesta a saltar - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.33</span> - Reforzar una conducta opuesta a saltar - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.34</span> - Uso del arnés para controlar los saltos sobre las personas</li>
					<li itemprop="courseMode" content="online"><span>Clase No.35</span> - Socialización de tu cachorro - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.36</span> - Socialización de tu cachorro - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.37</span> - Juego y comida herramienta para socialización</li>
					<li itemprop="courseMode" content="online"><span>Clase No.38</span> - Prevención de la ansiedad por separación - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.39</span> - Prevención de la ansiedad por separación - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.40</span> - Conceptos básicos en la educación de cachorros - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.41</span> - Conceptos básicos en la educación de cachorros - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.42</span> - Juguetes para nuestro perro - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.43</span> - Juguetes para nuestro perro - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.44</span> - Obediencia Básica: Orden "Sentado"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.45</span> - Obediencia básica: "Sentado" y "Echado"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.46</span> - Ejercicios "Echado" y "Fondo y figura"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.47</span> - Usar el juego para emplear el ejercicio "Fondo y figura"</li>
					<li itemprop="courseMode" content="online"><span>Clase No.48</span> - Conclusiones sobre la educación y obediencia en cachorros</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>03. EL PERRO Y EL JUEGO - <span>26 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.14</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.15</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.16</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.17</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.18</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.19</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.20</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.21</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.22</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.23</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.24</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.25</span> - Como adiestrar a tu perro a través del juego</li>
					<li itemprop="courseMode" content="online"><span>Clase No.26</span> - Como adiestrar a tu perro a través del juego</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>04. Como controlar tu perro posesivo por la comida - <span>6 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Como controlar tu perro posesivo y agresivo por la comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Como controlar tu perro posesivo y agresivo por la comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Como controlar tu perro posesivo y agresivo por la comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Como controlar tu perro posesivo y agresivo por la comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Como controlar tu perro posesivo y agresivo por la comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Como controlar tu perro posesivo y agresivo por la comida</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>05. Como enseñarle a tu perro a usar Bozal - <span>8 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Como enseñarle a tu perro a usar bozal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Como enseñarle a tu perro a usar bozal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Como enseñarle a tu perro a usar bozal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Como enseñarle a tu perro a usar bozal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Como enseñarle a tu perro a usar bozal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Como enseñarle a tu perro a usar bozal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Como enseñarle a tu perro a usar bozal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Como enseñarle a tu perro a usar bozal</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>06. Ansiedad por separación en perros - <span>36 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.14</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.15</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.16</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.17</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.18</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.19</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.20</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.21</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.22</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.23</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.24</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.25</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.26</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.27</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.28</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.29</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.30</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.31</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.32</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.33</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.34</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.35</span> - Ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.36</span> - Ansiedad por separación</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>07. Como Controlar los ladridos de tu Perro - <span>33 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Introducción</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Emociones y detonantes</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Conductas Autoreforzantes</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Ladrido por frustración</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Ladrido Territorial</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Que son los ladridos?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - ladrido de ansiedad por separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Control del ladrido por frustración</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Ladrar y Callar</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Avanzando en el ladrar y callar</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Ladrar y callar sin la correa puesta.</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Timing y Cambio de Contextos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Causas por las que ladra un perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.14</span> - Estimulación Física</li>
					<li itemprop="courseMode" content="online"><span>Clase No.15</span> - Estimulación Física y Control del impulso</li>
					<li itemprop="courseMode" content="online"><span>Clase No.16</span> - Estimulación Física</li>
					<li itemprop="courseMode" content="online"><span>Clase No.17</span> - Estimulación Mental</li>
					<li itemprop="courseMode" content="online"><span>Clase No.18</span> - Ladrido Por Ansiedad por Separación</li>
					<li itemprop="courseMode" content="online"><span>Clase No.19</span> - Ladrido por frustración</li>
					<li itemprop="courseMode" content="online"><span>Clase No.20</span> - Ladrido por Territorio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.21</span> - Ladrido por territorio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.22</span> - Perros ladradores para Vigilar</li>
					<li itemprop="courseMode" content="online"><span>Clase No.23</span> - Ladrido por Miedo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.24</span> - Control del ladrido por miedo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.25</span> - Ladridos por alegría</li>
					<li itemprop="courseMode" content="online"><span>Clase No.26</span> - Aullidos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.27</span> - Ladrido por soledad</li>
					<li itemprop="courseMode" content="online"><span>Clase No.28</span> - Estimulación mental</li>
					<li itemprop="courseMode" content="online"><span>Clase No.29</span> - Estimulación Mental</li>
					<li itemprop="courseMode" content="online"><span>Clase No.30</span> - Estimulación Mental</li>
					<li itemprop="courseMode" content="online"><span>Clase No.31</span> - La importancia de la raza, la genética y el ambiente.</li>
					<li itemprop="courseMode" content="online"><span>Clase No.32</span> - Tecnología para el control del ladrido.</li>
					<li itemprop="courseMode" content="online"><span>Clase No.33</span> - Conclusiones</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>08. Como evitar que tu cachorro te muerda - <span>6 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Introducción</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Errores mas comunes</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Canalizar su instinto</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Inhibir y redirigir</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - la importancia de dejarle ser perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Razas potentes y/o de carácter fuerte</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>09. HERRAMIENTAS EN EL ADIESTRAMIENTO - <span>19 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Introducción a las herramientas en el adiestramiento canino</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Una herramienta para cada perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Aprende sobre los collares de ahogo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Conoce las precauciones con el collar de ahogo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Cómo se emplean los collares de pinchos - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Cómo se emplean los collares de pinchos - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Conoce el uso adecuado de collares de pinchos - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Conoce el uso adecuado de collares de pinchos - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Conoce el uso adecuado de collares de pinchos - Parte 3</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Aprende sobre el uso de los collares de planos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Collares eléctricos en el adiestramiento canino</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Pecheras antiarrastre para la educación de tu perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - ¿En qué perros usar pechera antiarrastre?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.14</span> - Aprende sobre las pecheras tradicionales</li>
					<li itemprop="courseMode" content="online"><span>Clase No.15</span> - Cómo usar juguetes para el adiestramiento de perros</li>
					<li itemprop="courseMode" content="online"><span>Clase No.16</span> - Juguetes interactivos para la educación canina - Parte 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.17</span> - Juguetes interactivos para la educación canina - Parte 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.18</span> - Juguetes interactivos para la educación canina - Parte 3</li>
					<li itemprop="courseMode" content="online"><span>Clase No.19</span> - Conclusiones sobre las herramientas en el adiestramiento canino</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>10. PRINCIPIO DE PREMACK - <span>3 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Principio de Premack</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Cuando aplicar Premack</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Otros ejemplos del principio de  Premack</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>11. Enseñanza del comando "DEJA" - <span>13 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Introducción</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Inicio con comida</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Aumentado el criterio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Cambiando el criterio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Mas cambios de criterio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Enseñando redirección y atención</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Saber cuándo avanzar</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Cuando colocar el comando verbal 1</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Cuando colocar el comando verbal 2</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Variación del ejercicio con ayudante</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Permitir que el perro sea autónomo</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Un repaso antes de avanzar</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Distractores de alto valor</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>12. Primeros auxilios caninos - <span>5 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Primeros auxilios caninos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Primeros auxilios caninos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Primeros auxilios caninos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Primeros auxilios caninos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Primeros auxilios caninos</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>13. Obediencia avanzada - <span>13 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Que es una obediencia avanzada</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Requisitos base para una obediencia avanzada</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Aclarando conceptos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Control de los estímulos motivadores</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Nivel de obediencia en condiciones controladas y con distractores</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Limitaciones para la obediencia avanzada</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Iniciando el Caminar al lado avanzado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Acortando la correa en el caminar al lado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Generalización</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Soltando la correa</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - Generalización Cambio de Ambientes</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Caminar a diferentes ritmos</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Conclusiones</li>	
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>14. Que hacer si tu perro ladra en exceso - <span>2 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Que hacer si tu perro ladra en exceso</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Que hacer si tu perro ladra en exceso</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>15. La relación entre perros y niños - <span>2 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - La relación entre perros y niños</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - La relación entre perros y niños</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>16. La reactividad canina y cómo controlarla - <span>5 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - La reactividad canina</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - La reactividad canina</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Reactividad Vs Agresividad</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Factores que afectan la reactividad</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Reactividad Canina Asesoramiento presencial</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>17. El "PARADO" - <span>5 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 
					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - El parado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - El parado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - El parado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - El parado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - El parado</li>
				</ul>
			  </div>

			  <div>
				<h3>
				  <button>18. PREGUNTAS Y RESPUESTAS MAS COMUNES - <span>23 Clases</span></button>
				</h3>
				<ul itemprop="hasCourseInstance" itemscope itemtype="https://schema.org/CourseInstance"> 

					<li class="noitem">
						<p>23 clases exclusivas con respuesta a las preguntas más frecuentes de nuestros alumnos, en este módulo vamos a estar actualizando y subiendo clases especiales cada vez que una consulta sea repetida por varios estudiantes!</p>								
						<p><b>EXTRA: video especial sobre cómo solicitar tu certificado al terminar el curso</b></p>
					</li>

					<li itemprop="courseMode" content="online"><span>Clase No.1</span> - Preguntas frecuentes Introducción</li>
					<li itemprop="courseMode" content="online"><span>Clase No.2</span> - Cuantas Veces al día debo entrenar mi perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.3</span> - Puedo reemplazar el clicker por mi voz ?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.4</span> - Que tipo de premios debo usar ?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.5</span> - Mi perro tiene problemas de conducta</li>
					<li itemprop="courseMode" content="online"><span>Clase No.6</span> - Cuando dejo de premiar mi perro ?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.7</span> - Cuando puedo avanzar en mi ejercicio ?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.8</span> - Cuanto tiempo puedo adiestrar mi perro?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.9</span> - Cuanto tiempo se demora mi perro en aprender los ejercicios</li>
					<li itemprop="courseMode" content="online"><span>Clase No.10</span> - Puedo entrenar varios perros a la vez</li>
					<li itemprop="courseMode" content="online"><span>Clase No.11</span> - A que edad puedo empezar a entrenar mi perro</li>
					<li itemprop="courseMode" content="online"><span>Clase No.12</span> - Cuantas veces debo repetir un ejercicio</li>
					<li itemprop="courseMode" content="online"><span>Clase No.13</span> - Cuantos días debo practicar por semana</li>
					<li itemprop="courseMode" content="online"><span>Clase No.14</span> - Mi perro no recibe los premios que hago</li>
					<li itemprop="courseMode" content="online"><span>Clase No.15</span> - Que hago si mi perro no quiere jugar</li>
					<li itemprop="courseMode" content="online"><span>Clase No.16</span> - Puedo practicar varios ejercicios en una sola clase</li>
					<li itemprop="courseMode" content="online"><span>Clase No.17</span> - Puedo entrenar mi perro sin correa ?</li>
					<li itemprop="courseMode" content="online"><span>Clase No.18</span> - Como evitar que mi cachorro me muerda</li>
					<li itemprop="courseMode" content="online"><span>Clase No.19</span> - Como evitar que mi cachorro me muerda</li>
					<li itemprop="courseMode" content="online"><span>Clase No.20</span> - Como evitar que mi cachorro me muerda</li>
					<li itemprop="courseMode" content="online"><span>Clase No.21</span> - Problemas con el echado</li>
					<li itemprop="courseMode" content="online"><span>Clase No.22</span> - Cuando colocar la orden Verbal</li>
					<li itemprop="courseMode" content="online"><span>Clase No.23</span> - Puede mi perro tener varios profesores</li>
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
				<meta itemprop="jobTitle" content="Premios a nivel mundial, + de 20 años de experiencia">
				<div>
					<div></div>
					<div>
						<h3>Con <b itemprop="name">Alvaro Osorio</b></h3>
						<div>
							<h4 itemprop="jobTitle">Premios a nivel mundial</h4>
							<h4 itemprop="jobTitle">+ de 20 años de experiencia</h4>
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
							<u>Alvaro Osorio</u> es uno de los expertos <b>más importantes e influyentes</b> en toda Latinoamérica en entrenamiento para perros con múltiples certificaciones y premios a nivel mundial. <b>Fundador de la academia canina Diestros</b>, desde la cual ha podido cambiar la relación de miles personas con su perro.
						</p>
						<p>
							Su exitosa carrera se debe principalmente a los <b>métodos modernos de adiestramiento que él mismo ha desarrollado</b>, basándose en la psicología y la etología canina. Esto le ha permitido crear el curso Educanino, con el objetivo de enseñarte cómo brindar una educación de primer nivel a tu perro.
						</p>
						
						<div>
							<p>
								Adiestra a tu perro con Alvaro Osorio sin tener que pagar costosas matrículas, mensualidades e invirtiendo muy poco tiempo a la semana.
							</p>
						</div>				
					</div>
				</div>
			</div>
		</section>

		<section id="muestras-videos" class="bgYellow" aria-labelledby="muestras-videos-heading">

			<div class="section-heading text-center">
				<h2 id="muestras-videos-heading">Píldoras informativas con Alvaro Osorio</h2>
				<p>
					<b class="blockMobile">Esto es solo una muestra</b> de todo lo que aprenderás dentro de <b>Educanino</b> ¡Inscribete Ahora!
				</p>
			</div>

			<?php include_once ($base . "inc/landings/muestras-videos.php"); ?>

		</section>
		
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
						<span>Al finalizar el curso, tendrás un <b>certificado de conclusión digital</b>, el cual podrás descargar e imprimir.</span>
						<span>Estamos seguros que cuando lo hagas sentirás la satisfacción de saber que tienes todos los conocimientos necesarios para <b>adiestrar a tu perro</b> y <b>crear tu propio negocio</b> en esta bonita actividad.</span>
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
	  		
		<section id="testimonios" class="bgYellow bg-pattern" aria-labelledby="testimonios-heading">

			<div class="section-heading text-center">
				<h2 id="testimonios-heading">!Más opiniones de alumnos!</h2>
			</div>

			<div class="container">

				<div id="owl-reviews">

					<?php

                    $carouselTestimoniosItems = [
                        [
                            "nombre" => "Mirna Aguilar",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Siempre me molestaba escuchar a mi perro ladrando cada vez que salía de casa. Me preocupaba que molestara a los vecinos y pensaba que algo estaba mal con mi mascota. Decidí comprar la capacitación Online de Alvaro Osorio y aprendí técnicas para evitar que mi perro ladre cuando no estoy en casa. Ahora puedo salir sin preocuparme. ¡Educanino Te cambiará la vida!",
                            "nombre_imagen" => "mirna-aguilar.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Javier Carvajal",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Quiero agradecer a Alvaro Osorio por el gran contenido que aporta. Nuestros perros ahora obedecen las órdenes básicas como sentarse, echarse, quedarse quieto o atender al llamado. Eran muy inquietos, traviesos y desobedientes. Gracias a dios un día navegando en Internet encontré este curso y decidí probarlo. Superó ampliamente mis expectativas, gracias Educanino.",
                            "nombre_imagen" => "javier-carvajal.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Martha Gómez",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Tengo un hermoso Labrador de nombre Dino. Es una raza alegre y con mucha energía, lo que lo hace difícil manejar en algunas ocasiones. Se me había vuelto imposible dar un paseo con él. Una amiga me recomendó el curso y gracias a Educanino pude aprender cómo entrenar correctamente a Dino y corregir su desobediencia. Ahora Dino es un perro equilibrado.",
                            "nombre_imagen" => "martha-gomez.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Luis Hernandez",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Quiero decirles que mi perro era muy maleducado con las visitas. Se emocionaba demasiado cuando venía gente a casa y se la pasaba molestando. La verdad que con Educanino fui incrédulo de poder educarlo de manera online, pero debo decir que con la práctica adecuada se ven los resultados. Ahora mi perro obedece y es fácilmente controlable. Bendiciones Alvaro!!!",
                            "nombre_imagen" => "luis-hernandez.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Laura Cepeda",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Mi perrita Yaki es muy tranquila y juguetona, pero tenía problemas para retener su orina. Se orinaba en el sofá, en la alfombra, en el carro, y yo ya estaba cansada de todo esto. Decidí capacitarme con Educanino y apliqué la técnica sugerida por Alvaro Osorio y finalmente logré educar a mi perrita para que orinara en el lugar correcto, en verdad muchas gracias Alvaro!!!",
                            "nombre_imagen" => "laura-cepeda.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Stella Torres",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Me encanta la flexibilidad que tiene Educanino. Siempre he querido aprender a mejorar la conducta de mi perrito pero mi disponibilidad horaria no me lo permitía. Con Educanino pude hacerlo sin adherir a ningún horario ni día específico. Me educo a mi propio ritmo de una manera muy efectiva. Muchas gracias Alvaro Osorio por este increíble curso.",
                            "nombre_imagen" => "stella-torres.jpg",
                            "cantidad_estrellas" => 5
                        ],
                        [
                            "nombre" => "Karen Palacios",
                            "bajada" => "Dog Lover",
                            "descripcion" => "Lo que más me encanta de Educanino es el grupo privado de alumnos donde compartimos nuestra experiencia y dudas. Se ha formado una comunidad muy hermosa de la que se aprende mucho además de pasar un lindo rato. Nunca había hecho cursos online, pero ha sido una grata experiencia para mi. Gracias Alvaro Osorio y todo el equipo de Educanino!!!",
                            "nombre_imagen" => "karen-palacios.jpg",
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

if( !$testing && !$testPar )
	ob_end_flush(); 

?>