<!DOCTYPE html>
<html lang="en">
<head>
  <title>Responsive Sidebar</title>
  <!-- Link Styles -->
  <link rel="stylesheet" href="css/dashstyle.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
      <i class="lgo"></i>
      
        <div class="logo_name"><img src="imgDash/logo.png" width="120px"></div>
  
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>

        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">IDEATEC 2023</span>
        </a>

        <span class="tooltip">Dashboard</span>
      </li>
      <li>

        <a href="#">
          <i class="bx bx-user"></i>
          <span class="link_name">Usuarios</span>
        </a>
        <span class="tooltip">Usuario</span>
      </li>


      <li>
        <a href="#">
        <i class='bx bx-receipt'></i>
          <span class="link_name">Proyectos</span>
        </a>
        <span class="tooltip">Proyectos</span>
      </li>


      <li>
        <a href="#">
          <i class='bx bx-chair' ></i>
          <span class="link_name">Conferencias</span>
        </a>
        <span class="tooltip">Conferencias</span>
      </li>


      <li>
        <a href="#">
          <i class='bx bxs-user-account'></i>
          <span class="link_name">Evaluadores</span>
        </a>
        <span class="tooltip">Evaluadores</span>
      </li>


      <li class="profile">
        <div class="profile_details">
          <img src="imgDash/admin.png" alt="profile image">
          <div class="profile_content">
            <div class="name">Administrador</div>
            <div class="designation">Admin</div>
          </div>
        </div>
        <i class="bx bx-log-out"id="log_out"></i>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">Dashboard</div>
  </section>
  <!-- Scripts -->
  <script src="script.js"></script>
</body>
</html>