<!DOCTYPE html>
<html>
<head>
    <title>QuickSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="icon" type="image/png" href="resources/git.sh.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <img src="resources/LogoIn.png" style="width: 50px; margin-right: 10px">
  <a class="navbar-brand" href="#" style="font-family: Passion One;font-size: 40px">QUICKSITE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" style="font-family: roboto;font-size: 17px" href="#"><i class="fas fa-home" style="margin-right: 5px"></i>Inicio</a>
      <a class="nav-item nav-link active" style="font-family: roboto;font-size: 17px" href="#"><i class="fas fa-user-circle"style="margin-right: 5px"></i>Perfil</a>
      <a class="nav-item nav-link active" style="font-family: roboto;font-size: 17px" href="#"><i class="fas fa-cog"style="margin-right: 5px"></i>Ajustes</a>
    </div>
  </div>
</nav>
<?php

  require_once('controller/pagina_controller_home.php');

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="scripts/home.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
