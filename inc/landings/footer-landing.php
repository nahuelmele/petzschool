    <footer itemscope itemtype="https://schema.org/Organization" aria-labelledby="footer-heading">
        <div class="container">
            <div>
                <div class="text-center">
                    <img 
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="/img/logo-petz-school.png" 
                        class="lazyload" 
                        title="Logo de Petz School" 
                        alt="Logo de Petz School" 
                        width="214" 
                        height="98"						
                        itemprop="logo"
                    />
                </div>
                <div class="text-center">
                    <p itemprop="slogan">"Si pasas tiempo con los animales, corres el riesgo de volverte una mejor persona"</p>
                    <h3>Oscar Wilde</h3>
                </div>
                <div class="text-center">
                    <h3>Síguenos</h3>
                    <div class="social-media" aria-label="Redes Sociales">
                        <a href="https://www.facebook.com/petzschool/" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Petz School" title="Facebook de Petz School" itemprop="sameAs"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/petz.school/" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Petz School" title="Instagram de Petz School" itemprop="sameAs"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="/contacto/<?= ($testPar ? '?test' : '') ?>" target="_blank" rel="noopener noreferrer nofollow noindex" aria-label="Contacto con Petz School" title="Contacto con Petz School" itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="politicasPages">
                <p class="text-center" itemprop="disclaimer">
                    Descargo de responsabilidad: no estamos de ninguna forma afiliados con Facebook o Google. No comercializamos tu información. Todos los testimonios presentados son reales y fueron escritos por usuarios reales, clientes o seguidores de petzschool.com. Por favor tome en cuenta que estos testimonios no representan necesariamente los resultados de los cursos. Éstos pueden variar entre los diferentes miembros debido a las diferencias en el historial individual, la motivación personal y otros factores. El contenido es sólo para fines informativos. Si tiene alguna pregunta por favor no dude en contactarse con nosotros mediante cualquier vía disponible.
                </p>
                <p class="text-center copy">
                    Copyright <span itemprop="copyrightYear"><?= $y ?></span> - petzschool.com. <span>Todos los Derechos Reservados.</span>
                </p>

                <nav class="text-center" aria-label="Enlaces de Políticas">
                    <button class="fancyboxfooter" data-href="/paginas/politica-de-privacidad.html" aria-label="Política de Privacidad" itemprop="legalName">Política de Privacidad</button>
                    <button class="fancyboxfooter" data-href="/paginas/aviso-legal.html" aria-label="Aviso legal" itemprop="legalName">Aviso legal</button>
                    <button class="fancyboxfooter" data-href="/paginas/politica-de-cookies.html" aria-label="Política de cookies" itemprop="legalName">Política de cookies</button>
                </nav>
            </div>
        </div>
    </footer>



	<?php include_once ($base . "inc/landings/page-top.php"); ?>

	<?php include_once ($base . "inc/landings/whatsapp.php"); ?>

	<?php include_once ($base . "inc/landings/proof.php"); ?>

	<?php include_once ($base . "inc/landings/countdown-actualizacion.php"); ?>

	<?php include_once ($base . "inc/landings/descuento.php"); ?>

	<?php include_once ($base . "inc/landings/schema.php"); ?>