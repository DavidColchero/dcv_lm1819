<?php
    /*Realice un formulario que introduzca dos valores (pies y pulgadas)
    y los convierta a centímetros. Los pies deben ser un número entero mayor o igual que cero.
    
    Las pulgadas son un número entero o decimal mayor o igual que cero. Un pie son doce pulgadas
    y una pulgada son 2,54 cm.*/

    $pies = trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES, "UTF-8"));
    $pulgadas = trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES, "UTF-8"));

    $piesok = false;
    $pulgadasok = false;

    define('UNAPULGADA', 2.54);

    if (empty($pies)) {
        echo "<p>El campo 'pies' está vacío.</p>";
    } else if (!filter_var($pies, FILTER_VALIDATE_INT)) {
        echo "<p>El campo 'pies' no es un número entero.</p>";
    } else if ($pies < 0) {
        echo "<p>Error: El campo 'pies debe ser mayor o igual a 0.'</p>";
    } else {
        $piesok = true;
    }

    if (empty($pulgadas)) {
        echo "<p>El campo 'pulgadas' está vacío.</p>";
    } else if (!filter_var($pulgadas, FILTER_VALIDATE_FLOAT)) {
        echo "<p>El campo 'pulgadas' no es un número decimal.</p>";
    } else if ($pulgadas < 0) {
        echo "<p>Error: El campo 'pulgadas' debe ser mayor o igual a 0.'</p>";
    } else {
        $pulgadasok = true;
    }

    if ($piesok && $pulgadasok) {
        $cm = ($pies * 12 + $pulgadas) * UNAPULGADA;
        echo "$pies pies y $pulgadas pulgadas son $cm centímetros.";
    }
?>