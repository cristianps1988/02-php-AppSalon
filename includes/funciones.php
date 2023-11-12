<?php

function obtenerServicios()
{
    try {
        // importar credenciales
        require('database.php');

        // Consulta SQL
        $sql = "SELECT * FROM servicios;";

        // Realizar consulta SQL
        $query = mysqli_query($db, $sql);
        return $query;
        // // Acceder a los resultados
        // echo "<pre>";
        // // var_dump($query);
        // var_dump(mysqli_fetch_assoc($query));
        // echo "</pre>";
    } catch (\Throwable $th) {
        echo $th;
    }
};

obtenerServicios();
