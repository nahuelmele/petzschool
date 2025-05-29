<?php 

header("Cache-Control: no-cache");

include "inc/functions.php";

//$testing = true;

$datePublished = "2021-06-14";
$dateModified = "2021-06-18";
$imgShare = "share.jpg";


$des = "✓ Petz School. Programas y cursos hechos con amor para tu mascota.";
$tit = "Programas y cursos de Petz School";

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
		
		<link href="/css/bootstrap.css" rel="stylesheet" >
		<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
		<link href="/fonts/flaticons/flaticon.css" rel="stylesheet" >
	
		<link rel="stylesheet" href="/css/preload.css" media="all" />
		
		<script src="/js/preload.js"></script>
	</head>
	
    <body id="page-top">
	
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
         </div>
      </div>
	  
	  <?php include_once("inc/nav.php"); ?>
		
      <div class="slider-container">
	  
         <div class="slider-control left inactive"></div>
		 
         <div class="slider-control right"></div>
		 
         <ul class="slider-pagi"></ul>
		 
         <div class="slider">
		 
		 
            <div class="slide slide-0 active" style="background-image:url('/img/bienvenidos-a-petz-school.jpg')">
			
               <div class="slide__bg"></div>
			   
               <div class="slide__content">
			   
                  <div class="slide__overlay"></div>
				  
                  <div class="slide__text">
				  								
					<h2 class="slide__text-heading">Amamos a las mascotas</h2>

					<div class="hidden-mobile">

						<p class="lead">Bienvenidos a Petz School. Aquí encontrarás programas educativos y didácticos para mimar a tus mascotas.</p>

						<a href="/programas/<?= ( $testPar ? '?test' : '') ?>" class="btn btn-default">
							Todos los programas
						</a>

					</div>

                  </div>
				  
               </div>
			   
            </div>		 
		 
		 
            <div class="slide slide-1" style="background-image:url('/img/slide-mascotas-sanas-de diana-fonseca.jpg')">
			
               <div class="slide__bg"></div>
			   
               <div class="slide__content">
			   
                  <div class="slide__overlay"></div>
				  
                  <div class="slide__text">
				  
					<div class="rating-main-box-ratings-qty">
						<div class="rating rating--title colorText">
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
						
						<div class="blog-tags">
							<a>4.7</a>
						</div>
						
					</div>	
								
					<h2 class="slide__text-heading">Mascotas Sanas</h2>

					<div class="hidden-mobile">

						<p class="lead">Con el programa MASCOTAS SANAS aprenderás las bases de la nutrición natural casera de perros y gatos. Para que puedas disfrutar de su compañía por mucho tiempo.</p>

						<a href="/diana-fonseca/mascotas-sanas/<?= ( $testPar ? '?test' : '') ?>" target="_blank" class="btn btn-default">
							Ver más
						</a>

					</div>

                  </div>
				  
               </div>
			   
            </div>
			
            <div class="slide slide-2" style="background-image:url('/img/slide0.jpg')">
			
               <div class="slide__bg"></div>
			   
               <div class="slide__content">
			   
                  <div class="slide__overlay"></div>
				  
                  <div class="slide__text">
				  
					<div class="rating-main-box-ratings-qty">
						<div class="rating rating--title colorText">
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
						
						<div class="blog-tags">
							<a>4.7</a>
						</div>
						
					</div>	
								
					<h2 class="slide__text-heading">Pasteleria felina y canina</h2>

					<div class="hidden-mobile">

						<p class="lead">Aprende a preparar deliciosos snacks nutritivos y saludables para que tu mascota te ame.</p>

						<a href="/diana-fonseca/pasteleria-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>" target="_blank" class="btn btn-default">
							Ver más
						</a>

					</div>

                  </div>
				  
               </div>
			   
            </div>
			
			
            <div class="slide slide-3" style="background-image:url('/img/slide2.jpg')">
			
               <div class="slide__bg"></div>
			   
               <div class="slide__content">
			   
                  <div class="slide__overlay"></div>
				  
                  <div class="slide__text">
				  
					<div class="rating-main-box-ratings-qty">
						<div class="rating rating--title colorText">
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
						
						<div class="blog-tags">
							<a>4.7</a>
						</div>
						
					</div>	
								
					<h2 class="slide__text-heading">Peluqueria para perros</h2>

					<div class="hidden-mobile">

						<p class="lead">Conviértete en una profesional y trabaja donde quieras con tu propio negocio de peluqueria canina.</p>

						<a href="/fabio-gomez-sepulveda/peluqueria-para-perros/<?= ( $testPar ? '?test' : '') ?>" class="btn btn-default">
							Ver más
						</a>

					</div>

                  </div>
				  
               </div>
			   
            </div>
			
            <div class="slide slide-4" style="background-image:url('/img/slide3.jpg')">
			
               <div class="slide__bg"></div>
			   
               <div class="slide__content">
			   
                  <div class="slide__overlay"></div>
				  
                  <div class="slide__text">
				  
					<div class="rating-main-box-ratings-qty">
						<div class="rating rating--title colorText"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
						</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
						</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
						</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
						</svg>
						<span>
							<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
								<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>
							</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
								<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>
							</svg>
						</span>
						</div>
						
						<div class="blog-tags">
							<a>4.7</a>
						</div>
						
					</div>	
								
					<h2 class="slide__text-heading">Costura canina y felina</h2>

					<div class="hidden-mobile">

						<p class="lead">Convíertete en una experta en confección de prendas para tú mascota y hazla lucir increíble.</p>

						<a href="/willian-quispe-abarca/costura-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>" class="btn btn-default">
							Ver más
						</a>

					</div>

                  </div>
				  
               </div>
			   
            </div>
			
         </div>
      </div>
	  
      <svg id="curveUp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff">
         <path d="M0 100 C 20 0 50 0 100 100 Z"/>
      </svg> 
	  
      <section id="services-index" class="bg-pattern"  data-bottom-top="background-position: 0px 70%,99% 70%;"
            data-top-bottom="background-position: 0px -50%,99% -50%;">
         <div class="container">
            <div class="section-heading">
               <h2>Nuestros programas</h2>
            </div>
            <div class="col-md-10 col-md-offset-1 text-center">
               <p>
			   Porque <b>compartimos el mismo amor por las mascotas</b>, en Petz School queremos enseñarte <b>con programas educativos y didácticos</b> todo lo relacionado con nuestros hermosos compañeros. Desde adiestramiento, primeros auxilios, peluquería, hasta pastelería canina y felina.
			   </p>
            </div>
         </div>
         <div class="container-fluid margin1 programasCarrusel">
               <div class="col-md-10 col-md-offset-1">
                  <div id="owl-services" class="owl-carousel">
				              
                     <div class="col-xs-12">

                        <div class="isotope-item">
						
                           <div class="adoption-thumb oferta50">

								<div class="ribbons50off">
									<img src="/img/ribbons50off.png" />
								</div>
						   
							  <a href="/diana-fonseca/pasteleria-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>" target="_blank" title="Pasteleria felina y canina con Diana Fonseca">
								<img class="img-responsive img-circle" src="/img/pasteleria-felina-y-canina.jpg" alt="Pasteleria felina y canina con Diana Fonseca" title="Pasteleria felina y canina con Diana Fonseca">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="/diana-fonseca/pasteleria-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>" target="_blank">
										Pasteleria canina y felina 
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>4.7</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>45 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>
								</div>
								
								<div class="plan-cost">
									<span class="plan-price"><?= getPrecio(35) ?></span>
									<span class="plan-price-discount"><?= getPrecio(70) ?></span>
								</div>									
								
                              </div>
							  
                           </div>
						   
                        </div>

                     </div>
					 
					 <div class="col-xs-12">
					 
                        <div class="isotope-item">

                           <div class="adoption-thumb oferta50">

								<div class="ribbons50off">
									<img src="/img/ribbons50off.png" />
								</div>
						   
							  <a href="/pets-space/primeros-auxilios-para-perros/<?= ( $testPar ? '?test' : '') ?>" target="_blank" title="Primeros auxilios para perros">
								<img class="img-responsive img-circle" src="/img/primeros-auxilios-caninos.jpg" alt="Primeros auxilios para perros" title="Primeros auxilios para perros por Laura Viviana Castro Sabogal">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="/pets-space/primeros-auxilios-para-perros/<?= ( $testPar ? '?test' : '') ?>" target="_blank">
										Primeros auxilios para perros
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>5.0</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>34 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Laura Viviana Castro Sabogal</a></p>
								</div>

								<div class="plan-cost">
									<span class="plan-price"><?= getPrecio(49.99) ?></span>
									<span class="plan-price-discount"><?= getPrecio(25) ?></span>
								</div>	
								
                              </div>
							  
                           </div>

                        </div>					 
					 
					 </div>

					 
                     <div class="col-xs-12">

                        <div class="isotope-item">

                           <div class="adoption-thumb oferta50">



								<div class="ribbons50off">

									<img src="/img/ribbons50off.png" />

								</div>
						   
							  <a href="/fabio-gomez-sepulveda/peluqueria-para-perros/<?= ( $testPar ? '?test' : '') ?>" title="Peluquería para perros con Fabio Ernesto Gomez Sepulveda">
								<img class="img-responsive img-circle" src="/img/peluqueria-para-perros.jpg" alt="Peluquería para perros con Fabio Ernesto Gomez Sepulveda" title="Peluquería para perros con Fabio Ernesto Gomez Sepulveda">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="/fabio-gomez-sepulveda/peluqueria-para-perros/<?= ( $testPar ? '?test' : '') ?>" >
										Peluquería para perros
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>4.7</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>47 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Fabio Sepulveda</a></p>
								</div>

								<div class="plan-cost">
										<span class="plan-price"><?= getPrecio(25) ?></span>

										<span class="plan-price-discount"><?= getPrecio(50) ?></span>

								</div>	
								
                              </div>
							  
                           </div>

                        </div>

                     </div>					 
					 
				 
					 
					 
					 
                 <div class="col-xs-12">

                        <div class="isotope-item">

						

                           <div class="adoption-thumb oferta50">



								<div class="ribbons50off">

									<img src="/img/ribbons50off.png" />

								</div>

						   

							  <a href="/alejandro-quiceno/dieta-barf/<?= ( $testPar ? '?test' : '') ?>" title="Dieta Barf de Alejandro Quiceno">

								<img class="img-responsive img-circle" src="/img/dieta-barf.jpg" alt="Dieta Barf de Alejandro Quiceno" title="Dieta Barf de Alejandro Quiceno">

							  </a>	

							  

                              <div class="adopt-header">

							  

                                <h3>

									<a href="/alejandro-quiceno/dieta-barf/<?= ( $testPar ? '?test' : '') ?>">

										Dieta BARF 

									</a>

							   	</h3>	

								

								<div class="rating-main-box-ratings-qty">

									<div class="rating rating--title colorText">

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

									

									<div class="blog-tags">

										<a>4.8</a>

									</div>

									

								</div>								

								 

								<div class="post-info">

									<p><i class="fa fa-clock-o"></i>57 Lecciones</p>

									<p><i class="fa fa-user"></i>Por Alejandro Quiceno</a></p>

								

								</div>

								

								<div class="plan-cost">

									<span class="plan-price"><?= getPrecio(25) ?></span>

									<span class="plan-price-discount"><?= getPrecio(50) ?></span>

								</div>								
						
                              </div>
							 
                           </div>
						   
                        </div>

                     </div>		

                    <div class="col-xs-12">

                        <div class="isotope-item">

						

                           <div class="adoption-thumb oferta50">



								<div class="ribbons50off">

									<img src="/img/ribbons50off.png" />

								</div>

						   

							  <a href="/diana-fonseca/mascotas-sanas/<?= ( $testPar ? '?test' : '') ?>" title="Mascotas Sanas con Diana Fonseca">

								<img class="img-responsive img-circle" src="/img/mascotas-sanas.jpg" alt="Mascotas Sanas con Diana Fonseca" title="Mascotas Sanas con Diana Fonseca">

							  </a>	

							  

                              <div class="adopt-header">

							  

                                <h3>

									<a href="/diana-fonseca/mascotas-sanas/<?= ( $testPar ? '?test' : '') ?>">

										Mascotas Sanas 

									</a>

							   	</h3>	

								

								<div class="rating-main-box-ratings-qty">

									<div class="rating rating--title colorText">

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

									

									<div class="blog-tags">

										<a>4.7</a>

									</div>

									

								</div>								

								 

								<div class="post-info">

									<p><i class="fa fa-clock-o"></i>46 Lecciones</p>

									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>

								

								</div>

								

								<div class="plan-cost">

									<span class="plan-price"><?= getPrecio(35) ?></span>

									<span class="plan-price-discount"><?= getPrecio(70) ?></span>

								</div>								

								

                              </div>

							  

                           </div>

						   

                        </div>

                     </div>	


                     <div class="col-xs-12">

                        <div class="isotope-item">
						
                           <div class="adoption-thumb oferta50">



								<div class="ribbons50off">

									<img src="/img/ribbons50off.png" />

								</div>
						   
								<a href="/diana-fonseca/petlados/<?= ( $testPar ? '?test' : '') ?>" title="PETlados con Diana Fonseca">
									<img class="img-responsive img-circle" src="/img/petlados-con-diana-fonseca.jpg" alt="Helados para perros y gatos" title="Helados para perros y gatos">
								</a>
								
								<div class="adopt-header">
									<h3>
										<a href="/diana-fonseca/petlados/<?= ( $testPar ? '?test' : '') ?>" title="Heladeria canina y felina" >
											PETlados
										</a>
									</h3>	
									
									<div class="rating-main-box-ratings-qty">

										<div class="rating rating--title colorText">

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
										
										<div class="blog-tags">

											<a>4.6</a>

										</div>
										
									</div>	
									
									<div class="post-info">

										<p><i class="fa fa-clock-o"></i>36 Lecciones</p>

										<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>

									</div>
									
									<div class="plan-cost">

										<span class="plan-price"><?= getPrecio(40) ?></span>

										<span class="plan-price-discount"><?= getPrecio(80) ?></span>

									</div>
									
                              </div>

                           </div>
                        </div>

                     </div>						 


 <div class="col-xs-12">                        <div class="isotope-item">                           <div class="adoption-thumb oferta50">								<div class="ribbons50off">									<img src="/img/ribbons50off.png" />								</div>						   							  <a href="/diana-fonseca/petlicias-navidenas/" target="_blank" title="Curso de Petlicias navideñas">								<img class="img-responsive img-circle" src="/img/petlicias-navidenas-con-diana-fonseca.jpg" alt="Curso de Petlicias navideñas de Diana Fonseca" title="Curso de Petlicias navideñas de Diana Fonseca">							  </a>								                                <div class="adopt-header">							                                  <h3>									<a href="/diana-fonseca/petlicias-navidenas/" target="_blank">										PETlicias Navideñas									</a>							   	</h3>	 																<div class="rating-main-box-ratings-qty">									<div class="rating rating--title colorText"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>									</svg>									<span>										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>										</svg>									</span>									</div>																		<div class="blog-tags">										<a>5</a>									</div>																	</div>																 								<div class="post-info">									<p><i class="fa fa-clock-o"></i>28 Lecciones</p>									<p><i class="fa fa-user"></i>Por Diana Fonseca</a></p>								</div>																<div class="plan-cost">																			<span class="plan-price"><?= getPrecio(50) ?></span>
										<span class="plan-price-discount"><?= getPrecio(100) ?></span>								</div>												                                 <a class="btn" href="/diana-fonseca/petlicias-navidenas/" target="_blank">									Ver más								</a>								                              </div>							                             </div>                        </div>                     </div>
				  
				  
                     <div class="col-xs-12">
                      
                        <div class="isotope-item">

                           <div class="adoption-thumb oferta50">

								<div class="ribbons50off">
									<img src="/img/ribbons50off.png" />
								</div>
						   
							  <a href="https://go.hotmart.com/L53194560M?ap=2d30&offDiscount=031016&hideBillet=1" target="_blank" title="Educat con Enit Suarez">
								<img class="img-responsive img-circle" src="/img/educat.jpg" alt="Educat con Enit Suarez" title="Educat con Enit Suarez">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="https://go.hotmart.com/L53194560M?ap=2d30&offDiscount=031016&hideBillet=1" target="_blank">
										Educat
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>4.8</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>42 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Enit Suarez</a></p>
								</div>
								 
								<div class="plan-cost">
										<span class="plan-price"><?= getPrecio(25) ?></span>

										<span class="plan-price-discount"><?= getPrecio(50) ?></span>
								</div>
								
                              </div>
							  
                           </div>

                        </div>
                        
                     </div>
					 
                     <div class="col-xs-12">

                        <div class="isotope-item">
						

                           <div class="adoption-thumb">
						   
							  <a href="https://go.hotmart.com/S52960329D?ap=0507&hideBillet=1" target="_blank" title="Tu perro más ágil frisbee training con Geo Rojas">
								<img class="img-responsive img-circle" src="/img/tu-perro-agil-frisbee-training.jpg" alt="Tu perro más ágil frisbee training con Geo Rojas" title="Tu perro más ágil frisbee training con Geo Rojas">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="https://go.hotmart.com/S52960329D?ap=0507&hideBillet=1" target="_blank">
										Tu Perro más ágil
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>5</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>21 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Geo Rojas</a></p>
								</div>
								
								<div class="plan-cost">
										<span class="plan-price"><?= getPrecio(70) ?></span>
								</div>									
								
                              </div>
							  
                           </div>


                        </div>

                     </div>					 
					 

					 
					 <div class="col-xs-12">
					 
                        <div class="isotope-item">

                           <div class="adoption-thumb">
						   
							  <a href="https://go.hotmart.com/P53170727H?ap=350f&hideBillet=1" target="_blank" title="Belleza capilar felina y canina con David López">
								<img class="img-responsive img-circle" src="/img/belleza-capilar-felina-y-canina.jpg" alt="Belleza capilar felina y canina con David López" title="Belleza capilar felina y canina con David López">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="https://go.hotmart.com/P53170727H?ap=350f&hideBillet=1" target="_blank">
										Belleza capilar felina y canina
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>5</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>6 Lecciones</p>
									<p><i class="fa fa-user"></i>Por David López</a></p>
								</div>

								<div class="plan-cost">
									<span class="plan-price"><?= getPrecio(50) ?></span>
								</div>	
								
                              </div>
							  
                           </div>

                        </div>					 
					 
					 </div>
					 




					 
                     <div class="col-xs-12">

                        <div class="isotope-item">

                           <div class="adoption-thumb oferta50">

								<div class="ribbons50off">
									<img src="/img/ribbons50off.png" />
								</div>
						   
							  <a href="/willian-quispe-abarca/costura-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>" title="Costura canina y felina con Willian Quispe Abarca">
								<img class="img-responsive img-circle" src="/img/costura-canina-y-felina.jpg" alt="Costura canina y felina con Willian Quispe Abarca" title="Costura canina y felina con Willian Quispe Abarca">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="/willian-quispe-abarca/costura-canina-y-felina/<?= ( $testPar ? '?test' : '') ?>">
										Costura canina y felina
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
									</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
										<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
									</svg>
									<span>
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>
										</svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
											<path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path>
										</svg>
									</span>
									</div>
									
									<div class="blog-tags">
										<a>4.7</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>54 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Willian Abarca</a></p>
								</div>

								<div class="plan-cost">
										<span class="plan-price"><?= getPrecio(25) ?></span>
										<span class="plan-price-discount"><?= getPrecio(50) ?></span>
								</div>	
								
                              </div>
							  
                           </div>

                        </div>

                     </div>
					 
				 

					 
					 <div class="col-xs-12">
					 
                        <div class="isotope-item">

                           <div class="adoption-thumb oferta50">

								<div class="ribbons50off">
									<img src="/img/ribbons50off.png" />
								</div>
						   
							  <a href="https://go.hotmart.com/K53197775W?ap=b25c&offDiscount=031016&hideBillet=1" target="_blank" title="Peluquería para gatos con Fabio Sepulveda">
								<img class="img-responsive img-circle" src="/img/peluqueria-para-gatos.jpg" alt="Peluquería para gatos con Fabio Sepulveda" title="Peluquería para gatos con Fabio Sepulveda">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="https://go.hotmart.com/K53197775W?ap=b25c&offDiscount=031016&hideBillet=1" target="_blank">
										Peluquería para gatos
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>4.8</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>24 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Fabio Sepulveda</a></p>
								</div>
								
								<div class="plan-cost">
										<span class="plan-price"><?= getPrecio(25) ?></span>
										<span class="plan-price-discount"><?= getPrecio(50) ?></span>
								</div>									
								
                              </div>
							  
                           </div>

                        </div>					 
					 
					 </div>





					 <div class="col-xs-12">
					 
                        <div class="isotope-item">

                           <div class="adoption-thumb">
						   
							  <a href="https://go.hotmart.com/P53164495M?ap=e07b&hideBillet=1" target="_blank" title="Tu perro tranquilo con Alberto De La Torre">
								<img class="img-responsive img-circle" src="/img/tu-perro-tranquilo.jpg" alt="Tu perro tranquilo con Alberto De La Torre" title="Tu perro tranquilo con Alberto De La Torre">
							  </a>	
							  
                              <div class="adopt-header">
							  
                                <h3>
									<a href="https://go.hotmart.com/P53164495M?ap=e07b&hideBillet=1" target="_blank">
										Tu Perro Tranquilo
									</a>
							   	</h3>	
								
								<div class="rating-main-box-ratings-qty">
									<div class="rating rating--title colorText">
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
									
									<div class="blog-tags">
										<a>5.0</a>
									</div>
									
								</div>								
								 
								<div class="post-info">
									<p><i class="fa fa-clock-o"></i>44 Lecciones</p>
									<p><i class="fa fa-user"></i>Por Alberto De La Torre</a></p>
								</div>

								<div class="plan-cost">
										<span class="plan-price"><?= getPrecio(50) ?></span>
								</div>	
								
                              </div>
							  
                           </div>

                        </div>					 
					 
					 </div>					 
					 
                  </div>
				  
				  
				  <div class="btnCenter">
					<a class="btn" href="/programas/<?= ( $testPar ? '?test' : '') ?>">Ver todos</a>
				  </div>
				  
               </div>
           </div>
      </section>


	  
      <section id="about-index" class="bg-lightcolor1" >
         <div class="container">


            <div class="row margin1 text-center">
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <div class="customIcon">
						<img src="/img/guarantee.svg" />
					 </div>
                  </div>
                  <div class="col-xs-12">
                     <h5>100% Garantízado</h5>
                     <p>Si en el plazo de <b>7 días</b>, a partir de tu inscripción a cualquiera de nuestras Masterclasses, decides no continuar sólo tienes que solicitar el reembolso y <b>recuperas el 100%</b> de tu inversión.</p>
                  </div>
               </div>
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <div class="customIcon">
						<img src="/img/update.svg" />
					 </div>
                  </div>
                  <div class="col-xs-12">
                     <h5>Acceso vitalicio</h5>
                     <p>Tendrás <b>derecho a</b> todas las <b>futuras actualizaciones</b> de por vida. Todos los días se descubren cosas nuevas y queremos que nuestra oferta sea superadora y estes siempre a la vanguardia.</p>
                  </div>
               </div>
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <div class="customIcon">
						<img src="/img/preguntas-respuestas.svg" />
					 </div>
                  </div>
                  <div class="col-xs-12">
                     <h5>Te acompañamos</h5>
                     <p>Estaremos contigo. Siempre que tengas una duda estaremos ahí para apoyarte. Dispondrás de un <b>sistema de preguntas y respuestas</b> donde el profesor responderá directamente tus preguntas.</p>
                  </div>
               </div>
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <div class="customIcon">
						<img src="/img/certificate.svg" />
					 </div>
                  </div>
                  <div class="col-xs-12">
                     <h5>Certifícate</h5>
                     <p>Al finalizar tus estudios tus nuevas habilidades estarán certificadas y avaladas <b>por el profesional que dicta la Masterclass</b>. Preparate para convertirte en todo un profesional en el area.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>	  
	  
      <section id="reviews">
         <div class="container">
            <div class="section-heading text-center">
               <h2>Opiniones y Reviews</h2>
            </div>
            <div class="parallax-object2 hidden-sm hidden-xs hidden-md" 
               data-100-start="transform:rotate(-0deg); left:20%;" 
               data-top-bottom="transform:rotate(-370deg);">
               <img src="/img/illustrations/toy.png" alt="">
            </div>
            <div class="col-md-9 col-md-offset-3">
            <div id="owl-reviews" class="owl-carousel margin1">
               <div class="review">
                  <div class="col-xs-12">
                     <div class="review-caption">
                        <h5>Rosario Garzón</h5>
                        <div class="small-heading">
                           Participó en EDUCAT
                        </div>
                        <blockquote>
                           Soy amante de los gatos y creía que los conocia. Doy gracias a Petz School por brindarme EDUCAT, me abrió los ojos sobre porque los gatos tienen ciertos comportamientos y como es su verdadera psicología. Muy a gusto con el valor de esta Masterclass. La super recomiendo y muchas gracias!
                        </blockquote>
                     </div>
                     <div class="review-profile-image">
                        <img src="/img/review1.jpg" alt=""/>
                     </div>
                  </div>
               </div>

               <div class="review">
                  <div class="col-xs-12">
                     <div class="review-caption">
                        <h5>Maria Silva</h5>
                        <div class="small-heading">
                           Participó en PASTELERIA FELINA
                        </div>
                        <blockquote>
							Quedé encantada con la Masterclass de Diana Fonseca sobre pasteleria rica y saludable para mi minino. Ahora además de cocinarles platillos super chulos a mi gatita también comencé a venderlos por Instagram y ahora tengo mi propio negocio. ¡Gracias Petz School por la oportunidad!
                        </blockquote>
                     </div>
                     <div class="review-profile-image">
                        <img src="/img/review3.jpg" alt=""/>                       
                     </div>
                  </div>
               </div>
               <div class="review">
                  <div class="col-xs-12">
                     <div class="review-caption">
                        <h5>Natalia Arellano</h5>
                        <div class="small-heading">
                           Participó en COSTURA CANINA
                        </div>
                        <blockquote>
							Simpre me gustó la costura y soy amantes de los animales. Cuando vi la Masterclass en Petz School ni lo dude. Quiero decir que mi intención era aprender a desarrollar prendas para montar mi emprendimiento y el programa cumplió mis expectativas ampliamente. Se los super recomiendo.
                        </blockquote>
                     </div>
                     <div class="review-profile-image">
                        <img src="/img/review4.jpg" alt=""/>                       
                     </div>
                  </div>
               </div>

               <div class="review">
                  <div class="col-xs-12">
                     <div class="review-caption">
                        <h5>David Hernández</h5>
                        <div class="small-heading">
                           Participó en TU PERRO + AGIL
                        </div>
                        <blockquote>
							Amo a los perros, pero mi peludo era perezoso y no me hacia caso. Con la Masterclass Tu Perro Ágil entendí que tenía que aprender como funciona su motivación para jugar y mejorar su forma física. Ahora somos una dupla muy divertida que llama la atención a donde vamos. Muchas gracias Petz School.
                        </blockquote>
                     </div>
                     <div class="review-profile-image">
                        <img src="/img/review2.jpg" alt=""/>                      
                     </div>
                  </div>
               </div>
               
               <div class="review">
                  <div class="col-xs-12">
                     <div class="review-caption">
                        <h5>Adriana Pomona</h5>
                        <div class="small-heading">
                           Participó en PELUQUERIA PARA PERROS
                        </div>
                        <blockquote>
							Soy peluquera de profesión y me llamo mucho la atención la Masterclass sobre peluqueria canina. Debo reconocer que era incrédula de lo que podía encontrarme dentro, pero quiero destacar la calidad y la profesionalidad de Fabio. Muchas gracias Petz School y ahora voy por el de peluqueria felina!
                        </blockquote>
                     </div>
                     <div class="review-profile-image">
                        <img src="/img/review5.jpg" alt=""/>                       
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </section>
	  
      <section id="stats" class="bg-lightcolor2">
         <div class="section-heading text-center">
               <h2>¡Qué esperas!</h2>
            </div>
         <div class="container">
            <div class="col-lg-9 col-md-8 col-sm-8">
               <div class="text-center">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="numscroller" data-slno='1' data-min='0' data-max='626' data-delay='20' data-increment="19">626</div>
                     <h5>Masterclasses brindadas</h5>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="numscroller" data-slno='1' data-min='0' data-max='589' data-delay='10' data-increment="9">589</div>
                     <h5>Mascotas felices</h5>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="numscroller" data-slno='1' data-min='0' data-max='67' data-delay='20' data-increment="19">67</div>
                     <h5>Masterclasses publicadas</h5>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="numscroller" data-slno='1' data-min='0' data-max='52' data-delay='10' data-increment="9">52</div>
                     <h5>Masterclasses 5 estrellas</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>	  
	  
      <section class="callout container-fluid" >
         <div class="row-fluid">
            <div class="col-lg-8 col-md-12 no-padding" data-start="right: 20%;" 
               data-center="right:0%;">
               <img src="/img/sobre-nosotros-petz-school.jpg" class="img-responsive img-rounded" alt="">
            </div>
            <div class="callout-box col-lg-6 col-lg-offset-6 bg-darkcolor"  data-start="left: 20%;" 
               data-center="left:0%;">
               <h3>Amamos a los animales</h3>
               <p><b>Petz school</b> nace de la necesidad de nuclear en un solo lugar <b>diversos programas para adorar, mimar y devolver un poco de todo el amor que nuestras hermosas mascotas nos entregan</b>. Cada Masterclass esta cuidadosamente creado para responder a diferentes necesidades que abordan desde la salud hasta como crear galletas para nuestros peluditos.</p>
               <a href="/programas/<?= ( $testPar ? '?test' : '') ?>" class="btn">ver programas</a>
            </div>
         </div>
      </section>

	  
	  
      <section id="faq-index" class="bg-lightcolor1" >
         <div class="container">
		 
            <div class="section-heading text-center">
               <h2>Preguntas frecuentes</h2>
            </div>
			
            <div class="row">
               <div class="col-md-6 col-lg-7 text-center">

                  <div class="panel-group" id="accordion">
                     <div class="panel">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							  Petz School ¿Es para mí?
							  </a>
                           </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                           <div class="panel-body">
								<p>
									Si eres amante de los animales. Si te gusta mimarlos y quieres devolverle parte del amor que te brindan. Si ademas quieres emprender tu propio negocio en alguna de las áreas de nuestras Masterclasses. Entonces este es tu lugar.
								</p>
								<p>
									Siguenos en nuestras redes y suscríbirte a nuestro boletín de novedades que estaremos subiendo contenido de muchisimo valor, además de enviarte las mejores ofertas y oportunidades.
								</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								¿Dónde se cursa?
							</a>
                           </h5>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                           <div class="panel-body">
						   
							<p>
								Las Masterclasses se cursan en linea junto con el acompañamiento mediante el sistema de preguntas y respuestas del Campus Virtual donde el encargado de cada Masterclass responderá todas tus inquietudes.
							</p>								
						   
                           </div>
                        </div>
                     </div>
                     <div class="panel">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								¿Qué garantía y seguridad tengo?
							</a>
                           </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                           <div class="panel-body">
							<p>
								A partir de que se procese el pago tienes 7 días para ver, revisar y analizar las lecciones y si no cumplen y/o superan tus expectativas <b>puedes solicitar el reembolso</b> del 100% de tu inversión sin dar explicación alguna.
							</p>
							<p>
								<b>Te lo garantiza Hotmart®</b>, empresa de reputación mundial que soporta tecnológicamente toda nuestra operación.
							</p>	
							<p>
								Anímate y pruébanos. Tu inversión está protegida y segura.
							</p>							
                           </div>
                        </div>
                     </div>
					 
                     <div class="panel">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
								¿Qué debo hacer cuando me inscriba?
							</a>
                           </h5>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                           <div class="panel-body">
							<p class="pmod">
								Una vez realizada la inscripción y procesado el pago recibirás en tu casilla de correo electrónico, la misma que utilizaste en el proceso de pago, un email con <b>tus claves e instrucciones de acceso</b> para ingresar a la plataforma y campus virtual.
							</p>
							
							<p class="pmod">
								Inmediatamente podrás <b>comenzar con tu capacitación</b>.
							</p>
                           </div>
                        </div>
                     </div>					 
					 
                  </div>
               </div>
	
               <div class="col-md-6 col-lg-5" >
                  <img src="/img/about-index.png" class="img-responsive" alt="">
               </div>
            </div>
			
         </div>
      </section>		  

	<?php include_once ("inc/newsletter.php"); ?>
	  
      <section id="adoption" class="pages">
	  
         <div class="section-heading text-center">
               <h2>Instructores</h2>
         </div>
		 
         <div class="container">
            <div class="row margin1">
               <div class="owl-carousel" id="owl-team">
                  <div class="team-wrap col-md-12">
                     <div class="member text-center">
                        <div class="wrap">
                           <div class="info">
                              <h3 class="name">Geo Rojas</h3>
                              <h4 class="position">Entrenador de perros</h4>
                           </div>
                           <img src="/img/team1.jpg" alt="Geo Rojas" title="Geo Rojas" class="img-circle img-responsive">                           
                        </div>
                        <div class="more">
                           <p>Es entrenador canino con 12 años de experiencia, excelente en trucos y consejos.</p>
                           <div class="social-media smaller">
                              <a href="https://www.facebook.com/exerdogpuebla/" title="Geo Rojas" class="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                              <a href="https://www.instagram.com/exerdog/" title="Geo Rojas" class="instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                              <a href="https://www.youtube.com/channel/UCtBqCz37n36-NVEAamchsuw" title="Geo Rojas" class="youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
				  
                  <div class="team-wrap col-md-12">
                     <div class="member text-center">
                        <div class="wrap">
                           <div class="info">
                              <h3 class="name">Alberto De La Torre</h3>
                              <h4 class="position">Educador Canino</h4>
                           </div>
                           <img src="/img/team2.jpg" alt="Alberto De La Torre" class="img-circle img-responsive">
                        </div>
                        <div class="more">
                           <p>Se destaca por su amplia experiencia en adiestramiento canino.</p>
                           <div class="social-media smaller">
                               <a href="https://www.facebook.com/dogeduca/" title="Alberto De La Torre" class="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                              <a href="https://www.instagram.com/dogeduca/" title="Alberto De La Torre" class="instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                              <a href="https://www.youtube.com/user/dogeducatv/" title="Alberto De La Torre" class="youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
				  
                  <div class="team-wrap col-md-12">
                     <div class="member text-center">
                        <div class="wrap">
                           <div class="info">
                              <h3 class="name">
								<a href="/fabio-gomez-sepulveda/<?= ( $testPar ? '?test' : '') ?>" style="color: initial;" >
									Fabio Sepulveda
								</a>	
							   </h3>
                              <h4 class="position">Estilista canino</h4>
                           </div>
                           <img src="/img/team3.jpg" alt="Fabio Gomez Sepulveda" class="img-circle img-responsive">
                        </div>
                        <div class="more">
                           <p>Peluquería canina profesional, handler, ponente internacional y escultor.</p>
                           <div class="social-media smaller">
                              <a href="https://www.facebook.com/tinyfg" title="Fabio Gomez Sepulveda" class="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                              <a href="https://www.youtube.com/channel/UC4cAk9QmDCytV4CygqS4dDQ" title="Fabio Gomez Sepulveda" class="youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="team-wrap col-md-12">
                     <div class="member text-center">
                        <div class="wrap">
                           <div class="info">
								<h3 class="name">
									<a href="/diana-fonseca/<?= ( $testPar ? '?test' : '') ?>" style="color: initial;" >
										Diana Fonseca
									</a>
								</h3>
								<h4 class="position">Nutricionista de Mascotas</h4>
                           </div>
                           <img src="/img/team4.jpg" alt="Diana Fonseca" class="img-circle img-responsive">
                        </div>
                        <div class="more">
                           <p>Experta en nutrición canina y felina, con certificación como Bio nutricionista y especializada en repostería.</p>
                           <div class="social-media smaller">
                              <a href="https://www.facebook.com/NaturalTaste2015/" title="Diana Fonseca" class="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                              <a href="https://www.instagram.com/dianafonsecamartin/" title="Diana Fonseca" class="instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
				  <div class="team-wrap col-md-12">
                     <div class="member text-center">
                        <div class="wrap">
                           <div class="info">
                              <h3 class="name">Enit Suarez</h3>
                              <h4 class="position">Experta en felinos</h4>
                           </div>
                           <img src="/img/team6.jpg" alt="Enit Suarez" class="img-circle img-responsive">
                        </div>
                        <div class="more">
                           <p>Experta en comportamiento felino. Con experiencia en rescate de gatos.</p>
                           <div class="social-media smaller">
                              <a href="https://www.instagram.com/enitsuarezcat/" title="Enit Suarez" class="instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                              <a href="https://www.instagram.com/misscat_col/" title="Enit Suarez" class="instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			
			  <div class="btnCenter">
				<a class="btn" href="/instructores/<?= ( $testPar ? '?test' : '') ?>">Ver todos</a>
			  </div>
			
         </div>
      </section>	  
	  

      <section id="contact-index">
         <div class="container">
            <div class="section-heading">
               <h2>Contacto</h2>
            </div>
            <div class="col-lg-7 col-lg-offset-5 col-md-8 col-md-offset-2">
               <h4>Información </h4>
				 <ul class="list-inline">
					<li><i class="fa fa-envelope"></i>hola@petzschool.com</a></li>
					<li>
						<a href="https://www.facebook.com/petzschool/" target="_blank" title="Facebook de Petz School" >
							<i class="fa fa-facebook margin-icon"></i>
							petzschool
						</a>	
					</li>
					<li>
						<a href="https://www.instagram.com/petz.school/" target="_blank" title="Instagram de Petz School" >
							<i class="fa fa-instagram margin-icon"></i>
							petz.school
						</a>	
					</li>
				 </ul>
				 <p>
					Dejanos todas tus dudas, comentarios, sugerencias que con gusto te responderemos. Recordá seguirnos en nuetras redes sociales para participar de sorteos y recibir información de valor para tu mascota.
				 </p>
               <h4 class="margin1">Escríbenos</h4>
                  <form id="contact_form" method="post">
                     <div class="form-group">
                        <label>Nombre<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field" required>                    
                        <label>Email <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field" required>           
                        <label>Asunto</label>
                        <input type="text" name="subject" class="form-control input-field" >                            
                        <label>Mensaje<span class="required">*</span></label>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="3" required ></textarea>
                     </div>
                     <input type="submit" id="enviar_btn" class="btn center-block" value="Enviar mensaje" />
                  </form>
               <div id="contact_results"></div>
            </div>
         </div>
      </section>
	  
	  <!--section id="instagram" class="pages">
	  
		<div class="section-heading">
             <h2>¡Síguenos!</h2>
			 
			 <div class="followUs">
				 <a href="https://www.instagram.com/petz.school/" target="_blank" title="Instagram de Petz School">
					<i class="fa fa-instagram margin-icon"></i>
					petz.school
				</a>
			</div>	
			
        </div>
		
		<div class="container margin1">
			<div class="instaPetz instagram-element col-3 gutter-5"></div>
			
			<div class="btnCenter">
				<a class="btn" target="_blank" href="https://www.instagram.com/petz.school/">Ver todos</a>
			</div>			
			
			
		</div>
		
	  </section-->

		<?php include_once("inc/footer.php"); ?>
		
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

		<link href="/css/ig.css" rel="stylesheet">	
		<link href="/css/custom.css" rel="stylesheet">		
				
		<script src="/js/jquery.min.js"></script>
		
		<script src="/js/fancybox2/source/jquery.fancybox.pack.js"></script>

		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/main.js"></script>
		<script src="/js/plugins.js"></script>
		<script src="/js/prefixfree.js"></script>
		
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
if( !$testing && !$testPar )	ob_end_flush();
?>