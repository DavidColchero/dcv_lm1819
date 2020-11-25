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

        <title>Datos</title>
    </head>
    <body>
        <div class="container">
            <?php
                $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

                $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "cursophp")
                    or die("Problemas en la conexión");

                $registro = mysqli_query($conexion, "SELECT * FROM ALUMNOS WHERE mail = '$email'")
                    or die("Problemas en la consulta:".mysqli_error($conexion));

                if ($reg = mysqli_fetch_array($registro)) {
            ?>

            <form action="actualizar.php" method="POST">
                <table>
                    <tr>
                        <td></td>
                        <td><input type="hidden" name="identificador" id="identificador"
                                value="<?php echo $reg['idAlumno']; ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="nombre">Nombre: </label></td>
                        <td><input type="text" name="nombre" id="nombre"
                                value="<?php echo $reg['nombre']; ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="email">Email: </label></td>
                        <td><input type="email" name="email" id="email"
                                value="<?php echo $reg['mail']; ?>" readonly></td>
                    </tr>

                    <tr>
                        <td><label for="curso">Curso: </label></td>
                        <td><select name="curso" id="curso">
                                <?php
                                    $regcursos = mysqli_query($conexion, "SELECT * FROM CURSOS")
                                        or die("Problemas en la consulta:".mysqli_error($conexion));

                                    while ($regc = mysqli_fetch_array($regcursos)) {
                                        if ($regc['idCurso'] == $reg['codigocurso']) {
                                            echo "<option value='$regc[idCurso]' selected>$regc[nombreCurso]</option>";
                                        }else {
                                            echo "<option value='$regc[idCurso]'>$regc[nombreCurso]</option>";
                                        }
                                    }
                                ?>
                            </select></td>
                    </tr>
                </table>
                <br/>
                <input class="btn btn-success" type="submit" value="Actualizar">    
            </form>
            <br/>
            <form action="principal.php">
                <input class="btn btn-primary" type="submit" value="Volver">
            </form>

            <?php
                }else {
                    print "<p>Email no encontrado en la BD</p>";
                }
            ?>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>