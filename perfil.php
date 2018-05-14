<!DOCTYPE html>
<html>
<head>
    <title>QuickSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="icon" type="image/png" href="resources/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <img src="resources/LogoIn.png" style="width: 50px; margin-right: 10px">
    <a class="navbar-brand" href="home.php" style="font-family: Passion One, arial;font-size: 40px">QUICKSITE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <form class="form-inline" method="post">
    <input class="form-control mr-sm-2" type="search" name="searchText" placeholder="Busca usuarios..." aria-label="Search">
    <button class="btn btn-success" type="submit" name="search" style="margin-left:-7px; border-color: white;"><i class="fas fa-search"></i></button>
    </form>
      <a class="nav-item nav-link active" style="font-family: roboto, arial;font-size: 17px" href="home.php"><i class="fas fa-home" style="margin-right: 5px"></i>Inicio</a>
      <a class="nav-item nav-link active" style="font-family: roboto, arial;font-size: 17px" href="perfil.php"><i class="fas fa-user-circle"style="margin-right: 5px"></i>Perfil</a>
      <div class="dropdown">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    <i class="fas fa-cog" style="margin-right: 5px"></i>Ajustes
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt" style="margin-right: 5px"></i>Cerrar Session</a>
  </div>
</div>
    </div>
  </div>
</nav>

<?php
  require_once('controller/pagina_controller_perfil.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="scripts/perfil.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
