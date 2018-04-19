<?php
	
	$nombre = "Pedro<br>";
	$apellido = "Picapiedras";
	$edad = 35;
	//La variable tiene vida hasta que se cierra el ultimo tag de php, que en este caso seria donde se hace el echo de $nombre

	//unset($nombre);
	function Foo($name){
		echo 'Nombre: ', $name;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Documento</title>
</head>
<body>
	<?php 

		echo $nombre;
		foo($nombre);

	?>
</body>
</html>