<?php 
    $correo = $_REQUEST["email"];
    $reemail = $_REQUEST["confirm"];
    $noticias = $_REQUEST["noticias"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print "Error en el email.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print "Error en el email de confirmación.";
    } else if ($email != $reemail) {
        print "Debe coincidir el email de confirmación.";
    } else if ($noticias == -1) {
        print "Debe indicar si desea recibir noticias.";
    } else if (condition) {
        # code...
    }
?>
=================================================================
<?php
$seg = $_REQUEST["seg"];
$min = 0;
if (is_numeric($seg)) {
    if ($seg >= 0) {
        if ($seg <= 60) {
            print "Ha introducido $seg segundos";
        } else {
            while ($seg > 59) {
                $seg = $seg-60;
                $min++;
            }
            print "Ha introducido $min minutos y $seg segundos";
        }
    } else {
        print "$seg No es una cantidad de segundos correcta";
    }
} else {
    print "Debe introducir un número";
}
?>