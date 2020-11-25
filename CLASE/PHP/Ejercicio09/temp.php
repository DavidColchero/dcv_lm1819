<?php
    $grados = trim(htmlspecialchars($_REQUEST["grados"], ENT_QUOTES, "UTF-8"));
    $tipo = trim(htmlspecialchars($_REQUEST["tipo"], ENT_QUOTES, "UTF-8"));

    if (empty($grados)) {
        echo "Error: El campo 'Gados' está vacío.";
    } else if (!is_numeric($grados)) {
        echo "Error: El campo 'Grados' debe ser un número.";
    } else if ($grados < -273.15 && $tipo == "c") {
        echo "Error: En grados Celsius no debe ser un número inferior a -273.15";
    } else if ($grados < -459.67 && $tipo == "f") {
        echo "Error: En grados Fahrenheit no debe ser un número inferior a -459.67";
    } else {
        if ($tipo == "c") {
            $resFar = ($grados * 1.8);
        } else {
            $resCels = ($grados - 32)
        }
    }
?>