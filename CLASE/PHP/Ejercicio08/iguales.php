<?php
    /*Escriba un formulario para introducir 3 números (entre 0 y 100). Debe indicar si son iguales,
    si hay dos iguales o si los tres son distintos.*/

    $num1 = trim(htmlspecialchars($_REQUEST["num1"], ENT_QUOTES, "UTF-8"));
    $num2 = trim(htmlspecialchars($_REQUEST["num2"], ENT_QUOTES, "UTF-8"));
    $num3 = trim(htmlspecialchars($_REQUEST["num3"], ENT_QUOTES, "UTF-8"));

    if (empty($num1) || !is_numeric($num1) || $num1 < 0 || $num1 > 100) {
        echo "<p>Error en Número 1.</p>";
    } else if (empty($num2) || !is_numeric($num2) || $num2 < 0 || $num2 > 100) {
        echo "<p>Error en Número 2.</p>";
    } else if (empty($num3) || !is_numeric($num3) || $num3 < 0 || $num3 > 100) {
        echo "<p>Error en Número 3.</p>";
    } else {
        if ($num1 == $num2 && $num2 == $num3) {
            echo "TODOS LOS NÚMEROS SON IGUALES.";
        } else if ($num1 == $num2 || $num2 == $num3 || $num1 == $num3) {
            echo "<p>Hay dos números iguales</p>";
        } else {
            echo "<p>TODOS LOS NÚMEROS SON DISTINTOS.</p>";
        }
    }
?>