<?php 
include('header.php');
?>

<section class="container">
	<h1>Plantilla</h1>

	<table class="table table-stripped table-dark">
		<thead>
			<tr>
				<th>regID</th>
				<th>regNombre</th>
			</tr>
		</thead>
		<tbody>
			<?php

			$opciones  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			$link = new PDO(
				'mysql:host=localhost;dbname=agencia',
				'root',
				'', 
				$opciones);
			$sql = "SELECT regID, regNombre FROM regiones";

			$stmt = $link->prepare($sql);
			$stmt->execute();

			$resultados = $stmt->fetchAll();

			foreach ($resultados as $resultado) {
				
				echo '<tr><td>', $resultado['regID'], '</td><td>', $resultado['regNombre'], '</td></tr>';
			}


			?>
			</tbody>

		</table>
	</section>

	<?php 
	include('footer.php');
	?>