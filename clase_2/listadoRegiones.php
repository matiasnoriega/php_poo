<?php 
require('header.php');
require('conexion.php');
$sql = "SELECT regID, regNombre FROM regiones";

$stmt = $link->prepare($sql);
$stmt->execute();

$resultados = $stmt->fetchAll();
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

			foreach ($resultados as $resultado) {
				
				?>
				<tr>
					<td><?php echo $resultado['regID'] ?></td>
					<td><?php echo $resultado['regNombre'] ?></td>
				</tr>

				<?php
			}
			?>
		</tbody>

	</table>
</section>

<?php 
include('footer.php');
?>