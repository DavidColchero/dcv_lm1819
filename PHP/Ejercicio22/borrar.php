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

        <title>Borrar</title>
    </head>
    <body>
        <div class="container">
            <?php
                $mail = trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "UTF-8"));

                $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "cursophp")
                    or die("Problemas en la conexión.");

                $registros = mysqli_query($conexion, "SELECT * FROM ALUMNOS WHERE mail = '$mail'")
                    or die("Problemas en la consulta.".mysqli_error($conexion));

                if ($reg = mysqli_fetch_array($registros)) {
                    mysqli_query($conexion, "DELETE FROM ALUMNOS WHERE mail = '$mail'")
                        or die("Problemas en la consulta".mysqli_error($conexion));
                    print "<div class='alert alert-primary' role='alert'>
                                <h3>Alumno borrado</h3>
                            </div>
                            <br/>
                            <form action='index.php'>
                                <input class='btn btn-info' type='submit' value='Volver'>
                            </form>";
                }else {
                    header("Location: index.php?error=Email no encontrado.");
                }

                mysqli_close($conexion);

            ?>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>