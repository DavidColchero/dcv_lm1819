<?php
    $nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
    if ($nombre != "") {
    print "<p>Su nombre es $nombre</p>";
    }
    if (isset($_REQUEST["opcion"])) {
        print "<p>Opción marcada</p>";
    }


    print_r($_REQUEST);
    print_r($_FILES);
    //Formulario que pida la edad y si ha puesto un numero nos diga el numero que hemos puesto y si no es un numero que de error.
?>

