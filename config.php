<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/ecommerce/");
	$config['dbname'] = 'lojavirtual';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'willian';
	$config['dbpass'] = 'Will*081596';
} else {
	define("BASE_URL", "http://localhost/ecommerce/");
	$config['dbname'] = 'lojavirtual';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'willian';
	$config['dbpass'] = 'Will*081596';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>