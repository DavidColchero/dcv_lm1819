<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
        <?php 
            if (isset($_COOKIE['nombreUsu'])) {
                print "Hola" . $_COOKIE['nombreUsu'];
            } else {
                print "Hola Anónimo";
            }
        ?>
    </p>

    <p><a href="segunda.php">Ir a segunda</a></p>

    
</body>
</html>