<!DOCTYPE html>
<html>
<head>
    <title>QuickSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link rel="icon" type="image/png" href="resources/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <img src="resources/LogoIn.png" style="width: 50px; margin-right: 10px">
  <a class="navbar-brand" href="home.php" style="font-family: Passion One;font-size: 40px">QUICKSITE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                      <h5 class="text-center">Iniciar Sesion</h5>
                       <li class="px-3 py-2">
                           <form method="post">
                                <div class="form-group">
                                    <input name="user" placeholder="Usuario" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input name="passwd" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
    </div>
  </div>
</nav>
<?php

    require_once('controller/pagina_controller.php');

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>