<?php
	extract($params);
?>


<?php if ($params['section']): ?>
<section class="callToAction <?= $params['class'] ?>" itemscope itemtype="https://schema.org/CallToAction">
<?php endif; ?>

    <meta itemprop="target" content="#precio">
    <meta itemprop="actionPlatform" content="https://petzschool.com">

    <button class="buttonCallToAction" aria-label="¡Sí, Quiero Inscribirme Ahora!" itemprop="potentialAction" itemscope itemtype="https://schema.org/RegisterAction">
        <meta itemprop="target" content="#precio">
        ¡Sí, Quiero Inscribirme Ahora!
    </button>

	<p class="modActiontxt" itemprop="description">
		<?= $params['text'] ?>
	</p>
			
<?php if ($params['section']): ?>
</section>
<?php endif; ?>