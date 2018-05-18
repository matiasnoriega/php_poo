<?php
    include 'templates/header.php';
?>

    <section class="container">

        <h1>Formulario de alta de una nueva regi&oacute;n</h1>

        <div class="well">
            <form action="agregarRegion.php" method="post">
                <div class="form-group form-group-lg">
                    <input type="text" name="regNombre" class="form-control" placeholder="Nombre de la regi&oacute;n" required>
                </div>
                <div class="form-group form-group-lg">
                    <input type="submit" value="Agregar Regi&oacute;n" class="btn btn-success">
                    <a href="adminRegiones.php" class="btn btn-default">Volver al Listado de regiones</a>
                </div>
            </form>
        </div>

    </section>

<?php
    include 'templates/footer.php';
?>