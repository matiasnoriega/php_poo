<?php
include 'templates/header.php';
require 'clases/Destino.php';
require 'clases/Region.php';
require 'clases/Conexion.php';

$objRegion = new Region();
$listadoRegiones = $objRegion->listarRegiones();

?>

<section class="container">
    <?php
    if(isset($_POST['submit'])){

        $objDestino = new Destino();
        $resultado = $objDestino->agregarDestino();
        ?>
        <div class="alert alert-<?= ($resultado) ? 'success' : 'danger'?>" role="alert">
          <?= ($resultado) ? 'Agregado con &Eacute;xito' : 'Hubo un Error'?>
        </div>
        <a href="adminDestinos.php" class="btn btn-default">Volver al Listado de Destinos</a>

    <?php } ?>
    <h1>Formulario de alta de una nueva Destino</h1>

    <div class="well">
        <form action="" method="post">
            <div class="form-group form-group-lg">
                <input type="text" name="destNombre" class="form-control" placeholder="Nombre del Destino" required>
            </div>

            <div class="form-group form-group-lg">
                <select class="form-control" name="regID" id="regID">
                    <option value="" disabled selected>Elegir una Regi&oacute;n</option>
                    <?php
                    foreach($listadoRegiones as $region){
                        ?>

                        <option value="<?php echo $region['regID'] ?>"><?php echo $region['regNombre'] ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group form-group-lg">
                    <input type="number" name="destPrecio" class="form-control" placeholder="Precio" required>
                </div>
                <div class="form-group form-group-lg">
                    <input type="number" name="destAsientos" class="form-control" placeholder="Asientos" required>
                </div>
                <div class="form-group form-group-lg">
                    <input type="number" name="destDisponibles" class="form-control" placeholder="Disponibles" required>
                </div>
                <div class="form-group form-group-lg">
                    <input type="submit" name="submit" value="Agregar Región" class="btn btn-success">
                    <a href="adminDestinos.php" class="btn btn-default">Volver al Listado de Destinos</a>
                </div>
            </form>
        </div>

    </section>

    <?php
    include 'templates/footer.php';
    ?>