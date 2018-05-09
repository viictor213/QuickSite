<!DOCTYPE html>
<html>
<head>
    <title>GitWeb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="icon" type="image/png" href="resources/git.sh.png">
    <script src="scripts/home.js"></script>
</head>
<body>
<form method="post">
    <ul>
        <li><a href="index.php"><img src="resources/git.sh.png" id="logoImg"></a></li>
        <li id="titleWeb">GitWeb</li>
        <li id="inicioSesion"><input type="text" name="user" placeholder="Usuario" required>
        <input type="password" name="passwd" placeholder="Contrase&ntilde;a" required id="orderSesion">
        <input type="submit" name="login" value="Entrar" id="buttonIniciar" style="color: white"></li>
    </ul>
</form>
<?php

require_once("controller/pagina_controller.php");

?>
</body>
</html>
