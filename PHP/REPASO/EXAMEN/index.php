<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">

        <title>Examen</title>
    </head>
    <body>
        <div class="container">
            <!-- Realice el siguiente ejercicio:
                Muestra una consulta de todos los productos de la tabla productos mostrando el nombre completo del proveedor del producto.
                Además, muestre un mensaje indicando el precio total de todos los productos y la cantidad de productos. Añade un botón para
                insertar un producto en la base de datos. Muestra en el formulario todos los proveedores que existen en la tabla de proveedores. -->

            <form action="insertar.php">
                <table>
                    <tr>
                        <td><label for="descripcion">Nombre del producto: </label></td>
                        <td><input type="text" name="descripcion" id="descripcion"></td>
                    </tr>

                    <tr>
                        <td><label for="cantidad">Cantidad: </label></td>
                        <td><input type="number" name="cantidad" id="cantidad"></td>
                    </tr>

                    <tr>
                        <td><label for="precio">Precio: </label></td>
                        <td><input type="number" name="precio" id="precio"></td>
                    </tr>

                    <tr>
                        <td><label for="idProveedor">Proveedor: </label></td>
                        <td><select name="idProveedor" id="idProveedor">
                            <?php
                            $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "bdejemplo") 
                                or die("Problemas de conexión");
        
                            $registros = mysqli_query($conexion, "SELECT idProveedor, nombre FROM proveedores")
                                or die("Problemas en el select".mysqli_error($conexion));
        
                            while ($reg = mysqli_fetch_array($registros)) {
                                echo "<option value='$reg[idProveedor]'>$reg[nombre]</option>";
                            }
                            ?>
                        </select></td>
                    </tr>
                </table>

                <input type="submit" value="Añadir">
            </form>

            <br />

            <form action="consulta.php">
                <input type="submit" value="Consulta">
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>