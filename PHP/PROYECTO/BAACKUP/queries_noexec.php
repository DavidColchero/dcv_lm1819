<?php
//AVISO AVISO AVISO AVISO AVISO AVISO AVISO AVISO AVISO AVISO AVISO 
//1. Este archivo no es un ejecutable
//2. Contiene todas las queries posibles una vez aplicados los filtros sobre la tabla de visualización de datos

//TABLAS IMPORTANTES QUE CONTIENEN LOS DATOS NECESARIOS PARA MOSTRAR DATOS, Y CON LAS QUE SE HACEN LOS JOIN
sensores
medidas
variables

// NOMBRE DE LOS CAMPOS EN ESTE ARCHIVO
f1 = fechadesde
f2 = fechahasta
tm = tipome
vm = valor

//EXPLICACIÓN DE LAS POSIBILIDADES CON LAS QUERIES
// ÚNICA REGLA IMPUESTA: Si se rellena un campo de fecha, el otro debe estar relleno obligatoriamente
// POR LO QUE EMERGEN 2 CASUÍSTICAS (y 7 posibles queries en total)

QUE SE HAYAN SELECCIONADO FECHAS (los números representan los campos cogidos para el filtro, por ejemplo, 1 sería el campo 1, osea fechadesde)
1-2
1-2-3
1-2-4
1-2-3-4

QUE NO SE HAYAN SELECCIONADO FECHAS
3-4
3
4

//APARTADO CON TODAS LAS QUERIES, POSIBILIDADES
//APARTADO CON TODAS LAS QUERIES, POSIBILIDADES
//APARTADO CON TODAS LAS QUERIES, POSIBILIDADES
//APARTADO CON TODAS LAS QUERIES, POSIBILIDADES


//QUERY FECHA 1 + FECHA 2
//POSIBILIDAD 1

$f1f2 = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta'")
        or die("Problemas en la consulta:".mysqli_error($conexion));



//QUERY FECHA 1 + FECHA 2 + TIPO MEDIDA
//POSIBILIDAD 2

$f1f2tm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta'
                            AND v.Id = $tipome")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY FECHA 1 + FECHA 2 + VALOR MEDIDA
//POSIBILIDAD 3

$f1f2vm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta'
                            AND m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY FECHA 1 + FECHA 2 + TIPO MEDIDA + VALOR MEDIDA
//POSIBILIDAD 4
$f1f2tmvm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta']
                            AND v.Id = $tipome
                            AND m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY TIPO MEDIDA + VALOR MEDIDA
//POSIBILIDAD 5
$tmvm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            v.Id = $tipome
                            AND m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));


//QUERY TIPO MEDIDA
//POSIBILIDAD 6
$tm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            v.Id = $tipome")
        or die("Problemas en la consulta:".mysqli_error($conexion));


//QUERY VALOR MEDIDA
//POSIBILIDAD 7
$vm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));

?>
