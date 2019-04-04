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

        <title>Paginación</title>
    </head>
    <body>
        <div class="container">
            <form action="consulta.php" method="POST">
                <div class="formu">
                    <table>
                        <tr>
                            <td><label for="f_desde">Fecha desde: </label></td>
                            <td><input class="form-control" type="date" name="f_desde" id="f_desde"></td>
                        </tr>

                        <tr>
                            <td><label for="f_hasta">Fecha hasta: </label></td>
                            <td><input class="form-control" type="date" name="f_hasta" id="f_hasta"></td>
                        </tr>

                        <tr>
                            <td><label for="tipo_medida">Tipo medida: </label></td>
                            <td><select class="form-control" name="tipo_medida" id="tipo_medida">
                                    <option value="0" selected>--- Selecciona ---</option>
                                    <option value="1">Prueba 1</option>
                                    <option value="2">Prueba 2</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label for="valor">Valor medida: </label></td>
                            <td><input class="form-control" type="text" name="valor" id="valor"></td>
                        </tr>
                    </table>
                </div>

                <div class="submit">
                    <input class="btn btn-primary btn-lg active" type="submit" value="Buscar">
            </form>
            <br>
            <br>
                    <form action="index.php">
                        <input class="btn btn-primary btn-lg active" type="submit" value="Consulta">
                    </form>
                </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>