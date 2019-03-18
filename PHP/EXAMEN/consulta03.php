<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">

        <title>Ejercico 03</title>
    </head>
    <body>
        <div class="container">
            <!--Realice el siguiente ejercicio de BD. Muestre un formulario para rellenar una
                caja de texto con el nombre de un país. Al pulsar el botón “Buscar” realice una
                consulta a la base de datos “bdpersonas” en la tabla “personas” para mostrar
                todas las personas de ese país. Si no existe el país en la base de datos, mostrar
                un mensaje indicandolo. -->
            <table class="table table-striped">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">País</th>
                </tr>

                <?php
                    $pais = trim(htmlspecialchars($_REQUEST["pais"], ENT_QUOTES, "UTF-8"));

                    $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "bdpersonas") 
                        or die("Problemas de conexión");
                
                    $registros = mysqli_query($conexion, "SELECT * FROM personas WHERE pais LIKE '$pais'")
                        or die("Problemas en el select".mysqli_error($conexion));

                    while ($reg = mysqli_fetch_array($registros)) {
                        print '
                        <tr>
                            <th scope="row">' . $reg['id'] . '</th>
                            <td>' . $reg['nombre'] . '</td>
                            <td>' . $reg['pais'] . '</td>
                        </tr>';
                    }
                ?>
            </table>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>