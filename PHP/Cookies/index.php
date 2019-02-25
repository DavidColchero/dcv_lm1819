<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <form action="almacenar.php">
        <p>
            <label for="correo">Correo electrónico: </label>
            <input type="email" name="correo" id="correo">
        </p>

        <p>
            <label for="pass">Contraseña: </label>
            <input type="password" name="pass" id="pass">
        </p>

        <p>
            <label for="recordar">¿Recordar correo?</label>
            <input type="checkbox" name="recordar" id="recordar">
        </p>

        <p><input type="submit" value="Enviar"></p>
    </form>
    
</body>
</html>