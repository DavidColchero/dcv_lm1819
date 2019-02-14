<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funcion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php
        function calculaHipotenusa($par1, $par2) {
            $hipo = sqrt($par1*$par1 + $par2*$par2);
            return $hipo;
        }

        $cat1 = 12;
        $cat2 = 16;
        $hipotenusa = calculaHipotenusa($cat1, $cat2);

        print "<p>El triángulo de lados $cat1, $cat2 e hipotenusa $hipotenusa</p>"

        //==============================================================================

        //include "biblioteca.php";
        require ("biblioteca.php");

        cabecera("Mi Página");
        pie();
    ?>
    
</body>
</html>