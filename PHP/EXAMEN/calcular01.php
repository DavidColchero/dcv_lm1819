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

        <title>Ejercico 01</title>
    </head>
    <body>
        <div class="container">
            <!--Realice el siguiente programa. Cree un formulario para calcular
                el área y el perímetro de un rectángulo. En el formulario principal
                deben aparecer dos cajas de texto para indicar la base y la altura
                del rectángulo. Además, añadir un radiobutton para indicar si lo que queremos
                calcular es el área o el perímetro. Cuando se pulse en el botón “Calcular” debe
                mostrar el resultado en la siguiente pantalla.-->

            <?php
                $base = trim(htmlspecialchars(strip_tags($_REQUEST["base"]), ENT_QUOTES, "UTF-8"));
                $altura = trim(htmlspecialchars(strip_tags($_REQUEST["altura"]), ENT_QUOTES, "UTF-8"));
                $tipo = $_REQUEST["tipo"];

                print "La base es: $base cm.<br/>";
                print "La altura es: $altura cm.<br/>";

                if ($tipo == 'area') {
                    $perimetro = ($base+$altura)*2;
                    print "El perímetro del rectángulo es: $perimetro.";
                }else {
                    $area = $base*$altura;
                    print "El área del rectángulo es: $area.";
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