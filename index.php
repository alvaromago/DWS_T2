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

        // Insertar datos
        $consulta = "insert into profesores (nombreProfesor, apellidosProfesor, emailProfesor) values ('Claudia', 'Palazón Gomez', '98claudia@gmail.com')";
        /**$resultado = mysqli_query($conexion, $consulta);
        $filas_afectadas = mysqli_affected_rows($conexion);
        if ($filas_afectadas > 0) {
            echo "Se han insertado $filas_afectadas registros<br>";
        } else {
            echo "No se ha insertado ningún registro<br>";
        }
         */
        // Consultar datos
        $consulta = "select * from profesores";
        /**$resultado = mysqli_query($conexion, $consulta);
?>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Email</td>
            </tr>

            <?php
            while ($fila = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $fila['idProfesor']; ?></td>
                    <td><?php echo $fila['nombreProfesor']; ?></td>
                    <td><?php echo $fila['apellidosProfesor']; ?></td>
                    <td><?php echo $fila['emailProfesor']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
<?php*/
        // Modificar datos
        $consulta = "update profesores set nombreProfesor='Pablo', apellidosProfesor='González', emailProfesor='pablo@grupostudium.com' where idProfesor = 1";
        /**$resultado = mysqli_query($conexion, $consulta);
        echo "Se han modificado " . mysqli_affected_rows($conexion) . " registros<br>";*/

        //Borrar datos
        /**$consulta = "delete from profesores where idProfesor=1";
        $resultado = mysqli_query($conexion, $consulta);
        echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros<br>";*/

        // Crear base de datos
        $consulta = "create database dws2";
        /**if (mysqli_query($conexion, $consulta)) {
            echo "¡Se ha creado la base de datos!<br>";
        } else {
            echo "Error al crear la base de datos<br>";
        }*/

        // Crear tabla
        $consulta = "create table alumnos (nombreAlumno varchar(40), apellidosAlumno varchar(80))";
        /**if (mysqli_query($conexion, $consulta)) {
            echo "¡Se ha creado la tabla!<br>";
        } else {
            echo "Error al crear la tabla<br>";
        }*/
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
