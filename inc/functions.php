<?php

define("DOMAIN", getDomain());
define("CURRENTURL", currentUrl() );
define("IP", getUserIP() );
define("COEFICIENTE_AR", 1300.08);
define("COEFICIENTE_CO", 4327.52);
define("COEFICIENTE_PE", 3.84);
define("COEFICIENTE_MX", 23.4784);
define("COEFICIENTE_CL", 1168.68);
define("COEFICIENTE_EU", 1.1376);

define("WHATSAPPGLOBAL", "Tengo la siguiente duda ...");

define("PAGOSTODOS", "pagostodos.jpg");

if (isset($_COOKIE['data'])) {
	
	$data = unserialize($_COOKIE['data']);
	
    $countryCode 	= $data[0];
	$city 			= $data[1];
	$region 		= $data[2];
    $continent		= $data[3];
	
} else {
	$ipdata = ipdata( IP );
	
	$countryCode 	= strtolower( $ipdata['geoplugin_countryCode'] );
	$city 		 	= strtolower( $ipdata['geoplugin_city'] );
	$region 		= strtolower( $ipdata['geoplugin_region'] );
    $continent		= strtolower($ipdata['geoplugin_continentCode']);
	
	$expiration = time() + (86400 * 60); // Expires in 60 days
	setcookie("data", serialize( array($countryCode,$city,$region, $continent) ), $expiration, "/");
}

if( isset( $_GET["code"] ) )
	$countryCode = $_GET["code"];

if ($continent == "eu")
	$countryCode = "eu";

define("COUNTRYCODE", $countryCode);
define("CITY", $city);
define("REGION", $region);
	
if(strpos(DOMAIN, ".test") !== false || strpos(DOMAIN, "localhost") !== false){
    $testing = true;
	$faceShow = true;
} else{
    $testing = false;
	$faceShow = false;
}


if(!$testing){

// Start Set the Facebook Conversions API URL

$url = "https://graph.facebook.com/v12.0/700996330520730/events";

// Generate Json code to provide
$submitJson = '{
    "data": [
		{
			"action_source": "website",
			"event_name": "PageView",
			"event_time": ' . time() . ',
			"event_id": "PetzSite",
			"event_source_url": "' . CURRENTURL . '",
			"user_data": {
				"client_ip_address": "' . IP . '",
				"client_user_agent": "' . $_SERVER['HTTP_USER_AGENT'] . '",
				"ct": [
					"'.CITY.'"
				],
				"country": [
					"'.COUNTRYCODE.'"
				],
				"st": [
					"'.REGION.'"
				]
			}
		}
    ]
}';

// Use cURL to send the POST request

$_curl_ = new CurlServer();
$_curl_->post_request($url, $submitJson);

// End Set the Facebook Conversions API URL
}

$dateactual = new DateTime();

$y = $dateactual->format('Y');
$mes = $dateactual->format('m');

$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

if( ( strpos( $mes, "0" ) == 0 ) && ( strpos( $mes,"0" ) !== false ) ){
	$mes = substr( $mes, 1 );
}

$mes = $meses[$mes-1];

$datePublished = datePublished(30);
$dateModified = datePublished(7);


function getLandingData(){
	
	$data = array();
	
	if( COUNTRYCODE == "ar" ){
		
		$currency = getCurrency();
		
		$data = array( 
					"SHOWMEDIOS" => true,
					"IMGBILLET" => "pagostodos-billet-ar.jpg",
					"TEXTMEDIOSPAGO" => ""
					//"TEXTMEDIOSPAGO" => "Pago en efectivo con <b>Pago Fácil</b>, <b>RAPIDPAGO</b>"
				);
		
	}else if (COUNTRYCODE == "cl") {

        $currency = getCurrency();

        $data = array(
            "SHOWMEDIOS" => true,
            "IMGBILLET" => "pagostodos-billet-cl.jpg",
            "TEXTMEDIOSPAGO" => "Pago con <b>SENCILLITO</b>, <b>MACH</b>, <b>SERVIPAG</b>"
        );

    }else if( COUNTRYCODE == "co" ){
		
		$currency = getCurrency();
		
		$data = array( 
					"SHOWMEDIOS" => true,
					"IMGBILLET" => "pagostodos-billet-col.jpg",
					"TEXTMEDIOSPAGO" => "<b>PSE</b>, <b>EFECTY</b>, <b>NEQUI</b>, <b>BANCOLOMBIA</b>"
				);
		
	}else if( COUNTRYCODE == "pe" ){	

		$currency = getCurrency();

		$data = array( 
					"SHOWMEDIOS" => true,
					"IMGBILLET" => "pagostodos-billet-per.jpg",
					"TEXTMEDIOSPAGO" => "Sistema de pago electrónico <b>PAGO EFECTIVO</b>"
				);
				
	}else if( COUNTRYCODE == "mx" ){
		
		$currency = getCurrency();
		
		$data = array( 
					"SHOWMEDIOS" => true,
					"IMGBILLET" => "pagostodos-billet-mx.jpg",
					"TEXTMEDIOSPAGO" => "Sistema de pago electrónico <b>SPEI</b>, <b>OXXO</b>"
				);
				
	}else if (COUNTRYCODE == "eu") {

        $currency = getCurrency();

        $data = array(
            "SHOWMEDIOS" => true,
            "IMGBILLET" => "pagostodos_eu.jpg",
            "TEXTMEDIOSPAGO" => "Pago con <b>Transferencia SEPA</b>, <b>GOOGLE PAY</b>"
        );

    }else{
		
		$data = array( 
					"SHOWMEDIOS" => false,
					"IMGBILLET" => "pagostodos.jpg",
					"TEXTMEDIOSPAGO" => ""
				);
				
	}
	
	return $data;
}

function getCurrency() {




	if( COUNTRYCODE == "ar" || COUNTRYCODE == "co" || COUNTRYCODE == "mx" || COUNTRYCODE == "cl" ){
		
		return "$";
		
	}else if( COUNTRYCODE == "pe" ){	
	
		return "S/";
	
	}else if (COUNTRYCODE == "eu"){

        return "€";

	}else{	

		return "USD";
	}
	
}


function getPrecio($precioendolares,$rounded = null) {
	
	if(empty( $precioendolares ))
		return "";
		
	if( COUNTRYCODE == "ar" ){
		
		if(empty(COEFICIENTE_AR))
			return $precioendolares;
		
		if($rounded === null)
			$rounded = 100;
		
		return number_format( ceil( $precioendolares * COEFICIENTE_AR /$rounded ) * $rounded, 0, ',', '.');
		
	}else if (COUNTRYCODE == "cl") {

        if (empty(COEFICIENTE_CL))
            return $precioendolares;

        if ($rounded === null)
            $rounded = 100;

        return number_format(ceil($precioendolares * COEFICIENTE_CL / $rounded) * $rounded, 0, ',', '.');

    }else if( COUNTRYCODE == "co" ){
			
		if(empty(COEFICIENTE_CO))
			return $precioendolares;	
		
		if($rounded === null)
			$rounded = 100;		

		return number_format( ceil( $precioendolares * COEFICIENTE_CO /$rounded ) * $rounded, 0, ',', '.');
		
	}else if( COUNTRYCODE == "pe" ){	

		if(empty(COEFICIENTE_PE))
			return $precioendolares;	
		
		if($rounded === null)
			$rounded = 10;			
		
		return number_format( ceil( $precioendolares * COEFICIENTE_PE /$rounded ) * $rounded, 0, ',', '.');
	
	}else if( COUNTRYCODE == "mx" ){
		
		if(empty(COEFICIENTE_MX))
			return $precioendolares;	
		
		if($rounded === null)
			$rounded = 10;					

		return number_format( ceil( $precioendolares * COEFICIENTE_MX /$rounded ) * $rounded, 0, ',', '.');
		
	}else if (COUNTRYCODE == "eu") {
        if (empty(COEFICIENTE_EU))
            return $precioendolares;

        if ($rounded === null)
            $rounded = 1;

        return number_format(ceil($precioendolares * COEFICIENTE_EU / $rounded) * $rounded, 0, ',', '.');
    }else{
		return $precioendolares;	
	}
	
}


function datePublished($t){
	$da = new DateTime();
	$stampa = $da->getTimestamp();
	$oneMonth = 60 * 60 * 24 * $t;
	
	$ac = $stampa - $oneMonth;
	
	$datefinalgracias = $da->setTimestamp($ac);
	
	$ymd = $da->format('Y-m-d');
	
	return '"'.$ymd.'"';
}


function ipdata($ip){
	
	$geoplugin_regionName = "";
	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

	$ip_data = [];
    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/
	
	return $ip_data;
	
}


// Enable IP country override when testing locally
function ipfakef(){
$ipfake = "";
//$ipfake = "200.93.240.0"; // URUAGUAY
//$ipfake = "138.186.188.0"; // COLOMBIA
//$ipfake = "131.178.255.255"; // mejico
//$ipfake = "201.219.134.0"; // Chile
//$ipfake = "45.228.139.255"; // paraguay
//$ipfake = "65.173.63.255"; // bolivia
//$ipfake = "2.16.189.255"; // brasil
//$ipfake = "45.224.147.255"; // peru
//$ipfake = "45.71.39.255"; // ecuador
//$ipfake = "190.204.179.38"; // venezuela
//$ipfake = "64.215.120.0"; // panama
//$ipfake = "45.226.67.255"; // costa rica
//$ipfake = "57.75.191.255"; // nicaragua
//$ipfake = "131.72.211.255"; // honduras
//$ipfake = "143.0.105.170"; // el salvador
//$ipfake = "72.252.3.255"; // guatemala
//$ipfake = "138.185.79.255"; // belize
//$ipfake = "45.230.219.255"; // rep dom
//$ipfake = "170.239.15.255"; // haiti
//$ipfake = "57.91.47.255"; // cuba
//$ipfake = "12.41.131.7"; // puerto rico
//$ipfake = "45.62.191.79"; // jamaica
//$ipfake = "74.125.255.255"; // eeuu
//$ipfake = "88.26.241.248"; // españa
	return $ipfake;
}

function getUserIP()
{
    $ipfake = ipfakef();
	
    $ip = '';
	
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
	
	if ( $ipfake != "" ) $ip = $ipfake;
	
    return $ip;
}

function comprimir_pagina($buffer) { 
  $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
  $reemplaza = array('>','<','\\1'); 
  return preg_replace($busca, $reemplaza, $buffer); 
} 



function currentUrl(){
    // Check if HTTPS is on
    $https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    
    // Get the server name (e.g., www.example.com)
    $host = $_SERVER['HTTP_HOST'];
    
    // Get the URI (e.g., /path/to/file)
    $uri = $_SERVER['REQUEST_URI'];
    
    // Concatenate to form the full URL
    $url = $https . '://' . $host . $uri;
    
    return $url;
}

function getDomain(){
	
	$serName = $_SERVER['SERVER_NAME'];
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	
	$serName = $protocol.$serName."/";
	
	return $serName;
};


function comprimir_pagina_landing($buffer) { 

  $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 

  $reemplaza = array('>','<','\\1'); 

  return preg_replace($busca, $reemplaza, $buffer); 

} 


function hashreturn($originalString){

	// Crear un array de reemplazo para caracteres acentuados
	$replaceArray = array(
	'á' => 'a',
	'é' => 'e',
	'í' => 'i',
	'ó' => 'o',
	'ú' => 'u',
	'ü' => 'u',
	'ñ' => 'n',
	// Agrega más caracteres acentuados si es necesario
	);

	// Eliminar espacios, convertir a minúsculas y reemplazar caracteres acentuados
	$processedString = strtolower(str_replace(' ', '', strtr($originalString, $replaceArray)));

	// Eliminar caracteres especiales y signos de puntuación
	$processedString = preg_replace('/[^a-z0-9]/', '', $processedString);

	// Calcular el hash SHA-256
	$sha256Hash = hash('sha256', $processedString);

	return $sha256Hash;
	
}



class CurlServer
{
    private $access_token;

    function __construct()
    {
        $this->access_token = "EAAOmZAXWeu2wBO2vXbRhQPFga57cbzVN3gQRQvN1GnoVFt1RzjHpJxyEXIiwEOwvQbaPuRsVW7pWCyZBa0yawSHSX3KofF99GwVvA40Pb3EjRAhFalbZAC1olLWEFZC1ZARwXgM1UfvlMWmzeyN4YwmCzE5iKKCDnjhP6OjjfPatZCfhhBMZC2qDKg0YnOu1lxLRgZDZD";
    }

    function post_request($url, $submitJson)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $submitJson);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $this->access_token, 'Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);
        $serverReponseObject = json_decode($server_output);
    }
    function get_request($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $this->access_token));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);
        $serverReponseObject = json_decode($server_output);
    }
}

?>