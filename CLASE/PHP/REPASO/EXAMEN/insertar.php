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
            
            <?php
                $descripcion = trim(htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES, "UTF-8"));
                $cantidad = trim(htmlspecialchars($_REQUEST["cantidad"], ENT_QUOTES, "UTF-8"));
                $precio = trim(htmlspecialchars($_REQUEST["precio"], ENT_QUOTES, "UTF-8"));
                $proveedor = trim(htmlspecialchars($_REQUEST["idProveedor"], ENT_QUOTES, "UTF-8"));
 
                $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "bdejemplo")
                     or die("Problemas de conexión.");
                 
                 mysqli_query($conexion,
                     "INSERT INTO productos(descripcion, cantidad, precio, idProveedor) VALUES ('$descripcion', '$cantidad', '$precio', '$proveedor')")
                     or die("Problemas en el insert" . mysqli_error($conexion));
 
                 mysqli_close($conexion);
 
                 print "<h2>Producto añadido correctamente</h2>"
            ?>

            <form action="index.php">
                <input type="submit" value="Volver">
            </form>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>