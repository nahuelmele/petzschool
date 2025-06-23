<?php

// Include performance conditional functions first
require_once(__DIR__ . '/performance-conditional.php');

// Define functions first before using them
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

function ipfakef(){
	
	$ipfake = "";
	
	if( isset($_GET["testpar"]) ){
		$ipfake = "190.85.112.10"; // Colombia
	}else if( isset($_GET["testmx"]) ){
		$ipfake = "187.189.45.10"; // Mexico
	}else if( isset($_GET["testpe"]) ){
		$ipfake = "181.65.189.10"; // Peru
	}else if( isset($_GET["testar"]) ){
		$ipfake = "181.31.158.10"; // Argentina
	}else if( isset($_GET["testcl"]) ){
		$ipfake = "190.98.248.10"; // Chile
	}else if( isset($_GET["testeu"]) ){
		$ipfake = "85.208.96.10"; // Europa
	}
	
	return $ipfake;
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
}

function ipdata($ip){
	
	$ipdata = array();
	
	if( $ip == "190.85.112.10" ){
		$ipdata['geoplugin_countryCode'] = "CO";
		$ipdata['geoplugin_city'] = "Bogotá";
		$ipdata['geoplugin_region'] = "Bogotá D.C.";
	}else if( $ip == "187.189.45.10" ){
		$ipdata['geoplugin_countryCode'] = "MX";
		$ipdata['geoplugin_city'] = "Mexico City";
		$ipdata['geoplugin_region'] = "Mexico City";
	}else if( $ip == "181.65.189.10" ){
		$ipdata['geoplugin_countryCode'] = "PE";
		$ipdata['geoplugin_city'] = "Lima";
		$ipdata['geoplugin_region'] = "Lima";
	}else if( $ip == "181.31.158.10" ){
		$ipdata['geoplugin_countryCode'] = "AR";
		$ipdata['geoplugin_city'] = "Buenos Aires";
		$ipdata['geoplugin_region'] = "Buenos Aires";
	}else if( $ip == "190.98.248.10" ){
		$ipdata['geoplugin_countryCode'] = "CL";
		$ipdata['geoplugin_city'] = "Santiago";
		$ipdata['geoplugin_region'] = "Santiago";
	}else if( $ip == "85.208.96.10" ){
		$ipdata['geoplugin_countryCode'] = "ES";
		$ipdata['geoplugin_city'] = "Madrid";
		$ipdata['geoplugin_region'] = "Madrid";
	}else{
		$response = file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip);
		$ipdata = json_decode($response, true);
	}
	
	return $ipdata;
}

// Now we can safely call these functions
$ip = getUserIP();

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
	
	$countryCode 	= strtolower( $ipdata['geoplugin_countryCode'] ?? '' );
	$city 		 	= strtolower( $ipdata['geoplugin_city'] ?? '' );
	$region 		= strtolower( $ipdata['geoplugin_region'] ?? '' );
    $continent		= strtolower( $ipdata['geoplugin_continentCode'] ?? '' );
	
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
	
// Use centralized test mode detection instead of manual $testing variable
$is_test_mode = is_test_mode();
$is_production_mode = is_production_mode();

// Set legacy variables for backward compatibility
$testing = $is_test_mode;
$faceShow = $is_test_mode;

// Only load Facebook Conversions API in production mode
if ($is_production_mode) {

// Start Set the Facebook Conversions API URL

$url = "https://graph.facebook.com/v12.0/700996330520730/events";

// Get Facebook click ID and browser ID from cookies if available
$fbc = isset($_COOKIE['_fbc']) ? $_COOKIE['_fbc'] : '';
$fbp = isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : '';

// Get synchronized event ID from frontend
$syncedEventId = isset($_COOKIE['fb_pageview_event_id']) ? $_COOKIE['fb_pageview_event_id'] : '';
$pageTitle = isset($_COOKIE['fb_page_title']) ? $_COOKIE['fb_page_title'] : 'Petz School';

// Hash user data as required by Facebook API
$hashedEmail = '';
if (isset($_COOKIE['user_email']) && !empty($_COOKIE['user_email'])) {
    $email = trim($_COOKIE['user_email']);
    if (!empty($email)) {
        $hashedEmail = hash('sha256', strtolower($email));
    }
}

$hashedPhone = '';
if (isset($_COOKIE['user_phone']) && !empty($_COOKIE['user_phone'])) {
    $phone = preg_replace('/[^0-9]/', '', $_COOKIE['user_phone']);
    if (!empty($phone)) {
        $hashedPhone = hash('sha256', $phone);
    }
}

// Create user_data array with hashed values
$userData = array(
    "client_ip_address" => IP,
    "client_user_agent" => $_SERVER['HTTP_USER_AGENT'],
    "ct" => array(hash('sha256', strtolower(CITY ?: 'unknown'))),
    "country" => array(hash('sha256', strtolower(COUNTRYCODE ?: 'unknown'))),
    "st" => array(hash('sha256', strtolower(REGION ?: 'unknown')))
);

// Add optional data if available
if (!empty($fbc)) $userData['fbc'] = $fbc;
if (!empty($fbp)) $userData['fbp'] = $fbp;
if (!empty($hashedEmail)) $userData['em'] = array($hashedEmail);
if (!empty($hashedPhone)) $userData['ph'] = array($hashedPhone);

// Use synchronized event ID from frontend, fallback to generated ID
$eventId = !empty($syncedEventId) ? $syncedEventId : "PetzSite_" . time() . "_" . rand(1000, 9999);

// Generate Json code to provide
$submitJson = array(
    "data" => array(
        array(
            "action_source" => "website",
            "event_name" => "PageView",
            "event_time" => time(),
            "event_id" => $eventId, // Synchronized event ID
            "event_source_url" => CURRENTURL,
            "user_data" => $userData,
            "custom_data" => array(
                "content_type" => "website",
                "page_title" => $pageTitle,
                "referrer" => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''
            )
        )
    ),
    // "test_event_code" => "TEST12345" // Only for testing, remove in production
);

// Use cURL to send the POST request
$_curl_ = new CurlServer();
$result = $_curl_->post_request($url, json_encode($submitJson));

// Log errors for debugging (optional)
if (!$result['success']) {
    error_log("Facebook Conversions API Error: " . $result['error']);
}

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
	
	$dateactual = new DateTime();
	$dateactual->sub(new DateInterval('P'.$t.'D'));
	$ymd = $dateactual->format('Y-m-d');
	
	return '"'.$ymd.'"';
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
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        
        $server_output = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);
        
        if ($curl_error) {
            return array('success' => false, 'error' => 'cURL Error: ' . $curl_error);
        }
        
        if ($http_code != 200) {
            return array('success' => false, 'error' => 'HTTP Error: ' . $http_code . ' - ' . $server_output);
        }
        
        return array('success' => true, 'data' => $server_output);
    }

    function get_request($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        
        $server_output = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);
        
        if ($curl_error) {
            return array('success' => false, 'error' => 'cURL Error: ' . $curl_error);
        }
        
        if ($http_code != 200) {
            return array('success' => false, 'error' => 'HTTP Error: ' . $http_code . ' - ' . $server_output);
        }
        
        return array('success' => true, 'data' => $server_output);
    }
}

/**
 * Función para generar links internos con manejo automático del parámetro ?test
 * Similar a get_permalink() de WordPress
 * 
 * @param string $path - Ruta relativa del link (ej: "/programas/", "/diana-fonseca/")
 * @param array $params - Parámetros adicionales (opcional)
 * @return string - URL completa con parámetros apropiados
 */
function get_link($path = '/', $params = array()) {
    $base_url = rtrim(getDomain(), '/');
    $path = ltrim($path, '/');
    
    $url = $base_url . '/' . $path;
    
    if (!empty($params)) {
        $query_string = http_build_query($params);
        $url .= '?' . $query_string;
    }
    
    return $url;
}

/**
 * Función helper para imprimir un link interno
 * 
 * @param string $path - Ruta relativa del link
 * @param array $params - Parámetros adicionales (opcional)
 */
function print_link($path = '/', $params = array()) {
    echo get_link($path, $params);
}

/**
 * Función centralizada para detectar si estamos en modo testing/desarrollo
 * 
 * Detecta automáticamente si estamos en:
 * - Parámetro ?test en URL
 * - Variable $testPar = true
 * - Variable $testing = true  
 * - Localhost o dominios .test
 * 
 * @return bool - true si estamos en modo testing, false en producción
 */
// Funciones movidas a performance-conditional.php

/**
 * DEPRECATED: Old compression functions - kept for backward compatibility
 * Use compress_html_advanced() from performance-conditional.php instead
 */
function comprimir_pagina($buffer) { 
    // Use new centralized function
    return compress_html_advanced($buffer);
} 

function comprimir_pagina_landing($buffer) { 
    // Use new centralized function  
    return compress_html_advanced($buffer);
}

/**
 * Enhanced HTML Compression Function
 * More efficient and safer than the original implementation
 */
function compress_html_advanced($buffer) {
    // Don't compress if we're in test mode
    if (is_test_mode()) {
        return $buffer;
    }
    
    // Don't compress if buffer is too small (likely an error page)
    if (strlen($buffer) < 500) {
        return $buffer;
    }
    
    // Save original buffer size for comparison
    $original_size = strlen($buffer);
    
    // Advanced HTML compression with multiple passes
    
    // Pass 1: Remove HTML comments (except IE conditionals and critical comments)
    $buffer = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>|#))(?:(?!-->).)*-->/s', '', $buffer);
    
    // Pass 2: Remove unnecessary whitespace
    $search = array(
        '/\>[^\S ]+/s',                 // Strip whitespace after tags, except space
        '/[^\S ]+\</s',                 // Strip whitespace before tags, except space  
        '/(\s)+/s',                     // Shorten multiple whitespace sequences
        '/\s*\n\s*/',                   // Remove line breaks with surrounding spaces
        '/\s*\r\s*/',                   // Remove carriage returns with surrounding spaces
        '/\s*\t\s*/',                   // Remove tabs with surrounding spaces
    );
    
    $replace = array(
        '>',
        '<', 
        '\\1',
        ' ',
        ' ',
        ' '
    );
    
    $buffer = preg_replace($search, $replace, $buffer);
    
    // Pass 3: Clean up specific HTML elements
    $buffer = preg_replace('/\s+/', ' ', $buffer);                    // Multiple spaces to single space
    $buffer = preg_replace('/>\s+</', '><', $buffer);                 // Remove spaces between tags
    $buffer = str_replace(array(' />', ' />'), '/>', $buffer);        // Clean up self-closing tags
    
    // Pass 4: Final cleanup
    $buffer = trim($buffer);
    
    // Calculate compression ratio for debugging
    $compressed_size = strlen($buffer);
    $compression_ratio = $original_size > 0 ? (($original_size - $compressed_size) / $original_size) * 100 : 0;
    
    // Add compression info as HTML comment in test mode
    if (is_test_mode()) {
        $buffer .= "\n<!-- HTML Compression: " . number_format($compression_ratio, 1) . "% ";
        $buffer .= "(" . number_format($original_size) . " → " . number_format($compressed_size) . " bytes) -->";
    }
    
    return $buffer;
}
?>
