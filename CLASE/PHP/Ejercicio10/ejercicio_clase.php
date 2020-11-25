<?php
    $num = trim(htmlspecialchars($_REQUEST["num"], ENT_QUOTES, "UTF-8"));

    if (empty($num)) {
        echo "Error: El campo está vacío.";
    } else if (!is_numeric($num)) {
        echo "Error: El campo debe ser un número.";
    } else if ($num < 1 || $num > 100) {
        echo "Error: Debe indicar un número entre 1 y 100.";
    } else {
        for ($i = 1; $i <= 10; $i++) { 
            $res = ($num*$i);

            echo "<p>$num X $i = $res</p>";
        }
    }
?>