<?php

header("Cache-Control: no-cache");
include "inc/functions.php";

// Set page type for performance system
$GLOBALS['page_type'] = 'general';

$datePublished = "2021-06-24";
$dateModified = "2021-06-30";
$imgShare = "share.jpg";
$currency = getCurrency();

$des = "✓ Petz School - Promociones especiales para tu mascota.";
$tit = "Petz School - Promociones";

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

		<!-- Performance-Optimized Resources -->
		<?php 
		$base = "";
		include_once($base . "inc/header-performance.php"); 
		?>

	</head>

   <body id="page-top">

      <div id="preloader">

         <div class="spinner">

            <div class="bounce1"></div>

         </div>

      </div>

		<?php include_once ("inc/nav.php"); ?>

      <section id="adoption" class="pages">

         <div class="jumbotron">

            <div class="jumbo-heading">

               <h2>Promociones</h2>

            </div>

         </div>

         <div class="container">

            <div class="row margin1">

               <div class="col-md-12 margin1">

                  <div id="lightbox">

				  <?php
				  // Configuration for promociones.php - Only courses with offers
				  $courses_to_show = [
					  'diana-fonseca/pasteleria-canina-y-felina',
					  'diana-fonseca/mascotas-sanas',
					  'fabio-gomez-sepulveda/peluqueria-para-perros',
					  'diana-fonseca/petlados',
					  'diana-fonseca/tecnicas-de-decoracion-pasteleria-canina-y-felina',
					  'diana-fonseca/pasteleria-inclusiva-para-perros-y-gatos-enfermos',
					  'diana-fonseca/deshidratados',
					  'pets-space/primeros-auxilios-para-perros',
					  'diana-fonseca/dietas-cocinadas-para-perros',
					  'diana-fonseca/rapi-petlicias',
					  'diana-fonseca/cupido-tambien-es-petfriendly',
					  'diana-fonseca/reposteria-de-halloween',
					  'diana-fonseca/petlicias-navidenas',
					  'diana-fonseca/taller-pascua-para-4patas',
					  'willian-quispe-abarca/costura-canina-y-felina',
					  'alejandro-quiceno/dieta-barf'
				  ];
				  $filter_offers_only = true;
				  include_once("inc/course-renderer.php");
				  ?>

                  </div>

               </div>

            </div>

         </div>

      </section>

		<?php include_once ("inc/footer.php"); ?>

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

		<?php include_once("inc/preventkeys-conditional.php"); ?>
		<?php include_once("inc/analitica-web-conditional.php"); ?>

		<script type="application/ld+json">

			{

				"@type":"BlogPosting",

				"headline":<?= '"' . $tit . '"' ?>,

				"datePublished":<?= '"' . $datePublished . '"' ?>,

				"dateModified":<?= '"' . $dateModified . '"' ?>,

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

				"description":<?= '"' . $des . '"' ?>,

				"image":{

					"@type":"ImageObject",

					"url":"https:\/\/petzschool.com\/img\/<?= $imgShare; ?>",

					"width":600,

					"height":600

				}

			}

		</script>

   </body>

</html>