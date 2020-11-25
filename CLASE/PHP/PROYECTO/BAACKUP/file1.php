<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Visualización</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    <style>
        body {
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23220000' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23440000' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23660000' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%23880000' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%23A00' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Concert One', cursive;
        }
    </style>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "estacion")
        or die("Problemas de conexión");
    ?>
    <div class="container" style="background-color: rgb(255,255,255, 0.5)">
        <!-- 
            ############################
                      NAVBAR 
            ############################
        -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="file1.php">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link3</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Escribe aquí..." aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <!-- 
            ############################
                     FIN NAVBAR 
            ############################
        -->
        
        <h1 class="display-1 text-center">Estación Meteorológica</h1>
        
        <!-- 
            ############################
                  FORMULARIO INLINE
            ############################
        -->


        <form class="form-inline text-center justify-content-center" role="form" action="file1.php">
            <label class="align-middle" for="fechadesde">Fecha desde:</label>
            <input type="date" class="form-control mb-2 mr-sm-2" name="fechadesde" id="inlineFormInputName2">

            <label class="align-middle" for="fechahasta">Fecha hasta:</label>
            <input type="date" class="form-control mb-2 mr-sm-2" name="fechahasta" id="fechahasta">

            <label class="align-middle" for="tipome">Tipo Medida:</label>
            <select class="form-control mb-2 mr-sm-2" name="tipome" id="tipome">
                <?php
                    $tipos = mysqli_query($conexion, "SELECT * FROM variables")
                        or die("Problemas en la consulta: ".mysqli_error($conexion));

                    while ($reg = mysqli_fetch_array($tipos)) {
                        echo "<option value='$reg[Id]'>$reg[Nombre]</option>";
                    }
                ?>
            </select>

            <label class="align-middle" for="valor">Valor Medida:</label>
            <input type="range" class="form-control mb-2 mr-sm-2" name="valor" id="valor">

            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
        </form>



        <!-- 
            ############################
               FIN FORMULARIO INLINE
            ############################
        -->

        <!-- 
            #####################################
                  CÓDIGO PHP MOSTRAR DATOS 
            #####################################
        -->
        <?php
            if (!empty($_REQUEST)) {
                //SI NO ESTÁ VACÍO EL REQUEST, CON LOS CAMPOS DADOS, HAY 7 POSIBILIDADES
                //Y POR LO TANTO, 7 QUERIES

                //FALTA POR HACER RESTRICCIÓN DE QUE RELLENE OBLIGATORIAMENTE AMBOS CAMPOS DE FECHA
                
                //HAY FALLO DENTRO DE ESTE IF, PROBABLEMENTE FALLO DE TIPO DE DATOS POR LAS VARIABLES Y FECHAS 
                
                if (!empty($_REQUEST["fechadesde"])) { //Si entra aquí quiere decir que se rellenaron los campos de fecha
                    if (!empty($_REQUEST["fechadesde"]) && !empty($_REQUEST["fechahasta"]) && empty($_REQUEST["tipome"]) && empty($_REQUEST["valor"])) {
                        //PRIMERA POSIBILIDAD
                        $fechadesde = $_REQUEST["fechadesde"];
                        $fechahasta = $_REQUEST["fechahasta"];

                        $f1f2 = mysqli_query($conexion,
                                                "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                                                    from variables v
                                                        INNER JOIN medidas m ON v.Id = m.Variables_Id
                                                        INNER JOIN sensores s ON m.Sensores_Id = s.Id
                                                        where m.Fecha_Hora BETWEEEN $fechadesde AND $fechahasta")
                                            or die("Problemas en la consulta:".mysqli_error($conexion));

                    } elseif () {
                        //SEGUNDA POSIBILIDAD
                        # code...
                    } elseif () {
                        //TERCERA POSIBILIDAD
                        # code...
                    } else {
                        //CUARTA POSIBILIDAD
                        # code...
                    }
                } else { //Si entra aquí quiere decir que no se rellenaron los campos de fecha
                    # code...
                }

                //VARIABLES DE RESERVA PARA CUANDO LAS NECESITE
                //$tipome = trim(htmlspecialchars(strip_tags($_REQUEST["tipome"]), ENT_QUOTES, "UTF-8"));
                //$valor = trim(htmlspecialchars(strip_tags($_REQUEST["valor"]), ENT_QUOTES, "UTF-8"));
                
            } else {
                $completo=mysqli_query($conexion,
                                        "select m.Fecha_Hora f, v.Nombre t, m.Valor v, v.Ud_Med u, s.Id i
                                            from variables v
                                            INNER JOIN medidas m ON v.Id = m.Variables_Id
                                            INNER JOIN sensores s ON m.Sensores_Id = s.Id")
                or die("Problemas en la consulta:".mysqli_error($conexion)); ?>


                <table class="table table-striped table-dark text-center">
                    <thead>
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Unidad Medida</th>
                            <th scope="col">Sensor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($comp = mysqli_fetch_array($completo)) {
                            echo "<tr>";
                                echo "<td scope='row'>" . $comp['f'] . "</td>";
                                echo "<td>" . $comp['t'] . "</td>";
                                echo "<td>" . $comp['v'] . "</td>";
                                echo "<td>" . $comp['u'] . "</td>";
                                echo "<td>" . $comp['i'] . "</td>";
                            echo "</tr>"; 
                        }
                        ?>
                    </tbody>
                </table> <?php
            }






      
        ?>
   
        <!-- 
            #####################################
                 FIN CÓDIGO PHP MOSTRAR DATOS 
            #####################################
        -->

        <!-- 
            ############################
                     CRÉDITOS 
            ############################
        -->
        <div>
            <hr>
            <p style="text-align: center">Desarrollado en el <a href="https://www.iesciudadjardin.es/">IES Ciudad Jardín</a> con mucho ❤ y ☕</p>
            <p style="text-align: center">por el grupo 1º ASIR 🤓👍</p>
        </div>
    
        <!-- 
            ############################
                   FIN CRÉDITOS 
            ############################
        -->

   
   
   
    </div>
    <!-- 
        ############################
               FIN CONTAINER 
        ############################
    -->

    

  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>