<?php 

$url 	   = $_POST['url'];
$dom 	   = $_POST['dom'];
$descuento = $_POST['descuento'];
$test	   = $_POST['testing'];

if( $test ){
	$url 	   = "https://www.instagram.com/";
}

?>

<link rel="stylesheet" media='all' href="https://fonts.googleapis.com/css?family=Lato:400,800&display=swap" />
<link rel="stylesheet" media='all' href="https://fonts.googleapis.com/css?family=Baloo+Thambi&display=swap" />	


<style>

.ClassyCountdownDemo{
	text-align:center;
}

.ClassyCountdown-wrapper > div {
    position: relative;
    width: 100%;
    margin: 15px auto;
    max-width: 120px;
}

.ClassyCountdown-wrapper .ClassyCountdown-value {
    width: 100%;
    line-height: 20px;
    position: absolute;
    font-size: 50px !important;
    top: 50%;
    text-align: center;
    left: 0;
    display: block;
    font-family: 'Baloo Thambi', sans-serif !important;
    color: #108896 !important;
    margin-top: -21px !important;
}

.ClassyCountdown-wrapper .ClassyCountdown-value span{
    font-size: 15px !important;
    font-family: 'Baloo Thambi', sans-serif;
    letter-spacing: 0.4px;
    font-weight: 100 !important;
}


#countD{
	padding: 20px;
	font-family: Lato,sans-serif;
	text-align: center;
}

.redirectPage {
    font-weight: bold;
    font-size: 15px !important;
    color: #108896;
	letter-spacing: 0.4px;
}

.compromiso{
	
}

.compromiso .comproPetz {
    font-family: 'Baloo Thambi', sans-serif;
    font-size: 32px;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    color: #108896;
    letter-spacing: 0.4px;
    position: relative;
    padding-left: 20px;
    margin: 0 auto;
    line-height: 40px;
}

.compromiso .comproPetz:before{
    content: "";
    background: url(<?= $dom; ?>img/ico-huella.svg) no-repeat;
    margin-top: 4px;
    width: 31px;
    height: 28px;
    position: absolute;
    left: unset;
    margin-left: -35px;
}

.compromiso .bajadaPetz {
    font-family: Lato,sans-serif;
    text-align: center;
    margin: 7px auto 18px auto;
    font-weight: bold;
    font-size: 22px !important;
    color: #108896;
    letter-spacing: 0.4px;
    max-width: 355px;
    line-height: 30px;
}

.compromiso .endingPetz {
    text-align: center;
    font-weight: bold;
    font-size: 16px !important;
    color: #108896;
    letter-spacing: 0.4px;
}

.cuponPage{
	
}

.bg-pattern {
	background-color: #ffefd5;
    background-image: url(<?= $dom; ?>img/cartoonbones1.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}



.card {
    width: 90%;
    height: 98px;
    max-width: 320px;
    border-radius: 5px;
    box-shadow: 0 4px 6px 0 rgb(0 0 0 / 20%);
    background-color: #f09f1f;
    padding: 9px 10px;
    position: relative;
    margin: 5px auto 15px auto;
}

.main{
    display: flex;
    justify-content: center;
    padding: 0 10px;
    align-items: center;
}
.card::after {
  position: absolute;
  content: "";
  height: 35px;
  right: -20px;
  border-radius: 40px;
  z-index: 1;
  top: 31px;
  background-color: #ffefd5;
  width: 35px;
}

.card::before {
    position: absolute;
    content: "";
    height: 35px;
    left: -20px;
    border-radius: 40px;
    z-index: 1;
    top: 31px;
    background-color: #ffefd5;
    width: 35px;
}


.co-img{
	border-right: 4px dotted white;
    height: auto;
    left: 0;
    padding-right: 6px;
}

.co-img img {
	width: 78px;
    height: auto;
}

.content h1 {
    font-size: 46px;
    margin-left: 0px;
    color: #ffffff;
    line-height: unset;
    margin-bottom: 0;
    margin-top: -6px;
}

.content h1 span {
    font-size: 20px;
    color: #fff;
}

.content p {
	font-size: 12px;
    color: #fff;
    margin-left: 10px;
    line-height: 14px;
    margin-bottom: 0;
    margin-right: 10px;
    margin-top: -11px;
    letter-spacing: 0.4px;
}

.content p span{
    color: #fff;
    font-weight: bold;
}

.desapli {
    font-weight: bold;
    color: #108896;
    font-size: 18px !important;
    letter-spacing: 0.4px;
}

@media (max-width: 480px){
	
	.content h1{
		font-size: 46px !important;
		text-transform: initial;
		line-height: unset !important;
	}

}


@media (max-width: 420px){

	.card {
		height: 98px;
		width: 100%;
	}

	.content h1 {
		font-size: 42px !important;
		margin-top: -11px;
	}

	.compromiso .comproPetz {
		font-size: 28px;
	}

	.compromiso .bajadaPetz {
		font-size: 19px !important;
		max-width: unset;
		line-height: 26px;
	}

}

@media (max-width: 400px){

	.content p {
		font-size: 11px;
	}
	
}

@media (max-width: 360px){

	.main {
		padding: 0;
	}
		
	.card {
		height: 86px;
	}

	.card::before {
		display:none;
	}

	.card::after {
		display:none;
	}	

	.co-img img {
		width: 60px;
		height: auto;
	}	
	
	#countD {
		padding: 20px 10px;
	}	
	
	.compromiso .comproPetz {
		font-size: 24px;
	}

	.compromiso .comproPetz:before {
		content: "";
		margin-top: 7px;
		width: 24px;
		height: 24px;
		margin-left: -30px;
	}	

	.compromiso .bajadaPetz {
		font-size: 18px !important;
		line-height: 24px;
	}

	.compromiso .endingPetz {
		font-size: 15px !important;
	}

}

@media (max-width: 340px){
	
	.redirectPage {
		font-size: 14px !important;
	}
	
	.card {
		margin: 5px auto 10px auto;
	}	
	
}
</style>

<section id="countD" class="bg-pattern">
	
	<?php if( $descuento != "-" ){ ?>
	<div class="cuponPage">
	
		<div class="desapli">Estamos generando TU cupón</div>
		
		  <div class="card">
			<div class="main">
			  <div class="co-img">
				<img
				  src="<?= $dom; ?>img/logo-petz-school.jpg"
				  alt="Logo Petz Scholl"
				/>
			  </div>
			  <div class="content">
				<h1><?= $descuento ?>% <span>Off</span></h1>
				<p>Válido hasta las <b>00:00 hs</b> del <span class="dia"></span> de <span class="mes"></span> del <span class="ano"></span></p>
			  </div>
			</div>
			
      </div>		
		
	</div>
	<?php } ?>

	<div class="redirectPage">
		Te redigiremos a la pagina de pago en...
	</div>
	
	<div id="countdown18" class="ClassyCountdownDemo"></div>
	
	<div class="compromiso">
		<div class="comproPetz">Compromiso PETZ</div>
		<div class="bajadaPetz">El <b>10% de las ganancias</b> serán <b>donadas a refugios de animales.</b></div>
		<div class="endingPetz">¡Muchas gracias por TU apoyo!</div>
	</div>	
	
</section>

<script src="<?= $dom; ?>js/jquery.min.js"></script>
<script src="<?= $dom; ?>js/jquery.knob.js"></script>
<script src="<?= $dom; ?>js/jquery.throttle.js"></script>

<script src="<?= $dom; ?>js/jquery.classycountdown.js"></script>

<script>
	jQuery(document).ready(function() {
		
		var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
		var meses 	 = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
		var dateNow  = new Date();

		var invdate = new Date(dateNow.toLocaleString('en-US', {
			timeZone: timezone
		}));
		
		var tomyear 	= invdate.getFullYear();
		var tommonth 	= invdate.getMonth();	
		var tomday 		= invdate.getDate()+1;

		jQuery('.dia').text(tomday);
		jQuery('.mes').text(meses[tommonth]);
		jQuery('.ano').text(tomyear);
		
		jQuery('#countdown18').ClassyCountdown({
			theme: "flat-colors-black",
			end: $.now() + 5,		
            onEndCallback: function() {
				window.location.href = <?php echo "'".$url."'" ?>;
            }
		});
	});
</script>