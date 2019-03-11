<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio Classroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
        $conexion = mysqli_connect("localhost", "root", "cursophp") or die("Problemas de conexión");
        $email = mysqli_query($conexion, "SELECT alu.mail from alumnos as alu")
            or die("Problemas en la consulta:".mysqli_error($conexion));

        if () {
            
        }

        while ($mail = mysqli_fetch_array($email)) {
            echo "Código: " . $mail['idAlumno'] . "<br />";
            echo "Nombre: " . $mail['nombre'] . "<br />";
            echo "Email: " . $mail['mail'] . "<br />";
            echo "CodigoCurso: " . $mail['codigocurso'] . "<br />";
        }
        
    ?>
    
</body>
</html>