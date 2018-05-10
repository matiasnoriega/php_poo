<?php
    include 'templates/header.php';
    require 'clases/Region.php';
    require 'clases/Conexion.php';

    $objRegion = new Region();
    $region = $objRegion->verRegionPorID($_GET['regID']);


?>

    <section class="container">
        
        <?php
    if(isset($_POST['submit'])){
        $resultado = $objRegion->modificarRegion($_GET['regID']);
        ?>
        <div class="alert alert-<?= ($resultado) ? 'success' : 'danger'?>" role="alert">
          <?= ($resultado) ? 'Modificado con &Eacute;xito' : 'Hubo un Error'?>
        </div>
        <a href="adminRegiones.php" class="btn btn-default">Volver al Listado de Regiones</a>

    <?php } ?>

        <h1>Formulario de modificaci&oacute;n de una regi&oacute;n</h1>

        <div class="well">
            <form action="modificarRegion.php" method="post">
                <div class="form-group form-group-lg">
                    <input type="text" name="regNombre" class="form-control" placeholder="" value="<?php echo $region['regNombre'] ?>" required>
                    <input type="hidden" name="regID" value="<?php echo $region['regID'] ?>">
                </div>
                <div class="form-group form-group-lg">
                    <input type="submit" name="submit" value="Modificar Regi&oacute;n" class="btn btn-warning">
                    <a href="adminRegiones.php" class="btn btn-default">Volver al Listado de Regiones</a>
                </div>
            </form>
        </div>

    </section>

<?php
    include 'templates/footer.php';
?>