<?php
    include 'templates/header.php';
?>

    <section class="container">

        <h1>Formulario de alta de una nueva Destino</h1>

        <div class="well">
            <form action="agregarRegion.php" method="post">
                <div class="form-group form-group-lg">
                    <input type="text" name="regNombre" class="form-control" placeholder="Nombre del Destino" required>
                </div>
                <div class="form-group form-group-lg">
                    <input type="submit" value="Agregar Región" class="btn btn-success">
                    <a href="adminDestinos.php" class="btn btn-default">Volver al Listado de Destinos</a>
                </div>
            </form>
        </div>

    </section>

<?php
    include 'templates/footer.php';
?>