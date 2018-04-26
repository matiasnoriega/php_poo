<?php
    $link = mysqli_connect(
                        'localhost',
                        'root',
                        '',
                        'agencia'
                        );
    mysqli_set_charset($link, 'utf8');
    $sql = "SELECT regID, regNombre
                    FROM regiones";
    $resultado = mysqli_query($link, $sql);

    while( $fila = mysqli_fetch_assoc($resultado) ){

        echo $fila['regID'], ' ', $fila['regNombre'], '<br>';

    }