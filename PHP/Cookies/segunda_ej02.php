<?php
    $nombre = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

    session_start();
    $_SESSION['nombreweb'] = $nombre;

    header('Location: tercera_ej03.php')
?>