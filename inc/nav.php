	  <nav class="navbar navbar-custom navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
               <i class="fa fa-bars"></i>
               </button>
               <div class="navbar-brand navbar-brand-centered">
				<h1>		
                  <a href="/<?= ( $testPar ? '?test' : '') ?>"  >
                     <img src="/img/logo-petz-school.png" class="img-responsive" alt="Petz School - Programas y didácticos para mimar a tus mascotas" title="Petz School - Programas y didácticos para mimar a tus mascotas" >
                  </a>
				</h1>  
               </div>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
               <ul class="nav navbar-nav">
                  <li><a href="/<?= ( $testPar ? '?test' : '') ?>" class="<?php echo ( $_SERVER['REQUEST_URI'] == "/" ) ? "current" : ""; ?>" >Inicio</a></li>
				  <li class="dropdownMenu">
					<a href="/instructores/<?= ( $testPar ? '?test' : '') ?>" class="<?php echo ( strpos( CURRENTURL, "instructores" ) !== false ) ? "current" : ""; ?>" >
						Instructores
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
                        <li>
							<a href="/diana-fonseca/<?= ( $testPar ? '?test' : '') ?>" >
								Diana Fonseca
							</a>							
						</li>
						<li>
							<a href="/fabio-gomez-sepulveda/<?= ( $testPar ? '?test' : '') ?>" >
								Fabio Sepulveda
							</a>							
						</li>
                     </ul>
					</li>
				  <li><a href="/programas/<?= ( $testPar ? '?test' : '') ?>" class="<?php echo ( strpos( CURRENTURL, "programas" ) !== false ) ? "current" : ""; ?>" >Programas</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="/contacto/<?= ( $testPar ? '?test' : '') ?>" class="<?php echo ( strpos( CURRENTURL, "contacto" ) !== false ) ? "current" : ""; ?>" >Contacto</a></li>
				  <li class="promositem"><a href="/promociones/<?= ( $testPar ? '?test' : '') ?>" class="<?php echo ( strpos( CURRENTURL, "promociones" ) !== false ) ? "current" : ""; ?>" >Promos</a></li>
               </ul>
            </div>
         </div>
      </nav>