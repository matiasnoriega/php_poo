<?php
    include 'templates/header.php';
    require('clases/Conexion.php');
    require('clases/Region.php');

	 $objDestino = new Destino();
     $resultado = $objDestino->agregarDestino();
 ?>

    <section class="container">
        <h1>Nombre de la sección</h1>
        <p>desarrollo de la sección</p>
        <div class="alert alert-<?= ($chequeo)? 'success':'danger' ?>" role="alert">Se creo la region <?= $objRegion->getRegNombre(); ?> de ID:<?= $objRegion->getRegID(); ?></div>
    </section>

<?php
    include 'templates/footer.php';
?>