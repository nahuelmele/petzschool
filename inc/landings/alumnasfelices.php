<section id="alumnasfelices" class="bgYellow" aria-labelledby="alumnasfelices-heading">

	<div class="section-heading text-center">
		<h2 id="alumnasfelices-heading">Nuestros alumnos opinan</h2>

        <?php

        $textoAlumnas = "";
        $textoAlumnasBase = 'Mira algunos de los <b class="blockMobile">cientos de mensajes de agradecimiento</b> compartidos';

        if ($g_telegram || $g_facebook || $g_whatsaup) {

            $trueVariables = [];
            $stringFinal = "";

            if ($g_telegram)
                $trueVariables[] = 'Telegram';

            if ($g_facebook)
                $trueVariables[] = 'Facebook';

            if ($g_whatsaup)
                $trueVariables[] = 'WhatsApp';


            $trueCount = count($trueVariables);

            if ($trueCount > 0) {

                if ($trueCount == 1) {

                    $stringFinal = $trueVariables[0];

                } elseif ($trueCount == 2) {

                    $stringFinal = $trueVariables[0] . " y " . $trueVariables[1];

                } else {

                    $stringFinal = implode(', ', array_slice($trueVariables, 0, -1)) . " y " . end($trueVariables);

                }
            }

            $textoAlumnas = $textoAlumnasBase. " en nuestro <u>grupo privado de ". $stringFinal ."</u>.";

        } else {

            $textoAlumnas = $textoAlumnasBase . ".";

        }

        if (!empty($subtitleAlumnas['subtitle']))
            $textoAlumnas = $subtitleAlumnas['subtitle'];
            
        ?>

		<p>
			<?= $textoAlumnas ?>
		</p>

	</div>

    <div id="owl-alumnasfelices" class="owl-carousel" itemscope itemtype="https://schema.org/ImageGallery">
        <?php for ($i = 1; $i <= $alumnasfelices; $i++) { ?>
        <a href="/img/landings/<?= $dirLanding ?>/alumnas-felices/<?= $dirLanding ?>-<?= $i ?>.jpg" rel="alumnasfelices" aria-label="Alumnas felices de <?= $nombredelcurso ?>, imagen <?= $i ?>" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <img 
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-src="/img/landings/<?= $dirLanding ?>/alumnas-felices/<?= $dirLanding ?>-<?= $i ?>.jpg" 
                class="img-rounded lazyload"  
                alt="Alumnas de <?= $nombredelcurso ?>" 
                width="294" 
                height="449"
                itemprop="contentUrl"
            />
            <figcaption itemprop="caption description" class="visually-hidden">Alumnas felices de <?= $nombredelcurso ?>, imagen <?= $i ?></figcaption>
        </a> 
        <?php } ?>
    </div>

</section>