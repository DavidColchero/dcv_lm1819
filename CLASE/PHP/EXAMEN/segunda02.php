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

        <title>Ejercico 02</title>
    </head>
    <body>
        <div class="container">
            <!--Realice el siguiente programa. En la primera pantalla se debe solicitar el nombre al
                usuario. Este nombre debe quedar guardado en sesión. En la segunda pantalla debe
                solicitar su peso y su altura. En la tercera pantalla debe mostrar el siguiente mensaje
                con su nombre en función de su índice de masa corporal (imc).
                    IMC = peso (kg) / altura² (metros)
                    imc < 18.5 -> "BAJO PESO"
                    imc >= 18.5 y imc <= 24.9 -> "NORMAL"
                    imc >= 25 y imc <= 29.9 -> "SOBREPESO
                    imc > 29.9 -> "OBESIDAD"-->

            <?php
                $peso = trim(htmlspecialchars($_REQUEST["peso"], ENT_QUOTES, "UTF-8"));
                $altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));
                
                $imc = $peso/($altura^2);

                print "$imc<br/><br/>";

                if ($imc < 18.5 ) {
                    print "BAJO PESO";
                }else if ($imc >= 18.5) && ($icm <= 24.9) {
                    print "NORMAL";
                }else if ($icm >= 25) && ($icm <= 29.9) {
                    print "SOBREPESO";
                }else if ($icm > 29.9) {
                    print "SOBREPESO";
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