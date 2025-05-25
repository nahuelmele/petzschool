<div class="container">
    <?php

    $currencyVal = $currency;
    
    foreach ($bonos as $index => $bono):

        if ($bono['precio'] == "Invaluable")
            $currency = "";
    
    ?>
        <div itemscope itemprop="hasOfferCatalog" itemtype="https://schema.org/OfferCatalog">
            <meta itemprop="name" content="Bono #<?= $index + 1 ?>">
            <div class="offer" itemscope itemprop="itemListElement" itemtype="https://schema.org/Offer">
                <img 
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="/img/landings/<?= $dirLanding ?>/<?= $bono['img'] ?>" 
                    class="lazyload"  
                    alt="<?= $bono['alt'] ?>" 
                    width="243" 
                    height="243"
                    itemprop="image"
                    loading="lazy"
                />
                <h3>HOY GRATIS</h3>
                <p itemprop="priceCurrency" content="<?= $currency ?>"><span itemprop="price"><?= $currency ?> <?= $bono['precio'] ?></span></p>
                <p>
                    <span>BONO #<?= $index + 1 ?></span>
                    <?= $bono['descripcion'] ?>
                </p>
            </div>
        </div>
    <?php 
    
    endforeach;

    $currency = $currencyVal;
    
    ?>
</div>