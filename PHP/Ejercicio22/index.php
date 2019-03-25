<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        if (isset($_REQUEST['error'])) {
            print "<p style='color: red;'>$_REQUEST[error]</p>"
        }
    ?>
    <form action="borrar.php" method="POST">
        <table>
            <tr>
                <td><label for="mail">Email: </label></td>
                <td><input type="email" name="mail" id="mail"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Borrar">
    </form>
    
</body>
</html>