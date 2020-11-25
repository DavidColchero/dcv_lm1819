<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Primero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div>
        <?php
            if (isset()) {
                # code...
            }
        ?>
    </div>
    <form method="POST" action="segundo.php">
        <p>
            <label for="user">Usuario: </label>
            <input type="text" name="user" id="user" value="<?php
                if (isset($_COOKIE["usuarioWeb"])) {
                    echo $_COOKIE["usuarioWeb"];
                }?>" />
        </p>

        <p>
            <label for="pass">Contraseña: </label>
            <input type="text" name="pass" id="pass" value="" />
        </p>

        <p>
            <input type="submit" value="Enviar" />
        </p>
    </form>
    
</body>
</html>