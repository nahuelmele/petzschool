<?php if ($timer && $update) { ?>		

<section id="countdown" aria-labelledby="countdown-heading">
    <h2 id="countdown-heading" class="visually-hidden">Cuenta Regresiva para Acceso al Curso</h2>
    
    <div itemscope itemtype="https://schema.org/Action">
        <meta itemprop="name" content="Acceso Limitado al Curso">
        <meta itemprop="endTime" content="<?= date('Y-m-d\TH:i:s', strtotime('today 23:59:59')) ?>">
        <link itemprop="target" href="<?= CURRENTURL ?>#comprar">
        
        <h3>
            <span>Cerramos Accesos en</span>
            <span id="timer" aria-live="assertive" itemprop="description"></span>
        </h3>
    </div>

	<h4 id="update">
		<u><b>NUEVA</b></u> Actualización Oficial <b itemprop="startDate"><?= $mes ?></b>, <b itemprop="startDate"><?= $y ?></b>						
	</h4>

</section>	
		
<?php } elseif (!$timer && $update) { ?>
		
<section id="actualizacion" aria-labelledby="actualizacion-heading">
    <h2 id="actualizacion-heading" class="visually-hidden">Actualización Oficial del Curso</h2>
    
    <h3 id="update">
        <u><b>NUEVA</b></u> Actualización Oficial <b><?= $mes ?> <?= $y ?></b>
    </h3>
</section>

<?php } elseif ($timer && !$update) { ?>
		
<section id="countdown" aria-labelledby="countdown-heading">
    <h2 id="countdown-heading" class="visually-hidden">Cuenta Regresiva para Acceso al Curso</h2>
    
    <div itemscope itemtype="https://schema.org/Action">
        <meta itemprop="name" content="Acceso Limitado al Curso">
        <meta itemprop="endTime" content="<?= date('Y-m-d\TH:i:s', strtotime('today 23:59:59')) ?>">
        <link itemprop="target" href="<?= CURRENTURL ?>#comprar">
        
        <h3>
            <span>Cerramos Accesos en</span>
            <span id="timer" aria-live="assertive" itemprop="description"></span>
        </h3>
    </div>
</section>

			
<?php } ?>	