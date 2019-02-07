<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambla Multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <style>
        .tablas {
            float: left;
            background: grey;
            margin: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php 
        for ($i=1; $i <= 10; $i++) {
            print "<div class='tablas'>";
            for ($j=1; $j <= 10; $j++) { 
                $resultado = $i*$j;
                print $i . "x" . $j . "=" . $resultado;
            }
            print "</div>";
        }
    ?>
    
</body>
</html>