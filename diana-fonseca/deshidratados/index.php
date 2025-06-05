<?php 

header("Cache-Control: no-cache");

//base de donde esta la landing con respecto al root para los includes
$base = "../../";
$dirLanding = "deshidratados";
$nombredelcurso = "Deshidratados";
$autor = "Diana Fonseca";
$autorSlug = "diana-fonseca";

include $base. "inc/functions.php";

//precios en dolares... es 65% descuento
$oferta50Precio  	= getPrecio(29.99);
$sinOfertaPrecio 	= getPrecio(85.69);

$bono1 = getPrecio(15);
$bono2 = getPrecio(13);
$bono3 = getPrecio(17);
$bono4 = getPrecio(19);

$bonosTotal = getPrecio(64);

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
$datePublished = "2025-03-15";

// fecha de ultima modificacion
$dateModified = "2025-03-19";

// nombre de imagen para compartir.
$imgShare = "compartir-" . $dirLanding . ".jpg";


// cuantas alumnas felicies hay
$alumnasfelices = 14;

// cuantas muestras hay
$muestras = 12;

// grupos privados
$g_telegram = true;
$g_facebook = true;
$g_whatsaup = false;

// descripcion
$des = "🍎 Crea tu propio negocio de snacks deshidratados y saludables 🐶✨. Elabora productos artesanales, sin conservantes y llenos de sabor. 🚀 ¡Sumate HOY!";
//$des = "Cocina con Amor y emprende con éxito en el mundo de la Deshidratados - Petz School.";

// titulo
$tit = "✓ Promo 65% Off en el Curso de Deshidratados de Diana Fonseca - Petz School";

$videoPrincipalID 	= "1090414660";
$videoMuestraID		= "1090416797";
$videoAdicionalID	= "1090416136";


//OFERTAS SETTINGS, elegir una de las 2, si esta activo uno con "true" los otros 2 tienen que estar en "false"

$oferta50  = false;
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
// https://go.hotmart.com/H85889948W?ap=2145

//con order bumps
$linkProducto = "https://go.hotmart.com/H85889948W?ap=04b4";


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

		<?php include_once ($base . "inc/header-landing.php"); ?>
		
	</head>
    <body id="page-top" class="<?= $dirLanding ?>" >

		<?php include_once ($base . "inc/landings/skipContent.php"); ?>

		<?php 
		if( $hayMenu )
			include_once( $base. "inc/nav.php");
		?>

		<section id="first-scroll" <?php if (!$timer) echo "class='hasMenu'" ?> aria-labelledby="first-scroll-heading" itemscope itemtype="https://schema.org/EducationalOccupationalProgram" style="background-image: url(/img/landings/<?= $dirLanding ?>/bg-hero.jpg); background-size: cover">
			<div class="container back1080">

				<h1 id="first-scroll-heading" itemprop="name">
					<?php $tituloAnterior = "Dominá el Arte de la Deshidratación y Crea Snacks Saludables para Mascotas"; ?>
					Snacks Deshidratados para Mascotas. Nutrición Real, un Negocio con Alma
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
						<p>459</p>
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
					<span>CONVIÉRTETE</span> en un experto en deshidratación de alimentos y potencia la nutrición de las mascotas.
					<span>CREA tu propio negocio</span> de snacks naturales y saludables, ofreciendo productos artesanales, sin conservantes y llenos de sabor. <u itemprop="courseMode" content="online">¡Aprende las mejores técnicas y convierte tu pasión en una oportunidad única!</u>.
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
						<p itemprop="competencyRequired"><b>Aprende a deshidratar frutas, verduras, carnes, galletas, patas, pescuezos y corazones de pollo</b> de forma correcta, ya sea en horno, Airfryer, al sol o con deshidratador casero.</p>
						<p itemprop="competencyRequired"><b>Elaborar colorantes naturales</b> en polvo a partir de verduras para almacenamiento y uso en decoraciones.</p>
						<p itemprop="competencyRequired"><b>Crear sazonadores naturales</b> con cárnicos y verduras deshidratadas para mejorar el sabor y el valor nutricional de los alimentos para mascotas.</p>
						<p itemprop="competencyRequired"><b>Preparar cuero o rollitos de frutas</b> deshidratados para presentaciones innovadoras.</p>
						<p itemprop="competencyRequired"><b>Técnicas de macerado</b> con más de 12 recetas para potenciar el sabor de carnes, aves y pescados antes de deshidratarlos.</p>
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
					<p><i class="fa fa-clock-o"></i>32 lecciones</p>
					<p><i class="fa fa-user"></i><span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por <?= $autor ?></span></span></p>
					<p itemprop="reviewCount"><i class="fa fa-comment"></i>18 Evaluaciones</p>
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
					<li itemprop="courseMode" content="online"><span>Video No 2.</span> – ¿Qué es la deshidratación?</li>
					<li itemprop="courseMode" content="online"><span>Video No 3.</span> – Métodos caseros para deshidratar</li>
					<li itemprop="courseMode" content="online"><span>Video No 4.</span> –   Pasos a seguir para deshidratar, ventajas y desventajas de cada método.</li>
					<li itemprop="courseMode" content="online"><span>Video No 5.</span> – ¿Que frutas verduras y cárnicos podemos deshidratar?</li>
					<li itemprop="courseMode" content="online"><span>Video No 6.</span> – Pre tratamiento de las frutas.</li>
					<li itemprop="courseMode" content="online"><span>Video No 7.</span> – Pre tratamiento de verduras.</li>
					<li itemprop="courseMode" content="online"><span>Video No 8.</span> – Pasos a seguir y recomendaciones para una buena deshidratación.</li>
					<li itemprop="courseMode" content="online"><span>Video No 9.</span> – ¿Cómo deshidratar hierbas?</li>
					<li itemprop="courseMode" content="online"><span>Video No 10.</span> –  ¿Cómo deshidratar cárnicos?</li>
					<li itemprop="courseMode" content="online"><span>Video No 11.</span> – Deshidratación de manzana.</li>
					<li itemprop="courseMode" content="online"><span>Video No 12.</span> – Deshidratación de nectarinas.</li>
					<li itemprop="courseMode" content="online"><span>Video No 13.</span> – Deshidratación de kiwi.</li>
					<li itemprop="courseMode" content="online"><span>Video No 14.</span> – Cuero de mango.</li>
					<li itemprop="courseMode" content="online"><span>Video No 15.</span> – Cuero de moras.</li>
					<li itemprop="courseMode" content="online"><span>Video No 16.</span> – Cuero de papaya.</li>
					<li itemprop="courseMode" content="online"><span>Video No 17.</span> – Deshidratación de zanahoria.</li>
					<li itemprop="courseMode" content="online"><span>Video No 18.</span> – Deshidratación de remolacha.</li>
					<li itemprop="courseMode" content="online"><span>Video No 19.</span> – Deshidratación de col lombarda.</li>
					<li itemprop="courseMode" content="online"><span>Video No 20.</span> – Deshidratación de espinaca.</li>
					<li itemprop="courseMode" content="online"><span>Video No 21.</span> – Deshidratación de batata o camote.</li>
					<li itemprop="courseMode" content="online"><span>Video No 22.</span> – Deshidratación de corazones de pollo.</li>
					<li itemprop="courseMode" content="online"><span>Video No 23.</span> – Deshidratación de carne de res.</li>
					<li itemprop="courseMode" content="online"><span>Video No 24.</span> – Deshidratación de carne de cerdo.</li>
					<li itemprop="courseMode" content="online"><span>Video No 25.</span> – Deshidratación de pollo.</li>
					<li itemprop="courseMode" content="online"><span>Video No 26.</span> – Deshidratación de patas de pollo.</li>
					<li itemprop="courseMode" content="online"><span>Video No 27.</span> – Deshidratación de pescuezos de pollo</li>
					<li itemprop="courseMode" content="online"><span>Video No 28.</span> –  Deshidratación de galletas.</li>
					<li itemprop="courseMode" content="online"><span>Video No 29.</span> – Colorantes naturales.</li>
					<li itemprop="courseMode" content="online"><span>Video No 30.</span> – Sazonador natural.</li>
					<li itemprop="courseMode" content="online"><span>Video No 31.</span> – Bonus: Recetario.</li>
					<li itemprop="courseMode" content="online"><span>Video No 32.</span> – Despedida.</li>
					
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
                    'img' => 'recetario-diana-fonseca-deshidratados.png',
                    'alt' => 'Recetario Diana Fonseca Deshidratados',
                    'precio' => $bono1,
                    'descripcion' => '<b>Recetario incluido</b>. Todas las recetas del curso, siempre a tu alcance sin tomar apuntes.',
                ],
                [
                    'img' => 'almacenamiento-diana-fonseca-deshidratados.png',
                    'alt' => 'Guia sobre Almacenamiento de Deshidratados',
                    'precio' => $bono2,
                    'descripcion' => 'Guia práctica sobre <b>almacenamiento y empaque</b>. Mantené frescos tus deshidratados.',
                ],
                [
                    'img' => 'rentabilidad-diana-fonseca-deshidratados.png',
                    'alt' => 'Rentabilidad al detalle sobre el nefocio de Deshidratados',
                    'precio' => $bono3,
                    'descripcion' => 'Aprendé a poner <b>precios justos y competitivos</b>. Vendé bien y ganá mejor.',
                ],
                [
                    'img' => 'macerados-diana-fonseca-deshidratados.png',
                    'alt' => '12 Recetas de Macerados',
                    'precio' => $bono4,
                    'descripcion' => '<b>12 Recetas de Macerados</b> para Peludos Gourmets. Añade sabor, salud y variedad a su dieta.',
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
            "Más de 30 lecciones en video, formato súper HD.",
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