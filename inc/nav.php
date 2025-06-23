	  <nav class="navbar navbar-custom navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
               <i class="fa fa-bars"></i>
               </button>
               <div class="navbar-brand navbar-brand-centered">
				<h1>		
                  <a href="<?= get_link('/') ?>"  >
                     <img src="/img/logo-petz-school.png" class="img-responsive" alt="Petz School - Programas y didácticos para mimar a tus mascotas" title="Petz School - Programas y didácticos para mimar a tus mascotas" >
                  </a>
				</h1>  
               </div>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
               <ul class="nav navbar-nav">
                  <li><a href="<?= get_link('/') ?>" class="<?php echo ( $_SERVER['REQUEST_URI'] == "/" ) ? "current" : ""; ?>" >Inicio</a></li>
				  <li class="dropdownMenu">
					<a href="<?= get_link('/instructores/') ?>" class="<?php echo ( strpos( CURRENTURL, "instructores" ) !== false ) ? "current" : ""; ?>" >
						Instructores
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
                        <li>
							<a href="<?= get_link('/diana-fonseca/') ?>" >
								Diana Fonseca
							</a>							
						</li>
						<li>
							<a href="<?= get_link('/fabio-gomez-sepulveda/') ?>" >
								Fabio Sepulveda
							</a>							
						</li>
                     </ul>
					</li>
				  <li><a href="<?= get_link('/programas/') ?>" class="<?php echo ( strpos( CURRENTURL, "programas" ) !== false ) ? "current" : ""; ?>" >Programas</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?= get_link('/contacto/') ?>" class="<?php echo ( strpos( CURRENTURL, "contacto" ) !== false ) ? "current" : ""; ?>" >Contacto</a></li>
				  <li class="promositem"><a href="<?= get_link('/promociones/') ?>" class="<?php echo ( strpos( CURRENTURL, "promociones" ) !== false ) ? "current" : ""; ?>" >Promos</a></li>
               </ul>
            </div>
         </div>
      </nav>