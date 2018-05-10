<?php
include 'templates/header.php';
require 'clases/Destino.php';
require 'clases/Region.php';
require 'clases/Conexion.php';

$objDestino = new Destino();
$destino = $objDestino->verDestinoPorID($_GET['destID']);
$objRegion = new Region();
$listadoRegiones = $objRegion->listarRegiones();
?>

<section class="container">
    <?php
    if(isset($_POST['submit'])){
        $resultado = $objDestino->modificarDestino($_GET['destID']);
        ?>
        <div class="alert alert-<?= ($resultado) ? 'success' : 'danger'?>" role="alert">
          <?= ($resultado) ? 'Modificado con &Eacute;xito' : 'Hubo un Error'?>
        </div>
        <a href="adminDestinos.php" class="btn btn-default">Volver al Listado de Destinos</a>

    <?php } ?>

      <h1>Formulario de modificaci&oacute;n de Destino</h1>

      <div class="well">
        <form action="" method="post">
            <div class="form-group form-group-lg">
                <label for="exampleFormControlSelect1">Nombre</label>
                <input type="text" name="destNombre" class="form-control" placeholder="" value="<?php echo $destino['destNombre'] ?>" required>
                <input type="hidden" name="destID" value="<?php echo $destino['destID'] ?>">
            </div>

            <div class="form-group">
                <label for="regID">Regi&oacute;n</label>
                <select class="form-control form-control-lg" name="regID" id="regID">
                    <option value="" disabled selected>Elegir una Regi&oacute;n</option>
                    <?php
                    foreach($listadoRegiones as $region){
                        ?>

                        <option value="<?php echo $region['regID'] ?>"><?php echo $region['regNombre'] ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group form-group-lg">
                    <label for="exampleFormControlSelect1">Precio</label>
                    <input type="text" name="destPrecio" class="form-control" placeholder="" value="<?php echo $destino['destPrecio'] ?>" required>
                    <input type="hidden" name="destID" value="<?php echo $destino['destID'] ?>">
                </div>
                <div class="form-group form-group-lg">
                    <label for="exampleFormControlSelect1">Asientos</label>
                    <input type="text" name="destAsientos" class="form-control" placeholder="" value="<?php echo $destino['destAsientos'] ?>" required>
                    <input type="hidden" name="destID" value="<?php echo $destino['destID'] ?>">
                </div>
                <div class="form-group form-group-lg">
                    <label for="exampleFormControlSelect1">Disponibles</label>
                    <input type="text" name="destDisponibles" class="form-control" placeholder="" value="<?php echo $destino['destDisponibles'] ?>" required>
                    <input type="hidden" name="destID" value="<?php echo $destino['destID'] ?>">
                </div>
                <div class="form-group form-group-lg">
                    <input type="hidden" name="destID" value="<?php echo $destino['destID'] ?>">
                    <input type="submit" name="submit" value="Modificar Regi&oacute;n" class="btn btn-warning">
                    <a href="adminDestinos.php" class="btn btn-default">Volver al Listado de Destinos</a>
                </div>
            </form>
        </div>

    </section>

    <?php
    include 'templates/footer.php';
    ?>