<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pregunta 03</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php 
        $uno = 3;
        $dos = 6;
        $tres = 3;

        $sum1 = $uno+$dos;
        $sum2 = $uno+$tres;
        $sum3 = $dos+$tres;

        if ($uno == $sum3) {
            print "<p>El número $uno es igual a la suma de $dos y $tres.</p>";
        } else if ($dos == $sum2) {
            print "<p>El número $dos es igual a la suma de $uno y $tres.</p>";
        } else {
            print "<p>El número $tres es igual a la suma de $uno y $dos.</p>";
        }
    ?>
    
</body>
</html>