<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $nombre = $_POST['nombre'];
   $categoria = $_POST['categoria'];
   $asesor = $_POST['asesor'];
   $estado = $_POST['estado'];
   $miembros = $_POST['miembros'];
   $multidisciplinario = $_POST['multidisciplinario'];


   $sql = "INSERT INTO `registro_proyectos`(`id_proyecto`, `nombre`, `categoria`, `asesor`, `estado`, `miembros`, `multidisciplinario`) VALUES (NULL,'$nombre','$categoria','$asesor','$estado','$miembros','$multidisciplinario')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/estilos.css">


   <title>Actualizar</title>
</head>

<body>
<header style="background-color: #4C586F;">

    <h2 style="margin-left: 250px; font-weight:bold; color: #fff;">Proyectos</H2>
   
</header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-lightbulb"></i>
            <h4>IDEATEC 2023</h4>
        </div>

        <div class="options__menu">	

            <a href="../dash.html" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
       
                </div>
            </a>

            <a href="../usuarios/index.php">
                <div class="option">
                <i class="far fa-id-badge" title="Usuarios"></i>
             
                </div>
            </a>
            
            <a href="index.php">
                <div class="option">
                <i class="far fa-sticky-note" title="Proyectos" style="background-color: rgb(218, 218, 218); color: gray;"></i>
                   
                </div>
            </a>

            <a href="../conferencias/index.php">
                <div class="option">
                <i class="fas fa-video" title="Conferencias"></i>
                 
                </div>
            </a>

            <a href="../evaluadores/index.php">
                <div class="option">
                    <i class="far fa-address-card" title="Evaluadores"></i>
              
                </div>
            </a>

        </div>

    </div>
    <div class="container">
      <div class="text-center mb-4">
         <h3>Añadir un Proyecto</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Nombre:</label>
                  <input type="text" class="form-control" name="nombre">
               </div>

               <br>
               <select class="form-label" id="Categoria" name="categoria" style="margin-top: 30px; width: 405px; height: 40px; border-radius: 8px;">
                    <option selected disabled value="">Categoria</option>
                    <option value="Desarrollo Tecnologico">Desarrollo Tecnologico</option>
                    <option value="Investigacion">Investigacion</option>
                    <option value="Diseño">Diseño</option>                                                                                            
               </select>
               <br>
               <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Asesor:</label>
                  <input type="text" class="form-control" name="asesor" style="width:700px">
               </div>

               <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Estado de Desarrollo:</label>
                  <input type="text" class="form-control" name="estado" style="width:700px">
               </div>

               <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Miembros:</label>
                  <input type="text" class="form-control" name="miembros" style="width:700px">
               </div>

               <select class="form-label" id="multidisciplinario" name="multidisciplinario" style="margin-top: 30px; margin-left:10px; width: 305px; height: 40px; border-radius: 8px;">
                    <option selected disabled value="">¿Tu Proyecto es Multidisciplinario?</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>                                                                                            
               </select>


            <div>
               <button type="submit" class="btn btn-success" name="submit" >Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

</html>