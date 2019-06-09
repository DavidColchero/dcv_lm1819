<?php
    header('Content-type: text/xml; charset="iso-8859-1"', true);
    echo '<?xml version="1.0" encoding="iso-8859-1"?>';

    $conexion = mysqli_connect("localhost", "id9406", "Kilobyte1", "cursophp")
        or die("Problemas en la conexión.");

    $registros = mysqli_query($conexion, "SELECT * FROM NOTICIAS ORDER BY fecha desc")
        or die("Problemas en la consulta.".mysqli_error($conexion));
?>