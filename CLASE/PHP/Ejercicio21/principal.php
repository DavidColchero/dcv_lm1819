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

        <title>Principal</title>
    </head>
    <body>
        <div class="container">
            <form action="datos.php" method="POST">
                <h2>Email</h2>

                <table>
                    <tr>
                        <td><label for="email">Email: </label></td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                </table>
                <br/>
                <input class="btn btn-info" type="submit" value="Buscar">

            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>