<?php

   	// opciones de charset
	$opciones  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

	$link = new PDO(
					 'mysql:host=localhost;dbname=agencia',
					 'root',
					 '', 
					 $opciones);
	
	$sql = "SELECT regID, regNombre FROM regiones";

	$stmt = $link->prepare($sql);
	$stmt->execute();

	//$resultado = $stmt->fetch();
    $resultado = $stmt->fetchAll();

    foreach($resultado as $region){
        echo $region['regID'], " ", $region['regNombre'], "<br>";
    }

