<?php
    include('templates/header.php');
    require('clases/Destino.php');
    require('clases/Conexion.php');

    $objDestino = new Destino();
    $listado = $objDestino->listarDestinos();

?>

    <section class="container">
        <h1>Panel de Administración de Destinos</h1>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col" width="10%">#</th>
                <th scope="col">Nombre Destino</th>
                <th scope="col">Region</th>
                <th scope="col">Precio</th>
                <th scope="col">Asientos</th>
                <th scope="col">Disponibles</th>
                <th scope="col" colspan="2">
                    <a class="btn btn-success" href="formAgregarDestino.php">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                     agregar
                    </a>
                </th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($listado as $destino){?>
            <tr>
                <th scope="row"><?php echo $destino['destID'] ?></th>
                <td><?php echo $destino['destNombre'] ?></td>
                <td><?php echo $destino['regNombre'] ?></td>
                <td><?php echo $destino['destPrecio'] ?></td>
                <td><?php echo $destino['destAsientos'] ?></td>
                <td><?php echo $destino['destDisponibles'] ?></td>
                <td>
                    <a class="btn btn-warning" href="formEditarDestino.php?destID=<?php echo $destino['destID'] ?>">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    modificar
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="formEliminarDestino.php?regID=<?php echo $destino['destID'] ?>">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    eliminar
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

    </section>

<?php
    include 'templates/footer.php';
?>