<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pregunta 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

    <?php
        $numeros = rand(1, 10);
        if ($numeros > 5) {
            print "<p style='color: blue'>El valor " . $numeros . " es mayor que 5.</p>";
        } elseif ($numeros == 5) {
            print "<p style='color: green'>El valor es 5.</p>";
        } else {
            print "<p>El valor es menor que 5.</p>";
        }
    ?>
    
</body>
</html>