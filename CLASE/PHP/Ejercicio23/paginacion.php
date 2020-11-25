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

        <title>Paginación</title>
    </head>
    <body>
        <div class="container">
            <?php
                if (isset($_REQUEST['posicion'])) {
                    $inicio = $_REQUEST['posicion'];
                }else {
                    $inicio = 0;
                }

                $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "cursophp")
                    or die("Problemas en la conexión.");

                $registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, nombrecurso
                    FROM ALUMNOS AS a
                    INNER JOIN CURSOS AS c
                    ON a.codigocurso = c.idCurso LIMIT $inicio,2")
                        or die("Problemas en la consulta".mysqli_error($conexion));

                $contador = 0;

                while ($reg = mysqli_fetch_array($registros)) {
                    echo "Nombre: " . $reg['nombre']
                    . " - Mail: " . $reg['mail']
                    . " - Curso: " . $reg['nombrecurso'] . "<br/>";
                    $contador++;
                }

                if ($inicio == 0) {
                    echo "Anteriores";
                }else {
                    $anterior = $inicio - 2;
                    echo "<a href='paginacion.php?posicion=$anterior'>Anteriores</a>";
                }

                if ($contador != 2) {
                    echo "Siguientes";
                }else {
                    $siguiente = $inicio + 2;
                    echo "<a href='paginacion.php?paginacion=$siguiente'> Siguientes</a>";
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