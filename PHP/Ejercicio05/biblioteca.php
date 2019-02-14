<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>

<?php
    function cabecera($titulo) {
        print '<!DOCTYPE html>';
        print '<html>';
        print '<head>';
        print '<meta charset="utf-8">';
        print '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        print '<title>Page Title</title>';
        print '<meta name="viewport" content="width=device-width, initial-scale=1">';
        print '<link rel="stylesheet" type="text/css" media="screen" href="main.css">';
        print '<script src="main.js"></script>';
        print '</head>';
        print '<body>';
        print '<h1></h2>'
    }

    function pie() {
        print '</body>';
        print '</html>';
    }
?>