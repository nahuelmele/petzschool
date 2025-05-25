<section id="precio" class="back768" aria-labelledby="precio-heading" itemscope itemtype="https://schema.org/Offer">

    <h2 id="precio-heading" class="visually-hidden">Precios y Beneficios</h2>
    
    <?php if ($oferta50 && !$sinOferta) { ?>      
    
    <div class="oferta50" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
        <p>
            Todo esto tiene un costo regular de <span itemprop="priceCurrency" content="<?= $currency ?>"><?= $currency ?></span> <span itemprop="price"><?= $sinOfertaPrecio ?></span>
        </p>                                                        
        <p>        
            Pero como estamos felices con la última actualización <b><?= $mes ?></b> <b><?= $y ?></b>, queremos darte la bienvenida al curso <b itemprop="itemOffered"><?= $nombredelcurso ?></b> a un precio especial <b>si tomas acción AHORA</b>.
        </p>
        <img 
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="/img/downarrowredlow.png" 
            class="lazyload"  
            alt="Flecha hacia abajo" 
            width="112" 
            height="45"                        
            itemprop="image"
        />
        <h3>Última Actualización <span class="redspa"><?= $mes ?> <?= $y ?></span></h3>
        <h4>50% OFF</h4>
    </div>
    <?php } ?>
    
    <div class="generalinfo" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
        <img 
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="/img/landings/<?= $dirLanding ?>/<?= $dirLanding ?>-cover.jpg" 
            class="lazyload" 
            title="<?= $nombredelcurso ?> de <?= $autor ?>" 
            alt="<?= $nombredelcurso ?> de <?= $autor ?>" 
            width="748" 
            height="409"
            itemprop="image"
        />
        
        <?php if ($oferta50 && !$sinOferta) { ?>                        
        <h3>Pago único <strike><span itemprop="priceCurrency" content="<?= $currency ?>"><?= $currency ?></span> <span itemprop="price"><?= $sinOfertaPrecio ?></span></strike></h3> 
        <?php } ?>
        
        <?php if ($sinOferta) { ?>    
        <h4><span itemprop="priceCurrency" content="<?= $currency ?>"><?= $currency ?></span> <span itemprop="price"><?= $sinOfertaPrecio ?></span></h4>
        <?php } else if ($oferta50) { ?>        
        <h4><span itemprop="priceCurrency" content="<?= $currency ?>"><?= $currency ?></span> <span itemprop="price"><?= $oferta50Precio ?></span></h4>
        <?php } ?>
        
        <div class="main-cta">
            <?php if ($modalMesageCheckout) { ?>
            <a id="modalMesageCheckoutButon" data-fancybox-type="ajax" href="../checkout.php" data-cupon="<?= $descuentoCupon ?>" data-dom="/" data-test="<?= $testPar ?>" data-redirect="<?= $linkProducto ?>" rel="nofollow" aria-label="Comprar ahora">
                ¡Sí, lo quiero AHORA!
            </a>                
            <?php } else { ?>
            <a href="<?= $linkProducto ?>" target="_blank" rel="noopener noreferrer nofollow" aria-label="Comprar ahora">
                ¡Sí, lo quiero AHORA!
            </a>
            <?php } ?>
            <p><b>SIN RIESGOS</b>. Pruébanos por 7 días</p>
        </div>
        
        <div class="formas-de-pago">
            <?php if ($puedesAbonarCon) { ?>
            <div class="lista-de-pagos">
                <p>Puedes abonar con</p> 
                <ul>
                    <?php if ($textCuotas != "") { ?>
                    <li><?= $textCuotas ?></li>
                    <?php } ?>    
                    <?php if ($pagoEfe != "") { ?>
                    <li><?= $pagoEfe ?>.</li>
                    <?php } ?>
                    <li>Tarjeta de débito, Paypal.</li>
                </ul>        
            </div>
            <?php } ?>                        
            <img 
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-src="/img/<?= $imgpagosFinal ?>" 
                class="asdapagos lazyload" 
                title="Formas de Pago Seguras a Través de Hotmart" 
                alt="Formas de Pago Seguras a Través de Hotmart" 
                width="400" 
                height="130"                                    
                itemprop="image"
            />
            
            <?php if ($oferta50 && !$sinOferta) { ?>
            <div class="oferta50-cupos">
                <p>Cupos confirmados</p>
                <div id="progressbar"><div>83%</div></div>
                <p><span class="redspa">50 Cupos</span> Disponibles</p>
            </div>
            <?php } ?>
            
            <div class="caracteristicas">
                <?php if ($currency == "USD") { ?>
                <div>
                    <p>El precio lo expresamos en dólares americanos, porque el curso se vende en toda LATAM, pero no te preocupes que en la página de pago lo abonarás con tus medios y moneda local.</p>
                </div>                
                <?php } ?>
                <div>
                    <p>Luego de realizar el pago, revisa tu casilla de correo donde recibirás los datos de acceso. Verifica también tu <b>carpeta de SPAM</b>.</p>
                </div>
            </div>
        </div>
    </div>    
</section>
