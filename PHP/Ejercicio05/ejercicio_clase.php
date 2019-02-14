<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio extensiones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>

    <?php
        //Una funcion que se le pase el nombre de un fichero y devuelva la
        //extension de ese fichero en mayuscula

        function extensionFichero($nombreFich) {
            $nombre_extension = explode(".", $nombreFich);
            return strtoupper($nombre_extension[1]);
        }

        $fichero = "imagen.png";
        $ext = extensionFichero($fichero);
        print "<p>La extensión del archivo $fichero es .$ext</p>";
    ?>
    
</body>
</html>