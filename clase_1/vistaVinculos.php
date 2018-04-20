<?php

	require 'Vinculo.php';

	$objLink = new Vinculo();
	$objLink->setUrl('http://www.google.com.ar');
	$objLink->setTexto('Google');

	$objLink2 = new Vinculo();
	$objLink2->setUrl('http://www.yahoo.com.ar');
	$objLink2->setTexto('Yahoo');



?>
<!DOCTYPE html>
<html>
<head>
	<title>Vinculos</title>
</head>
<body>
<ul>
	<li><?php $objLink->crearLink(); ?></li>
	<li><?php $objLink2->crearLink(); ?></li>
</ul>
</body>
</html>