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
            <table class="table table-striped">
                <tr>
                    <th scope="col">idProductos</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">idProveedor</th>
                </tr>
                <?php
                    $conexion = mysqli_connect("localhost", "lm_1819", "Kilobyte1", "bdejemplo") 
                        or die("Problemas de conexión");
                
                    $registros_prod = mysqli_query($conexion, "SELECT * FROM productos")
                        or die("Problemas en el select".mysqli_error($conexion));

                    $registros_prov = mysqli_query($conexion, "SELECT nombre FROM proveedores")
                        or die("Problemas en el select".mysqli_error($conexion));

                    $reg_prov = mysqli_fetch_array($registros_prov);

                    while ($reg_prod = mysqli_fetch_array($registros_prod)) {
                        print "
                        <tr>
                            <th scope='row'>$reg_prod[idProductos]</td>
                            <td>$reg_prod[descripcion]</td>
                            <td>$reg_prod[cantidad]</td>
                            <td>$reg_prod[precio]</td>
                            <td>$reg_prov[nombre]</td>
                        </tr>";
                    }
                ?>
            </table>

            <!--
    //Precio total de los productos y la cantidad total de productos
        echo "<br/>";
        $total = mysqli_query($conexion, "SELECT sum(precio) AS total from productos")
            or die("Problemas en el select".mysqli_error($conexion));
        $cantidad = mysqli_query($conexion, "SELECT sum(cantidad) AS cantidad FROM productos")
            or die("Problemas en el select".mysqli_error($conexion));
        while ($tot = mysqli_fetch_array($total)) {
            echo "Valor total de los productos: $tot[total]";
            echo "<br/>";   
        }
        while ($cant = mysqli_fetch_array($cantidad)) {
            echo "Cantidad total de productos: $cant[cantidad]";
            echo "<br/>";   
        }
            -->

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