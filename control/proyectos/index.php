<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/estilos.css">


  <title>Proyectos</title>
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
    <main>
       
           <div class="container">
             <?php
             if (isset($_GET["msg"])) {
               $msg = $_GET["msg"];
               echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
               ' . $msg . '
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
             }
             ?>
             <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>
         
             <table class="table table-hover text-center">
               <thead class="table-dark">
                 <tr>
                   <th scope="col">id_proyecto</th>
                   <th scope="col">nombre</th>
                   <th scope="col">categoria</th>
                   <th scope="col">asesor</th>
                   <th scope="col">estado</th>
                   <th scope="col">miembros</th>
                   <th scope="col">multidisciplinario</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                 $sql = "SELECT * FROM registro_proyectos";
                 $result = mysqli_query($conn, $sql);
                 while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                   <tr>
                     <td><?php echo $row["id_proyecto"] ?></td>
                     <td><?php echo $row["nombre"] ?></td>
                     <td><?php echo $row["categoria"] ?></td>
                     <td><?php echo $row["asesor"] ?></td>
                     <td><?php echo $row["estado"] ?></td>
                     <td><?php echo $row["miembros"] ?></td>
                     <td><?php echo $row["multidisciplinario"] ?></td>
                     <td>
                       <a href="edit.php?id=<?php echo $row["id_proyecto"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                       <a href="delete.php?id=<?php echo $row["id_proyecto"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                     </td>
                   </tr>
                 <?php
                 }
                 ?>
               </tbody>
             </table>
           </div>
           
          </main>
</body>

</html>