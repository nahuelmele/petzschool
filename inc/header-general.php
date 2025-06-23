<?php
// Header for general pages (non-landing)
// Includes all common resources: Facebook, CSS, JS
?>
<!-- Resource Hints for Performance -->
<link rel="preconnect" href="https://connect.facebook.net">
<link rel="dns-prefetch" href="https://graph.facebook.com">
<link rel="preconnect" href="https://www.google-analytics.com">


<!-- Facebook Critical - Must load before any bundles -->
<?php include_once($base . "inc/facebook-critical.php"); ?>

<!--[if lt IE 9]>
<script src="/js/respond.js"></script>
<![endif]-->

<!-- Common CSS Resources -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">

<!-- Preload CSS and JS -->
<link rel="stylesheet" href="/css/preload.css" media="all" />
<script src="/js/preload.js"></script> 