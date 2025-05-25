<section id="beneficios" class="bg-pattern" aria-labelledby="beneficios-heading">
    <h2 id="beneficios-heading" class="visually-hidden" >Beneficios del Curso</h2>
    <div class="back768">
        
        <div itemscope itemtype="https://schema.org/Offer">
            <figure>
                <img 
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="/img/ico-check.svg" 
                    class="lazyload"  
                    alt="Check Beneficios" 
                    title="Check Beneficios" 
                    width="48" 
                    height="35"
                    itemprop="image"
                />
                <figcaption itemprop="description" class="visually-hidden">Check Beneficios</figcaption>
            </figure>
            <div>
                <h3 itemprop="name">Acceso ILIMITADO al Campus Virtual.</h3>
                <p itemprop="description">
                    Tendrás acceso ILIMITADO al CAMPUS VIRTUAL donde se encuentran todas las lecciones para que veas y repases CUANDO, DONDE y las veces que QUIERAS.
                </p>
            </div>
        </div>

        <div itemscope itemtype="https://schema.org/Offer">
            <figure>
                <img 
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="/img/ico-check.svg" 
                    class="lazyload"  
                    alt="Check Beneficios" 
                    title="Check Beneficios" 
                    width="48" 
                    height="35"
                    itemprop="image"
                />
                <figcaption itemprop="description" class="visually-hidden">Check Beneficios</figcaption>
            </figure>
            <div>
                <h3 itemprop="name">Actualizaciones ILIMITADAS.</h3>
                <p itemprop="description">
                    <u>No existe un curso con tantos beneficios</u>. La industria es cambiante y <b>queremos que nuestra oferta sea superadora</b>, por eso en esta actualización tendrás derecho a TODAS las futuras actualizaciones.
                </p>
            </div>
        </div>

        <div itemscope itemtype="https://schema.org/Offer">
            <figure>
                <img 
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="/img/ico-check.svg" 
                    class="lazyload"  
                    alt="Check Beneficios" 
                    title="Check Beneficios" 
                    width="48" 
                    height="35"
                    itemprop="image"
                />
                <figcaption itemprop="description" class="visually-hidden">Check Beneficios</figcaption>
            </figure>
            <div>
                <h3 itemprop="name">Acceso ILIMITADO al sistema de preguntas y respuestas.</h3>
                <p itemprop="description">
                    <u>Siempre que tengas una duda estaremos ahí para apoyarte y ayudarte</u>. Estamos comprometidos con tu progreso, por eso tendrás <b>acceso al sistema de preguntas y respuesta de la plataforma educativa</b>.
                </p>
            </div>
        </div>

        <?php 
        
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
            
        ?>

        <div itemscope itemtype="https://schema.org/Offer">
            <figure>
                <img 
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="/img/ico-check.svg" 
                    class="lazyload"  
                    alt="Check Beneficios" 
                    title="Check Beneficios" 
                    width="48" 
                    height="35"
                    itemprop="image"
                />
                <figcaption itemprop="description" class="visually-hidden">Check Beneficios</figcaption>
            </figure>
            <div>
                <h3 itemprop="name">Acceso al grupo privado de <?= $stringFinal ?>.</h3>
                <p itemprop="description">
                    Acceso al grupo privado de <?= $stringFinal ?> de apoyo y soporte donde podrás despejar dudas en cualquier momento, interactuar con <?= $autor ?> y compartir tus avances junto con el grupo.
                </p>
            </div>
        </div>

        <?php } ?>

    </div>
</section>
