<?php
// Abrir conexión
$conexion = mysqli_connect("localhost", "root", "");
if (!$conexion) {
    echo "Error al conectar<br>";
} else {
    echo "Conexión correcta!<br>";

    // Seleccionar base de datos
    if (mysqli_select_db($conexion, "dws")) {
        echo "Se ha seleccionado la base de datos correctamente!<br>";
    } else {
        echo "No se ha podido seleccionar la base de datos<br>";
    }


    // Cerrar conexión
    if (mysqli_close($conexion)) {

        echo "Conexión cerrada.<br>";
    } else {
        echo "La conexión no se ha podido cerrar<br>";
    }
}
