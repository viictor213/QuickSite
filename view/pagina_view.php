<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
</head>
<body>
  <div  style="float:left">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Crea una cuenta</h4>
    <p class="text-center">Empieza a difrutar de QuickSite</p>
    <form method="post">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
         </div>
        <input name="fullnameReg" class="form-control" placeholder="Nombre completo" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="emailReg" class="form-control" placeholder="Email " type="email" size="100px">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="userReg" class="form-control" placeholder="Nombre de Usuario" type="text" size="100px">
        </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="passwdReg" class="form-control" placeholder="Contrase&ntilde;a" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock-open"></i> </span>
        </div>
        <input class="form-control" placeholder="Repite la contrase&ntilde;a" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-calendar-alt" min="1920-01-01" max="2010-12-31" required></i> </span>
         </div>
        <input name="birthReg" class="form-control" type="date" size="100px">
    </div> <!-- form-group// -->
    <div class="form-group">
        <button type="submit" name="reg" class="btn btn-primary btn-block"> ¡Registrate!  </button>
    </div> <!-- form-group// -->
  </form>
</article>
</div> <!-- card.// -->

</div>
<!--container end.//-->
</form>

</body>
</html>
