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

<!-- Minimal critical CSS inline - Hero background and navbar if needed -->
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
section#first-scroll.hasMenu {
	padding-top: 150px;
}
@media (max-width: 992px) {
	section#first-scroll.hasMenu {
		padding-top: 165px;
	}
}
@media (max-width: 768px) {
	section#first-scroll {
		padding: 90px 0 25px;
	}
	section#first-scroll.hasMenu {
		padding-top: 150px;
	}
	section#first-scroll h1 {
		font-size: 40px;
		line-height: 47px;
	}
}
@media (max-width: 480px) {
	section#first-scroll.hasMenu {
		padding-top: 140px;
	}
}
@media (max-width: 360px) {
	section#first-scroll.hasMenu {
		padding-top: 130px;
	}
}

<?php if (isset($hayMenu) && $hayMenu): ?>
/* NAVBAR CRITICAL STYLES - COMPLETE INTEGRATION */

/* Bootstrap navbar foundation */
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}
@media (min-width: 768px) {
    .navbar {
        border-radius: 4px;
    }
}

/* Navbar header and toggle */
.navbar-header {
    @media (min-width: 768px) {
        float: left;
    }
}
.navbar-header i.fa-bars {
    color: #ffffff;
}
.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin: 13px 15px 13px 0;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 4px;
    font-size: 35px;
    color: #fff;
    transition: all .2s ease-in-out;
    line-height: 35px;
}
.navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px;
    background-color: #888;
}
.navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px;
}
.navbar-toggle .fa {
    color: #f19f1f;
    font-size: 20px;
}
.navbar-toggle:focus,
.navbar-toggle:hover {
    background: transparent !important;
    outline: 0;
}
@media (min-width: 768px) {
    .navbar-toggle {
        display: none;
    }
}

/* Navbar collapse */
.navbar-collapse {
    padding-right: 15px;
    padding-left: 15px;
    overflow-x: visible;
    -webkit-overflow-scrolling: touch;
    border-top: 1px solid transparent;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
}
.navbar-collapse.in {
    overflow-y: auto;
}
@media (min-width: 768px) {
    .navbar-collapse {
        width: auto;
        border-top: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important;
    }
    .navbar-collapse.in {
        overflow-y: visible;
    }
}

/* Fixed navbar */
.navbar-fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
    border-width: 0 0 1px;
}
@media (min-width: 768px) {
    .navbar-fixed-top {
        border-radius: 0;
    }
}

/* Navbar navigation */
.navbar-nav {
    margin: 7.5px -15px;
}
.navbar-nav > li {
    position: relative;
    display: block;
}
.navbar-nav > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
    line-height: 20px;
}
.navbar-nav > li > a:focus,
.navbar-nav > li > a:hover {
    text-decoration: none;
    background-color: #eee;
}
@media (min-width: 768px) {
    .navbar-nav {
        float: left;
        margin: 0;
    }
    .navbar-nav > li {
        float: left;
    }
    .navbar-nav > li > a {
        padding-top: 15px;
        padding-bottom: 15px;
    }
}
@media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
}

/* Navbar brand */
.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px;
    font-size: 18px;
    line-height: 20px;
}
.navbar-brand:focus,
.navbar-brand:hover {
    text-decoration: none;
}
.navbar-brand img {
    max-height: 40px;
    width: auto;
}
nav .navbar-brand img {
    max-width: 180px;
}
@media (min-width: 768px) {
    .navbar > .container .navbar-brand,
    .navbar > .container-fluid .navbar-brand {
        margin-left: -15px;
    }
}

/* Navigation link styles */
nav a {
    font-size: 17px;
    padding-bottom: 35px !important;
    padding-top: 35px !important;
    transition: all 0.1s ease;
}

/* Custom navbar styles */
.navbar-custom {
    background-color: #fff;
    border-bottom: 1px solid #e7e7e7;
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    letter-spacing: 1px;
}
.navbar-custom .container {
    max-width: 1200px;
}
.navbar-custom .container .navbar-right {
    margin-right: 0;
}
.navbar-custom .navbar-nav > li > a {
    color: #777;
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
}
.navbar-custom .navbar-nav > li > a.current {
    color: #f19f1f;
}
.navbar-custom .nav > .active > a, 
.navbar-custom ul.nav li a:hover {
    background-color: transparent;
    color: #f19f1f;
}
.navbar.navbar-custom.navbar-fixed-top {
    -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
    -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
    transition: background .5s ease-in-out, padding .5s ease-in-out;
}

/* CRITICAL: Main navbar background color from maincolors.css */
.navbar {
    background-color: #F19F1F;
}

/* CRITICAL STYLES FROM style.css */
.navbar-custom .navbar-nav > li > a {
    color: #fff;
    padding: 30px;
    transition: all .2s ease-in-out;
}

.navbar-custom ul.nav li a:hover,
.navbar-custom .nav > .active > a {
    color: #fff;
    padding: 30px;
}

.navbar-custom {
    border: 0px;
    font-family: 'Baloo Thambi', sans-serif;
    font-weight: 400;
}

/* Dropdown functionality - CRITICAL */
.dropdownMenu:hover .dropdown-menu {
    display: block;
}

.dropdownMenu .dropdown-menu {
    min-width: 170px;
}

.dropdown-menu {
    background-color: #F5F3EE;
    border: 1px solid #e7e7e7;
    border-radius: 4px;
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    list-style: none;
    text-align: left;
    background-clip: padding-box;
}

/* Dropdown link styles - UNIFIED */
.navbar ul.dropdown-menu > li > a {
    display: block;
    padding: 13px 10px;
    clear: both;
    font-size: 14.5px !important;
    font-weight: 400;
    line-height: 20px;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    border-radius: 0px;
    padding-top: 20px !important;
    padding-bottom: 20px !important;
    transition: all .2s ease-in-out;
}

.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover,
.navbar-custom ul.nav ul.dropdown-menu li a:hover {
    background-color: #EF5030;
    color: #fff;
    text-decoration: none;
}

nav a {
    font-size: 17px;
    padding-bottom: 35px !important;
    padding-top: 35px !important;
    transition: all 0.1s ease;
}

nav.navbar.shrink a,
nav.navbar.shrinkCustom a {
    font-size: 15px;
    padding-bottom: 20px !important;
    padding-top: 20px !important;
}

/* Additional navbar and form colors */
.nav > li > a:focus {
    background-color: #F19F1F;
}

.form-control:focus {
    border-color: #EF5030;
}

/* Button styles */
.btn {
    box-shadow: inset 9px 0px 0px 0px #F19F1F;
    background-color: #EF5030;
}

/* Special promo button */
nav.navbar ul.navbar-nav .promositem a {
    color: #fff;
    background-image: url(../img/illustrations/pattern.png);
    border-radius: 100%;
    border: 4px solid #fff;
    margin-top: 10px;
    background: #108896;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}

/* Responsive styles */
@media (max-width: 1150px) {
    .navbar-custom .container {
        width: 100%;
        padding-left: 5px;
        padding-right: 5px;
    }
    .navbar-custom .container .navbar-right {
        margin-right: 0;
    }
}

@media (max-width: 992px) {
    .nav > li {
        float: none;
        width: 100%;
    }
    .navbar-brand {
        float: none;
        display: block;
        text-align: center;
        padding: 10px 15px;
        height: auto;
    }
    nav .navbar-brand img {
        max-width: 150px;
    }
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse.collapse {
        display: none !important;
    }
    .navbar-collapse.collapse.in {
        display: block !important;
        overflow-y: auto !important;
    }
    .navbar-right {
        float: none !important;
        margin-right: 0;
    }
    .navbar-nav li {
        float: none;
    }
    nav a {
        padding-bottom: 10px !important;
        padding-top: 10px !important;
    }
    .navbar-custom .container {
        width: 100%;
        padding-left: 5px;
        padding-right: 5px;
    }
    .navbar-custom .container .navbar-right {
        margin-right: 0;
    }
    .dropdownMenu .dropdown-menu {
        display: block !important;
        margin: 5px 0;
    }
    .navbar ul.dropdown-menu > li > a {
        font-size: 15px !important;
        background: #f19f1f;
        padding-top: 12px !important;
        padding-bottom: 12px !important;
        line-height: 10px;
    }
    nav.navbar ul.navbar-nav .promositem a {
        margin-top: 5px;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }
    .navbar-collapse {
        border-top: 1px solid #e7e7e7;
        margin-top: 10px;
        padding-top: 10px;
    }
}

@media (max-width: 480px) {
    .navbar.navbar-custom.navbar-fixed-top {
        min-height: 50px;
    }
}
<?php endif; ?>
</style>

<?php include_once($base . "inc/facebook-critical.php"); ?>

<!-- Carga condicional de preventkeys.js -->
<?php include_once($base . "inc/preventkeys-conditional.php"); ?>

<!-- Emergency fallback script -->

<script>
// Load preloader CSS immediately
var link = document.createElement('link');
link.rel = 'stylesheet';
link.media = 'all';
link.href = '/css/preload.css';
document.head.appendChild(link);

// Pass test mode to JavaScript - CRITICAL for bundle loading
window.PETZ_TEST_MODE = <?= is_test_mode() ? 'true' : 'false' ?>;

// Load preload script but prevent critical CSS reloading
window.CRITICAL_CSS_LOADED = true;
var script = document.createElement('script');
script.src = '/js/preload-landing.js';
script.async = true;
document.head.appendChild(script);
</script> 
