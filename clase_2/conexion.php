<?php

$opciones  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$link = new PDO(
	'mysql:host=localhost;dbname=agencia',
	'root',
	'', 
	$opciones);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //para quemarque todos los errores