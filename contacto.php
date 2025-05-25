<?php 
header("Cache-Control: no-cache");
include "inc/functions.php";

//$testing = true;

$datePublished = "2021-03-24";
$dateModified = "2021-06-30";
$imgShare = "share.jpg";

$des = "✓ Petz School. Cursos y programas hechos con amor para tu mascosta.";
$tit = "Petz School - Contacto";

//esto es para si pasamos parametro test no cargamos pixel
$testPar = false;

if( isset( $_GET["test"] ) )
	$testPar = true;

if( !$testing && !$testPar )
	ob_start('comprimir_pagina');

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
	  
		<?php include_once("inc/nav.php"); ?>
		
      <section id="contact" class="pages">
         <div class="jumbotron contactBack">
		 
            <div class="jumbo-heading">
               <h2>Contacto</h2>
            </div>
         </div>
		 
         <div class="container">
            <div class="row">
			
               <div class="col-lg-5 col-md-5">
                     <h3>Información </h3>
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
					<img src="/img/contactpage1.png" alt="" class="img-rounded center-block img-responsive">             
               </div>
			   
               <div class="col-lg-6 col-md-6 col-lg-offset-1 col-md-offset-1 res-margin">
			     <h3>Escríbenos</h3>
				 
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