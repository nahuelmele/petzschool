<?php
// Header for general pages (non-landing)
// Includes Facebook critical inline for perfect API sync
?>
<!-- Resource Hints for Performance -->
<link rel="preconnect" href="https://connect.facebook.net">
<link rel="dns-prefetch" href="https://graph.facebook.com">
<link rel="preconnect" href="https://www.google-analytics.com">


<!-- Facebook Critical - Must load before any bundles -->
<?php include_once($base . "inc/facebook-critical.php"); ?>

<!-- Emergency fallback script -->
<script>
	// Fallback if Facebook critical fails or bundles don't load
	setTimeout(function() {
		if (!window.fbq || typeof window.fbq !== 'function') {
			var script = document.createElement('script');
			script.src = '/js/face.js';
			script.async = true;
			document.head.appendChild(script);
		}
	}, 5000);
</script> 