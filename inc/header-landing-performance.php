<?php
// Obtener la URL base de manera dinámica
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . $domainName;

// Detectar la imagen de fondo basada en la URL actual
$currentPath = $_SERVER['REQUEST_URI'];
$heroImage = '';

// Auto-detect hero images for all landings
if (strpos($currentPath, 'pasteleria-canina-y-felina') !== false) {
    $heroImage = '/img/landings/pasteleria-canina-y-felina/pasteleria-canina-y-felina.webp';
} elseif (strpos($currentPath, 'deshidratados') !== false) {
    $heroImage = '/img/landings/deshidratados/bg-hero.webp';
} elseif (strpos($currentPath, 'cupido-tambien-es-petfriendly') !== false) {
    $heroImage = '/img/landings/cupido-tambien-es-petfriendly/bg-hero.webp';
} elseif (strpos($currentPath, 'pasteleria-inclusiva') !== false) {
    $heroImage = '/img/landings/pasteleria-inclusiva-para-perros-y-gatos-enfermos/bg-hero.webp';
} elseif (strpos($currentPath, 'rapi-petlicias') !== false) {
    $heroImage = '/img/landings/rapi-petlicias/bg-hero.webp';
} elseif (strpos($currentPath, 'peluqueria-para-perros') !== false) {
    $heroImage = '/img/landings/peluqueria-para-perros/peluqueria-para-perros.webp';
} elseif (strpos($currentPath, 'peluqueria-para-gatos') !== false) {
    $heroImage = '/img/landings/peluqueria-para-gatos/peluqueria-para-gatos.webp';
} elseif (strpos($currentPath, 'dietas-cocinadas-para-perros') !== false) {
    $heroImage = '/img/landings/dietas-cocinadas-para-perros/bg-hero.webp';
} elseif (strpos($currentPath, 'tecnicas-de-decoracion') !== false) {
    $heroImage = '/img/landings/tecnicas-de-decoracion-pasteleria-canina-y-felina/bg-hero.webp';
} elseif (strpos($currentPath, 'mascotas-sanas') !== false) {
    $heroImage = '/img/landings/mascotas-sanas/mascotas-sanas.webp';
} elseif (strpos($currentPath, 'petlados') !== false) {
    $heroImage = '/img/landings/petlados/petlados.webp';
} elseif (strpos($currentPath, 'petlicias-navidenas') !== false) {
    $heroImage = '/img/landings/petlicias-navidenas/petlicias-navidenas.webp';
} elseif (strpos($currentPath, 'reposteria-de-halloween') !== false) {
    $heroImage = '/img/landings/reposteria-de-halloween/reposteria-de-halloween.webp';
} elseif (strpos($currentPath, 'taller-pascua') !== false) {
    $heroImage = '/img/landings/taller-pascua-para-4patas/taller-pascua-para-4patas.webp';
} elseif (strpos($currentPath, 'educanino') !== false) {
    $heroImage = '/img/landings/educanino/educanino.webp';
} elseif (strpos($currentPath, 'dieta-barf') !== false) {
    $heroImage = '/img/landings/dieta-barf/dieta-barf.webp';
} elseif (strpos($currentPath, 'costura-canina-y-felina') !== false) {
    $heroImage = '/img/landings/costura-canina-y-felina/costura-canina-y-felina.webp';
} elseif (strpos($currentPath, 'primeros-auxilios-para-perros') !== false) {
    $heroImage = '/img/landings/primeros-auxilios-para-perros/primeros-auxilios-para-perros.webp';
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">

<title><?= $tit; ?></title>

<link rel="canonical" href="<?= CURRENTURL; ?>" /> 

<meta name="description" content="<?= $des ?>" />

<?php if ($index) { ?>
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<?php } else { ?>
<meta name="robots" content="nofollow, noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<?php } ?>

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
<meta itemprop="image" content="/img/landings/<?= $dirLanding ?>/<?= $imgShare; ?>">		

<meta property="og:type" content="article" />
<meta property="og:title" content="<?= $tit; ?>" />
<meta property="og:url" content="<?= CURRENTURL; ?>" />
<meta property="og:site_name" content="petzschool.com" />
<meta property="og:description" content="<?= $des ?>" />
<meta property="article:published_time" content=<?= $datePublished ?>>
<meta property="article:modified_time" content=<?= $dateModified ?>>			
<meta property="og:image" content="/img/landings/<?= $dirLanding ?>/<?= $imgShare; ?>" />

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?= $tit; ?>">
<meta name="twitter:description" content="<?= $des ?>">
<meta name="twitter:image" content="/img/landings/<?= $dirLanding ?>/<?= $imgShare; ?>">	

<!-- Performance Optimizations -->
<!-- Preconnect to external domains -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://player.vimeo.com">
<link rel="preconnect" href="https://vimeo.com">
<link rel="preconnect" href="https://i.vimeocdn.com">
<link rel="preconnect" href="https://f.vimeocdn.com">
<link rel="preconnect" href="https://connect.facebook.net">
<link rel="preconnect" href="https://www.google-analytics.com">

<!-- DNS prefetch for additional resources -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.gstatic.com">

<!-- Optimize font loading - No visual changes, just performance -->
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"></noscript>
<link rel="dns-prefetch" href="//player.vimeo.com">
<link rel="dns-prefetch" href="//vimeo.com">
<link rel="dns-prefetch" href="//i.vimeocdn.com">
<link rel="dns-prefetch" href="//f.vimeocdn.com">
<link rel="dns-prefetch" href="//hotmart.com">
<link rel="dns-prefetch" href="//pay.hotmart.com">
<link rel="dns-prefetch" href="//graph.facebook.com">
<link rel="dns-prefetch" href="//vumbnail.com">



<?php if ($heroImage): ?>
<!-- Critical image preload with high priority -->
<link rel="preload" as="image" href="<?php echo $baseUrl . $heroImage; ?>" fetchpriority="high">
<?php endif; ?>

<!-- Standard image preload fallback -->
<link rel="preload" as="image" href="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>.webp" fetchpriority="high">

<!-- Load critical CSS immediately to prevent layout shifts -->
<link rel="stylesheet" href="/dist/landingcritical.bundle.css">

<!-- Preload remaining CSS for faster loading -->
<link rel="preload" href="/dist/landing.bundle.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/dist/landing.bundle.css"></noscript>

<!-- Minimal critical CSS inline - Only hero background -->
<style>
section#first-scroll {
	position: relative;
	margin-top: 0;
	padding: 80px 0 40px;
	<?php if ($heroImage): ?>
	background-image: url('<?php echo $baseUrl . $heroImage; ?>');
	<?php else: ?>
	background-image: url("/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>.webp");
	<?php endif; ?>
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
section#first-scroll:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(16, 136, 150, .85);
	z-index: 1;
}
section#first-scroll > div {
	position: relative;
	z-index: 2;
}
section#first-scroll h1 {
	color: white;
	font-size: 57px;
	font-weight: 700;
	letter-spacing: 1px;
	line-height: 66px;
	margin: 30px 0 10px;
	text-align: center;
}
@media (max-width: 768px) {
	section#first-scroll {
		padding: 90px 0 25px;
	}
	section#first-scroll h1 {
		font-size: 40px;
		line-height: 47px;
	}
}
</style>

<?php include_once($base . "inc/facebook-critical.php"); ?>

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

<script>
// Load preloader CSS immediately
var link = document.createElement('link');
link.rel = 'stylesheet';
link.media = 'all';
link.href = '/css/preload.css';
document.head.appendChild(link);

// Load preload script but prevent critical CSS reloading
window.CRITICAL_CSS_LOADED = true;
var script = document.createElement('script');
script.src = '/js/preload-landing.js';
script.async = true;
document.head.appendChild(script);
</script> 