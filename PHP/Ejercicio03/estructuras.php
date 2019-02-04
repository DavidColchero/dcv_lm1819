<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bucles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php 
        /*for ($i=0; $i < 6; $i++) { 
            print "<p>$i</p>";
        }
    
        for ($i=6; $i >= 6; $i--) { 
            print "<p>$i</p>";
        }

        for ($i=6; $i >= 6; $i--) { 
            if ($i % 2 == 0) {
                print "<p>$i</p>";
            }
        }
        $contador = 0;
        for ($i=6; $i >= 0; $i--) { 
            if ($i % 2 != 0) {
                $contador++;  
            }
        }
        print "<p>$contador</p>";
        
        print "<table>";
        $filas = 3;
        $columnas = 4;
        for ($h = 0; $h <= $filas; $h++) { 
            print "<tr>";
            for ($i = 0; $i <= $columnas; $i++) { 
                print "<td>COLUMNA</td>";
            }
            print "</tr>";
        }

        
        print "</table>";*/

        /* Muestre por pantalla la conversion de euro a peseta */
        /*$pesetas = 166.386;
        for ($i = 1; $i <= 10; $i++) { 
            print "<p>$i € = $pesetas pts</p>";
            $pesetas=$pesetas * 2;
        }*/

        /*Genera un valor aleatorio entre 1 y 100 e indica cuantos digitos tiene*/

        $aleatorio = rand(1, 100);

        if ($aleatorio < 10) {
            print "El número $aleatorio tiene un dígito.";
        } else if ($aleatorio < 100) {
            print "El número $aleatorio tiene dos dígitos.";
        } else {
            print "El número $aleatorio tiene tres dígitos.";
        }


        
    ?>
    
</body>
</html>