<?php

function obtenerServicios(): array {

    try {
        //Importar una conexión
        require 'includes/database.php';

        //Escribir codigo SQL

        $consulta = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $consulta);


        //Obtener el resultado
        // echo "<pre>";
        // var_dump(mysqli_fetch_assoc($consulta)); // fetch_all nos retorna todo // fetch_array fetch_assoc
        // echo "</pre>";
        $i = 0;       
        $servicios = [];
        //Obtener los resultados
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }

        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}
