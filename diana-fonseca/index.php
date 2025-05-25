<?php 

header("Cache-Control: no-cache");

include "../inc/functions.php";


//$testing = true;



$datePublished = "2021-06-24";

$dateModified = "2021-06-30";

$imgShare = "share.jpg";
$currency = getCurrency();


$des = "✓ Wow mira quien es Diana Fonseca y todos los programas y cursos hechos con amor para tu mascosta - Petz School.";

$tit = "Cursos de Diana Fonseca - Petz School";

/* esto es para si pasamos parametro test no cargamos pixel */
$testPar = false;

if( isset( $_GET["test"] ) ){
	$testPar = true;
}

if( !$testing && !$testPar ){
	ob_start('comprimir_pagina'); 
}

?><!DOCTYPE html>

<html lang="es-ES">

	<head>

		<meta charset="utf-8">

		<!--[if IE]>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<![endif]-->

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		

		<title><?= $tit; ?></title>

		

		<meta name="description" content="<?= $des ?>" />

		

		<meta name="author" content="Petz School" />

		<meta name="copyright" content="petzschool.com" />

		<meta name="date" content=<?= $datePublished ?>>

		<meta name="revised" content=<?= $dateModified ?>>		

		

		<link rel="icon" href="/img/favicon32.png" sizes="32x32" />

		<link rel="icon" href="/img/favicon192.png" sizes="192x192" />

		<link rel="apple-touch-icon-precomposed" href="/img/favicon180.png" />

		<meta name="msapplication-TileImage" content="/img/favicon270.png" />		

		

		<meta itemprop="name" content="<?= $tit; ?>">

		<meta itemprop="description" content="<?= $des ?>">

		<meta itemprop="image" content="https://petzschool.com/img/<?= $imgShare; ?>">		

		

		<meta property="og:type" content="article" />

		<meta property="og:title" content="<?= $tit; ?>" />

		<meta property="og:url" content="<?= CURRENTURL; ?>" />

		<meta property="og:site_name" content="petzschool.com" />

		<meta property="og:description" content="<?= $des ?>" />

		<meta property="article:published_time" content=<?= $datePublished ?>>

		<meta property="article:modified_time" content=<?= $dateModified ?>>			

		<meta property="og:image" content="https://petzschool.com/img/<?= $imgShare; ?>" />

		

		<meta name="twitter:card" content="summary">

		<meta name="twitter:title" content="<?= $tit; ?>">

		<meta name="twitter:description" content="<?= $des ?>">

		<meta name="twitter:image" content="https://petzschool.com/img/<?= $imgShare; ?>">		

		<!--[if lt IE 9]>

		<script src="/js/respond.js"></script>

		<![endif]-->

		

		<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">

		<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<link href="/fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" href="/css/preload.css" media="all" />

		

		<script src="/js/preload.js"></script>

	</head>

   <body id="page-top">

   

      <div id="preloader">

         <div class="spinner">

            <div class="bounce1"></div>

         </div>

      </div>

	  

		<?php include_once("../inc/nav.php"); ?>
		
		<section id="adoption" class="pages bg-pattern quienLograr">

			<div class="text-center">
				<h1>
					Diana Fonseca
				</h1>
			</div>

			<div class="container margin1">

				
				<div class="row">
				
					<div class="col-md-5 imgDiana">
					  <img src="/img/landings/pasteleria-canina-y-felina/diana-fonseca-pasteleria-canina-y-felina.jpg" class="center-block img-rounded  lazyload" alt="Diana Fonseca de Pasteleria Canina y Felina" title="Diana Fonseca de Pasteleria Canina y Felina" width="450" height="450" style="">
					</div>
					
					<div class="col-md-7 res-margin textint">

						<div class="pet-adopt-info">
							<h6>
								Bio nutricionista
							</h6>
							<h6>
								Experta en nutrición
							</h6>
						</div>	
					
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
      
		<section id="dianaTitPro">
			<div class="text-center">
				<h2>
					Mis cursos
				</h2>
			</div>
		</section>	

      <section id="adoption" class="pages">


         <div class="container">

			

            <div class="row margin1">


			   

               <div class="col-md-12 margin1">

                  <div id="lightbox">
				  
                     <div class="col-lg-6 col-sm-6 col-md-6 dog cat">                        <div class="isotope-item">						                           <div class="adoption-thumb oferta50">								<div class="ribbons50off">									<img src="/img/ribbons50off.png" />								</div>						   							  <a target="_blank" href="/diana-fonseca/pasteleria-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>" title="Pasteleria felina y canina con Diana Fonseca">								<img class="img-responsive img-circle" src="/img/pasteleria-felina-y-canina.jpg" alt="Pasteleria felina y canina con Diana Fonseca" title="Pasteleria felina y canina con Diana Fonseca">							  </a>								                                <div class="adopt-header">							                                  <h3>									<a target="_blank" href="/diana-fonseca/pasteleria-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>">										Pasteleria felina y canina 									</a>							   	</h3>																	<div class="rating-main-box-ratings-qty">									<div class="rating rating--title colorText">										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<span>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>											</svg>										</span>									</div>																		<div class="blog-tags">										<a>4.7</a>									</div>																	</div>																 								<div class="post-info">									<p><i class="fa fa-clock-o"></i>45 Lecciones</p>									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>									<p><i class="fa fa-comment"></i>321 Evaluaciones</p>								</div>																<div class="plan-cost">									<span class="plan-price"><?= $currency ?> <?= getPrecio(35) ?></span>									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(70) ?></span>								</div>																                                <p>									Con el programa pastelería canina y felina selecciona y utiliza ingredientes que tienes en casa para <b>preparar nutritivos y saludables snacks</b> para que tu mascota te ame.								</p>								                                 <a target="_blank" class="btn" href="/diana-fonseca/pasteleria-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>">									Ver más								</a>								                              </div>							                             </div>						                           </div>                     </div>                     <div class="col-lg-6 col-sm-6 col-md-6 dog cat">                        <div class="isotope-item">						                           <div class="adoption-thumb oferta50">								<div class="ribbons50off">									<img src="/img/ribbons50off.png" />								</div>						   							  <a href="/diana-fonseca/mascotas-sanas/<?= ( $testPar ? '?test' : '') ?>" title="Mascotas Sanas con Diana Fonseca">								<img class="img-responsive img-circle" src="/img/mascotas-sanas.jpg" alt="Mascotas Sanas con Diana Fonseca" title="Mascotas Sanas con Diana Fonseca">							  </a>								                                <div class="adopt-header">							                                  <h3>									<a href="/diana-fonseca/mascotas-sanas/<?= ( $testPar ? '?test' : '') ?>">										Mascotas Sanas 									</a>							   	</h3>																	<div class="rating-main-box-ratings-qty">									<div class="rating rating--title colorText">										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>										</svg>										<span>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>											</svg>										</span>									</div>																		<div class="blog-tags">										<a>4.7</a>									</div>																	</div>																 								<div class="post-info">									<p><i class="fa fa-clock-o"></i>46 Lecciones</p>									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>									<p><i class="fa fa-comment"></i>57 Evaluaciones</p>								</div>																<div class="plan-cost">									<span class="plan-price"><?= $currency ?> <?= getPrecio(35) ?></span>									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(70) ?></span>								</div>																                                <p>									Con el programa MASCOTAS SANAS aprenderás <b>las bases de la nutrición natural</b> casera de perros y gatos. Para que puedas disfrutar de su compañía por mucho tiempo.								</p>								                                 <a class="btn" href="/diana-fonseca/mascotas-sanas/<?= ( $testPar ? '?test' : '') ?>">									Ver más								</a>								                              </div>							                             </div>						                           </div>                     </div>	
                     <div class="col-lg-6 col-sm-6 col-md-6 cat dog">                        <div class="isotope-item">						                          <div class="adoption-thumb oferta50">								<div class="ribbons50off">									<img src="/img/ribbons50off.png" />								</div>						   								<a href="/diana-fonseca/reposteria-de-halloween/<?= ( $testPar ? '?test' : '') ?>" title="Reposteria de Halloween con Diana Fonseca">									<img class="img-responsive img-circle" src="/img/reposteria-de-halloween-para-mascotas-con-diana-fonseca.jpg" alt="Reposteria de Halloween con Diana Fonseca" title="Reposteria de Halloween con Diana Fonseca">								</a>																<div class="adopt-header">									<h3>										<a href="/diana-fonseca/reposteria-de-halloween/<?= ( $testPar ? '?test' : '') ?>" >											Reposteria de Halloween										</a>									</h3>																			<div class="rating-main-box-ratings-qty">										<div class="rating rating--title colorText">											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<span>												<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">													<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>												</svg>												<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">													<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>												</svg>											</span>										</div>																				<div class="blog-tags">											<a>4.7</a>										</div>																			</div>																			<div class="post-info">										<p><i class="fa fa-clock-o"></i>9 Lecciones</p>										<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>										<p><i class="fa fa-comment"></i>21 Evaluacion</p>									</div>																		<div class="plan-cost">									<span class="plan-price"><?= $currency ?> <?= getPrecio(25) ?></span>									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(50) ?></span>									</div>									<p>										Un taller novedoso con varias <b>recetas para Halloween de pasteleria</b> artesanal utilizando ingredietes aptos para el consumo de nuestros peludos.									</p>																		<a class="btn" href="/diana-fonseca/reposteria-de-halloween/<?= ( $testPar ? '?test' : '') ?>" >										Ver más									</a>                              </div>                           </div>                        </div>                     </div>                     <div class="col-lg-6 col-sm-6 col-md-6 cat dog">                        <div class="isotope-item">						                           <div class="adoption-thumb oferta50">						   														   								<div class="ribbons50off">																		<img src="/img/ribbons50off.png" />																</div>						   								<a href="/diana-fonseca/petlados/<?= ( $testPar ? '?test' : '') ?>" title="PETlados con Diana Fonseca">									<img class="img-responsive img-circle" src="/img/petlados-con-diana-fonseca.jpg" alt="Helados para perros y gatos" title="Helados para perros y gatos">								</a>																<div class="adopt-header">									<h3>										<a href="/diana-fonseca/petlados/<?= ( $testPar ? '?test' : '') ?>" title="Heladeria canina y felina" >											PETlados										</a>									</h3>																			<div class="rating-main-box-ratings-qty">										<div class="rating rating--title colorText">											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">												<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>											</svg>											<span>												<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">													<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>												</svg>												<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">													<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>												</svg>											</span>										</div>																				<div class="blog-tags">											<a>4.6</a>										</div>																			</div>																			<div class="post-info">										<p><i class="fa fa-clock-o"></i>36 Lecciones</p>										<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>										<p><i class="fa fa-comment"></i>59 Evaluaciones</p>									</div>																	<div class="plan-cost">																		<span class="plan-price"><?= $currency ?> <?= getPrecio(40) ?></span>									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(80) ?></span>								</div>										<p>										Si quieres empezar <b>el negocio de los helados artesanales</b> para mascotas te brindaremos los conocimientos necesarios para empezar tu emprendimiento.									</p>																		<a class="btn" href="/diana-fonseca/petlados/<?= ( $testPar ? '?test' : '') ?>" title="Heladeria canina y felina" >										Ver más									</a>                              </div>                           </div>                        </div>                     </div>	
					<div class="col-lg-6 col-sm-6 col-md-6 dog cat">                        <div class="isotope-item">                           <div class="adoption-thumb oferta50">								<div class="ribbons50off">									<img src="/img/ribbons50off.png" />								</div>						   							  <a href="https://go.hotmart.com/H85889948W" target="_blank" title="Curso de pasteleria-canina-y-felina de Diana Fonseca">								<img class="img-responsive img-circle" src="/img/pasteleria-canina-y-felina.jpg" alt="Curso de pasteleria-canina-y-felina de Diana Fonseca" title="Curso de pasteleria-canina-y-felina de Diana Fonseca">							  </a>								                                <div class="adopt-header">							                                  <h3>									<a href="https://go.hotmart.com/H85889948W" target="_blank">										pasteleria-canina-y-felina									</a>							   	</h3>	 																<div class="rating-main-box-ratings-qty">									<div class="rating rating--title colorText"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg>									<span>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg>									</span>									</div>																		<div class="blog-tags">										<a>5</a>									</div>																	</div>																 								<div class="post-info">									<p><i class="fa fa-clock-o"></i>32 Lecciones</p>									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>									<p><i class="fa fa-comment"></i>40 Evaluaciones</p>								</div>																<div class="plan-cost">									<span class="plan-price"><?= $currency ?> <?= getPrecio(25) ?></span>									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(50) ?></span>								</div>																	                                <p>									<b>50% OFF mandando WhatsApp AHORA!</b> Aprenderás todos los secretos de la <b>deshidratación casera de alimentos</b>. Tendrás la posibilidad de ofrecer productos diferentes, naturales y saludables a tu peludo o a tus clientes. 								</p>								                                 <a class="btn" href="https://go.hotmart.com/H85889948W" target="_blank">									Ver más								</a>								                              </div>							                             </div>                        </div>                     </div>					 					              <div class="col-lg-6 col-sm-6 col-md-6 dog cat">                        <div class="isotope-item">                           <div class="adoption-thumb oferta50">								<div class="ribbons50off">									<img src="/img/ribbons50off.png" />								</div>						   							  <a href="/diana-fonseca/petlicias-navidenas/" target="_blank" title="Curso de Petlicias navideñas">								<img class="img-responsive img-circle" src="/img/petlicias-navidenas-con-diana-fonseca.jpg" alt="Curso de Petlicias navideñas de Diana Fonseca" title="Curso de Petlicias navideñas de Diana Fonseca">							  </a>								                                <div class="adopt-header">							                                  <h3>									<a href="/diana-fonseca/petlicias-navidenas/" target="_blank">										PETlicias Navideñas									</a>							   	</h3>	 																<div class="rating-main-box-ratings-qty">									<div class="rating rating--title colorText"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg>									<span>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg>									</span>									</div>																		<div class="blog-tags">										<a>5</a>									</div>																	</div>																 								<div class="post-info">									<p><i class="fa fa-clock-o"></i>28 Lecciones</p>									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>									<p><i class="fa fa-comment"></i>14 Evaluaciones</p>								</div>																<div class="plan-cost">									<span class="plan-price"><?= $currency ?> <?= getPrecio(50) ?></span>									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(100) ?></span>								</div>																	                                <p>									Aprenderás a preparar diferentes productos entre los que se encuentran <b>3 cenas navideñas</b> como plato principal, 2. Bebidas y varios <b>postres típicos</b> de la época dicembrina. 								</p>								                                 <a class="btn" href="/diana-fonseca/petlicias-navidenas/" target="_blank">									Ver más								</a>								                              </div>							                             </div>                        </div>                     </div>    				<div class="col-lg-6 col-sm-6 col-md-6 dog cat">                        <div class="isotope-item">                           <div class="adoption-thumb oferta50">								<div class="ribbons50off">									<img src="/img/ribbons50off.png" />								</div>						   							  <a href="https://go.hotmart.com/H80406773F?ap=196f" target="_blank" title="Curso de Pastelería inclusiva, perros y gatos enfermos de Diana Fonseca">								<img class="img-responsive img-circle" src="/img/pasteleria-inclusiva-diana-fonseca.jpg" alt="Curso de Pastelería inclusiva, perros y gatos enfermos de Diana Fonseca" title="Curso de Pastelería inclusiva, perros y gatos enfermos de Diana Fonseca">							  </a>								                                <div class="adopt-header">							                                  <h3>									<a href="https://go.hotmart.com/H80406773F?ap=196f" target="_blank">										Pastelería inclusiva, perros y gatos enfermos									</a>							   	</h3>	 																<div class="rating-main-box-ratings-qty">									<div class="rating rating--title colorText"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg>									<span>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg>									</span>									</div>																		<div class="blog-tags">										<a>5</a>									</div>																	</div>																 								<div class="post-info">									<p><i class="fa fa-clock-o"></i>12 Lecciones</p>									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>									<p><i class="fa fa-comment"></i>18 Evaluaciones</p>								</div>																<div class="plan-cost">									<span class="plan-price"><?= $currency ?> <?= getPrecio(30) ?></span>									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(60) ?></span>								</div>																	                                <p>									Aprenderás a elaborar recetas de Pastelería canina y felina adaptadas a 11 de las <b>enfermedades</b> más frecuentes en <b>perros y gatos</b>. 								</p>								                                 <a class="btn" href="https://go.hotmart.com/H80406773F?ap=196f" target="_blank">									Ver más								</a>								                              </div>							                             </div>                        </div>                     </div>



				 
					 
                  </div>

               </div>

            </div>

         </div>

      </section>
	   
	   <?php include_once ("../inc/newsletter.php"); ?>
		<?php include_once("../inc/footer.php"); ?>

		

		<link href="https://fonts.googleapis.com/css?family=Lato:400,800" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">



		<link href="/css/style.css" rel="stylesheet">

		<link rel="stylesheet" href="/css/plugins.css">

		<link href="/styles/maincolors.css" rel="stylesheet">



		<link rel="alternate stylesheet" href="/styles/bluecollarpet.css" title="bluecollarpet" media="all" />

		<link rel="alternate stylesheet" href="/styles/delicatepet.css" title="delicatepet" media="all" />

		<link rel="alternate stylesheet" href="/styles/maincolors.css" title="maincolors" media="all" />

		<link rel="alternate stylesheet" href="/styles/tropicalpet.css" title="tropicalpet" media="all" />

		<link rel="alternate stylesheet" href="/styles/sweetpet.css" title="sweetpet" media="all" />

		<link rel="stylesheet" href="/css/jquery.fancybox.css" media='all' />		

		

				

		<link href="/css/custom.css" rel="stylesheet">		

		<style>

		#adoption.quienLograr{
			background-image: url(../img/cartoonbones1.png), url(../img/cartoonbones2.png);
			background-repeat: no-repeat, no-repeat;
			background-position: left top, right top;
			background-color: #ffefd5;
			padding: 140px 0 62px;
		}


		#adoption.quienLograr .col-md-5.imgDiana img{
		width: 100%;
			height: auto;
		}

		#adoption.quienLograr h1,
		#dianaTitPro h2{
			color: #108896;
			font-family: 'Baloo Thambi',sans-serif;
			font-size: 60px;
			line-height: 1em;
			letter-spacing: -.2px;
			margin-bottom: 35px;
			margin-top: 0;
			position: relative;
		}

		#dianaTitPro{
			padding: 50px 0px 0px 0px;
		}

		#adoption{
			padding: 20px 0px 40px;
		}	

		#dianaTitPro h2{
			font-size: 52px;
			text-transform: initial;
			margin-bottom: 0;
		}

		#adoption.quienLograr .col-md-7.textint{
			margin: 14px 0 0 0;
		}



		@media (max-width: 992px){
			
			#adoption.quienLograr {
				padding: 104px 0 34px;
			}

			#adoption.quienLograr .col-md-7.textint {
				margin: 30px 0 0 0;
				width: 100%;
				float: none;
			}

			#adoption.quienLograr .col-md-5 {
				width: 100%;
				float: none;
			}

			#adoption.quienLograr .container {
				max-width: 600px;
				margin: 0 auto;
			}
			
			#adoption.quienLograr .container {
				width: 100%;
			}	

		}

		@media (max-width: 480px){
			#adoption.quienLograr h1{
				font-size: 42px !important;
				text-transform: initial;
				line-height: unset;
			}

			#dianaTitPro h2 {
				font-size: 38px !important;
				text-transform: initial;
				margin-bottom: 30px;
			}

			#adoption .adoption-thumb h3 {
				font-size: 29px;
			}

			p{
				line-height: 28px !important;
			}

			.pet-adopt-info h6 {
				display: block !important;
				text-align: center;
			}

		}


		</style>

		<script src="/js/jquery.min.js"></script>

		

		<script src="/js/fancybox2/source/jquery.fancybox.pack.js"></script>

		<script src="/js/bootstrap.min.js"></script>

		<script src="/js/main.js"></script>

		<script src="/js/plugins.js"></script>

		<script src="/js/prefixfree.js"></script>

		<script src="/js/jquery-ui.js" ></script>
		<script src='/js/custom.js'></script>



		<?php if( !$testing && !$testPar ){ ?>

		<script src="/js/preventkeys.js"></script>	

		<?php } ?>



		<?php if( !$testing && !$testPar ){ ?>

		<script src='/js/analitica-web.js'></script>

		<?php }?>

		

		<script type="application/ld+json">

			{

				"@type":"BlogPosting",

				"headline":<?= '"'.$tit.'"' ?>,

				"datePublished":<?= '"'.$datePublished.'"' ?>,

				"dateModified":<?= '"'.$dateModified.'"' ?>,

				"publisher":{

					"@type":"Organization",

					"name":"Petz School",

					"logo":{

						"@type":"ImageObject",

						"url":"https:\/\/petzschool.com\/img\/<?= $imgShare; ?>"

					}

				},

				"mainEntityOfPage":{

				"@type":"WebPage",

				"@id":"https:\/\/petzschool.com"

				},

				"author":{

					"@type":"Person",

					"name":"Petz School"

				},

				"description":<?= '"'.$des.'"' ?>,

				"image":{

					"@type":"ImageObject",

					"url":"https:\/\/petzschool.com\/img\/<?= $imgShare; ?>",

					"width":600,

					"height":600

				}

			}

		</script>

   </body>



</html><?php 



if( !$testing && !$testPar )
	ob_end_flush();



?>