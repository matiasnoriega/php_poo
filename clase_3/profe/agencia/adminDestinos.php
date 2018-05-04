<?php
    include 'templates/header.php';
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
            <tr>
                <th scope="row">1</th>
                <td>nombre</td>
                <td>region</td>
                <td>precio</td>
                <td>asientos</td>
                <td>disponibles</td>
                <td>
                    <a class="btn btn-warning" href="formEditarDestino.php?destID=1">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    modificar
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="formEliminarDestino.php?regID=1">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    eliminar
                    </a>
                </td>
            </tr>
            </tbody>
        </table>

    </section>

<?php
    include 'templates/footer.php';
?>