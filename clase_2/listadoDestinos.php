<?php 
require('header.php');
require('conexion.php');

$sql = "SELECT destID, destNombre, regNombre, destPrecio, destAsientos, destDisponibles FROM destinos, regiones WHERE destinos.regID = regiones.regID";

$stmt = $link->prepare($sql);
$stmt->execute();

$resultados = $stmt->fetchAll();

?>

<section class="container">
	<h1>Plantilla</h1>

	<table class="table table-stripped table-dark">
		<thead>
			<tr>
				<th>C&oacute;digo</th>
				<th>Destino (Aeropuerto)</th>
				<th>Regi&oacute;n</th>
				<th>Precio</th>
				<th>Asientos</th>
				<th>Disponibles</th>
			</tr>
		</thead>
		<tbody>

			<?php
			foreach ($resultados as $resultado) {
				
			?>
				<tr>
					<td><?php echo $resultado['destID'] ?></td>
					<td><?php echo $resultado['destNombre'] ?></td>
					<td><?php echo $resultado['regNombre'] ?></td>
					<td><?php echo $resultado['destPrecio'] ?></td>
					<td><?php echo $resultado['destAsientos'] ?></td>
					<td><?php echo $resultado['destDisponibles'] ?></td>
				</tr>

			<?php
				}
			?>

		</tbody>

	</table>
</section>

<?php 
require('footer.php');
?>