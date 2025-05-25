<div id="owl-muestras" class="owl-carousel" itemscope itemtype="https://schema.org/ImageGallery">
    <?php for ($i = 1; $i <= $muestras; $i++) { ?>
    <a href="/img/landings/<?= $dirLanding ?>/muestras-de-alumnas/muestras-alumnas-<?= $i ?>-big.jpg" rel="casosexito" aria-label="Muestras de Alumnas de <?= $nombredelcurso ?>, imagen <?= $i ?>" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
        <img 
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="/img/landings/<?= $dirLanding ?>/muestras-de-alumnas/muestras-alumnas-<?= $i ?>.jpg" 
            class="img-rounded lazyload"  
            alt="Muestras de <?= $nombredelcurso ?>" 
            width="350" 
            height="350"
            itemprop="contentUrl"
        />
        <figcaption itemprop="caption description" class="visually-hidden">Muestras de Alumnas de <?= $nombredelcurso ?>, imagen <?= $i ?></figcaption>
    </a> 
    <?php } ?>
</div>