<?php
    $autor = trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "UTF-8"));
    $titulo = trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8"));
    $categoria = trim(htmlspecialchars($_REQUEST["categoria"], ENT_QUOTES, "UTF-8"));
    $fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
    $texto = trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("db4free.net", "adminies", "Adminies", "bdrss")
        or die("Problemas en la conexión.");

    $registros = mysqli_query($conexion, "INSERT INTO noticias(autor, titulo, categoria, fecha, texto)
        VALUES ('$autor','$titulo','$categoria','$fecha','$noticia')")
        or die("Problemas en la consulta.".mysqli_error($conexion));
    
    /*
    $registros = mysqli_query($conexion, "SELECT * FROM ALUMNOS WHERE mail = '$mail'")
        or die("Problemas en la consulta.".mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "DELETE FROM ALUMNOS WHERE mail = '$mail'")
            or die("Problemas en la consulta".mysqli_error($conexion));
        print "<div class='alert alert-primary' role='alert'>
                    <h3>Alumno borrado</h3>
                </div>
                <br/>
                <form action='index.php'>
                    <input class='btn btn-info' type='submit' value='Volver'>
                </form>";
    }else {
        header("Location: index.php?error=Email no encontrado.");
    }
    mysqli_close($conexion);
    */
?>