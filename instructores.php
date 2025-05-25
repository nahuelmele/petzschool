<?php 
header("Cache-Control: no-cache");
include "inc/functions.php";

//$testing = true;

$datePublished = "2021-07-10";
$dateModified = "2021-07-19";
$imgShare = "share.jpg";

$des = "✓ Petz School. Conoce a nuestros instructores y te esperamos para que formes parte de esta hermosa comunidad.";
$tit = "Petz School - Instructores";


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
		
		<style>
		
		</style>
	</head>
   <body id="page-top">
 
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
         </div>
      </div>
	  
		<?php include_once("inc/nav.php"); ?>
		
      <section id="adoption" class="pages">
         <div class="jumbotron instructoresBack">
            <div class="jumbo-heading">
               <h1>Instructores</h1>
            </div>
         </div>
         <div class="container">
            <div class="row text-center mbSection">
               <div class="col-lg-10 col-lg-offset-1">
                  <h3>Equipo Educativo</h3>
                  <p>En Petz School nos preocupamos por brindarte las mejores capacitaciones para tus mascotas, es por eso que hemos seleccionado a reconocidos profesionales para ofrecerte en nuestros programas educativos. 
					  Con ellos aprenderás de la forma más didáctica y amorosa, te los presentamos...
                     
                  </p>
               </div>
            </div>
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
                                                            <h3 class="name">
									<a href="/alvaro-osorio/<?= ( $testPar ? '?test' : '') ?>" style="color: initial;" >
										Alvaro Osorio
									</a></h3>
                              <h4 class="position">Entrenador de Perros</h4>
                           </div>
                           <img src="/img/team5.jpg" alt="Alvaro Osorio" class="img-circle img-responsive">
                        </div>
                        <div class="more">
                           <p>Es un instructor profesional Adiestrador canino con más de 14 años de experiencia.</p>
                           <div class="social-media smaller">
                               <a href="https://www.facebook.com/Alvaro-Osorio-I-Adiestramiento-Canino-112777313819899/" title="Alvaro Osorio" class="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                              <a href="https://www.instagram.com/diestros1/" title="Alvaro Osorio" class="instagram" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                              <a href="https://www.youtube.com/user/diestros2" title="Alvaro Osorio" class="youtube" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a>
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
         </div>
      </section>
	  
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
		
				
		<link href="/css/custom.css" rel="stylesheet">		
				
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