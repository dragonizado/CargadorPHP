<?php 
	define('URL_PROTOCOL', 'http://');
	define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
	define('URL', URL_PROTOCOL . URL_DOMAIN);
	header("location:".URL);
 ?>