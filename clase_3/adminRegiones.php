<?php
include('templates/header.php');
require('clases/Conexion.php');
require('clases/Region.php');

$objRegion = new Region();
$listado = $objRegion->listarRegiones();
?>

<section class="container">
    <h1>Panel de Administración de Regiones</h1>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col" width="10%">#</th>
                <th scope="col" width="65%">Nombre región</th>
                <th scope="col" colspan="2">
                    <a class="btn btn-success" href="formAgregarRegion.php">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        agregar
                    </a>
                </th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($listado as $region){
            ?>
                <tr>
                    <th scope="row"><?php echo $region['regID']; ?></th>
                    <td> <?php echo $region['regNombre']; ?> </td>
                    <td>
                        <a class="btn btn-warning" href="formEditarRegion.php?regID=<?php echo $region['regID']; ?>">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            modificar   
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="formEliminarRegion.php?regID=<?php echo $region['regID']; ?>">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            eliminar
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</section>

<?php
include 'templates/footer.php';
?>