<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Almacenar Cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php
        $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

        if (isset($_REQUEST['recordar'])) {
            setcookie("mailUsu", $email, time()+60*60*24)
        }
    ?>
    
</body>
</html>