<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $nombre = $_POST['nombre'];
  $categoria = $_POST['categoria'];
  $asesor = $_POST['asesor'];
  $estado = $_POST['estado'];
  $miembros = $_POST['miembros'];
  $multidisciplinario = $_POST['multidisciplinario'];

  $sql = "UPDATE `registro_proyectos` SET `nombre`='$nombre',`categoria`='$categoria',`asesor`='$asesor',`estado`='$estado',`miembros`='$miembros',`multidisciplinario`='$multidisciplinario' WHERE id_proyecto = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
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
  
  <title>actualizar</title>
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
          4>
                </div>
            </a>

        </div>

    </div>


  <div class="container">
    <div class="text-center mb-4">
      <h3>Actalizar la informacion del Proyecto</h3>
    </div>

    <?php
    $sql = "SELECT * FROM `registro_proyectos` WHERE id_proyecto = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Categoria</label>
            <input type="text" class="form-control" name="categoria" value="<?php echo $row['categoria'] ?>">
          </div>
        </div>

        <div class="col">
            <label class="form-label">Asesor</label>
            <input type="text" class="form-control" name="asesor" value="<?php echo $row['asesor'] ?>">
          </div>
        </div>
        <div class="col">
            <label class="form-label" style="margin-left:215px; margin-top: 15px;">Estado de Desarrollo</label>
            <input type="text" class="form-control" style="margin-left:215px; width:450px;"name="estado" value="<?php echo $row['estado'] ?>">
          </div>
        </div>
        <div class="col">
            <label class="form-label" style="margin-left:300px; margin-top: 15px;">Miembros</label>
            <input type="text" class="form-control" style="margin-left:300px; width:680px;" name="miembros" value="<?php echo $row['miembros'] ?>">
          </div>
        </div>

        <div class="col">
            <label class="form-label" style="margin-left:300px; margin-top: 15px;">Multidisciplinario</label>
            <input type="text" class="form-control" style="margin-left:300px; width:680px;" name="multidisciplinario" value="<?php echo $row['multidisciplinario'] ?>">
          </div>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit" style="margin-left:500px; margin-top:15px;">Actualizar</button>
          <a href="index.php" class="btn btn-danger"style="margin-left:100px; margin-top:15px;">Cancelar</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>