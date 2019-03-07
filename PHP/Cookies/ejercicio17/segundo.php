<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Segundo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $usuario = trim(htmlspecialchars($_REQUEST["user"], ENT_QUOTES, "UTF-8"));
        $password = trim(htmlspecialchars($_REQUEST["pass"], ENT_QUOTES, "UTF-8"));

        if (empty($usuario) || empty($password)) {
            header('location: primero.php?error=Debe rellenar los campos');
        } else if ($password != "1234") {
            header('location: primero.php?error=Password incorrecta');
        } else {
            setcookie("usuarioWeb", $usuario, time()+60*60*24*365);

            session_start();
            $_SESSION['nombreUsuario'] = $usuario;
    ?>
    <div style="margin: 0 auto; width: 200px">
            <form method="GET" action="tercero.php">
                <p>
                    <label for="edad">Edad: </label>
                    <input type="date" name="edad" id="edad">
                </p>

                <p>
                    <input type="submit" value="Enviar">
                </p>
            </form>

    </div>
    <?php
        }
    ?>
    
</body>
</html>