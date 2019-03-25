<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">

        <title>Ejercicio 22</title>
    </head>
    <body>
        <div class="container">
            <?php
                if (isset($_REQUEST['error'])) {
                    print "<div class='alert alert-danger' role='alert'>$_REQUEST[error]</div>";
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
                <input class="btn btn-danger" type="submit" value="Borrar">
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>