<?php
    include 'templates/header.php';
    require 'clases/Destino.php';
    require 'clases/Region.php';
    require 'clases/Conexion.php';
    
    $objRegion = new Region();
    $listado = $objRegion->listarRegiones();
?>

    <section class="container">

        <h1>Formulario de alta de un nuevo Destino</h1>

        <div class="well">
            <form action="agregarDestino.php" method="post">
                <div class="form-group form-group-lg">
                    <input type="text" name="destNombre" class="form-control" placeholder="Nombre del destino" required>
                </div>
                <div class="form-group form-group-lg">
                    <select name="regID" class="form-control" required>
                        <option value="">Seleccione una región</option>
                    <?php foreach ($listado as $fila){ ?>    
                        <option value="<?php echo $fila['regID']; ?>"><?php echo $fila['regNombre']; ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group form-group-lg input-group">
                    <span class="input-group-addon">$</span>
                    <input type="number" step="any" name="destPrecio" class="form-control" placeholder="Ingrese el precio" required>
                </div>
                <div class="form-group form-group-lg input-group">
                    <span class="input-group-addon">#</span>
                    <input type="number" step="1" name="destAsientos" class="form-control" placeholder="Ingrese cantidad de Asientos Totales" required>
                </div>
                <div class="form-group form-group-lg input-group">
                    <span class="input-group-addon">#</span>
                    <input type="number" step="1" name="destDisponibles" class="form-control" placeholder="Ingrese cantidad de Asientos Disponibles" required>
                </div>
                <div class="form-group form-group-lg">
                    <input type="submit" value="Agregar Destino" class="btn btn-success">
                    <a href="adminDestinos.php" class="btn btn-default">Volver al Listado de Destinos</a>
                </div>
            </form>
        </div>

    </section>

<?php
    include 'templates/footer.php';
?>