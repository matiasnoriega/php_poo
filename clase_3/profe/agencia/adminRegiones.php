<?php
    include 'templates/header.php';
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
            <tr>
                <th scope="row">1</th>
                <td> Nombre </td>
                <td>
                    <a class="btn btn-warning" href="formEditarRegion.php?regID=1">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    modificar
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="formEliminarRegion.php?regID=1">
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