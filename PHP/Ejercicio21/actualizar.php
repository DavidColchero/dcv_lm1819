<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">

        <title>Actualizar</title>
    </head>
    <body>
        <div class="container">
            <?php
                $identificador = trim(htmlspecialchars($_REQUEST["identificador"], ENT_QUOTES, "UTF-8"));
                $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
                $curso = trim(htmlspecialchars($_REQUEST["curso"], ENT_QUOTES, "UTF-8"));

                $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "cursophp")
                    or die("Problemas en la conexion");

                $registros = mysqli_query($conexion, "UPDATE ALUMNOS SET nombre = '$nombre',
                    codigocurso = $curso WHERE idAlumno = $identificador")
                    or die("Problemas en la actualización:".mysqli_error($conexion));
                
                print "<div class='alert alert-primary' role='alert'>
                            Alumno actualizado!
                        </div>";
        ?>

    <form action="principal.php">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form> 
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>