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
		

		<script>

			var link = document.createElement('link');
			link.rel = 'stylesheet';
			link.media = 'all';
			link.href = '/css/preload.css';
			document.head.appendChild(link);


			var script = document.createElement('script');
			script.src = '/js/preload-landing.js';
			document.head.appendChild(script);

		</script>