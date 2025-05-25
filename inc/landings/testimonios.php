    <?php

	for ($i = 0; $i < count($carouselTestimoniosItems); $i++) {

        $nombre				= $carouselTestimoniosItems[$i]["nombre"];
        $bajada				= $carouselTestimoniosItems[$i]["bajada"];
        $descripcion		= $carouselTestimoniosItems[$i]["descripcion"];
        $nombre_imagen		= $carouselTestimoniosItems[$i]["nombre_imagen"];
        $cantidad_estrellas	= $carouselTestimoniosItems[$i]["cantidad_estrellas"];
			
	?>
	<div itemscope itemtype="http://schema.org/Review" class="review" role="article">
		
		<div>

			<h3 itemprop="author" itemscope itemtype="http://schema.org/Person">
				<span itemprop="name">
					<?= $nombre ?>
				</span>
			</h3>

			<p>
				<?= $bajada ?>
			</p>

			<blockquote itemprop="reviewBody">
				<?= $descripcion ?>
			</blockquote>
							
			<img 
				src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
				data-src="/img/stars.png" 
				class="lazyload" 
				alt="<?= $cantidad_estrellas ?> Stars" 
				role="img" 
				itemprop="reviewRating" 
				itemscope itemtype="http://schema.org/Rating" 
				width="120" 
				height="23"										
			/>

			<meta itemprop="ratingValue" content="<?= $cantidad_estrellas ?>">
				
		</div>	
			
		<div>
			<img 
				src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
				data-src="/img/landings/<?= $dirLanding ?>/opiniones-de-alumnas/<?= $nombre_imagen ?>" 
				class="lazyload" 
				alt="Testimonio de <?= $nombre ?>" 
				width="90" 
				height="90"									
			/>
		</div>

		
	</div>

<?php } ?>