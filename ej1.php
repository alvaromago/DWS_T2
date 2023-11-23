<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1 style="text-align: center;">Ejercicio 1</h1>
    <?php
    $conexion = mysqli_connect("localhost", "root", "");
    if (!$conexion) {
        echo "Error al conectar<br>";
    } else {
        if (mysqli_select_db($conexion, "world")) {
            $consulta = "select name, Population from country order by 1;";
            $resultado = mysqli_query($conexion, $consulta);
    ?>
            <ul>
                <li style=" font-size: 175%; list-style: none; color: crimson; font-weight: 700">COUNTRY & POPULATION</li>
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                ?>
                    <li><?php echo $fila['name'] . ", " . $fila['Population'] . " habitantes."; ?></li>
                <?php
                }
                ?>
            </ul>
    <?php
        } else {
            echo "No se ha podido seleccionar la base de datos<br>";
        }

        if (mysqli_close($conexion)) {

            echo "Conexión cerrada.<br>";
        } else {
            echo "La conexión no se ha podido cerrar<br>";
        }
    }
    ?>
</body>

</html>