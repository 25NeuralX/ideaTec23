<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $numerocontrol=$_POST['numerocontrol'];
    $conferencia=$_POST['conferencia'];
    $carrera=$_POST['carrera'];
    $grupo=$_POST['grupo'];
    $correo=$_POST['correo'];
    $asiento=$_POST['asiento'];

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h4></h4</b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "ideatec2023";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Datos:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO conferencias (nombre, apellido, numerocontrol, conferencia, carrera, grupo, correo, asiento)
                             VALUES ('$nombre','$apellido','$numerocontrol','$conferencia','$carrera','$grupo', '$correo','$asiento')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM conferencias ORDER BY id_conferencia DESC LIMIT 1";//nombre de la tabla a consultar
        $result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h5>id_conferencia</th></h5>";
echo "<th><h6>nombre</th></h6>";
echo "<th><h7>apellido</th></h7>";
echo "<th><h8>numerocontrol</th></h8>";
echo "<th><h9>conferencia</th></h9>";
echo "<th><h10>carrera</th></h10>";
echo "<th><h11>grupo</th></h11>";
echo "<th><h12>correo</th></h12>";
echo "<th><h13>asiento</th></h13>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";    
    echo "<td><h14>" . $colum['id_conferencia']. "</td></h14>";
    echo "<td><h15>" . $colum['nombre']. "</td></h15>";
    echo "<td><h16>" . $colum['apellido']. "</td></h16>";    
    echo "<td><h17>" . $colum['numerocontrol']. "</td></h17>";
    echo "<td><h18>" . $colum['conferencia']. "</td></h18>";
    echo "<td><h19>" . $colum['carrera']. "</td></h19>";
    echo "<td><h20>" . $colum['grupo']. "</td></h20>";
    echo "<td><h21>" . $colum['correo']. "</td></h21>";
    echo "<td><h22>" . $colum['asiento']. "</td></h22>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="conferencias.html"> Volver Atrás</a>';


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <title>registro</title>
    <style>
body{
  display: flex;
  justify-content: center;
  background-image: linear-gradient(
        80deg,
        rgba(0, 0, 0, 0.788),
        rgba(0, 0, 0, 0.705)
    )
    ,url("img/opt2.jpg");
  background-position: center;
  background-repeat: no-repeat;
}
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 15%;
}

table td, table th {
  border: 1px solid #424E61;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #fff;}

table th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: left;
  background-color: #424E61;
  color: white;
}
@media (max-width: 375px){
    table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 15%;
}
}
</style>
</head>
<body>

</body>
</html>
