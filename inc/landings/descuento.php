<?php

if (
    (isset($oferta50) && $oferta50) ||
    (isset($oferta65) && $oferta65) ||
    (isset($oferta35) && $oferta35)
) {
    if (!isset($sinOferta) || !$sinOferta) {

?>
		
<section id="descuento" itemscope itemtype="https://schema.org/Offer" aria-labelledby="descuento-heading">
    <h2 id="descuento-heading" class="visually-hidden">Notificación de Descuento de <?= $currency ?> <?= $oferta50Precio ?></h2>
    <div class="alert alert-success" role="alert" itemprop="potentialAction" itemscope itemtype="https://schema.org/TradeAction">
        <button href="#" class="close" data-dismiss="alert" aria-label="Cerrar alerta">
            <span aria-hidden="true">&times;</span>
        </button>
        ¡Has recibido un descuento de <strong><span itemprop="priceCurrency" content="<?= $currency ?>"><?= $currency ?></span> <span itemprop="price" content="<?= $oferta50Precio ?>"><?= $oferta50Precio ?></span>!</strong>
    </div>
</section>

		
<?php

    }
}
	
?>	