<?php
include('db.php');
$correo=$_POST['correo'];
$password=$_POST['password'];



$consulta="SELECT*FROM usuario where correo='$correo' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:control/dash.html");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <span class="mensaje">Error de Autentificacion</span>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
