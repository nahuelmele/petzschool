      <footer>
         <div class="container">
		 
			<div class="row">
				<div class="col-md-4 text-center">
				   <img src="/img/logo-petz-school.png" title="Logo de Petz School" alt="Logo de Petz School" class="center-block img-responsive">
				</div>
				<div class="col-md-4 text-center res-margin">
					<p>"Si pasas tiempo con los animales, corres el riesgo de volverte una mejor persona"</p>
					<h5>Oscar Wilde</h5>
				</div>
				<div class="col-md-4 text-center res-margin">
				   <h5>Síguenos</h5>
				   <div class="social-media">
					  <a href="https://www.facebook.com/petzschool/" target="_blank" title="Facebook de Petz School"><i class="fa fa-facebook"></i></a>
					  <a href="https://www.instagram.com/petz.school/" target="_blank" title="Instagram de Petz School"><i class="fa fa-instagram"></i></a>
					  <a href="/contacto/<?= ( $testPar ? '?test' : '') ?>" target="_blank" title="Contacto con Petz School"><i class="fa fa-envelope"></i></a>
				   </div>
				</div>
			</div>
			
			<div class="row politicasPages">

				<p class="text-center res-margin">
					Copyright <?= $y ?> - petzschool.com - Todos los Derechos Reservados.
				</p>
	
				<nav class="text-center res-margin" >
					<a class="fancyboxfooter"  data-fancybox-type="iframe" href="/paginas/politica-de-privacidad.html" rel="noindex,nofollow" >Política de Privacidad</a>
					<a class="fancyboxfooter"  data-fancybox-type="iframe" href="/paginas/aviso-legal.html" rel="noindex,nofollow" >Aviso legal</a>
					<a class="fancyboxfooter"  data-fancybox-type="iframe" href="/paginas/politica-de-cookies.html" rel="noindex,nofollow" >Política de cookies</a>
				</nav>
				
			</div>			
			
         </div>
			
         <div class="credits col-md-12 text-center">
            <div class="page-scroll hidden-sm hidden-xs">
               <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
            </div>
         </div> 

		<section id="wabuton" aria-labelledby="whatsapp-heading" itemscope itemtype="https://schema.org/ContactPoint">
			<h2 id="whatsapp-heading" class="visually-hidden">Contacto por WhatsApp</h2>
			<a href="https://api.whatsapp.com/send?phone=17602270917&text=<?php echo urlencode(WHATSAPPGLOBAL); ?>" rel="noopener noreferrer nofollow noindex" target="_blank" aria-label="Enviar mensaje por WhatsApp" itemprop="contactType">
				<img src="/img/whatsapp.svg" alt="botón de WhatsApp" title="botón de WhatsApp" itemprop="logo">
			</a>
		</section>
		 
      </footer>