<?php
//ob_start();
error_reporting(0);
session_start();

/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_DATABASE', 'demo_paypal');
define('DB_PASSWORD', '');
define("BASE_URL", "http://localhost/PHP-PayPal-ExpressCheckout/");

define('PRO_PayPal', 0); //0 sandbox

if(PRO_PayPal){
	define("PayPal_CLIENT_ID", "#########################");
	define("PayPal_SECRET", "###################");
	define("PayPal_BASE_URL", "https://api.paypal.com/v1/");
}
else{
	define("PayPal_CLIENT_ID", "ASOEtcVamdxq-btySDG0jSieTguFzysI8W_4DFJAe9cKyCtHbqbllD5_JSkTFGMIVoeqiWjIBJ1U_RoY");
	define("PayPal_SECRET", "EOCdzIaOFyP39p77Fv8IynRM4_3aSN6DmmKFAdKcU45hJhr6nlNvTgAv7VAjadIg12Yo_I7cWgmrLS6M");
	define("PayPal_BASE_URL", "https://api.sandbox.paypal.com/v1/");
}



function getDB() 
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbConnection->exec("set names utf8");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
}
?>