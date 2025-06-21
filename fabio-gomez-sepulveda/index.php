<?php 
/*
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://petzschool.com/fabio-gomez-sepulveda/peluqueria-para-perros/");
exit();
*/

header("Cache-Control: no-cache");
include "../inc/functions.php";


//$testing = true;



$datePublished = "2022-10-03";

$dateModified = "2022-10-04";

$imgShare = "landings/peluqueria-para-perros/compartir-peluqueria-para-perros.jpg";


$currency = getCurrency();


$des = "Fabio Gomez Sepulveda te enseñará todo sobre estética y peluquería para perros desde nivel básico a avanzado. Apresúrate que cerramos inscripciones pronto - Fabio Gomez Sepulveda - Petz School";

$tit = "✓ Aprende desde cero todo sobre estética y Peluquería para Perros y crea tu Propio Negocio - Fabio Gomez Sepulveda - Petz School";

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

		<!-- Resource Hints for Performance -->
		<link rel="preconnect" href="https://connect.facebook.net">
		<link rel="dns-prefetch" href="https://graph.facebook.com">
		<link rel="preconnect" href="https://www.google-analytics.com">
	
		
		<!-- Facebook Critical - Must load before any bundles -->
		<?php 
		$base = "../";
		include_once($base . "inc/facebook-critical.php"); 
		?>
		
		<!-- Emergency fallback script -->
		<script>
			setTimeout(function() {
				if (!window.fbq || typeof window.fbq !== 'function') {
					var script = document.createElement('script');
					script.src = '/js/face.js';
					script.async = true;
					document.head.appendChild(script);
				}
			}, 5000);
		</script>

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
					Fabio Gomez Sepulveda
				</h1>
			</div>

			<div class="container margin1">
			
				<div class="row">
				
					<div class="col-md-5 imgDiana">
					  <img src="/img/landings/peluqueria-para-perros/fabio-gomez-sepulveda-peluqueria-para-perros.jpg" class="center-block img-rounded  lazyload" alt="Fabio Gomez Sepulveda de Peluqueria para perros" title="Fabio Gomez Sepulveda de Peluqueria para perros" width="450" height="450" style="">
					</div>
					
					<div class="col-md-7 res-margin textint">
						
						<div class="pet-adopt-info">
							<h6>
								Estilista canino
							</h6>
							<h6>
								Handler canino
							</h6>
							<h6>
								Groomer canino
							</h6>
						</div>
						
						<p>
							Fabio Ernesto Gomez Sepulveda, estilista canino profesional, handler, ponente internacional y escultor con participación en uno de los congresos más grandes e importantes del mundo de las mascotas. Ganador de múltiples Best In Show en diferentes competencias de belleza en perros y de peluquería canina.
						</p>

						<p>
							Cuenta con estudiantes en México, Colombia, Costa Rica, El Salvador, Guatemala, USA, España y Canadá quienes ya se encuentran trabajando con excelentes resultados en sus emprendimientos.
						</p>						
						
						<div class="alert alert-success" style="margin-top:40px">
							<p>
								Estudiar peluquería canina nunca fue tan fácil. Aprende un arte que puedas <b>desempeñar en cualquier lugar</b>.
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
				  
                     <div class="col-lg-6 col-sm-6 col-md-6 dog">

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

									<p><i class="fa fa-comment"></i>321 Evaluaciones</p>

								</div>

								

								<div class="plan-cost">

									<span class="plan-price"><?= $currency ?> <?= getPrecio(25) ?></span>

									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(50) ?></span>

								</div>									

								

                                <p>

									Conviértete en una profesional y <b>trabaja donde quieras con tu propio negocio</b> de peluqueria canina. Aprende técnicas, procedimientos y estilos por profesionales renombrados.

								</p>

								 

                                <a class="btn" href="/fabio-gomez-sepulveda/peluqueria-para-perros/<?= ( $testPar ? '?test' : '') ?>" >

									Ver más

								</a>

								

                              </div>

							  

                           </div>



                        </div>

                     </div>
					 
					 
                     <div class="col-lg-6 col-sm-6 col-md-6 cat">

                        <div class="isotope-item">



                           <div class="adoption-thumb oferta50">



								<div class="ribbons50off">

									<img src="/img/ribbons50off.png" />

								</div>

						   

							  <a target="_blank" href="https://go.hotmart.com/K53197775W?ap=b25c&offDiscount=031016&hideBillet=1" title="Peluquería para gatos con Fabio Sepulveda">

								<img class="img-responsive img-circle" src="/img/peluqueria-para-gatos.jpg" alt="Peluquería para gatos con Fabio Sepulveda" title="Peluquería para gatos con Fabio Sepulveda">

							  </a>	

							  

                              <div class="adopt-header">

							  

                                <h3>

									<a target="_blank" href="https://go.hotmart.com/K53197775W?ap=b25c&offDiscount=031016&hideBillet=1">

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

									<p><i class="fa fa-comment"></i>6 Evaluaciones</p>

								</div>

								

								<div class="plan-cost">

									<span class="plan-price"><?= $currency ?> <?= getPrecio(25) ?></span>

									<span class="plan-price-discount"><?= $currency ?> <?= getPrecio(50) ?></span>

								</div>									

								

                                <p>

									Conviértete en una profesional con el respaldado de Fabio Sepulveda que <b>ha formado a cientos de nuevas estilistas</b> que ya se encuentran trabajando <b>con sus propios emprendimientos</b>.

								</p>

								 

                                <a target="_blank" class="btn" href="https://go.hotmart.com/K53197775W?ap=b25c&offDiscount=031016&hideBillet=1">

									Ver más

								</a>

								

                              </div>

							  

                           </div>



                        </div>

                     </div>				 
					 
					 
                  </div>

               </div>

            </div>

         </div>

      </section>


	  
	  <section class="pages bg-pattern videodown" style="background-color: #ffefd5">
	  
			<div class="text-center">
				<h2>
					Un poco de mi historia
				</h2>
			</div>
	  
			<div class="container margin1">
			
				<div class="row">
				
					<div class="boxShadowVideo back768">
						<lite-vimeo videoid="756802901" title="Play: Video"></lite-vimeo>
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

		.back768 {
			padding: 0 10px;
			margin: 0 auto;
			text-align: center;
			max-width: 768px;
		}

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
		#dianaTitPro h2,
		.videodown h2{
			color: #108896;
			font-family: 'Baloo Thambi',sans-serif;
			font-size: 60px;
			line-height: 1em;
			letter-spacing: -.2px;
			margin-bottom: 35px;
			margin-top: 0;
			position: relative;
			text-transform: initial;
		}

		#dianaTitPro{
			padding: 50px 0px 0px 0px;
		}

		#adoption{
			padding: 20px 0px 40px;
		}	

		#dianaTitPro h2,
		.videodown h2{
			font-size: 52px;
			text-transform: initial;
			margin-bottom: 0;
		}
		
		.videodown h2{
			margin-bottom: 25px;
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

			#dianaTitPro h2,
			.videodown h2{
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

		<script type="module" src="/js/lite-vimeo.js"></script>
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