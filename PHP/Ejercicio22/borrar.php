<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Borrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $mail = trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "UTF-8"));

        $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "cursophp")
            or die("Problemas en la conexión.");

        $registros = mysqli_query($conexion, "SELECT * FROM ALUMNOS WHERE mail = '$mail'")
            or die("Problemas en la consulta.".mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "DELETE FROM ALUMNOS WHERE mail = '$mail'")
                or die("Problemas en la consulta".mysqli_error($conexion));
            print "<h3>Alumno borrado.</h3>";
        }else {
            header("Location: inicio.php?error='Email no encontrado.'");
        }




        mysqli_close($conexion);

    ?>
    
</body>
</html>