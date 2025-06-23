<?php

header("Cache-Control: no-cache");
include "../inc/functions.php";
//$testing = true;

$datePublished = "2021-06-24";
$dateModified = "2021-06-30";
$imgShare = "share.jpg";
$currency = getCurrency();

$des = "🔥 ¡Diana se volvió LOCA! No encontrarás sus Cursos con más Rebajas que AQUÍ. Ver SUPER Ofertas AHORA, Inscríbete y Ahorra 💸 !Tu Peludo lo va a Amar! ❤️🐾";
$tit = "✓ Todos los Cursos de Diana Fonseca al MEJOR Precio 💸💸";

if (!$testing) {
    ob_start('comprimir_pagina');
}

?><!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?= $tit; ?></title>
    <meta name="description" content="<?= $des ?>" />
    <meta name="author" content="Petz School" />
    <meta name="copyright" content="petzschool.com" />
    <meta name="date" content=<?= $datePublished ?>>
    <meta name="revised" content=<?= $dateModified ?>>
    <link rel="icon" href="/img/favicon32.png" sizes="32x32" />
    <link rel="icon" href="/img/favicon192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/img/favicon180.png" />
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

    <?php include_once ("../inc/nav.php"); ?>

    <section id="adoption" class="pages bg-pattern quienLograr">
        <div class="text-center">
            <h1>Diana Fonseca</h1>
        </div>
        <div class="container margin1">
            <div class="row">
                <div class="col-md-5 imgDiana">
                    <img src="/img/landings/pasteleria-canina-y-felina/diana-fonseca-pasteleria-canina-y-felina.jpg" class="center-block img-rounded  lazyload" alt="Diana Fonseca de Pasteleria Canina y Felina" title="Diana Fonseca de Pasteleria Canina y Felina" width="450" height="450">
                </div>
                <div class="col-md-7 res-margin textint">
                    <div class="pet-adopt-info">
                        <h6>Bio nutricionista</h6>
                        <h6>Experta en nutrición</h6>
                    </div>
                    <p>Experta en nutrición canina y felina, con una <b>certificación como Bio nutricionista</b> de perros y gatos y especializada en <u>repostería artesanal canina y felina</u>. Con más de 9 años de experiencia en el sector de la alimentación natural de animales de compañía.</p>
                    <p><b>Estudió con veterinarios expertos</b> en nutrición canina y felina y en poco tiempo evidenció los cambios notables en la salud, pelaje y estado de ánimo de "Limon", su Beagle, comparándola con otras al ir al parque. En 2015 decidió abrir "Natural Taste", un local dedicado única y exclusivamente a la alimentación natural de perros y gatos.</p>
                    <div class="alert alert-success">
                        <p>Con esta alimentación quiere liberar a nuestras mascotas de la alimentación procesada y en sus propias palabras, <b>"cruel con nuestros hermosos peludos".</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="dianaTitPro">
        <div class="text-center">
            <h2>Mis cursos</h2>
        </div>
    </section>
	
	<section id="adoption" class="pages">
		<div class="container">
			<div class="row margin1">
				<div class="col-md-12 margin1">
					<div id="lightbox">

					<?php
					// Configuration for diana-fonseca/index.php - Only Diana Fonseca courses
					$courses_to_show = [
						'diana-fonseca/pasteleria-canina-y-felina',
						'diana-fonseca/mascotas-sanas',
						'diana-fonseca/petlados',
						'diana-fonseca/tecnicas-de-decoracion-pasteleria-canina-y-felina',
						'diana-fonseca/pasteleria-inclusiva-para-perros-y-gatos-enfermos',
						'diana-fonseca/deshidratados',
						'diana-fonseca/dietas-cocinadas-para-perros',
						'diana-fonseca/rapi-petlicias',
						'diana-fonseca/cupido-tambien-es-petfriendly',
						'diana-fonseca/reposteria-de-halloween',
						'diana-fonseca/petlicias-navidenas',
						'diana-fonseca/taller-pascua-para-4patas'
					];
					include_once("../inc/course-renderer.php");
					?>

					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include_once ("../inc/newsletter.php"); ?>
	<?php include_once ("../inc/footer.php"); ?>
	
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
	#adoption.quienLograr {
		background-image: url(../img/cartoonbones1.png), url(../img/cartoonbones2.png);
		background-repeat: no-repeat, no-repeat;
		background-position: left top, right top;
		background-color: #ffefd5;
		padding: 140px 0 62px;
	}

	#adoption.quienLograr .col-md-5.imgDiana img {
		width: 100%;
		height: auto;
	}

	#adoption.quienLograr h1,
	#dianaTitPro h2 {
		color: #108896;
		font-family: 'Baloo Thambi', sans-serif;
		font-size: 60px;
		line-height: 1em;
		letter-spacing: -0.2px;
		margin-bottom: 35px;
		margin-top: 0;
		position: relative;
	}

	#dianaTitPro {
		padding: 50px 0 0 0;
	}

	#adoption {
		padding: 20px 0 40px;
	}

	#dianaTitPro h2 {
		font-size: 52px;
		text-transform: initial;
		margin-bottom: 0;
	}

	#adoption.quienLograr .col-md-7.textint {
		margin: 14px 0 0 0;
	}

	@media (max-width: 992px) {
		#adoption.quienLograr {
			padding: 104px 0 34px;
		}

		#adoption.quienLograr .col-md-7.textint,
		#adoption.quienLograr .col-md-5 {
			width: 100%;
			float: none;
		}

		#adoption.quienLograr .col-md-7.textint {
			margin: 30px 0 0 0;
		}

		#adoption.quienLograr .container {
			max-width: 600px;
			width: 100%;
			margin: 0 auto;
		}
	}

	@media (max-width: 480px) {
		#adoption.quienLograr h1 {
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

		p {
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
	<script src="/js/jquery-ui.js"></script>
	<script src="/js/custom.js"></script>
	
	<?php include_once("../inc/preventkeys-conditional.php"); ?>
	<?php include_once("../inc/analitica-web-conditional.php"); ?>

	<script type="application/ld+json">
	{
		"@type": "BlogPosting",
		"headline": <?= '"' . $tit . '"' ?>,
		"datePublished": <?= '"' . $datePublished . '"' ?>,
		"dateModified": <?= '"' . $dateModified . '"' ?>,
		"publisher": {
			"@type": "Organization",
			"name": "Petz School",
			"logo": {
				"@type": "ImageObject",
				"url": "https://petzschool.com/img/<?= $imgShare; ?>"
			}
		},
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "https://petzschool.com"
		},
		"author": {
			"@type": "Person",
			"name": "Petz School"
		},
		"description": <?= '"' . $des . '"' ?>,
		"image": {
			"@type": "ImageObject",
			"url": "https://petzschool.com/img/<?= $imgShare; ?>",
			"width": 600,
			"height": 600
		}
	}
	</script>
</body>
</html>
<?php
if (!$testing)
    ob_end_flush();
?>
